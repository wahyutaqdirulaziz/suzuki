<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/utama/css/main.css">
    <!-- Material css lib -->
    <link rel="stylesheet" href="<?= base_url()?>assets/utama/css/lib/material.css">
    <!-- Material icon -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Top menu ======================================================================================================-->
    <div class="menu-header">
      <nav class="navbar fixed-top navbar-expand-md navbar-dark">
        <a class="navbar-brand" style="color: white;" href="index.html">SUZUKI</a>
        <button id="navbar-toggler" onclick="setBgColorNavbar()" class="navbar-toggler" style="border:none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>      
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="transition: 1s;">
          <div class="navbar-nav mx-auto">
            <a class="nav-item nav-link text-menu" href="#">XL-7</a>
            <a class="nav-item nav-link text-menu" href="#">ERTIGA</a>
            <a class="nav-item nav-link text-menu" href="#">IGNIS</a>
            <a class="nav-item nav-link text-menu" href="#">SX-4 XCROSS</a>
            <a class="nav-item nav-link text-menu" href="#">BALENO</a>
            <a class="nav-item nav-link text-menu" href="#">AVP</a>
            <a class="nav-item nav-link text-menu" href="#">NEW CARRY PU</a>
            <a class="nav-item nav-link text-menu" href="#">KARIMUN WAGON</a>
          </div>
          <div class="navbar-nav ">
            <a class="nav-item nav-link text-menu" href="#">SIGN IN</a>
          </div>
        </div>
      </nav>
    </div>

    <!-- Content main ================================================================================================-->
    <main class="site-content">
      <div id="main" class="layout-main">
        <main id="content" class="column main-content" role="main">
        <div class="layout layout--onecol" id="fullpage">
          <a href="#showcase-1" class="btn-top-section action" ><span class="material-icons md-36 md-light">keyboard_arrow_up</span></a>
          <!-- --------------------- -->
          <section class="layout_region" id="showcase-1" >
            <div class="section section-1 bg-image-auto-center" style="overflow: hidden;height: 100%;">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="sld"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active sld" id="slide-1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2" class="sld"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item ">
                    <div class="section carousel-l" >
                      <div class="hero-region-wraper">
                        <div class="row hero-region-content m-0 p-0">
                          <div class="col-sm-12 p-0 text-center">
                            <div class="hero-region-center-top">
                              <header>
                                <h1 class="text-white pb-3 text-style-shadow">        
                                  Discover Suzuki                                           
                                </h1>
                              </header>
                              <section class="button-group">
                                <div class="main-button">
                                  <a class="btn btn-light main-btn m-1" href="#" role="button">TEST DRIVE</a>
                                  <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                        <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                          <div class="col-sm-12 p-0 m-0">
                            <div class="hero-region-center-bottom">
                              <a href="#showcase-2" class="action "><span class="material-icons md-36 md-light arrow-down">keyboard_arrow_down</span></a>                 
                            </div>
                          </div>
                        </div>          
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item active" id="carousel-item-2">
                    <div class="section carousel-2" id="carousel-2">
                      <div class="hero-region-wraper">
                        <div class="row hero-region-content m-0 p-0">
                          <div class="col-sm-12 p-0 text-center">
                            <div class="hero-region-center-top">
                              <header>
                                <h1 class="text-white pb-3 text-style-shadow">        
                                  Discover Suzuki                                           
                                </h1>
                              </header>
                              <section class="button-group">
                                <div class="main-button">
                                  <a class="btn btn-light main-btn m-1" href="#" role="button">CUSTOM ORDER</a>
                                  <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                        <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                          <div class="col-sm-12 p-0 m-0">
                            <div class="hero-region-center-bottom">
                              <a href="#showcase-2" class="action"><span class="material-icons md-36 md-light">keyboard_arrow_down</span></a>                 
                            </div>
                          </div>
                        </div>          
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="section  carousel-3">
                      <div class="hero-region-wraper">
                        <div class="row hero-region-content m-0 p-0">
                          <div class="col-sm-12 p-0 text-center">
                            <div class="hero-region-center-top">
                              <header>
                                <h1 class="text-white pb-3 text-style-shadow">        
                                  Discover Suzuki                                           
                                </h1>
                              </header>
                              <section class="button-group">
                                <div class="main-button">
                                  <a class="btn btn-light main-btn m-1" href="#" role="button">CUSTOM ORDER</a>
                                  <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                                </div>
                              </section>
                            </div>
                          </div>
                        </div>
                        <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                          <div class="col-sm-12 p-0 m-0">
                            <div class="hero-region-center-bottom">
                              <a href="#showcase-2" class="action"><span class="material-icons md-36 md-light">keyboard_arrow_down</span></a>                 
                            </div>
                          </div>
                        </div>          
                      </div>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </section>
          <!-- -------------------------- -->
          <section class="layout_region" id="showcase-2" >
            <div class="section section-2 bg-image-auto-center">            
              <div class="hero-region-wraper">
                <div class="row hero-region-content m-0 p-0">
                  <div class="col-sm-12 p-0 text-center">
                    <div class="hero-region-center-top">
                      <header>
                        <h1 class="text-white pb-3 text-style-shadow">        
                          Discover Suzuki                                           
                        </h1>
                      </header>
                      <section class="button-group">
                        <div class="main-button">
                          <a class="btn btn-light main-btn m-1" href="#" role="button">CUSTOM ORDER</a>
                          <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                  <div class="col-sm-12 p-0 m-0">
                    <div class="hero-region-center-bottom">
                      <a href="#showcase-3" class="action "><span class="material-icons md-36 md-light">keyboard_arrow_down</span></a>                 
                    </div>
                  </div>
                </div>          
              </div>
            </div>    
              
            
          </section>
          <!-- --------------------- -->
          <section class="layout_region" id="showcase-3" >
            <div class="section section-3 bg-image-auto-center">
              <div class="hero-region-wraper">
                <div class="row hero-region-content m-0 p-0">
                  <div class="col-sm-12 p-0 text-center">
                    <div class="hero-region-center-top">
                      <header>
                        <h1 class="text-white pb-3 text-style-shadow">        
                          Discover Suzuki                                           
                        </h1>
                      </header>
                      <section class="button-group">
                        <div class="main-button">
                          <a class="btn btn-light main-btn m-1" href="#" role="button">CUSTOM ORDER</a>
                          <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                  <div class="col-sm-12 p-0 m-0">
                    <div class="hero-region-center-bottom">
                      <a href="#showcase-4" class="action"><span class="material-icons md-36 md-light">keyboard_arrow_down</span></a>                 
                    </div>
                  </div>
                </div>          
              </div>
            </div>
          </section>
          <!-- -------------------------- -->
          <section class="layout_region" id="showcase-4" >
            <div class="section section-4 bg-image-auto-center">
              <div class="hero-region-wraper">
                <div class="row hero-region-content m-0 p-0">
                  <div class="col-sm-12 p-0 text-center">
                    <div class="hero-region-center-top">
                      <header>
                        <h1 class="text-white pb-3 text-style-shadow">        
                          Discover Suzuki                                           
                        </h1>
                      </header>
                      <section class="button-group">
                        <div class="main-button">
                          <a class="btn btn-light main-btn m-1" href="#" role="button">CUSTOM ORDER</a>
                          <a class="btn btn-outline-light main-btn m-1" href="#" role="button">EXISTING INVENTORY</a>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="row hero-region-arrow p-0 m-0 mt-3 text-center">
                  <div class="col-sm-12 p-0 m-0">
                    <div class="hero-region-center-bottom">            
                    </div>
                  </div>
                </div>          
              </div>

            </div>
          </section>
          <!-- --------------------- -->
        </main>
      </div>
    </main>

    <!-- Footer ======================================================================================================-->
    <div class="footer">

    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Main script -->
    <script src="<?= base_url()?>assets/utama/js/main.js"></script>

</body>

</html>
