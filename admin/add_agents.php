<?php
include './inc/header.php';
$form_type = "form";

if (isset($_GET) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM agents WHERE id='$id'";
    $result = $conn->query($sql);
    $i = 1;
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        $form_type = "update";
    } else {
        $form_type = "form";
    }
}
?>


<div class="widget-boxed-header">
    <h4>Add Agent</h4>
</div>
<div class="sidebar-widget author-widget2">

    <div class="agent-contact-form-sidebar">
        <form id="<?php echo $form_type; ?>" class="my-4">
            <div class="form-group">
                <label for="file">profile</label><br />
                <img src="../uploads/<?php if (!empty($row['image'])) {
                                            echo   $row['image'];
                                        } ?>" alt="" class="img-fluid <?php if (!empty($row['image'])) {
                                                                            echo   'admin_imgs';
                                                                        } ?>">
                <input <?php if (!empty($row['image'])) {
                            echo 'value="../uploads/' . $row['image'] . '"';
                        } ?> id="file" class="form-control" type="file" name="file">
            </div>
            <div class="form-group">
                <label for="agent">Agent Name</label>
                <input <?php if (!empty($row['name'])) {
                            echo 'value="' . $row['name'] . '"';
                        } ?> id="agent" class="form-control" type="text" name="agent">
            </div>

            <div class="form-group">
                <label for="designation">Designation</label>
                <input <?php if (!empty($row['designation'])) {
                            echo 'value="' . $row['designation'] . '"';
                        } ?> id="designation" class="form-control" type="text" name="designation">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input <?php if (!empty($row['email'])) {
                            echo 'value="' . $row['email'] . '"';
                        } ?> id="email" class="form-control" type="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input <?php if (!empty($row['password'])) {
                            echo 'value="' . $row['password'] . '"';
                        } ?> id="password" class="form-control" type="text" name="password" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea <?php if (!empty($row['description'])) {
                                echo 'value="' . $row['description'] . '"';
                            } ?> id="description" class="form-control description" type="text" name="description" required><?php if (!empty($row['description'])) {
                                                                                                                                echo $row['description'];
                                                                                                                                } ?></textarea>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input <?php if (!empty($row['address'])) {
                            echo 'value="' . $row['address'] . '"';
                        } ?> id="address" class="form-control" type="text" name="address">
            </div>
            <div class="form-group">
                <label for="instagram">Instagram Link</label>
                <input <?php if (!empty($row['instagram'])) {
                            echo 'value="' . $row['instagram'] . '"';
                        } ?> id="instagram" class="form-control" type="text" name="instagram" required>
            </div>
            <div class="form-group">
                <label for="tiktok">Tiktok Link</label>
                <input <?php if (!empty($row['tiktok'])) {
                            echo 'value="' . $row['tiktok'] . '"';
                        } ?> id="tiktok" class="form-control" type="text" name="tiktok" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile No.</label>
                <input id="mobile" <?php if (!empty($row['mobile'])) {
                                        echo 'value="' . $row['mobile'] . '"';
                                    } ?> class="form-control" type="tel" placeholder="1233-456-678" name="mobile">
            </div>
            <input <?php if (!empty($row['id'])) {
                        echo 'value="' . $row['id'] . '"';
                    } ?> hidden id="id" class="form-control" type="text" name="id">
            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- END SECTION USER PROFILE -->

<?php
include './inc/footer.php';
?>