<?php 
    require "inc/header.php";
    if(isset($_GET['blog_id_admin'])){
        $id = $_GET['blog_id_admin'];
        $qry = "SELECT * FROM blog_table WHERE b_id=$id";
        ?>
            <a href="leads.php">Go to Dashboard</a>
        <?php
    }else{
        echo "<script>window.location.href='leads.php'</script>";
    }
    
    $res = $conn->query($qry);
    $row = $res->fetch_assoc();
    
    
?>

<div class="main-card mb-3 card">
    <div class="card-body">
        <!-- <h5 class="card-title">Grid</h5> -->
        <form id="update_blog">
            <input type="hidden" name="blog_id" value="<?php echo $row['b_id']; ?>">
            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="title" cols="30" rows="5" placeholder="Enter a title"><?php echo $row['b_title']; ?></textarea>
                </div>
            </div>

            <div class="position-relative row form-group"><label for="exampleText"
                    class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <div id="summernote">
                    <?php echo $row['b_content']; ?>
                    </div>
                </div>
            </div>
           
            <div class="position-relative row ">
                <div class="col-lg-10 offset-lg-2 d-flex align-items-center">
                    <button type="submit" class="btn btn-success">Update</button>
                    <div class="error_msg"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require "inc/footer.php"; ?>
