<?php 
   session_start(); 
if(isset($_SESSION['username'])){
}else{
   header("Location: signup.html");
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Data web</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        
        <style>
        #boxes {
        content: "";
        display: table;
        clear: both;
      }

      #column1 {
        /* background-color: #a1edcc; */
        float: left;
        height: 1070px;
        width: 20%;
        padding-left: 10px;
        font-weight: 600;
        font-size: 15px;
        text-align: center;
        margin-top: 2.5%;
        margin-left: 3%;
        margin-right: 2%;
        /* background: white; */
        border-radius: 10px;
        box-sizing: border-box;
        z-index: 2;
        text-align: center;
      }
      
      #column2 {
        /* background-color: #a0e9ed; */
        float: right;
        height: 1000px;
        width: 23%;
        padding: 0 10px;
        width: 43%;
      }

      h3{
         margin-left: -30px;
         font-size: 26px;
         font-weight: bold;
      }
        </style>
      
   </head>
   <!-- body -->
   <body style=" background-color: #112D4C" class="main-layout">
      <!-- loader  -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
      <!-- header -->
      
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <!--li class="nav-item">
                              <a class="nav-link" href="#"> About  </a>
                           </li-->
                           <!-- <li class="nav-item">
                              <a class="nav-link" href="#service"> Service</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#contact">Contact</a>
                           </li> -->
                           <li class="nav-item">
                              <a class="nav-link">Welcome <?php echo $_SESSION['username']; ?></a>
                           </li>
                           <li class="nav-item active">
                              <a class="nav-link" href="#">Home</a>
                           </li>
                              <li class="nav-item">
                                 <a id = 'logout' class="nav-link" href="logout.php">Log out</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <!-- <main id="boxes"> -->

    <!-- <div id="column1">
        <form method = "POST" action="action_page.php">
            <label for="myfile">Select an excel file:</label>
            <input type="file" id="myfile" name="myfile"><br><br>
            <input type="submit">
        </form>
    </div>   -->

      <div id="column1">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style='margin: 100px auto;'>
                  <div class="Services-box">
                     <i><img src="images/service1.png" alt="#" width = "180%" style="margin-bottom: 20px;"/></i>
                     <h3> Summarized Presentation</h3>
                     <!-- <p>Present data precisely and accurately using your preferred way of visulaisation</p> -->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style='margin: 100px auto;'>
                  <div class="Services-box">
                     <i><img src="images/service2.png" alt="#" width = "180%" style="margin-bottom: 20px;"/></i>
                     <h3>Calculating Desnsity</h3>
                     <!-- <p>Visualise density of data at a given point in time or using other parameters</p> -->
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" style='margin: 100px auto;'>
                  <div class="Services-box">
                     <i><img src="images/service3.png" alt="#" width = "180%" style="margin-bottom: 20px;"/></i>
                     <h3>Discovering crucial measures</h3>
                     <!-- <p>Discover measures that impact your business and help it grow</p> -->
                  </div>
               </div>
   </div>
    <div id="column2">
        <iframe style="padding: 2px; border: 5px solid #ffffff; margin-top: 50px; margin-right: 75px; margin-bottom: 10px;" align ="right" src ="http://localhost:8501/" height="100%" width="1300" title="Iframe Example">
        </iframe>
    </div>

   <div style="border: 10px 10px;">

   </div>

<!-- </main> -->
      
      