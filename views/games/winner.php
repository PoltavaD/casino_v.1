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

<div id="JP">
    <span class="jackpot">

        <? echo $win ?>

    </span>
</div>
<script>
    function show()
    {
        $.ajax({
            url: "/games/win",
            cache: false,
            success: function(JP){
                $("#JP").html(JP);
            }
        });
    }

    function reload()
    {
        $.ajax({
            url: "/games/sz",
            cache: false,
            success: function (SZ) {
               SZ = JSON.parse(SZ);
               if (SZ !== 0) {
                   location.reload();
               }
            }
        });
    }

    $(document).ready(function(){
        show();
        setInterval('show()',5000);
        reload();
        setInterval('reload()',5000);
    });

</script>
</body>
