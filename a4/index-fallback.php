<!-- <!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8' />
  <title>A4 Backup Page</title>
  <style>
    label {
      display: inline-block;
      width: 90px;
    }
  </style>
  <script src="script.js"></script>
</head>

<body>

  <header>
    <h1>RMAXXX Cinema</h1>
  </header>

  <main>
    <h2>Booking Form</h2>
    <form method='get' action='index.php'>
      <label>MovieId</label>
      <input type=text name='movie[id]' /><br>
      <label>MovieDay</label>
      <input type=text name='movie[day]' /><br>
      <label>MovieHour</label>
      <input type=text name='movie[hour]' /><br>
      <br>
      <label>SeatsSTA</label>
      <select name="seats[STA]" id="seats-STA" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
      <label>SeatsSTP</label>
      <select name="seats[STP]" id="seats-STP" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
      <label>SeatsSTC</label>
      <select name="seats[STC]" id="seats-STC" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br><br>
      <label>SeatsFCA</label>
      <select name="seats[FCA]" id="seats-FCA" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
      <label>SeatsFCP</label>
      <select name="seats[FCP]" id="seats-FCP" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
      <label>SeatsFCC</label>
      <select name="seats[FCC]" id="seats-FCC" onclick="Priceupdate()">
        <option value="blank" selected disabled>Please Select</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select><br>
      <br>
      <label>CustName</label>
      <input type="text" name="cust[name]" id="name" pattern="^[a-zA-Z\-.,' ]{1,100}$" placeholder="Nhat Nguyen"><br>
      <label>CustEmail</label>
      <input type="text" name="cust[email]" id="email" pattern="^[a-zA-Z0-9\-.,'@ ]{1,100}$" placeholder="s3765963@gmail.com"><br>
      <label>CustMobile</label>
      <input type="tel" name="cust[mobile]" id="mobile" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" placeholder="(04)/04/+614 xxxx xxxx"><br>
      <label>CustCard</label>
      <input type="text" name="cust[card]" id="card" minlength="14" maxlength="19" pattern="^\d{4}[ ]?\d{4}[ ]?\d{4}[ ]?\d{4}$" placeholder="xxxx xxxx xxxx xxxx"><br>
      <label>CustExpiry</label>
      <select name="cust[expiryYear]" id="Year">
        <option value="" selected disabled>YYYY</option>
        <option value="1">2021</option>
        <option value="2">2022</option>
        <option value="3">2023</option>
        <option value="4">2024</option>
      </select>
      <select name="cust[expiryMonth]" id="Month">
        <option value="" selected disabled>MM</option>
        <option value="1">01</option>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        <option value="5">05</option>
        <option value="6">06</option>
        <option value="7">07</option>
        <option value="8">08</option>
        <option value="9">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select><br><br>

      <span id='total' name="Total" style="font-size:20px;">Total: </span><br><br>
      <input type=submit value='Book' />
    </form>
  </main>

  <footer>

  </footer>

</body>

</html> -->

<!DOCTYPE html>
<html lang='en'>

<?php    

 ?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment3</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link id="stylecss" type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style.css">
  <script src='../wireframe.js'></script>
  <script src="script.js"></script>
  <?php
  session_start();
  include 'tools';
  $name_error = ' ';  
  $email_error = ' ';  
  $mobile_error = ' '; 
  $credit_error =' ';
  $expiryYear_error=' '; 
  $expiryMonth_error=' '; 

  if(isset($_POST["submit"]))
  {  
       if(empty($_POST["custname"]))  
       {  
            $name_error = "<p>Please Enter Name</p>";  
       }  
       else  
       {  
            if(!preg_match("/^[a-zA-Z ]*$/", $_POST["custname"]))  
            {  
                 $name_error = "<p>Only letters and whitespace allowed</p>";  
            }  
       }  
       if(empty($_POST["custemail"]))  
       {  
            $email_error = "<p>Please Enter Your Email</p>";  
       }  
       else  
       {  
            if(!filter_var($_POST["custemail"], FILTER_VALIDATE_EMAIL))  
            {  
                 $email_error = "<p>Invalid Email format</p>";  
            }  
       }  
       if(empty($_POST["custmobile"]))  
       {  
            $mobile_error = "<p>Please enter your mobile number</p>";  
       }  
       else
       {
            if(!preg_match("^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$", $_POST["custname"])) 
            {
             $mobile_error = "<p>Invalid mobile number</p>";  
            }
       }
       if(empty($_POST["custcard"]))  
       {  
            $credit_error = "<p>Please Enter Your Credit Card</p>";  
       }  
       else  
       {  
         if(!preg_match("^\d{4}[ ]?\d{4}[ ]?\d{4}[ ]?\d{4}$", $_POST["custcard"]))  
            {  
                 $credit_error = "<p>Invalid Credit Card</p>";  
            }  
       }  
       if(empty($_POST["custexpiryYear"]))  
       {  
            $expiryYear_error = "<p>Please Enter Expiry Year</p>";  
       }  
       if(empty($_POST["custexpiryMonth"]))  
       {  
            $expiryMonth_error = "<p>Please Enter Expiry Month</p>";  
       }  
       
  }  


  ?>
