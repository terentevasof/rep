<?php
return array (
  'utf_mode' =>
  array (
    'value' => true,
    'readonly' => true,
  ),
  'cache_flags' =>
  array (
    'value' =>
    array (
      'config_options' => 3600,
      'site_domain' => 3600,
    ),
    'readonly' => false,
  ),
  'cookies' =>
  array (
    'value' =>
    array (
      'secure' => false,
      'http_only' => true,
    ),
    'readonly' => false,
  ),
  'exception_handling' =>
  array (
    'value' =>
    array (
      'debug' => false,
      'handled_errors_types' => 4437,
      'exception_errors_types' => 4437,
      'ignore_silence' => false,
      'assertion_throws_exception' => true,
      'assertion_error_type' => 256,
      'log' => array (
          'settings' =>
          array (
            'file' => '/var/log/php/exceptions.log',
            'log_size' => 1000000,
        ),
      ),
    ),
    'readonly' => false,
  ),
  'crypto' => 
  array (
    'value' => 
    array (
        'crypto_key' => 'ezo6b5lczm0t133pcvwwsd4ykd42xqzz',
    ),
    'readonly' => true,
  ),
  'connections' =>
array (
  'value' =>
  array (
    'default' =>
    array (
      'className' => '\Bitrix\Main\DB\MysqliConnection',
      'host' => 'db01.mari.local:3306',
      'database' => 'auto_db_hv01_5_231_terenteva',
      'login'    => 'auto_login_hv01_5_231',
      'password' => 'autotqhtcyrd2a2oyq',
      'options' => '2',
    ),
  ),
  'readonly' => true,
),
);