<!-- Who Benefits 
======================-->
<section id="who-benefits" class="bg-light">
    <div class="container">
        <div class="section-header">

            <!-- check if image exits -->
            <?php if (!empty($args['who_img'])) : ?>
                <img src="<?php echo $args['who_img']['url'] ?>" alt="<?php echo $args['who_img']['alt'] ?>" />
            <?php endif; ?>
            <h2><?php echo $args['who_section_title']; ?></h2>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <?php echo $args['who_body']; ?>
            </div>
        </div>
    </div>
</section>