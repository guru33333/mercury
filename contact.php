<?php
$error = $erroremail = $errorform = $errormobile = $sendmail = $scorall = "";
$headers = $mobile = $email = $message = "";                                                      
if(isset($_POST["name"],$_POST["number"],$_POST["email"],$_POST["message"])){   
$scorall="1";
$name=($_POST["name"]);
$mobile=($_POST["number"]);
$email=($_POST["email"]);
$message=($_POST["message"]);       
$form =  $name.$mobile.$email.$message;
$formhtml = filter_var($form, FILTER_SANITIZE_STRING); 
if ( $form != $formhtml) {$error="1"; $errorform="text-warning";}
if ((!empty($name)) &&  (!empty($mobile)) && (!empty($email)) && (!empty($message))  ) {    
$name= filter_var($name, FILTER_SANITIZE_STRING); 
$mobile= filter_var($mobile, FILTER_SANITIZE_STRING); 
$email= filter_var($email, FILTER_SANITIZE_STRING); 
$message= filter_var($message, FILTER_SANITIZE_STRING); 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error="1";
        $erroremail="text-danger";  
    }
$domain = substr(strrchr($email, "@"), 1);
function mxrecordValidate($email, $domain) {
$arr = dns_get_record($domain, DNS_MX);
 if((!empty ($arr[0]['host'])) && (!empty ($arr[0]['target']))){
if ($arr[0]['host'] == $domain && !empty($arr[0]['target'])) {
return $arr[0]['target'];
}
}
}    
if (mxrecordValidate($email, $domain)) {
} else {
 $error="1"; $erroremail="text-danger";  
}    
        if(is_numeric($mobile)) {
}else{$error="1";
        $errormobile="text-danger";}
     if($error !== "1"){
         $data="<!DOCTYPE html><html lang='en'><head><title> Mercury Perfumery Works </title><style>table {  width:100%;}th, td { padding: 15px;  text-align: left;}table#t01 tr:nth-child(even) {  background-color: #eee;}table#t01 tr:nth-child(odd) { background-color: #fff;}table#t01 th {background-color: #ce6708;color: white;}</style></head><body><table id='t01'><tr><th colspan='2'><center><h1> Mercury Perfumery Works </h1></center></th>
</tr><tr><td colspan='2'><center><b>Customer Details</b></center></td>
</tr><tr><td>Name</td>  <td>$name</td></tr>
<tr><td>Email</td>  <td>$email</td></tr>
<tr><td>Phone Number</td>  <td>$mobile</td></tr>
<tr><td>Message</td>  <td>$message</td></tr>
</table>
</body></html>";

    $subject="Mail From Mercury Perfumery Works";
    $to="mercuryperfumeryworks@gmail.com";
 
    // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <admin@mercuryperfumeryworks.com>' . "\r\n";
       
   if(mail($to,$subject,$data,$headers))
{
   $sendmail ="send";
} 
else 
{
     $sendmail ="error";
}  
    }}}
 ?>
<!DOCTYPE html>
<html lang="en">
<head itemscope itemtype="http://www.schema.org/website">
  <title>Contact Mercury Perfumery Works</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="Mercury Perfumery Works">
  <meta property="og:type" content="website">	
  <meta property="og:url" content="http://www.mercuryperfumeryworks.com">
  <meta property="og:image" content="http://www.mercuryperfumeryworks.com/images/favicon.png">
  <meta property="og:site_name" content="Mercury Perfumery Works">
  <meta name="keywords" content="mercury perfumery works, incense stick manufacturers in sivakasi, sambrani manufacturers, fragnance products in sivakasi">
  <meta property="og:description" name="description" content="Contact : 94, Naranapuram Road, Sivakasi - 626 123">
  <meta name="revisit-after" content="10 Days">
  <meta name="copyright" content="">
  <meta name="language" content="English">
  <meta name="distribution" content="Global">
  <link rel="icon" type="image/png" sizes="192x192" href="images/favicon.png">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="topbg d-none d-lg-block">
    <div class="container-fluid py-1">
		<div class="row">
			<div class="col-md-12">
				<div class="marquee L text-white jost">
					<i class="fa fa-map-marker icnclr"></i> &nbsp; 94, Naranapuram Road, Sivakasi - 626 123 &ensp; &ensp; <i class="fa fa-whatsapp icnclr"></i> &nbsp; +91 80567 21340
					&ensp; &ensp; &ensp; <i class="fa fa-envelope icnclr"></i> &nbsp; mercuryperfumeryworks@gmail.com
				</div>
			</div>
		</div>
    </div>
</div>
<div class="topbg d-lg-none">
    <div class="container py-2">
		<div class="row">
			<div class="col-6 text-center topbrd">
			  <a href="https://api.whatsapp.com/send?phone=918056721340"><i class="text-white fa fa-whatsapp"></i></a>
			</div>
			<div class="col-6 text-center">
			  <a href="tel:918056721340"><i class="text-white fa fa-phone"></i></a>
			</div>
		</div>
    </div>
