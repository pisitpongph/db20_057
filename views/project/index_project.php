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
    <table class="styled-table">
        <thead>
            <tr><td>projectName</td>
                <td>countryName</td>
                <td>generationName</td>
            </tr>
        </thead>
        <tbody style="background-color: whitesmoke;">
    <?php
        foreach($projectList as $project){
            echo "<tr>
                    <td>$project->projectName</td>
                    <td>$project->countryName</td>
                    <td>$project->generationName</td>
                </tr>";
        }
    ?>
    </tbody>
    </table>

