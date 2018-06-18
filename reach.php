<?php
if(isset($_POST['sendmail'])){
    ?>
    <script>
        alert("Thank you for contacting us!We will reach you soon");

    </script>
    <?php
}

?>
    <!doctype html>
    <html lang="en" class="no-js">

    <head>
        <meta charset="UTF-8">
        <title>VEDA'18</title>
        <link rel="icon" type="image/png" href="favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <link href="css/style.css" media="all" rel="stylesheet">
        <script src='http://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.3.0/snap.svg-min.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style2.css">

        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>


        <style>
            #map {

                height: 400px;
                /* The height is 400 pixels */
                width: 100%;
                /* The width is the width of the web page */
            }

            #form-id {
                height: 100%;
                /* The height is 400 pixels */
                width: 100%;
                /* The width is the width of the web page */
            }


            body {

                height: 100%;
                width: 100%;
                background: #2C2A2A;
            }

            .scroll::-webkit-scrollbar {
                width: 5px;
            }

            .scroll::-webkit-scrollbar-thumb {
                background: #080808;

            }

            .scroll::-webkit-scrollbar-track {
                background: #080808;
            }

            @import url('css.css');





            @keyframes flow {
                0% {
                    tramsform: transalteX(0px);
                }
                50% {
                    transform: translateX(-66.66%);
                }
                100% {
                    transform: translateX(0px);
                }
            }

            .even img:hover {
                /* Start the shake animation and make the animation last for 0.5 seconds */
                animation: shake 0.5s;
                /* When the animation is finished, start again */
                animation-iteration-count: infinite;
            }

            @keyframes shake {
                0% {
                    transform: translate(1px, 1px) rotate(0deg);
                }
                10% {
                    transform: translate(-1px, -2px) rotate(-1deg);
                }
                20% {
                    transform: translate(-3px, 0px) rotate(1deg);
                }
                30% {
                    transform: translate(3px, 2px) rotate(0deg);
                }
                40% {
                    transform: translate(1px, -1px) rotate(1deg);
                }
                50% {
                    transform: translate(-1px, 2px) rotate(-1deg);
                }
                60% {
                    transform: translate(-3px, 1px) rotate(0deg);
                }
                70% {
                    transform: translate(3px, 1px) rotate(-1deg);
                }
                80% {
                    transform: translate(-1px, -1px) rotate(1deg);
                }
                90% {
                    transform: translate(1px, 2px) rotate(0deg);
                }

            }


            .container {
                position: absolute;
                bottom: 50px;
                left: 60px;
            }

            canvas[resize] {
                width: 100%;
                height: 100%;
            }

        </style>
    </head>

    <body class="scroll">
        <div class="wrapper" style="  background:linear-gradient(rgba(0,0,0,.7),rgba(0,0,0,.7)), url(images/bg.jpg);background-repeat: no-repeat;background-position:center;background-size:cover;width:100%;height: 1100px;">


            <div class="contain">

                <div class="overlay-navigation">
                    <nav role="navigation">
                        <ul>
                            <li><a href="index.php" data-content="The beginning">Home</a></li>
                            <li><a href="nabout.html" data-content="Curious?">About</a></li>
                            <li><a href="events.php" data-content="Good Luck Have Fun">Events</a></li>
                            <li><a href="register.php" data-content="Only the finest">Register</a></li>
                            <li><a href="reach.php" data-content="Don't hesitate">Contact</a></li>
                        </ul>
                    </nav>
                </div>



                <audio id="sound1" src="images/clk.wav" preload="auto"></audio>
                <div class="open-overlay" onclick="document.getElementById('sound1').play();">
                    <span class="bar-top"></span>
                    <span class="bar-middle"></span>
                    <span class="bar-bottom"></span>
                </div>

                <br>
                <div class="row"></div>


                <div class="col-md-12" style="margin-top:60px;">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <center><a data-toggle="collapse" href="#collapse1">Route Map</a></center>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <img src="../assets/imgs/route_map_thumb.jpg" class="img-responsive" />

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>

                </div>

                <div class="card" style="height: 100%;margin-top: 160px;">
                    <div class="card-body">
                        <div id="section-contact">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">

                                <div class="col-md-6">
                                    <h1 class="w3layouts_head" style="color:white;">Contact</h1>

                                    <form id="form-id" method="POST" action="#">

                                        <div class="form-group">
                                            <label for="name" style="color:white;">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="email1" style="color:white;">Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email Here" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email1" style="color:white;">Message</label>
                                            <textarea style="height: 100px;" class="form-control" name="message" id="message" placeholder="Your Message" required></textarea>
                                        </div>

                                        <button type="submit" name="sendmail" class="btn btn-primary">Send</button>

                                        <button type="reset" name="reset" class="btn btn-primary" style="margin-left: 10px;">Clear</button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <div id="map"></div>
                                </div>

                                <br>

                            </div>
                            <div class="col-md-1"></div>

                        </div>
                    </div>


                </div>


            </div>

        </div>

        <div class="footer">

        </div>
    </body>
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            var aditya = {
                lat: 17.0931188,
                lng: 82.0666711
            };
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'), {
                    zoom: 16,
                    center: aditya
                });
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: aditya,
                map: map
            });




            var poly = {
                lat: 17.091675,
                lng: 82.068634
            };
            // The map, centered at Uluru
            // The marker, positioned at Uluru
            var markerA = new google.maps.Marker({
                position: poly,
                map: map
            });



            var aoec = {
                lat: 17.0932205,
                lng: 82.065584
            };
            // The map, centered at Uluru
            // The marker, positioned at Uluru
            var markerA = new google.maps.Marker({
                position: aoec,
                map: map
            });



        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDthpGa7jTLSJTFYTZ4H4l74PKyH8WMXrg&callback=initMap">

    </script>

    </html>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>
