<?php
include "header.php";
?>
<div class="main-content">
    <h2>Insert Record</h2>
    <form class="reg-form" action="register_backend.php" method="post">
        <div class="form-item">
            <label for="sname">Student Name</label>
                <input type="text" name="sname" id="sname">
        </div>
        <div class="form-item">
            <label for="sclass">Class</label>
            <select name="sclass" id="sclass" required>
                <option value="default" selected disabled>Select Class</option>
                <?php
                    include "connection.php";
                    $sql="select class_id, class_name from class";
                    $result=mysqli_query($conn,$sql);
                    
                    while($row=mysqli_fetch_assoc($result))
                    {
                        ?>
                        <option value="<?php echo $row["class_id"]; ?>"><?php echo $row["class_name"]; ?></option>
                        <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-item">
            <label for="sphone">Phone Number</label>
            <input type="number" name="sphone" id="sphone">
        </div>
        <div class="form-item">
            <label for="saddress">Address</label>
            <textarea name="saddress" id="saddress" cols="30" rows="3"></textarea>
        </div>
        <input type="submit" value="Submit" class="submit">
    </form>
</div>
</body>
</html>