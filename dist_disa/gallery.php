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
    $title = mysqli_real_escape_string($db->link, $_POST['title']);
    $category = mysqli_real_escape_string($db->link, $_POST['category']);


    $permited  = array('jpg', 'JPG', 'JPEG', 'jpeg', 'png', 'PNG');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

        if ($title == "") {
          $n = "<span class='error'>Please fill the title </span>";
        }elseif($category == ""){
          $n = "<span class='error'>Please fill Category </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='error'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='error'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
                move_uploaded_file($file_temp, $uploaded_image);

          $query = "INSERT INTO tbl_photo_gallery(name, category, image) VALUES('$title', '$category', '$uploaded_image')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='message'>Image uploaded successfully. </span>";
                }else {
                 $n = "<span class='error'>Something wrong ! Try again. </span>";
                }
        }
  }
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i>Gallery</h1>
            <p>Add Gallery Image</p>
          </div>
          <?php echo $n; ?>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Gallery</li>
              <li><a href="#">Gallery Image</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                      <fieldset>
                        <legend>Gallery</legend>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Image Title</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="title" type="text" placeholder="Image Title ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Category</label>
                       <div class="col-lg-10">
                            <select class="form-control" name="category">
                              <option value="">Select Category</option>
                              <option value="Library">Library</option>
                              <option value="Classrooms">Classrooms</option>
                            </select>
                        </div>
                        </div>
                       
                       <!--  <div class="form-group">
                         <label class="col-lg-2 control-label" for="textArea">Thumbnail</label>
                          <div class="col-lg-10">
                              <input type="file" class="form-control">
                          </div>
                        </div> -->
                       
                       <div class="form-group">
                         <label class="col-lg-2 control-label" for="textArea">Image</label>
                          <div class="col-lg-10">
                              <input name="image" type="file" class="form-control">
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <input class="btn btn-primary" type="submit" value="Submit">
                            <button class="btn btn-default" type="reset">Cancel</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php include 'inc/footer.php'; ?>