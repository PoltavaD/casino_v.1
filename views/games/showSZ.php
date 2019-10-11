<?php

$this->title = 'Jack Pot';

?>
<body style="background-image: url('/img/Background3.png')">

</body>
<div class="SZ">
            <span class="summa">
                <? echo $SZ ?>
            </span>
</div>

<div class="JP">
        <span class="jackpot">
            <? echo $JP ?>
        </span>
</div>

<script>
    setTimeout(function() { window.location=window.location;},10000);
</script>

</body>