<!DOCTYPE html>
<html>
<head>
    <title>Degree Form</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>Degree</legend>

        <input type="checkbox" name="degree[]" value="SSC"
        <?php if(isset($_POST['degree']) && in_array("SSC", $_POST['degree'])) echo "checked"; ?>>
        SSC

        <input type="checkbox" name="degree[]" value="HSC"
        <?php if(isset($_POST['degree']) && in_array("HSC", $_POST['degree'])) echo "checked"; ?>>
        HSC

        <input type="checkbox" name="degree[]" value="BSc"
        <?php if(isset($_POST['degree']) && in_array("BSc", $_POST['degree'])) echo "checked"; ?>>
        BSc

        <input type="checkbox" name="degree[]" value="MSc"
        <?php if(isset($_POST['degree']) && in_array("MSc", $_POST['degree'])) echo "checked"; ?>>
        MSc

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