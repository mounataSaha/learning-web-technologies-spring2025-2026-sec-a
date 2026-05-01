<!DOCTYPE html>
<html>
<head>
    <title>Degree Form</title>
</head>
<body>

<form action="handler.php" method="POST">
    <fieldset style="width:300px;">
        <legend>Degree</legend>

        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc

        <hr>

        <button type="submit">Submit</button>
    </fieldset>
</form>

</body>
</html>