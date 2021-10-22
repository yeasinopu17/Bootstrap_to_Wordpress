<!--  Instructor
======================-->
<section id="instructor" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="fs-4"><?php echo $args['instructor_section_title']; ?>
                            <small class="text-muted"><?php echo $args['instructor_name']; ?></small>
                        </h2>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://www.facebook.com/<?php echo $args['facebook_username']; ?>/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/<?php echo $args['twiter_username']; ?>" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                        <a style="color: #e1857b" href="https://www.facebook.com/profile.php?id=100002550706270" target="_blank"><i class="fab fa-google-plus fa-2x"></i></a>
                    </div>
                </div>
                <p class="h4 text-start"><?php echo $args['bio_excerpt']; ?></p>
                <p class="lead text-justified"><?php echo $args['full_bio']; ?></p>
                <hr />
                <h3>The Numbers <small class="text-muted">they don't lie</small></h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content align"><?php echo $args['nof_students']; ?>+ <span>Students</span></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content"><?php echo $args['nof_reviews']; ?>+ <span>Reviews</span></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="num d-flex align-items-center justify-content-center">
                            <div class="num-content"><?php echo $args['nof_courses']; ?> <span>Courses</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>