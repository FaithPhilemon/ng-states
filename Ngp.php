<?php 
    class Ngp{
            public function get_states(){
            $sql = "SELECT * FROM `states` ORDER BY `states`.`state_id` ASC";
            $res = mysqli_query($this->getConnection, $sql);
            while ($row = mysqli_fetch_assoc($res)) {
                $states[] = $row['name'];
            }
        }
    }
?>