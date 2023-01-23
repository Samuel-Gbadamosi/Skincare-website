<?php
include 'db.php';

$pdo = pdo_connect_mysql();

//fetch products from db
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="container-fluid">
    <!-- header -->
    <?php include('header.php') ?>
    <!-- header -->
    <!-- main -->
    <main class="container-fluid">
        <section class="sect2">
            <div class="text-center">
                <h1 style="font-weight: 700; color:#363636; padding: 0px 0px 10px 0px;">PRODUCTS</h1>

                <p style="color:black;font-family: monospace; font-weight: lighter;">No Products available at the moment
                </p>

            </div>
        </section>
        <section class="mysect">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="row ">
                            <div class="col-3">
                                <img style="width:165px;"
                                    src="https://cdn.pixabay.com/photo/2018/02/18/19/07/cake-3163117__480.jpg" alt="">

                                <p class="price">$120.00</p>
                            </div>
                            <div class="col-9 pl2">

                                <h3>Choccolate-Cake</h3>
                                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque eum
                                    ipsum recusandae, id quibusdam, ducimus quod omnis alias praesentium cumque! Sed
                                    perspiciatis harum</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-6">

                        <div class="row ">
                            <div class="col-3">
                                <img style="width:165px;"
                                    src="https://cdn.pixabay.com/photo/2016/10/27/22/12/cakes-1776661__480.jpg" alt="">

                                <p class="price">$45.00</p>
                            </div>
                            <div class="col-9 pl2">

                                <h3>Strawberry Pie-Cake</h3>
                                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius eaque eum
                                    ipsum recusandae, id quibusdam, ducimus quod omnis alias praesentium cumque! Sed
                                    perspiciatis harum</p>
                            </div>

                        </div>


                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <div class="row ">
                                    <div class="col-3">
                                        <img style="width:165px;"
                                            src="https://cdn.pixabay.com/photo/2020/07/05/17/16/wedding-cake-5373757__480.jpg"
                                            alt="">

                                        <p class="price">$50.00</p>
                                    </div>
                                    <div class="col-9 pl2">

                                        <h3>Pinky Cake</h3>
                                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                                            eaque eum ipsum recusandae, id quibusdam, ducimus quod omnis alias
                                            praesentium cumque! Sed perspiciatis harum</p>
                                    </div>

                                </div>


                            </div>
                            <div class="col-6">

                                <div class="row ">
                                    <div class="col-3">
                                        <img style="width:165px;"
                                            src="https://cdn.pixabay.com/photo/2019/09/17/18/50/puppy-4484296__480.jpg"
                                            alt="">

                                        <p class="price">$100.00</p>
                                    </div>
                                    <div class="col-9 pl2">

                                        <h3>Dogs favorite Cake</h3>
                                        <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius
                                            eaque eum ipsum recusandae, id quibusdam, ducimus quod omnis alias
                                            praesentium cumque! Sed perspiciatis harum</p>
                                    </div>

                                </div>



                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row ">
                                            <div class="col-3">
                                                <img style="width:165px;"
                                                    src="https://cdn.pixabay.com/photo/2017/03/10/11/58/schokomuffins-2132564__480.jpg"
                                                    alt="">

                                                <p class="price">$159.00</p>
                                            </div>
                                            <div class="col-9 pl2">

                                                <h3>Choco-Muffins Cake</h3>
                                                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Eius eaque eum ipsum recusandae, id quibusdam, ducimus quod omnis
                                                    alias praesentium cumque! Sed perspiciatis harum</p>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="col-6">

                                        <div class="row ">
                                            <div class="col-3">
                                                <img style="width:165px;"
                                                    src="https://cdn.pixabay.com/photo/2017/04/05/22/33/cake-2206618__480.jpg"
                                                    alt="">

                                                <p class="price">$250.00</p>
                                            </div>
                                            <div class="col-9 pl2">

                                                <h3>Cream alchol Cake</h3>
                                                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                    Eius eaque eum ipsum recusandae, id quibusdam, ducimus quod omnis
                                                    alias praesentium cumque! Sed perspiciatis harum</p>
                                            </div>

                                        </div>



                                    </div>


                                </div>

        </section>
    </main>
    <!-- main -->
    <!-- footer -->
    <?php include('footer.php'); ?>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

</html>