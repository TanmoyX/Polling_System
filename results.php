<html>
    <head>
        <title>Results</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body style="text-align: center;">
        <h1><strong>Results</strong></h1>
        <table>
            <tr>
                <th>Project ID</th>
                <th>First Preference Votes</th>
                <th>Second Preference Votes</th>
            </tr>
            <?php
                $db = mysqli_connect("localhost", "id1406650_root", "admin", "id1406650_poll");
                $sql = "Select * FROM project";
                $result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['pref1'];?></td>
                <td><?php echo $row['pref2'];?></td>
            </tr>
            <?php
                }      
            ?>
        </table>
    </body>
</html>