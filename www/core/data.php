<?php
$user_db = "school_app";
$pass_db = "toor";
$server_db = "localhost";
$name_db = "school_app";


$connect = new mysqli($server_db,$user_db,$pass_db, $name_db);
mysqli_query($connect,"SET NAMES utf8");
if(!$connect){
    echo '<h2>MySQL err! Is not conected!</h2>';
}
//////////////////////////////////////////////////////////////////////
//////
//////          SQL COMANDS
//////

$load_menu = "SELECT `id`, `parent_id`, `links`, `name`, `alt`, `prioriti` FROM `toolbar_links` ORDER BY `prioriti` ASC";
define('M_LINK',$load_menu);

$load_admin_menu = "SELECT `id`, `parent_id`, `links`, `name`, `alt`, `prioriti` FROM `admin_navigate` ORDER BY `prioriti` ASC";
define('M_ADMIN_LINK',$load_admin_menu);

$art_all = 'SELECT *FROM `article`';
define('art' , $art_all);

$galery = 'SELECT *FROM `u_zametki`';
define('gal' , $galery );

$sldr = 'SELECT *FROM `slider`';
define('sldr',$sldr);