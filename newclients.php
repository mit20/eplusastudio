<?php 
//PDO Connection - MYSQL Database
$user='eacontactdb1'; //This stores the DB name
$pass='Panama507!'; //This stores the DB password
$dbh = new PDO('mysql:host=97.74.31.131;dbname=eacontactdb1;port=3306', $user, $pass); //Instantiates PDO

?>

<!DOCTYPE html>
<html lang="en"><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="E + A Studio is one of the top interior design and home decorating firms based in Panama City, Panama with more than 10 years of experience.">
    <meta name="keywords" content="Carolina Bosquez, Principal, E + A Studio, Interior Designer, Interior Decorator">
    <meta name="author" content="Carolina Bosquez, Principal, E + A Studio">

    <title>E + A Studio | Contact</title>
    
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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

  <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-center">
                  Thanks for your submission!
                </h1>
                <h3 class="text-center">Your information/message has been submitted to E+A Studio. We'll be in contact soon. Thanks!</h3>
                <br><br>
            </div>

            <div>
            		<h2 class="text-center"><a href="index.html" class="btn btn-danger btn-lg">Home</a></h2>
               <br><br>
             </div>

            
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
                <a href="https://www.facebook.com/eplusastudio" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('facebook','','images/facebook-rollover.png',1)"><img src="images/facebook.png" alt="Facebook Icon" width="32" height="32" id="facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.pinterest.com/eplusastudio/" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('pinterest','','images/pinterest-rollover.png',1)"><img src="images/pinterest.png" alt="Pinterest Icon" width="32" height="32" id="pinterest"></a>&nbsp; &nbsp;&nbsp;&nbsp;
        <a href="https://www.instagram.com/eplusastudio/" target="_blank" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('instagram','','images/instagram-rollover.png',1)"><img src="images/instagram.png" alt="Instagram Icon" width="32" height="32" id="instagram"></a></div>
        
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
