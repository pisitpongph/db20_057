<div style="padding: 20px; margin: 30px; width: auto; font-size: 24;width: 30%;">   

    <form method="get" action=""> 
        <input type="hidden" name="classID" value ="<?php echo $submarineClass->classID;?>">
        <label>className <input type = "text" name="className"
                        value = "<?php echo $submarineClass->className;?>"/></label><br>
        <label>detail <input type = "text" name="detail"
                        value = "<?php echo $submarineClass->detail;?>"/></label><br>
        <input type="hidden" name="classID" value = "<?php echo $submarineClass->classID;?>">
    <input type = "hidden" name = "controller" value = "submarineClass"/>
    <button type = "submit" name = "action" value = "index" >Back</button>
    <button type = "submit" name = "action" value = "update" >Update</button>
    </form>
</div>

