<!DOCTYPE html>
<html>
<head>
    <title>Gender Form</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>Gender</legend>

        <input type="radio" name="gender" value="Male"
        <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked"; ?>> Male

        <input type="radio" name="gender" value="Female"
        <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked"; ?>> Female

        <input type="radio" name="gender" value="Other"
        <?php if(isset($_POST['gender']) && $_POST['gender']=="Other") echo "checked"; ?>> Other

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