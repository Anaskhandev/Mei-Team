<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->
<section class="headings find_home Neighborhood">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Neighborhoods</h1>
            <h2>America is made up of dozens of incredible Neighborhoods. Let’s find which one is right for you.</h2>
            <!-- <p>Get to know us.</p> -->
        </div>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
<section class="visited-cities bg-white-1 rec-pro">
    <div class="container-fluid">
        <!--<div class="sec-title text-center">-->
        <!--    <h2 class="font-weight">Neighbourhood</h2>-->
        <!--    <p class="mb-5">Explore the world of real estate.</p>-->
        <!--</div>-->
        <div class="row">
            <div class="col-md-12">
            </div>
            <?php
            $sql = "SELECT * FROM cities WHERE status=1 LIMIT 8";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    if (!empty($row['image'])) {
                        $image = './uploads/' . $row['image'];

                    } else {
                        $image = './images/placeholder_city.png';
                    }
            ?>
                    <div class="col-lg-4 col-md-6 pr-1 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150">
                        <!-- Image Box -->
                        <a href="city_detail.php?id=<?php echo $row['id'] ?>" class="img-box hover-effect">
                            <img src="<?php echo $image; ?>" class="img-responsive" alt="">
                            <!-- Badge -->
                            <div class="img-box-content visible">
                                <h4 class="mb-2"><?php echo $row['name'] ?></h4>
                                <!-- <span>203 Properties</span> -->
                                <!-- <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul> -->
                            </div>
                        </a>
                    </div>
            <?php
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
    </div>
</section>
<?php

include('footer.php');
?>