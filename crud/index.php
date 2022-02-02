<?php
require "header.php";
include "connection.php";
?>

<div class="main-content">
    <h2>Student Data</h2>
    <?php
    $sql = "select * from studentdata join class where studentdata.student_class=class.class_id order by student_id ASC";
    $result = mysqli_query($conn, $sql) or die("error is there");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>class</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                
                    <tr>
                        <td><?php echo $row["student_id"]; ?></td>
                        <td><?php echo $row["student_name"]; ?></td>
                        <td><?php echo $row["student_class"]; ?></td>
                        <td><?php echo $row["student_phone"]; ?></td>
                        <td><?php echo $row["student_address"]; ?></td>
                        <td>
                            <a href="change.php?id=<?php echo $row["student_id"]; ?>">Update</a>
                            <a href="delete_backend.php?id=<?php echo $row["student_id"]; ?>">Delete</a>
                        </td>
                    </tr>
                
                <?php } ?>
                </tbody>
        </table>
<?php
            
        } else {
            echo "no records found";
        }
?>
</div>
</body>

</html>