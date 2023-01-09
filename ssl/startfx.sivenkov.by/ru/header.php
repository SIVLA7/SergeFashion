<?php include_once '../common/php/config.php'; ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php if(!empty($single_seo)) { ?>
        <meta property="fb:app_id" content="966242223397117" />
        <meta name="title" content="<?php echo $single_seo["title"] ?>" />
        <meta name="description" content="<?php echo $single_seo["description"] ?>" />
        <meta name="type" content="website" />
        <meta name="og:type" content="website" />
        <meta property="og:title" content="<?php echo $single_seo["og_title"]; ?>" />
        <meta property="og:description" content="<?php echo $single_seo["og_description"]; ?>" />
        <meta property="og:image" content="<?php echo $single_seo["og_image"] ?>" />        
        <meta property="vk:image"  content="<?php echo $single_seo["og_image"] ?>" />
        <meta property="og:image:alt" content="logo" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:url" content= "https://startfx.com/ru/index.php" />
      <?php } ?>
      <title>StartFX</title>
      <link rel="stylesheet" href="../common/css/bootstrap.min.css">
      <link rel="stylesheet" href="../common/css/animate.min.css">
      <link rel="stylesheet" href="../common/css/font-awesome.min.css">
      <link rel="stylesheet" href="../common/css/header.css">
      <link rel="stylesheet" href="../common/css/footer.css">
      <link rel="stylesheet" href="../common/css/buttons.css">
      <link rel="stylesheet" href="../common/css/main.css">
      
   </head>
   <body>
      <header class="header header-style-<?php echo $style_url; ?> megamenu-container fixed-header sticky-header">
         <div class="container d-none d-lg-block">
            <div class="row">
               <div class="col-lg-12">
                  <div class="header-inner">
                     <?php include_once '../common/php/logo.php'; ?>
                     <?php include_once 'desktop-menu.php'; ?>
                  </div>
               </div>
            </div>
         </div>
         <?php include_once 'mobile-menu.php'; ?>
      </header>
