<?php
include('constant/config.php');
$sqlgethome="SELECT * FROM tbl_home";
$resgethome=mysqli_query($conn, $sqlgethome);
$rowgethome=mysqli_fetch_assoc($resgethome);
$showhomen=$rowgethome['name'];
$showhomed=$rowgethome['description'];

$sqlgetabout="SELECT * FROM tbl_about";
$resgetabout=mysqli_query($conn, $sqlgetabout);
$rowgetabout=mysqli_fetch_assoc($resgetabout);
$showabout=$rowgetabout['about'];




?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Andrea</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style="background-color: #1E2022;">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Home</a>
                <button class="navbar-toggler text-uppercase font-weight-bold text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"style="background-color:#d7bfdc ;">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead  text-white text-center" style="background-color: #d7bfdc;">
            <div class="container d-flex align-items-center flex-column">
  
                <img class="masthead-avatar rounded-circle mb-5" src="image/BALASA, ANDREA JOY IMAGE.jpg" alt="..." />
                <h1 class="masthead-heading text-uppercase mb-0"><?php echo $showhomen;?></h1>
                <div class="divider-custom divider-light">
                    
                    <div class="divider-custom-icon"><i class="fas fa-music"></i></div>
                    
                </div>
                <p class="masthead-subheading font-weight-light mb-0"><?php echo $showhomed;?></p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-dark mb-0">Portfolio</h2>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon "style="color: #d7bfdc;"><i class="fas fa-music"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/grad.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/skills.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/projects.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/work experience.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/address.png" alt="..." />
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="image/contact.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section text-white mb-0" id="about"style= "background: #d7bfdc;">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-music"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    
                    <div class="col-lg-12 me-auto "><p class="lead" style = "text-align:center;"><?php echo $showabout;?></p></div>
        </section>
       
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white"style="background-color:black ;" >
            <div class="container"style="background-color:black ;" ></div>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Educational Attainment</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music" style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/grad.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <div class="container-fluid">
                                        <div class="row">
                                                    <?php
                                                    $sqlgethomeeduc="SELECT * FROM tbl_educ";
                                                    $resgeteduc=mysqli_query($conn, $sqlgethomeeduc);
                                                    $coungeteduc=mysqli_num_rows($resgeteduc);
                                                        if($coungeteduc>0){
                                                            while($rowgeteduc=mysqli_fetch_assoc($resgeteduc)){
                                                                $showeducl=$rowgeteduc['level'];
                                                                $showeducy=$rowgeteduc['year'];
                                                                $showeducs=$rowgeteduc['school'];
                                                                ?>
                                                                     <div class="col-lg-4">
                                                                        <div class="card shadow-lg">
                                                                        <div class="card-header"><?php echo $showeducl;?></div>
                                                                        <div class="card-body"><?php echo $showeducs;?></div>
                                                                        <div class="card-footer"><?php echo $showeducy;?></div>
                                                                        </div>
                                                                    </div>
                                                                <?php
                                                            }
                                                        }
     
                                                    ?>

                                        </div>
                                    </div>
                                    <button class="btn btn-primary" data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Skills</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music" style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/skills.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"></p>
                                    <table class="table">
                                        <thead class="table-danger">
                                            
                                            <th>Skill</th>
                                           
                                    </thead>
                                    <?php
                                        $sqlgetskill="SELECT * FROM tbl_skill";
                                        $resgetskill=mysqli_query($conn, $sqlgetskill);
                                        $countgetskill=mysqli_num_rows($resgetskill);
                                                    if($countgetskill>0){
                                                        while($rowgetskill=mysqli_fetch_assoc($resgetskill)){
                                                            $showskill=$rowgetskill['skill'];
                                                            
                                                            ?>
                                                             <tbody>
                                                        
                                                                    <td><?php echo $showskill;?></td>
                                                            </tbody>
                                                            <?php
                                                        }
                                                    }
                                    ?>
                                       
                                    </table>
                                            
                                            
                                    <button class="btn btn-primary" data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Projects</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music" style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/projects.png" alt="..." />
                                    <table class="table">
                                        <thead class="table-danger">
                                            <th>Description</th>
                                            <th>Year</th>
                                           
                                    </thead>
                                    <?php
                                        $sqlgetproject="SELECT * FROM tbl_project";
                                        $resgetproject=mysqli_query($conn, $sqlgetproject);
                                        $countgetproject=mysqli_num_rows($resgetproject);
                                                    if($countgetproject>0){
                                                        while($rowgetproject=mysqli_fetch_assoc($resgetproject)){
                                                            $showprojectd=$rowgetproject['description'];
                                                            $showprojecty=$rowgetproject['year'];
                                                            
                                                            ?>
                                                             <tbody>
                                                                    <td><?php echo $showprojectd;?></td>
                                                                    <td><?php echo $showprojecty;?></td>
                                                            </tbody>
                                                            <?php
                                                        }
                                                    }
                                    ?>
                                       
                                    </table>
                                    <button class="btn btn-primary " data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Work Experience</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music"style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/work experience.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4"></p>
                                    <table class="table">
                                        <thead class="table-info">
                                            <th>Agency</th>
                                            <th>Job</th>
                                            <th>Year</th>
                                    </thead>
                                    <?php
                                        $sqlgetwork="SELECT * FROM tbl_work";
                                        $resgetwork=mysqli_query($conn, $sqlgetwork);
                                        $countgetwork=mysqli_num_rows($resgetwork);
                                                    if($countgetwork>0){
                                                        while($rowgetwork=mysqli_fetch_assoc($resgetwork)){
                                                            $showworka=$rowgetwork['agency'];
                                                            $showworkj=$rowgetwork['job'];
                                                            $showworky=$rowgetwork['year'];
                                                            ?>
                                                             <tbody>
                                                                    <td><?php echo $showworka;?></td>
                                                                    <td><?php echo $showworkj;?></td>
                                                                    <td><?php echo $showworky;?></td>
                                                            </tbody>
                                                            <?php
                                                        }
                                                    }
                                    ?>
                                       
                                    </table>
                                    <button class="btn btn-primary" data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Address</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music"style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/address.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <?php 
                                        $sqlgetaddress="SELECT * FROM tbl_address";
                                        $resgetaddress=mysqli_query($conn, $sqlgetaddress);
                                        $rowgetaddress=mysqli_fetch_assoc($resgetaddress);
                                        $showaddressig=$rowgetaddress['island_group'];
                                        $showaddressp=$rowgetaddress['province'];
                                        $showaddresscc=$rowgetaddress['City'];
                                    ?>
                                    <p class="mb-4"><?php echo $showaddressig; ?> <-> <?php echo $showaddressp; ?> <-> <?php echo $showaddresscc; ?> </p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Contact</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-music"style="color: #d7bfdc;"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="image/contact.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <?php 
                                    $sqlgetcontact="SELECT * FROM tbl_contact";
                                    $resgetcontact=mysqli_query($conn, $sqlgetcontact);
                                    $rowgetcontact=mysqli_fetch_assoc($resgetcontact);
                                    $showcontact=$rowgetcontact['contact'];
                                    $showcontactemail=$rowgetcontact['email'];
                                    $showcontactfb=$rowgetcontact['fb'];
                                    $showcontactcc=$rowgetcontact['city'];
                                    ?>
                                    <p class="mb-4"><?php echo $showcontact;?> - <?php echo $showcontactemail;?> - <?php echo $showcontactfb;?> - <?php echo $showcontactcc;?></p>
                                    <button class="btn btn-primary" data-bs-dismiss="modal"style="background-color:#d7bfdc ;">
                                        <i class="fas fa-xmark fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
       
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
