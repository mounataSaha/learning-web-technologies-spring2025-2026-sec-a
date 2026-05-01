<!DOCTYPE html>
<html>
<head>
    <title>A Folder</title>

    <style>
        fieldset {
            width: 300px;
        }
    </style>
</head>
<body>

<form action="handler.php" method="post">
    <fieldset          >
        <legend>NAME</legend>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">

        <br>

        <hr>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>