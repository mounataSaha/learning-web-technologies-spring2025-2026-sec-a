<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>

<fieldset style="width:300px;">
    <legend>Output</legend>

    <?php
        if(isset($_POST['degree'])) {
            echo "Selected Degrees: <br>";

            foreach($_POST['degree'] as $d) {
                echo $d . "<br>";
            }
        }
    ?>

</fieldset>

</body>
</html>