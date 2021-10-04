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
<div style="display: flex;">
    <div style="margin: auto;background-color: whitesmoke; padding: 20px;">     
        <table class="styled-table">
            <thead>
                <tr><th colspan="7" style="text-align: center;">ตารางแสดงชื่อ รุ่น คลาส บริษัท ประเทศที่ครอบครอง และวันที่ประจำการ ของเรือดำน้ำ</th></tr>
                <tr>
                    <td>submarineName</td>
                    <td>className</td>
                    <td>generationName</td>
                    <td>companyName</td>
                    <td>countryName</td>
                    <td>statusName</td>
                    <td>stationDate</td>
                </tr>
            </thead>

    <tbody>
        <?php
            foreach($conclude1 as $conclude){
                echo "<tr>
                        <td>$conclude->submarineName</td>
                        <td>$conclude->className</td>
                        <td>$conclude->generationName</td>
                        <td>$conclude->companyName</td>
                        <td>$conclude->countryName</td>
                        <td>$conclude->statusName</td>
                        <td>$conclude->stationDate</td>
                    </tr>";
            }
        ?>
        </tbody>
    </table>

    </div>
    <br>

    <div style="margin: auto;background-color: whitesmoke; padding: 20px;">     
        <table class="styled-table">
            <thead>
                <tr><th colspan="7" style="text-align: center;">ตารางจำนวนเรือดำน้ำที่ประจำการแต่ละประเทศ</th></tr>
                <tr>
                    <td>country</td>
                    <td>amountSubmarineStation</td>
                </tr>   
            </thead>

            <tbody>
                <?php
                    foreach($conclude2 as $conclude){
                        echo "<tr>
                            <td>$conclude->countryID</td>
                            <td>$conclude->amountSubmarineStation</td>
                        </tr>";
                    }
                ?>
            </tbody>
    </table>
    </div>

</div>

 