</head>

<!--Scrollable-->

<body data-spy="scroll" data-target=".navbar" data-offset="50">

  <header>
    <div class="jumbotron text-center bg-warning text-danger" id="jumbotronlogo">
      <img class="logo" src="media/Logo-02.png" alt="company logo">
      <h1 id="brand">RMAXXX</h1>
    </div>
  </header>

  <nav class="navbar navbar-expand-md bg-light navbar-light sticky-top" style="font: 30px Monospace; font-weight: bold;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar1" class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li id="navlink" class="nav-item"><a class="nav-link" href="#aboutus">About Us</a></li>
        <li id="navlink" class="nav-item"><a class="nav-link" href="#nowshowing">Now Showing</a></li>
        <li id="navlink" class="nav-item"><a class="nav-link" href="#prices">Prices</a></li>
      </ul>
    </div>
  </nav>

  <br>
  <main>

  <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>

    <div id="section" class="jumbotron text-center">
      <h2 id="aboutus">ABOUT US SECTION</h2>
    </div>

    <!--Parallax Scrolling Effect-->

    <div style=" background-color: burlywood;">
      <h3 id="title" style="text-align:center;">Welcome Back To RMAXXX </h3>
      <p style="padding-left:50px; padding-right: 50px; margin-bottom: 0%; text-align: center; font-size: 25px;">RMAXXX
        cinema can not wait anymore to serve
        you with our new
        upgrades to let you have the most wonderful time watching movies ! </p>
    </div>
    <div class="para"></div>
    <div style=" background-color: burlywood;">
      <h3 id="title" style="text-align:center;">New Seats </h3>
      <p style="padding-left:50px; padding-right: 50px; margin-bottom: 0%; text-align: center; font-size: 25px;">RMAXXX
        has new seat to serve you the most
        comfortable with our new chair.
        Especially, RMAXXX now has first-class seat in the royal cinema with the chair that you can lie and enjoy.</p>
    </div>
    <div class="paral"></div>
    <div style=" background-color: burlywood;">
      <h3 id="title" style="text-align:center;">Dolby In Cinema </h3>
      <p style="padding-left:50px; padding-right: 50px; margin-bottom: 0%; text-align: center; font-size: 25px;">RMAXXX
        cinema has the projection and the
        sound systems upgraded with 3D Dolby Vision projection and Dolby Atmos sound.
        Dolby Version is in the town waiting for you to serve you with extremely different experience in the cinema. Do
        not miss out !</p>
    </div>
    <div class="parallax"></div>

    <br>

    <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>

    <div id="section" class="jumbotron text-center">
      <h2 id="nowshowing">NOW SHOWING SECTION</h2>
    </div>

    <div id="moviesection" class="container bg-info">

      <div class="row">
        <div id="moviePanelACT" class="col-md-3">
          <div id="trailerbutton" class="container">
            <img class="image" src="media/endgame.jpg" alt="endgame poster">
            <img class="rating" src="media/13.png" width="15%" alt="rating PG-13">
            <div class="middle">
              <a id="link" href="https://www.youtube.com/watch?v=TcMBFSGVi1c">Trailer</a>
            </div>
            <div id="ticketbutton" class="middle">
              <a id="link" href="#synopsis" onclick="moviePanelACT('book','synopsisACT');">Book</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div id="schedule" class="container text-center">
            <h3 class="moviename">The Advengers: Endgame</h3>
            <table class="table table-sm table-warning table-striped">
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
              <tr>
                <td>Wed</td>
                <td>9PM</td>
              </tr>
              <tr>
                <td>Thurs</td>
                <td>9PM</td>
              </tr>
              <tr>
                <td>Fri</td>
                <td>9PM</td>
              </tr>
              <tr>
                <td>Sat</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Sun</td>
                <td>12PM</td>
              </tr>
            </table>
          </div>
        </div>


        <div id="moviePanelRMC" class="col-md-3">
          <div id="trailerbutton" class="container">
            <img class="image" src="media/the end wedding.jpg" alt="wedding poster">
            <img class="rating" src="media/M.png" width="15%" alt="rating M">
            <div class="middle">
              <a id="link" href="https://www.youtube.com/watch?v=uoDBvGF9pPU&t=1s">Trailer</a>
            </div>
            <div id="ticketbutton" class="middle">
              <a id="link" href="#synopsis" onclick="moviePanelRMC('book','synopsisRMC');">Book</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div id="schedule" class="container text-center">
            <h3 class="moviename">Top End Wedding</h3><br>
            <table class="table table-sm table-warning table-striped">
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
              <tr>
                <td>Mon</td>
                <td>6PM</td>
              </tr>
              <tr>
                <td>Tue</td>
                <td>6PM</td>
              </tr>
              <tr>
                <td>Sat</td>
                <td>3PM</td>
              </tr>
              <tr>
                <td>Sun</td>
                <td>3PM</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="row">
        <div id="moviePanelANM" class="col-md-3">
          <div id="trailerbutton" class="container">
            <img class="image" src="media/dumbo.jpg" alt="dumbo poster">
            <img class="rating" src="media/13.png" width="15%" alt="rating PG-13">
            <div class="middle">
              <a id="link" href="https://www.youtube.com/watch?v=7NiYVoqBt-8">Trailer</a>
            </div>
            <div id="ticketbutton" class="middle">
              <a id="link" href="#synopsis" onclick="moviePanelANM('book','synopsisANM');">Book</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div id="schedule" class="container text-center">
            <h3 class="moviename">Dumbo</h3><br>
            <table class="table table-sm table-warning table-striped">
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
              <tr>
                <td>Mon</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Tue</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Wed</td>
                <td>6PM</td>
              </tr>
              <tr>
                <td>Thurs</td>
                <td>6PM</td>
              </tr>
              <tr>
                <td>Fri</td>
                <td>6PM</td>
              </tr>
              <tr>
                <td>Sat</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Sun</td>
                <td>12PM</td>
              </tr>
            </table>
          </div>
        </div>

        <div id="moviePanelAHF" class="col-md-3">
          <div id="trailerbutton" class="container">
            <img class="image" src="media/the happy prince.jpg" alt="happy pirnce poster">
            <img class="rating" src="media/R.png" width="15%" alt="rating R">
            <div class="middle">
              <a id="link" href="https://www.youtube.com/watch?v=4HmN9r1Fcr8">Trailer</a>
            </div>
            <div id="ticketbutton" class="middle">
              <a id="link" href="#synopsis" onclick="moviePanelAHF('book','synopsisAHF');">Book</a>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div id="schedule" class="container text-center">
            <h3 class="moviename">The Happy Prince</h3><br>
            <table class="table table-sm  table-warning table-striped">
              <tr>
                <th>Day</th>
                <th>Time</th>
              </tr>
              <tr>
                <td>Wed</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Thurs</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Fri</td>
                <td>12PM</td>
              </tr>
              <tr>
                <td>Sat</td>
                <td>9PM</td>
              </tr>
              <tr>
                <td>Sun</td>
                <td>9PM</td>
              </tr>
            </table>
          </div>
        </div>

      </div>
    </div>
    <br>

    <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>

    <div id="section" class="jumbotron text-center">
      <h2 id="synopsis">SYNOPSIS AREA</h2>
    </div>
    <label for="book" id="book"></label>
    <div class="container">
      <p style="text-align: center; font-size: 25px;">Please choose a movie from now showing to see more details</p>
    </div>
    <div id="synopsisACT" class="container-fluid" hidden>
      <div class="card-deck">
        <div id="sypnosis">
          <table class="table table-sm table-warning table-borderless" id="hotmovie">
            <tr>
              <th>
                <h3 style="font-size: 40; text-align: center;">Avengers: Endgame</h3>
                <div>
                  <img id="poster" src="media/endgame13.png" alt="endgame poster">
                  <br>
              </th>
              <th>
                <h3 style="font-size: 40; text-align: center;">Official
                  Trailer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                <br>
                <div class="embed-responsive embed-responsive-16by9" id="trailer" style="align-content:center;">
                  <iframe width="100%" height="100%" src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </tr>
            <tr>
              <td style="width: 20%;" colspan="2">
                <h2 style="font-size: 35;">Plot description:</h2>

                <p style="font-size: 50;">Adrift in space with no food or water, Tony Stark sends a message to Pepper
                  Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black
                  Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished
                  allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the
                  universe.
                </p>
              </td>
            <tr>
              <th style="font-size: 20px;">Make a booking:</th>
              <td>
                <p>Click the time to go to booking form</p>
                <div><input type="button" value="WED">
                  <a href="#bookingform"><input type="button" value="09:00"></a></div>
                <div><input type="button" value="THU">
                  <a href="#bookingform"><input type="button" value="12:00"></a></div>
                <div><input type="button" value="FRI">
                  <a href="#bookingform"><input type="button" value="15:00"></a></div>
                <div><input type="button" value="SAT">
                  <a href="#bookingform"><input type="button" value="18:00"></a></div>
                <div><input type="button" value="SUN">
                  <a href="#bookingform"><input type="button" value="21:00"></a></div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <br>
    <div id="synopsisRMC" class="container-fluid" hidden>
      <div class="card-deck">
        <div id="sypnosis">
          <table class="table table-sm table-warning table-borderless" id="hotmovie">
            <tr>
              <th>
                <h3 style="font-size: 40; text-align: center;">Top End Wedding</h3>
                <div>
                  <img id="poster" src="media/weddingM.png" alt="top end wedding poster">
                  <br>
              </th>
              <th>
                <h3 style="font-size: 40; text-align: center;">Official
                  Trailer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                <br>
                <div class="embed-responsive embed-responsive-16by9" id="trailer" style="align-content:center;">
                  <iframe width="1519" height="562" src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </tr>
            <tr>
              <td style="width: 20%;" colspan="2">
                <h2 style="font-size: 35;">Plot description:</h2>

                <p style="font-size: 50;">Lauren and Ned are engaged, they are in love, and they have just ten days to
                  find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her
                  parents and pull off their dream wedding.
                </p>
              </td>
            <tr>
              <th style="font-size: 20px;">Make a booking:</th>
              <td>
                <p>Click the time to go to booking form</p>
                <div><input type="button" value="MON">
                  <a href="#bookingform"><input type="button" value="12:00"></a></div>
                <div><input type="button" value="TUE">
                  <a href="#bookingform"><input type="button" value="15:00"></a></div>
                <div><input type="button" value="SAT">
                  <a href="#bookingform"><input type="button" value="18:00"></a></div>
                <div><input type="button" value="SUN">
                  <a href="#bookingform"><input type="button" value="21:00"></a></div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <br>
    <div id="synopsisANM" class="container-fluid" hidden>
      <div class="card-deck">
        <div id="sypnosis">
          <table class="table table-sm table-warning table-borderless" id="hotmovie">
            <tr>
              <th>
                <h3 style="font-size: 40; text-align: center;">Dumbo</h3>
                <div>
                  <img id="poster" src="media/dumbopg13.png" alt="dumbo poster">
                  <br>
              </th>
              <th>
                <h3 style="font-size: 40; text-align: center;">Official
                  Trailer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                <br>
                <div class="embed-responsive embed-responsive-16by9" id="trailer" style="align-content:center;">
                  <iframe width="1519" height="562" src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </tr>
            <tr>
              <td style="width: 20%;" colspan="2">
                <h2 style="font-size: 35;">Plot description:</h2>

                <p style="font-size: 50;">A young elephant, whose oversized ears enable him to fly, helps save a
                  struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark
                  secrets beneath its shiny veneer.
                </p>
              </td>
            <tr>
              <th style="font-size: 20px;">Make a booking:</th>
              <td>
                <p>Click the time to go to booking form</p>
                <div><input type="button" value="MON">
                  <a href="#bookingform"><input type="button" value="09:00"></a></div>
                <div><input type="button" value="TUE">
                  <a href="#bookingform"><input type="button" value="12:00"></a></div>
                <div><input type="button" value="WED">
                  <a href="#bookingform"><input type="button" value="14:00"></a></div>
                <div><input type="button" value="THU">
                  <a href="#bookingform"><input type="button" value="16:00"></a></div>
                <div><input type="button" value="FRI">
                  <a href="#bookingform"><input type="button" value="18:00 "></a></div>
                <div><input type="button" value="SAT">
                  <a href="#bookingform"><input type="button" value="20:00 "></a></div>
                <div><input type="button" value="SUN">
                  <a href="#bookingform"><input type="button" value="22:00 "></a></div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <br>
    <div id="synopsisAHF" class="container-fluid" hidden>
      <div class="card-deck">
        <div id="sypnosis">
          <table class="table table-sm table-warning table-borderless" id="hotmovie">
            <tr>
              <th>
                <h3 style="font-size: 40; text-align: center;">The Happy Prince</h3>
                <div>
                  <img id="poster" src="media/princeR.png" alt="the happy prince poster">
                  <br>
              </th>
              <th>
                <h3 style="font-size: 40; text-align: center;">Official
                  Trailer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                <br>
                <div class="embed-responsive embed-responsive-16by9" id="trailer" style="align-content:center;">
                  <iframe width="1519" height="562" src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </tr>
            <tr>
              <td style="width: 20%;" colspan="2">
                <h2 style="font-size: 35;">Plot description:</h2>

                <p style="font-size: 50;">The untold story of the last days in the tragic times of Oscar Wilde, a person
                  who observes his own failure with ironic distance and regards the difficulties that beset his life
                  with detachment and humor.
                </p>
              </td>
            <tr>
              <th style="font-size: 20px;">Make a booking:</th>
              <td>
                <p>Click the time to go to booking form</p>
                <div><input type="button" value="WED">
                  <a href="#bookingform"><input type="button" value="09:00"></a></div>
                <div><input type="button" value="THU">
                  <a href="#bookingform"><input type="button" value="12:00"></a></div>
                <div><input type="button" value="FRI">
                  <a href="#bookingform"><input type="button" value="15:00"></a></div>
                <div><input type="button" value="SAT">
                  <a href="#bookingform"><input type="button" value="18:00"></a></div>
                <div><input type="button" value="SUN">
                  <a href="#bookingform"><input type="button" value="21:00"></a></div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <br>

    <noscript>For full functionality of this page it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com" target="_blank"> instructions how to enable JavaScript in your web browser</a></noscript>

    <div id="section" class="jumbotron text-center">
      <h2 id="prices">PRICES</h2>
    </div>
    <div class="PriceSection">
      <table class="table table-sm table-warning table-striped" id="PriceTable">
        <thread>
          <tr>
            <th>Seat Type</th>
            <th>Seat Code</th>
            <th>Discount at 12pm on Monday to Friday</th>
            <th>All other times</th>
          </tr>
        </thread>
        <tbody>
          <tr>
            <td>Standard Adult</td>
            <td>STA</td>
            <td>15.84</td>
            <td>19.80</td>
          </tr>
          <tr>
            <td>Standard Concession</td>
            <td>STP</td>
            <td>14.00</td>
            <td>17.50</td>
          </tr>
          <tr>
            <td>Standard Child</td>
            <td>STC</td>
            <td>12.24</td>
            <td>15.30</td>
          </tr>
          <tr>
            <td>First Class Adult</td>
            <td>FCA</td>
            <td>24.00</td>
            <td>30.00</td>
          </tr>
          <tr>
            <td>First Class Concession</td>
            <td>FCP</td>
            <td>21.60</td>
            <td>27.00</td>
          </tr>
          <tr>
            <td>First Class Child</td>
            <td>FCC</td>
            <td>19.20</td>
            <td>24.00</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div id="section" class="jumbotron text-center">
      <h2 id="bookingform">Booking Form</h2>
    </div>

    <div style="background-color: blanchedalmond" class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="receipt.php" method='POST'>
            <label style="font-size: 30px;"> </label>
            Movie Title: <select name="movieid" id="movieid">
              <option value="blank" selected disabled>Please Select</option>
              <option value="Avengers">Avengers</option>
              <option value="Dumbo">Dumbo</option>
              <option value="Top End Wedding">Top End Wedding</option>
              <option value="Happy Prince">Happy Prince</option>
            </select><br><br>
            <label id="demo1" style="font-size: 30px;"></label>
            Movie Day: <select name="movieday" id="movieday">
              <option value="blank" selected disabled>Please Select</option>
              <option value="MON">MON</option>
              <option value="TUE">TUE</option>
              <option value="WED">WED</option>
              <option value="THU">THU</option>
              <option value="FRI">FRI</option>
              <option value="SAT">SAT</option>
              <option value="SUN">SUN</option>
            </select> <br><br>
            <label for="moviehour" id="demo2" style="font-size: 30px;"></label>
            Movie Hour:
            <select name="moviehour" id="moviehour">
              <option value="blank" selected disabled>Please Select</option>
              <option value="T12">T12</option>
              <option value="T15">T15</option>
              <option value="T18">T18</option>
              <option value="T21">T21</option>
            </select>
            <br><br>
            <label>
              <h5>Standard Seat</h5>
            </label>
            <br>
            <label>SeatsSTP</label>
            <select name="seatsSTA" id="seats-STA">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br>
            <label>SeatsSTP</label>
            <select name="seatsSTP" id="seats-STP">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br>
            <label>SeatsSTC</label>
            <select name="seatsSTC" id="seats-STC">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br><br>
            <label>
              <h5>First Class Seat</h5>
            </label>
            <br>
            <label>SeatsFCA</label>
            <select name="seatsFCA" id="seats-FCA">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br>
            <label>SeatsFCP</label>
            <select name="seatsFCP" id="seats-FCP">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br>
            <label>SeatsFCC</label>
            <select name="seatsFCC" id="seats-FCC">
              <option value="blank" selected disabled>Please Select</option>
              <option value="">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
            </select><br><br>
          </form>
        </div>

        <div class="col-md-6">
          <form action="receipt.php" method="POST">
            <br><br>
            <label>
              <h4>Customer Information</h4>
            </label>
            <br>
            <div>Name <input type="text" name="custname" id="name" pattern="^[a-zA-Z\-.,' ]{1,100}$" placeholder="Nhat Nguyen" >
              <span class="text-danger"><?php echo $name_error; ?></span> </div>
            <br>
            <div>Email <input type="text" name="custemail" id="email" pattern="^[a-zA-Z0-9\-.,'@ ]{1,100}$" placeholder="s3765963@gmail.com">
              <span class="text-danger"><?php echo $email_error; ?></span>
            </div>
            <br>
            <div>Mobile <input type="tel" name="custmobile" id="mobile" pattern="^(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}$" placeholder="(04)/04/+614 xxxx xxxx">
              <span class="text-danger"><?php echo $mobile_error; ?></span>
            </div>
            <br>
            <div>Credit Card <input type="text" name="custcard" id="card" minlength="14" maxlength="19" pattern="^\d{4}[ ]?\d{4}[ ]?\d{4}[ ]?\d{4}$" placeholder="xxxx xxxx xxxx xxxx" >
              <span class="text-danger"><?php echo $credit_error; ?></span>
            </div>
            <br>
            <label>CustExpiry</label>
            <select name="custexpiryYear" id="Year">
              <option value="" selected disabled>YYYY</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
            </select>
            <select name="custexpiryMonth" id="Month">
              <option value="" selected disabled>MM</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <br>
              <span class="text-danger"><?php echo $expiryYear_error; ?></span>
              <span class="text-danger"><?php echo $expiryMonth_error; ?></span>
              <br>
            </select><br><br>
            <!-- <p name="dis[count]" id="discount" style="color: red;"></p> -->
            <p>Filling the form and click book to see more details about prices</p><br>
            <input type="submit" value='Book' />
            <br><br>
          </form>
          </div>
        
        <input type="submit" value='Reset book' onclick="window.location.href='index-fallback.php'">
        <a href="#nowshowing"><input type="submit" value='Back to nowshowing'></a> 
      </div>
    </div>
    


    <article id='Website Under Construction' style="text-align: center;">
      <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
      <img src='https://cdn.pixabay.com/photo/2017/06/20/08/12/maintenance-2422173_1280.png' style="width: 600px;" alt='Website Under Construction' />
    </article>
  </main>

  <footer>
    <div>&copy;
      <script>
        document.write(new Date().getFullYear());
      </script> Nhat Nguyen (s3765963), Khoa Tran (s3698991), and Group Name: Group 3 N&K. Last modified
      ?= date ("Y F d H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web
      Programming course at RMIT University in Melbourne, Australia.</div>
    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
  </footer>
</body>

</html>
