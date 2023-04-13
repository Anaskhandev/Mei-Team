<?php
include('header.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM agents WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

?>
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <!-- START SECTION AGENTS DETAILS -->
            <section class="blog blog-section portfolio single-proper details mb-0 agent_detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <img class="resp-img" src="<?php echo !empty($row['image']) ? './uploads/' . $row['image'] : './images/placeholder.jpg' ?>" alt="blog image">

                        </div>
                        <div class="col-md-8 px-5 agent_name col-12 d-flex justify-content-center flex-column">
                            <h6 class="text-uppercase mb-0"> <?php echo !empty($row['designation']) ? $row['designation'] : '' ?></h6>
                            <h2> <?php echo !empty($row['name']) ? $row['name'] : '' ?></h2>
                            <div class="px-1 my-3">
                                <a href="<?php echo $row['instagram'] ?>" class="agents_links"><i class="fab fa-instagram"></i></a>
                                <a href="<?php echo $row['tiktok'] ?>" class="agents_links mx-2"><i class="fab fa-tiktok"></i></a>
                            </div>
                        </div>
                        <div class="col-12 mt-5 desc">
                            <?php echo !empty($row['description']) ? $row['description'] : '' ?>

                        </div>
                        <div class="col-12 my-4">
                            <hr>
                        </div>
                        <div class="col-12 row mb-5">
                            <h4 class="text-uppercase mb-4 col-12">contact information</h4>
                            <div class="col-xl-3 col-md-5 col-12">Email: <a href="mailto:<?php echo $row['email'] ?>"><?php echo !empty($row['email']) ? $row['email'] : ''; ?></a></div>
                            <div class="col-xl-3 col-md-5 col-12">Mobile: <a href="tel:<?php echo $row['mobile'] ?>"><?php echo !empty($row['mobile']) ? $row['mobile'] : ''; ?></a></div>

                        </div>
                    </div>
                </div>
                </div>
                </aside>
                </div>
                </div>
            </section>
            <!-- END SECTION AGENTS DETAILS -->


<?php
        }
    }
}
$js = '<script src="js/map-single.js"></script><script src="js/timedropper.js"></script><script src="js/datedropper.js"></script>        <script>
        $("#reservation-date").dateDropper();
       this.$("#reservation-time").timeDropper({
           setCurrentTime: false,
           meridians: true,
           primaryColor: "#e8212a",
           borderColor: "#e8212a",
           minutesInterval: "15"
       });
   </script>';
include('footer.php');
?>