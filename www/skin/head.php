<?php
require_once '/core/functions.php';
if($sadmin=='a'){
    enable_admin_menu('desktop', $connect);
    require_once 'admin/index.php';
}else
enable_ToolBar('desktop', $connect);