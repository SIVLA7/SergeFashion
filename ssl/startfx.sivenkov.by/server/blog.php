<?php
  class Blog {
    public function getAllBlog($language, $offset, $records_per_page) {
      global $dbh;
      $sth = $dbh->prepare("SELECT * FROM blogs WHERE language =:language AND status = 1 LIMIT $offset, $records_per_page");
      $sth->bindValue(':language', $language, PDO::PARAM_STR);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }
    public function getBlog($id) {
      global $dbh;
      $sth = $dbh->prepare("SELECT * FROM blogs WHERE id =:id");
      $sth->bindValue(':id', $id, PDO::PARAM_INT);
      $sth->execute();
      $result = $sth->fetch(PDO::FETCH_ASSOC);
      return $result;
    }
    public function countRows() {
      global $dbh;
      $sth = $dbh->prepare("SELECT COUNT(*) as count_rows FROM blogs WHERE status = 1");
      $sth->execute();
      $result = $sth->fetchColumn();
      return $result;
    }
  }
?>
