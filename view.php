<!DOCTYPE html>
<html lang='en'>
<?php
$file = "todo.txt";
$json = file_get_contents($file);
$json_data = json_decode($json, true);
?>
<head>
    <meta charset='UTF-8'>
    <title>To-do List</title>
    <link rel='stylesheet' href='normalize.css'>
    <link rel='stylesheet' href='animate.css'>
    <link rel='stylesheet' href='style.css'>
    <link rel='stylesheet' href='font-awesome.css'>
    <link rel='stylesheet' href='font-awesome.min.css'>

</head>

<body>
    <header>
    </header>
    <div class='wrapper'>
        <div class='form-container1'>
            <h1>To Do List <i class='fa fa-edit'></i></h1>
            <a href="index.php"><button class='btnadd'>Add New</button></a>
            <form class='form'>
                <label>Title: </label><input type='text' name='' value='<?php echo implode(", ", $json_data) ?>'/>
                <label>Description: </label><textarea name='' rows='5' cols='40'><?php echo implode(", ", $json_data) ?></textarea>
                <div class='date'>
                    <label>Date: </label><input type='date' class='view-date' name=''>
                </div>
            </form>
        </div>
    </div>
<?php

echo "<pre>";
echo implode($json_data[2]);

function search (Array $array, $type, $value)
    {
        foreach($array as $index => $entity)
        {
            if($entity[$type] == $value)
            {
                return $entity;
            }
        }
    }
var_dump(search($json_data, 'description', 'brian'));
?>
</body>
</html>