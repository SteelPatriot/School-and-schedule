<?php
echo '<div class="content">';
if($stoolbar=='t'){
    include 'administrator.php';
    $addmenu = new administrator();
    $addmenu->menuSettings($connect);
    echo '<br>';
    $addmenu->menuEdit($connect);
}

if($saddart == "create"){
    include 'administrator.php';
    $addmenu = new administrator();
    $addmenu->addArticle($connect);
}
if($saddart == "zam"){
    include 'administrator.php';
    $addmenu = new administrator();
    $addmenu->addZametky($connect);
}

if($saddart == "ban"){
    include 'administrator.php';
    $addmenu = new administrator();
    $addmenu->addbanner($connect);
}
echo '</div>';