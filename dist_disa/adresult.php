<?php include 'inc/header.php'; ?>
<style>
  .message{
        color: #055219;
        font-size: 14px;
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
    $reg_no = mysqli_real_escape_string($db->link, $_POST['reg_no']);
    $index_no = mysqli_real_escape_string($db->link, $_POST['index_no']);
    $std_name = mysqli_real_escape_string($db->link, $_POST['std_name']);
    $father_name = mysqli_real_escape_string($db->link, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($db->link, $_POST['mother_name']);
    $trade = mysqli_real_escape_string($db->link, $_POST['trade']);
    $course = mysqli_real_escape_string($db->link, $_POST['course']);
    $passing_year = mysqli_real_escape_string($db->link, $_POST['passing_year']);
    $passport_no = mysqli_real_escape_string($db->link, $_POST['passport_no']);
    $enroll_date = mysqli_real_escape_string($db->link, $_POST['enroll_date']);
    $from_date = mysqli_real_escape_string($db->link, $_POST['from_date']);
    $to_date = mysqli_real_escape_string($db->link, $_POST['to_date']);
    $complete_hour = mysqli_real_escape_string($db->link, $_POST['complete_hour']);
    $issue_date = mysqli_real_escape_string($db->link, $_POST['issue_date']);
    $mark_obtained = mysqli_real_escape_string($db->link, $_POST['mark_obtained']);
    $letter_grade = mysqli_real_escape_string($db->link, $_POST['letter_grade']);
    $recommendation = mysqli_real_escape_string($db->link, $_POST['recommendation']);

        if ($reg_no == "") {
          $n = "<span class='error'>Please give registration number </span>";
        }elseif($std_name == ""){
          $n = "<span class='error'>Please give student name </span>";
        }elseif($father_name == ""){
          $n = "<span class='error'>Please give student's father name </span>";
        }elseif($mother_name == ""){
          $n = "<span class='error'>Please give student's mother name </span>";
        }elseif($enroll_date == ""){
          $n = "<span class='error'>Please give enrolled date </span>";
        }elseif($from_date == ""){
          $n = "<span class='error'>Please give 'from' date </span>";
        }elseif($to_date == ""){
          $n = "<span class='error'>Please give 'to' date </span>";
        }elseif($complete_hour == ""){
          $n = "<span class='error'>Please give complete hours </span>";
        }elseif($issue_date == ""){
          $n = "<span class='error'>Please give issue date </span>";
        }elseif($mark_obtained == ""){
          $n = "<span class='error'>Please give Mark obtained </span>";
        }elseif($letter_grade == ""){
          $n = "<span class='error'>Please select letter grade </span>";
        }elseif($trade == ""){
          $n = "<span class='error'>Please select trade name </span>";
        }elseif($course == ""){
          $n = "<span class='error'>Please select course name </span>";
        }elseif($passing_year == ""){
          $n = "<span class='error'>Please select passing year</span>";
        }else{
               
          $query = "INSERT INTO tbl_result(registration_no, index_no, std_name, father_name, mother_name, trade, course_duration, passing_year, enrolled_date, from_date, to_date, complete_hour, issue_date, mark_obtained, letter_grade, passport_no, recommendation) VALUES('$reg_no', '$index_no', '$std_name', '$father_name', '$mother_name', '$trade', '$course', '$passing_year', '$enroll_date', '$from_date', '$to_date', '$complete_hour', '$issue_date', '$mark_obtained', '$letter_grade', '$passport_no', '$recommendation')";
                $insert_slider = $db->insert($query);
                if ($insert_slider) {
                 $n = "<span class='message'>Result Information uploaded successfully. </span>";
                }else {
                 $n = "<span class='error'>Something wrong ! Try again. </span>";
                }
        }
  }
?>
<div class="content-wrapper">
        <div class="page-title">
          <div class="div">
            <h1><i class="fa fa-laptop"></i> Result</h1>
            <p>Add new result</p>
          </div>
 		<?php echo $n; ?>
          <div class="div">
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Result / Add Result</a></li>
            </ul>
     </div>
  </div>

<div class="col-lg-12">
              <div class="card">
               
                <div class="card-body">
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Registration/Certificate number</label>
                    <input type="text" name="reg_no" class="form-control" placeholder="Registration number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Index number</label>
                    <input type="text" name="index_no" class="form-control" placeholder="Index number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Student Name</label>
                    <input type="text" name="std_name" class="form-control" placeholder="Student Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Father's Name</label>
                    <input type="text" name="father_name" class="form-control" placeholder="Father's Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mother's Name</label>
                    <input type="text" name="mother_name" class="form-control" placeholder="Father's Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Trade</label>
                            <select class="form-control" name="trade">
                              <option value="">Tarde</option>
                              <option value="Computer">Computer</option>
                              <option value="Electrical">Electrical</option>
                              <option value="RAC">Refrigeration and Air -Conditioning</option>
                              <option value="MCRS">Motor Cycle Repair & Servicing</option>
                            </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Select Course</label>
                            <select class="form-control" name="course">
                              <option value="">Course</option>
                              <option value="One Year Long Course">One Year Long Course</option>
                              <option value="Short Course">Short Course</option>
                              <option value="Trade Test">Trade Test</option>
                            </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Passing Year</label>
                     
                            <select class="form-control" name="passing_year">
                              <option value="">Passing Year</option>
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                            </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Passport No.</label>
                    <input type="text" name="passport_no" class="form-control" placeholder="Passport No.">
                  </div>
                  
              </div>
              <div class="col-lg-4 offset-lg-1">
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Enrollment Date</label>
                    <input type="text" name="enroll_date" class="form-control" placeholder="Enrollment Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">From Date</label>
                    <input type="text" name="from_date" class="form-control" placeholder="Start Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">To Date</label>
                    <input type="text" name="to_date" class="form-control" placeholder="End Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Complete hours</label>
                    <input type="text" name="complete_hour" class="form-control" placeholder="Complete hours">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Issue Date</label>
                    <input type="text" name="issue_date" class="form-control" placeholder="Issue Date">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Marks Obtained</label>
                    <input type="text" name="mark_obtained" class="form-control" placeholder="Mark obtained">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Letter Grade</label>
                     
                            <select class="form-control" name="letter_grade">
                              <option value="">Letter Grade</option>
                              <option value="A+">A+</option>
                              <option value="A">A</option>
                              <option value="B+">B+</option>
                              <option value="B">B</option>
                              <option value="C">C</option>
                            </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Recommendation</label>
                     
                            <select class="form-control" name="recommendation">
                              <option value="">Select Recommendation</option>
                              <option value="Fit"> Fit </option>
                              <option value="Unfit"> Unfit</option>
                            </select>
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                  </div>
                  
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
</div></div></div></div>
</div>
<?php include 'inc/footer.php'; ?>