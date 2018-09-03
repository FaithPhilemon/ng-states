<?php
    function get_states(){
        include ("Db.php"); 

        $sql = "SELECT * FROM `states` ORDER BY `states`.`state_id` ASC";
        $result = mysqli_query($con, $sql);
        if(!$result){

            die("ERROR OCCURED ". mysqli_error($con));

        }else {

            while ($row = mysqli_fetch_assoc($result)) {
                $states[] = mysqli_fetch_assoc($result);
            }
            return $states;
        }
        
    }
?>