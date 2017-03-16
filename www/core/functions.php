<?php
require_once 'header.php';
require_once 'defines.php';
require_once 'data.php';
require_once 'panel.php';
function enable_ToolBar($device, $connect){


    if($device == 'desktop')
        panel::toolBarContener($connect, M_LINK);
    else panel::mobiletoolBarContener($connect, M_LINK);


}


function enable_admin_menu($device, $connect){

    if($device == 'desktop')
        panel::toolBarContener($connect, M_ADMIN_LINK);
    else panel::mobiletoolBarContener($connect, M_ADMIN_LINK);
}