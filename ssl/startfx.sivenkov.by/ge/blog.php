<?php
  include_once 'header.php';
  include_once '../server/db.php';
  include_once '../server/blog.php';
  $blog = new Blog();
  if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
  } else {
    $pageno = 1;
  }
  $records_per_page = 3;
  $offset      = ($pageno-1) * $records_per_page;
  $countRows   = $blog->countRows();
  $total_pages = ceil($countRows / $records_per_page);
  $blogArr = $blog->getAllBlog('en', $offset, $records_per_page);
?>
<link rel="stylesheet" href="../common/css/blog.css">
<section class="section section-blog">
    <div class="container">
        <h1 class="section-blog-title section-title title">დღიური</h1>
        <div class="post-row js-scroll-block row">
          <?php
            foreach($blogArr as $item) { ?>
              <div class="post-col col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="blog_box">
                  <div class="post-item post-image">
                    <img src="https://admin.startfx.com/uploads/<?php echo $item['img_small']; ?>" alt="">
                  </div>
                  <h6 class="post-item post-date"><?php echo date("d/m/Y", strtotime($item['date'])); ?></h6>
                  <h3 class="post-item post-title title"><?php echo $item['title']; ?></h3>
                  <div class="post-item post-content"><?php echo $item['short']; ?></div>
                </div>
                <a href="blog-post.php?id=<?php echo $item['id']; ?>" class="text-btn btn-move text-uppercase">წაიკითხე მეტი</a>
              </div>
          <?php } ?>
        </div>
        <div class="pagination-row row">
          <div class="col-xl-12 col-12">
            <div class="blog-pagination text-center">
              <ul class="pagination">
                <!-- <li><a href="?pageno=1">First</a></li> -->
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">წინა</a>
                </li>
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">შემდეგი</a>
                </li>
                <!-- <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li> -->
            </div>
          </div>
        </div>
    </div>
</section>
<?php include_once 'btn-call.php'; ?>
<?php include_once 'footer.php'; ?>
