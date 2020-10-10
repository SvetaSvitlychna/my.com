<?php
$url =CONFIG.'/contacts.json';

$data =[];

$readJF = file_get_contents($url);

$data = json_decode($readJF, true);

if ($_POST){
    try {
        $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_SPECIAL_CHARS);
        $street = filter_input(INPUT_POST,'street',FILTER_SANITIZE_SPECIAL_CHARS);
        $city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_SPECIAL_CHARS);
        $mobile = filter_input(INPUT_POST,'mobile',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
        $formdata=[
            "email" => $email,
            "street" => $street,
            "country" => $country,
            "city" => $city,
            "mobile" => $mobile
        ];
        $data =[];
        array_push($data, $formdata);
        $json = json_encode($data);
        file_put_contents($url, $json);
    }
    catch (Exception $ex){
      var_dump($ex);  
    }
}


$title = "Configuration";
render('config/index',compact('data', 'title'));