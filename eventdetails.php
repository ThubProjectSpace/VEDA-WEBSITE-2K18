<!doctype html>
<html lang="en" class="no-js">
<title>The Events</title>

	<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo|Lobster|Ubuntu+Condensed" rel="stylesheet">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/style2.css">
    <link href="css/event.css" rel="stylesheet" type="text/css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" >
    <!-- font awesome icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="../assets/libs/materialize/js/materialize.min.js"></script>-->
    
    <script type="text/javascript" src="new/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="new/scripts/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="new/scripts/jquery.horizonScroll.js"></script>

		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


 <link rel="stylesheet" href="css/style3.css">

<!-- //for-mobile-apps -->
<!-- //custom-theme -->
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Animation library for notifications   -->
        <!--  Fonts and icons     -->
        <link href="css/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/themify-icons.css" rel="stylesheet">


     




			<![endif]-->
		<script>
			document.documentElement.className = 'js';
		</script>
<style>
body {
    
  background-color: #2c2a2a;
  width:100%;
  height:100%;
  overflow-x:hidden;
}
     h4{
        font-family: 'Ubuntu Condensed', sans-serif;
    }
.scroll::-webkit-scrollbar {
  width: 5px;
}

.scroll::-webkit-scrollbar-thumb {
  background: rgb(94,26,139);

}

.scroll::-webkit-scrollbar-track {
  background: #080808;
}


#social_links ul li img{
	width: 100%;

}
#social_links{
    position: fixed;
    z-index: 10000;
    left:42%;
    top: 0px;
    display: flex;
    width:16%;

}
#social_links  li{
       width: 70%;
       height:80px;
    overflow: hidden;
    list-style: none;
}
#social_links ul{
	    width: 100%;
    height: 60%;
    top: 0px;
    display: inline-flex;
    flex-direction: row;
    bottom: 0px;
    margin: auto;
    padding-left:0px;
}

#social_links  li::before{
    content: '';
    position: absolute;

    background-size: 100%;
    left: -10px;
    background-position: 0px 28px;
        width: 80px;
        z-index: -1;
    height: 80px;
    background-repeat: no-repeat;
}

@media screen and (max-width: 885px) {
   #social_links {
	    width: 30%;
            left:35%;
                 }
         svg{
          height:300px;
       }
              }
@media screen and (max-width: 800px) {
   #social_links {
	    width: 30%;
            left:35%;
                 }
         svg{
          height:240px;
       }
              }
@media screen and (max-width: 480px) {
   #social_links {
	    width: 40%;
            left:30%;
                 }
         svg{
          height:200px;

       }
              }
@media screen and (max-width: 320px) {
   #social_links {
	    width: 50%;
            left:25%;
                 }
         svg{
          height:150px;

       }
              }
    .card{
        background:white;
        
    }
    .card-header{
        border: none;
         background:white;
        height:30px;
    }
    .digi{
        font-size:20px;
        
    }
    

</style>
     <?php
    include("config.php");
 $ce = mysqli_real_escape_string($con, $_GET['event']);
        $id = mysqli_real_escape_string($con, $_GET['d']);
    $eve = mysqli_real_escape_string($con, $_GET['e']);

?>


