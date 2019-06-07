<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php $this->get_data('page_title'); ?></title>
    
    <link href="resources/css/style.css" rel="stylesheet" media="all" type="text/css">
</head>
<body class="">
    
    <div id="wrapper">

        <div class="secondarynav">
            <strong>0 items ($0.00) in cart</strong> &nbsp; | &nbsp;
            <a href="<?php echo SITE_PATH; ?>cart.php">Shopping Cart</a>
        </div>

        <h1><?php echo SITE_NAME; ?></h1>
        <ul class="nav">
            <li class="active"><a href="#">All items</a></li>
            <li><a href="#">Category 1</a></li>
        </ul>
</body>
</html>