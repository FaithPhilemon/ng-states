<?php
    include ("ng-states.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nigerian States</title>
</head>
<body>
    <form action="#" method="post">
        <select name="states" id="states">
            <option value="">____choose____</option>
            <?php
                $states = get_states();
                // print_r($states);

                foreach ($states as $state) {
                    echo '<option value="'.$state['state_id'].'">'.$state['name'].'</option>';
                }
            ?>
        </select>
    </form>
</body>
</html>