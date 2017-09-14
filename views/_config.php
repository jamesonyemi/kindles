<?php 
define('BASE_URL', 'C:/xampp/htdocs/task/');
define('APP_URL', 'http://localhost/task/views/');

class Page
{
	public static function GetPage($page = ''){
        return strtoupper(${"page"});
	}
}
 