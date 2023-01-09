<nav id="mobile-nav" >
   <ul class="mobile-menu">
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Торговые активы</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="instruments.php?param=Forex">Валютные пары</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Metals_Energy">Металлы и энергия</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Indices">Индексы</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Shares">Акции</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Commodities">Товары</a></li>
            <li class="mobile-sub-item"><a href="instruments.php?param=Cryptocurrencies">Криптовалюты</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Инструменты</a>
         <ul class="mobile-sub-dropdown">
           <li class="mobile-sub-item"><a href="blog.php">Блог</a></li>
           <li class="mobile-sub-item"><a href="calendar.php">Календарь</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown">
         <a class="mobile-nav-item" href="#">Компания</a>
         <ul class="mobile-sub-dropdown">
            <li class="mobile-sub-item"><a href="about.php">О компании</a></li>
            <li class="mobile-sub-item"><a href="legal-doc.php">Правила и лицензии</a></li>
            <li class="mobile-sub-item"><a href="contact.php">Свяжитесь с нами</a></li>
         </ul>
      </li>
      <li class="mobile-nav-dropdown mobile-flag-dropdown flag-dropdown">
        <?php include_once '../common/php/lang_switch_mob.php'; ?>
      </li>
   </ul>
   <div class="mobile-header">
      <?php include_once '../common/php/mob-logo.php'; ?>
      <span class="mobile-login mobile-header-btn">
        <a class="mobile-nav-btn" href="https://my.startfx.com/ru-ru/login.aspx">
          <span>Войти</span>
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
           <a href="https://my.startfx.com/ru-ru/signup.aspx" class="mobile-nav-btn btn btn-sm mobile-btn cover-btn">
             <span>Регистрация</span>
           </a>
         </span>
      </div>
      <span class="mobile-menu-btn">
        <a href="https://my.startfx.com/ru-ru/signup.aspx" class="mobile-dropdown-btn btn btn-lg cover-btn">
          <span>Начните торговлю сейчас</span>
        </a>
      </span>
   </div>
</nav>