</div>
<div class="container-fluid px-lg-5 py-3 d-none d-lg-block">
	<div class="row">
		<div class="col-lg-4 align-self-center">
			<div class="d-flex align-items-center">
				<div class="icon">
				  <img src="images/images.jpg" class="img-fluid" alt="Mercury Perfumery Works" title="Mercury Perfumery Works">
				</div>
				<div class="icon-info">
				  <div class="rockroll">Location</div>
				  <div class="jost smallfnt">94, Naranapuram Road, Sivakasi - 626 123</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6">
			<a href="index.php">
				<img src="images/mercury.png" class="img-fluid logos mx-auto d-block" alt="Mercury Perfumery Works" title="Mercury Perfumery Works">
			</a>
		</div>
		<div class="col-lg-4 col-md-6 align-self-center text-center">
			<div class="rockroll heading5">Follow on</div>
				<li>
					<a href="https://api.whatsapp.com/send?phone=918056721340" target="_blank"><img src="images/whatsapp.png" alt="whatsapp" title="whatsapp"></a>&nbsp;
					<a href="#" target="_blank"><img src="images/map.png" alt="gmap" title="gmap"></a>&nbsp;
					<a href="#" target="_blank"><img src="images/youtube.png" alt="Youtube" title="Youtube"></a>&nbsp;
				</li>
		</div>
	</div>
</div>
<div class="container-fluid py-2 px-lg-5 d-lg-none">
	<div class="row">
		<div class="col-lg-12 col-md-6 col-12 text-center">
			<a href="index.php">
				<img src="images/mercury.png" class="img-fluid logos mx-auto d-block" alt="Mercury Perfumery Works" title="Mercury Perfumery Works">
			</a>
		</div>
	</div>
</div>
<!--Desktop Nav-->
<div class="nav-bar">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light navbg py-lg-3 d-none d-lg-block shadow">
      <button class="navbar-toggler mx-auto m-3" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div id="myNavbar" class="collapse navbar-collapse">
          <ul class="navbar-nav text-center mr-auto navfont pl-lg-5">
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="index.html">Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="about.html">About</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link text-white" href="incensestick.html">Incense Stick</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link text-white" href="computersambrani.html">Computer Sambrani</a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link text-white" href="cupsambrani.html">Cup Sambrani</a>
            </li>
            <li class="nav-item px-3 active">
              <a class="nav-link text-white" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="mx-auto rockroll pl-5">
            <i class="fa fa-mobile clr heading5"></i>
            <a class="clr" href="contact.php">Get A Quote</a>
          </div>
        </div> 	
    </nav>
  </div>
</div>
<!--Desktop Nav End-->
<!--Mobile Nav-->
<div class="nav-bar1">
	<nav class="navbar navbar-expand-lg navbar-light navfont navbg1 d-block d-lg-none shadow">
		<div class="container">
			<a href="contact.php" class="navbutton clr">
				<i class="fa fa-mobile heading5"></i>  Get A Quote
			</a>
			<a class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
				<span class="fa fa-bars text-white"> Menu </span>
			</a>
			<div id="myNavbar" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto text-center py-4">
					<li class="nav-item py-2">
            <a class="nav-link text-white" href="index.html">Home</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link text-white" href="about.html">About</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link text-white" href="incensestick.html">Incense Stick</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link text-white" href="computersambrani.html">Computer Sambrani</a>
          </li>
          <li class="nav-item py-2">
            <a class="nav-link text-white" href="cupsambrani.html">Cup Sambrani</a>
          </li>
          <li class="nav-item py-2 active">
            <a class="nav-link text-white" href="contact.php">Contact Us</a>
          </li>
				</ul>
			</div> 	
		</div>  
	</nav>
