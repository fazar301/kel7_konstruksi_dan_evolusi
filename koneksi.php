<?php
    $db = mysqli_connect('localhost','root','','trpl');


    function select($query){
        global $db;
        $results = [];

        $fetch = mysqli_query($db,$query);
        while($result = mysqli_fetch_assoc($fetch)){
            $results[] = $result;
        }

        return $results;

    }
    