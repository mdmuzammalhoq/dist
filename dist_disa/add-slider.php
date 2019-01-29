<?php include 'inc/header.php'; ?>
<style>
  .message{
        color: #055219;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: 400;
        font-style: italic;
  }
  .error{
        color: #f50e0e;
        font-size: 17px;
        letter-spacing: 2px;
  }
</style>
<?php 
    $n = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $slider_content = mysqli_real_escape_string($db->link, $_POST['content']);


    $permited  = array('jpg', 'JPG', 'JPEG', 'jpeg', 'png', 'PNG');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

        if ($slider_content == "") {
          $n = "<span class='error'>Please fill the content </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='error'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='error'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
                move_uploaded_file($file_temp, $uploaded_image);

          $query = "INSERT INTO tbl_slider(content, image) VALUES('$slider_content', '$uploaded_image')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='message'>Slider uploaded successfully. </span>";
                }else {
                 $n = "<span class='error'>Something wrong ! Try again. </span>";
                }
        }
  }
?>
<div class="content-wrapper">
        <div class="page-title">
          <div class="div">
            <h1><i class="fa fa-laptop"></i> Slider</h1>
            <p>Add Sliders</p>
          </div>
          <?php echo $n; ?>
          <div class="div">
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Slider / Add Slider</a></li>
            </ul>
     </div>
  </div>

<div class="col-lg-12">
              <div class="card">
               
                <div class="card-body">

                  <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                  	<div class="form-group row">
                      <label class="col-sm-4 form-control-label"></label>
                      <div class="col-sm-8">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Content</label>
                      <div class="col-sm-10">
                        <input type="text" name="content" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slider Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="image" class="form-control">
                      </div>
                    </div>

                    <div class="line"></div>

                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label"></label>
                      <div class="col-sm-10">
                        <input style="cursor: pointer;" type="submit" name="submit" value="Add New Slider" class="btn btn-primary btn-block">
                      </div>
                    </div>                    
                  </form>

                </div>
              </div>
            </div>
</div>


<?php include 'inc/footer.php'; ?>