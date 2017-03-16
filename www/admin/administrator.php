<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.03.2017
 * Time: 21:09
 */
class administrator
{
public function menuSettings($connect){
if(isset($_POST['name'])){
    $parent_id =$_POST['parent_id'];
    $links =$_POST['links'];
    $name =$_POST['name'];
    $prioriti =$_POST['prioriti'];
    $alt =$_POST['alt'];
    $insert_menu = "INSERT INTO `toolbar_links`(`parent_id`, `links`, `name`, `alt`, `prioriti`)VALUES ('".$parent_id."','".$links."','".$name."','".$alt."','".$prioriti."')";

    $result = mysqli_query($connect, $insert_menu);
    if($result){
        echo 'ok';
    }else echo 'err';
}

echo '<div class="editMenu"> <form method="POST" action="">
    <input name="name" type="text" placeholder="Entre Name Links"/><br>
    <input name="links" type="text" placeholder="Entre links"/><br>
    <input name="alt" type="text" placeholder="Entre Opisanie"/><br>
    <input name="prioriti" type="text" placeholder="Entre prioriti"/><br>
    <input name="parent_id" type="text" placeholder="Entre Parent"/><br>
    <input type="submit" value="ADD MENU"/>
</form></div>';
}
    public function menuEdit($connect){
        echo '<div class="removeMenu">';
        if (isset($_GET['del'])) {
            $resp = mysqli_query($connect,"DELETE FROM `toolbar_links` WHERE `id`='".$_GET["del"]."'");
            if ($resp) {
                echo "<p>Пункт удален.</p>";
            } else {
                echo "<p>Произошла ошибка.</p>";
            }
        }
        $sql = mysqli_query($connect, M_LINK);
        while ($result = mysqli_fetch_array($sql)) {
            echo $result['id'].") ".$result['name']." - <a href='?admin=a&toolbar=t&del=".$result['id']."'>Удалить</a><br>";
        }

        echo '</div>';
    }

    public function addArticle($connect){

        if(isset($_POST['sendePost'])) {
            $ti = $_POST['title'];
            $ar = $_POST['article'];
            $au = $_POST['author'];
            //$dat =$_POST['prioriti'];
            $dats = date("Y-m-d, H.i.s");

            $addArt = "INSERT INTO `article`(`title`, `article`, `author`, `date_create`) VALUES ('" . $ti . "','" . $ar . "','" . $au . "','" . $dats . "')";

            $result = mysqli_query($connect, $addArt);
            if ($result) {
                echo 'ok';
            } else echo 'err';
        }

        echo '<div class="AddArticle"> <form method="POST" action="">
    <input name="title" type="text" placeholder="Entre title"/></br>
    <textarea name="article" rows="30%" cols="70%" placeholder="Entre article"></textarea></br>
    <input name="author" type="text" placeholder="Entre author"/></br>
    <input type="submit" value="ADD ARTICLE" name="sendePost"/>
</form></div>';

    }


    public function addZametky($connect){

        if(isset($_POST['sendePost'])) {
            $ti = $_POST['title'];
            $ar = $_POST['article'];
            $au = $_POST['author'];
            $img = $_POST['image'];
            //$dat =$_POST['prioriti'];
            $dats = date("Y-m-d, H.i.s");

            $addArt = "INSERT INTO `u_zametki`(`title`, `article`, `images` ,`author`, `date_create`) VALUES ('" . $ti . "','" . $ar . "','".$img."','" . $au . "','" . $dats . "')";

            $result = mysqli_query($connect, $addArt);
            if ($result) {
                echo 'ok';
            } else echo 'err';
        }

        echo '<div class="AddArticle"> <form method="POST" action="">
    <input name="title" type="text" placeholder="Entre title"/></br>
    <textarea name="article" rows="30%" cols="70%" placeholder="Entre article"></textarea></br>
    <input name="image" type="text" placeholder="Entre image url"/></br>
    <input name="author" type="text" placeholder="Entre author"/></br>
    <input type="submit" value="ADD ARTICLE" name="sendePost"/>
</form></div>';

    }
    public function addbanner($connect){

        if(isset($_POST['sendePost'])) {
            $ti = $_POST['title'];
            $ar = $_POST['url'];

            $img = $_POST['image'];
            //$dat =$_POST['prioriti'];
            $dats = date("Y-m-d, H.i.s");

            $insert = "INSERT INTO `slider`(`img`, `urls`, `names`) VALUES ('".$img."','" . $ar . "','" . $ti . "')";
            $result = mysqli_query($connect, $insert);
            if ($result) {
                echo 'ok';
            } else echo 'err';
        }
        echo '<div class="AddArticle"> <form method="POST" action="">
    <input name="title" type="text" placeholder="Entre title"/></br>
    <input name="image" type="text" placeholder="Entre image url"/></br>
    <input name="url" type="text" placeholder="Entre direct link"/></br>
    <input type="submit" value="ADD ARTICLE" name="sendePost"/>
</form></div>';

if(isset($_GET['DBAN'])){

    mysqli_query($connect,"DELETE FROM `slider` WHERE `id`='".$_GET["DBAN"]."'");

}
        echo '<div>
            <ul>';
        //require_once 'data.php';
        $sql = mysqli_query($connect, sldr);
        while ($result = mysqli_fetch_array($sql)) {
            $dl = '?admin=a&art=ban&DBAN='.$result["id"];
            echo ' <li><img width="100" src="'.$result["img"].'" alt="'.$result["id"].'" />
                    <a href="'.$dl.'">'.$result["names"].' DELETE BANNER</a>
                    <h2>'; echo '</h2>
                    
                </li>
                ';
        }

        echo '</ul>
        </div>';


    }
}