<?php

    include_once ('curl.php');
    include_once ('simple_html_dom.php');

    $c = curl::app('http://62.213.36.254')
        ->set(CURLOPT_HEADER, 1);

    $data = $c->request(
        'all_main.php?lg_ex=meteo&pw_ex=krsk2019&butn=Вход'
    );

    $dom = str_get_html($data['html']);

//    $dataTable = array();

    $dataArray = array();

    $dataTable = $dom->find('.colr_zag');

    foreach ($dataTable as $key=>$str){

        if ($key>=110 && $key<=126){
            $dataArray[$key]=$str->plaintext;
        }
        if ($key>=128 && $key<=144){
            $dataArray[$key]=$str->plaintext;
        }
        if ($key>=146 && $key<=162){
            $dataArray[$key]=$str->plaintext;
        }
    }

    echo json_encode($dataArray, JSON_UNESCAPED_UNICODE);

//    foreach ($dataArray as $value){
//
//        echo $value;
//    }

//    echo json_encode($dataArray);

//    foreach ($dataArray as $key=>$value){
//        echo ($key.' '.$value);
//    }