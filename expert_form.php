<div class="card px-0 pt-4 pb-0 mt-3 mb-3">
    <h2 class="pt-2" id="heading">CONNECT WITH AN EXPERT</h2>
    <!--<p class="form_dis text-dark">Fill all form field to go to next step</p>-->
    <form id="msform">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active" id="account"><strong>Info</strong></li>
            <li id="city"><strong>City</strong></li>
            <li id="size"><strong>Size</strong></li>
            <li id="budget"><strong>Budget</strong></li>
            <li id="date"><strong>Date</strong></li>
            <li id="personal"><strong>Amenities</strong></li>
            <li id="payment"><strong>Add Details</strong></li>
            <li id="confirm"><strong>Finish</strong></li>
        </ul>
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div> <br> <!-- fieldsets -->
        <fieldset data-step="1">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Contact Info</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 1 - 8</h2>
                    </div>
                </div>
                <label class="fieldlabels">First Name*</label>
                <input type="name" id="uname" name="uname" placeholder="First Name" required />
                <label class="fieldlabels">Last Name*</label>
                <input type="name" id="lname" name="lname" placeholder="Last Name" required />
                <label class="fieldlabels">Email Address*</label>
                <input type="email" id="email" name="email" placeholder="Email Address" required />
                <label class="fieldlabels">Phone Number*</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone Number" required />
                <input type="text" name="unique_id" id="unique_id" placeholder="unique_id" value="<?php echo uniqid() ?>" hidden />
            </div>
            <input type="button" name="next" id="first" class="next action-button mt-4" value="Next" />
        </fieldset>
        <fieldset data-step="2">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Select City</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 2 - 8</h2>
                    </div>
                </div>
                <div class="row">
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
                            <div class="col-lg-4 mt-4">
                                <label class="labl">
                                    <input type="radio" name="radioname" class="city_check" value="<?php echo $row['name']; ?>" hidden />
                                    <div class="image_form text-center d-flex align-items-center justify-content-center">
                                        <div class="img-overlay"></div>
                                        <h4 class="form_text"><?php echo $row['name']; ?></h4>
                                        <img src="<?php echo $image; ?>" alt="" class="img-fluid option_img">
                                    </div>
                                </label>
                            </div>
                    <?php

                        }
                    } ?>

                </div>
                <label class="fieldlabels mt-4">Neighborhoods</label>
                <div class="neighborhoods_multi text-black">
                    <select multiple name="neighborhoods_multi" id="neighborhoods_multi">
                        <option value="" disabled selected>Select Neighborhoods</option>
                    </select>
                </div>
            </div>
            <input type="button" name="next" class="next action-button" value="Next" id="second" />
            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="3">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Select Size</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 3 - 8</h2>
                    </div>
                </div>
                <div class="row mt-lg-4">
                    <div class="col-lg-6 text-center bed size_select">
                        <h5 class="text-center">Bed</h5>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="checkbox" name="bedroom" id="Studio" value="Studio">
                            <label class="form-check-label" for="Studio">
                                Studio
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="checkbox" name="bedroom" id="1_Bedroom" value="1 Bedroom">
                            <label class="form-check-label" for="1_Bedroom">
                                1 Bedroom
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="checkbox" name="bedroom" id="2_Bedroom" value="2 Bedroom">
                            <label class="form-check-label" for="2_Bedroom">
                                2 Bedroom
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="checkbox" name="bedroom" id="3_Bedroom" value="3 Bedroom">
                            <label class="form-check-label" for="3_Bedroom">
                                3+ Bedroom
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center bath size_select">
                        <h5 class="text-center">Bath</h5>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="radio" name="bathroom" id="1_bath" value="1 bath">
                            <label class="form-check-label" for="1_bath">
                                1 Bath
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="radio" name="bathroom" id="1.5_bath" value="1.5 bath">
                            <label class="form-check-label" for="1.5_bath">
                                1.5 Bath
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="radio" name="bathroom" id="2_bath" value="2 bath">
                            <label class="form-check-label" for="2_bath">
                                2 Bath
                            </label>
                        </div>
                        <div class="form-check p-0">
                            <input hidden class="form-check-input" type="radio" name="bathroom" id="2.5_bath" value="2.5 bath">
                            <label class="form-check-label" for="2.5_bath">
                                2.5+ Bath
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="4">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Select Budget</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 4 - 8</h2>
                    </div>
                </div>
            </div>
            <div class="main-search-field-2">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="range-slider Area step_range">
                            <label>Area Size</label>
                            <div id="area-range_sale" class="area-range" data-min="0" data-max="5000" data-unit2="sqft" data-unit="sqft+"></div>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <!-- Price Range -->
                        <div class="range-slider Price step_range mb-4">
                            <label>Price Range</label>
                            <div id="price-range_sale" class="price-range" data-min="0" data-max="3000000" data-unit2="+" data-unit="$"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="range-slider Area step_range">
                            <label>Area Size</label>
                            <div id="area-range_rent" class="area-range" data-min="0" data-max="1500" data-unit2="sqft" data-unit="sqft+"></div>
                            <div class="clearfix"></div>
                        </div>
                        <br>
                        <!-- Price Range -->
                        <div class="range-slider Price step_range mb-4">
                            <label>Price Range</label>
                            <div id="price-range-rent" class="price-range" data-min="0" data-max="10000" data-unit2="+" data-unit="$"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- Area Range -->

            </div>
            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="5">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Move Date</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 5 - 8</h2>
                    </div>
                </div>
            </div>
            <div class="step_calender">
                <div class="calendar">
                    <div class="group calendar-ympicker">
                        <div class="calendar-ympicker-header">
                            <div style="font-size:small;" class="today">Today</div>
                            <div style="float:right;width:20%;text-align:right;" class="close">&uarr;</div>
                        </div>
                        <ul style="clear:both;" class="center calendar-ympicker-months">
                            <li>Jan</li>
                            <li>Feb</li>
                            <li>Mar</li>
                            <li>Apr</li>
                            <li>May</li>
                            <li>Jun</li>
                            <li>Jul</li>
                            <li>Aug</li>
                            <li>Oct</li>
                            <li>Sep</li>
                            <li>Nov</li>
                            <li>Dec</li>
                        </ul>
                        <ul class="center calendar-ympicker-years">
                        </ul>
                    </div>

                    <div class="group calendar-header">
                        <p class="pointer center monthname">&nbsp;</p>
                        <p class="pointer arrow minusmonth"><span>&larr;</span></p>
                        <p class="pointer arrow addmonth"><span>&rarr;</span></p>
                    </div>

                    <ul class="group calendar-days">
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                    </ul>
                    <ul class="group calendar-body"><!-- Dates go in here --></ul>
                </div>
            </div>
            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="6">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Add Details</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 6 -8</h2>
                    </div>
                </div>
                <label class="fieldlabels">Building Amenities</label>
                <div class="credit text-black">
                    <select multiple name="Amenities" id="Amenities">
                        <option value="" disabled></option>
                        <option value="Basketball Court">Basketball Court</option>
                        <option value="Bike Room">Bike Room</option>
                        <option value="Business Center">Business Center</option>
                        <option value="Communal Grill">Communal Grill</option>
                        <option value="Concierge">Concierge</option>
                        <option value="Dog Run">Dog Run</option>
                        <option value="Dog Spa">Dog Spa</option>
                        <option value="EV Chargin Station">EV Chargin Station</option>
                        <option value="Event Room">Event Room</option>
                        <option value="Gold Simulator">Gold Simulator</option>
                        <option value="Gym / Fitness center">Gym / Fitness center</option>
                        <option value="Indoor Pool">Indoor Pool</option>
                        <option value="Outdoor Pool">Outdoor Pool</option>
                        <option value="Rooftop Deck">Rooftop Deck</option>
                        <option value="Spa / Jacuzzi">Spa / Jacuzzi</option>
                        <option value="Storage Room">Storage Room</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <label class="fieldlabels">Unit Features</label>
                <select multiple name="Features" id="Features">
                    <option value="" disabled></option>

                    <option value="Balcony / Terrace">Balcony / Terrace</option>
                    <option value="Bath Tub">Bath Tub</option>
                    <option value="Den">Den</option>
                    <option value="Dishwasher">Dishwasher</option>
                    <option value="Dual Vanity">Dual Vanity</option>
                    <option value="Floor-to-Ceiling Windows">Floor-to-Ceiling Windows</option>
                    <option value="Gas Stove">Gas Stove</option>
                    <option value="Hardwood Floor">Hardwood Floor</option>
                    <option value="In-unit Laundry">In-unit Laundry</option>
                    <option value="Kitchen Island">Kitchen Island</option>
                    <option value="Walk-in Closet">Walk-in Closet</option>
                    <option value="Walk-in Shower">Walk-in Shower</option>
                </select>
                <label class="fieldlabels">Pets</label>
                <select multiple name="Pets" id="Pets">
                    <option value="" disabled></option>

                    <option value="No Pets">No Pets</option>
                    <option value="Cat(s)">Cat(s)</option>
                    <option value="Dog(s)">Dog(s)</option>
                    <option value="ESA">ESA</option>
                </select>
                <label class="fieldlabels">Parking</label>
                <select multiple name="Parking" id="Parking">
                    <option value="" disabled></option>
                    <option value="On-Site Parking">On-Site Parking</option>
                    <option value="Uncovered Parking">Uncovered Parking</option>
                    <option value="Street Parking">Street Parking</option>
                    <option value="No Parking Needed">No Parking Needed</option>
                </select>

            </div>
            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="7">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Add Details</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 7 -8</h2>
                    </div>
                </div>
                <label class="fieldlabels">Credit Score</label>
                <div class="credit text-black">
                    <select name="credit_score" id="credit_score">
                        <option value="" selected disabled></option>
                        <option value="650+">650+</option>
                        <option value="600 - 649">600 - 649</option>
                        <option value="550 - 599">550 - 599</option>
                        <option value="500 - 549">500 - 549</option>
                        <option value="300 - 499">300 - 499</option>
                        <option value="I do not have a credit score">I do not have a credit score</option>
                    </select>
                </div>
                <label class="fieldlabels">Background</label>
                <div class="credit text-black">
                    <select multiple name="Background" id="Background">
                        <option value="" disabled></option>
                        <option value="Active Rental Debt">Active Rental Debt</option>
                        <option value="Bankruptcy">Bankruptcy</option>
                        <option value="Eviction">Eviction</option>
                        <option value="Felony">Felony</option>
                        <option value="Misdemeanor">Misdemeanor</option>
                        <option value="Unpaid Broken Lease">Unpaid Broken Lease</option>
                    </select>
                </div>
            </div>
            <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
        </fieldset>
        <fieldset data-step="8">
            <div class="form-card">
                <div class="row">
                    <div class="col-7">
                        <h2 class="fs-title">Finish:</h2>
                    </div>
                    <div class="col-5">
                        <h2 class="steps">Step 8 - 8</h2>
                    </div>
                </div> <br><br>
                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                <div class="row justify-content-center">
                    <div class="col-3"> <img src="images/tick.png" class="fit-image"> </div>
                </div> <br><br>
                <div class="row justify-content-center">
                    <div class="col-7 text-center">
                        <h5 class="purple-text text-center">Thank you! An expert will reach out shortly. In the meantime, please feel free to browse through <a href="./find_home.php">apartment listings here. </a></h5>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>