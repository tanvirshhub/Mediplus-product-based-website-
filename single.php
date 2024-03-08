<!-- start origin code -->

<?php

get_header();

?>
<body>

    <!-- Preloader -->
    <?php  // get_template_part('template-parts/preloader'); ?>
    <!-- End Preloader -->
    
    <!-- Get Pro Button -->
    
    <?php  // get_template_part('template-parts/pro_features'); ?>

    <!-- hero Area -->
    <?php   get_template_part('template-parts/hero'); ?>
    <!-- End hero Area -->

    <!-- Breadcrumbs -->
    <?php   get_template_part('template-parts/breadcrumbs'); ?>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <?php
                        while (have_posts()) : the_post();
                ?>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="single-main">
                                <!-- News Head -->
                                <div class="news-head">
                                <?php the_post_thumbnail('',)?>
                                </div>
                                <!-- News Title -->
                                <h1 class="news-title"><a href="<?php the_permalink();?>"> <?php echo the_title();?>.</a></h1>
                                <!-- Meta -->
                                <div class="meta">
                                    <div class="meta-left">
                                        <span class="author">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo the_author()?></a></span>
                                        <span class="date"><i class="fa fa-clock-o"></i> <?php echo the_date('d M, Y');?></span>
                                    </div>
                                    <div class="meta-right">
                                        <span class="comments"><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number(); ?></a></span>
                                        <span class="views"><i class="fa fa-eye"></i><?php
                                            $postID = get_the_ID();
                                            set_post_views($postID);
                                            $views = get_post_meta($postID, 'post_views_count', true);
                                            ?>
                                            <span class="views"><i class="fa fa-eye"></i><?php echo $views; ?> Views</span>
                                            </span>
                                    </div>
                                </div>
                                <!-- News Text -->
                                <div class="news-text">
                                <?php echo the_content();?>
                                </div>
                                <div class="blog-bottom">
                                    <!-- Social Share -->
                                    <ul class="social-share">
                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <!-- Next Prev -->
                                    <ul class="prev-next">
                                        <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                        <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
                                    <!--/ End Next Prev -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="blog-comments">
                                <h2>All Comments</h2>
                                <div class="comments-body">
                                    <!-- Single Comments -->
                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="img/author1.jpg" alt="#"/>
                                            </div>
                                            <div class="body">
                                                <h4>Afsana Mimi</h4>
                                                <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
                                                <a href="#"><i class="fa fa-reply"></i>replay</a>
                                            </div>
                                        </div>
                                    </div>		
                                    <!--/ End Single Comments -->
                                    <!-- Single Comments -->
                                    <div class="single-comments left">
                                        <div class="main">
                                            <div class="head">
                                                <img src="img/author2.jpg" alt="#"/>
                                            </div>
                                            <div class="body">
                                                <h4>Naimur Rahman</h4>
                                                <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
                                                <a href="#"><i class="fa fa-reply"></i>replay</a>
                                            </div>
                                        </div>
                                    </div>		
                                    <!--/ End Single Comments -->
                                    <!-- Single Comments -->
                                    <div class="single-comments">
                                        <div class="main">
                                            <div class="head">
                                                <img src="img/author3.jpg" alt="#"/>
                                            </div>
                                            <div class="body">
                                                <h4>Suriya Molharta</h4>
                                                <div class="comment-meta"><span class="meta"><i class="fa fa-calendar"></i>March 05, 2019</span><span class="meta"><i class="fa fa-clock-o"></i>03:38 AM</span></div>
                                                <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas</p>
                                                <a href="#"><i class="fa fa-reply"></i>replay</a>
                                            </div>
                                        </div>
                                    </div>		
                                    <!--/ End Single Comments -->											
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="comments-form">
                                <h2>Leave Comments</h2>
                                <!-- Contact Form -->
                                <form class="form" method="post" action="mail/mail.php">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-user"></i>
                                                <input type="text" name="first-name" placeholder="First name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="text" name="last-name" placeholder="Last name" required="required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <i class="fa fa-envelope"></i>
                                                <input type="email" name="email" placeholder="Your Email" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <i class="fa fa-pencil"></i>
                                                <textarea name="message" rows="7" placeholder="Type Your Message Here" ></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">	
                                                <button type="submit" class="btn primary"><i class="fa fa-send"></i>Submit Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--/ End Contact Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="main-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget search">
                            <div class="form">
                                <input type="email" placeholder="Search Here...">
                                <a class="button" href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget category">
                            <h3 class="title">Blog Categories</h3>
                            <ul class="categor-list">
                            <li><a href="#"><?php echo get_the_category_list(', '); ?></a></li>
                                
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>
                            <!-- Single Post -->
                            <?php
            
                        wp_reset_query();

                        
                        $args = array(
                            'post_type'      => 'post', 
                            'posts_per_page' => 3,     
                            'post__not_in'   => array( get_the_ID() ),
                        );

                        $recent_posts_query = new WP_Query( $args );

                        if ( $recent_posts_query->have_posts() ) :
                            while ( $recent_posts_query->have_posts() ) : $recent_posts_query->the_post();
                        
                                ?>
                            
                                <div class="single-post">
                                    <div class="image">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <div class="content">
                                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                        <ul class="comment">
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d M, Y'); ?></li>
                                            <li><i class="fa fa-commenting-o" aria-hidden="true"></i><?php echo get_comments_number(); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            
                            <?php
                            endwhile;

                            wp_reset_postdata();

                        endif;
                        ?>

                            <!-- End Single Post -->
                        </div>
                        <!--/ End Single Widget -->
                        
                        <!-- Single Widget -->
                        <div class="single-widget side-tags">
                            <h3 class="title">Tags</h3>
                            <ul class="tag">
                                <li><a href="#"><?php echo get_the_category_list(', '); ?></a></li>
                            </ul>
                        </div>
                        <!--/ End Single Widget -->
                    </div>
                </div>
                  <?php
                        endwhile;
                  ?>
            </div>
        </div>
    </section>
    <!--/ End Single News -->

    <!-- Footer Area -->
    <?php

        get_footer();

    ?>
    <!--/ End Footer Area -->

