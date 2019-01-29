<?php include 'dist-inc/header-dist-disa.php';  ?>
<style>
    .fnt{
                    font-family: 'Marck Script', cursive;
            font-size: 21px;
            text-align: center;
            color: #6c4205;
    }
    
    .cntr{
                    font-family: 'Marck Script', cursive;
            font-size: 21px;
            text-align: center;
            color: #6c4205;
    }
</style>

<!-- banner -->
  <div class="courses_banner">
    <div class="container">
        <h3>Result</h3>
        <p class="description">
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.php">Home</a></li>
                <li class="current-page">Result</li>
            </ul>
        </div>
    </div>
  </div>
    <!-- //banner -->
 <div style="height: 50px;"></div>
<div class="container" style="border: 1px solid #ececec;padding: 100px; background: #fbfbfb;">
    <div class="row">
<?php 
        $n = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $reg_no = mysqli_real_escape_string($db->link, $_POST['reg_no']);
        $std_name = mysqli_real_escape_string($db->link, $_POST['std_name']);
        $course = mysqli_real_escape_string($db->link, $_POST['course']);
        $passing_year = mysqli_real_escape_string($db->link, $_POST['passing_year']);

        if ($reg_no == "") {
            $n = "Registration number blank !";
        }elseif($std_name == ""){
            $n = "Fill your name ";
        }elseif($course == ""){
            $n = "Select your course duration ";
        } elseif($passing_year == ""){
            $n = "Select your passing year ";
        }else{
            $query = "SELECT * FROM tbl_result WHERE registration_no LIKE '%$reg_no%' AND std_name LIKE '%$std_name%' AND course_duration LIKE '%$course%' AND passing_year LIKE '%$passing_year%' AND registration_no='$reg_no' ";
            
            $serachResult = $db ->select($query);
            if ($serachResult) {
                while ($result = $serachResult->fetch_assoc()) {

                   $n = "SELECT * FROM tbl_result WHERE registration_no='$reg_no' AND  std_name='$std_name' AND course_duration='$course' ";
                   $outpurResult = $db->select($n);
                   if ($outpurResult) {
                       while ($getResult = $outpurResult->fetch_assoc()) { ?>

        <div style="border: 1px solid #b87a1d;padding: 17px;margin-bottom: 56px;">
    
                        
                                <div class="row">
                                    
                                    <div class="col-md-8">
                                        <div class="col-md-12">
                                            <div class="row">
                                                    <table class="table table-hover table-bordered">
                                                        

  <tbody>
    <button class="btn btn-warning btn-block hdr">DIST Online Result (Trade Test)</button>
    <tr>
        <td class="fnt">Index number : </td>
      <td class="cntr"><?php echo $getResult['index_no']; ?></td>

    </tr>
    <tr>
        <td class="fnt">Certificate number : </td>
      <td class="cntr"><?php echo $getResult['registration_no']; ?></td>

    </tr>
    <tr>
        <td class="fnt">Passport number : </td>
      <td class="cntr"><?php echo $getResult['passport_no']; ?></td>

    </tr>
    <tr>
      <td class="fnt">Name :</td>
      <td class="cntr"><?php echo $getResult['std_name']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Father's Name : </td>
      <td class="cntr"><?php echo $getResult['father_name']; ?></td>
    </tr>
    <tr>
      <td class="fnt"> Mother's Name : </td>
      <td class="cntr"><?php echo $getResult['mother_name']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Trade Name : </td>
      <td class="cntr"><?php echo $getResult['trade']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Course Duration : </td>
      <td class="cntr"> <?php echo $getResult['course_duration']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Enrolled date : </td>
      <td class="cntr"><?php echo $getResult['enrolled_date']; ?></td>
    </tr>
    <tr>
      <td class="fnt">From Date : </td>
      <td class="cntr"><?php echo $getResult['from_date']; ?></td>
    </tr>
    <tr>
      <td class="fnt">To Date : </td>
      <td class="cntr"><?php echo $getResult['to_date']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Issue Date : </td>
      <td class="cntr"><?php echo $getResult['issue_date']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Complete Hour : </td>
      <td class="cntr"><?php echo $getResult['complete_hour']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Mark Optained : </td>
      <td class="cntr"><?php echo $getResult['mark_obtained']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Grade : </td>
      <td class="cntr"><?php echo $getResult['letter_grade']; ?></td>
    </tr>
    <tr>
      <td class="fnt">Recommendation : </td>
      <td class="cntr"><?php echo $getResult['recommendation']; ?></td>
    </tr>

    
  </tbody>
</table>

                                           
                                                </div>
                                                
                                            </div>
                                        </div>
<div class="btn pull-right"><h2></h2></div>
<div class="col-md-4">
    <table class="table table-hover table-bordered">
        <thead>
        <th class="fnt">Grade</th>
        <th class="fnt">Marks</th>
    </thead>
    <tbody>
        <tr>
            <td class="fnt">A+</td>
            <td class="fnt">90%-100%</td>
        </tr>
        <tr>
            <td class="fnt">A</td>
            <td class="fnt">80%-89%</td>
        </tr>
        <tr>
            <td class="fnt">B+</td>
            <td class="fnt">70%-79%</td>
        </tr>
        <tr>
            <td class="fnt">B</td>
            <td class="fnt">60%-69%</td>
        </tr>
        <tr>
            <td class="fnt"> C</td>
            <td class="fnt">Below 60% (Unfit)</td>
        </tr>
    </tbody>

</table>
</div>
                                    </div>
                                   </div> 
                            
                      <?php }
                   }


              }
            }
        }
    } 

?>

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="post" id="fileForm" role="form">
            <fieldset><legend class="text-center" style="border: 1px solid #bbb9b9;background: #ecf6ff;font-weight: bold; color: #4a5204;">Search here for Tarde Test result<span class="req"></span></legend>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span>Certificate Number : </label>
                    <input required type="text" name="reg_no" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Roll/Registration Number "/> 
            </div>

            <div class="form-group">     
                <label for="firstname"><span class="req"></span> Name : </label>
                    <input class="form-control" type="text" name="std_name" id = "txt" placeholder="Name" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>
            <div class="form-group">
                <label for="username"><span class="req">* </span> Course </label> 
                   <select name="course" id="" class="form-control">
                    <option value="">Select Course</option>
                    <option value="One Year Long Course">One Year Long Course</option>
                    <option value="Short Course">Short Course</option>
                    <option value="Trade Test">Trade Test</option>
                </select>
            </div>
            <div class="form-group">
                <label for=""> * Passing Year</label>
                <input style="height: 40px;border: 1px solid #b5b5b5;" autocomplete="off" type="text" class="form-control" placeholder="Passing year" name="passing_year">
            </div>
            <div class="form-group">
                <hr>
            </div>
            <div class="form-group">
                <a href="getresult.php?student_id=<?php echo $result['$reg_no']; ?>"><input class="btn btn-success btn-block" type="submit" name="submit_reg" value="Search Your Result"></a>
            </div>
            </fieldset>
            </form><!-- ends register form -->
        </div><!-- ends col-6 -->
            <div class="col-md-2"></div>

    </div>
</div>
<div style="height: 100px;"></div>


<?php include 'dist-inc/footer-dist.php'; ?>