<?php
echo '<div class="w-right">';
echo '
<script type="text/javascript" src="//vk.com/js/api/openapi.js?142"></script>

<!-- VK Widget -->
<div id="vk_community_messages"></div>
<script type="text/javascript">
VK.Widgets.CommunityMessages("vk_community_messages", 136850873, {expandTimeout: "5000",tooltipButtonText: "Есть вопросъ?"});
</script>
';
include "widget/Players/index.html";
echo '</div>';




