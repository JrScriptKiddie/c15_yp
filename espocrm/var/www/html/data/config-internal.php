<?php
return [
  'database' => [
    'host' => 'espocrm-db',
    'port' => '',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'espocrm',
    'password' => 'espocrm',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => NULL,
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'INFO',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false,
    'databaseHandler' => true,
    'databaseHandlerLevel' => 'NOTICE',
    'sql' => false,
    'sqlFailed' => false
  ],
  'restrictedMode' => false,
  'cleanupAppLog' => false,
  'cleanupAppLogPeriod' => '3650 days',
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1764763055.381005,
  'cryptKey' => '7d31c49a9f1880369cebc474ca41a469',
  'hashSecretKey' => '5c77c23895883c961d66e989fcafacac',
  'defaultPermissions' => [
    'user' => 'www-data',
    'group' => 'www-data'
  ],
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '12.1.2',
  'instanceId' => 'b64c0683-6835-4f6e-8c4a-161e45f91c2f'
];