</div>
<!--Mobile Nav End-->
<img src="images/contactmercury.jpg" class="img-fluid w-100" alt="Mercury Perfumery Work" title="Mercury Perfumery Work">
<div class="container pad" itemscope itemtype="http://schema.org/LocalBusiness">
    <div class="row">
        <div class="col-md-4">
            <div class="mb-4">
                <div class="contact-box-content" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <i class="fa fa-globe icnfnt"></i>
                    <p class="pt-3 jost" itemprop="streetAddress"> 94, Naranapuram Road, Sivakasi - 626 123  </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4">
                <div class="contact-box-content">
                <i class="fa fa-phone icnfnt"></i>
                <p class="pt-3 jost" itemprop="telephone">+91 80567 21340</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-4">
                <div class="contact-box-content">
                    <i class="fa fa-envelope-o icnfnt"></i>
                    <p class="pt-3 jost" itemprop="email"> mercuryperfumeryworks@gmail.com </p>
                </div>
            </div>
        </div>

        <div class="col-md-12 py-5">
            <div class="contact-box">
                <h5 class="heebo clr">Contact Us</h5>
                <h1 class="headtxt font-weight-bold">Contact With Us</h1>
                <form class="brdr py-2 contact-form" action="contact.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 pt-2">
                            <input type="text" class="form-control jost" id="name" name="name" placeholder="Name *" required>
                        </div>
                        <div class="col-md-6 pt-2">
                            <input type="text" class="form-control jost" id="number" name="number"  pattern="[0-9]{10,15}" placeholder="Your Phone Number * " required>
                        </div>	
                        <div class="col-md-12 pt-4">
                            <input type="email" class="form-control jost" id="email" name="email" placeholder="Your Email *" required>
                        </div>
                        <div class="col-md-12 pt-4">
                            <textarea class="form-control formheight jost" id="message" name="message" placeholder="Your Message Here" required></textarea>
                        </div>
                        <div class="col-md-3 pt-4">
                            <input class="cntbtn w-100" type="submit" value="SUBMIT" id="send" name="send"> 
                        </div>
                    </div>
                    <?php if ($sendmail == "error"){?>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> Invalid Message
				</div>
				<?php
					}
				?> 
				<?php if ($sendmail == "send"){?>
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> Your Message Send Successfully
				</div>
				<?php
				}
				?>
                  </form>
            </div>
        </div>
    </div>
</div>  
<button type="button" class="btn btn-primary d-none" id="models" data-toggle="modal" data-target="#exampleModal"></button>
<?php
  
if($error == "1"){
    ?>
<script type='text/javascript'>
    var name = "<?php echo $name ; ?>";
    var number = "<?php echo $mobile ; ?>";
    var email = "<?php echo $email ; ?>";
    var message = "<?php echo $message ; ?>";
    var erroremail = "<?php echo $erroremail ; ?>"; 
    var errornumber = "<?php echo $errormobile ; ?>";
    var errorform = "<?php echo $errorform ; ?>";
     document.getElementById("name").value = name;
     document.getElementById("number").value = number;
     document.getElementById("email").value = email;
     document.getElementById("message").value = message;
       if(errornumber !== ""){
        var telclass = document.getElementById("number");
          telclass.classList.add(errornumber);
       }
       if(erroremail !== ""){
        var emailclass = document.getElementById("email");
          emailclass.classList.add(erroremail);
       } if(errorform !== ""){
        var nameclass = document.getElementById("name");
          nameclass.classList.add(errorform);
           var messageclass = document.getElementById("message");
          messageclass.classList.add(errorform);
           if(errornumber == ""){
               var numberclass = document.getElementById("number");
          numberclass.classList.add(errorform); 
       }
       if(erroremail == ""){
           var emailclass = document.getElementById("email");
          emailclass.classList.add(errorform); 
       }
       }
</script>
<?php
}
?>  	
<script>
function myFunction(id) {
  var str =document.getElementById(id).value;
  var tr= str.trim();
  document.getElementById(id).value =tr;
}
</script>
<script>
  <?php
if($scorall == "1"){
    ?> window.scrollTo(0, 250);
    <?php } ?>
</script> 
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3935.3997906436234!2d77.80316813149108!3d9.473911762899617!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cf2a68f2ff27%3A0x63b481de2a978264!2sGoBigg-Website%20and%20Web%20Application%20Development%20cum%20Web-technologies%20Training%20Centre(Sivakasi)!5e0!3m2!1sen!2sin!4v1630234866527!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
<div class="topbg">
	<div class="col-lg-12 py-2">
		<ul class="fullpad">
			<li class="text-center jost text-white">Copyright &copy 2021, Mercury Perfumery Works <span class="wrdbrk"> All rights reserved </span> &nbsp;<span>Developed by <a href="http://gobigg.net/" target="_blank" class="wrdbrk text-white">Gobigg</a></span></li>
		</ul>
	</div>
</div>
<div class="fixed point2">
    <a href="images/catlogue.pdf" class="blink">
        <img src="images/tag.png" class="priceicn float-right" alt="Mercury Perfumery works" title="Mercury Perfumery works">
    </a>
</div>
<div class="fixed point w0">
	<a href="https://api.whatsapp.com/send?phone=918056721340">
		<img src="images/whatsappicon.png" class="priceicn1 float-left" alt="Mercury Perfumery works" title="Mercury Perfumery works">
	</a>
</div>
<div class="fixed point1 w0">
	 <a href="tel:+918056721340">
		<img src="images/callicon.png" class="priceicn1 float-left" alt="Mercury Perfumery works" title="Mercury Perfumery works">
	</a>
</div>
<script src="js/marquee.js"></script>
<script>
    $('.L').marquee({
        duration: 20000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });

    new WOW().init();	 
</script>  
<script>
	$(window).scroll(function() {
    if ($(this).scrollTop() >= 200) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>
<a href="#" id="return-to-top"><i class="fa fa-chevron-up"></i></a>     
</body>
</html>