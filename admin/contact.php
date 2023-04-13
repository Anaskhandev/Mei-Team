<?php
include './inc/header.php';
?>
<div class="my-properties ">
    <table class="table-responsive">
        <h2>Contact Inquiries</h2>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM contact WHERE status=1 ORDER BY id desc";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td>
                            <h2><?php echo $row['name'] . " " . $row['lastname'] ?></h2>
                        </td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td class="actions">
                            <!-- <a href="#" class="edit"><i class="lni-pencil"></i>Edit</a> -->
                            <a href="delete.php?id=<?php echo $row['id'] ?>&title=contact" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>

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
</section>
<!-- END SECTION USER PROFILE -->

<?php
include './inc/footer.php';
?>