<?php
include('constant/config.php');
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
     <!--bootstrap-->
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-success">
    <div class="container">
        <div class="container py-3 mt-5 bg-white rounded">
            <h1>edit</h1> <a href="cms.php"class="btn btn-dark">BACK</a>
            <div class="container my-3  bg-success rounded">
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
          

          <button type="submit" class="btn btn-success" name="btn_addproj">Add</button>

          </form>
          <?php
          if(isset($_POST['btn_addproj'])){
            $getpd = $_POST['proj_desc'];
            $getpy = $_POST['proj_year'];

            $sqlgetproject = "UPDATE tbl_project SET
                description='$getpd',
                year='$getpy'
                WHERE id='$id'
            ";
            $resgetproject=mysqli_query($conn, $sqlgetproject);
              if($resgetproject == TRUE){
                ?>
                  <script>
                    alert("Success");
                    window.location.href = "<?php echo SITEURL;?>cms.php";
                  </script>
                <?php
              }else{
                ?>
                <script>
                  alert("Success");
                  window.location.href = "<?php echo SITEURL;?>cms.php";
                </script>
              <?php
              }
          }
          ?>
          </div>

            </div>
        </div>

    </div>
    
</body>
</html>