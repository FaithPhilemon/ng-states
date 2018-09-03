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

    function get_lgs($state_id){
        include ("Db.php"); 
        if($state_id == ""){
            $sql = "SELECT * FROM `locals` ORDER BY `locals`.`state_id` ASC";
        }else {
            $sql = "SELECT * FROM `locals` WHERE state_id = '$state_id' ORDER BY `locals`.`state_id` ASC";
        }
        
        $result = mysqli_query($con, $sql);
        if(!$result){

            die("ERROR OCCURED ". mysqli_error($con));

        }else {

            while ($row = mysqli_fetch_assoc($result)) {
                $lgs[] = mysqli_fetch_assoc($result);
            }
            return $lgs;
        }
        
    }
?>