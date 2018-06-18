<?php
error_reporting('all');
$con = mysqli_connect("localhost", "root", "", "veda2017");
if(!$con) {
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>



    <!doctype html>
    <html lang="en" class="no-js">
    <title>Registration Form</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="css/style3.css">

    <!-- //for-mobile-apps -->
    <!-- //custom-theme -->
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <!-- font awesome icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- touch swipe js -->
    <script type="text/javascript" src="assets/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="assets/scripts/jquery.touchSwipe.js"></script>
    <!--<script type="text/javascript" src="../assets/scripts/jquery.horizonScroll.js"></script>
    <!-- bootstrap and jquery links
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- My js -->
    <script src="assets/scripts/styles.js"></script>


    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="css/galstyle.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>
        body {
            background-color: #2c2a2a;
            width: 100%;
            height: 100%;
            overflow-x: hidden;
        }

        .scroll::-webkit-scrollbar {
            width: 5px;
        }

        .scroll::-webkit-scrollbar-thumb {
            background: rgb(94, 26, 139);

        }

        .scroll::-webkit-scrollbar-track {
            background: #080808;
        }

       
    </style>

    <body class="scroll">
        <div class="wrapper" style="  background:linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)), url(images/bg.jpg);background-repeat: no-repeat;background-position:center;background-size:cover;">



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

            <div id="register">

                <div class="center-container">
                    <div class="main">
                        <h1 class="w3layouts_head">Registration Form</h1>
                        <div class="w3layouts_main_grid">
                            <form action="#" method="post" class="w3_form_post">
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Roll no </label>
			                                 <input type="text" name="rollno" id="rollno" placeholder="Roll No" required="">
			                             </span>
                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Name </label>
			                                 <input type="text" name="name" id="name"  placeholder="Name" required="">
			                             </span>
                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Mobile </label>
			                                 <input type="text" name="mobile" id="mobile" placeholder="Mobile No" required="">
			                             </span>
                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>College</label>
			                                 <input type="text" name="college" id="college"  placeholder="College" required="">
			                             </span>
                                </div>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Email</label>
			                                 <input type="text" name="email" id="email" placeholder="Email" required="" onblur="validateEmail(email.value,1)">
			                             </span>
                                    <b style="color: #FF2838; display: none;" class="col-md-8" id="email_erroinfo">Please Enter Valid email.</b>

                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                  </span>

                                </div>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Department </label>
			                                 <input type="text" name="dept" id="dept" placeholder="Department" required="">
			                             </span>
                                </div>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Location</label>
			                                 <input type="text" name="location" id="location"  placeholder="Location" required="">
			                             </span>
                                </div>

                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Year</label>
			                                 <input type="text" name="year" id="year"  placeholder="year" required="">
			                             </span>
                                </div>



                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Department </label>
			                                 <select id="event_category" name="event_category" style="width:68%;height:36px;">
			                                     <option value="none" selected="" disabled="">Select category</option>
			                                      <?php
			                                             $query = "select * from users where username!='thub' ";
			                                             $result = mysqli_query($con, $query);
			                                             if (mysqli_num_rows($result)>0) {
			                                                 while ($fetch = mysqli_fetch_array($result)) {
			                                                     ?>
			                                                         <option value="<?php echo $fetch['username']; ?>">
			                                                             <?php echo $fetch['username']; ?>
			                                                         </option>
			                                                         <?php
			                                                 }
			                                             }
			                                         ?></select>
			                             </span>

                                </div>
                                <div class="w3_agileits_main_grid w3l_main_grid">
                                    <span class="agileits_grid">
			                                 <label>Select event</label>
			                                 <select id="category_events" name="category_events" style="width:68%;height:36px;">
			                                      <option value="" disabled selected>Select Events </option>
			                                             </select>
			                             </span>
                                </div>

                                <div class="content-w3ls">
                                    <div class="form-w3ls">
                                        <div class="content-wthree2">
                                            <div class="grid-w3layouts1">
                                                <div class="w3-agile1">
                                                    <label>Accomodation</label>
                                                    <ul>
                                                        <li>
                                                            <input type="radio" id="a-option" name="accomodation">
                                                            <label for="a-option">Yes</label>
                                                            <div class="check"></div>
                                                        </li>
                                                        <li>
                                                            <input type="radio" id="b-option" name="accomodation">
                                                            <label for="b-option">No</label>
                                                            <div class="check">
                                                                <div class="inside"></div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="w3_main_grid">
                                    <div class="w3_main_grid_right">
                                        <input type="submit" value="Submit" name="register">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Calendar -->


                        <p id="ajax-load" style="display: none;"></p>
                    </div>
                </div>

            </div>


            <!--<div class="arrow animated bounce"></div>-->
        </div>


        <script type="text/javascript">
            //$('section').horizon();

            // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
            //$('section').horizon({swipe: false});

            $(document).on('click', '.go-to-2', function() {
                $(document).horizon('scrollTo', 'section-section2');
            });



            // Getting data to the fields
            $("#rollno").keyup(function() {
                $("#ajax-load").load('load-data.php?action=data&pin=' + rollno.value);
            });

            // department change
            $("#event_category").change(function() {
                $("#category_events").load('load-data.php?action=event&dept=' + event_category.value);
            });


            //tooltip js
            $('[data-toggle="tooltip"]').tooltip();


            // phone number validation
            $("#mobile").keyup(function() {
                $("#mobile").val(this.value.match(/[0-9]*/));
            });


            function validateEmail(email, status) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                if (re.test(email) == false) {
                    if (status == 2) {
                        alert('Please enter valid email....');
                        return false;
                    }
                    document.getElementById("email_erroinfo").style.display = 'block';
                } else {
                    if (status == 2) {
                        if (grecaptcha.getResponse() == "") {
                            document.getElementById('captcha_error').style.display = 'block';
                            alert('Please fill the Captcha....');
                            return true;
                        } else {
                            //document.getElementById("email_erroinfo").style.display='none';
                            document.getElementById('captcha_error').style.display = 'none';
                        }
                    }
                    document.getElementById('email_erroinfo').style.display = 'none';
                }
            }

        </script>
        <?php
    if (isset($_POST['register'])) {

        $sel_query = "select * from `event_register` where regroll='".$_POST['rollno']."' and  regcategory='".$_POST['event_category']."' and regevent='".$_POST['category_events']."' ";

        $sel_result = mysqli_query($con, $sel_query);
        $sel_fetch = mysqli_fetch_array($sel_result);
        $sel_rows = mysqli_num_rows($sel_result);

        if ($sel_rows<=0) {
            $query = "insert into `event_register` set regroll='".$_POST['rollno']."', regname='".$_POST['name']."', regdept='".$_POST['dept']."', regclg='".$_POST['college']."', regyear='".$_POST['year']."', regloc='".$_POST['location']."', regph='".$_POST['mobile']."', regmail='".$_POST['email']."', regacc='".$_POST['accomodation']."', regcategory='".$_POST['event_category']."', regevent='".$_POST['category_events']."', reggender='".$_POST['gender']."' ";
            $result = mysqli_query($con, $query);

            if($result) {
                echo "<script>
                    alert('Your Event Registered Successfully....');
                    location.href='#section-register';
                </script>";
            }
            else {
             echo "<script>
                    alert('Registration failed....');
                    location.href='#section-register';
                </script>";
            }
        }
        else {
         echo "<script>
                alert('Already you Registered for this Event....');
                location.href='#section-register';
            </script>";
        }
    }
?>


            <div class="footer">



            </div>
    </body>

    </html>

    <script>
        window.onload = function() {
            $('.loader').delay(4000).fadeOut();
        }

    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index1.js"></script>
    <script src="js/galjs.js"></script>
    <script src="js/galjs1.js"></script>
