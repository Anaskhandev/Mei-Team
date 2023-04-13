        <!-- START FOOTER -->
        <footer class="first-footer rec-pro">
            <div class="top-footer">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="netabout">
                                <a href="index" class="logo">
                                    <img src="./images/mei_exp.png" alt="netcom">
                                </a>
                                <p>The Mei Team is comprised of the finest luxury realtors who are ready to help you find your dream home. We're here to make the process seamless and to bring joy to your search. Let's get started!</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p"><a target="_blank" href="https://goo.gl/maps/HRoiNsquZUmwP33i6">939 W North Ave Suite 750, Chicago, IL 60642</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p"><a href="tel:+13127310048">+1 (312) 731 - 0048</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti"><a href="mailto:hello@themeiteam.com">hello@themeiteam.com</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="navigation">
                                <h3>BLOG</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="#">Relocating to a New City</a></li>
                                        <li><a href="#">Pet-friendly Apartments</a></li>
                                        <li><a href="#">Neighborhoods Guides</a></li>
                                        <li><a href="#">Cost of Living</a></li>
                                        <li><a href="#">Best Times to Move</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="navigation">
                                <h3>CITIES</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <?php
                                        $qry2 = "SELECT * FROM cities LIMIT 5";
                                        $result2 = $conn->query($qry2);
                                        if ($result2->num_rows > 0) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                        ?>
                                                <li><a href="./city_detail.php?id=<?php echo $row2['id']; ?>"><?php echo $row2['name']; ?></a></li>

                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="navigation">
                                <h3>RESOURCES</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="#">Where to Live</a></li>
                                        <li><a href="#">Renting Tips</a></li>
                                        <li><a href="#">What is a Locator</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="navigation">
                                <h3>ABOUT US</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="#">Our Story</a></li>
                                        <li><a href="#">Services</a></li>
                                        <li><a href="agents.php">Meet the Team</a></li>
                                        <li><a href="testimonial.php">Testimonials</a></li>
                                        <li><a href="#">Cities We Serve</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer rec-pro">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col-12 d-md-flex justify-content-between align-items-center text-center">
                            <p>2023 © Copyright - All Rights Reserved</p>
                            <ul class="netsocials justify-content-center">
                                <li><a target="_blank" href="https://www.facebook.com/themeiteam"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.tiktok.com/@themeiteam"><i class="fab fa-tiktok" aria-hidden="true"></i></a></li>
                                <li><a target="_blank" href="https://www.instagram.com/themeiteam"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <div class="powered">
                                <p>Powered By <a target="_blank" href="https://thewebions.com/">The Webions</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>THE MEI<strong> TEAM</strong></span></h3>
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
        <div class="modal fade form_modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body step_form">
                        <div class="container-fluid">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <?php require './expert_form.php'; ?>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
                </div>
            </div>
        </div>
        <!-- START PRELOADER -->
        <?php
        $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $base = basename($actual_link);
        if ($base != "user") {
        ?>
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- END PRELOADER -->

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
        <script src="./js/ajaxchimp.min.js"></script>
        <script src="./js/newsletter.js"></script>
        <script src="./js/jquery.form.js"></script>
        <script src="./js/jquery.validate.min.js"></script>
        <script src="./js/searched.js"></script>
        <script src="./js/forms-2.js"></script>
        <script src="./js/leaflet.js"></script>
        <script src="./js/leaflet-gesture-handling.min.js"></script>
        <script src="./js/leaflet-providers.js"></script>
        <script src="./js/leaflet.markercluster.js"></script>
        <script src="./js/map-style2.js"></script>
        <script src="./js/datedropper.js"></script>
        <script src="./js/timedropper.js"></script>
        <script src="./js/range.js"></script>
        <script src="./js/color-switcher.js"></script>
        <?php echo $js ?? ''; ?>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="./revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="./revolution/js/jquery.themepunch.revolution.min.js"></script>


        <script>
            if ($(".typed").length) {
                var typed = new Typed('.typed', {
                    strings: ["Apartment", "House", "Home"],
                    smartBackspace: false,
                    loop: true,
                    showCursor: true,
                    cursorChar: "|",
                    typeSpeed: 50,
                    backSpeed: 30,
                    startDelay: 800
                });
            }
        </script>

        <script>
            $('.slick-lancers2').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });
        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
        <script>
            $(".dropdown-filter").on('click', function() {
                $(".explore__form-checkbox-list").toggleClass("filter-block");
            });
            var container = $(".explore__form-checkbox-list");
            $(document).click(function(e) {
                if (!container.is(e.target) && container.has(e.target).length === 0 && !$(".dropdown-filter").is(e.target) && $(".dropdown-filter").has(e.target).length === 0) {
                    container.removeClass("filter-block");
                }
            })
        </script>

        <script>
            const counters2 = document.querySelectorAll('.counter');

            counters2.forEach(counter => {
                counter.innerText = '0';

                const updateCounter = () => {
                    const target = +counter.getAttribute('data-target')
                    const c = +counter.innerText;

                    const increment = target / 150;

                    if (c < target) {
                        counter.innerText = `${Math.ceil(c + increment)}`
                        setTimeout(updateCounter, 1)
                    } else {
                        counter.innerText = target
                    }
                }
                updateCounter();
            })
        </script>

        <script>
            $(document).ready(function() {
                $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            });
        </script>

        <script>
            $('.slick-carousel').each(function() {
                var slider = $(this);
                $(this).slick({
                    infinite: true,
                    dots: false,
                    arrows: false,
                    centerMode: true,
                    centerPadding: '0'
                });

                $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                    slider.slick('slickPrev');
                });
                $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                    slider.slick('slickNext');
                });
            });
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

        <script>
            $('#contactform2ss').on('submit', function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                // console.log(formData)
                $.ajax({
                    url: 'contact_submit.php',
                    data: formData,
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === "Success") {
                            swal({
                                title: 'Success',
                                text: 'Form Successfully Submitted!',
                                type: 'success',
                            })
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Data not submitted!',
                                type: 'error',
                            })
                        }
                    }
                })
            })

            $('#register').on('submit', function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                // console.log(formData)
                $.ajax({
                    url: 'user_submit.php',
                    data: formData,
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === "success") {
                            swal({
                                title: 'Success',
                                text: 'Form Successfully Submitted!',
                                type: 'success',
                            }).then(function() {
                                window.location.href = './login.php';
                            })
                        } else if (response === "login success") {
                            swal({
                                title: 'Success',
                                text: 'Logged in successfully!',
                                type: 'success',
                            }).then(function() {
                                window.location.href = './user.php';
                            })
                        } else {
                            console.log(response)
                            swal({
                                title: 'Error',
                                text: response,
                                type: 'error',
                            })
                        }
                    }
                })
            })
            $('#u_menu-toggle').click(function(e) {
                e.preventDefault();
                $('#wrapper').toggleClass('toggled');
                $('#u_menu-toggle').toggleClass('left_scale')
            });
            $('.alerts').hide();

            $('.floor-plan .nav-item:first-child .nav-link').addClass('active')
            id = $('.floor-plan .nav-item:first-child .nav-link').attr('aria-controls')

            $('#' + id).addClass('show active')

            $('#' + id).removeClass('fade')

            $('.heart_fav').click(function() {
                var id = $(this).attr('id');
                // console.log(id);
                $.ajax({
                    method: 'POST',
                    crossOrigin: true,
                    async: true,
                    data: {
                        f_id: id,
                    },
                    url: 'php/submit.php',
                    success: function(data) {

                        console.log(data);
                        if (data === 'success' || data === 'already') {
                            $('#' + id + ' .fa-heart').toggleClass('fa-light');
                            $('#' + id + ' .fa-heart').toggleClass('fa-solid');
                        } else if (data === 'no user') {
                            //show
                            $('.alerts').show();
                            //hide
                            setTimeout(() => {
                                $('.alerts').hide();
                            }, 5000);
                        }
                    },
                    error: function(request, status, error) {
                        console.log('There was an error: ', request.responseText);
                    },
                });
            });

            $('#forget').submit(function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                // console.log(formData)
                $.ajax({
                    url: './forget.php',
                    data: formData,
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === "An email has been sent to you with instructions on how to reset your password") {
                            swal({
                                title: 'Success',
                                text: response,
                                type: 'success',
                            }).then(function() {
                                window.location.href = './login.php';
                            })
                        } else {
                            console.log(response)
                            swal({
                                title: 'Error',
                                text: response,
                                type: 'error',
                            })
                        }
                    }
                })
            });
            $('#reset_pass').submit(function(e) {
                e.preventDefault()
                var formData = new FormData(this);
                // console.log(formData)
                $.ajax({
                    url: './forget.php',
                    data: formData,
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response === "Password Successfully updated") {
                            swal({
                                title: 'Success',
                                text: response,
                                type: 'success',
                            }).then(function() {
                                window.location.href = './login.php';
                            })
                        } else {
                            console.log(response)
                            swal({
                                title: 'Error',
                                text: response,
                                type: 'error',
                            })
                        }
                    }
                })
            });
            // $('.single-select').niceSelect();
            $('select').niceSelect();
        </script>
        <!-- MAIN JS -->
        <script src="./js/script.js"></script>
        <script>
            // Calendar Start
            var d = new Date();
            var Calendar = {
                themonth: d.getMonth(), // The number of the month 0-11
                theyear: d.getFullYear(), // This year
                today: [d.getFullYear(), d.getMonth(), d.getDate()], // adds today style
                selectedDate: null, // set to today in init()
                years: [], // populated with last 10 years in init()
                months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],

                init: function() {
                    this.selectedDate = this.today
                    // Populate the list of years in the month/year pulldown
                    var year = this.theyear;
                    for (var i = 0; i < 10; i++) {
                        this.years.push(year--);
                    }

                    this.bindUIActions();
                    this.render();
                },

                bindUIActions: function() {
                    // Create Years list and add to ympicker
                    for (var i = 0; i < this.years.length; i++)
                        $('<li>' + this.years[i] + '</li>').appendTo('.calendar-ympicker-years');
                    this.selectMonth();
                    this.selectYear(); // Add active class to current month n year

                    // Slide down year month picker
                    $('.monthname').click(function() {
                        $('.calendar-ympicker').css('transform', 'translateY(0)');
                    });

                    // Close year month picker without action
                    $('.close').click(function() {
                        $('.calendar-ympicker').css('transform', 'translateY(-100%)');
                    });

                    // Move calander to today
                    $('.today').click(function() {
                        Calendar.themonth = d.getMonth();
                        Calendar.theyear = d.getFullYear();
                        Calendar.selectMonth();
                        Calendar.selectYear();
                        Calendar.selectedDate = Calendar.today;
                        Calendar.render();
                        $('.calendar-ympicker').css('transform', 'translateY(-100%)');
                    });

                    // Click handlers for ympicker list items
                    $('.calendar-ympicker-months li').click(function() {
                        Calendar.themonth = $('.calendar-ympicker-months li').index($(this));
                        Calendar.selectMonth();
                        Calendar.render();
                        $('.calendar-ympicker').css('transform', 'translateY(-100%)');
                    });
                    $('.calendar-ympicker-years li').click(function() {
                        Calendar.theyear = parseInt($(this).text());
                        Calendar.selectYear();
                        Calendar.render();
                        $('.calendar-ympicker').css('transform', 'translateY(-100%)');
                    });

                    // Move the calendar pages
                    $('.minusmonth').click(function() {
                        Calendar.themonth += -1;
                        Calendar.changeMonth();
                    });
                    $('.addmonth').click(function() {
                        Calendar.themonth += 1;
                        Calendar.changeMonth();
                    });
                },

                // Adds class="active" to the selected month/year
                selectMonth: function() {
                    $('.calendar-ympicker-months li').removeClass('active');
                    $('.calendar-ympicker-months li:nth-child(' + (this.themonth + 1) + ')').addClass('active');
                },
                selectYear: function() {
                    $('.calendar-ympicker-years li').removeClass('active');
                    $('.calendar-ympicker-years li:nth-child(' + (this.years.indexOf(this.theyear) + 1) + ')').addClass('active');
                },

                // Makes sure that month rolls over years correctly
                changeMonth: function() {
                    if (this.themonth == 12) {
                        this.themonth = 0;
                        this.theyear++;
                        this.selectYear();
                    } else if (this.themonth == -1) {
                        this.themonth = 11;
                        this.theyear--;
                        this.selectYear();
                    }
                    this.selectMonth();
                    this.render();
                },

                // Helper functions for time calculations
                TimeCalc: {
                    firstDay: function(month, year) {
                        var fday = new Date(year, month, 1).getDay(); // Mon 1 ... Sat 6, Sun 0
                        if (fday === 0) fday = 7;
                        return fday - 1; // Mon 0 ... Sat 5, Sun 6
                    },
                    numDays: function(month, year) {
                        return new Date(year, month + 1, 0).getDate(); // Day 0 is the last day in the previous month
                    }
                },

                render: function() {
                    var days = this.TimeCalc.numDays(this.themonth, this.theyear), // get number of days in the month
                        fDay = this.TimeCalc.firstDay(this.themonth, this.theyear), // find what day of the week the 1st lands on        
                        daysHTML = '',
                        i;

                    $('.calendar p.monthname').text(this.months[this.themonth] + '  ' + this.theyear); // add month name and year to calendar
                    for (i = 0; i < fDay; i++) { // place the first day of the month in the correct position
                        daysHTML += '<li class="noclick">&nbsp;</li>';
                    }
                    // write out the days
                    for (i = 1; i <= days; i++) {
                        if (this.today[0] == this.selectedDate[0] &&
                            this.today[1] == this.selectedDate[1] &&
                            this.today[2] == this.selectedDate[2] &&
                            this.today[0] == this.theyear &&
                            this.today[1] == this.themonth &&
                            this.today[2] == i)
                            daysHTML += '<li class="active today">' + i + '</li>';
                        else if (this.today[0] == this.theyear &&
                            this.today[1] == this.themonth &&
                            this.today[2] == i)
                            daysHTML += '<li class="today">' + i + '</li>';
                        else if (this.selectedDate[0] == this.theyear &&
                            this.selectedDate[1] == this.themonth &&
                            this.selectedDate[2] == i)
                            daysHTML += '<li class="active">' + i + '</li>';
                        else
                            daysHTML += '<li>' + i + '</li>';

                        $('.calendar-body').html(daysHTML); // Only one append call
                    }

                    // Adds active class to date when clicked
                    $('.calendar-body li').click(function() { // toggle selected dates
                        if (!$(this).hasClass('noclick')) {
                            $('.calendar-body li').removeClass('active');
                            $(this).addClass('active');
                            Calendar.selectedDate = [Calendar.theyear, Calendar.themonth, $(this).text()]; // save date for reselecting
                        }
                    });
                }
            };

            Calendar.init();
            // Calendar End

            // MultiStep Start
            $(document).ready(function() {

                function get_neighborhood() {
                    $('.neighborhoods_multi .current').text("")
                    $('#neighborhoods_multi').val("")
                    var neighbor_opt = $('.neighborhoods_multi .list')
                    $.ajax({
                        method: 'POST',
                        crossOrigin: true,
                        async: true,
                        data: {
                            city_e: $('.city_check:checked').val(),
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

                    var neighbor_opt2 = $('#neighborhoods_multi')
                    $.ajax({
                        method: 'POST',
                        crossOrigin: true,
                        async: true,
                        data: {
                            city: $('.city_check:checked').val(),
                        },
                        url: 'php/search_neighborhood.php',
                        success: function(data) {
                            neighbor_opt2.html(data);
                            console.log(data)
                        },
                        error: function(request, status, error) {
                            console.log('There was an error: ', request.responseText);
                        },
                    });
                }

                $('.city_check').change(function() {
                    // console.log($(this).val())
                    get_neighborhood()
                })


                // console.log($('#neighborhoods_multi').val())
                // $('#first').click(function(e) {
                //     e.preventDefault();

                //     
                // });


                // $('#second').click(function(e) {
                //     e.preventDefault();

                //     phone = $('#phone').val();
                //     uname = $('#uname').val();
                //     email = $('#email').val();
                //     unique_id = $('#unique_id').val();



                //     $.ajax({
                //         method: 'POST',
                //         crossOrigin: true,
                //         async: true,
                //         data: {
                //             phone: phone,
                //             uname: uname,
                //             email: email,
                //             unique_id: unique_id,
                //         },
                //         url: 'php/submit.php',
                //         success: function(data) {
                //             console.log(data);
                //         },
                //         error: function(request, status, error) {
                //             console.log('There was an error: ', request.responseText);
                //         },
                //     });
                // });
                if ((screen.width <= 640) || (window.matchMedia && window.matchMedia('only screen and (max-width: 640px)').matches)) {
                    var current_fs, next_fs, previous_fs; //fieldsets
                    var opacity;
                    var current = 1;
                    var steps = $("fieldset").length;
                    setProgressBar(current);
                    $(".next").click(function() {

                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();
                        //Add Class Active
                        $("#progressbar li").removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function(now) {
                                // for making fielset appear animation
                                opacity = 1 - now;

                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                next_fs.css({
                                    'opacity': opacity
                                });
                            },
                            duration: 500
                        });
                        setProgressBar(++current);
                    });
                    $(".previous").click(function() {

                        current_fs = $(this).parent();
                        previous_fs = $(this).parent().prev();

                        //Remove class active
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
                        $("#progressbar li").eq($("fieldset").index(previous_fs)).addClass("active");
                        //show the previous fieldset
                        previous_fs.show();

                        //hide the current fieldset with style
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function(now) {
                                // for making fielset appear animation
                                opacity = 1 - now;

                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                previous_fs.css({
                                    'opacity': opacity
                                });
                            },
                            duration: 500
                        });
                        setProgressBar(--current);
                    });

                    function setProgressBar(curStep) {
                        var percent = parseFloat(100 / steps) * curStep;
                        percent = percent.toFixed();
                        $(".progress-bar")
                            .css("width", (percent * 2) + "%")
                    }
                    $(".submit").click(function() {
                        return false;
                    });
                } else {
                    var current_fs, next_fs, previous_fs; //fieldsets
                    var opacity;
                    var current = 1;
                    var steps = $("fieldset").length;
                    setProgressBar(current);
                    $(".next").click(function() {

                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();

                        step = current_fs.attr('data-step')
                        var forward = true;
                        unique_id = $('#unique_id').val();
                        if (step === "1") {
                            phone = $('#phone').val();
                            uname = $('#uname').val();
                            lname = $('#lname').val();
                            email = $('#email').val();
                            if (uname.length === 0 || email.length === 0 || phone.length === 0) {
                                forward = false;
                            }
                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    phone: phone,
                                    uname: uname,
                                    lname: lname,
                                    email: email,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "2") {
                            city = $('.city_check:checked').val();
                            neighbor = []
                            neighborhoods_multi = $('.neighborhoods_multi .multiple-options .current');
                            neighborhoods_multi.each(function() {
                                neighbor.push($(this).text())
                            })

                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    city: city,
                                    neighborhoods_multi: neighbor,
                                    unique_id: unique_id,

                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "3") {
                            bed = [];
                            const elements = document.querySelectorAll('.bed .form-check-input:checked');
                            Array.from(elements).forEach((element, index) => {
                                bed.push($(element).val())
                            })
                            console.log(bed)
                            bath = $('.bath .form-check-input:checked').val();
                            unique_id = $('#unique_id').val();
                            if (bath === undefined) {
                                bath = "";
                            }



                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    bed: bed,
                                    bath: bath,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "4") {

                            Area = $('#area-range_rent .first-slider-value').val();
                            Area2 = $('#area-range_rent .second-slider-value').val();
                            Price = $('#price-range-rent .first-slider-value').val();
                            Price2 = $('#price-range-rent .second-slider-value').val();
                            Area_sale = $('#area-range_sale .first-slider-value').val();
                            Area2_sale = $('#area-range_sale .second-slider-value').val();
                            Price_sale = $('#area-range_sale .first-slider-value').val();
                            Price2_sale = $('#area-range_sale  .second-slider-value').val();
                            unique_id = $('#unique_id').val();

                            // console.log(Price2)

                            $.ajax({
                                method: 'post',
                                data: {
                                    Area: Area,
                                    Area2: Area2,
                                    Price: Price,
                                    Price2: Price2,
                                    Area_sale: Area_sale,
                                    Area2_sale: Area2_sale,
                                    Price_sale: Price_sale,
                                    Price2_sale: Price2_sale,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "5") {
                            month = $('.pointer.monthname').text();
                            date = $('.group.calendar-body .active').text();
                            unique_id = $('#unique_id').val();
                            dated = ""
                            if (date === undefined || date === 0 || date === "0" || date === "2020") {
                                dated = ""
                            } else {
                                dated = date + ' ' + month
                            }

                            console.log(date);



                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    dated: dated,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "6") {
                            Amenities = $('#Amenities').val();
                            Features = $('#Features').val();
                            Pets = $('#Pets').val();
                            Parking = $('#Parking').val();

                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    Amenities: Amenities,
                                    Features: Features,
                                    Pets: Pets,
                                    Parking: Parking,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (step === "7") {
                            credit_score = $('#credit_score').val();
                            Background = $('#Background').val();

                            $.ajax({
                                method: 'POST',
                                crossOrigin: true,
                                async: true,
                                data: {
                                    credit_score: credit_score,
                                    Background: Background,
                                    unique_id: unique_id,
                                },
                                url: 'php/submit.php',
                                success: function(data) {
                                    console.log(data);
                                },
                                error: function(request, status, error) {
                                    console.log('There was an error: ', request.responseText);
                                },
                            });
                        }
                        if (forward === true) {

                            //Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                            //show the next fieldset
                            next_fs.show();
                            //hide the current fieldset with style
                            current_fs.animate({
                                opacity: 0
                            }, {
                                step: function(now) {
                                    // for making fielset appear animation
                                    opacity = 1 - now;

                                    current_fs.css({
                                        'display': 'none',
                                        'position': 'relative'
                                    });
                                    next_fs.css({
                                        'opacity': opacity
                                    });
                                },
                                duration: 500
                            });
                            setProgressBar(++current);
                        } else {
                            swal({
                                title: 'Field Empty',
                                text: 'Please Fill Empty Fields!',
                                type: 'warning',
                            })
                        }

                    });
                    $(".previous").click(function() {

                        current_fs = $(this).parent();
                        previous_fs = $(this).parent().prev();

                        //Remove class active
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                        //show the previous fieldset
                        previous_fs.show();

                        //hide the current fieldset with style
                        current_fs.animate({
                            opacity: 0
                        }, {
                            step: function(now) {
                                // for making fielset appear animation
                                opacity = 1 - now;

                                current_fs.css({
                                    'display': 'none',
                                    'position': 'relative'
                                });
                                previous_fs.css({
                                    'opacity': opacity
                                });
                            },
                            duration: 500
                        });
                        setProgressBar(--current);
                    });

                    function setProgressBar(curStep) {
                        var percent = parseFloat(100 / steps) * curStep;
                        percent = percent.toFixed();
                        $(".progress-bar")
                            .css("width", (percent * 2) + "%")
                    }
                    $(".submit").click(function() {
                        return false;
                    });
                }

            });
            // MultiStep End
        </script>
        </div>
        <!-- Wrapper / End -->
        </body>

        </html>