<body class="scroll">
<div class="wrapper" style="  background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)), url(images/bg.jpg);background-repeat: no-repeat;background-position:center;background-size:cover; width:100%;height:100%;">


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
  <section data-role="section" id="section-section2" style="opacity:0.8;margin:10px;" >
       <br>
       <br>
       <br>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12 radius" id="event_total" style="margin-bottom:10px;">
                    <?php
                        $query = "select * from event where id='".$id."' ";
                        $result = mysqli_query($con, $query);
                        $fetch = mysqli_fetch_assoc($result);
                    ?>
                    <div class="card" >
                        <div class="card-content black-text">
                           <div class="card-title" style="font-size:26px;">
                            <span style="float:left;"><?php echo $fetch['event_name']; ?></span>
                          <p style="float:right;font-size:26px;"> <a href="register.php" style="text-decoration:none;"> Register For <?php echo $fetch['event_name']; ?></a></p>
                            </div>
                            <br>
                            <hr>

                            <!-- Overview -->
                            <h4><b>OVERVIEW:</b></h4>
                            <p style="text-align: justify">
                                <?php echo $fetch['event_overview']; ?>
                            </p>
                            <!-- Overview end -->

                            <!-- Rules and Regulations -->
                            <h4><b>Rules & Regulations:</b></h4>
                            <p><?php echo $fetch['event_rules']; ?></p>
                            <!-- Rules and Regulations end-->

                            <!--<?php
                                //$result = mysqli_query($con, "select * from ordinator where submittedby='".$ce."' ");
                                //$mail = mysqli_fetch_assoc($result);
                            ?>-->

                            <!-- Registration and other conditions -->
                                <h4><b>Registeration fees :</b></h4>
                                <p><?php echo $fetch['event_registration']; ?></p>
                                <!--<p><b>Mail-id to which entries to be sent :</b> <?php echo $mail['femail']; ?></p>-->
                                <!--<p><b>Last date for receiving entries : </b>25-09-2016 </p>
                                <p><b>Shortlisting of Entries and Intimation : </b>27-09-2016</p>-->
                                <h4><b>Other Conditions : </b></h4>
                                <p><?php echo $fetch['other_conditions']; ?> </p>
                            <!-- Registration and other conditions end-->
                        </div>

                    </div>
                </div>
                    <div class="col-md-12 color radius" style="margin-bottom:10px;">
                        <div class="" id="co-Ordinator_total">

                            <div class="card-content black-text">
                                <span class="card-title">Co-ordinators</span>
                                <hr>
                                <h4><b>Faculty Co-ordinators:</b></h4>
                                    
                    

                                    <?php
                                $query = "select * from `co` where `event_name`='".$eve."' and `co_type`='Faculty Co-Ordinator' and `submittedby`='".$ce."' ";
                            
                                $result = mysqli_query($con, $query);
                        
                        
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td>S.NO</td>
                                                    <td>Name</td>
                                                    <td>Phone</td>
                                                    <td>Mail</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sno = 1;
                                                    if($result){
                                                    while ($co = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sno; ?></td>
                                                            <td><?php echo $co['cname']; ?></td>
                                                            <td><?php echo $co['cno']; ?></td>
                                                            <td><?php echo $co['cemail']; ?></td>
                                                        </tr>
                                                        <?php
                                                        $sno++;
                                                    }
                                                    }
                                                    else {
                                                        ?>
                                                            <tr>
                                                                <td colspan="4" style="text-align: center; font-size: 18px; color: #f00;">No data found.</td>
                                                            </tr>
                                                        <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div><br><br>


                              
                            </div>
                            
                            
                            

                        </div>                                  <br>
                    <br>
                    <br>
                            
                    </div>
              
                    <div class="col-md-12 color radius" >
                        <div class="" id="co-Ordinator_total">
                      <h4><b>Student Co-ordinators:</b></h4>

                                <?php
                                    $result = mysqli_query($con, "select * from `co` where event_name='".$eve."' and co_type='Student Co-Ordinator' and submittedby='".$ce."' ");
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td>S.NO</td>
                                                <td>Name</td>
                                                <td>Phone</td>
                                                <td>Mail</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sno = 1;
                                                if(mysqli_num_rows($result)>0){
                                                while ($co = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $sno; ?></td>
                                                        <td><?php echo $co['cname']; ?></td>
                                                        <td><?php echo $co['cno']; ?></td>
                                                        <td><?php echo $co['cemail']; ?></td>
                                                    </tr>
                                                    <?php
                                                    $sno++;
                                                }
                                                }
                                                else {
                                                    ?>
                                                        <tr>
                                                            <td colspan="4" style="text-align: center; font-size: 18px; color: #f00;">No data found.</td>
                                                        </tr>
                                                    <?php
                                                }

                                            ?>

                                    
                                        </tbody>
                                    </table>
                            </div></div></div>
                
     
                    
                </div>
            </div>
        </div>
    </section>    <br/>
                    <br/>
                    <br/>
                    <br/>
    

		 
</div>
<div class="footer">


    </div></body>
</html>
 <script type="text/javascript">
        // By default, swipe is enabled.
        $('section').horizon();

        // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
        //$('section').horizon({swipe: false});

        $(document).on('click', '.go-to-2', function() {
            $(document).horizon('scrollTo', 'section-section2');
        });

    </script>

<script>
window.onload = function () { $('.loader').delay(4000).fadeOut(); }

</script>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>
 <script src="js/galjs.js"></script> <script src="js/galjs1.js"></script>





 <script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/main.js"></script>
		<script>
		(function() {
			var tiltSettings = [
			{},
			{
				movement: {
					imgWrapper : {
						translation : {x: 10, y: 10, z: 30},
						rotation : {x: 0, y: -10, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					lines : {
						translation : {x: 10, y: 10, z: [0,70]},
						rotation : {x: 0, y: 0, z: -2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					caption : {
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 10, y: -10, z: 0},
						rotation : {x: 0, y: 0, z: 2},
						reverseAnimation : {duration : 2000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					},
					caption : {
						translation : {x: 30, y: 30, z: [0,40]},
						rotation : {x: [0,15], y: 0, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 10, y: 10, z: [0,20]},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutCubic'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						rotation : {x: -5, y: 10, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						reverseAnimation : {duration : 200, easing : 'easeOutQuad'}
					},
					overlay : {
						translation : {x: 5, y: -5, z: 0},
						rotation : {x: 0, y: 0, z: 6},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuad'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 50, easing : 'easeOutQuad'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 0, y: -8, z: 0},
						rotation : {x: 3, y: 3, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					lines : {
						translation : {x: 15, y: 15, z: [0,15]},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: 0, y: 8, z: 0},
						reverseAnimation : {duration : 600, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 10, y: -15, z: 0},
						reverseAnimation : {duration : 900, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 1200, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: -5, y: 5, z: 0},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					caption : {
						translation : {x: 15, y: 15, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic', elasticity : 700}
					},
					overlay : {
						translation : {x: 15, y: -15, z: 0},
						reverseAnimation : {duration : 500,easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 500, easing : 'easeOutExpo'}
					}
				}
			},
			{
				movement: {
					imgWrapper : {
						translation : {x: 5, y: 5, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					},
					caption : {
						translation : {x: 10, y: 10, z: [0,50]},
						reverseAnimation : {duration : 1000, easing : 'easeOutQuart'}
					},
					shine : {
						translation : {x: 50, y: 50, z: 0},
						reverseAnimation : {duration : 800, easing : 'easeOutQuart'}
					}
				}
			},
			{
				movement: {
					lines : {
						translation : {x: 40, y: 40, z: 0},
						reverseAnimation : {duration : 1500, easing : 'easeOutElastic'}
					},
					caption : {
						translation : {x: 20, y: 20, z: 0},
						rotation : {x: 0, y: 0, z: -5},
						reverseAnimation : {duration : 1000, easing : 'easeOutExpo'}
					},
					overlay : {
						translation : {x: -30, y: -30, z: 0},
						rotation : {x: 0, y: 0, z: 3},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					},
					shine : {
						translation : {x: 100, y: 100, z: 0},
						reverseAnimation : {duration : 750, easing : 'easeOutExpo'}
					}
				}
			}];

			function init() {
				var idx = 0;
				[].slice.call(document.querySelectorAll('a.tilter')).forEach(function(el, pos) {
					idx = pos%2 === 0 ? idx+1 : idx;
					new TiltFx(el, tiltSettings[idx-1]);
				});
			}

			// Preload all images.
			imagesLoaded(document.querySelector('main'), function() {
				document.body.classList.remove('loading');
				init();
			});

			// REMOVE THIS!
			// For Demo purposes only. Prevent the click event.
			[].slice.call(document.querySelectorAll('a[href="#"]')).forEach(function(el) {
				el.addEventListener('click', function(ev) { ev.preventDefault(); });
			});

			var pater = document.querySelector('.pater'),
				paterSVG = pater.querySelector('.pater__svg'),
				pathEl = paterSVG.querySelector('path'),
				paths = {default: pathEl.getAttribute('d'), active: paterSVG.getAttribute('data-path-hover')};

			pater.addEventListener('mouseenter', function() {
				anime.remove(pathEl);
				anime({
					targets: pathEl,
					d: paths.active,
					duration: 400,
					easing: 'easeOutQuad'
				});
			});

			pater.addEventListener('mouseleave', function() {
				anime.remove(pathEl);
				anime({
					targets: pathEl,
					d: paths.default,
					duration: 400,
					easing: 'easeOutExpo'
				});
			});
		})();
		</script>
