<?php 
require __DIR__.'/dbconnect.php';
$sql = "SELECT * FROM department";
$result_set = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form>
        Select Department:
        <select name="department">
            <option value="">Select</option>
            <?php if(mysqli_num_rows($result_set)>0):?>
            <?php while($department = mysqli_fetch_assoc($result_set)):?>
                <option value="<?php echo $department['id']?>">
                <?php echo $department['name'];?>
            </option>
            <?php endwhile; ?>
            <?php endif; ?>
</select>
    </form>
</body>
</html>