<?php


require 'Crud.php';
session_start();
$data = $getData->index();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PMO | TASK One</title>
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/leon.css" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Start Header -->
    <div class="header">
        <div class="container">
            <img class="logo" src="images/logo.jpg" alt="" />
            Hey, <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    } else {
                        header("Location: login.php");
                    } ?>!
            <div>
                <p><a href="./logout.php" class="btn btn-outline-info">Logout</a></p>
            </div>

        </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing Section -->
    <div class="landing">
        <div class="intro-text">
            <h1>Hello There</h1>
            <p>We are PMO - Project management company</p>
        </div>
    </div>

    <!-- Start About -->
    <div class="about">
        <div class="container">
            <h2 class="special-heading">About</h2>
            <p>Less is more work</p>
            <div class="about-content">
                <div class="image">
                    <img src="images/about.jpg" alt="" />
                </div>
                <div class="text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil nemo neque voluptate tempora
                        velit cum non,
                        fuga vitae architecto delectus sed maxime rerum impedit aliquam obcaecati, aut excepturi iusto
                        laudantium!
                    </p>
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, sapiente. Velit iure
                        exercitationem
                        dolores nesciunt dolore. Eum officiis dolorum hic voluptate quaerat minima, similique inventore
                        esse,
                        alias, sed quo officia?
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <div class="container">
        <form action="./create.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="company_name" class="form-label">Company Name</label>
                <input type="text" name="company_name" class="form-control" id="company_name"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="phone" name="phone" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="Established_since" class="form-label">Established_since</label>
                <input type="text" name="Established_since" class="form-control" id="Established_since">
            </div>
            <div class="mb-3">
                <label for="company_capital" class="form-label">company_capital</label>
                <input type="text" name="company_capital" class="form-control" id="company_capital">
            </div>
            <div class="mb-3">
                <label for="company_portofolio" class="form-label">company_portofolio</label>
                <input type="text" name="company_portofolio" class="form-control" id="company_portofolio">
            </div>
            <div class="mb-3">
                <label for="company_address" class="form-label">company_address</label>
                <input type="text" name="company_address" class="form-control" id="company_address">
            </div>
            <div class="mb-3">
                <label for="mobile_number" class="form-label">mobile_number</label>
                <input type="phone" name="mobile_number" class="form-control" id="mobile_number">
            </div>
            <div class="mb-3">
                <label for="company_website" class="form-label">company_website</label>
                <input type="text" name="company_website" class="form-control" id="company_website">
            </div>
            <div class="mb-3">
                <label for="numper_of_employee" class="form-label">number_of_employee</label>
                <input type="number" name="number_of_employee" class="form-control" id="numper_of_employee"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="formFileLg" class="form-label">Image</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
            </div>
            <input type="submit" value="create" class="mb-3 btn btn-primary">
        </form>
    </div>

    <div class="table table-responsive">
        <table class="table table-dark table-striped m-5">
            <tr>
                <td>company_name</td>
                <td>phone</td>
                <td>Established_since</td>
                <td>company_capital</td>
                <td>company_portofolio</td>
                <td>image</td>
                <td colspan="3" style="text-align: center;">Actions</td>
            </tr>
            <?php foreach ($data as $da) : ?>
            <tr>
                <td><?= $da['company_name'] ?> </td>
                <td><?= $da['phone'] ?> </td>
                <td><?= $da['Established_since'] ?> </td>
                <td><?= $da['company_capital'] ?> </td>
                <td><?= $da['company_portofolio'] ?> </td>
                <td><?= $da['image'] ?> </td>
                <td>

                    <form action="./show.php" method="get">
                        <input type="hidden" name="id" value="<?= $da['id'] ?> ">
                        <input type="submit" value="Show" class="btn btn-outline-info">
                    </form>


                </td>
                <td>
                    <form action="./update.php" method="get">
                        <input type="hidden" name="id" value="<?= $da['id'] ?> ">
                        <input type="submit" value="Update" class="btn btn-outline-info">
                    </form>
                </td>
                <td>
                    <form action="./delete.php" method="get">
                        <input type="hidden" name="id" value="<?= $da['id'] ?> ">
                        <input type="submit" value="Delete" class="btn btn-outline-info">
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Start Contact -->
    <div class="contact">
        <div class="container">
            <h2 class="special-heading">Contact</h2>
            <p>We are born to create</p>
            <div class="info">
                <p class="label">Feel free to drop us a line at:</p>
                <a href="mailto:leonagency@mail.com?subject=Contact" class="link">pmocompany@mail.com</a>
                <div class="social">
                    Find Us On Social Networks
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <!-- Start Footer -->
    <div class="footer">&copy; 2023<span>pmo footer</span> All Right Reserved</div>
    <!-- End Footer -->
</body>

</html>