<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<section class="headings testimonial_bg">
    <div class="text-heading text-center">
        <div class="container">
            <h1>CLIENT TESTIMONIALS</h1>
            <!-- <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; About Us</h2> -->
            <!-- <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing.</p> -->
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION TESTIMONIALS -->
<section class="testimonials home18 bg-white">
    <div class="container-fluid">
        <?php
        $qry = "SELECT * FROM testimonials WHERE status=1";
        $result = $conn->query($qry);
        if ($result->num_rows > 0) {
        ?>
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div class="owl-carousel style1">
                    <div class="test-1 pb-0 pt-0">
                        <img src="<?php echo !empty($row['image']) ? './uploads/' . $row['image'] : "./images/placeholder.jpg"; ?>" alt="">
                        <h3 class="mt-3 mb-0"><?php echo $row['name']; ?></h3>
                        <ul class="starts text-center mb-2">
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
                        </ul>
                        <p><?php echo $row['message']; ?></p>
                    </div>
                </div>
        <?php
            }
        }else{
            echo 'No Testimonials Yet';
        }
        ?>
    </div>
</section>
<!-- END SECTION TESTIMONIALS -->

<?php
include('footer.php');
?>