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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br>
<div style="display: flex; align-items: center;justify-content: center; padding: 10px;grid-column-gap: 15px;"> 
    <form method="get" action="" >
        <input style="font-size: 20px;" type ="text" name = "key">
        <input type ="hidden" name="controller" value = "submarine"/>
        <button style="font-size: 15px; padding: 10px;background-color:#324960;text-decoration: none; color: white;" type = "submit" name = "action" value = "search">SEARCH</button>
    </form>
    <form method="get" action="" >
        <button style="font-size: 15px; padding: 10px;background-color: #324960;"><a href = "?controller=submarine&action=newSubmarine" style="text-decoration: none; color: white;">new Submarine</a></button>
    </form>
</div>
    <table class="styled-table">
        <thead>
            <tr><td>submarineID</td>
                <td>countryID</td>
                <td>submarineName</td>
                <td>generationID</td>
                <td>submarineStatusID</td>
                <td>stationDate</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        </thead>
       
        <tbody style="background-color: whitesmoke;">
    <?php
        foreach($submarineList as $submarine){
            echo "<tr>
                    <td>$submarine->submarineID</td>
                    <td>$submarine->countryID</td>
                    <td>$submarine->submarineName</td>
                    <td>$submarine->generationID</td>
                    <td>$submarine->submarineStatusID</td>
                    <td>$submarine->stationDate</td>
                    <td><a href = ?controller=submarine&action=updateForm&submarineID=$submarine->submarineID>
                    <img src = ./images/edit.png >
                    </a></td>
                    <td><a href = ?controller=submarine&action=deleteConfirm&submarineID=$submarine->submarineID>
                    <img src = ./images/delete.png>
                    </a></td>
                </tr>";
        }
    ?>
    </tbody>
    </table>

