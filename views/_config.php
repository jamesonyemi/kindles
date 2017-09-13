<?php 
define('BASE_URL', 'C:/xampp/htdocs/task/');

class Page
{
	public static function GetPage($page = ''){
        return strtoupper(${"page"});
	}
}
 