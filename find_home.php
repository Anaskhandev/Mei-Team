    <?php
    include "header.php";


    $data = array();
    $sql = "SELECT * FROM properties";
    $query = $conn->query($sql);
    $m = 1;
    while ($row = $query->fetch_assoc()) {
        $image_f = './images/noImage.png';

        $floorPlans = json_decode($row['floorPlans']);

        $imageUrls = json_decode($row['imageUrls']);
        if (!empty($imageUrls[0]) && $imageUrls[0] != 'https://api.sparkapt.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBamx4IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fa1c42e16d700b720e4e26b13c477b0961f679ec/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RW5KbGMybDZaVjkwYjE5bWFYUmJCMmtDNkFNdyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--43af89d2da5f0e3872ab5863ca5a5942f320921c/Pictures%20Coming%20Soon!.png') {
            $image_f =  $imageUrls[0];
        } else {
            $image_f = './images/noImage.png';
        }
        $ff = '';
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
        }


        $arr_Row = array('id' => 'marker-' . $m, 'title' => 'Property ID: ' . $row['property_id'],  "icon" => "", "desc" => $row['neighborhood'], 'image' => $image_f, 'link' => 'property_internal.php?id=' . $row['id'], 'center' => array(is_numeric($row['lat']) ? $row['lat'] * 1 : 82.8, is_numeric($row['longitude']) ? $row['longitude'] * 1 : 135), 'price' => $ff);
        // array_push($data, );
        $data[] = $arr_Row;
        $m++;
    }

    //convert to json
    $data = json_encode($data);

    // create json file
    $filename = 'members.json';
    if (file_put_contents($filename, $data)) {
        // echo 'Json file created';
    } else {
        // echo 'An error occured in creating the file';
    }

    ?>
    <section class="headings find_home Neighborhood">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Properties</h1>
                <!-- <h2>America is made up of dozens of incredible Properties. Let’s find which one is right for you.</h2> -->
                <!-- <p>Get to know us.</p> -->
            </div>
        </div>
    </section>
    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-right featured portfolio blog google-map-right">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 parallax-searchs">
                    <div class="banner-search-wrap">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs_1">
                                <div class="rld-main-search">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-2 col-sm-3 rld-single-input search">
                                            <input class="map_search" type="text" placeholder="Keywords">
                                        </div>
                                        <div class="col-xl-2 col-sm-3 rld-single-select ml-22" hidden>
                                            <select class="select single-select property" hidden>
                                                <option value="1" disabled selected>Property Type</option>
                                                <option value="studio">Studio</option>
                                                <option value="Apartment">Apartment</option>
                                            </select>
                                        </div>
                                        <div class="col-xl-2 col-sm-3 rld-single-select">

                                            <div class="nice-select wide form-control mt-0" tabindex="4"><span class="current">Neighborhoods</span>
                                                <ul class="list">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                        <!-- Price Fields -->
                                                        <div class="main-search-field-2">
                                                            <h5 class="text-center">Cities</h5>
                                                            <!-- Checkboxes -->
                                                            <div class="d-lg-flex">
                                                                <div class="d-flex flex-md-row flex-column cities_check one-in-row margin-bottom-10 ch-1">
                                                                    <?php
                                                                    $qry = "SELECT * FROM cities WHERE status=1";
                                                                    $result = $conn->query($qry);
                                                                    if ($result->num_rows > 0) {
                                                                        // output data of each row
                                                                        while ($row = $result->fetch_assoc()) {
                                                                    ?>
                                                                            <div class="form-group">
                                                                                <input class="d-none" id="check-<?php echo $row['name'] ?>" value="<?php echo $row['name'] ?>" type="radio" name="check">

                                                                                <label for="check-<?php echo $row['name'] ?>"><i class="fa-regular fa-square mx-2"></i><?php echo $row['name'] ?></label>
                                                                            </div>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <!-- <select multiple class="nice-select neighbourhood_c mr-0">

                                                                <option value="Location" disabled selected>Neighborhoods</option>
                                                                <?php
                                                                // $qry = "SELECT * FROM cities WHERE status=1";
                                                                // $result = $conn->query($qry);
                                                                // if ($result->num_rows > 0) {
                                                                //     // output data of each row
                                                                //     while ($row = $result->fetch_assoc()) {
                                                                ?>
                                                                <option value="<?php
                                                                                // echo $row['name'] 
                                                                                ?>"><?php
                                                                                    // echo $row['name'] 
                                                                                    ?></option>
                                                                <?php
                                                                //     }
                                                                // }
                                                                ?>
                                                            </select> -->

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 py-2 pr-30 Neighborhoodss">
                                                        <h5 class="text-center">Neighborhood</h5>
                                                        <!-- Checkboxes -->
                                                        <div class="container-fluid">
                                                            <div class="checkboxes neighbourhood_c one-in-row margin-bottom-10 ch-1 row" style="max-width: 1000px;">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-2 col-sm-3 beds rld-single-select"> -->
                                        <!-- Form Bedrooms -->

                                        <!--/ End Form Bedrooms -->
                                        <!-- </div> -->
                                        <!-- <div class="col-xl-2 col-sm-3 rld-single-select my-sm-0 my-3">
                                            <div class="wide form-control mt-0" tabindex="4"><span class="current">Bed / Bath</span>
                                                <ul class="list">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                        <div class="main-search-field-2">
                                                            <select multiple class=" bed single-select " tabindex="2"><span class="current">
                                                                    <option value="" disabled>Bedrooms</option>
                                                                    <option value="Studio">Studio</option>
                                                                    <option value="Convertible">Convertible</option>
                                                                    <option value="bedroom1">1 Bedroom</option>
                                                                    <option value="bedroom2">2 Bedrooms</option>
                                                                    <option value="bedroom3">3+ Bedrooms</option>
                                                            </select>

                                                        </div>
                                                        <div class="main-search-field-2">
                                                            <select class=" bath single-select" tabindex="3">
                                                                <option value="" disabled selected>Bathrooms</option>
                                                                <option value="1">1 Bathroom</option>
                                                                <option value="1.5">1.5 Bathrooms</option>
                                                                <option value="2">2 Bathrooms</option>
                                                                <option value="2.5">2.5 Bathrooms</option>
                                                                <option value="3">3+ Bathrooms</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>

                                        </div> -->
                                        <div class="col-xl-2 col-sm-3 rld-single-select my-sm-0 mt-3 mb-0 ">
                                            <div class="dropdown">
                                                <button class="btn form-control nice-select px-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Bed / Bath
                                                </button>
                                            </div>
                                            <ul class="dropdown-menu bed_drop" aria-labelledby="dropdownMenuButton1">
                                                <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                    <div class="main-search-field-2">
                                                        <select multiple class=" bed single-select " tabindex="2"><span class="current">
                                                                <option value="" disabled>Bedrooms</option>
                                                                <option value="Studio">Studio</option>
                                                                <option value="convertible">Convertible</option>
                                                                <option value="bedroom1">1 Bedroom</option>
                                                                <option value="bedroom2">2 Bedrooms</option>
                                                                <option value="bedroom3">3+ Bedrooms</option>
                                                        </select>
    
                                                    </div>
                                                    <div class="main-search-field-2">
                                                        <select class=" bath single-select" tabindex="3">
                                                            <option value="" disabled selected>Bathrooms</option>
                                                            <option value="1">1 Bathroom</option>
                                                            <option value="1.5">1.5 Bathrooms</option>
                                                            <option value="2">2 Bathrooms</option>
                                                            <option value="2.5">2.5 Bathrooms</option>
                                                            <option value="3">3+ Bathrooms</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </ul>
                                        </div>

                                        <div class="col-xl-2 col-sm-3 dropdown-filter rld-single-input">
                                            <!-- <span>Advanced Search</span> -->
                                            <input class="p-2" type="button" value="Amenities">
                                            <i class="fa-chevron-down fa-sm fas dropdown-icon"></i>
                                        </div>
                                        <div class="col-xl-1 col-sm-3 px-md-0 mb-md-0 mb-3 price">
                                            <!-- Form Bathrooms -->
                                            <div class="nice-select wide form-control mt-0" tabindex="4"><span class="current">Price</span>
                                                <ul class="list">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                        <!-- Price Fields -->
                                                        <div class="main-search-field-2">

                                                            <!-- Price Range -->
                                                            <div class="range-slider">
                                                                <label>Price Range</label>
                                                                <div class="price-range" id="price-range" data-min="0" data-max="600000" data-unit2="+" data-unit="$"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <!--/ End Form Bathrooms -->
                                        </div>
                                        <div class="col-xl-2 col-sm-3">
                                            <!-- Form Bathrooms -->
                                            <div class="nice-select wide form-control mt-0" tabindex="4"><span class="current">Move-In Date</span>
                                                <ul class="list">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                        <!-- Price Fields -->
                                                        <div class="main-search-field-2">

                                                            <!-- Price Range -->
                                                            <input data-start="<?php echo date("Y/m/d") ?>" data-end="<?php echo date("Y/m/d", strtotime("+100 week")); ?>" type="text" name="dates" class="d-block my-4 mx-auto">
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                            <!--/ End Form Bathrooms -->
                                        </div>
                                        <div class="col-xl-1 col-sm-3 d-flex px-sm-0">
                                            <a class="btn btn-yellow mr-2" id="search_now" href="#"><i class="fa fa-magnifying-glass"></i></a>
                                            <button class="btn btn-yellow" id="reset_now"><i class="fa fa-refresh"></i></button>
                                        </div>
                                        <!-- <div class="col-md-1 ">
                                        </div> -->
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

                                                <!-- Area Range -->
                                                <div class="col-12">
                                                    <div class="range-slider col-md-6 col-12 mx-auto">
                                                        <label>Area Size</label>
                                                        <div class="area-range" id="area-range" data-min="0" data-max="100000" data-unit2="sqft" data-unit="+ sqft"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                                <br>

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
                                                        <div class="checkboxes unit_f one-in-row margin-bottom-10 ch-1">

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
                                                        <div class="checkboxes unit_f one-in-row margin-bottom-10 ch-1">
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
                <div class="col-lg-6 col-md-12 map_Area blog-pots pr-0 fx-google-map-right">
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
                                    <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                        <div class="project-single mb-0" data-aos="fade-up">
                                            <a href="property_internal.php?id=<?php echo $row2['id']; ?>" class="recent-16">
                                                <div class="recent-img16 img-center" style="background-image: url(<?php if (!empty($imageUrls[0]) && $imageUrls[0] != 'https://api.sparkapt.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBamx4IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fa1c42e16d700b720e4e26b13c477b0961f679ec/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RW5KbGMybDZaVjkwYjE5bWFYUmJCMmtDNkFNdyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--43af89d2da5f0e3872ab5863ca5a5942f320921c/Pictures%20Coming%20Soon!.png') {
                                                                                                                        echo $imageUrls[0];
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
                <aside class="col-lg-6 col-md-12 google-maps-right mt-0">
                    <div id="map-leaflet"></div>
                </aside>
            </div>
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                </div>
                <div class="log-separator fl-wrap"><span>Or</span></div>
                <div id="tabs-container">
                    <ul class="tabs-menu">
                        <li class="current"><a href="#tab-1">Login</a></li>
                        <li><a href="#tab-2">Register</a></li>
                    </ul>
                    <div class="tab">
                        <div id="tab-1" class="tab-contents">
                            <div class="custom-form">
                                <form method="post" name="registerform">
                                    <label>Username or Email Address * </label>
                                    <input name="email" type="text" onClick="this.select()" value="">
                                    <label>Password * </label>
                                    <input name="password" type="password" onClick="this.select()" value="">
                                    <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                    <div class="clearfix"></div>
                                    <div class="filter-tags">
                                        <input id="check-a" type="checkbox" name="check">
                                        <label for="check-a">Remember me</label>
                                    </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab">
                            <div id="tab-2" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                        <label>First Name * </label>
                                        <input name="name" type="text" onClick="this.select()" value="">
                                        <label>Second Name *</label>
                                        <input name="name2" type="text" onClick="this.select()" value="">
                                        <label>Email Address *</label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password *</label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--register form end -->

    <!-- ARCHIVES JS -->
    <script src="./js/rangeSlider.js"></script>
    <script src="./js/tether.min.js"></script>
    <script src="./js/moment.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/mmenu.min.js"></script>
    <script src="./js/mmenu.js"></script>
    <script src="./js/animate.js"></script>
    <script src="./js/aos.js"></script>
    <script src="./js/aos2.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/fitvids.js"></script>
    <script src="./js/jquery.waypoints.min.js"></script>
    <script src="./js/typed.min.js"></script>
    <script src="./js/jquery.counterup.min.js"></script>
    <script src="./js/counterup.js"></script>
    <script src="./js/imagesloaded.pkgd.min.js"></script>
    <script src="./js/isotope.pkgd.min.js"></script>
    <script src="./js/smooth-scroll.min.js"></script>
    <script src="./js/lightcase.js"></script>
    <script src="./js/search.js"></script>
    <script src="./js/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="./js/ajaxchimp.min.js"></script>
    <script src="./js/newsletter.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/searched.js"></script>
    <script src="./js/forms-2.js"></script>
    <!-- <script src="./js/leaflet.js"></script>
    <script src="./js/leaflet-gesture-handling.min.js"></script>
    <script src="./js/leaflet-providers.js"></script>
    <script src="./js/leaflet.markercluster.js"></script> -->
    <script src="./js/datedropper.js"></script>
    <script src="./js/timedropper.js"></script>
    <script src="./js/range.js"></script>
    <script src="./js/color-switcher.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.md5@1.0/index.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script>

    </script>
    <script src="./js/script.js"></script>

    <?php echo $js ?? ''; ?>
    <script>
        $('select').niceSelect();
        // $('.wide').niceSelect()

        $(".dropdown-filter").on('click', function() {

            $(".explore__form-checkbox-list").toggleClass("filter-block");

        });


        const searchBar = document.querySelector('.search input'),
            usersList = document.querySelector('#properties');

        $(document).ready(function() {



            'use strict';

            if ($('#map-leaflet').length) {
                var map = L.map('map-leaflet', {
                    zoom: 15,
                    maxZoom: 20,
                    tap: false,
                    gestureHandling: true,
                    center: [30.2722829, -97.7423348],
                });

                var marker_cluster = L.markerClusterGroup();

                map.scrollWheelZoom.disable();

                var OpenStreetMap_DE = L.tileLayer(
                    'https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
                        scrollWheelZoom: false,
                        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                    }
                ).addTo(map);

                $.ajax('members.json', {
                    success: function(markers) {
                        $.each(markers, function(index, value) {
                            var icon = L.divIcon({
                                html: value.icon,
                                iconSize: [20, 20],
                                iconAnchor: [20, 20],
                                popupAnchor: [-20, -20],
                            });

                            var marker = L.marker(value.center, {
                                icon: icon,
                            }).addTo(map);

                            marker.bindPopup(
                                '<div class="listing-window-image-wrapper">' +
                                '<a href="' +
                                value.link +
                                '">' +
                                '<div class="listing-window-image" style="background-image: url(' +
                                value.image +
                                ');"></div>' +
                                '<div class="listing-window-content">' +
                                '<div class="info">' +
                                '<h2>' +
                                value.title +
                                '</h2>' +
                                '<p>' +
                                value.desc +
                                '</p>' +
                                '<h3>' +
                                value.price +
                                '</h3>' +
                                '</div>' +
                                '</div>' +
                                '</a>' +
                                '</div>'
                            );

                            marker_cluster.addLayer(marker);
                        });

                        map.addLayer(marker_cluster);
                    },
                });
            }
            var gotocountry = function(c) {
                // you get  afghanistan coordinates from google
                if (c == 'ch') map.setView(new L.LatLng(41.8781, -87.6298), 12);
                if (c == 'au') map.setView(new L.LatLng(30.3079823, -97.8961702), 12);
                if (c == 'te') map.setView(new L.LatLng(27.9947144, -82.5947084), 12);
                if (c == 'hu') map.setView(new L.LatLng(29.6937357, -95.5725561), 12);
                if (c == 'sa') map.setView(new L.LatLng(29.5437384, -98.6455612), 12);
                if (c == 'dfw') map.setView(new L.LatLng(32.8474144, -96.819795), 12);

                return;
            };

            // var url = new URL(window.location.href);
            // var string = url.href
            // var convertedString = string.toLowerCase();


            function city_t(city) {

                if (city === "Chicago") {
                    gotocountry('ch');
                }
                if (city === "Austin") {
                    gotocountry('au');
                }
                if (city === "Tampa") {
                    gotocountry('te');

                }
                if (city === "Houston") {
                    gotocountry('hu');

                }
                if (city === "San Antonio") {
                    gotocountry('sa');

                }
                if (city === "DFW") {
                    gotocountry('dfw');

                }

            }

            function get_neighborhood(city) {
                var neighbor_opt = $('.neighbourhood_c')
                $.ajax({
                    method: 'POST',
                    crossOrigin: true,
                    async: true,
                    data: {
                        city: city,
                    },
                    url: 'php/search_neighborhood.php',
                    success: function(data) {
                        neighbor_opt.html(data);
                        console.log(data)
                    },
                    error: function(request, status, error) {
                        console.log('There was an error: ', request.responseText);
                    },
                });
            }


            var url = new URL(window.location.href);

            if (url.searchParams.has('search')) {
                console.log(url.searchParams.get('search'))

                console.log(JSON.parse(url.searchParams.get('search')))
                var search = JSON.parse(url.searchParams.get('search'))

                $.ajax({
                    method: 'POST',
                    crossOrigin: true,
                    async: true,
                    data: search,
                    url: 'php/search.php',
                    success: function(data) {
                        usersList.innerHTML = data;
                    },
                    error: function(request, status, error) {
                        console.log('There was an error: ', request.responseText);
                    },


                });
                if (search.city != '') {
                    $(`input[value="${search.city}"]`).prop("checked", true)
                    $(".cities_check input + label i").removeClass('mx-2 fa-check-square fa')
                    $(".cities_check input + label i").addClass('fa-regular fa-square mx-2')

                    $(".cities_check input:checked + label i").removeClass('fa-regular fa-square mx-2')
                    $(".cities_check input:checked + label i").addClass('mx-2 fa-check-square fa')
                    city_t(search.city)
                    get_neighborhood(search.city)
                }
            }


            function addParam(param, string) {

                const delim = "?"
                var url = new URL(window.location.href);
                var string2 = url.href
                var convertedString = string2.toLowerCase();

                var result = convertedString.split(delim).slice(1).join(delim)
                window.history.replaceState(null, null, "?" + param + "=" + string);
            }



            const sendSearch = () => {

                let city = $('.cities_check input:checked').val();
                console.log(city)
                if (city === undefined) {
                    city = "";
                }
                city_t(city);
                let searchTerm = searchBar.value;
                let property = $('.property').val();
                var beds = '';
                var bath = '';
                var amenities = $('.amenities input:checked')
                    .map((i, e) => e.value)
                    .get();
                if (amenities.length === 0) {
                    amenities = '';
                }

                var neigborhood = $('.neighbourhood_c input:checked')
                    .map((i, e) => e.value)
                    .get();

                if (neigborhood.length === 0) {
                    neigborhood = '';
                } else {
                    neigborhood = JSON.stringify(neigborhood).replace('&', '>>')

                }

                var unit_f = $('.unit_f input:checked')
                    .map((i, e) => e.value)
                    .get();
                if (unit_f.length === 0) {
                    unit_f = '';
                }

                // var neigborhood = $('.neighbourhood_c ').val()
                setTimeout(() => {
                    // getting bedrooom filter
                    beds = $('.bed').val();
                    if ($('.bed').val() === 'Bedrooms') {
                        beds = '';
                    }

                    // getting bathrooms filter
                    bath = $('.bath').val();
                    if ($('.bath').val() === 'Bathrooms') {
                        bath = '';
                    }
                    console.log(bath);
                    var slider_area1 = $('.first-slider-value').val();
                    var slider_area2 = $('.second-slider-value').val();
                    if (slider_area1 === '0 sq ft' && slider_area2 === '100000 sq ft') {
                        slider_area1 = '';
                        slider_area2 = '';
                    }
                    // if (neigborhood === undefined) {
                    //     neigborhood = [];
                    // } else {
                    //     var neigborhood = JSON.stringify(neigborhood).replace('&', '>>')
                    // }
                    // console.log(neigborhood)

                    var date_pick = $('input[name="dates"]').val()



                    var data = {
                        searchTerm: searchTerm,
                        city: city,
                        neigborhood: neigborhood,
                        property: property,
                        amenities: amenities,
                        unit_f: unit_f,
                        date_pick: date_pick,
                        beds: beds,
                        bath: bath,
                        slider_area1: slider_area1,
                        slider_area2: slider_area2,
                    }

                    addParam('search', JSON.stringify(data))

                    $.ajax({
                        method: 'POST',
                        crossOrigin: true,
                        async: true,
                        data: {
                            searchTerm: searchTerm,
                            city: city,
                            property: property,
                            amenities: amenities,
                            unit_f: unit_f,
                            date_pick: date_pick,
                            beds: beds,
                            bath: bath,
                            slider_area1: slider_area1,
                            slider_area2: slider_area2,
                            neigborhood: neigborhood,
                        },
                        url: 'php/search.php',
                        success: function(data) {
                            usersList.innerHTML = data;
                        },
                        error: function(request, status, error) {
                            console.log('There was an error: ', request.responseText);
                        },
                    });
                }, 200);
            };

            searchBar.onkeyup = () => {
                sendSearch();
            };



            $('.cities_check input').change(function() {
                sendSearch();
                // console.log($(this).val())
                $('.neighbourhood_c input:checked').prop("checked", false);

                $(".cities_check input + label i").removeClass('mx-2 fa-check-square fa')
                $(".cities_check input + label i").addClass('fa-regular fa-square mx-2')

                $(".cities_check input:checked + label i").removeClass('fa-regular fa-square mx-2')
                $(".cities_check input:checked + label i").addClass('mx-2 fa-check-square fa')
                get_neighborhood($('.cities_check input:checked').val())
            });

            $('.neighbourhood_c ').change(function() {
                sendSearch();
            });
            $('input[name="dates"]').change(function() {
                sendSearch();
            });
            $('.property').change(function() {
                sendSearch();
            });
            $('.range-slider .ui-slider .ui-slider-handle').click(function() {
                sendSearch();
            });

            $('.amenities input').click(function() {
                sendSearch();
            });

            $('.unit_f input').click(function() {
                sendSearch();
            });

            $('.bed').change(function() {
                sendSearch();
            });
            $('.bath').change(function() {
                sendSearch();
            });

            $('.wide').click(function() {
                $(this).toggleClass('open')
            })
            var container = $(".explore__form-checkbox-list");
            var container2 = $(".wide");
            $(document).click(function(e) {
                if (!container.is(e.target) && container.has(e.target).length === 0 && !$(".dropdown-filter").is(e.target) && $(".dropdown-filter").has(e.target).length === 0) {
                    container.removeClass("filter-block");
                }
                if (!container2.is(e.target) && container2.has(e.target).length === 0 && !$(".dropdown-filter").is(e.target) && $(".dropdown-filter").has(e.target).length === 0) {
                    container2.removeClass("open");
                }
            })



            $('#reset_now').click(function() {
                console.log('fuck')
                $('.neighbourhood_c input:checked').prop("checked", false);
                $('.amenities input:checked').prop("checked", false);
                $('.unit_f input:checked').prop("checked", false);
                $('.cities_check input:checked').prop("checked", false);
                $('.property').val("");
                $('.map_search').val('')
                $('.bath').val("");
                $('.bed').val("")

                $(".cities_check input + label i").removeClass('mx-2 fa-check-square fa')
                $(".cities_check input + label i").addClass('fa-regular fa-square mx-2')
                $('input[name="dates"]').val("<?php echo date("Y/m/d") . " - " . date("Y/m/d", strtotime("+100 week")) ?>")
                sendSearch();
            })

        });


        const self = $('input[name="dates"]')

        self.daterangepicker({
            applyButtonClasses: 'd-none',
            showDropdowns: false,
            opens: "center",
            drops: "down",
            autoApply: false,
            startDate: self.data('start'),
            endDate: self.data('end'),
            minDate: self.data('start'),
            maxDate: self.data('end'),
            locale: {
                format: "YYYY/MM/DD",
                separator: " - ",
                applyLabel: "Aplicar",
                cancelLabel: "Fechar",
                fromLabel: "De",
                toLabel: "Até",
                customRangeLabel: "Custom",
                weekLabel: "S",
                daysOfWeek: [
                    "Sun",
                    "Mon",
                    "Tue",
                    "Wed",
                    "Thu",
                    "Fri",
                    "Sat"
                ],
                monthNames: [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "Sebtember",
                    "October",
                    "November",
                    "December"
                ],
                firstDay: 1
            }
        });
        if (self.val() === "<?php echo date("Y/m/d") . " - " . date("Y/m/d", strtotime("+100 week")) ?>") {
            self.val('MM/DD - MM/DD')
            console.log(self.val())
        }

        

        $('.btn.form-control.nice-select').click(function() {
            $('.bed_drop').toggleClass("show")
        })

        $(document).click(function(e) {
                if (!$('.btn.form-control.nice-select').is(e.target) && $('.btn.form-control.nice-select').has(e.target).length === 0 && !$('.bed_drop').is(e.target) && $('.bed_drop').has(e.target).length === 0) {
                    $('.bed_drop').removeClass("show");
                }
            })
    </script>

    </div>
    <!-- Wrapper / End -->
    </body>

    </html>