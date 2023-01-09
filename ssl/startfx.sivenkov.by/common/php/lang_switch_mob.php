<?php
  switch($current_language) {
    case 'en':
     echo '<a class="mobile-nav-item flag-dropdown-item lang-active" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
              <img class="mobile-header-icon" src="../common/images/en_flag.png" alt="">
              <div class="flag-lang">English</div>
           </a>
           <ul class="mobile-dropdown-languages dropdown-languages nav-main-dropdown">
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/ru_flag.png" alt="">
                    <div class="flag-lang">Русский</div>
                 </a>
              </li>
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/ge_flag.png" alt="">
                    <div class="flag-lang">ქართული</div>
                 </a>
              </li>
           </ul>';
     break;
   case 'ru':
     echo '<a class="mobile-nav-item flag-dropdown-item lang-active" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
              <img class="mobile-header-icon" src="../common/images/ru_flag.png" alt="">
              <div class="flag-lang">Русский</div>
           </a>
           <ul class="mobile-dropdown-languages dropdown-languages nav-main-dropdown">
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/en_flag.png" alt="">
                    <div class="flag-lang">English</div>
                 </a>
              </li>
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/ge_flag.png" alt="">
                    <div class="flag-lang">ქართული</div>
                 </a>
              </li>
           </ul>';
     break;
   case 'ge':
     echo '<a class="mobile-nav-item flag-dropdown-item lang-active" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
              <img class="mobile-header-icon" src="../common/images/ge_flag.png" alt="">
              <div class="flag-lang">ქართული</div>
           </a>
           <ul class="mobile-dropdown-languages dropdown-languages nav-main-dropdown">
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/en_flag.png" alt="">
                    <div class="flag-lang">English</div>
                 </a>
              </li>
              <li>
                 <a class="flag-dropdown-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
                    <img class="mobile-header-icon" src="../common/images/ru_flag.png" alt="">
                    <div class="flag-lang">Русский</div>
                 </a>
              </li>
           </ul>';
     break;
   }
 ?>
