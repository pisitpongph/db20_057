<div style="padding: 20px; margin: 30px; width: auto; font-size: 24;width: 30%;">   
    <form method="get" action="">
            <label>classID
                <select name="classID">
                    <?php
                        foreach($submarineClassList as $class){
                    
                        echo "<option value = $class->classID";
                        if($class->classID == $submarineGeneration->classID){
                            echo " selected = ' selected ' ";
                        } 
                            echo ">$class->className</option>";  
                            }
                    ?>
                </select>
            </label><br>

            <input type="hidden" name="generationID" value = "<?php echo $submarineGeneration->generationID;?>">
            <label>width <input type = "text" name="width"
                            value = "<?php echo $submarineGeneration->generationName;?>"/></label><br> 
            <label>width <input type = "text" name="width"
                            value = "<?php echo $submarineGeneration->width;?>"/></label><br>
            <label>length <input type = "text" name="length"
                            value = "<?php echo $submarineGeneration->length;?>"/></label><br>
            <label>hight <input type = "text" name="hight"
                            value = "<?php echo $submarineGeneration->hight;?>"/></label><br>
            <label>surfaceSpeed <input type = "text" name="surfaceSpeed"
                            value = "<?php echo $submarineGeneration->surfaceSpeed;?>"/></label><br>
            <label>drivingSpeed <input type = "text" name="drivingSpeed"
                            value = "<?php echo $submarineGeneration->drivingSpeed;?>"/></label><br>
            <label>operationRound <input type = "text" name="operationRound"
                            value = "<?php echo $submarineGeneration->operationRound;?>"/></label><br>
            <label>crew <input type = "text" name="crew"
                            value = "<?php echo $submarineGeneration->crew;?>"/></label><br>
            
            <label>companyID
                <select name="companyID">
                    <?php
                        foreach($companyList as $company){
                    
                        echo "<option value = $company->companyID";
                        if($company->companyID == $submarineGeneration->companyID){
                            echo " selected = ' selected ' ";
                        } 
                            echo ">$company->companyName</option>";  
                            }
                    ?>
                </select>
            </label><br>
            <label>price <input type = "text" name="price"
                            value = "<?php echo $submarineGeneration->price;?>"/></label><br>

        <input type = "hidden" name = "controller" value = "submarineGeneration"/>
        <button type = "submit" name = "action" value = "index" >Back</button>
        <button type = "submit" name = "action" value = "update" >Update</button>
    </form>

</div>