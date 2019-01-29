<?php include 'dist-inc/header-dist-disa.php';  ?>


<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Result</h3>
  		<p class="description">
            <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie. -->
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
		<div class="col-md-3"></div>
        <div class="col-md-6">
            <form action="" method="post" id="fileForm" role="form">
            <fieldset><legend class="text-center" style="border: 1px solid #bbb9b9;background: #ecf6ff;font-weight: bold; color: #4a5204;">Search here for one year Long Course result<span class="req"></span></legend>

            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span>Roll/Registration Number: </label>
                    <input required type="text" name="phonenumber" id="phone" class="form-control phone" maxlength="28" onkeyup="validatephone(this);" placeholder="Roll/Registration Number "/> 
            </div>

            <div class="form-group"> 	 
                <label for="firstname"><span class="req"></span> Name : </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" placeholder="Name" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>

           

            <div class="form-group">
                <label for="username"><span class="req">* </span> Trade </label> 
                   <select name="" id="" class="form-control">
		    		<option value="">Select Trade</option>
		    		<option value="">Computer</option>
		    		<option value="">Electrical</option>
		    		<option value="">Refrigeration and Air Conditioning</option>
		    		<option value="">Motorcycle Respairing</option>
		    	</select>
            </div>

            <div class="form-group">
            	<label for=""> * Passing Year</label>
			    <input style="height: 40px;border: 1px solid #b5b5b5;" autocomplete="off" type="text" class="form-control" placeholder="Passing year" name="log_password">
		    </div>

            <div class="form-group">
            
                
               
              
                <hr>

                
            </div>

            <div class="form-group">
                <input class="btn btn-success btn-block" type="submit" name="submit_reg" value="Search Your Result">
            </div>
                      
 

            </fieldset>
            </form><!-- ends register form -->


        </div><!-- ends col-6 -->
   
            <div class="col-md-2"></div>

	</div>
</div>
<div style="height: 100px;"></div>
<?php include 'dist-inc/footer-dist.php'; ?>