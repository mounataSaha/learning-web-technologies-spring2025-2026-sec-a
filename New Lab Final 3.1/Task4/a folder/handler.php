<!DOCTYPE html>
<html>
<head>
    <title>Handler Page</title>
</head>
<body>

<fieldset style="width:300px;">
    <legend>Output</legend>

    <?php
        if(isset($_POST['gender'])) {
            echo "Selected Gender: " . $_POST['gender'];
        }
    ?>

</fieldset>

</body>
</html>