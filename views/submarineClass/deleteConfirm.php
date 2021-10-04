<br>
<div style="font-size: 20px;">
    <?php echo"<br>Are you sure to delete this SubmarineClass<br>
                <br>$submarineClass->classID $submarineClass->className<br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name = "controller" value = "submarineClass"/>
        <input type="hidden" name = "classID" value ="<?php echo $submarineClass->classID;?>"/>
        <br>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "index">Back</button>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "delete">delete</button>
    </form>
</div>