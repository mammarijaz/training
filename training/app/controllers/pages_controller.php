<?php
  class PagesController {
    public function home() {
      $first_name = 'Jon';
      $last_name  = 'Snow';
      var_dump("i am here");

    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>