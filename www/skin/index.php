<?php
include 'head.php';
include 'core/widget_left.php';
include 'core/widget_right.php';
include 'sidebar.php';
include 'core/article.php';
if($content == ''&& $saddart!='zam'&& $sadmin !='a'){
    include 'core/gelery.php';
}

include '/core/footer.php';
