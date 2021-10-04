<div  style="background-color: whitesmoke; padding: 20px; margin: 30px; width: auto; font-size: 24;width: 400px">
    <form method="get" action=""style="text-align: left;">
        <label>companyID <input type = "text" name="companyID"></label><br>
        <label>companyName <input type = "text" name="companyName"></label><br>
    
    

        <label>countryID
            <select name="countryID">
                <?php
                    foreach($countryList as $country){
                    echo "<option value = $country->countryID > $country->countryName </option>";
                        }
                ?>
            </select>
        </label><br>

    <input type = "hidden" name = "controller" value = "company"/>
    <button type = "submit" name = "action" value = "index" >Back</button>
    <button type = "submit" name = "action" value = "addCompany" >Save</button>
    </form>
</div>
