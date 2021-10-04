<div style="padding: 20px; margin: 30px; width: auto; font-size: 24;width: 30%;">     
    <form method="get" action="" style="font-size: 24;text-align: left;">
        <label>submarineID <input type = "text" name="submarineID"></label><br>
        <label>countryID
                <select name="countryID">
                    <?php
                        foreach($countryList as $country){
                        echo "<option value = $country->countryID > $country->countryName </option>";
                            }
                    ?>
                </select>
            </label><br>
        <label>submarineName <input type = "text" name="submarineName"></label><br>
        <label>generationID
                <select name="generationID">
                    <?php
                        foreach($submarineGenerationList as $generation){
                        echo "<option value = $generation->generationID > $generation->generationID </option>";
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
            <label>stationDate<input type = "text" name="stationDate"></label><label>  (year-month-date)</label><br> 
        

        <input type = "hidden" name = "controller" value = "submarine"/>
        <button type = "submit" name = "action" value = "index" >Back</button>
        <button type = "submit" name = "action" value = "addSubmarine" >Save</button>
    </form>
</div>