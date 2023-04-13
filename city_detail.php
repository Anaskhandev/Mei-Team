<?php
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM cities WHERE id=$id";
    $result = $conn->query($qry);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $city_name = $row["name"];

?>
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <section class="headings Neighborhoods_bg" style="background-image: linear-gradient(240deg, #00000085, #000000b0), url('./uploads/<?php echo $row['image']; ?>') !important">
                <div class="text-heading text-center">
                    <div class="container">

                        <h1><?php echo $city_name; ?> NEIGHBORHOODS</h1>
                        <!-- <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; Blog Details</h2> -->
                        <!-- <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing</p> -->
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION BLOG -->
            <!-- <section class="blog blog-section bg-white">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-12 blog-pots">
                            <div class="row">
                                <div class="col-md-12 col-xs-12"> -->
            <section class="visited-cities bg-white-1 rec-pro ">
                <div class="container-fluid">
                    <!-- <div class="sec-title">
                        <h2>Neighborhoods</h2>
                        <p>Explore the world of real estate.</p>
                    </div> -->
                    <div class="row">
                        <div class="col-md-12 justify-content-center">
                        </div>
                        <?php
                        $sql = "SELECT * FROM neighbourhood WHERE city='$city_name'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $neighborhood = $row['name'];
                        ?>

                                <div class="col-lg-3 col-md-6 pr-1" data-aos="zoom-in" data-aos-delay="150">
                                    <!-- Image Box -->
                                    <a href="neighborhoods_detail.php?id=<?php echo $row['id']; ?>" class="img-box hover-effect">
                                        <img src="<?php echo !empty($row['image']) && $row['image'] != 'none' ? './uploads/' . $row['image'] : './images/placeholder_city.png' ?>" class="img-responsive" alt="">
                                        <!-- Badge -->
                                        <div class="img-box-content visible">
                                            <h4 class="mb-2"> <?php echo !empty($row['name']) ? $row['name'] : ''; ?></h4>
                                            <span>
                                                <?php
                                                $sql2 = "SELECT * FROM properties WHERE neighborhood='$neighborhood'";
                                                $result2 = $conn->query($sql2);
                                                $i=0;
                                                if ($result2->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row = $result2->fetch_assoc()) {
                                                        $i++;
                                                    }
                                                }
                                                echo $i . ' Properties';
                                                ?></span>
                                            <ul class="starts text-center mt-2">
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
                                        </div>
                                    </a>
                                </div>
                        <?php
                            }
                        }
                        ?>
                        <div class="col-lg-12 mt-lg-5 text-center">
                            <a class="btn btn_dark px-5" href="./Neighborhoods.php">See more</a>
                        </div>
                    </div>
                </div>
            </section>
            </div>
            </div>
            <!-- <section class="comments">
                            <h3 class="mb-5">5 Comments</h3>
                            <div class="row mb-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">Mario Smith</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row ml-5">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info">
                                            <h5 class="mb-1">Mary Tyron</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row my-4">
                                <ul class="col-12 commented">
                                    <li class="comm-inf">
                                        <div class="col-md-2">
                                            <img src="images/testimonials/ts-6.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-md-10 comments-info no-mb">
                                            <h5 class="mb-1">Leo Williams</h5>
                                            <p class="mb-4">Jun 23, 2020</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section> -->
            <!-- <section class="leve-comments wpb">
                            <h3 class="mb-5">Leave a Comment</h3>
                            <div class="row">
                                <div class="col-md-12 data">
                                    <form action="#">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="8" placeholder="Message" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-lg mt-2">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </section> -->
            <!-- </div> -->
            <!-- <aside class="col-lg-3 col-md-12">
                            <div class="widget">
                                <h5 class="font-weight-bold mb-4">Search</h5>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div>
                                <div class="recent-post py-5">
                                    <h5 class="font-weight-bold">Category</h5>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>House</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Garages</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Estate</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Real Home</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Bath</a></li>
                                        <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Beds</a></li>
                                    </ul>
                                </div>

                                <div class="recent-post pt-5">
                                    <h5 class="font-weight-bold mb-4">Recent Posts</h5>
                                    <div class="recent-main">
                                        <div class="recent-img">
                                            <div><img src="images/blog/b-1.jpg" alt=""></div>
                                        </div>
                                        <div class="info-img">
                                            <div>
                                                <h6>Real Estate</h6>
                                            </div>
                                            <p>May 10, 2020</p>
                                        </div>
                                    </div>
                                    <div class="recent-main my-4">
                                        <div class="recent-img">
                                            <div><img src="images/blog/b-2.jpg" alt=""></div>
                                        </div>
                                        <div class="info-img">
                                            <div>
                                                <h6>Real Estate</h6>
                                            </div>
                                            <p>May 10, 2020</p>
                                        </div>
                                    </div>
                                    <div class="recent-main no-mb">
                                        <div class="recent-img">
                                            <div><img src="images/blog/b-3.jpg" alt=""></div>
                                        </div>
                                        <div class="info-img">
                                            <div>
                                                <h6>Real Estate</h6>
                                            </div>
                                            <p>May 10, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside> -->
            <!-- </div>
                </div>
            </section> -->
            <!-- END SECTION BLOG -->

<?php
        }
    } else {
        echo "0 results";
    }
}
include('footer.php');
?>