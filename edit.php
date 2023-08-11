<?
require_once("main.php");
if (!isset($_SESSION['uname'])) {
    header("Location: index.php");
    exit;
}
$t = $_GET['title'];
echo $_GET['title'];
echo "<br>";
$id = $_GET['id'];
echo $id;
// dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="edit-do.php?id=<?= $_GET['id'] ?>" method="post">
        <label for="Noteid">Title Note</label>
        <input name="notet" type="text" id="Noteid" value=<?= $t ?>><br>
        <input type="submit" value="send">
    </form>
</body>

</html>