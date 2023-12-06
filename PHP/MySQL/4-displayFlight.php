<?php
if ($result->num_rows > 0) {
    echo "<table class='table table-striped table-bordered' style='width:500px; margin:auto' >
            <caption><b>Bảng thông tin chuyến bay</b></caption>
            <tr>
            <th>ID</th>;
            <th>Origin</th>
            <th>Destination</th>
            <th>Duration</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["origin"] . "</td><td>" . $row["destination"] . "</td><td>" . $row["duration"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h3 style='text-align:center;'>No flight</h3>";
}
