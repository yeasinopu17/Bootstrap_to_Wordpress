<?php
/*
 Template Name: Fontpage
*/
get_header();

$price = get_fields();
echo esc_html(var_dump($price));
?>



<!-- hero section 
    ======================-->
<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-badge.png" alt="Bootstrp to Wp" />
                </div>
                <div class="col-md-7 hero-text">
                    <h1 class="wow animate__zoomInDown" data-wow-duration="1s"><?php bloginfo('name') ?></h1>
                    <p class="lead">
                        <?php esc_html(bloginfo('description')); ?>
                    </p>
                    <div id="price-timeline">
                        <div class="price active">
                            <h4>Pre-Lunch Price <small>End Soon</small></h4>
                            <span><?php echo $price['prelaunch_price']; ?></span>
                        </div>
                        <div class="price">
                            <h4>Lunch Price <small>Coming Soon</small></h4>
                            <span><?php echo $price['launch_price']; ?></span>
                        </div>
                        <div class="price">
                            <h4>Final Price <small>Coming Soon</small></h4>
                            <span><?php echo $price['final_price']; ?></span>
                        </div>
                        <p class="wow animate__heartBeat mt-5" data-wow-duration="2s" data-wow-iteration="5">
                            <a class="btn btn-lg btn-danger" href="<?php echo $price['course_url']; ?>" role="button" target="_blank"><?php echo $price['button_text']; ?> <i class="fas fa-arrow-circle-right"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>

<!-- OPT in section 
======================-->
<?php get_template_part('template_parts/content', 'optin', $price); ?>

<!-- Boost your income 
======================-->
<section id="boost-income">
    <div class="container">
        <div class="section-header">

            <!-- check if image exits -->
            <?php if (!empty($price['income_feature_img'])) : ?>
                <img src="<?php echo $price['income_feature_img']['url'] ?>" alt="<?php echo $price['income_feature_img']['alt'] ?>" />
            <?php endif; ?>
            <h2><?php echo $price['income_section_title']; ?></h2>
        </div>
        <p class="lead text-center">
            <?php echo $price['income_section_description']; ?>
        </p>
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo $price['income_section_r1_title']; ?></h3>
                <p><?php echo $price['income_section_r1_des']; ?></p>
            </div>
            <div class="col-sm-6">
                <h3><?php echo $price['income_section_r2_title']; ?></h3>
                <p><?php echo $price['income_section_r2_des']; ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Who Benefits 
    ======================-->
<section id="who-benefits" class="bg-light">
    <div class="container">
        <div class="section-header">

            <!-- check if image exits -->
            <?php if (!empty($price['who_img'])) : ?>
                <img src="<?php echo $price['who_img']['url'] ?>" alt="<?php echo $price['who_img']['alt'] ?>" />
            <?php endif; ?>
            <h2><?php echo $price['who_section_title']; ?></h2>
        </div>

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <?php echo $price['who_body']; ?>
            </div>
        </div>
    </div>
</section>

<!-- Course feature 
    ======================-->
<section id="course-features" class="text-center">
    <div class="container">
        <div class="section-header">
            <img class="wow animate__backInDown" data-wow-duration="1s" data-wow-offset="3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-rocket.png" alt="" />
            <h2 class="wow animate__backInRight" data-wow-duration="1s" data-wow-offset="3">Course Features</h2>
        </div>
        <div class="row">
            <div class="col-sm-2 mb-5">
                <i class="fas fa-laptop fa-4x"></i>
                <h4>Lifetime access of 80+ lecture</h4>
            </div>
            <div class="col-sm-2 mb-5">
                <i class="far fa-clock fa-4x"></i>
                <h4>10+ hours of HD video</h4>
            </div>
            <div class="col-sm-2 mb-sm-5">
                <i class="fas fa-tablet-alt fa-4x"></i>
                <h4>Lifetime access of 80+ lecture</h4>
            </div>
            <div class="col-sm-2 mb-sm-5">
                <i class="far fa-calendar-alt fa-4x"></i>
                <h4>30 day money back guarantee</h4>
            </div>
            <div class="col-sm-2 mb-sm-5">
                <i class="fas fa-broadcast-tower fa-4x"></i>
                <h4>Huge and friendly community</h4>
            </div>
            <div class="col-sm-2 mb-sm-5">
                <i class="fas fa-chalkboard-teacher fa-4x"></i>
                <h4>Huge and friendly community</h4>
            </div>
        </div>
    </div>
</section>

<!-- Project Feature  
    ======================-->
