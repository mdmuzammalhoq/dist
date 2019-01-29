<?php include 'dist-inc/header-dist-disa.php';  ?>
<?php 
    $n = "";
if(isset($_POST['submit'])){
    $to = "dist@disabd.org"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $name . " / " . $phone . " " . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$name ,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $n = "Message Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
<div class="features">
	   <div class="container">
	   	  <h1>How to find us</h1>
	   	  <div class="map">
			 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3649.8586774819782!2d90.35772375443595!3d23.82362392318229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c13ce6aaab71%3A0x8f42850a5581e4d8!2z4Kah4Ka_4KaG4KaH4KaP4Ka44KaPIOCmrOCmvuCmguCmsuCmvuCmpuCnh-Cmtg!5e0!3m2!1sbn!2sbd!4v1523262177841" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		  </div>
		  <p></p>
		  <div class="wrapper">
				<div class="col_1">
					<i class="fa fa-home  icon2"></i>
					<div class="box">
						<p class="marTop9">Sofura Tower, Plot#45<br>Road#07, Block # A <br> Pallabi, Mirpur-12, Dhaka</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-phone  icon2"></i>
					<div class="box">
						<p class="marTop9"><b style="color: #000;line-height: 38px;">01708 449950 </b> (Information)<br><b style="color: #000;line-height: 38px;">01708449867 </b>(Principal) <br><b style="color: #000;line-height: 38px;">01709389095 </b>(Adviser)</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-envelope icon2"></i>
					<div class="box">
						<p class="m_6"><a href="mailto@disabd.org" class="link4">dist@disabd.org</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
		 </div>
		<div style="color: #085d2a; text-align: center;"> <?php echo $n; ?> </div>
		<form class="contact_form" method="POST">
		 	<h2>Contact us</h2>
			<div class="col-md-6 grid_6">
				<input type="text" class="text" value="Name" name="name" placeholder="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" class="text" value="Email" name="email" placeholder="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" class="text" value="Phone" name="phone" placeholder="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
			</div>
	
			<div class="col-md-6 grid_6">
				<textarea value="Message" placeholder="message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
			</div>
            <div class="clearfix"> </div>
            <div class="btn_3">
			  <input class="more_btn" type="submit" name="submit" value="Send Message">
		    </div>
		 </form>
							
						
	  </div>
	</div>
<?php include 'dist-inc/footer-dist.php'; ?>