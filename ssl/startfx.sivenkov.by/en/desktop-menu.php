<nav class="menu" style="display: block;">
   <ul>
      <li class="nav-dropdown">
         <a class="nav-item" href="#">Trading instruments</a>
         <ul class="nav-main-dropdown">
            <li>
               <a href="instruments.php?param=Forex">Currencies</a>
            </li>
            <li>
               <a href="instruments.php?param=Metals_Energy">Metals and Energy</a>
            </li>
            <li>
               <a href="instruments.php?param=Indices">Indices</a>
            </li>
            <li>
               <a href="instruments.php?param=Shares">Shares</a>
            </li>
            <li>
               <a href="instruments.php?param=Commodities">Commodities</a>
            </li>
            <li>
               <a href="instruments.php?param=Cryptocurrencies">Cryptocurrencies</a>
            </li>
         </ul>
      </li>
      <li class="nav-dropdown">
         <a class="nav-item" href="#">Tools</a>
         <ul class="nav-main-dropdown">
            <li>
               <a href="blog.php">Blog</a>
            </li>
            <li>
               <a href="calendar.php">Calendar</a>
            </li>
            <li>
            </li>
         </ul>
      </li>
      <li class="nav-dropdown">
         <a class="nav-item" href="#">Company</a>
         <ul class="nav-main-dropdown dropdown-md">
            <li>
               <a href="about.php">About Us</a>
            </li>
            <li>
               <a href="legal-doc.php">Regulations & Licenses</a>
            </li>
            <li>
               <a href="contact.php">Contact Us</a>
            </li>
         </ul>
      </li>
      <li class="nav-dropdown flag-dropdown" id="desktop-menu">
        <?php include_once '../common/php/lang_switch.php'; ?>
      </li>
      <li class="header-btn">
         <a class="nav-item" href="uniteller.php">
           <span class="visa-btn">
             <img class="visa-btn-static" src="../common/images/logo/visa_desktop.png" alt="">
             <img class="visa-btn-hover" src="../common/images/logo/visa_desktop_hover.png" alt="">
             <img class="visa-btn-sticky" src="../common/images/logo/visa_desktop_sticky.png" alt="">
           </span>
         </a>
      </li>
      <li class="header-btn">
         <a class="nav-item" href="#">
         <span>Login</span>
         </a>
      </li>
      <li class="header-btn btn-signUp">
         <a href="#" class="btn btn-sm cover-btn ">
         <span>Sign Up</span>
         </a>
      </li>
   </ul>
</nav>
