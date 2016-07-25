<?php
session_start();

if(isset($_SESSION["msg"])){
	echo $_SESSION['msg'];
	unset($_SESSION["msg"]);
	}

//PDO Connection - MYSQL Database

$user='eacontactdb1'; //This stores the DB name
$pass='Panama507!'; //This stores the DB password
$dbh = new PDO('mysql:host=97.74.31.131;dbname=eacontactdb1;port=3306', $user, $pass); //Instantiates PDO

if ($_SERVER['REQUEST_METHOD']=='POST') { //Checks to see if POST request method was made
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
	echo "<p>The EMAIL you have entered is invalid.</p>";
	}else{
	$_SESSION['msg'] = "<p>Your information has been sent. Thank You!</p>";
	
	$dbh = new PDO('mysql:host=97.74.31.131;dbname=eacontactdb1;port=3306', $user, $pass);
	
	$firstname=$_POST['firstname']; //get POST values 
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone']; 
	$street=$_POST['street'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$comment=$_POST['comment'];
	$stmt=$dbh->prepare("INSERT INTO ea_clients (firstname, lastname, phone, email, street, city, state, comment)  VALUES (:firstname, :lastname, :phone, :email, :street, :city, :state, :comment);"); //Inserts into ea_clients table of the CONTACT_DB database.
	 
	$stmt->bindParam(':firstname', $firstname); 
	$stmt->bindParam(':lastname', $lastname); 
	$stmt->bindParam(':email', $email); 
	$stmt->bindParam(':phone', $phone); 
	$stmt->bindParam(':street', $street); 
	$stmt->bindParam(':city', $city); 
	$stmt->bindParam(':state', $state); 
	$stmt->bindParam(':comment', $comment); 
	$stmt->execute();
	}
}
?>

<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E + A Studio | Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/eplusa-custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Oswald%7CLato' rel='stylesheet' type='text/css'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('images/facebook-rollover.png','images/pinterest-rollover.png','images/instagram-rollover.png')">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
    
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/ealogo_white_ltrs.png" id="logo"  class="img-responsive" alt="E+A Studio Logo"></a>
            </div>
            
            	<!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="services.html">Design Services</a>
                    </li>
                    <li>
                        <a href="projects.html">Projects</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->    
      
        </div>
        <!-- /.container -->
    </nav>

 

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                  Complimentary Consultation Request
                </h1>
                <h3>Please enter your information below.</h3>
            </div>
            
<!-- Form begins -->            
 <form action="newclients.php" method="post" >          
  
      <fieldset class="col-xs-4 form-group">
        <label>First Name: *</label>
        <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
      </fieldset>
      
     <fieldset class="col-xs-4 form-group">
        <label>Last Name: *</label>
        <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
      </fieldset>
              
      <fieldset class="col-xs-6 form-group">
        <label>Email: *</label>
        <input type="text" class="form-control" name="email" placeholder="youremail@email.com" required>
      </fieldset>
      
      <fieldset class="col-lg-8 form-group">
        <label>Contact Phone: * </label>
        <input type="text" class="form-control" name="phone" placeholder="(555) 555-5555" required>
      </fieldset>
      
      <fieldset class="col-lg-8 form-group">
        <label>Street Address: </label>
        <input type="text" class="form-control" name="street" placeholder="123 Your St.">
      </fieldset>
      
      <fieldset class="col-lg-8 form-group">
        <label>City:  </label>
        <input type="text" class="form-control" name="city" placeholder="City">
      </fieldset>
      
      <fieldset class="col-lg-8 form-group">
        <label>State/Province/Region: </label>
        <input type="text" class="form-control" name="state" placeholder="State/Province/Region">
      </fieldset>
      
       <fieldset class="col-lg-8 form-group">
        <label>Please tell us about your current design needs: *</label>
        <textarea class="form-control" name="comment" rows="5" id="comment" required></textarea><br>
        <button type="submit" class="btn btn-danger">Submit</button>
      </fieldset>
  
  </form>
  <!-- End of form --> 
        </div>
        <!-- /.row -->

        
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
            
                <div class="col-md-8">
                    <p>&copy; E+A Studio - All Rights Reserved </p>
                </div>
                
                 <div class="col-md-4" id="icons">
                <a href="https://www.facebook.com/eplusastudio" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('facebook','','images/facebook-rollover.png',1)"><img src="images/facebook.png" alt="Facebook Icon" width="32" height="32" id="facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.pinterest.com/eplusastudio/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('pinterest','','images/pinterest-rollover.png',1)"><img src="images/pinterest.png" alt="Pinterest Icon" width="32" height="32" id="pinterest"></a>&nbsp; &nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/eplusastudio/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('instagram','','images/instagram-rollover.png',1)"><img src="images/instagram.png" alt="Instagram Icon" width="32" height="32" id="instagram"></a></div>

		</div><!-- End of  row --> 
    </footer> <!-- End of  Footer -->  
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <!-- Script for USERSNAP -->
 
    <script type="text/javascript">
(function() {
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
s.src = '//api.usersnap.com/load/'+
        '4c2c9f6e-3970-467a-8b00-20f4e0559678.js';
var x = document.getElementsByTagName('script')[0];
x.parentNode.insertBefore(s, x);
})();
</script>

</body>

</html>
