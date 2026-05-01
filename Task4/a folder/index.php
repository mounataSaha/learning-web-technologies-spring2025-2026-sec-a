<!DOCTYPE html>
<html>
<head>
    <title>Gender Form</title>
</head>
<body>

<form action="handler.php" method="POST">
    <fieldset style="width:300px;">
        <legend>Gender</legend>

        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other

        <hr>

        <button type="submit">Submit</button>
    </fieldset>
</form>

</body>
</html>