<?php
include('constant/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!--bootstrap-->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalhome">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalabout">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModaleduc">Education</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalskill">Skills</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalproj">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalexp">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModaladd">Address</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModalcont">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

<!---home--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Home</h1>
    <table class="table text-center">
        <thead>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowhome="SELECT * FROM tbl_home";
            $resshowhome=mysqli_query($conn, $sqlshowhome);
            $countshowhome=mysqli_num_rows($resshowhome);
              if($countshowhome>0){
                while($rowshowhome=mysqli_fetch_assoc($resshowhome)){
                  $showhid=$rowshowhome['id'];
                  $showhname=$rowshowhome['name'];
                  $showhdesc=$rowshowhome['description'];
                  ?>
                   <tbody>
                        <td><?php echo $showhname; ?></td>
                        <td><?php echo $showhdesc; ?></td>
                        <td><a href="<?php echo SITEURL;?>edit-home.php?id=<?php echo $showhid; ?>" class="btn btn-info">EDIT</a></td>
                    </tbody>
                  <?php
                }

              } 
                     
        ?>
                    
        
    </table>
</div>

<!---about--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>About</h1>
    <table class="table text-center">
        <thead>
            <th>About</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowabout="SELECT * FROM tbl_about";
            $resshowabout=mysqli_query($conn, $sqlshowabout);
            $countshowabout=mysqli_num_rows($resshowabout);
              if($countshowabout>0){
                while($rowshowabout=mysqli_fetch_assoc($resshowabout)){
                  $showaboutid=$rowshowabout['id'];
                  $showabouta=$rowshowabout['about'];
                  ?>
                   <tbody>
                      <td><?php echo $showabouta;?></td>
                      <td><a href="<?php echo SITEURL;?>edit-about.php?id=<?php echo $showaboutid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---education--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Education</h1>
    <table class="table text-center">
        <thead>
            <th>Level</th>
            <th>Year</th>
            <th>School</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshoweduc="SELECT * FROM tbl_educ";
            $resshoweduc=mysqli_query($conn, $sqlshoweduc);
            $countshoweduc=mysqli_num_rows($resshoweduc);
              if($countshoweduc>0){
                while($rowshoweduc1=mysqli_fetch_assoc($resshoweduc)){
                  $showeduclid=$rowshoweduc1['id'];
                  $showeducl=$rowshoweduc1['level'];
                  $showeducy=$rowshoweduc1['year'];
                  $showeducs=$rowshoweduc1['school'];
                  ?>
                   <tbody>
                      <td><?php echo $showeducl; ?></td>
                      <td><?php echo $showeducy; ?></td>
                      <td><?php echo $showeducs; ?></td>
                      <td><a href="<?php echo SITEURL;?>edit-edu.php?id=<?php echo  $showeduclid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---skills--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Skill</h1>
    <table class="table text-center">
        <thead>
            <th>Skill</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowskill="SELECT * FROM tbl_skill";
            $resshowskill=mysqli_query($conn, $sqlshowskill);
            $countshowskill=mysqli_num_rows($resshowskill);
              if($countshowskill>0){
                while($rowshowskill=mysqli_fetch_assoc($resshowskill)){
                  $showskillid=$rowshowskill['id'];
                  $showskill=$rowshowskill['skill'];
                  ?>
                   <tbody>
                      <td><?php echo $showskill?></td>
                      <td><a href="<?php echo SITEURL;?>edit-skill.php?id=<?php echo $showskillid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---project--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Project</h1>
    <table class="table text-center">
        <thead>
            
            <th>Description</th>
            <th>Year</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowproject="SELECT * FROM tbl_project";
            $resshowproject=mysqli_query($conn, $sqlshowproject);
            $countshowproject=mysqli_num_rows($resshowproject);
              if($countshowproject>0){
                while($rowshowproject=mysqli_fetch_assoc($resshowproject)){
                  $showprojectid=$rowshowproject['id'];
                  $showprojectd=$rowshowproject['description'];
                  $showprojecty=$rowshowproject['year'];
                  ?>
                   <tbody>
                      <td><?php echo $showprojectd?></td>
                      <td><?php echo $showprojecty?></td>
                      <td><a href="<?php echo SITEURL;?>edit-project.php?id=<?php echo  $showprojectid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---experience--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Experience</h1>
    <table class="table text-center">
        <thead>
            <th>Agency</th>
            <th>Job</th>
            <th>Year</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowwork="SELECT * FROM tbl_work";
            $resshowwork=mysqli_query($conn, $sqlshowwork);
            $countshowwork=mysqli_num_rows($resshowwork);
              if($countshowwork>0){
                while($rowshowwork=mysqli_fetch_assoc($resshowwork)){
                  $showworkid=$rowshowwork['id'];
                  $showworka=$rowshowwork['agency'];
                  $showworkj=$rowshowwork['job'];
                  $showworky=$rowshowwork['year'];
                  ?>
                   <tbody>
                      <td><?php echo $showworka;?></td>
                      <td><?php echo $showworkj;?></td>
                      <td><?php echo $showworky;?></td>
                      
                      <td><a href="<?php echo SITEURL;?>edit-work.php?id=<?php echo $showworkid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---address--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Address</h1>
    <table class="table text-center">
        <thead>
            <th>Island_group</th>
            <th>Province</th>
            <th>City</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowaddress="SELECT * FROM tbl_address";
            $resshowaddress=mysqli_query($conn, $sqlshowaddress);
            $countshowaddress=mysqli_num_rows($resshowaddress);
              if($countshowaddress>0){
                while($rowshowaddress=mysqli_fetch_assoc($resshowaddress)){
                  $showaddressid=$rowshowaddress['id'];
                  $showaddressi=$rowshowaddress['island_group'];
                  $showaddressp=$rowshowaddress['province'];
                  $showaddressc=$rowshowaddress['City'];
                  ?>
                   <tbody>
                      <td><?php echo $showaddressi?></td>
                      <td><?php echo $showaddressp?></td>
                      <td><?php echo $showaddressc?></td>
                      <td><a href="<?php echo SITEURL;?>edit-address.php?id=<?php echo $showaddressid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>

<!---contact--->
<div class="container table-responsive  bg-white rounded shadow my-5">
    <h1>Contact</h1>
    <table class="table text-center">
        <thead>
            <th>Contact</th>
            <th>Email</th>
            <th>Facebook</th>
            <th>City</th>
            <th>Action</th>
        </thead>
        <?php 
            $sqlshowcontact="SELECT * FROM tbl_contact";
            $resshowcontact=mysqli_query($conn, $sqlshowcontact);
            $countshowcontact=mysqli_num_rows($resshowcontact);
              if($countshowcontact>0){
                while($rowshowcontact=mysqli_fetch_assoc($resshowcontact)){
                  $showcontactid=$rowshowcontact['id'];
                  $showcontactc=$rowshowcontact['contact'];
                  $showcontacte=$rowshowcontact['email'];
                  $showcontactf=$rowshowcontact['fb'];
                  $showcontactcc=$rowshowcontact['city'];
                  ?>
                   <tbody>
                      <td><?php echo $showcontactc;?></td>
                      <td><?php echo $showcontacte;?></td>
                      <td><?php echo $showcontactf;?></td>
                      <td><?php echo $showcontactcc;?></td>
                      <td><a href="<?php echo SITEURL;?>edit-contact.php?id=<?php echo $showcontactid; ?>" class="btn btn-info">EDIT</a></td>
                  </tbody>
                  <?php
                }

              } 
                     
        ?>
        
    </table>
</div>


<!-- Home -->
<div class="modal" id="myModalhome">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Home</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">Name:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="hname">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Description:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="hdesc">
            </div>

          <button type="submit" class="btn btn-info" name="btn_addhome">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addhome'])){
              $gethname = $_POST['hname'];
              $gethdesc= $_POST['hdesc'];

              $sqlgethome = "INSERT INTO tbl_home SET
                  name='$gethname',
                  description='$gethdesc'
              ";
              $resgethome=mysqli_query($conn, $sqlgethome);
                if($resgethome == TRUE){
                  ?>
                    <script>
                      alert("info");
                      window.location.href = "<?php echo SITEURL;?>cms.php";
                    </script>
                  <?php
                }else{
                  ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
                }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>


  <!-- About -->
<div class="modal" id="myModalabout">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">About</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">About:</label>
            <textarea name="about" class="form-control" id="" cols="15" rows="5"></textarea>
          </div>
          

          <button type="submit" class="btn btn-info" name="btn_addabout">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addabout'])){
            $getabout = $_POST['about'];

            $sqlgetabout = "INSERT INTO tbl_about SET
                
                about='$getabout'
            ";
            $resgetabout=mysqli_query($conn, $sqlgetabout);
              if($resgetabout == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- Education -->
<div class="modal" id="myModaleduc">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Education</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">Level:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="level">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Year:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="year">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">School:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="school">
          </div>

          <button type="submit" class="btn btn-info" name="btn_addeduc">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addeduc'])){
            $getel = $_POST['level'];
            $getey = $_POST['year'];
            $getes = $_POST['school'];

            $sqlgeteduc = "INSERT INTO tbl_educ SET
                level='$getel',
                year='$getey',
                school='$getes'
            ";
            $resgeteduc=mysqli_query($conn, $sqlgeteduc);
              if($resgeteduc == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- Skill -->
<div class="modal" id="myModalskill">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Skill</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">Skill:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="skill">
          </div>
         

          <button type="submit" class="btn btn-info" name="btn_addskill">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addskill'])){
            $getskill = $_POST['skill'];

            $sqlgetskill = "INSERT INTO tbl_skill SET
                skill='$getskill'
                
            ";
            $resgetskill=mysqli_query($conn, $sqlgetskill);
              if($resgetskill == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- Project -->
<div class="modal" id="myModalproj">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Project</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
        <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">Description:</label>
            <textarea class="form-control" id="" cols="15" rows="5" name="proj_desc"></textarea>
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Year:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="proj_year">
          </div>
          

          <button type="submit" class="btn btn-info" name="btn_addproj">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addproj'])){
            $getpd = $_POST['proj_desc'];
            $getpy = $_POST['proj_year'];

            $sqlgetproject = "INSERT INTO tbl_project SET
                description='$getpd',
                year='$getpy'
            ";
            $resgetproject=mysqli_query($conn, $sqlgetproject);
              if($resgetproject == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- Experience -->
<div class="modal" id="myModalexp">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Work Experience</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
          <form action="" method="post">

          <div class="mb-3 mt-3">
            <label for="" class="form-label">Agency:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="agency">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Job:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="job">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Year:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="year">
          </div>

          <button type="submit" class="btn btn-info" name="btn_addwork">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addwork'])){
            $getwa = $_POST['agency'];
            $getwj = $_POST['job'];
            $getwy = $_POST['year'];

            $sqlgetwork = "INSERT INTO tbl_work SET
                agency='$getwa',
                job='$getwj',
                year='$getwy'
            ";
            $resgetwork=mysqli_query($conn, $sqlgetwork);
              if($resgetwork == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- Address -->
<div class="modal" id="myModaladd">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Address</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
         <div class="container">
         <form action="" method="post"> 
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Island_group:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="ig">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">Province:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="province">
          </div>
          <div class="mb-3 mt-3">
            <label for="" class="form-label">City:</label>
            <input type="text" class="form-control"  placeholder="Enter " name="city">
          </div>

          <button type="submit" class="btn btn-info" name="btn_addaddress">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addaddress'])){
            $getai = $_POST['ig'];
            $getap = $_POST['province'];
            $getac = $_POST['city'];

            $sqlgetaddress = "INSERT INTO tbl_address SET
                island_group='$getai',
                province='$getap',
                City='$getac'
            ";
            $resgetaddress=mysqli_query($conn, $sqlgetaddress);
              if($resgetaddress == TRUE){
                ?>
                  <script>
                    alert("info");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("info");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
         </div>
            
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

  <!-- The contact -->
<div class="modal" id="myModalcont">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Contact</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container">
            <form action="" method="post">

            <div class="mb-3 mt-3">
              <label for="contact" class="form-label">Contact:</label>
              <input type="text" class="form-control" id="contact" placeholder="Enter contact" name="contact">
            </div>
            <div class="mb-3 mt-3">
              <label for="" class="form-label">email:</label>
              <input type="email" class="form-control"  placeholder="Enter " name="email">
            </div>
            <div class="mb-3 mt-3">
              <label for="" class="form-label">Facebook:</label>
              <input type="text" class="form-control"  placeholder="Enter " name="fb">
            </div>
            <div class="mb-3 mt-3">
              <label for="" class="form-label">City:</label>
              <input type="text" class="form-control"  placeholder="Enter city" name="city">
            </div>
            <button type="submit" class="btn btn-info" name="btn_addcontact">Add</button>
            </form>
            <?php
              if(isset($_POST['btn_addcontact'])){
                $getcc = $_POST['contact'];
                $getce = $_POST['email'];
                $getcf = $_POST['fb'];
                $getccity = $_POST['city'];

                $sqlgetcontact = "INSERT INTO tbl_contact SET
                    contact='$getcc',
                    email='$getce',
                    fb='$getcf',
                    city='$getccity'
                ";
                $resgetcontact=mysqli_query($conn, $sqlgetcontact);
                  if($resgetcontact == TRUE){
                    ?>
                      <script>
                        alert("info");
                        window.location.href = "<?php echo SITEURL;?>cms.php";
                      </script>
                    <?php
                  }else{
                    ?>
                    <script>
                      alert("info");
                      window.location.href = "<?php echo SITEURL;?>cms.php";
                    </script>
                  <?php
                  }
              }
            ?>
          </div>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

    
</body>
</html>