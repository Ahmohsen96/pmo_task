<?php


require 'CRUD.php';
$id1 = $_REQUEST['id'];
$data = $getData->show($id1);

$id = $data['id'];
$company_name = $data['company_name'];
$phone = $data['phone'];
$Established_since = $data['Established_since'];
$company_capital = $data['company_capital'];
$company_portofolio = $data['company_portofolio'];
$company_address = $data['company_address'];
$mobile_number = $data['mobile_number'];
$company_website = $data['company_website'];
$number_of_employee = $data['number_of_employee'];
$image = $data['image'];
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
.<div class="container">
    <form action="./edit.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" name="company_name" value="<?= $company_name ?>" class="form-control" id="company_name"
                aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="phone" name="phone" value="<?= $phone ?>" class="form-control" id="phone">
        </div>
        <div class="mb-3">
            <label for="Established_since" class="form-label">Established_since</label>
            <input type="text" name="Established_since" value="<?= $Established_since ?>" class="form-control"
                id="Established_since">
        </div>
        <div class="mb-3">
            <label for="company_capital" class="form-label">company_capital</label>
            <input type="text" name="company_capital" value="<?= $company_capital ?>" class="form-control"
                id="company_capital">
        </div>
        <div class="mb-3">
            <label for="company_portofolio" class="form-label">company_portofolio</label>
            <input type="text" name="company_portofolio" value="<?= $company_portofolio ?>" class="form-control"
                id="company_portofolio">
        </div>
        <div class="mb-3">
            <label for="company_address" class="form-label">company_address</label>
            <input type="text" name="company_address" value="<?= $company_address ?> " class="form-control"
                id="company_address">
        </div>
        <div class="mb-3">
            <label for="mobile_number" class="form-label">mobile_number</label>
            <input type="phone" name="mobile_number" value="<?= $mobile_number ?>" class="form-control"
                id="mobile_number">
        </div>
        <div class="mb-3">
            <label for="company_website" class="form-label">company_website</label>
            <input type="text" name="company_website" value="<?= $company_website ?>" class="form-control"
                id="company_website">
        </div>
        <div class="mb-3">
            <label for="numper_of_employee" class="form-label">number_of_employee</label>
            <input type="number" name="number_of_employee" value="<?= $number_of_employee ?>" class="form-control"
                id="numper_of_employee" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="formFileLg" class="form-label">Image</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
            <img src="./images/<?= $image ?>" width="100px" height="100px">
        </div>
        <input type="hidden" name="id" value="<?= $id ?> ">
        <input type="submit" value="Update" class="mb-3 btn btn-primary">
    </form>
</div>