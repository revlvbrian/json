<?php

   $file = "todo.txt";

        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date("d/m/y : H:i:s", time());

            //Get data
            $json = file_get_contents($file);

            //json data into array
            $arr_data = json_decode($json);

            //Push data to array
            if($arr_data == null) {
                array_push($arr_data[], $_POST);
            }
            array_push($arr_data, $_POST);

            // //Convert array to JSON
            $json = json_encode($arr_data, JSON_PRETTY_PRINT);
            //write json into todo.txt
            if(file_put_contents($file, $json)) {
                var_dump($arr_data);
                echo "Succesfully Added";
            }
            else
                echo "error";
?>