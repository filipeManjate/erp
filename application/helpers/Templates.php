<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Templates {

  public function loadHeaderOptions($page_title='SKOOL', $navigation=true, $meta='', $metadescription='') {
    $data = array(
      'page_title' => $page_title,
      'headerNavigation' => $navigation,
      'meta' => $meta,
      'metadescription' => $metadescription
    );
    return $data;
  }
