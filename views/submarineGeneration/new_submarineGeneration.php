<div style="background-color: whitesmoke; padding: 20px; margin: 30px; width: auto; font-size: 24;width: 400px">
    <form method="get" action=""style="text-align: left;">

    <label>classID
            <select name="classID">
                <?php
                    foreach($submarineClassList as $class){
                    echo "<option value = $class->classID > $class->className </option>";
                        }
                ?>
            </select>
        </label><br>
        
    <label>generationID <input type = "text" name="generationID"></label><br>
    <label>generationName <input type = "text" name="generationName"></label><br>
    <label>width <input type = "text" name="width"></label><br>
    <label>length <input type = "text" name="length"></label><br>
    <label>hight <input type = "text" name="hight"></label><br>
    <label>surfaceSpeed <input type = "text" name="surfaceSpeed"></label><br>
    <label>drivingSpeed <input type = "text" name="drivingSpeed"></label><br>
    <label>operationRound <input type = "text" name="operationRound"></label><br>
    <label>crew <input type = "text" name="crew"></label><br>




    <label>companyID
            <select name="companyID">
                <?php
                    foreach($companyList as $company){
                    echo "<option value = $company->companyID > $company->companyName </option>";
                        }
                ?>
            </select>
        </label><br>
    <label>price <input type = "text" name="price"></label><br>                    
    
    <input type = "hidden" name = "controller" value = "submarineGeneration"/>
    <button type = "submit" name = "action" value = "index" >Back</button>
    <button type = "submit" name = "action" value = "addSubmarineGeneration" >Save</button>
    </form>
</div>
