<?php
require 'CRUD.php';
$id = $_REQUEST['id'];
$data = $getData->show($id);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container pt-5 mt-5">
    <div class="card mb-3">
        <img src="./images/<?= $data['image']; ?>" class="card-img-top" alt="..." height="400px">
        <div class="card-body">
            <h5 class="card-title"><?= $data['company_name'] ?></h5>
            <p class="card-text">Phone :<?= $data['phone'] ?></p>
            <p class="card-text">Established_since :<?= $data['Established_since'] ?></p>
            <p class="card-text">company_capital :<?= $data['company_capital'] ?></p>
            <p class="card-text">company_portofolio :<?= $data['company_portofolio'] ?></p>
            <p class="card-text">company_address :<?= $data['company_address'] ?></p>
            <p class="card-text">mobile_number :<?= $data['mobile_number'] ?></p>
            <p class="card-text">company_website :<?= $data['company_website'] ?></p>
            <p class="card-text">number_of_employee :<?= $data['number_of_employee'] ?></p>
        </div>
    </div>
</div>