<!DOCTYPE html>
<html>
<head>
    <title>Task 1B</title>

    <style>
        fieldset {
            width: 300px;
        }
    </style>

</head>
<body>

<form method="post">
    <fieldset>
        <legend>NAME</legend>

        <label for="name">Name:</label>
        <input type="text" name="name">

        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>

<?php
if (isset($_POST["name"])) {
    $name = $_POST["name"];
    echo "Your name is: " . $name;
}
?>