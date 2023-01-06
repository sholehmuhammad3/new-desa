<?php  defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $bg_header = $latar_website ? base_url($latar_website) : base_url($this->theme_folder.'/'.$this->theme .'/assets/images/header-bg.jpg') ?>

<div class="">
  <header class="bg-center bg-cover bg-no-repeat relative text-white fixed">
    <div class="absolute bg-white bg-opacity-60 top-0 left-0 right-0 h-full">
    </div>

    <?php $this->load->view($folder_themes .'/commons/category_menu') ?>

  </header>
  <?php $this->load->view($folder_themes .'/commons/main_menu') ?>
  <?php $this->load->view($folder_themes .'/commons/mobile_menu') ?>
</div>
