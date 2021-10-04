<div style="padding: 20px; margin: 30px; width: auto; font-size: 24;width: 30%;">   
    <form method="get" action=""> 
        
        <input type="hidden" name="companyID" value ="<?php echo $company->companyID;?>">

        <label>companyName <input type = "text" name="companyName"
                        value = "<?php echo $company->companyName;?>"/></label><br>

    <label>countryID
    <select name="countryID">
                <?php
                    foreach($countryList as $country){
                    echo "<option value = $country->countryID > $country->countryName </option>";

                    echo "<option value = $country->countryID";
                    if($country->countryID == $company->countryID){
                        echo " selected = ' selected ' ";
                    } 
                        echo ">$country->countryName</option>";  
                        }
                ?>
            </select>
        </label><br>


    <input type = "hidden" name = "controller" value = "company"/>
    <button type = "submit" name = "action" value = "index" >Back</button>
    <button type = "submit" name = "action" value = "update" >Update</button>
    </form>
</div>
