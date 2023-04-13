<?php
include './inc/header.php';
if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);
    $i = 1;
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
?>


            <!-- <a href="add_cities.php" class="btn btn-primary mb-5">Add Cities</a> -->

            <div class="my-properties">

                <div class="row align-items-center justify-content-center">
                    <?php if (!empty($row['name'])) { ?>
                        <h4 class="col-lg-2 col-md-4 col-6 my-3">Name : </h4>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['name']  ?></h5>
                    <?php } ?>


                    <?php if (!empty($row['email'])) { ?>
                        <h4 class="col-lg-2 col-md-4 col-6 my-3">email : </h4>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['email'] ?></h5>
                    <?php } ?>


                </div>

                <div class="row align-items-center justify-content-center">
                    <h4 class="col-12 mt-5  ">Connect With An Expert Form Details :</h4>
                    <?php
                    $email = $row['email'];
                    $sql2 = "SELECT * FROM expert WHERE email='$email'";
                    $result2 = $conn->query($sql2);
                    $i = 1;
                    if ($result2->num_rows > 0) {
                        // output data of each row
                        while ($row2 = $result2->fetch_assoc()) {
                            echo '<pre class="col-12">';
                            // echo print_r($row2);
                    ?>

                            <?php if (!empty($row2['phone'])) { ?>
                                <h5 class="col-12">Phone : <?php echo $row2['phone']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['uname'])) { ?>
                                <h5 class="col-12">Name : <?php echo $row2['uname'] . " " . $row2['lname']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['city'])) { ?>
                                <h4 class="col-12">City : </h4>
                                <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row2['city']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row['neighborhoods_multi'])) { ?>
                        <h4 class="col-lg-2 col-md-4 col-6 my-3">Neighborhoods : </h4>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['neighborhoods_multi']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?></h5>
                    <?php } ?>

                            <?php if (!empty($row2['bed'])) { ?>
                                <h5 class="col-12">Bed : <?php foreach (json_decode($row2['bed']) as $Feature) {

                                                                echo $Feature . ', ';
                                                            } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['bath'])) { ?>
                                <h5 class="col-12">Bath : <?php echo $row2['bath']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Price2'])) { ?>
                                <h5 class="col-12">Rent Price Range : <?php echo $row2['Price'] . " - " . $row2['Price2']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Area2'])) { ?>
                                <h5 class="col-12">Rent Area Range : <?php echo $row2['Area'] . " - " . $row2['Area2']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Price2_sale'])) { ?>
                                <h5 class="col-12">Sale Price Range : <?php echo $row2['Price_sale'] . " - " . $row2['Price2_sale']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Area2_sale'])) { ?>
                                <h5 class="col-12">Sale Area Range : <?php echo $row2['Area_sale'] . " - " . $row2['Area2_sale']  ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Features'])) { ?>
                                <h5 class="col-12">Features : <?php foreach (json_decode($row2['Features']) as $Feature) {

                                                                    echo $Feature . ', ';
                                                                } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Amenities'])) { ?>
                                <h5 class="col-12">Amenities : <?php foreach (json_decode($row2['Amenities']) as $Feature) {

                                                                    echo $Feature . ', ';
                                                                } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Parking'])) { ?>
                                <h5 class="col-12">Parking : <?php foreach (json_decode($row2['Parking']) as $Feature) {

                                                                    echo $Feature . ', ';
                                                                } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Pets'])) { ?>
                                <h5 class="col-12">Pets : <?php foreach (json_decode($row2['Pets']) as $Feature) {

                                                                echo $Feature . ', ';
                                                            } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['Background'])) { ?>
                                <h5 class="col-12">Background : <?php foreach (json_decode($row2['Background']) as $Feature) {

                                                                    echo $Feature . ', ';
                                                                } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['credit_score'])) { ?>
                                <h5 class="col-12">Credit Score : <?php foreach (json_decode($row2['credit_score']) as $Feature) {

                                                                        echo $Feature . ', ';
                                                                    } ?></h5>
                            <?php } ?>
                            <?php if (!empty($row2['dated'])) { ?>
                                <h5 class="col-12">Dated : <?php echo $row2['dated']  ?></h5>
                            <?php } ?>
                    <?php
                            echo '</pre>';
                        }
                    }
                    ?>
                </div>
            </div>

<?php
        }
    }
}
?>
</div>
</div>
</div>
</section>
<!-- END SECTION USER PROFILE -->
<?php
include './inc/footer.php';
?>