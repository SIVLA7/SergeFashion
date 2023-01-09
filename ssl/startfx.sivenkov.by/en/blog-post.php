<?php
  include_once 'header.php';
  if(isset($_GET['id']) && $_GET['id'] != '') {
    $id = (int)filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
    include_once '../server/db.php';
    include_once '../server/blog.php';
    $blog = new Blog();
    $blogSingle = $blog->getBlog($id);
    $background_img = 'url(https://admin.startfx.com/uploads/'.$blogSingle["img_big"].')';
  }
?>
<link rel="stylesheet" href="../common/css/blog-post.css">
<?php if(isset($_GET['id']) && $_GET['id'] != '') { ?>
<section class="single-post">
  <div class="single-post-image js-scroll-block" style="background-image: <?php echo $background_img; ?>;"></div>
  <div class="single-post-wrapper">
    <div class="container">
      <div class="backTo"><a href="blog.php" class="btn-move">Back to Blogs</a></div>
      <div class="single-post-header row no-gutters">
        <div class="col-lg-7 col-md-9 col-sm-12 col-10">
          <h1 class="single-post-title section-title title"><?php echo $blogSingle['title']; ?></h1>
          <div class="single-post-details">
            <span class="single-post-date post-info"><?php echo date("d/m/Y", strtotime($blogSingle['date'])); ?></span>
          </div>
        </div>
      </div>
      <div class="single-post-content">
        <?php echo $blogSingle['content']; ?>
      </div>
      <div class="single-post-share">
        <span class="share-social-text post-info">Share</span>
        <?php include_once '../common/php/social_links.php'; ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>
<?php include_once 'btn-call.php'; ?>
<?php include_once 'footer.php'; ?>
