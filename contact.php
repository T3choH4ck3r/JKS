<?php 
$page="contact";
include("header.php");
?>
<?php
if(isset($_POST[email]))
{
         $to = "info@jksengineers.in,karthik@jksengineers.in,navikarthik@gmail.com,admin@jksengineers.in";
         $subject = "Enquiry from JKS Website";
         
         $message = "<div style='border:2px solid #000'><div style='font-weight:bold;font-size:16px;'>Enquiry from JKS Website</div>";
         $message .= "<b>Name: </b>".$_POST[cname]."<br><b>Address: </b>".$_POST[address]."<br><b>City: </b>".$_POST[city]."<br><b>E-mail: </b>".$_POST[email]."<br><b>Phone: </b>".$_POST[phone]."<br><b>Description: </b>".$_POST[desc]."</div>";
         
         $header = "From:".$_POST[email]."\r\n";
         $header .= "Cc:".$_POST[email]."\r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "<script>alert(Message sent successfully...)</script>";
			header("Location:index.php");
         }else {
            echo "<script>alert(Message could not be sent...)</script>";
         }
}     
      
?>
<section id="content">
<div class ="container contact">
<div class="col-xs-6">
<div class="contact-title">
Contact us
</div>
<div class="contact-name">S.Karthikeyan</div>
<div class="contact-address">NO:11, Suba Shri Nagar,<br/>
Veppampattu, Thiruvallur
</div>
<div class="contact-phone">Telephone: +91 87548 41161 </div>
<div class="contact-email">E-mail: karthik@jksengineers.in</div>

</div>
<div class="col-xs-6">
<div class="contact-title">
Enquiry
</div>
<form role="form" action="#" name="cform" method="post">
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="cname">
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" id="address" name="address"></textarea>
  </div>
  
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  
  <div class="form-group">
    <label for="phone">Phone</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea class="form-control" id="desc" name="desc"></textarea>
  </div>
  
  <div class="form-submit" align="center">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
</div>
</section>
<?php include("footer.php")?>