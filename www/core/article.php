<?php


$sql = mysqli_query($connect, art);

echo '<div class="content">';
if($content!='all'&& $content!=''){
while ($result = mysqli_fetch_array($sql)) {
    if($content==$result['id']){
        echo '<div class="contentAll">';
        echo '<h2>'.$result['title'].'</h2><br>';
        echo '<p>'.$result['article'].'<br></p>';
        echo '<p class="f">'.$result['author'].'<br></p>';
        echo '<p class="f">'.$result['date_create'].'<br></p>';
        echo "</div>";
    }elseif ($content){
        error_get_last();
    }
}
    echo "</div>";
} else if($content!=''&& $content == 'all'){
while ($result = mysqli_fetch_array($sql)) {

    echo '<div class="contentAll">';
        echo '<h2><a href="?articl='.$result["id"].'">'.$result['title'].'</a></h2><br>';
    $string = strip_tags($result['article']);//.'<br>';
    $string = substr($string, 0, 200);
    $string = rtrim($string, "!,.-");
    $string = substr($string, 0, strrpos($string, ' '));
    echo '<p>'.$string.'<a href="?articl='.$result['id'].'">'."... </a><br></p>";

    echo '<p class="f">'.$result['author'].'<br></p>';
        echo '<p class="f">'.$result['date_create'].'<br></p>';
    echo "</div>";
    }
echo "</div>";
}





