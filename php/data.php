<?php

$output .= '
<div class="pro-wrapper mb-3">
<div class="detail-wrapper-body">
    <div class="listing-title-bar">
        <div class="text-heading text-left">
            <p class="font-weight-bold mb-0 mt-3"> Showing complete properties out of ' . mysqli_num_rows($query) . ' Search results</p>
        </div>
    </div>
</div>

</div>
<div class="row portfolio-items">';
while ($row3 = mysqli_fetch_assoc($query)) {
    $floorPlans = json_decode($row3['floorPlans']);
    $imageUrls = json_decode($row3['imageUrls']);
    // echo print_r($floorPlans);


    if (is_array($floorPlans) === true && !empty($floorPlans)) {

        $numbers = array_column($floorPlans, 'sqftMin');
        $min = min($numbers);
        $max = max($numbers);
        if (!empty($slider_area1) &&  !empty($slider_area2) &&  !empty($min) &&  !empty($max)) {
            if ($min > $slider_area1 && $max < $slider_area2) {
            } else {
                // echo $slider_area1 . '   ' . $min;
                continue;
            }
        }

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


        $j = 0;
        $baths = array();
        while ($i < $count) {
            // echo $floorPlans[$i]->bed . '<span>|</span>';
            if (in_array($floorPlans[$i]->bath, $baths) === false) {
                array_push($baths, $floorPlans[$i]->bath);
            }
            $i++;
        }

        // echo print_R($baths);
        if (!empty($bath)) {
            if (in_array($bath, $baths)) {
            } else {
                continue;
            }
        }

        $dates_f = array();
        foreach ($floorPlans as $floor_d) {
            $units = $floor_d->units;
            foreach ($units as $uni) {
                // echo $uni->moveIn;
                $newdate = date("Y-m-d", strtotime($uni->moveIn));
                array_push($dates_f, $newdate);
            }
        }
        // echo count($dates_f);
        $is_in_date = array();
        if (count($dates_f) > 0 && $date_pick != "") {

            // $min_date = min($dates_f);
            // $max_date = max($dates_f);
            // echo $min_date;
            // // echo $max_date . '<br/>';
            // if(!empty($date_pick)){
            $start = strstr($date_pick, '-', true);
            $after = explode('-', $date_pick, 2)[1];

            $start_date = str_replace("/", "-", $start);
            $after_date = str_replace("/", "-", $after);


            //     // echo $after . '<br/>';
            //     if($min_date>$start && $max_date<$after){

            //     }else{
            //         continue;
            //     }
            // }

            foreach ($dates_f as $d_f) {
                // echo '<br/>' . $d_f . '<br/>';
                // echo '<br/>' . $start_date . '<br/>';
                // echo $after_date . '<br/>';

                // Use strtotime() function to convert
                // date into dateTimestamp
                $dateTimestamp1 = strtotime($start_date);
                $dateTimestamp2 = strtotime($after_date);
                $d_f_d = strtotime($d_f);


                // Compare the timestamp date 
                // if ($dateTimestamp1 > $dateTimestamp2)
                //     echo '<br/>' . "$start_date is latest than $after_date" . '<br/>';
                // else
                //     echo '<br/>' . "$start_date is older than $after_date" . '<br/>';
                // echo $start_date . '<br/>'. '<br/>';

                if ($d_f_d > $dateTimestamp1 && $d_f_d < $dateTimestamp2) {
                    array_push($is_in_date, true);
                    // echo "fuck";
                }
            }
            if (count($is_in_date) < 1) {
                continue;
            }
        }

        $tt = '';
        // echo print_r($types) . "<br/>";


        $b_t = array();
        if (count($beds) > 0) {
            foreach ($beds as $bed) {

                // echo print_r($beds);
                if (in_array($bed, $types)) {

                    array_push($b_t, $bed);
                }
            }
            // echo print_r($b_t);
            if (count($b_t) < 1) {
                continue;
            }
        }


        foreach ($types as $t) {
            if ($t === "bedroom1") {
                $tt .=  '1 Bed' . ' | ';
            } else if ($t === "bedroom2") {
                $tt .=  '2 Bed' . ' | ';
            } else if ($t === "bedroom3") {
                $tt .=  '3 Bed' . ' | ';
            } else if ($t === "bedroom4") {
                $tt .=  '4 Bed' . ' | ';
            } else {
                $tt .=  $t . ' | ';
            }
        }
        if (!empty($property)) {
            if (in_array($property, $types)) {
                // echo print_r($types);
            } else if ($property === "Apartment") {
                if (in_array("bedroom1", $types) || in_array("bedroom2", $types) || in_array("bedroom3 ", $types)) {
                }
            } else {
                // echo print_r($types);
                continue;
            }
        }
    } else {
        continue;
    }
    $addonItems = json_decode($row3['addonItems']);
    if (is_array($amenities)) {

        foreach ($amenities as $a) {

            if (in_array($a, $addonItems)) {
                // echo print_r($addonItems);
                continue;
            } else {
            }
            continue 2;
            // break;
        }
    }



    $solid = 'fa-light';
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
        // echo $email;

        $qry4 = "SELECT * FROM users WHERE email='$email'";
        $result4 = $conn->query($qry4);
        if ($result4->num_rows > 0) {
            while ($row4 = $result4->fetch_assoc()) {
                $fav_l = json_decode($row4['fav']);
                if (in_array($row3['id'], $fav_l)) {
                    $solid = 'fa-solid';
                } else {
                    $solid = 'fa-light';
                }
            }
        }
    }

    if (!empty($imageUrls[0]) && $imageUrls[0] != "https://api.sparkapt.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBamx4IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fa1c42e16d700b720e4e26b13c477b0961f679ec/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RW5KbGMybDZaVjkwYjE5bWFYUmJCMmtDNkFNdyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--43af89d2da5f0e3872ab5863ca5a5942f320921c/Pictures%20Coming%20Soon!.png") {
        $img =  "'" . $imageUrls[0] . "'";
    } else {
        $img =  "./images/noImage.png";
    }

    $output .= '<div class="item col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single mb-0" data-aos="fade-up">
                        <a href="property_internal.php?id=' . $row3['id'] . '" class="recent-16">
                            <div class="recent-img16 img-center" style="background-image: url(' . $img . ');"></div>
                            <div class="recent-content"></div>

                            <div class="recent-details">
                                <div class="recent-title">Property ID: ' . $row3['property_id'] . '</div>
                                <div class="recent-price">' . $ff . '</div>
                                <div class="house-details">' . $tt . '
                                </div>
                            </div>
                            <div class="view-proper">View Details</div>
                        </a>
                        <ul class="fav_icon ">

                        <li class="heart_fav" id="' . $row3['id'] . '"><i class="  
                        ' . $solid . ' fa-heart"></i></li>
                    </ul>
                    </div>
                </div>';
}
$output .= '</div>';
