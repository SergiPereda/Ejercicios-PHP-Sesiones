<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php
session_start();

if (!isset($_SESSION['numbers'])){
    $_SESSION['numbers'] = [10, 20, 30];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['mod'])) {
        $number = $_POST['value'];
        $position = $_POST['position'];
        $_SESSION['numbers'][(int)$position] = (int)$number;
    }

    if (isset($_POST['avg'])) {
        $sum = array_sum($_SESSION['numbers']);
        $count = count($_SESSION['numbers']);
        $avg = $sum / $count;
    }
    
    if (isset($_POST['res'])) {
        session_unset();
        $_SESSION['numbers'] = [10, 20, 30];
    }
}
?>


<fieldset>
    <h1>Modify array saved in session</h1>
    <form action="Ej1.php" method="post">
        <label for="position">Position to modify: </label>
        <select name="position" id="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <br><br>
        <label for="value">New value: </label>
        <input type="number" name="value" id="value">
        <br><br>
        <input type="submit" value="Modify" name="mod">
        <input type="submit" value="Average" name="avg">
        <input type="submit" value="Reset" name="res">        
    </form>
    <p>Current array: 
        <?php 
        echo implode(", ", $_SESSION['numbers']); 
        ?>
    </p>

    <?php
    if (isset($avg)) {
        echo "Average: " . round($avg, 2);
    }
    ?>

</fieldset>

</body>
</html>