<?php
return [
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => true,
    'sql' => true,
    'sqlFailed' => false
  ],
  'cleanupAppLog' => false,
  'cleanupAppLogPeriod' => '3650 days'
];
