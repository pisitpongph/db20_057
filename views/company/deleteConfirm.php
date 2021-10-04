<br>
<div style="font-size: 20px;">
    <?php echo"<br>Are you sure to delete this company<br>
                <br>$company->companyID $company->companyName<br>";
    ?>
    <form method="get" action="">
        <input type="hidden" name = "controller" value = "company"/>
        <input type="hidden" name = "companyID" value ="<?php echo $company->companyID;?>"/>
        <br>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "index">Back</button>
        <button style="font-size: 20px;" type = "submit" name = "action" value = "delete">delete</button>
    </form>
</div>