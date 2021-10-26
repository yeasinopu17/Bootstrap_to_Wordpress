<div class="resource col-sm">
    <div class="p-3 border bg-white border shadow h-100 resource-parent">
        <img src="<?php echo $args['resource_img']['url']; ?>" alt="<?php echo $args['resource_img']['alt']; ?>" class="img-thumbnail mx-auto d-block wow animate__jackInTheBox" data-wow-duration="1s" data-wow-offset="200" />

        <h3><a href="<?php echo $args['resource_url']; ?>"><?php the_title(); ?></a></h3>

        <div class="resource-content pb-4 text-justified mb-2">
            <?php
            if (isset($args['element']) && $args['element'] === 'content') {
                the_content();
            } else {
                the_excerpt();
            }
            ?>
        </div>

        <?php if ($args['add_button']) : ?>
            <a href="<?php echo $args['resource_url']; ?>" class="btn btn-success resource-btn wow animate__heartBeat mt-5" data-wow-duration="2s" data-wow-iteration="5"><?php echo $args['button_text'] ?></a>
        <?php endif; ?>
    </div>
</div>