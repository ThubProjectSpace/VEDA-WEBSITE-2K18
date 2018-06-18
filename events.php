<!doctype html>
<html lang="en" class="no-js">
<title>The Events</title>

	<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/galstyle.css">
      <link rel="stylesheet" href="css/style1.css">
      <link rel="stylesheet" href="css/style2.css">
			<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/pater.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
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
.scroll::-webkit-scrollbar {
  width: 5px;
}

.scroll::-webkit-scrollbar-thumb {
  background: rgb(94,26,139);

}

.scroll::-webkit-scrollbar-track {
  background: #080808;
}
.loader {
  position: absolute;
  left: 0px;
  top: 0px;
  right: 0px;
  bottom: 0px;
  width: 100%;
  height: 100%;
  background-color: rgb(94,26,139);
  min-height: 400px;
  z-index:100000000;
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
.container{
position: absolute;
bottom:40px;
left:60px;
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

</style>
<body class="scroll">
<div class="wrapper" style="  background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), url(images/bg.jpg);background-repeat: no-repeat;background-position:center;background-size:cover; width:100%;height:100%;">


 <div class="overlay-navigation">
  <nav role="navigation">
    <ul>
      <li><a href="index.htm" data-content="The beginning">Home</a></li>
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


<div class="arrow animated bounce"></div>
<br><br>
 <div class="contain">
		<main>
			<section class="content content--c4" style="background:none">
			<a href="eventview.php?event=<?php echo "digi";?>"  class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/digi.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">DIGI</h3>
							<p class="tilter__description">CSE &AMP; IT</p>
                           
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="eventview.php?event=<?php echo "electrenz";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/electrenz.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">ELECTRENZ</h3>
							<p class="tilter__description">EEE</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="eventview.php?event=<?php echo "ignite";?>"class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/ignite.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">IGNITE</h3>
							<p class="tilter__description">MECH</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				
				<a href="eventview.php?event=<?php echo "spark";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/spark.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">SPARK</h3>
							<p class="tilter__description">ECE</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
					<a href="eventview.php?event=<?php echo "petrospirit";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/petrospirit.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">PETROSPIRIT</h3>
							<p class="tilter__description">PT</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
					<a href="eventview.php?event=<?php echo "krishi";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/krishi.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">KRISHI</h3>
							<p class="tilter__description">AGRI</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
					<a href="eventview.php?event=<?php echo "opus";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/opus.png" alt="img07" />
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">OPUS</h3>
							<p class="tilter__description">CE</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
				<a href="eventview.php?event=<?php echo "excavation";?>" class="tilter tilter--4">
					<figure class="tilter__figure">
						<img class="tilter__image" src="icons/excavation.png" alt="img08" align="center"/>
						<div class="tilter__deco tilter__deco--shine"><div></div></div>
						<div class="tilter__deco tilter__deco--overlay"></div>
						<figcaption class="tilter__caption">
							<h3 class="tilter__title">EXCAVATION</h3>
							<p class="tilter__description">MINE</p>
						</figcaption>
						<svg class="tilter__deco tilter__deco--lines" viewBox="0 0 300 415">
							<path d="M20.5,20.5h260v375h-260V20.5z" />
						</svg>
					</figure>
				</a>
			</section>
	

             </main>
		 </div>
</div>
<div class="footer">

</div></body>
</html>

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
