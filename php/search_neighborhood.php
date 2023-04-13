<?php
require '../admin/config.php';
if (isset($_POST['city'])) {
    $city = $_POST['city'];
    // echo  $_POST['city'];
    $output = '';
    $qry = "SELECT * FROM neighbourhood WHERE city='$city' ";
    $result = $conn->query($qry);
    if ($result->num_rows > 0) {
        // $output .= '<option value="">Neighborhood</option>';
        $items = "";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $items .= ' <div class="form-group col-md-3 col-12">
            <input id="' . $row['neighbor_id'] . '" value="' . $row['name'] . '" type="checkbox" name="check">
            <label for="' . $row['neighbor_id'] . '">' . $row['name'] . '</label>
        </div>';
        }
        $output .= $items;
    } else {
        $output .= '<option value=""  selected disabled >No Neighborhoods</option>';
    }
    echo $output;
} else if (isset($_POST['city_e'])) {
    $city = $_POST['city_e'];
    // echo  $_POST['city_e'];
    $output = '';
    $qry = "SELECT * FROM neighbourhood WHERE city='$city' ";
    $result = $conn->query($qry);
    if ($result->num_rows > 0) {
        // $output .= '<li data-value=""  class="option focus" disabled>Neighborhood</li>';
        $items = "";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $items .= '<li data-value="' . $row['name'] . '" class="option focus">' . $row['name'] . '</li>';
        }
        $output .= $items;
    } else {
        $output .= '<option value="">No Neighborhoods</option>';
    }
    echo $output;
}
