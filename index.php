<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To-do List</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <div class="form-container">
            <form class="form" action="try.php" method="POST">
                <label>Title: </label><input type="text" name="title"/>
                <label>Description: </label><textarea name="description" rows="5" cols="40"></textarea>
                <input type="submit" value="add" class="uppercase">
            </form>
        </div>
    </div>


<script src="jquery-2.2.4.min.js"></script>
</body>
</html>