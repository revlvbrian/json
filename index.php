<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-do List</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="font-awesome.min.css">

</head>

<body>
    <header>
    </header>
    <div class="wrapper">
        <div class="form-container">
            <h1>To Do List <i class="fa fa-edit"></i></h1>
            <button class="">Add New</button>
            <form action="view.php" method="POST">
                <button class="view">View List</button>
            </form>
            <form class="form" action="try.php" method="POST">
                <label>Title: </label><input type="text" name="title"/>
                <label>Description: </label><textarea name="description" rows="5" cols="40"></textarea>
                <input type="date" name="to-do-date">
                <input type="submit" value="add" class="uppercase">
            </form>
        </div>
    </div>


<script src="jquery-2.2.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>
    $(".btnadd").click(function(){
    $(".form").slideDown(1000);
    });
</script>
</body>
</html>