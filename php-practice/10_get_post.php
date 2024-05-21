<?php
// echo $_GET["Name"];
// echo $_GET["Age"];
echo $_POST["Name"];
echo $_POST["Age"];
?>
<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?Name=Mohsin&Age=21"> Click</a>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <div><label for="Name">Name:</label>
        <input type="text" name="Name">
    </div>
    <div>
        <label for="Age">Age:</label>
        <input type="text" name="Age">
    </div>
    <input type="submit" value="Submit" name="Submit">
</form>