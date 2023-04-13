 <?php
    include('header.php');
    ?>
 <div class="clearfix"></div>
 <!-- Header Container / End -->
 <!-- END SECTION HEADINGS -->
 <section class="headings find_home">
     <div class="text-heading text-center">
         <div class="container">
             <h1>Find Your Dream Home</h1>
             <h2>Browse our listings or contact us for information.</h2>
             <!-- <p>Get to know us.</p> -->
         </div>
     </div>
 </section>
 <!-- START SECTION PROPERTIES LISTING -->
 <section class="properties-list featured portfolio blog ho-17">
     <div class="container">
         <section class="headings-2 pt-0 pb-0">
             <div class="container">
                 <div class="detail-wrapper-body row">
                     <div class="listing-title-bar col-lg-12 text-center">
                         <!-- <div class="text-heading text-left">
                                    <p><a href="index-2.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                </div> -->
                         <h3>Find Your Home</h3>
                         <p>Browse our listings or contact us for information.</p>
                     </div>
                 </div>
             </div>
         </section>
         <!-- Search Form -->
         <div class="col-12 px-0 parallax-searchs">
             <div class="banner-search-wrap">
                 <div class="tab-content">
                     <div class="tab-pane fade show active" id="tabs_1">
                         <div class="rld-main-search">
                             <div class="row justify-content-between">
                                 <div class="rld-single-input search">
                                     <input type="text" placeholder="Enter Keyword...">
                                 </div>
                                 <div class="rld-single-select ml-22">
                                     <select class="select single-select property">
                                         <option value="1" disabled selected>Property Type</option>
                                         <option value="studio">Studio</option>
                                         <option value="Apartment">Apartment</option>
                                     </select>
                                 </div>
                                 <div class="rld-single-select">
                                     <select class="select single-select city mr-0">

                                         <option value="Location" disabled selected>Location</option>
                                         <?php
                                            $qry = "SELECT * FROM cities WHERE status=1";
                                            $result = $conn->query($qry);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>
                                                 <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                                         <?php
                                                }
                                            }
                                            ?>
                                     </select>
                                 </div>
                                 <div class="dropdown-filter"><span>Advanced Search</span></div>
                                 <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                     <a class="btn btn-yellow" id="search_now" href="#">Search Now</a>
                                 </div>
                                 <div class="explore__form-checkbox-list full-filter">
                                     <div class="row">
                                         <!-- <div class="col-lg-3 col-md-6 py-1 pr-30 pl-0"> -->
                                         <!-- Form Property Status -->
                                         <!-- <div class="form-group categories">
                                                 <div class="nice-select form-control wide" tabindex="1"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                     <ul class="list">
                                                         <li data-value="1" class="option selected ">For Sale</li>
                                                         <li data-value="2" class="option">For Rent</li>
                                                     </ul>
                                                 </div>
                                             </div> -->
                                         <!--/ End Form Property Status -->
                                         <!-- </div> -->
                                         <div class="col-lg-3 col-md-6 py-1 pr-30 pl-0 ">
                                             <!-- Form Bedrooms -->
                                             <div class="form-group beds">
                                                 <div class="nice-select bed form-control wide" tabindex="2"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                     <ul class="list">
                                                         <li data-value="bedroom1" class="option selected">1</li>
                                                         <li data-value="bedroom2" class="option">2</li>
                                                         <li data-value="bedroom3" class="option">3</li>
                                                         <li data-value="bedroom4" class="option">4</li>
                                                         <li data-value="bedroom5" class="option">5</li>
                                                         <li data-value="bedroom6" class="option">6</li>
                                                         <li data-value="bedroom7" class="option">7</li>
                                                         <li data-value="bedroom8" class="option">8</li>
                                                         <li data-value="bedroom9" class="option">9</li>
                                                         <li data-value="bedroom10" class="option">10</li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <!--/ End Form Bedrooms -->
                                         </div>
                                         <div class="col-lg-3 col-md-6 py-1 pl-0 pr-0">
                                             <!-- Form Bathrooms -->
                                             <div class="form-group bath">
                                                 <div class="nice-select bath form-control wide" tabindex="3"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                     <ul class="list">
                                                         <li data-value="1" class="option selected">1</li>
                                                         <li data-value="2" class="option">2</li>
                                                         <li data-value="3" class="option">3</li>
                                                         <li data-value="4" class="option">4</li>
                                                         <li data-value="5" class="option">5</li>
                                                         <li data-value="6" class="option">6</li>
                                                         <li data-value="7" class="option">7</li>
                                                         <li data-value="8" class="option">8</li>
                                                         <li data-value="9" class="option">9</li>
                                                         <li data-value="10" class="option">10</li>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <!--/ End Form Bathrooms -->
                                         </div>
                                         <div class="col-lg-5 col-md-6 py-1 pl-0 pr-0">
                                             <!-- Form Bathrooms -->
                                             <div class="form-group bath">
                                                 <div class="nice-select form-control wide" tabindex="4"><span class="current"><i class="fa-solid fa-abacus"></i>Area Range / Price Range</span>
                                                     <ul class="list">
                                                         <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                             <!-- Price Fields -->
                                                             <div class="main-search-field-2">
                                                                 <!-- Area Range -->
                                                                 <div class="range-slider">
                                                                     <label>Area Size</label>
                                                                     <div class="area-range" id="area-range" data-min="0" data-max="100000" data-unit="sq ft"></div>
                                                                     <div class="clearfix"></div>
                                                                 </div>
                                                                 <br>
                                                                 <!-- Price Range -->
                                                                 <div class="range-slider">
                                                                     <label>Price Range</label>
                                                                     <div class="price-range" id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                     <div class="clearfix"></div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </ul>
                                                 </div>
                                             </div>
                                             <!--/ End Form Bathrooms -->
                                         </div>

                                         <div class="col-lg-6 col-md-6 col-sm-12 py-2 pr-30">
                                             <h5 class="text-center">AMENITIES</h5>
                                             <!-- Checkboxes -->
                                             <div class="d-lg-flex">
                                                 <div class="checkboxes amenities one-in-row margin-bottom-10 ch-1">
                                                     <input id="check-2" value="Parking" type="checkbox" name="check">
                                                     <label for="check-2"><i class="fa-solid fa-car mr-2"></i>Parking</label>
                                                     <input id="check-3" type="checkbox" value="Outdoor Pool" name="check">
                                                     <label for="check-3"><i class="fa-solid fa-water-ladder mr-2"></i>Outdoor Pool</label>
                                                     <input id="check-4" type="checkbox" value="Storage Room" name="check">
                                                     <label for="check-4"><i class="fa-solid fa-booth-curtain mr-2"></i> Storage Room</label>
                                                     <input id="check-19" type="checkbox" value="Bussines Center" name="check">
                                                     <label for="check-19"><i class="fa-solid fa-business-time mr-2"></i> Bussines Center</label>
                                                     <input id="check-5" type="checkbox" value="Common Wifi" name="check">
                                                     <label for="check-5"><i class="fa-solid fa-wifi mr-2"></i>Common Wifi</label>
                                                     <input id="check-6" type="checkbox" value="Doorman" name="check">
                                                     <label for="check-6"><i class="fa-sharp fa-solid fa-door-closed mr-2"></i>Doorman</label>
                                                     <input id="check-7" type="checkbox" value="Dog Run" name="check">
                                                     <label for="check-7"><i class="fa-solid fa-bottle-droplet mr-2"></i>Dog Run</label>
                                                     <input id="check-8" type="checkbox" value="Spa / Jacuzzi" name="check">
                                                     <label for="check-8"><i class="fa-solid fa-bath mr-2"></i>Spa / Jacuzzi</label>
                                                     <input id="check-9" type="checkbox" value="olf / Simulator" name="check">
                                                     <label for="check-9"><i class="fa-duotone fa-golf-ball-tee mr-2"></i>Golf / Simulator</label>
                                                 </div>
                                                 <div class="checkboxes amenities one-in-row margin-bottom-10 ch-1">
                                                     <input id="check-10" type="checkbox" value="Fitness Center" name="check">
                                                     <label for="check-10"><i class="fa-solid fa-dumbbell mr-2"></i>Fitness Center</label>
                                                     <input id="check-11" type="checkbox" value="Indoor Pool" name="check">
                                                     <label for="check-11"><i class="fa-solid fa-water-ladder mr-2"></i>Indoor Pool</label>
                                                     <input id="check-12" type="checkbox" value="Bike Room" name="check">
                                                     <label for="check-12"><i class="fa-sharp fa-solid fa-motorcycle mr-2"></i>Bike Room</label>
                                                     <input id="check-13" type="checkbox" value="Event Room" name="check">
                                                     <label for="check-13"><i class="fa-solid fa-chimney mr-2"></i>Event Room</label>
                                                     <input id="check-14" type="checkbox" value="Parking" name="check">
                                                     <label for="check-14"><i class="fa-regular fa-person-booth mr-2"></i>Communal Room</label>
                                                     <input id="check-15" type="checkbox" value="Fenced Community" name="check">
                                                     <label for="check-15"><i class="fa-regular fa-people mr-2"></i>Fenced Community</label>
                                                     <input id="check-16" type="checkbox" value="Roof Deck" name="check">
                                                     <label for="check-16"><i class="fa-solid fa-glasses mr-2"></i>Roof Deck</label>
                                                     <input id="check-17" type="checkbox" value="Baskitball court" name="check">
                                                     <label for="check-17"><i class="fa-regular fa-basketball mr-2"></i>Baskitball court</label>
                                                     <input id="check-18" type="checkbox" value="EV charging solution" name="check">
                                                     <label for="check-18"><i class="fa-solid fa-charging-station mr-2"></i>EV charging solution</label>
                                                 </div>
                                             </div>

                                             <!-- Checkboxes / End -->
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-12 py-2 pr-30">
                                             <h5 class="text-center">UNIT FEATURES</h5>
                                             <!-- Checkboxes -->
                                             <div class="d-lg-flex">
                                                 <div class="checkboxes one-in-row margin-bottom-10 ch-1">

                                                     <input id="check-20" type="checkbox" name="check">
                                                     <label for="check-20"><i class="fa-solid fa-washing-machine mr-2"></i>In-unit laundry</label>
                                                     <input id="check-21" type="checkbox" name="check">
                                                     <label for="check-21"><i class="fa-solid fa-pen-nib mr-2"></i>Penthouse</label>
                                                     <input id="check-23" type="checkbox" name="check">
                                                     <label for="check-23"><i class="fa-solid fa-border-all mr-2"></i> Den</label>
                                                     <input id="check-24" type="checkbox" name="check">
                                                     <label for="check-24"><i class="fa-solid fa-business-time mr-2"></i> Bath Tub </label>
                                                     <input id="check-25" type="checkbox" name="check">
                                                     <label for="check-25"><i class="fa-regular fa-window-frame mr-2"></i>Floor-to-ceiling Window</label>
                                                     <input id="check-26" type="checkbox" name="check">
                                                     <label for="check-26"><i class="fa-solid fa-tower-observation mr-2"></i>Dual Vantity</label>
                                                     <input id="check-27" type="checkbox" name="check">
                                                     <label for="check-27"><i class="fa-solid fa-gallery-thumbnails mr-2"></i>Balcony</label>
                                                 </div>
                                                 <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                     <input id="check-28" type="checkbox" name="check">
                                                     <label for="check-28"><i class="fa-solid fa-utensils mr-2"></i>Dishwasher</label>
                                                     <input id="check-30" type="checkbox" name="check">
                                                     <label for="check-30"><i class="fa-solid fa-tower-control mr-2"></i>Townhouse</label>
                                                     <input id="check-31" type="checkbox" name="check">
                                                     <label for="check-31"><i class="fa-solid fa-door-open mr-2"></i>Walk-in Closet</label>
                                                     <input id="check-32" type="checkbox" name="check">
                                                     <label for="check-32"><i class="fa-solid fa-vacuum-robot mr-2"></i>Hardwood Floor</label>
                                                     <input id="check-33" type="checkbox" name="check">
                                                     <label for="check-33"><i class="fa-solid fa-fire-flame-simple mr-2"></i>Gas Stove</label>
                                                     <input id="check-34" type="checkbox" name="check">
                                                     <label for="check-34"><i class="fa-solid fa-hat-chef mr-2"></i>Kitchen Island</label>
                                                     <input id="check-35" type="checkbox" name="check">
                                                     <label for="check-35"><i class="fa-solid fa-seedling mr-2"></i>Terrace</label>
                                                 </div>
                                             </div>

                                             <!-- Checkboxes / End -->
                                         </div>
                                         <!-- <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                    
                                                   
                                                    <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                        <input id="check-9" type="checkbox" name="check">
                                                        <label for="check-9">wifi</label>
                                                        <input id="check-10" type="checkbox" name="check">
                                                        <label for="check-10">TV Cable</label>
                                                        <input id="check-11" type="checkbox" name="check">
                                                        <label for="check-11">Dryer</label>
                                                        <input id="check-12" type="checkbox" name="check">
                                                        <label for="check-12">Microwave</label>
                                                        <input id="check-13" type="checkbox" name="check">
                                                        <label for="check-13">Washer</label>
                                                        <input id="check-14" type="checkbox" name="check">
                                                        <label for="check-14">Refrigerator</label>
                                                        <input id="check-15" type="checkbox" name="check">
                                                        <label for="check-15">Outdoor Shower</label>
                                                    </div>
                                                    
                                                </div> -->
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!--/ End Search Form -->
         <section id="properties" class="headings-2 pt-0">
             <?php
                $qry2 = "SELECT * FROM properties ORDER BY RAND() LIMIT 100";
                $result2 = $conn->query($qry2);
                if ($result2->num_rows > 0) {
                    // output data of each row
                ?>
                 <div class="pro-wrapper mb-3">
                     <div class="detail-wrapper-body">
                         <div class="listing-title-bar">
                             <div class="text-heading text-left">
                                 <p class="font-weight-bold mb-0 mt-3"><?php echo $result2->num_rows; ?> Search results</p>
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
                                                                                                            echo $imageUrls[0];
                                                                                                        } else {
                                                                                                            echo './images/noImage.png';
                                                                                                        } ?>);"></div>
                                     <div class="recent-content"></div>

                                     <div class="recent-details">
                                         <div class="recent-title"><?php echo $row2['neighborhood']; ?></div>
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
                        ?>
                 </div>
             <?php

                }
                ?>
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
 <!-- END SECTION PROPERTIES LISTING -->

 <?php
    include('footer.php');
    ?>