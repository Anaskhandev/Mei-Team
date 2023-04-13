<?php

include './admin/config.php';

// if(isset($_GET['city_id'])){


$sqls = "SELECT * FROM neighbourhood WHERE status=1";
$results = $conn->query($sqls);
// $i = 1;
if ($results->num_rows > 0) {
    // output data of each row
    while ($row = $results->fetch_assoc()) {
        echo print_r($row);
        $n_id = $row['neighbor_id'];
        $c_name = $row['city'];
        $sql2 = "SELECT * FROM cities WHERE name='$c_name'";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
            // output data of each row
            while ($row2 = $result2->fetch_assoc()) {
                $c_id =  $row2['cities_id'];




                $curl = curl_init();

                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.sparkapt.com/',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => '{
        "operationName": "properties",
        "variables": {
            "cityId": ' . $c_id . ',
            "search": null,
            "minRent": null,
            "maxRent": null,
            "availFrom": null,
            "availTo": null,
            "yearFrom": null,
            "yearTo": null,
            "sqFeet": null,
            "escort": null,
            "sendEscort": null,
            "bonus": null,
            "bedroom": null,
            "bathroom": null,
            "neighborhoodIds": [' . $n_id . '],
            "addons": null,
            "policies": null,
            "unitFeatures": null,
            "rating": null,
            "orderBy": [],
            "onlyAvailable": false,
            "first": 100,
            "after": ""
        },
        "query": "query properties($cityId: Int, $minRent: Int, $maxRent: Int, $availFrom: ValidString, $availTo: ValidString, $yearFrom: ValidString, $yearTo: ValidString, $neighborhoodIds: [Int!], $escort: ValidString, $sendEscort: ValidString, $zip: ValidString, $sqFeet: ValidString, $bedroom: [ValidString!], $bathroom: [ValidString!], $search: ValidString, $addons: [ValidString!], $policies: [ValidString!], $unitFeatures: [ValidString!], $bonus: ValidString, $rating: ValidString, $after: String, $before: String, $first: Int, $last: Int, $orderBy: [OrderBy!], $onlyAvailable: Boolean, $phone: ValidString) {\\n  properties(\\n    cityId: $cityId\\n    minRent: $minRent\\n    maxRent: $maxRent\\n    availFrom: $availFrom\\n    availTo: $availTo\\n    yearFrom: $yearFrom\\n    yearTo: $yearTo\\n    neighborhoodIds: $neighborhoodIds\\n    escort: $escort\\n    sendEscort: $sendEscort\\n    zip: $zip\\n    sqFeet: $sqFeet\\n    bedroom: $bedroom\\n    bathroom: $bathroom\\n    search: $search\\n    addons: $addons\\n    policies: $policies\\n    unitFeatures: $unitFeatures\\n    bonus: $bonus\\n    rating: $rating\\n    after: $after\\n    before: $before\\n    first: $first\\n    last: $last\\n    orderBy: $orderBy\\n    onlyAvailable: $onlyAvailable\\n    phone: $phone\\n  ) {\\n    totalCount\\n    edges {\\n      node {\\n        city {\\n          id\\n          name\\n          __typename\\n        }\\n        id\\n        name\\n        email\\n        address\\n        phone\\n        units\\n        renovated\\n        builtYear\\n        googleMap\\n        googleRating\\n        imageThumbUrls\\n        imageUrls\\n        managementCompany\\n        addonItems\\n        policyItems\\n        lat\\n        long\\n        googleReviewLink\\n        neighborhood {\\n          id\\n          name\\n          __typename\\n        }\\n        webLink\\n        specials\\n        escort\\n        sendEscort\\n        commissionNote\\n        bonus\\n        updatedAt\\n        additionalNote\\n        schedulingNote\\n        virtualTourLink\\n        feesSheetUrl\\n        floorPlans {\\n          id\\n          name\\n          bed\\n          bath\\n          plan2d\\n          unitFeatures\\n          rentMin\\n          rentMax\\n          sqftMin\\n          updatedAt\\n          isAvailable\\n          units {\\n            id\\n            aptNo\\n            size\\n            price\\n            addonItems\\n            isAvailable\\n            moveIn\\n            updatedAt\\n            __typename\\n          }\\n          __typename\\n        }\\n        __typename\\n      }\\n      __typename\\n    }\\n    pageInfo {\\n      endCursor\\n      startCursor\\n      hasNextPage\\n      hasPreviousPage\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n"
    }',
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer NWSN5EyY5avY0WHTTifeWB2CZ2Qi--TQWdNXfXB1y4+ECO--hnAH/fi61EKQlayeiLz0cQ==',
                        'Content-Type: application/json'
                    ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);


                $replace = str_replace("'", ",", $response);
                $replace2 = str_replace("`", ",", $replace);


                $props = json_decode($replace2);
                // echo print_r(json_decode($response));

                // $props = json_decode($response);
                $properties = $props->data->properties->edges;

                // echo print_r($properties);


                // $properties = json_decode($_POST['properties'])->properties->edges;
                $i = 0;
                $count = count($properties);
                echo $count;

                while ($i < $count) {
                    // echo print_r($properties[$i]->node) . '<br/><br/>';

                    $city = $properties[$i]->node->city->name;
                    // echo $city.'<br/>';
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

                    $sql = "SELECT * FROM properties WHERE property_id='$property_id'";
                    $result = $conn->query($sql);
                    if ($result->num_rows === 0) {

                        $sql3 = "INSERT INTO properties (`addonItems`, `address`, `builtYear`, `city`, `commissionNote`, `email`, `floorPlans`, `googleMap`, `googleRating`, `googleReviewLink`, `property_id`, `imageThumbUrls`, `imageUrls`, `lat`, `longitude`, `specials`, `managementCompany`, `name`, `neighborhood`, `phone`, `updatedAt`, `webLink`) VALUES ( '$addonItems', '$address', '$builtYear', '$city', '$commissionNote', '$email', '$floorPlans', '$googleMap', '$googleRating', '$googleReviewLink', '$property_id', '$imageThumbUrls', '$imageUrls', '$lat', '$longitude', '$specials', '$managementCompany', '$name', '$neighborhood', '$phone', '$updatedAt', '$webLink')";

                        if ($conn->query($sql3)) {
                            echo 'success <br/> <br/>';
                        } else {
                            echo 'error <br/> <br/>';
                        }
                    } else {
                        // echo '<br/><br/>' . 'already present' . '<br/><br/>' . '<br/><br/>';
                        $sql3 = "UPDATE properties SET addonItems='$addonItems', address='$address', builtYear='$builtYear', city='$city', commissionNote='$commissionNote', email='$email', floorPlans='$floorPlans', googleMap='$googleMap', googleRating='$googleRating', googleReviewLink='$googleReviewLink', property_id='$property_id', imageThumbUrls='$imageThumbUrls', imageUrls='$imageUrls', lat='$lat', longitude='$longitude', specials='$specials', managementCompany='$managementCompany', neighborhood='$neighborhood', phone='$phone', updatedAt='$updatedAt', webLink='$webLink' WHERE  `property_id`='$property_id'";

                        if ($conn->query($sql3)) {
                            echo 'success. 5 <br/> <br/>';
                        } else {
                            echo 'error 5 <br/> <br/>';
                        }
                    }



                    // echo json_encode($name);


                    $i++;
                }
            }
        }
    }
}
    
