<?php

use craft\test\TestSetup;

ini_set('date.timezone', 'UTC');

// Use the current installation of Craft
define('CRAFT_STORAGE_PATH', __DIR__ . '/storage');
define('CRAFT_TEMPLATES_PATH', __DIR__ . '/templates');
define('CRAFT_CONFIG_PATH', __DIR__ . '/config');
define('CRAFT_MIGRATIONS_PATH', __DIR__ . '/migrations');
define('CRAFT_TRANSLATIONS_PATH', __DIR__ . '/translations');
define('CRAFT_VENDOR_PATH', dirname(__DIR__, 2) . '/vendor');
require CRAFT_VENDOR_PATH . '/yiisoft/yii2/Yii.php';
require CRAFT_VENDOR_PATH . '/craftcms/cms/src/test/Craft.php';

TestSetup::configureCraft();
