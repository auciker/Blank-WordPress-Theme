<!doctype html>
<html>
<head <?php language_attributes();?>>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
	<!-- Calculate content width based on sidebars -->
	<?php
		if ( is_active_sidebar( 'left_sidebar' ) && !is_active_sidebar( 'right_sidebar' ) ) {
			$mainspan = 'span9';
		}
	?>
	<?php
		if ( !is_active_sidebar( 'left_sidebar' ) && is_active_sidebar( 'right_sidebar' ) ) {
			$mainspan = 'span9';
		}
	?>
	<?php
		if ( is_active_sidebar( 'left_sidebar' ) && is_active_sidebar( 'right_sidebar' ) ) {
			$mainspan = 'span6';
		}
	?>
	<?php
		if ( !is_active_sidebar( 'left_sidebar' ) && !is_active_sidebar( 'right_sidebar' ) ) {
			$mainspan = 'span12';
		}
	?>
</head>
<body <?php body_class();?>>
<div class="container">
	<header class="site-header row-fluid">
		<div class="span6">
			<h1><a href="<?php echo home_url();?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</div>
		<?php if ( is_active_sidebar( 'Header' ) ) { ?>
			<div class="span6">
		<?php } ?>
		<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) :
			endif;
		?>
		<?php if ( is_active_sidebar( 'Header' ) ) { ?>
			</div>
		<?php } ?>
	</header>

	<div id="primary" class="content-area row-fluid">
		<?php if ( is_active_sidebar( 'left_sidebar' ) ) { ?>
			<aside id="left_sidebar" class="span3">
		<?php } ?>
		<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Sidebar') ) :
			endif;
		?>
		<?php if ( is_active_sidebar( 'left_sidebar' ) ) { ?>
			</aside>
		<?php } ?>

		<main class="<?php echo $mainspan; ?>">

			<?php 
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Above Content') ) :
				endif;
			?>
			
			<?php
				get_header();
				if (have_posts()):
					while (have_posts()) : the_post();?>
						<article class="post">	
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_content(); ?>
						</article>
					<?php endwhile;
				else:
					echo '<p>No content found</p>';
				endif;
			?>

			<?php 
				if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Above Content') ) :
				endif;
			?>

		</main><!-- .site-main -->

		<?php if ( is_active_sidebar( 'right_sidebar' ) ) { ?>
			<aside id="right_sidebar" class="span3">
		<?php } ?>
		<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar') ) :
			endif;
		?>
		<?php if ( is_active_sidebar( 'right_sidebar' ) ) { ?>
			</aside>
		<?php } ?>

	</div><!-- .content-area -->

	<footer>
		<?php 
			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) :
			endif;
		?>
		<p><?php bloginfo('name');?> - &copy<?php echo date('Y') ?></p>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
