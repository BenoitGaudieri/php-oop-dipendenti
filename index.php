<?php 
include_once __DIR__ . "/db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <title>Employees list</title>
</head>
<body>
    <h1>Employees</h1>
    <ul>
        <h2>Executives</h2>
            <?php foreach ($executives as $exec) { ?>
        <ul>
                <li class="name">
                    <?php echo $exec->name; ?>
                    <?php echo $exec->surname; ?>
                </li>
                <li class="age">
                    Age: <?php
                    try {
                        echo "{$exec->age()} years old"; 
                    } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </li>
                <li class="wage">
                    Full wage: <?php
                    try {
                        echo "{$exec->wageCalc()}$"; 
                    } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </li>
            </ul> 
            <?php } ?>
    <h2>Non executives</h2>
        <?php 
            foreach ($nonexecs as $nonexec) { ?>
        <ul>
            <li class="name">
                <?php echo $nonexec->name; ?>
                <?php echo $nonexec->surname; ?>
            </li>
            <li class="age">
                Age: <?php
                try {
                    echo "{$nonexec->age()} years old"; 
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </li>
            <li>
                Overtime left: <?php echo $nonexec->overtime ?> hours
            </li>
        </ul> 
        <?php } ?>
    </ul>

    
</body>
</html>