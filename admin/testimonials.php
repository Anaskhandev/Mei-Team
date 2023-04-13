<?php
include './inc/header.php';
?>


<a href="add_testimonials.php" class="btn btn-primary mb-5">Add Testimonials</a>

<div class="my-properties">
    <table class="table-responsive" id="datatable">
        <thead>
            <tr>
                <th class="pl-2">USER</th>
                <th class="p-0"></th>
                <th>Message</th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM testimonials WHERE status=1";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td class="image myelist">
                            <a href="single-property-1.html"><img alt="my-properties-3" src="../uploads/<?php echo $row['image'] ?>" class="img-fluid"></a>
                        </td>
                        <td>
                            <div class="inner">
                                <h2><?php echo $row['name'] ?></h2>

                            </div>
                        </td>
                        <td><?php echo $row['message'] ?></td>
                        <td><?php echo $row['date'] ?></td>

                        <td class="actions">
                            <a href="add_testimonials.php?id=<?php echo $row['id'] ?>" class="edit"><i class="lni-pencil"></i>Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>&title=testimonials" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
                        </td>


                    </tr>
                    <script>
                        function confirmLeave() {
                            if (!confirm("Do you wish to continue without finishing the payment process? Your account will not be setup...")) return;
                            window.open('popup.html', 'width=400,height=400');
                        }
                    </script>

            <?php
                    $i = $i + 1;
                }
            } else {
                echo "0 results";
            }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</section>
<!-- END SECTION USER PROFILE -->
<?php
include './inc/footer.php';
?>