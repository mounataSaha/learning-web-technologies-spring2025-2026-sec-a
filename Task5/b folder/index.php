<!DOCTYPE html>
<html>
<head>
    <title>Degree Form</title>
</head>
<body>

<form method="POST">
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

<?php
    if(isset($_POST['degree'])) {
        echo "Selected Degrees:<br>";

        foreach($_POST['degree'] as $d) {
            echo $d . "<br>";
        }
    }
?>

</body>
</html>