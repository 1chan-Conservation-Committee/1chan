<?php
/**
 * Устанавливаем уровень ошибок:
 */
error_reporting(E_ALL);
ini_set('display_errors', 0);

/**
 * Запускаем фреймворк:
 */
require_once '../app/bootstrap.php';

date_default_timezone_set('UTC');

/**
 * Заглушка:
 */
//$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_X_FORWARDED_FOR'];

/**
 * Запускаем приложение:
 */
$app = Application::getInstance();
$app -> run();
