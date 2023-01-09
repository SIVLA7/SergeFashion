<nav id="mobile-nav" >
   <ul class="mobile-menu">
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Trading instruments</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="instruments.php?param=Forex">Currencies</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Metals_Energy">Metals and Energy</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Indices">Indices</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Shares">Shares</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Commodities">Commodities</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Cryptocurrencies">Cryptocurrencies</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Tools</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="blog.php">Blog</a></li>
            <li class="mobile-sub-item"><a href="calendar.php">Calendar</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Company</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="about.php">About Us</a></li>
            <li class="mobile-sub-item"><a href="legal-doc.php">Regulations & Licenses</a></li>
            <li class="mobile-sub-item"><a href="contact.php">Contact Us</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown mobile-flag-dropdown flag-dropdown">
        <?php include_once '../common/php/lang_switch_mob.php'; ?>
      </li>
   </ul>
   <div class="mobile-header">
      <?php include_once '../common/php/mob-logo.php'; ?>
      <span class="mobile-login mobile-header-btn">
        <a class="mobile-nav-btn" href="https://my.startfx.com/en-us/login.aspx">
          <span>Login</span>
        </a>
      </span>
      <div class="mobile-btn-wrapper">
         <span class="mobile-visa-btn mobile-header-btn">
           <a href="uniteller.php" class="mobile-nav-btn">
             <span class="mobile-visa-btn">
             <img class="mobile-visa-static" src="../common/images/logo/visa_btn.png" alt="">
             <img class="mobile-visa-hover" src="../common/images/logo/visa_btn_hover.png" alt="">
             </span>
           </a>
         </span>
         <span class="mobile-signUp mobile-header-btn btn-signUp">
           <a href="https://my.startfx.com/en-us/signup.aspx" class="mobile-nav-btn btn btn-sm mobile-btn cover-btn">
             <span>Sign Up</span>
           </a>
         </span>
      </div>
      <span class="mobile-menu-btn">
        <a href="#" class="mobile-dropdown-btn btn btn-lg cover-btn">
          <span>Start trading now</span>
        </a>
      </span>
   </div>
</nav>
