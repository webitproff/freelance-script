<?php
/**
 * Russian Language File for the Message Module (message.ru.lang.php)
 *
 * @package Cotonti
 * @version 0.9.0
 * @author Cotonti Translators Team
 * @copyright Copyright (c) Cotonti Team 2008-2011
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL.');

$L['msg_Message'] = 'Системное сообщение';
$L['msg_Error'] = 'Ошибка';
$L['msg_Warning'] = 'Предупреждение';
$L['msg_Security'] = 'Безопасность';
$L['msg_System'] = 'Система';

$L['msgredir'] = 'Перенаправление...';

/**
 * Account-Related Messages
 */

$L['msg100_title'] = 'Ошибка доступа к учетной записи';
$L['msg100_body'] = 'Просмотр учетных записей доступен только для зарегистрированных и авторизованных пользователей';

$L['msg101_title'] = 'Ошибка авторизации';
$L['msg101_body'] = 'Пользователь не идентифицирован';

$L['msg102_title'] = 'Выход из системы завершен';
$L['msg102_body'] = 'Выход из системы завершен';

$L['msg105_title'] = 'Первый этап регистрации завершен';
$L['msg105_body'] = 'Первый этап регистрации завершен.<br />Проверьте ваш почтовый ящик и подтвердите регистрацию, воспользовавшись полученной ссылкой.<br />До этого момента Ваша учетная запись будет помечена как &laquo;Неактивированная&raquo; в списке пользователей.';

$L['msg106_title'] = 'Регистрация завершена полностью';
$L['msg106_body'] = 'Ваша учетная запись подтверждена и активирована.<br />Используйте ваш логин и пароль для авторизации.';

$L['msg109_title'] = 'Пользователь удален';
$L['msg109_body'] = 'Выполнено, пользователь удален';

$L['msg117_title'] = 'Ошибка регистрации';
$L['msg117_body'] = 'Регистрация новых пользователей отключена';

$L['msg118_title'] = 'Первый этап регистрации завершен';
$L['msg118_body'] = 'Первый этап регистрации завершен.<br />Ваша учетная запись еще не активирована.<br />После того, как администратор сайта активирует ее, вам будет направлен e-mail.';

$L['msg151_title'] = 'Ошибка авторизации';
$L['msg151_body'] = 'Ошибка авторизации: имя отсутствует в базе данных или введен неправильный пароль';

$L['msg152_title'] = 'Ошибка авторизации';
$L['msg152_body'] = 'Ошибка авторизации: ваша учетная запись зарегистрирована, но еще не активирована';

$L['msg153_title'] = 'Ошибка авторизации';
$L['msg153_body'] = 'Ваша учетная запись заблокирована';

$L['msg157_title'] = 'Ошибка регистрации';
$L['msg157_body'] = 'Неправильная ссылка подтверждения регистрации';

/**
 * Redirection Messages
 */

$L['msg300_title'] = 'Страница внесена в базу данных';
$L['msg300_body'] = 'Ваша страница внесена в базу данных.<br />Модератор утвердит ее публикацию в ближайшее время.<br />Спасибо!';

/**
 * Client Error Messages
 */

$L['msg400_title'] = 'Ошибка запроса (400)';
$L['msg400_body'] = 'Ваш браузер (или прокси-сервер) отправил запрос с ошибкой в синтаксисе';

$L['msg401_title'] = 'Ошибка доступа (401)';
$L['msg401_body'] = 'Ваш запрос требует идентификации пользователя.<br />Имя/пароль неверны, или ваш браузер не поддерживает данное свойство.';

$L['msg403_title'] = 'Запрещено (403)';
$L['msg403_body'] = 'Ваш запрос принят, но не может быть выполнен из-за ограничений в доступе.<br />Пожалуйста, проинформируйте администратора сайта если вы считаете, что произошла ошибка.';

$L['msg404_title'] = 'Не найдено (404)';
$L['msg404_body'] = 'Запрошенный ресурс сервером не найден. <br />Запрошенный URL устарел, ошибочен, или доступ к нему закрыт.';

/**
 * Server Error Messages
 */

$L['msg500_title'] = 'Внутренняя ошибка сервера (500)';
$L['msg500_body'] = 'Произошла внутренняя ошибка сервера или ошибка в его конфигурации. <br />Пожалуйста свяжитесь с администратором сайта и сообщите об ошибке и вызвавших ее действиях.';

/**
 * Forum Messages
 */

$L['msg602_title'] = 'Раздел заблокирован';
$L['msg602_body'] = 'Данный раздел заблокирован';

$L['msg603_title'] = 'Тема заблокирована';
$L['msg603_body'] = 'Данная тема заблокирована';

/**
 * System Messages
 */

$L['msg900_title'] = 'Страница в разработке';
$L['msg900_body'] = 'Работа над страницей еще не завершена. Пожалуйста, зайдите позднее.';

$L['msg904_title'] = 'Ошибка доступа к списку системных страниц';
$L['msg904_body'] = 'У вас отсутствуют права для просмотра списка системных страниц';

$L['msg907_title'] = 'Ошибка загрузки плагина';
$L['msg907_body'] = 'Произошла ошибка при попытке загрузки плагина. Возможно отсутствуют некоторые файлы.';

$L['msg911_title'] = 'Ошибка проверки пакета локализации';
$L['msg911_body'] = 'Отсутствует файл локализации';

$L['msg915_title'] = 'Ошибка заполнения полей';
$L['msg915_body'] = 'Одно или несколько полей не заполнены';

$L['msg916_title'] = 'Обновление базы данных выполнено';
$L['msg916_body'] = 'База данных успешно обновлена.<br />Затронутые записи: $num.';

$L['msg930_title'] = 'Ошибка доступа';
$L['msg930_body'] = 'Вам запрещено выполнять данное действие';

$L['msg940_title'] = 'Доступ к разделу закрыт';
$L['msg940_body'] = 'Доступ к данному разделу сайта временно закрыт';

$L['msg950_title'] = 'Ошибка в ссылке';
$L['msg950_body'] = 'Неверный URL';

$L['msg951_title'] = 'Сессия истекла';
$L['msg951_body'] = 'Ваша сессия больше не действительна. Попробуйте заново.';

?>