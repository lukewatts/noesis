<?php
  /*-----------------------------------------------------------------------------------*/
  /* This template will be called by all other template files to begin 
  /* rendering the page and display the header/nav
  /*-----------------------------------------------------------------------------------*/
?><!-- START OF header.php -->
<!DOCTYPE html>
<html <?php language_attributes(); // Get the language to be used from the admin > settings ?>>
  
  <head>
    <!--  SEO & META -->
    <title><?php wp_title(':', true, 'right'); // Show the site name and post/page name ?></title>
    
    <!-- STYLES -->
    <?php // We'll loading our theme directory style.css by queuing scripts in our functions.php file ?>

    <!-- SCRIPTS -->
    <?php // We'll loading our theme directory scripts by queuing scripts in our functions.php file. ?>

    <?php wp_head();
      // This funtion allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
      // (right here) into the head of your website. 
      // Removing this function call will disable all kinds of plugins and Wordpress default insertions. 
      // Our scripts and style.css will be inserted here from our functions.php files
    ?>
  </head>

  <body <?php body_class(); 
  // This will display a class specific to whatever is being loaded by Wordpress
  // i.e. on a home page, it will return [class="home"]
  // on a single post, it will return [class="single postid-{ID}"] etc.
  ?>>
    <!-- CONTAINER -->
    <div id="container">
      
      <!-- HEADER -->
      <header>
        <hgroup>
          <h1><?php bloginfo( 'name' ); // Display the site's title defined in Admin > Settings > General ?></h1>
          <h2><?php bloginfo( 'description' ); // Display the site's description defined in Admin > Settings > General ?></h2>
        </hgroup>
      </header>
      
      <!-- NAV -->
      <nav>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); // Display the user-defined menu in Appearance > Menus ?>
      </nav>
      <!-- END OF header.php -->

      
      <section>
        
        <!-- START OF "The Loop" -->
        <?php if( have_posts() ) : ?>

          <?php while( have_posts() ) : the_post();  ?>

        <article>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          
          <?php the_content(); ?>

        </article>
          
          <?php endwhile; ?>

        <?php endif; ?>

      </section>
      <!-- END OF "The Loop" -->

      <!-- START OF sidebar.php -->
      <aside>
        <p>This is the_sidebar()</p>
      </aside>
      <!-- END OF sidebar.php -->

      <!-- START OF footer.php -->
      <footer>
        <p>This is the_footer()</p>
      </footer>
    </div><!-- #container  -->
    <?php wp_footer(); ?>
  </body>
</html>
<!-- END OF footer.php -->