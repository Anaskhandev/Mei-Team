<?php
include './inc/header.php';
?>


<a href="add_cities.php" class="btn btn-primary mb-5">Add Cities</a>

<div class="my-properties">
    <table class="table-responsive" id="datatable">
        <thead>
            <tr>
                <th class="pl-2">Cities</th>
                <th class="p-0"></th>
                <th>Date Added</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM cities WHERE status=1";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td class="image myelist">
                            <a href="single-property-1.html"><img alt="my-properties-3" src="<?php echo !empty($row['image']) ?  '../uploads/' . $row['image'] : '../images/placeholder_city.png'; ?>" class="img-fluid"></a>
                        </td>
                        <td>
                            <div class="inner">
                                <a href="single-property-1.html">
                                    <h2><?php echo $row['name'] ?></h2>
                                </a>

                            </div>
                        </td>
                        <td><?php echo $row['updatedAt'] ?></td>
                        <td class="actions">
                            <a href="add_cities.php?id=<?php echo $row['id'] ?>" class="edit"><i class="lni-pencil"></i>Edit</a>
                            <a href="delete.php?id=<?php echo $row['id'] ?>&title=cities" onclick="return confirm('Are you sure?')"><i class="far fa-trash-alt"></i></a>
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