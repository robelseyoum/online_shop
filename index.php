<?php 

require_once 'app/init.php'; 

/*
echo "<pre>";
print_r($Categories->get_categories());
echo "</pre>"; */
$category_nav = $Categories->create_category_nav('home');
$Template->set_data('page_nav', $category_nav);

 $Template->load('app/views/v_public_home.php', 'Welcome'); 

 ?>