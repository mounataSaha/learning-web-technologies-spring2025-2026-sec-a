<!DOCTYPE html>
<html>
<head>
    <title>Email Form</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>Email</legend>

        <label>Email:</label>
        <input type="email" name="email">

        <hr>

        <button type="submit">Submit</button>
    </fieldset>
</form>

</body>
</html>

<?php
    if(isset($_POST['email'])) {
        echo "Your email is: " . $_POST['email'];
    }
?>