<section id="project-features " class="text-center">
    <div class="container">
        <div class="section-header">
            <h2>Project Features</h2>
            <p class="lead">
                Throughout this entire course, <strong class="fw-bold">you</strong> work towards building an incredibly
                beautiful website. Want to see the website you are going to build? <em>You're looking at it!</em> The
                website you're using right now is the website you will have built entirely by yourself, by the end of this
                course.
            </p>
        </div>
        <div class="row">
            <div class="wow animate__bounceInLeft col-sm-4 shadow bg-white p-4" data-wow-duration="2s" data-wow-offset="10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-design.png" alt="" />
                <h3>Sexy & Modern Design</h3>
                <p>You get to work with a modern, professional quality design & layout.</p>
            </div>
            <div class="wow animate__bounceInUp col-sm-4 shadow bg-white p-4" data-wow-duration="2s" data-wow-offset="10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-code.png" alt="" />
                <h3>Quality HTML5 & CSS3</h3>
                <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 & CSS3.</p>
            </div>
            <div class="wow animate__bounceInRight col-sm-4 shadow bg-white p-4" data-wow-duration="2s" data-wow-offset="10">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-cms.png" alt="" />
                <h3>Easy-to-use CMS</h3>
                <p>
                    Allow your clients to easily update their websites by converting your static websites to dynamic websites,
                    using WordPress.
                </p>
            </div>
        </div>
    </div>
</section>

<!--  Video feature
    ======================-->
<section id="featurette">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-white">Watch the course Introductions.</h2>
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/fN21oOdni_c" title="Beautiful BD" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Instructor
    ======================-->
<section id="instructor" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="fs-4">Your Instructor <small class="text-muted">Brad Hussey</small></h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.facebook.com/profile.php?id=100002550706270" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100002550706270" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a style="color: #e1857b" href="https://www.facebook.com/profile.php?id=100002550706270" target="_blank"><i class="fab fa-google-plus fa-2x"></i></a>
                    </div>
                </div>
                <p class="lead text-justified">
                    A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer,
                    blogger and digital entrepreneur. Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek
                    to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a
                    spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.
                    Brad's determination and love for what he does has landed him in some pretty interesting places with some
                    neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big
                    & small, across the Americas. Brad builds custom websites, and provides design solutions for a wide-array
                    of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life
                    to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of
                    amazing people desiring to master their craft.
                </p>
                <hr />
                <h3>The Numbers <small class="text-muted">they don't lie</small></h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content align">41000+ <span>Students</span></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content">5068+ <span>Reviews</span></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content">8 <span>Courses</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Testimonials
    ======================-->
<section id="kudos">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h2 class="text-center">What poeple say about brad.</h2>

                <!-- testimonial-1 
            ======================-->
                <div class="wow animate__lightSpeedInLeft row testimonial shadow bg-white p-3" data-wow-duration="2s" data-wow-offset="10">
                    <div class="col-sm-4">
                        <img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/brennan.jpg" alt="" />
                    </div>
                    <div class="col-sm-8">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus iste non nobis, ab alias maxime
                                    unde quibusdam ex consectetur, repudiandae laborum dolore quaerat nostrum perferendis vitae
                                    suscipit odio dolorum. Sequi?
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer"><cite title="Source Title">YesinOpu</cite></figcaption>
                        </figure>
                    </div>
                </div>
                <!-- testimonial-2 
            ======================-->
                <div class="wow animate__lightSpeedInRight row testimonial mt-3 shadow bg-white p-3" data-wow-duration="2s" data-wow-offset="10">
                    <div class="col-sm-4">
                        <img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/ben.png" alt="" />
                    </div>
                    <div class="col-sm-8">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus iste non nobis, ab alias maxime
                                    unde quibusdam ex consectetur, repudiandae laborum dolore quaerat nostrum perferendis vitae
                                    suscipit odio dolorum. Sequi?
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer"><cite title="Source Title">YesinOpu</cite></figcaption>
                        </figure>
                    </div>
                </div>
                <!-- testimonial-3 
            ======================-->
                <div class="wow animate__lightSpeedInLeft row testimonial mt-3 shadow bg-white p-3" data-wow-duration="2s" data-wow-offset="10">
                    <div class="col-sm-4">
                        <img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/ernest.png" alt="" />
                    </div>
                    <div class="col-sm-8">
                        <figure>
                            <blockquote class="blockquote">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus iste non nobis, ab alias maxime
                                    unde quibusdam ex consectetur, repudiandae laborum dolore quaerat nostrum perferendis vitae
                                    suscipit odio dolorum. Sequi?
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer"><cite title="Source Title">YesinOpu</cite></figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// get_sidebar();
get_footer();
