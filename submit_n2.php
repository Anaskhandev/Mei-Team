<?php

include './admin/config.php';

if (isset($_POST) && $_POST['properties']) {

    $properties = json_decode($_POST['properties'])->properties->edges;
    $i = 0;
    $count = count($properties);

    while ($i < $count) {
        // echo print_r($properties[$i]->node) . '<br/><br/>';

        $city = $properties[$i]->node->city->name;
        $neighborhood = $properties[$i]->node->neighborhood->name;
        $floorPlans = json_encode($properties[$i]->node->floorPlans);
        $commissionNote = $properties[$i]->node->commissionNote;
        $email = $properties[$i]->node->email;

        $addonItems = json_encode($properties[$i]->node->addonItems);
        $imageThumbUrls = json_encode($properties[$i]->node->imageThumbUrls);
        $imageUrls = json_encode($properties[$i]->node->imageUrls);

        $builtYear = $properties[$i]->node->builtYear;
        $googleMap = $properties[$i]->node->googleMap;
        $googleRating = $properties[$i]->node->googleRating;
        $property_id = $properties[$i]->node->id;
        $lat = $properties[$i]->node->lat;
        $longitude  = $properties[$i]->node->long;
        $name = $properties[$i]->node->name;
        $phone = $properties[$i]->node->phone;
        $specials = $properties[$i]->node->specials;
        $address = $properties[$i]->node->address;
        $googleReviewLink = $properties[$i]->node->googleReviewLink;
        $webLink = $properties[$i]->node->webLink;
        $updatedAt = $properties[$i]->node->updatedAt;
        $managementCompany = $properties[$i]->node->managementCompany;

        $sql = "SELECT * FROM properties WHERE name='$name'";
        $result = $conn->query($sql);
        if ($result->num_rows === 0) {

            $sql = "INSERT INTO properties (`addonItems`, `address`, `builtYear`, `city`, `commissionNote`, `email`, `floorPlans`, `googleMap`, `googleRating`, `googleReviewLink`, `property_id`, `imageThumbUrls`, `imageUrls`, `lat`, `longitude`, `specials`, `managementCompany`, `name`, `neighborhood`, `phone`, `updatedAt`, `webLink`) VALUES ( '$addonItems', '$address', '$builtYear', '$city', '$commissionNote', '$email', '$floorPlans', '$googleMap', '$googleRating', '$googleReviewLink', '$property_id', '$imageThumbUrls', '$imageUrls', '$lat', '$longitude', '$specials', '$managementCompany', '$name', '$neighborhood', '$phone', '$updatedAt', '$webLink')";

            if ($conn->query($sql)) {
                echo 'success <br/> <br/>';
            } else {
                echo 'error <br/> <br/>';
            }
        } else {
            echo '<br/><br/>' . 'already present' . '<br/><br/>' . '<br/><br/>';
            $sql = "UPDATE properties SET addonItems='$addonItems', address='$address', builtYear='$builtYear', city='$city', commissionNote='$commissionNote', email='$email', floorPlans='$floorPlans', googleMap='$googleMap', googleRating='$googleRating', googleReviewLink='$googleReviewLink', property_id='$property_id', imageThumbUrls='$imageThumbUrls', imageUrls='$imageUrls', lat='$lat', longitude='$longitude', specials='$specials', managementCompany='$managementCompany', neighborhood='$neighborhood', phone='$phone', updatedAt='$updatedAt', webLink='$webLink' WHERE  `name`='$name'";

            if ($conn->query($sql)) {
                echo 'success 5 <br/> <br/>';
            } else {
                echo 'error 5 <br/> <br/>';
            }
        }



        echo json_encode($name);


        $i++;
    }
}
echo "<script>window.close();</script>";
