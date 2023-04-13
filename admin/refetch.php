<?php
include './inc/header.php';


?>


<a href="refetch.php?refetch=yes" class="btn btn-primary mb-5">Refetch</a>

<button id="fetch">fetch</button>

<div class="my-properties">

</div>
</div>
</div>
</div>
<div class="my-properties">

</div>
</div>
</div>
</div>
sc
</section>
<!-- END SECTION USER PROFILE -->
<?php
include './inc/footer.php';


if (isset($_GET['refetch'])) {
    $sql = "SELECT * FROM cities WHERE status=1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

            $city =  $row['name'];
            $c_id =  $row['cities_id'];
            // echo $c_id;



            $sql2 = "SELECT * FROM neighbourhood WHERE city='$city'";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                // output data of each row
                while ($row2 = $result2->fetch_assoc()) {
                    $n_id =  $row2['neighbor_id'];

                    echo '<a target="__blank"  href="https://thewebions.com/property/properties?city_id='. $c_id .'&neighbourhood_id='. $n_id .'" class="btn fetch btn-primary mb-5">'. $row2['name'] .'</a>';
                 
                }
                echo '<br />' . '<br />';
            }
        }
    }
}



?>

