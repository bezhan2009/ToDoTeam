<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoTeam</title>
</head>
    <form action="">
        <input type="text" name="name">
        <button>Say Hello</button>
    </form>


<body>
    <?
        $name = $_POST['name']
        if $name {
            echo "Hello, $name";
        }
        else {
            echo "Please enter your name";
        }
    ?>
</body>
</html>