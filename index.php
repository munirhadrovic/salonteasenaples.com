<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>SALON TEASE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../favicon.ico">

    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/style4.css"/>
    <script src="js/jquery-1.11.2.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
</head>
<body id="page">
<?php
include 'settings.php';


?>
<ul class="cb-slideshow">
    <li>
        <span>Image 01</span>
        <div>
            <h3></h3>
        </div>
    </li>
    <li><span>Image 02</span><div><h3></h3></div></li>
    <li><span>Image 03</span><div><h3></h3></div></li>
    <li><span>Image 04</span><div><h3></h3></div></li>
    <li><span>Image 05</span><div><h3></h3></div></li>
    <li><span>Image 06</span><div><h3></h3></div></li>

</ul>
<div class="container">

    <header>
        <h1> <img src="images/logo.png" alt="logo" style="width:100%;"></h1>
        <div id="findUSposition">
            <a href="#myPopuptelephone" data-rel="popup" class="callus callfind" data-transition="flow"><img src="images/call.png" alt="Call" style="float:left;"><p style='margin-top: 14px;'>Call US</p></a>
            <div id="findUS">
                <a href="#myPopup" data-rel="popup" class="callfind findUS" data-transition="flow"><img src='images/location.png' alt='location' style='float:left;'><p style='margin-top: 14px;'>Find US</p></a>
            </div>
            <div class="homeposition"><a href="first/index.php" class="homebutton callfind" rel="external">Weddings</a></div>
            <div class="homeposition"><a href="first/index.php" class="homebutton callfind" rel="external">Hair Salon</a></div>
            <div class="homeposition"><a href="first/index.php" class="homebutton callfind" rel="external">Home</a></div>
        </div>
        <div data-role="popup" id="myPopup" class="ui-content">
            <div id="multiadress">

            </div>
            <?php
            for ($i=0; $i<$companynumber ; $i++) {

                ?>
                <script>
                    var ua = navigator.userAgent;
                    if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                        console.log("Android uslo");
                        var prostordugme=document.getElementById('multiadress');
                        var dugme= document.createElement('a');
                        dugme.setAttribute('class', "ui-btn");
                        dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                        dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                        prostordugme.appendChild(dugme);
                    }
                    else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                        console.log("Iphone ");
                        var prostordugme=document.getElementById('multiadress');
                        var dugme= document.createElement('a');
                        dugme.setAttribute('class', "ui-btn");
                        dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?> ");
                        dugme.innerHTML="<p><?php echo $nazivlokacije[$i] ?></p>";
                        prostordugme.appendChild(dugme);
                    }
                    else if (ua.indexOf("BlackBerry") >= 0)
                    {

                        console.log("Blakberu je prosao ");
                        console.log("Blakberu je prosao ")
                        var prostordugme=document.getElementById('multiadress');
                        var dugme= document.createElement('a');
                        dugme.setAttribute('class', "ui-btn");
                        dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>'}});");
                        dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                        prostordugme.appendChild(dugme);
                    }
                    else {
                        console.log("nije nigdje uslo default ")
                        var prostordugme=document.getElementById('multiadress');
                        var dugme= document.createElement('a');
                        dugme.setAttribute('class', "ui-btn");
                        dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa[$i]; ?>,<?php echo $grad[$i]; ?>,<?php echo $skracenica[$i]; ?>");
                        dugme.innerHTML="<p ><?php echo $nazivlokacije[$i] ?></p>";
                        prostordugme.appendChild(dugme);
                    }



                    // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                    // // some code..
                    // }

                </script>
                <?php
            }
            ?>
        </div>

        <div data-role="popup" id="myPopuptelephone" class="ui-content">
            <a href='tel:<?php echo $centratelephone ?>' class="ui-btn">Central Phone</a>
            <?php
            for ($i=0; $i <$companynumber ; $i++) {
                ?>
                <a href='tel:<?php echo $telephone[$i] ?>' class="ui-btn"><?php echo $nazivlokacije[$i] ?></a>
                <?php
            }
            ?>
        </div>


    </header>
</div>
</body>
</html>