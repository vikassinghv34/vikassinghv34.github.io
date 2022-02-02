<?php
include "header.php";
?>
<div class="main-content">
    <h2>Delete record</h2>
    <form action="delete_backend.php" class="reg-form" method="get">
        <div class="form-item">
            <label for="id">ID</label>
            <input type="text" name="id" id="id">
        </div>
        <input type="submit" value="delete" class="submit">
    </form>
</div>