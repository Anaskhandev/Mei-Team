<?php
include('header.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM neighbourhood WHERE id=$id";
    $result = $conn->query($qry);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $neighborhood =  $row['name'];
            $city = $row['city'];

?>
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <section class="headings Neighborhoods_bg" style="background-image: linear-gradient(240deg, #00000085, #000000b0), url('<?php echo !empty($row['image']) && $row['image'] != 'none' ? './uploads/' . $row['image'] : './images/placeholder_city.png' ?>') !important">
                <div class="text-heading text-center">
                    <div class="container">

                        <h1><?php echo  $neighborhood; ?></h1>
                        <!-- <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; Blog Details</h2> -->
                        <p class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing</p>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->






            <!-- START SECTION BLOG -->
            <section class="blog blog-section bg-white pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 blog-pots">
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="news-item details no-mb2">
                                        <div class="news-img-link">
                                            <div class="news-item-img">
                                                <img class="img-responsive" src="<?php echo !empty($row['image']) && $row['image'] != 'none' ? './uploads/' . $row['image'] : './images/placeholder_city.png' ?>" alt="blog image">
                                            </div>
                                        </div>
                                        <div class="news-item-text details pb-0">
                                            <div>
                                                <h3><?php echo $row["name"]; ?></h3>
                                            </div>
                                            <div class="dates">
                                                <span class="date"><?php echo $row["date"]; ?></span>

                                            </div>
                                            <div class="news-item-descr big-news details visib mb-0">
                                            <?php echo $row["description"]; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <aside class="col-lg-3 col-md-12">
                            <div class="widget">
                                <!-- <h5 class="font-weight-bold mb-4">Search</h5> -->
                                <!-- <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </span>
                                </div> -->
                                <div class="recent-post py-5">
                                    <h5 class="font-weight-bold">Other Neighborhoods</h5>
                                    <ul>
                                        <?php
                                        $qry2 = "SELECT * FROM neighbourhood WHERE city='$city' AND  NOT name='$neighborhood' LIMIT 5";
                                        $result2 = $conn->query($qry2);
                                        if ($result2->num_rows > 0) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                        ?>
                                                <li><a href="neighborhoods_detail.php?id=<?php echo $row2['id']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $row2['name'] ?></a></li>


                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>

                                <!-- <div class="recent-post pt-5">
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
                                </div> -->
                            </div>
                        </aside>
                    </div>
                </div>
            </section>
            <!-- END SECTION BLOG -->

            <section class="properties-list featured portfolio blog ho-17">
                <div class="container">
                    <section id="properties" class=" headings-2 pt-0">
                        <?php
                        $qry2 = "SELECT * FROM properties WHERE neighborhood='$neighborhood'";
                        $result2 = $conn->query($qry2);
                        if ($result2->num_rows > 0) {
                            // output data of each row
                        ?>
                            <div class="pro-wrapper mb-3">
                                <div class="detail-wrapper-body">
                                    <div class="listing-title-bar">
                                        <div class="text-heading text-left">
                                            <!-- <p class="font-weight-bold mb-0 mt-3"><?php echo $result2->num_rows; ?> Search results</p> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="cod-pad single detail-wrapper mt-0 d-flex justify-content-md-end align-items-center">
                         <div class="input-group border rounded input-group-lg w-auto mr-4">
                             <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                             <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                 <option selected>Top Selling</option>
                                 <option value="1">Most Viewed</option>
                                 <option value="2">Price(low to high)</option>
                                 <option value="3">Price(high to low)</option>
                             </select>
                         </div>
                     </div> -->
                            </div>
                            <div class="row portfolio-items">
                                <?php
                                while ($row2 = $result2->fetch_assoc()) {
                                    $floorPlans = json_decode($row2['floorPlans']);
                                    $imageUrls = json_decode($row2['imageUrls']);

                                    if (is_array($floorPlans)) {
                                        $count = count($floorPlans);
                                        $i = 0;
                                        if (!empty($floorPlans[0]->rentMin)) {
                                            $ff =  '$' . $floorPlans[0]->rentMin . ' + ';
                                        } else if (!empty($floorPlans[1]->rentMin)) {
                                            $ff =  '$' . $floorPlans[1]->rentMin . ' + ';
                                        } else if (!empty($floorPlans[2]->rentMin)) {
                                            $ff =  '$' . $floorPlans[2]->rentMin . ' + ';
                                        } else {
                                            $ff =  'No Rent Info';
                                        }


                                        $types = array();
                                        while ($i < $count && $i != 3) {
                                            // echo $floorPlans[$i]->bed . '<span>|</span>';
                                            if (in_array($floorPlans[$i]->bed, $types) === false) {
                                                array_push($types, $floorPlans[$i]->bed);
                                            }
                                            $i++;
                                        }
                                        $tt = '';
                                        foreach ($types as $t) {
                                            if ($t === "bedroom1") {
                                                $tt .=  '1 Bed' . ' | ';
                                            } else if ($t === "bedroom2") {
                                                $tt .=  '2 Bed' . ' | ';
                                            } else if ($t === "bedroom3") {
                                                $tt .=  '3 Bed' . ' | ';
                                            } else {
                                                $tt .=  $t . ' | ';
                                            }
                                        }
                                    } else {
                                        continue;
                                    }
                                ?>
                                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                                        <div class="project-single mb-0" data-aos="fade-up">
                                            <a href="property_internal.php?id=<?php echo $row2['id']; ?>" class="recent-16">
                                                <div class="recent-img16 img-center" style="background-image: url(<?php if (!empty($imageUrls[0]) && $imageUrls[0] != 'https://api.sparkapt.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBamx4IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fa1c42e16d700b720e4e26b13c477b0961f679ec/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RW5KbGMybDZaVjkwYjE5bWFYUmJCMmtDNkFNdyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--43af89d2da5f0e3872ab5863ca5a5942f320921c/Pictures%20Coming%20Soon!.png') {
                                                                                                                        echo "'" . $imageUrls[0] . "'";
                                                                                                                    } else {
                                                                                                                        echo './images/noImage.png';
                                                                                                                    } ?>);"></div>
                                                <div class="recent-content"></div>

                                                <div class="recent-details">
                                                    <div class="recent-title">Property ID: <?php echo $row2['property_id']; ?></div>
                                                    <div class="recent-price"><?php echo $ff; ?></div>
                                                    <div class="house-details"><?php echo $tt ?>
                                                    </div>
                                                </div>
                                                <div class="view-proper">View Details</div>
                                            </a>
                                            <ul class="fav_icon ">

                                                <li class="heart_fav" id="<?php echo $row2['id']; ?>"><i class=" 
                                                <?php
                                                if (isset($_SESSION['email'])) {
                                                    $email = $_SESSION['email'];
                                                    // echo $email;

                                                    $qry4 = "SELECT * FROM users WHERE email='$email'";
                                                    $result4 = $conn->query($qry4);
                                                    if ($result4 && $result4->num_rows > 0) {
                                                        while ($row4 = $result4->fetch_assoc()) {
                                                            $fav_l = json_decode($row4['fav']);
                                                            if (in_array($row2['id'], $fav_l)) {
                                                                echo 'fa-solid';
                                                            } else {
                                                                echo 'fa-light';
                                                            }
                                                        }
                                                    }
                                                } else {
                                                    echo 'fa-light';
                                                }
                                                ?> fa-heart"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                            </div>
                            <!-- <nav aria-label="..." class="pt-33">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> -->
                    </section>
                </div>
            </section>

<?php
        }
    } else {
        echo "0 results";
    }
}
include('footer.php');
?>