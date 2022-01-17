<?php
require_once('controllers/base_controller.php');
class DefaultController extends BaseController {
  function __construct() {
    $this->folder = 'default';
  }
  public function home() {
    $data = array('name'=>'NguyenVu', 'email'=>'nguyenvu270901@gmail.com');
    $this->render('home', $data);
  }
  public function error() {
    $this->render('error');
  }
}
?>