<?php
include './inc/header.php';
if (isset($_GET['id'])) {
    $id  = $_GET['id'];
    $sql = "SELECT * FROM expert WHERE id='$id'";
    $result = $conn->query($sql);
    $i = 1;
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
?>


            <!-- <a href="add_cities.php" class="btn btn-primary mb-5">Add Cities</a> -->

            <div class="my-properties">
                <div class="row align-items-center justify-content-center">
                    <?php if (!empty($row['uname'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Name : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['uname'] . ' ' .  $row['lname']; ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['phone'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">phone : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['phone'] ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['email'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">email : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['email'] ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['city'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">city : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['city'] ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['neighborhoods_multi'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Neighborhoods : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['neighborhoods_multi']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?></h5>
                    <?php } ?>


                    <?php if (!empty($row['bed'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">bed : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php
                                                                foreach (json_decode($row['bed']) as $bed) {

                                                                    echo $bed . ', ';
                                                                }
                                                                ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['bath'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">bath : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php

                                                                echo $row['bath'];
                                                                ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Area'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Area (Rent) : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['Area'] . ' - ' . $row['Area2'] . '+'  ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Price'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Price Range (Rent) : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['Price'] . ' - ' . $row['Price2'] . '+'   ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Area_sale'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Area (Sale) : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['Area_sale'] . ' - ' . $row['Area2_sale'] . '+'  ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Price'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Price Range (Sale) : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['Price'] . ' - ' . $row['Price2'] . '+'   ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['dated'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">date : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['dated'] ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Amenities'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Amenities : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['Amenities']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Features'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Features : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['Features']) as $Feature) {

                                echo $Feature . ', ';
                            }
                            ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['Parking'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Parking : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['Parking']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?>
                        </h5>
                    <?php } ?>

                    <?php if (!empty($row['Pets'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Pets : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['Pets']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?>
                        </h5>
                    <?php } ?>

                    <?php if (!empty($row['Background'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Background : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php
                            foreach (json_decode($row['Background']) as $Amenity) {

                                echo $Amenity . ', ';
                            }
                            ?></h5>
                    <?php } ?>

                    <?php if (!empty($row['credit_score'])) { ?>
                        <h5 class="col-lg-2 col-md-4 col-6 my-3">Credit Score : </h5>
                        <h5 class="col-lg-10 col-md-8 col-6">
                            <?php

                            echo $row['credit_score'];
                            ?></h5>
                    <?php } ?>
                    <h5 class="col-lg-2 col-md-4 col-6 my-3">Claimed By : </h5>
                    <!-- <h5 class="col-lg-10 col-md-8 col-6"><?php echo $row['claimed_by'] ?></h5> -->
                    <input type="hidden" name="form_id" value="<?php echo $row['id'] ?>">
                    <select class="col-lg-10 col-md-8 col-6 form-select" name="claimer" id="claimer">
                        <option value="">Select</option>
                        <?php
                        $claim = "SELECT * FROM agents";
                        $claim_result = $conn->query($claim);
                        if ($claim_result->num_rows > 0) {
                            // output data of each row
                            while ($claim_row = $claim_result->fetch_assoc()) {
                        ?>
                                <option value="<?php echo $claim_row['email'];  ?>" <?php if ($row['claimed_by'] === $claim_row['email']) {
                                                                                        echo 'selected';
                                                                                    } ?>><?php echo $claim_row['name'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>

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