<!-- the first file to start. It will help people to start the session-->
<?php
session_start();
//Global configuration to set up the basic settings. 
$GLOBALS['config']=array(
    // for the DB
    'mysql' => array(
        'host'=>'127.0.0.1',
        'username'=> 'root',
        'password'=>'',
        'db' => 'userdb'
    ),
    // for the cookies, to remeber how long session will last
    'remeber'=> array(
        'cookie_name'=>'hash',
        //month in seconds
        'cookie_expiry'=> '604800'
    ),
    'session'=>array(
        'session_name'=>'user',
    ),
); 

//my autoloader

/* 
require_once 'classes/config.php';
require_once 'classes/cookie.php';
require_once 'classes/db.php';
require_once 'classes/hash.php';
require_once 'classes/input.php';
require_once 'classes/redirect.php';
require_once 'classes/token.php';
require_once 'classes/user.php';
require_once 'classes/validate.php';
require_once 'functions/sanitize.php';
*/

//much more shorter way
spl_autoload_register(function($class){
require_once'classes/' .$class. '.php';
});
require_once 'functions/sanitize.php';