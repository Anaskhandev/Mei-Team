<?php

include './admin/config.php';
$date = date("Y-m-d");
$sql_trun = "TRUNCATE TABLE neighbourhood";
$conn->query($sql_trun);
$sql_cit = "SELECT * FROM cities WHERE status=1";
$result_cit = $conn->query($sql_cit);
if ($result_cit->num_rows > 0) {
    // output data of each row
    while ($row_cit = $result_cit->fetch_assoc()) {

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
            CURLOPT_POSTFIELDS => '{"operationName":"neighborhoods","variables":{"cityId":' . $row_cit['cities_id'] . '},"query":"query neighborhoods($cityId: Int) {\\n  neighborhoods(cityId: $cityId) {\\n    id\\n    name\\n    city {\\n      id\\n      __typename\\n    }\\n    __typename\\n  }\\n}\\n"}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer NWSN5EyY5avY0WHTTifeWB2CZ2Qi--TQWdNXfXB1y4+ECO--hnAH/fi61EKQlayeiLz0cQ==',
                'Content-Type: application/json'
            ),
        ));

        $response_cit = curl_exec($curl);

        curl_close($curl);
        // echo print_r(json_decode($response_cit));
        $res_cit = json_decode($response_cit)->data->neighborhoods;
        echo print_r($res_cit);
        foreach ($res_cit as $r) {

            $sql_nei = "INSERT INTO neighbourhood (name, neighbor_id, city, date) VALUES ('" . $r->name . "', '" . $r->id . "', '" . $row_cit['name'] . "', '" . $date . "')";
            if ($conn->query($sql_nei)) {
                echo '<br/>success<br/>';
            }else{
                echo '<br/>error<br/>';

            }
        }
    }
}
