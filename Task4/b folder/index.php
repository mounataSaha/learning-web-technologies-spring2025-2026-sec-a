<!DOCTYPE html>
<html>
<head>
    <title>Gender Form</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>Gender</legend>

        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other

        <hr>

        <button type="submit">Submit</button>
    </fieldset>
</form>

<?php
    if(isset($_POST['gender'])) {
        echo "Selected Gender: " . $_POST['gender'];
    }
?>

</body>
</html>