<?php

class panel
{
    public function toolBarContener($linc, $load_menu){
        echo '<div class="'.STYLE_TOOL_BAR_CONTENER.'">';
        panel::barMenu($linc, $load_menu ,STYLE_TOOL_BAR);
        echo '</div>';
    }
    public function mobiletoolBarContener($linc, $load_menu){
        echo '<div class="'.STYLE_TOOL_BAR_CONTENER_MOBILE.'">';
        panel::barMenu($linc, $load_menu , STYLE_TOOL_BAR_MOBILE);
        echo '</div>';
    }

    function barMenu($linc,$load_menu , $base)
    {
        $sql = mysqli_query($linc, $load_menu);
        $num_priori = 0;
        $police_priori = 0;

        echo '<nav class="cd-3d-nav-container"><ul class="cd-3d-nav">';
        while ($resp = mysqli_fetch_array($sql)) {
            echo '<li><a href="'.$resp["links"].'">'.$resp["name"].'</a></li>';

        }echo '</ul>
		<span class="cd-marker color-1"></span>	
	</nav>';
    }
}

/*
if($num_priori < $resp['prioriti']&&$police_priori == 0 ){
    echo '<li><a href="'.$resp["links"].'">'.$resp["name"].'</a>';
    $num_priori = $resp['prioriti'];
}
else
    if($police_priori == 0 && $num_priori == $resp['prioriti']){
        echo '<ul>';
        echo '<li><a href="'.$resp["links"].'">'.$resp["name"].'</a></li>';
        $police_priori = 1;
    }
    else
        if($num_priori <$resp['prioriti']&&$police_priori == 1){
            $police_priori=0;
            echo '</ul></li>';
            echo '<li><a href="'.$resp["links"].'">'.$resp["name"].'</a></li>';
            $num_priori = $resp['prioriti'];
        } else echo '<li><a href="'.$resp["links"].'">'.$resp["name"].'</a></li>';

*/