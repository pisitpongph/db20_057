<br>
<div style="font-size: 20px;">
    <?php echo"<br>Are you sure to delete this SubmarineClass<br>
                <br>$submarineGeneration->generationID<br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name = "controller" value = "submarineGeneration"/>
        <input type="hidden" name = "generationID" value ="<?php echo $submarineGeneration->generationID;?>"/>
        <br>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "index">Back</button>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "delete">delete</button>
    </form>
</div>
