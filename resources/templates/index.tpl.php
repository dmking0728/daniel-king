<?php get_header(); ?>

<?php
    /**
     * Functions hooked into `theme/index/header` action.
     *
     * @hooked Tonik\Theme\Index\render_header - 10
     */
    do_action('theme/index/header');
?>

<section class="section">
        <div class="">
            <?php if (have_posts()) : ?>
                <h4>Posts</h4>

                <div class="posts">
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                            /**
                             * Functions hooked into `theme/index/post/thumbnail` action.
                             *
                             * @hooked Tonik\Theme\App\Structure\render_post_thumbnail - 10
                             */
                            do_action('theme/index/post/thumbnail');
                        ?>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
				<div class="not-found container px-4 py-5">
					
						<div class="wrapper">
							<div class="row g-5 justify-content-center text-center flex-lg-row">
								<div class="col-12 col-md-8">
									<h2>404 Page Not Found <span style='font-size:30px;'>&#128528;</span></h2>
									<p>Oops, I screwed up and you discovered my fatal flaw.Well, we're not all perfect, but we try.  Can you try this again or maybe visit our <a title="Homepage" href="/">Home Page</a> to start fresh. We'll do better next time.</p>
								</div>

								
							</div>
						</div>
					
				</div>
                <?php
                    /**
                     * Functions hooked into `theme/index/content/none` action.
                     *
                     * @hooked Tonik\Theme\App\Structure\render_empty_content - 10
                     */
                    
                ?>
            <?php endif; ?>


        
</section>

<?php get_footer(); ?>
