<?php
    $json_array_data = array();
    $json_array_data['AppURL'] = 'http://192.168.0.108:8080/Public/file/yalla_live.apk';
    $json_array_data['Content'] = 'test';
    $json_array_data['AppVersion'] = '26';
    $json_array_data['isUp'] = '1';
    $json_array = array();
    $json_array['data'] = $json_array_data;
    $json_array['code'] = '1000';
    echo json_encode($json_array);
?>