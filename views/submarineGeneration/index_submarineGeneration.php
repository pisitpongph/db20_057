<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }
    .styled-table thead tr {
    background-color: #324960;
    color: #ffffff;
    text-align: left;
    }
    .styled-table th,
    .styled-table td {
    padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #324960;
    }
    .styled-table tbody tr.active-row {
    font-weight: bold;
    color: #324960;
    }

</style>
<br>
<div style="display: flex; align-items: center;justify-content: center; padding: 10px;grid-column-gap: 15px;"> 
    <form method="get" action="">
        <input style="font-size: 20px;" type ="text" name = "key">
        <input type ="hidden" name="controller" value = "submarineGeneration"/>
        <button style="font-size: 15px; padding: 10px;background-color: #324960;display: inline-block;text-decoration: none; color: white;" type = "submit" name = "action" value = "search">SEARCH</button>
        
    </form>
    <form method="get" action="">
        <button style="font-size: 15px;padding: 10px;background-color: #324960;display: inline-block;"><a href = "?controller=submarineGeneration&action=newSubmarineGeneration" style="text-decoration: none;color: white; ">new Generation</a></button>
    </form>
</div>
    <table class="styled-table">
        <thead>
            <tr>
                <td>classID</td>
                <td>generationID</td>
                <td>generationName</td>
                <td>width</td>
                <td>length</td>
                <td>hight</td>
                <td>surfaceSpeed</td>
                <td>drivingSpeed</td>
                <td>operationRound</td>
                <td>crew</td>
                <td>companyID</td>
                <td>price</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($submarineGenerationList as $generation){
                    echo "<tr>
                            <td>$generation->classID</td>
                            <td>$generation->generationID</td>
                            <td>$generation->generationName</td>
                            <td>$generation->width</td>
                            <td>$generation->length</td>
                            <td>$generation->hight</td>
                            <td>$generation->surfaceSpeed</td>
                            <td>$generation->drivingSpeed</td>
                            <td>$generation->operationRound</td>
                            <td>$generation->crew</td>
                            <td>$generation->companyID</td>
                            <td>$generation->price</td>
                            <td><a href = ?controller=submarineGeneration&action=updateForm&generationID=$generation->generationID>
                            <img src = ./images/edit.png >
                            </a></td>
                            <td><a href = ?controller=submarineGeneration&action=deleteConfirm&generationID=$generation->generationID>
                            <img src = ./images/delete.png >
                            </a></td>
                        </tr>";
                }
            ?>
        </tbody>
</table>
