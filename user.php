<?php
include './user_menu.php';
?>

<section class="properties-list featured portfolio blog ho-17">
    <div class="container">
        <section id="properties" class=" headings-2 pt-0">
            <div class="row portfolio-items">

                <?php

                $qry5 = "SELECT * FROM users WHERE email='$email'";
                $result5 = $conn->query($qry5);
                if ($result5->num_rows > 0) {
                    while ($row5 = $result5->fetch_assoc()) {
                        $fav_ll = json_decode($row5['fav'], true);
                        $fav_ll = array_values($fav_ll);
                        $f = 1;
                        $c_fav = count($fav_ll);

                        while ($f < $c_fav) {
                            $id_ff =  $fav_ll[$f];


                            $qry2 = "SELECT * FROM properties WHERE id='$id_ff'";
                            $result2 = $conn->query($qry2);
                            if ($result2->num_rows > 0) {
                                // output data of each row
                ?>

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
                                                    if ($result4->num_rows > 0) {
                                                        while ($row4 = $result4->fetch_assoc()) {
                                                            $fav_l = json_decode($row4['fav']);
                                                            if (in_array($row2['id'], $fav_l)) {
                                                                echo 'fa-light';
                                                            } else {
                                                                echo 'fa-solid';
                                                            }
                                                        }
                                                    }
                                                }
                                                ?> fa-heart"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                <?php
                                }
                            }
                            $f++;
                        }
                    }
                }
                ?>
            </div>
        </section>
    </div>
</section>

<?php

include './footer.php';
?>