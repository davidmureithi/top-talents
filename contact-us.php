<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="contactus.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div>

<div class="main-body" id="background">
                <div class="main-body" style="margin-top:30px; width: 90%;">
                <nav>
                    <a href="index.php">
<!--                         <img class="pull-left logo" src="images/logo.png" alt="Logo">
 -->                    </a>
                    <ul class="">
                        <li><a class="active" href="index.php">Home </a></li>
                        <li><a href="about-us.php" >About Us </a></li>
                        <li><a href="contact-us.php" >Contact Us </a></li>
                    </ul>
                </nav>
            </div>
            </div>


<!-- Contact with Map - START -->
<div class="container">
    <div class="row">
    
    <legend style="float: left; padding-left: 25px; font-size: 24px; text-transform: uppercase;"><div style="border-bottom: 2px solid rgb(238, 75, 55);; height: 41px; width: 17%;"><b>Contact us</b></div></legend>
    <span style=""></span>
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                <div id="map1" class="map">
                        </div>
                    <div class="panel-body" style="background-color: rgb(238, 75, 55); color: white; text-align: left;">
                        <h4>Address</h4>
                        <div>
                        00100 Nairobi<br />
                        Kenya<br />
                        0700 123 123<br />
                        toptalents@talents.co.ke<br />
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>

<!-- Contact with Map - END -->

</div>

<footer>
        <div class="home-footer">
            <div class="page-wrapper" style="margin: 0 10%">
                <div class="col-lg-12" style="float: center; padding-bottom: 15px;">
                    <div class="footercontent">
                        <div class="copyright">
                        <!--    &copy;  &#169;  &#xA9;  &#9400;    -->                            
                        <span>&#9400; 2016. All Rights Reserved. Designed by Tatu Creatives Ltd.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>