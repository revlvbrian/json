<?php
    $formdata = array(
          $title = $_POST["title"],
          $description = $_POST["description"]
       );
    // get file
    // push $_POST from file
    // save

    /**
     * 1. get file
     * 2. decode the file containing json to array
     * 3. push the $_POST to the array
     * 4. encode the file and save
     */
    $date = date("d/m/y : H:i:s", time());

    $file ="todo.txt";
    $contents = file_get_contents($file);
    $decodedContents = json_decode($contents, true);
    array_push($decodedContents, $formdata, $date);
    var_dump($decodedContents);
    $json = array($decodedContents);
    file_put_contents($file, json_encode($json));

    echo json_encode($json);



