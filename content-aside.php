<?php
/**
 * The template for displaying posts in the Aside Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package Bwater
 * @since Bwater 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <header class="entry-header">
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'bwater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
   </header><!-- .entry-header -->

   <?php if ( is_search() ) : // Only display Excerpts for search pages ?>
   <div class="entry-summary">
      <?php the_excerpt(); ?>
   </div><!-- .entry-summary -->
   <?php else : ?>
   <div class="entry-content">
      <?php the_content( __( 'Continue reading', 'bwater' ) ); ?>
      <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'bwater' ), 'after' => '</div>' ) ); ?>
   </div><!-- .entry-content -->
   <?php endif; ?>

   <footer class="entry-meta">
      <?php bwater_posted_on(); ?>
      <?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
      <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'bwater' ), __( '1 Comment', 'bwater' ), __( '% Comments', 'bwater' ) ); ?></span>
      <?php endif; ?>
      <?php edit_post_link( __( 'Edit', 'bwater' ), '<span class="edit-link">', '</span>' ); ?>
   </footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->