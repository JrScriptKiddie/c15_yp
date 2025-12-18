<?php
return [
  0 => [
    'target' => 'Meeting',
    'anyScopeList' => [
      0 => 'Call'
    ],
    'scope' => NULL,
    'field' => NULL
  ],
  1 => [
    'target' => 'Account.options.type',
    'anyScopeList' => NULL,
    'scope' => 'Contact',
    'field' => 'accountType'
  ],
  2 => [
    'target' => 'Account.options.industry',
    'anyScopeList' => NULL,
    'scope' => 'Lead',
    'field' => 'industry'
  ],
  3 => [
    'target' => 'Lead.options.source',
    'anyScopeList' => NULL,
    'scope' => 'Opportunity',
    'field' => 'leadSource'
  ],
  4 => [
    'target' => 'Contact.options.opportunityRole',
    'anyScopeList' => NULL,
    'scope' => 'Opportunity',
    'field' => 'contactRole'
  ]
];
