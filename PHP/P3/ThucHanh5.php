<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="">Ngay:</label>
        <select name="day" id="day">
            <?php
            $currentMonth = isset($_GET['month']) ? $_GET['month'] : date('n');
            $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, date('Y'));
            for ($day = 1; $day <= $daysInMonth; $day++) {
                echo "<option value=\"$day\">$day</option>";
            }
            ?>
        </select>
        <label for="">Thang:</label>
        <select name="month" id="">
            <?php
            for ($month = 1; $month <= 12; $month++) {
                echo "<option value=\"$month\">$month</option>";
            }
            ?>
        </select>
        <label for="">Nam:</label>
        <select name="year" id="">
            <?php
            $startYear = 1900;
            $today = getdate();
            $currentYear = $today['year'];
            for ($year = $startYear; $year <= $currentYear; $year++) {
                echo "<option value=\"$year\">$year</option>";
            }
            ?>
        </select>
        <input type="submit" value='Submit'>
    </form>
    <?php
    if (isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
        $selectedDay = $_GET['day'];
        $selectedMonth = $_GET['month'];
        $selectedYear = $_GET['year'];

        echo "<p>Ngày tháng năm đã chọn: $selectedDay/$selectedMonth/$selectedYear</p>";
    }
    ?>
</body>

</html>