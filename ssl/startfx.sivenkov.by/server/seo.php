<?php
  class SEO {
    public function getSEO($page, $lang) {
      global $dbh;
      $sth = $dbh->prepare("SELECT * FROM seo WHERE page =:page AND lang =:lang");
      $sth->bindValue(':page', $page, PDO::PARAM_STR);
      $sth->bindValue(':lang', $lang, PDO::PARAM_STR);
      $sth->execute();
      $result = $sth->fetch(PDO::FETCH_ASSOC);
      return $result;
    }
  }
?>
