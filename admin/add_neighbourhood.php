<?php
include './inc/header.php';
$form_type = "form";

if (isset($_GET) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM neighbourhood WHERE id='$id'";
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
    <h4>Add Neighbourhood</h4>
</div>
<div class="sidebar-widget author-widget2">

    <div class="agent-contact-form-sidebar">
        <form id="<?php echo $form_type; ?>" class="my-4">
            <div class="form-group">
                <label for="file">Image</label><br/>
                <img src="../uploads/<?php if (!empty($row['image'])) {
                                            echo   $row['image'];
                                        } ?>" alt="" class="img-fluid <?php if (!empty($row['image'])) {
                                                                            echo   'admin_imgs';
                                                                        } ?>">
                <input id="file" class="form-control" type="file" name="file">
            </div>
            <div class="form-group">
                <label for="neighbourhood">Neighbourhood</label>
                <input <?php if (!empty($row['name'])) {
                            echo 'value="' . $row['name'] . '"';
                        } ?> id="neighbourhood" class="form-control" type="text" name="neighbourhood">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <select name="city" id="city" class="form-control">
                    <?php
                    $sql = "SELECT * FROM cities WHERE status=1";
                    $result = $conn->query($sql);
                    $i = 1;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row2 = $result->fetch_assoc()) {
                    ?>
                            <option <?php if (!empty($row['city']) && $row['city'] === $row2['name']) {
                                        echo 'selected';;
                                    } ?> value="<?php echo $row2['name']; ?>"><?php echo $row2['name']; ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
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