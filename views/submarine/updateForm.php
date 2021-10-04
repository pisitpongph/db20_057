<div style="padding: 20px; margin: 30px; width: auto; font-size: 24;width: 30%;">   
<form method="get" action="">

<label>countryID
        <select name="countryID">
            <?php
                foreach($countryList as $country){
                    echo "<option value = $country->countryID";
                if($country->countryID == $submarine->countryID){
                    echo " selected = ' selected ' ";
                } 
                    echo ">$country->countryName</option>";  
                }
            ?>
        </select>
    </label><br>
<label>submarineStatusID
        <select name="submarineStatusID">
            <?php
                foreach($submarineStatusList as $status){
                echo "<option value = $status->submarineStatusID > $status->statusName </option>";
                    }
            ?>
        </select>
    </label><br>
    <input type="hidden" name="submarineID" value = "<?php echo $submarine->submarineID;?>">
    <input type="hidden" name="generationID" value = "<?php echo $submarine->generationID;?>">
    <input type="hidden" name="stationDate" value = "<?php echo $submarine->stationDate;?>">
   
    <label>submarineName <input type = "text" name="submarineName"
                    value = "<?php echo $submarine->submarineName;?>"/></label><br>
    
<input type = "hidden" name = "controller" value = "submarine"/>
<button type = "submit" name = "action" value = "index" >Back</button>
<button type = "submit" name = "action" value = "update" >Update</button>
</form>
</div>

