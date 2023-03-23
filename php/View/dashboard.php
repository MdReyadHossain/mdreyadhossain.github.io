<?php 
    require "../Model/connectDB.php";
    session_start();
    if(!isset($_SESSION['user'])) {
        header("location: ./login.php");
    }

    $db = connect();
    $sql = "SELECT * FROM Contact";
    $table = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Portfolio Dashboard</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-danger" style="float: right;" onclick="window.location.href='../Controller/logout.php'">Log Out</button>
        <br>
        <h4 class="">Dashboard</h4> 
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            <?php 
                if($table->num_rows > 0) {
                    while($data = $table->fetch_assoc()){
                        echo "<tr>";
                        echo     "<th>" . $data['ID'] . "</th>";
                        echo     "<td>" . $data['Name'] . "</td>";
                        echo     "<td><a href='mailto:" . $data['Email'] . "'>" . $data['Email'] . "</a></td>";
                        echo     "<td>" . $data['Message'] . "</td>";
                        echo     "<th><a class='btn btn-outline-danger' href='../Controller/deleteAction.php?id=" . $data['ID'] . "'>Delete</a></th>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "<tr>";
                    echo     "<td>--</td>";
                    echo     "<td>--</td>";
                    echo     "<td>--</td>";
                    echo     "<td>--</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>