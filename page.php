<?php

get_header(); 
?>
<!--==================== Newsup breadcrumb section ====================-->
<?php get_template_part('index','banner'); ?>
<!--==================== main content section ====================-->
<main id="content">
    <div class="container-fluid">
      <div class="row">
		<!-- Blog Area -->
			<?php get_template_part('template-parts/content', 'page'); ?>
	</div>
</main>
<?php
get_footer();