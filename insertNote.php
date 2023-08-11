<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert-do.php" method="post">
        <label for="noteid">NioteID</label>
        <input name="id" required id="noteid" type="text"><br>
        <label for="notetit">NoteTitle</label>
        <input name="title" required id="notetit" type="text"><br>
        <label for="notete">NoteText</label>
        <input name="text" required id="notete" type="text"><br>
        <label for="notetim">NoteTime</label>
        <input name="time" required id="notetim" type="text"><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>