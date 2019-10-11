<?php

$this->title = 'Winner';

?>

<body style="background-image: url('/img/Background2.png')">
<audio  src="/img/Beijing.ogg" autoplay="autoplay"> </audio>
<div class="Winner">
        <span class="WP">
            <? echo $Id ?>
        </span>
</div>

<div class="JP">
    <span class="jackpot">
        <? echo $win ?>
    </span>
</div>

<script>
    setTimeout(function() { window.location=window.location;},60000);
</script>

</body>