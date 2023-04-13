<?php
include './inc/header.php';
?>


<!-- <a href="add_users.php" class="btn btn-primary mb-5">Add User</a> -->

<div class="my-properties">
    <table class="table-responsive" id="datatable">
        <thead>
            <tr>
                <th class="pl-2">User Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM users WHERE status=1";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td>
                            <h2><?php echo $row['name'] ?></h2>

                        </td>
                        <td><?php echo $row['email'] ?></td>
                        <td class="actions d-flex justify-content-around">
                            <a href="view_users.php?id=<?php echo $row['id'] ?>" class="edit"><i class="lni-pencil"></i>View</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>&title=users" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
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
    <!-- <div class="pagination-container">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="btn btn-common" href="#"><i class="lni-chevron-left"></i> Previous </a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="btn btn-common" href="#">Next <i class="lni-chevron-right"></i></a></li>
            </ul>
        </nav>
    </div> -->
</div>
</div>
</div>
</div>
</section>
<!-- END SECTION USER PROFILE -->
<?php
include './inc/footer.php';
?>