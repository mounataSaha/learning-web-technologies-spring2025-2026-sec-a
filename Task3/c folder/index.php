<!DOCTYPE html>
<html>
<head>
    <title>Date of Birth</title>
</head>
<body>

<form method="POST">
    <fieldset style="width:300px;">
        <legend>DATE OF BIRTH</legend>

        <label>DD:</label>
        <input type="text" name="dd" value="<?php if(isset($_POST['dd'])) echo $_POST['dd']; ?> "> 

        <label>MM:</label>
        <input type="text" name="mm" value="<?php if(isset($_POST['mm'])) echo $_POST['mm']; ?> ">

        <label>YY:</label>
        <input type="text" name="yy" value="<?php if(isset($_POST['yy'])) echo $_POST['yy']; ?>">

        <br><br>

        <button type="submit">Submit</button>
    </fieldset>
</form>

<?php
    if(isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yy'])) {
        echo "Date of Birth: " . $_POST['dd'] . "/" . $_POST['mm'] . "/" . $_POST['yy'];
    }
?>

</body>
</html>