<?php
include './inc/header.php';
?>


<a href="add_cities.php" class="btn btn-primary mb-5">Add Cities</a>

<div class="my-properties">
    <table class="table-responsive" id="datatable">
        <thead>
            <tr>
                <th class="pl-2">Property</th>
                <th class="p-0"></th>
                <th>City</th>
                <th>Neighborhood</th>
                <th>Date Added</th>
                <th>Featured</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM properties WHERE status=1";
            $result = $conn->query($sql);
            $i = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $imageUrls = json_decode($row['imageUrls']);
            ?>
                    <tr>
                        <td class="image myelist">
                            <a href="single-property-1.html"><img alt="my-properties-3" src="<?php if (!empty($imageUrls[0]) && $imageUrls[0] != 'https://api.sparkapt.com/rails/active_storage/representations/redirect/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBamx4IiwiZXhwIjpudWxsLCJwdXIiOiJibG9iX2lkIn19--fa1c42e16d700b720e4e26b13c477b0961f679ec/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaDdCem9MWm05eWJXRjBTU0lJY0c1bkJqb0dSVlE2RW5KbGMybDZaVjkwYjE5bWFYUmJCMmtDNkFNdyIsImV4cCI6bnVsbCwicHVyIjoidmFyaWF0aW9uIn19--43af89d2da5f0e3872ab5863ca5a5942f320921c/Pictures%20Coming%20Soon!.png') {
                                                                                                    echo $imageUrls[0];
                                                                                                } else {
                                                                                                    echo '../images/noImage.png';
                                                                                                } ?>" class="img-fluid"></a>
                        </td>
                        <td>
                            <div class="inner">
                                <a href="single-property-1.html">
                                    <h2><?php echo $row['name'] ?></h2>
                                </a>

                            </div>
                        </td>
                        <td><?php echo $row['city'] ?></td>
                        <td><?php echo $row['neighborhood'] ?></td>
                        <td><?php echo $row['updatedAt'] ?></td>
                        <td><button class="btn btn-primary featured" name=<?php echo $row['id']?>><?php echo $row['featured'] === "0" ? 'Not Featured' : 'Featured' ?></button></td>
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