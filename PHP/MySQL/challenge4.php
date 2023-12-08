<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="card mt-2" style="max-width: 500px; margin:auto;">
        <div class="card-header bg-info">
            <h3 class="text-white">Search For Passengers</h3>
        </div>
        <form action="" method="get" class="container">
            <div class="mb-3 mt-3">
                <label for="" class="form-label">Flight:</label>
                <select class="form-select" id="" placeholder="Enter email" name="flight">
                    <?php
                    require './connect.php';
                    $sql = "SELECT id, origin, destination FROM flights";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value={$row['id']}>{$row['origin']} - {$row['destination']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="Search" class="btn btn-info mb-4 mt-2 float-end text-white">Submit</button>
        </form>
    </div>
    <?php
    $flight = $_GET['flight'];
    $sql = "SELECT name FROM passengers WHERE flight_id={$flight}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<h4 style='text-align:center' class='mt-3 mb-0'>Passengers In Flight</h4>";
        echo "<table class='table table-striped table-bordered' style='width:500px; margin:auto' >
            <tr>
            <th>Passenger</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['name']}</td> </tr>";
        }
        echo "</table>";
    } else {
        echo "<h3 style='text-align:center;'>No passenger</h3>";
    }
    ?>
</body>

</html>