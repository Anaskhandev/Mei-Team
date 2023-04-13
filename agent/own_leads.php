<?php
require "inc/header.php";

if (isset($_GET['blog_id_admin_delete'])) {
    $id = $_GET['blog_id_admin_delete'];
    $qry = "DELETE FROM `blog_table` WHERE b_id=$id";
    $res = $conn->query($qry);
    if ($res == true) {
        echo '<script>windows.location.href=leads.php</script>';
    } else {
        echo '<script>windows.location.href=leads.php</script>';
    }
}
$email = $_SESSION['email'];

$qry = "SELECT * FROM expert WHERE claimed=1 AND claimed_by='$email' ORDER BY id DESC";
$res = $conn->query($qry);
?>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header d-flex justify-content-between">All Leads <span class="alert_message"></span>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table table-hover responsive nowrap align-middle mb-0 table table-borderless table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($res->num_rows > 0) {
                            $i = 0;
                            while ($row = $res->fetch_assoc()) {
                                $i++;
                        ?>
                                <tr>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="hidden" name="claimer_id" value="<?php echo $_SESSION['email']; ?>">

                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row['uname'] . ' ' . $row['lname'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['city'] ?></td>
                                    <td>

                                        <a class="btn btn-info" href="./view.php?lead=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-solid fa-glasses mr-2"></i>View</a>
                                        <button id="de_claim_btn" class="btn btn-success de_claim_btn
                                        <?php
                                        if ($row['claimed'] === "0") {
                                            echo 'disabled';
                                        }
                                        ?>"><i class="metismenu-icon fa-solid fa-paperclip mr-2"></i>de-Claim</button>
                                        <!-- <a class="btn btn-outline-danger" href="leads.php?lead_admin_delete=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-solid fa-trash mr-2"></i>Delete</a> -->

                                        <!-- pe-7s-trash -->

                                    </td>
                                </tr>
                        <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require "inc/footer.php"; ?>