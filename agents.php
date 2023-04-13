<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Meet The Team</h1>
            <!-- <p>Get to know us.</p> -->
        </div>
    </div>
</section>
<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-right featured agents_main portfolio blog pt-5">
    <div class="container">
        <!-- <section class="headings-2 pt-0 pb-55">
                    <div class="container">
                        <div class="detail-wrapper-body row">
                            <div class="listing-title-bar text-center col-lg-12">
                                <h3>Meet the Team</h3>
                                <p>Get to know us.</p>
                            </div>
                        </div>
                    </div>
                </section> -->
        <div class="row">
            <div class="col-lg-12 col-md-12 blog-pots">


                <div class="search_agent mb-3 mx-auto">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" id="search_agent" placeholder="Search">
                </div>

                <div class="row" id="properties">
                    <?php
                    $sql = "SELECT * FROM agents WHERE status=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale px-2">
                                <div class="project-single">
                                    <a href="agent-details.php?id=<?php echo $row['id'] ?>" class="homes-img">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <!-- <div class="homes-tag button alt featured">4 Listings</div> -->
                                                <img src="<?php echo !empty($row['image']) ? './uploads/' . $row['image'] : './images/placeholder.jpg' ?>" alt="home-1" class="img-responsive">
                                            </div>
                                        </div>
                                    </a>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <div class="the-agents px-1">
                                            <h3><a href="agent-details.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></h3>
                                            <ul class="the-agents-details mt-0">
                                                <li class="mb-0"><?php echo $row['designation'] ?></li>
                                                <li class="mb-0"><a href="tel:<?php echo $row['mobile'] ?>"><?php echo $row['mobile'] ?></a></li>
                                                <li class="mb-0"><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></li>
                                            </ul>
                                        </div>
                                        <!-- <div class="footer">
                                            <a href="agent-details.php?id=<?php echo $row['id'] ?>">
                                                <img class="card_logo" src="images/Black.png" alt="" class="mr-2"> The Mei Team
                                            </a>
                                            <span class="view-my-listing">
                                                <a href="agent-details.php?id=<?php echo $row['id'] ?>">View My Listings</a>
                                            </span>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <!-- <aside class="col-lg-4 col-md-12 car">
                        <div class="single widget">
                            <div class="schedule widget-boxed mt-33 mt-0">
                                <div class="widget-boxed-header">
                                    <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                                </div>
                                <div class="widget-boxed-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 book">
                                            <input type="text" id="reservation-date" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
                                        </div>
                                        <div class="col-lg-6 col-md-12 book2">
                                            <input type="text" id="reservation-time" class="form-control" readonly="">
                                        </div>
                                    </div>
                                    <div class="row mrg-top-15 mb-3">
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-4">Adult</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[1]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[1]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 mt-4">
                                            <label class="mb-4">Children</label>
                                            <div class="input-group">
                                                <span class="input-group-btn">
										 <button type="button" class="btn counter-btn theme-cl btn-number" disabled="disabled" data-type="minus" data-field="quant[2]">
											 <i class="fa fa-minus"></i>
										 </button>
									        </span>
                                                <input type="text" name="quant[2]" class="border-0 text-center form-control input-number" data-min="0" data-max="10" value="0">
                                                <span class="input-group-btn">
											 <button type="button" class="btn counter-btn theme-cl btn-number" data-type="plus" data-field="quant[2]">
											  <i class="fa fa-plus"></i>
											 </button>
									        </span>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="payment-method.php" class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit Request</a>
                                </div>
                            </div>
                        
                            <div class="sidebar">
                                <div class="main-search-field-2">
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Recent Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="recent-post">
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.php"><img src="images/feature-properties/fp-1.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.php"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main my-4">
                                                    <div class="recent-img">
                                                        <a href="blog-details.php"><img src="images/feature-properties/fp-2.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.php"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                                <div class="recent-main">
                                                    <div class="recent-img">
                                                        <a href="blog-details.php"><img src="images/feature-properties/fp-3.jpg" alt=""></a>
                                                    </div>
                                                    <div class="info-img">
                                                        <a href="blog-details.php"><h6>Family Home</h6></a>
                                                        <p>$230,000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-boxed mt-5">
                                        <div class="widget-boxed-header mb-5">
                                            <h4>Feature Properties</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="slick-lancers">
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>New York</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-1.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Los Angles</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-2.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>San Francisco</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-3.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Miami FL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-4.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 230,000</span>
                                                                <span>For Sale</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Chicago IL</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-5.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="agents-grid mr-0">
                                                    <div class="listing-item compact">
                                                        <a href="properties-details.php" class="listing-img-container">
                                                            <div class="listing-badges">
                                                                <span class="featured">$ 6,500</span>
                                                                <span class="rent">For Rent</span>
                                                            </div>
                                                            <div class="listing-img-content">
                                                                <span class="listing-compact-title">House Luxury <i>Toronto CA</i></span>
                                                                <ul class="listing-hidden-content">
                                                                    <li>Area <span>720 sq ft</span></li>
                                                                    <li>Rooms <span>6</span></li>
                                                                    <li>Beds <span>2</span></li>
                                                                    <li>Baths <span>3</span></li>
                                                                </ul>
                                                            </div>
                                                            <img src="images/feature-properties/fp-6.jpg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="widget-boxed popular mt-5 mb-0">
                                        <div class="widget-boxed-header">
                                            <h4>Specials of the day</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="banner"><img src="images/single-property/banner.jpg" alt=""></div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </aside> -->
        </div>
        <!-- <nav aria-label="..." class="pt-55">
                    <ul class="pagination disabled">
                        <li class="page-item">
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
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->

<script>
    const searchBar = document.querySelector('#search_agent'),
        usersList = document.querySelector('#properties');

    $(document).ready(function() {
        'use strict';


        const sendSearch = () => {

            let searchTerm = searchBar.value;

            console.log(searchTerm)
            $.ajax({
                method: 'POST',
                crossOrigin: true,
                async: true,
                data: {
                    searchTerm: searchTerm,
                },
                url: 'php/search_agent.php',
                success: function(data) {
                    usersList.innerHTML = data;
                },
                error: function(request, status, error) {
                    console.log('There was an error: ', request.responseText);
                },
            });
        };

        searchBar.onkeyup = () => {
            sendSearch();
        };
    })
</script>

<?php
include('footer.php');
?>