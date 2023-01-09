<nav id="mobile-nav" >
   <ul class="mobile-menu">
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">სავაჭრო ინსტრუმენტები</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="instruments.php?param=Forex">ფორექსი</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Metals_Energy">ლითონები და ენერგია</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Indices">მაჩვენებლები</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Shares">აქციები</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Commodities">საქონელი</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Cryptocurrencies">Cკრიპტოვალუტა</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">ინსტრუმენტები</a>
         <ul class="mobile-sub-dropdown">
           <li class="mobile-sub-item"><a href="blog.php">ბლოგი</a></li>
           <li class="mobile-sub-item"><a href="calendar.php">ეკონომიკური კალენდარი</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">კომპანია</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="about.php">კომპანიის შესახებ</a></li>
            <li class="mobile-sub-item"><a href="legal-doc.php">წესები და ლიცენზიები</a></li>
            <li class="mobile-sub-item"><a href="contact.php">დაგვეკონტაქტეთ</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown mobile-flag-dropdown flag-dropdown">
        <?php include_once '../common/php/lang_switch_mob.php'; ?>
      </li>
   </ul>
   <div class="mobile-header">
      <?php include_once '../common/php/mob-logo.php'; ?>
      <span class="mobile-login mobile-header-btn">
        <a class="mobile-nav-btn" href="https://my.startfx.com/ka-ge/login.aspx">
          <span>შესვლა</span>
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
           <a href="https://my.startfx.com/ka-ge/signup.aspx" class="mobile-nav-btn btn btn-sm mobile-btn cover-btn">
             <span>რეგისტრაცია</span>
           </a>
         </span>
      </div>
      <span class="mobile-menu-btn">
        <a href="#" class="mobile-dropdown-btn btn btn-lg cover-btn">
          <span>დაიწყეთ ვაჭრობა ახლავე</span>
        </a>
      </span>
   </div>
</nav>
