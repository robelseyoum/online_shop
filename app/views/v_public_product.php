<?php require_once 'includes/public_header.php'; ?>


<div id="content">

    <img src="<?php $this->get_data('prod_image'); ?>" alt=" <?php $this->get_data('prod_name'); ?>" class="product_image">
    
    <h2> <?php $this->get_data('prod_name'); ?></h2>
    
    <div class="price">
       £<?php $this->get_data('prod_price'); ?>
    </div>
    
    <div class="description">
        <?php $this->get_data('prod_description'); ?>
    </div>

    <a href="cart?id=<?php $this->get_data('prod_id'); ?>" class="button">
        Add to cart
    </a>
    
</div>


<?php require_once 'includes/public_footer.php'; ?>