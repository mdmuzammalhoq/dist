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
    $image = mysqli_real_escape_string($db->link, $_POST['image']);
    $body = mysqli_real_escape_string($db->link, $_POST['body']);


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
        }elseif($body == ""){
          $n = "<span class='error'>Please write notice message </span>";
        }elseif ($file_size >1048567) {
             $n = "<span class='error'>Image Size should be less then 1MB! </span>";
        } elseif (in_array($file_ext, $permited) === false) {
             $n = "<span class='error'>You can upload only:-".implode(', ', $permited)." </span> ";
        }else{
                move_uploaded_file($file_temp, $uploaded_image);

          $query = "INSERT INTO tbl_notice_events(title, body, category, image) VALUES('$title', '$body', '$category', '$uploaded_image')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='message'>Information uploaded successfully. </span>";
                }else {
                 $n = "<span class='error'>Something wrong ! Try again. </span>";
                }
        }
  }
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Notice </h1>
            <p>Notice or news post from here</p>
          </div>
          <?php echo $n;  ?>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Notice/News</li>
              <li><a href="#">Notice or news </a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="well bs-component">
                    <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                      <fieldset>
                        <legend>Notice/News</legend>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Title</label>
                          <div class="col-lg-10">
                            <input class="form-control" name="title" type="text" placeholder="Title ">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="inputEmail">Category</label>
                       <div class="col-lg-10">
                            <select class="form-control" name="category">
                              <option value="">Select Category</option>
                              <option value="Notice">Notice</option>
                              <option value="News">News</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label" for="textArea">Description</label>
                          <div class="col-lg-10">
                            <textarea name="body" class="form-control" id="textArea" rows="3"></textarea><span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                        <div class="form-group">
                         <label class="col-lg-2 control-label" for="textArea">Image/File</label>
                          <div class="col-lg-10">
                              <input type="file" name="image" class="form-control">
                          </div>
                        </div>
                       
                        
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-primary" type="submit">Submit</button>
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