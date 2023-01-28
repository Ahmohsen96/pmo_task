<?php
require 'CRUD.php';
$company_name = $_REQUEST['company_name'];
$phone = $_REQUEST['phone'];
$Established_since = $_REQUEST['Established_since'];
$company_capital = $_REQUEST['company_capital'];
$company_portofolio = $_REQUEST['company_portofolio'];
$company_address = $_REQUEST['company_address'];
$mobile_number = $_REQUEST['mobile_number'];
$company_website = $_REQUEST['company_website'];
$number_of_employee = $_REQUEST['number_of_employee'];
$fullimage = $_FILES['image'];
$image = $fullimage['name'];


// var_dump($image['name']);
$data = [
    'company_name' => $company_name,
    'phone' => $phone,
    'Established_since' => $Established_since,
    'company_capital' => $company_capital,
    'company_portofolio' => $company_portofolio,
    'company_address' => $company_address,
    'mobile_number' => $mobile_number,
    'company_website' => $company_website,
    'number_of_employee' => $number_of_employee,
    'image' => $image
];

$getData->Create($data);


header('location:./index.php');