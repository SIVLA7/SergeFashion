<?php $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<span id="share-buttons">
  <?php if($blogSingle['language'] == 'ru' || $blogSingle['language'] == 'en' || $blogSingle['language'] == 'ge') {  ?>
    <a href="http://www.facebook.com/sharer.php?u=<?php echo $actual_link; ?>" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
  <?php } ?>
  <?php if($blogSingle['language'] == 'ru' || $blogSingle['language'] == 'en' || $blogSingle['language'] == 'ge') {  ?>
    <a href="https://plus.google.com/share?url=<?php echo $actual_link; ?>" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
    </a>
  <?php } ?>
  <?php if($blogSingle['language'] == 'ru' || $blogSingle['language'] == 'en' || $blogSingle['language'] == 'ge') {  ?>
    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $actual_link; ?>&title=<?php echo $blogSingle["title"]; ?>" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
    </a>
  <?php } ?>
  <?php if($blogSingle['language'] == 'ru') {  ?>
    <a href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $actual_link; ?>&image=https://admin.startfx.com/uploads/<?php echo $blogSingle["img_big"]; ?>" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/odnoklassniki.png" alt="OK" />
    </a>
  <?php } ?>
  <?php if($blogSingle['language'] == 'ru' || $blogSingle['language'] == 'en' || $blogSingle['language'] == 'ge') {  ?>
    <a href="https://twitter.com/share?url=<?php echo $actual_link; ?>&text=<?php echo $blogSingle["title"]; ?>" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
    </a>
  <?php } ?>
  <?php if($blogSingle['language'] == 'ru') {  ?>
    <a href="http://vk.com/share.php?url=<?php echo $actual_link; ?>&image=https://admin.startfx.com/uploads/<?php echo $blogSingle["img_big"]; ?>&title=<?php echo $blogSingle["title"]; ?>&noparse=false" target="_blank">
      <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
    </a>
  <?php } ?>
</span>
