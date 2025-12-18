<?php
return [
  0 => [
    'target' => 'entityDefs.UserData.fields.auth2FA',
    'scope' => 'User',
    'field' => 'auth2FA'
  ],
  1 => [
    'target' => 'entityDefs.Account.fields.type',
    'scope' => 'Contact',
    'field' => 'accountType'
  ],
  2 => [
    'target' => 'entityDefs.Account.fields.industry.options',
    'scope' => 'Lead',
    'field' => 'industry'
  ],
  3 => [
    'target' => 'entityDefs.Lead.fields.source.options',
    'scope' => 'Opportunity',
    'field' => 'leadSource'
  ],
  4 => [
    'target' => 'entityDefs.Contact.fields.opportunityRole.options',
    'scope' => 'Opportunity',
    'field' => 'contactRole'
  ]
];
