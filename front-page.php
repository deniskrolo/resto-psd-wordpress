<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


      <div id="main-banner">
          <img src="<?php echo(get_template_directory_uri()); ?>/images/banner.jpg" alt="Welcome to Resto">
      </div>

      <div class="wrapper">
      <section id="home-menu">
          <h2>Menu</h2>
          <ul>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
              <li>
                  <span class="dish">Voluptate Cillum fugiat</span>
                  <span class="price">$30</span>
                  <span class="description">Cheese, tomato, mushrooms, onions</span>
              </li>
          </ul>
      </section>

      <section id="featured">
          <ul>

						<?php $myquery = new WP_Query('category_name=menu-items&posts_per_page=4'); ?>
						<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
							<li>
								<?php the_post_thumbnail(); ?>
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<span><?php echo get_post_meta($post->ID, 'price', true); ?></span>
								<span class="star-<?php echo get_post_meta($post->ID, 'rating', true); ?> rating"></span>
							</li>
						<?php endwhile; ?>

          </ul>
      </section>
      </div>


		</main>
	</div>

<?php
get_footer();
