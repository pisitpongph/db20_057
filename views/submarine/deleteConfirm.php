<br>
<div style="font-size: 20px;">
    <?php echo"<br>Are you sure to delete this Submarine<br>
                <br>$submarine->submarineID $submarine->submarineName<br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name = "controller" value = "submarine"/>
        <input type="hidden" name = "submarineID" value ="<?php echo $submarine->submarineID;?>"/>
        <br>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "index">Back</button>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "delete">delete</button>
    </form>
</div>