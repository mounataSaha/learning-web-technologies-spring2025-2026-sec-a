<!DOCTYPE html>
<html>
<head>
    <title>Task</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>Name Form</legend>

        <label>Name:</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">

        <hr>

        <button type="submit">Submit</button>
    </fieldset>
</form>


    <?php
        if(isset($_POST['name'])) {
            echo "You entered: " . $_POST['name'];
        }
    ?>


</body>
</html>