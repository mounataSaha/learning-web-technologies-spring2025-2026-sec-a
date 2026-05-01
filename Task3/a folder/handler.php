<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>

<fieldset style="width:300px;">
    <legend>Output</legend>

    <?php
        if(isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yy'])) {
            echo "Date of Birth: " . $_POST['dd'] . "/" . $_POST['mm'] . "/" . $_POST['yy'];
        }
    ?>

</fieldset>

</body>
</html>