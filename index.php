<?php

    $servername = "202.80.228.46";
    $username = "sa";
    $password = "sa";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=airoffice", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>
<body>
<table id="myTable" class="display" style="width: 100%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stmt = $conn->prepare("SELECT * FROM airoffice");
                $stmt->execute();
            ?>
            <?php foreach($result as $re) {  ?>
            <tr>
                <td><?php echo $re['hn']; ?></td>
                <td><?php echo $re['pname']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>
</body>
</html>