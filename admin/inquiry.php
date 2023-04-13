<?php
include './inc/header.php';
?>


<!-- <a href="add_expert.php" class="btn btn-primary mb-5">Add Name</a> -->

<div class="my-properties">
    <table class="table-responsive" id="datatable">
        <thead>
            <tr>
                <th class="pl-2">Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Claimed By</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM expert WHERE status=1 ORDER BY id DESC";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td>
                            <div class="inner">
                                <a href="single-property-1.html">
                                    <h2><?php echo $row['uname'] . ' ' . $row['lname'] ?></h2>
                                </a>

                            </div>
                        </td>
                        <td><?php echo $row['phone'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['claimed_by'] ?></td>
                        <td class="actions d-flex justify-content-around">
                            <a href="view_expert.php?id=<?php echo $row['id'] ?>" class="edit"><i class="fas fa-eye"></i></a>

                            <!-- <a href="add_expert.php?id=<?php echo $row['id'] ?>" class="edit"><i class="lni-pencil"></i>Edit</a> -->
                            <a href="delete.php?id=<?php echo $row['id'] ?>&title=expert" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
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