<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    ?>

    <fieldset>
        <h1>Supermarket management</h1>
        <form action="Ej2.php" method="post">
            <p>
                Worker name: <input type="text" name="worker" id="worker">
            </p>
            <br>
            <p>
                <h2>Choose product</h2>
                <select name="product" id="product">
                    <option value="milk">Milk</option>
                    <option value="soft drink">Soft Drink</option>
                </select>
            </p>
            <p> 
                <h2>Product quantity</h2>
                <input type="number" name="quantity" id="quantity">
                <br><br>
                <input type="submit" value="Add" name="add">
                <input type="submit" value="Remove" name="rst">
                <input type="reset" value="Reset">
            </p>
        </form>
        
        <h2>Inventory</h2>
        Worker: <?php ?>
        <br></br>
        Units milk: <?php ?>
        <br></br>
        Units soft drink: <?php ?>
    </fieldset> 
    
</body>
</html>