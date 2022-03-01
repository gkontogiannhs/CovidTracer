<?php
   session_start();
   if(!isset($_SESSION['email'])){
     header('location:../../login/login.php');
   }
   ?>

<!DOCTYPE HTML>
<html>
   <head>
      <title>Calendar</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width" , initial-scale=1.0 />
      <!-- ajax and jqueery -->
      <script src="https://unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
      <!-- my styles and js -->
      <link rel="stylesheet" href="../common_frame.css">
      <link rel="stylesheet" href="calendar_css.css">
      <script src="../common.js"></script>
      <script src="calendar_js.js"> </script>
   </head>
   <body>
      <!-- section for bar menu-->
      <section id='bar-section'>
         <header>
            <span>
               <a href='../home/home.php'>
                  <img src='../../images/healthy.ico' alt='logo'>
               </a>
            </span>
            <!-- bar menu -->
            <a class="logout" href="../../login/login.php"><button id='logout-btn'>Logout</button></a>
         </header>
      </section>
      <section id='menu-section'>
         <!-- code to load svg elements -->
         <svg style="display:none;">
            <defs>
               <g id="map">
                  <path fill="#90A4AE" d="M16,14.2c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8S17,14.2,16,14.2z M16,0
                     C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16s16-7.2,16-16C32,7.2,24.8,0,16,0z M19.5,19.5L6.4,25.6l6.1-13.1l13.1-6.1L19.5,19.5z"/>
               </g>
               <g id="calendar">
                  <path fill="#90A4AE" d="M28.4,3.6h-1.8V0h-3.6v3.6H8.9V0H5.3v3.6H3.6C1.6,3.6,0,5.1,0,7.1L0,32c0,2,1.6,3.6,3.6,3.6h24.9c2,0,3.6-1.6,3.6-3.6V7.1C32,5.1,30.4,3.6,28.4,3.6z M28.4,32H3.6V12.4h24.9V32z M7.1,16H16v8.9H7.1V16z"/>
               </g>
               <g id="profile">
                  <path fill="#90A4AE" d="M42,48H6c-3.3,0-6-2.7-6-6V6c0-3.3,2.7-6,6-6h36c3.3,0,6,2.7,6,6v36C48,45.3,45.3,48,42,48z"/>
                  <path fill="#212121" d="M20.8,35.5v-9.6h6.4v9.6h8V22.7H40L24,8.3L8,22.7h4.8v12.8H20.8z"/>
               </g>
            </defs>
         </svg>
         <!-- all navigation bar links -->
         <nav class="nav__cont">
            <ul class="nav">
               <li class="nav__items ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                     <use xlink:href="#map"></use>
                  </svg>
                  <a href="../home/home.php">Map</a>
               </li>
               <li class="nav__items ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 35.6">
                     <use xlink:href="#calendar"></use>
                  </svg>
                  <a href="calendar.php">Calendar</a>
               </li>
               <li class="nav__items ">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                     <use xlink:href="#profile"></use>
                  </svg>
                  <a href="../profile/profile.php">Profile</a>
               </li>
            </ul>
         </nav>
      </section>
      <!-- table for covid history -->
      <div class='container'>
         <div class='box'>
            <div class='caption'>
               <caption>Covid Outbreaks</caption>
            </div>
               <table id='mycovid-table'>
                  <thead>
                     <tr class="table-head">
                        <th class="column1">Date</th>
                     </tr>
                  </thead>
                  <tbody>
                     <!-- js takes over -->
                  </tbody>
               </table>
         </div>
         <!-- calendar -->
         <div class='box'>
            <div class='caption'>
               <caption>Covid Calendar</caption>
            </div>
               <div class='cal-icon'>
                  <img src='../../images/calendar.ico' alt='calendar icon'>
               </div>
               <input id="datePicker" type="date"  min="<?php echo date('Y-m-d', strtotime(date('Y-m-d'). ' - 6 days')) ?>" max="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>" />
            <div class='btn'>
               <button type='submit' id='covid-btn' onclick='submitCovidDate()'>Submit</button>
            </div>
         </div>
      </div>
   </body>
</html>