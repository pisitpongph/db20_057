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
        <input type ="hidden" name="controller" value = "submarineClass"/>
        <button style="font-size: 15px; padding: 10px;background-color: #324960;display: inline-block;text-decoration: none; color: white;" type = "submit" name = "action" value = "search">SEARCH</button>
    </form>
    <form method="get" action="">
        <button style="font-size: 15px;padding: 10px;background-color: #324960;display: inline-block;"><a href = "?controller=submarineClass&action=newSubmarineClass" style="text-decoration: none;color: white; ">new submarineClass </a></button>  
    </form>    
</div>
    <table class="styled-table">
        <thead>
            <tr>
                <td>classID</td>
                <td>className</td>
                <td>detail</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        </thead>
        
        <tbody>
            <?php
                foreach($submarineClassList as $Class){
                    echo "<tr>
                        <td>$Class->classID</td>
                        <td>$Class->className</td>
                        <td>$Class->detail</td>
                        <td><a href = ?controller=submarineClass&action=updateForm&classID=$Class->classID>
                        <img src = ./images/edit.png >
                        </a></td>
                        <td><a href = ?controller=submarineClass&action=deleteConfirm&classID=$Class->classID>
                        <img src = ./images/delete.png >
                        </a></td>
                        </tr>";
                    }
                ?>
        </tbody>
</table>


 