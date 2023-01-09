<nav class="menu" style="display: block;">
   <ul>
      <li class="nav-dropdown">
          <a class="nav-item" href="#">Торговые активы</a>
         <ul class="nav-main-dropdown">
            <li>
               <a href="instruments.php?param=Forex">Валютные пары</a>
            </li>
            <li>
               <a href="instruments.php?param=Metals_Energy">Металлы и энергия</a>
            </li>
            <li>
               <a href="instruments.php?param=Indices">Индексы</a>
            </li>
            <li>
               <a href="instruments.php?param=Shares">Акции</a>
            </li>
            <li>
               <a href="instruments.php?param=Commodities">Товары</a>
            </li>
            <li>
               <a href="instruments.php?param=Cryptocurrencies">Криптовалюты</a>
            </li>
         </ul>
      </li>
      <li class="nav-dropdown">
         <a class="nav-item" href="#">Инструменты</a>
         <ul class="nav-main-dropdown">
            <li>
               <a href="blog.php">Блог</a>
            </li>
            <li>
               <a href="calendar.php">Календарь</a>
            </li>
         </ul>
      </li>
      <li class="nav-dropdown">
         <a class="nav-item" href="#">Компания</a>
         <ul class="nav-main-dropdown dropdown-md">
            <li>
               <a href="about.php">О компании</a>
            </li>
            <li>
               <a href="legal-doc.php">Правила и лицензии</a>
            </li>
            <li>
               <a href="contact.php">Свяжитесь с нами</a>
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
         <span>Вход</span>
         </a>
      </li>
      <li class="header-btn btn-signUp">
         <a href="#" class="btn btn-sm cover-btn ">
         <span>Регистрация</span>
         </a>
      </li>
   </ul>
</nav>
