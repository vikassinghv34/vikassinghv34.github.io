<?php
include "header.php";
?>
<div class="main-content">
    <h2>Update record</h2>

    <?php
    include "connection.php";
    $sid=$_GET["id"];
    $sql="select * from studentdata where student_id=$sid";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
    ?>
    <form class="reg-form" action="update_backend.php" method="post">
        <div class="form-item">
            <label for="sname">Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['student_id']; ?>">
            <input type="text" name="sname" id="sname" value="<?php echo $row["student_name"]; ?>">
        </div>
        <div class="form-item">
            <label for="sclas">Class</label>
            <?php
            $sql2="select * from class";
            $result2=mysqli_query($conn,$sql2);

            if(mysqli_num_rows($result2)>0)
            {
                echo "<select name='sclass' id='sclass'>";

                while($row2=mysqli_fetch_assoc($result2))
                {
                    if($row["Student_class"]==$row2["class_id"])
                    {
                        $select="selected";
                    }
                    else
                    {
                        $select="";
                    }
                    echo "<option $select value='{$row2['class_id']}'>{$row2['class_name']}</option>";
                }
                echo "</select>";
            }
            ?>
        </div>
        <div class="form-item">
            <label for="sphone">Phone Number</label>
            <input type="number" name="sphone" id="sphone" value="<?php echo $row["student_phone"]; ?>">
        </div> 
        <div class="form-item">
            <label for="saddress">Address</label>
            <textarea name="saddress" id="saddress" cols="30" rows="3"><?php echo $row["student_address"]; ?></textarea>
        </div>
        <input type="submit" class="submit" value="Update">
    </form>
    <?php
            }
    }
    ?>
</div>