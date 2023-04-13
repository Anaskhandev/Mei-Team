<?php
require "inc/header.php";
$id  = $_GET['lead'];
$sql = "SELECT * FROM expert WHERE id='$id'";
$result = $conn->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="my-properties">
                    <div class="row align-items-center justify-content-center">
                        <h3 class="col-12 mb-4 bold">Lead Details</h3>
                        <?php if (!empty($row['uname'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Name : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['uname'] . ' ' .  $row['lname']; ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['phone'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> phone : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['phone'] ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['email'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> email : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['email'] ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['city'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> city : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['city'] ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['neighborhoods_multi'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Neighborhoods : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6">
                                <?php
                                foreach (json_decode($row['neighborhoods_multi']) as $Amenity) {

                                    echo $Amenity . ', ';
                                }
                                ?></h6>
                        <?php } ?>



                        <?php if (!empty($row['bed'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> bed : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php
                                                                    foreach (json_decode($row['bed']) as $bed) {

                                                                        echo $bed . ', ';
                                                                    }
                                                                    ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['bath'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> bath : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php

                                                                    echo $row['bath'];
                                                                    ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['Area'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Area (Rent) : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['Area'] . ' - ' . $row['Area2']  ?></h6>
                        <?php } ?>


                        <?php if (!empty($row['Price'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Price Range (Rent) : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['Price'] . ' - ' . $row['Price2']   ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['Area_sale'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Area (Sale) : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['Area_sale'] . ' - ' . $row['Area2_sale']  ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['Price'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Price Range (Sale) : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['Price'] . ' - ' . $row['Price2']   ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['dated'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> date : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6"><?php echo $row['dated'] ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['Amenities'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Amenities : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6">
                                    <?php
                                    foreach (json_decode($row['Amenities']) as $Amenity) {

                                        echo $Amenity . ', ';
                                    }
                                    ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['Features'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Features : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6">
                                    <?php
                                    foreach (json_decode($row['Features']) as $Feature) {

                                        echo $Feature . ', ';
                                    }
                                    ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['Parking'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Parking : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6">
                                    <?php
                                    foreach (json_decode($row['Parking']) as $Amenity) {

                                        echo $Amenity . ', ';
                                    }
                                    ?>
                            </h6>
                        <?php } ?>

                        <?php if (!empty($row['Pets'])) { ?>
                            <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Pets : </h6>
                            <h6 class="col-lg-10 col-md-8 col-6">
                                <?php
                                foreach (json_decode($row['Pets']) as $Amenity) {

                                    echo $Amenity . ', ';
                                }
                                ?>
                                </h6>
                            <?php } ?>

                            <?php if (!empty($row['Background'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Background : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6">
                                    <?php
                                    foreach (json_decode($row['Background']) as $Amenity) {

                                        echo $Amenity . ', ';
                                    }
                                    ?></h6>
                            <?php } ?>

                            <?php if (!empty($row['credit_score'])) { ?>
                                <h6 class="col-lg-2 col-md-4 col-6 mb-2"> Credit Score : </h6>
                                <h6 class="col-lg-10 col-md-8 col-6">
                                    <?php

                                    echo $row['credit_score'];
                                    ?></h6>
                            <?php } ?>

                    </div>


                </div>
            </div>
        </div>

<?php
    }
}
require "inc/footer.php"; ?>