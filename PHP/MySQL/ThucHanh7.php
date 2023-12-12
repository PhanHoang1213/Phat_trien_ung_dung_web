<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <form action="" method="get">
        <?php
        require './connect.php';
        mysqli_set_charset($conn, 'UTF8');
        $sql = "SELECT * FROM passengers";
        $result  = $conn->query($sql);
        if($result->num_rows >0){
            echo "<table class='table table-striped table-bordered' style='width:500px; margin:auto' >
            <tr>
                <th>Select</th>
                <th>Passenger Name</th>
                <th>Flight ID</th>
            </tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>
                    <td> <input type=checkbox name = 'checkbox[]' value='{$row['id']}'> </td>
                    <td>{$row['name']} </td>
                    <td>{$row['flight_id']}</td>
                </tr>";
            }
            echo "</table>";
        }
        echo '<input type="submit" name = "delete" value="CANCEL TICKET" class="d-block mx-auto mt-4">';
        ?>
    </form>
    <?php
    if (isset($_GET['delete'])){
        if(isset($_GET['checkbox'])){
            $chkarr = $_GET['checkbox'];
            foreach($chkarr as $id){
                $sql = "DELETE FROM passengers WHERE id=$id";
                $result = $conn->query($sql);
                header("location: ThucHanh7.php");
                echo "Canceled";
            }
        }
    }
    $conn ->close();
    ?>
</body>
</html>