<!-- end origin code -->


<?php
get_header();
?>

<body>

    <!-- Preloader -->
    <?php // get_template_part('template-parts/preloader'); ?>
    <!-- End Preloader -->

    <!-- Get Pro Button -->
    <?php // get_template_part('template-parts/pro_features'); ?>

    <!-- hero Area -->
    <?php get_template_part('template-parts/hero'); ?>
    <!-- End hero Area -->

    <!-- Breadcrumbs -->
    <?php get_template_part('template-parts/breadcrumbs'); ?>
    <!-- End Breadcrumbs -->

    <!-- Single News -->
    <section class="news-single section">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                    <!-- News Head -->
                                    <div class="news-head">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <!-- News Title -->
                                    <h1 class="news-title"><a href="<?php the_permalink(); ?>"> <?php echo the_title(); ?>.</a></h1>
                                    <!-- Meta -->
                                    <div class="meta">
                                        <div class="meta-left">
                                            <span class="author">
                                                <?php echo get_avatar(get_the_author_meta('ID'), 32); ?>
                                                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"> <?php echo the_author() ?></a></span>
                                            <span class="date"><i class="fa fa-clock-o"></i> <?php echo get_the_date('d M, Y'); ?></span>
                                        </div>
                                        <div class="meta-right">
                                            <span class="comments"><a href="#"><i class="fa fa-comments"></i><?php echo get_comments_number(); ?></a></span>
                                            <span class="views"><i class="fa fa-eye"></i><?php
                                                                    $postID = get_the_ID();
                                                                    set_post_views($postID);
                                                                    $views = get_post_meta($postID, 'post_views_count', true);
                                                                    ?>
                                                <span class="views"><i class="fa fa-eye"></i><?php echo $views; ?> Views</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- News Text -->
                                    <div class="news-text">
                                        <?php echo the_content(); ?>
                                    </div>
                                    <div class="blog-bottom">
                                        <!-- Social Share -->
                                        <ul class="social-share">
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                        <!-- Next Prev -->
                                        <ul class="prev-next">
                                            <li class="prev"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                                            <li class="next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                        </ul>
                                        <!--/ End Next Prev -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                    <div class="blog-comments">
                        <h2>All Comments</h2>
                        <div class="comments-body">
                            <!-- Display Comments -->
                            <?php
                            wp_list_comments(array(
                                'style'       => 'div',
                                'short_ping'  => true,
                                'avatar_size' => 60,
                            ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="comments-form">
                        <h2>Leave Comments</h2>
                        <!-- Comment Form -->
                        <?php
                        comment_form(array(
                            'title_reply' => 'Leave a Comment',
                            'class_submit' => 'btn primary',
                            'comment_field' => '<div class="col-12"><div class="form-group message"><i class="fa fa-pencil"></i><textarea name="comment" rows="7" placeholder="Type Your Message Here"></textarea></div></div>',
                            'fields' => array(
                                'author' => '<div class="col-lg-4 col-md-4 col-12"><div class="form-group"><i class="fa fa-user"></i><input type="text" name="author" placeholder="First name" required="required"></div></div>',
                                'email' => '<div class="col-lg-4 col-md-4 col-12"><div class="form-group"><i class="fa fa-envelope"></i><input type="email" name="email" placeholder="Your Email" required="required"></div></div>',
                                'url' => '<div class="col-lg-4 col-md-4 col-12"><div class="form-group"><i class="fa fa-envelope"></i><input type="url" name="url" placeholder="Your Website" required="required"></div></div>',
                            ),
                        ));
                        ?>
                        <!--/ End Comment Form -->
                    </div>
                </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <!-- Single Widget -->
                            <div class="single-widget search">
                                <div class="form">
                                    <input type="email" placeholder="Search Here...">
                                    <a class="button" href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget category">
                                <h3 class="title">Blog Categories</h3>
                                <ul class="categor-list">
                                    <li><a href="#"><?php echo get_the_category_list(', '); ?></a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent post</h3>
                                <!-- Display Recent Posts -->
                                <?php
                                wp_reset_query();

                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 3,
                                    'post__not_in'   => array(get_the_ID()),
                                );

                                $recent_posts_query = new WP_Query($args);

                                if ($recent_posts_query->have_posts()) :
                                    while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post();
                                ?>
                                        <div class="single-post">
                                            <div class="image">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            <div class="content">
                                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                                <ul class="comment">
                                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date('d M, Y'); ?></li>
                                                    <li><i class="fa fa-commenting-o" aria-hidden="true"></i><?php echo get_comments_number(); ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;

                                    wp_reset_postdata();

                                endif;
                                ?>
                                <!-- End Display Recent Posts -->
                            </div>
                            <!--/ End Single Widget -->

                            <!-- Single Widget -->
                            <div class="single-widget side-tags">
                                <h3 class="title">Tags</h3>
                                <ul class="tag">
                                    <li><a href="#"><?php echo get_the_category_list(', '); ?></a></li>
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                        </div>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>
    <!--/ End Single News -->

    <!-- Footer Area -->
    <?php
    get_footer();
    ?>
    <!--/ End Footer Area -->