// }

// include './admin/config.php';
// // echo print_r($_POST)."abcd";
// if (isset($_POST) && $_POST['properties']) {

//     $properties = json_decode($_POST['properties'])->properties->edges;
//     $i = 0;
//     $count = count($properties);

//     while ($i < $count) {
//         // echo print_r($properties[$i]->node) . '<br/><br/>';

//         $city = $properties[$i]->node->city->name;
//         $neighborhood = $properties[$i]->node->neighborhood->name;
//         $floorPlans = json_encode($properties[$i]->node->floorPlans);
//         $commissionNote = $properties[$i]->node->commissionNote;
//         $email = $properties[$i]->node->email;

//         $addonItems = json_encode($properties[$i]->node->addonItems);
//         $imageThumbUrls = json_encode($properties[$i]->node->imageThumbUrls);
//         $imageUrls = json_encode($properties[$i]->node->imageUrls);

//         $builtYear = $properties[$i]->node->builtYear;
//         $googleMap = $properties[$i]->node->googleMap;
//         $googleRating = $properties[$i]->node->googleRating;
//         $property_id = $properties[$i]->node->id;
//         $lat = $properties[$i]->node->lat;
//         $longitude  = $properties[$i]->node->long;
//         $name = $properties[$i]->node->name;
//         $phone = $properties[$i]->node->phone;
//         $specials = $properties[$i]->node->specials;
//         $address = $properties[$i]->node->address;
//         $googleReviewLink = $properties[$i]->node->googleReviewLink;
//         $webLink = $properties[$i]->node->webLink;
//         $updatedAt = $properties[$i]->node->updatedAt;
//         $managementCompany = $properties[$i]->node->managementCompany;

//         $sql = "SELECT * FROM properties WHERE name='$name'";
//         $result = $conn->query($sql);
//         if ($result->num_rows === 0) {

//             $sql = "INSERT INTO properties (`addonItems`, `address`, `builtYear`, `city`, `commissionNote`, `email`, `floorPlans`, `googleMap`, `googleRating`, `googleReviewLink`, `property_id`, `imageThumbUrls`, `imageUrls`, `lat`, `longitude`, `specials`, `managementCompany`, `name`, `neighborhood`, `phone`, `updatedAt`, `webLink`) VALUES ( '$addonItems', '$address', '$builtYear', '$city', '$commissionNote', '$email', '$floorPlans', '$googleMap', '$googleRating', '$googleReviewLink', '$property_id', '$imageThumbUrls', '$imageUrls', '$lat', '$longitude', '$specials', '$managementCompany', '$name', '$neighborhood', '$phone', '$updatedAt', '$webLink')";

//             if ($conn->query($sql)) {
//                 echo 'success <br/> <br/>';
//             } else {
//                 echo 'error <br/> <br/>';
//             }
//         } else {
//             echo '<br/><br/>' . 'already present' . '<br/><br/>' . '<br/><br/>';
//             $sql = "UPDATE properties SET addonItems='$addonItems', address='$address', builtYear='$builtYear', city='$city', commissionNote='$commissionNote', email='$email', floorPlans='$floorPlans', googleMap='$googleMap', googleRating='$googleRating', googleReviewLink='$googleReviewLink', property_id='$property_id', imageThumbUrls='$imageThumbUrls', imageUrls='$imageUrls', lat='$lat', longitude='$longitude', specials='$specials', managementCompany='$managementCompany', neighborhood='$neighborhood', phone='$phone', updatedAt='$updatedAt', webLink='$webLink' WHERE  `name`='$name'";

//             if ($conn->query($sql)) {
//                 echo 'success 5 <br/> <br/>';
//             } else {
//                 echo 'error 5 <br/> <br/>';
//             }
//         }



//         echo json_encode($name);


//         $i++;
//     }
// }
// echo "<script>window.close();</script>";
