<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
    <!-- bootsrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- bootstrap link -->
    <!-- css link -->
    <link rel="stylesheet" href="style.css">
        <!-- css link -->
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- cdn -->
  </head>
  <!-- body starts -->
<body class="container-fluid">
    <!-- header -->
    <!-- <header class="container-fluid ">

        <div class="col-1">
           <h4 style="font-size: 30px; font-weight: bolder;">DENI</h4>
         </div>
        <div class="col-8 pt-1">
                <ul class=" myun">
                    <li>Home</li>
                    <li>About</li>
                    <li>Product</li>
                    <li>Blog</li>
                    <li>Contact</li>
                </ul>

        </div>
        <div class="col-2 ml-3 pt-2">
               <ul class="ml-2 myun">
                <i class="fa-solid fa-user"></i>
                <i class="fa-solid fa-cart-shopping"></i>   
                <i class="fa-solid fa-magnifying-glass"></i>               </ul>
        </div>
    </header> -->
    <?php include('header.php') ?>
        <!-- header -->
<!-- main -->
    <main class="container-fluid">

        <div style="background:linear-gradient(90deg,#f75063 0,#f77244 100%);" id="carouselExampleIndicators" class="carousel slide pt-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
   
              <div class="carousel-item active">
                <div class="mylefty">
                    <h1 class="myh">DENI PRODUCT FOR SKIN</h1>

                    <button type="button" class="mymybt btn-lg btn-dark">Read More</button>
                </div>
                <img style="width: 65%;" class="d-block  " src="sitoimg.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <div class="mylefty">
                    <h1 class="myh">DENI PRODUCT FOR GENTLE SKIN</h1>

                    <button type="button" class="mymybt btn-lg btn-dark">Read More</button>

                </div>
                <img style="width: 65%;" class="d-block  " src="sitoimg2.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <div class="mylefty">
                  <h1 class="myh">DENI PRODUCT FOR SMOOTH SKIN</h1>
                  <button type="button" class="mymybt btn-lg btn-dark">Read More</button>
                </div>
                <img style="width: 65%;" class="d-block  " src="sitoimg.png" alt="First slide">
              </div>
            </div>
            <a class=" carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- section 1 -->
          <section class="sect1">
              <div class="row">
                <div class="col-6">
                    <div class="mt-5">
                        <img style="height: 500px; float: right;" src="sitoimg4.png" alt="">
                    </div>
                   </div>
                   <div class="col-6 pt-4">
                       <div class="mt-5">
                           <h1 style="font-weight: bold;">ABOUT THE COMPANY</h1>
                           <div class="border mt-4"></div>
                           
                           <div class="myp mt-3">
                            <p style="color:black;">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationconsectetur adipiscing</p>

                           </div>
                       

                           <button style="height: 70px; width: 25%; " type="button" class="mt-5 btn-lg btn-dark">Read More</button>
                       
                           <div class="coco mr-4">
                            <img style="height: 450px;" src="sitoimg3.png" alt="">
                        </div>
                        </div>

                     
                   </div>
              </div>

         
          </section>
          <!-- section 1 ends -->
          <!-- section 2 start -->
          <section class="sect2">
              <div class="text-center">
                  <h1 style="font-weight: 700; color:#363636; padding: 0px 0px 10px 0px;">PRODUCTS</h1>
                    
                  <p style="color:black; font-family: monospace; font-weight: lighter;">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>

              </div>

          </section>
          <!-- section 2 ends -->
          <!-- section 3 starts -->
          <section class="sect3 container">
            <div class="row">
              <div class="col-3 mt-5">

                <h1 style="font-size: 46px; font-weight:bold; color:#464646 ;">LATEST BLOG</h1>

              </div>
              <div class="col-3 offset-6 ">
               <img class="mb-2" style="height: 330px;" src="cream.png" alt="">
              </div>
              

            </div>

          </section>
                    <!-- section 3 ends -->
                    <!-- section 4 starts -->
          <section class="sect4 container">

            <div class="row ">
              <div class="col-4">
                <img style="float: right;" src="facegirl.png" alt="">

              </div>
              <div class="col-8">
                <div class="row myrow">
                  <div class="col-8">
                    <h3>Face Cream Very mosurations</h3>
                   <p style="font-size: 18px; width: 130%; line-height: 1.2; color: #575757;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisRead</p>
                  
                   <button class="btn btn-lg btn-dark">Read More</button>
                  </div>
                  
                </div>

              </div>

            </div>
          </section>
          <!-- section4 ends -->
          <!-- section 5 starts -->
          <section class="sect5 mb-3 container">
            <div class="row ">
              <div class="col-6 myrow">
                <div class="">
                  <h1 style="float: right;">Face Cream Very mosurations Skin</h1>

                  <p style="text-align: right; font-size: 18px; width: 101%; line-height: 1.2; color: #575757;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laborisLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>

                  <button style="float: right;" class="btn btn-lg btn-dark">Read More</button>

                </div>
              </div>
          
              <div class="col-6">

                <img style="height: 500px;" src="chinese.png" alt="">
              </div>

            </div>

          </section>
          <!-- section 5 ends -->
          <!-- contacts me & section6 -->
          <section class="sect6 container">

            <div class="row">
              <div class="col-6 offset-3" style="padding-top: 70px;">
                <h2 style="text-align:center; font-size: 58px; font-weight: bold;">CONTACT US</h2>
        
              </div>
              <div class="col-3 pl-4">
                <img style="height: 300px;" src="sitoimg3.png" alt="">
        
              </div>

            </div>

          </section>
                    <!-- contacts me & section6 -->
                    <!-- section 7 strts -->
          <section class="sect7 container">
            <div class="row">
              <div class="col-6">
                <div>
                  <img style="width:100%" src="creamlux.png" alt="">
                </div>

              </div>
              <div class="col-6">
               <!-- contact me form div -->
                <div class="row">
                  <div class="col-12">
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name :</label>
                        <input  required type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Phone Number :</label>
                        <input required type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email :</label>
                        <input required type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                      </div>
                      <div class="form-group">
                        
                        <label for="exampleInputEmail1">Message :</label>
                        <textarea required class="form-control" id="form4Example3" rows="4"></textarea>

                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                  </div>

                </div>

              </div>

            </div>

          </section>
                              <!-- section 7 strts -->
    </main>
    <!-- main -->
<!-- footer -->
  <?php include('footer.php'); ?>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>
  <!-- body ends -->
</html>