<?php
include './inc/header.php';
$form_type = "form";

if (isset($_GET) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM testimonials WHERE id='$id'";
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
    <h4>Add Testimonials</h4>
</div>
<div class="sidebar-widget author-widget2">

    <div class="testimonials-contact-form-sidebar">
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
                <label for="testimonials">User Name</label>
                <input <?php if (!empty($row['name'])) {
                            echo 'value="' . $row['name'] . '"';
                        } ?> id="testimonials" class="form-control" type="text" name="testimonials">
            </div>
            <div class="form-group">
                <label for="message">message</label>
                <textarea <?php if (!empty($row['name'])) {
                            echo 'value="' . $row['name'] . '"';
                        } ?> id="message" class="form-control" rows="5" type="text" name="message"></textarea>
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