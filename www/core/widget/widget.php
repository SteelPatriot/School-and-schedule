<?php
$position_banner = 0;

if($position_banner==0){
    echo '<section class="wrapper">
    <div id="ad-1">
        <div id="content">
            <h2>Потерялся?</h2>
            <h3>Расслабься - мы поможем.</h3>
            <form>
                <input type="text" id="email" value="Адрес email..." />
                <input type="submit" id="submit" value="Ведите меня" />
            </form>
        </div>
        <div id="clouds">
            <ul id="cloud-group-1">
                <li class="cloud-1"></li>
                <li class="cloud-2"></li>
                <li class="cloud-3"></li>
            </ul>
            <ul id="cloud-group-2">
                <li class="cloud-1"></li>
                <li class="cloud-2"></li>
                <li class="cloud-3"></li>
            </ul>
        </div>
        <ul id="boat">
            <li>
                <div id="question-mark"></div>
            </li>
        </ul>
        <ul id="water">
            <li id="water-back"></li>
            <li id="water-front"></li>
        </ul>
    </div>
</section>';
}else {
    echo '<section class="wrapper">
    <div id="ad-2">
        <h2>Потерялся?</h2>
        <ul id="boat">
            <li>
                <div id="question-mark"></div>
            </li>
        </ul>
        <ul id="water">
            <li id="water-back"></li>
            <li id="water-front"></li>
        </ul>
        <div id="content">
            <h3>Расслабься.<br /> Мы поможем.</h3>
            <a href="#">Направьте меня!</a>
        </div>
    </div>
</section> ';
}


?>



