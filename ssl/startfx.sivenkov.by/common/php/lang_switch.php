<?php
  switch($current_language) {
    case 'en':
      echo '<a class="nav-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
              <img class="header-icon lang-active" src="../common/images/en_flag.png" alt="">
            </a>
            <ul class="dropdown-languages nav-main-dropdown">
               <li>
                  <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
                  <img class="header-icon" src="../common/images/ru_flag.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
                  <img class="header-icon" src="../common/images/ge_flag.png" alt="">
                  </a>
               </li>
            </ul>';
      break;
    case 'ru':
      echo '<a class="nav-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
              <img class="header-icon lang-active" src="../common/images/ru_flag.png" alt="">
            </a>
            <ul class="dropdown-languages nav-main-dropdown">
               <li>
                  <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
                  <img class="header-icon" src="../common/images/en_flag.png" alt="">
                  </a>
               </li>
               <li>
                  <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
                  <img class="header-icon" src="../common/images/ge_flag.png" alt="">
                  </a>
               </li>
            </ul>';
      break;
    case 'ge':
      echo '<a class="nav-item" href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ge/".$uri_segments[2].'">
            <img class="header-icon lang-active" src="../common/images/ge_flag.png" alt="">
          </a>
          <ul class="dropdown-languages nav-main-dropdown">
             <li>
                <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/en/".$uri_segments[2].'">
                <img class="header-icon" src="../common/images/en_flag.png" alt="">
                </a>
             </li>
             <li>
                <a href="'.$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"]."/ru/".$uri_segments[2].'">
                <img class="header-icon" src="../common/images/ru_flag.png" alt="">
                </a>
             </li>
          </ul>';
      break;
  }
?>
