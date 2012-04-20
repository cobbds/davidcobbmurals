<!-- This layout uses Images 210x150px and shows text & excerpt -->

<!-- BEGIN full-middle -->
<div class="full-middle" id="layout2">

	<!-- BEGIN main -->
	<div class="main">

		<!-- BEGIN the famous WP Loop -->
		<?php if (have_posts()) : ?>

		<?php $count=0; while (have_posts()) : the_post(); ?>
		
		<!-- BEGIN the margin script -->
		<?php $count++; if($count==4){ $var='style="margin-right:0px;"'; $count=0; } else { $var=""; } ?>
		
		<!-- Get that image resized! -->
		<?php 
		$thumb = get_post_thumbnail_id(); 
 		$image = vt_resize( $thumb,'' , 210, 150, true );
 		$fullthumb = get_post_thumbnail_id();
 		$fullimg = vt_resize( $fullthumb, '', 500, true)
 		?>
 		
 		<!-- BEGIN text-wrap -->
 		<div class="text-wrap" <?php echo $var; ?>>
 		
 			<!-- BEGIN mosaic block bar -->
			<div class="mosaic-block circle"> 

				<!-- BEGIN post -->
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
					<!-- BEGIN mosaic-overlay -->
					<a class="mosaic-overlay" id="zoom" href="<?php echo $fullimg[url]; ?>" width="<?php echo $fullimg[width]; ?>" height="<?php echo $fullimg[height]; ?>" alt="image" rel="gallery">
				
					&nbsp;
				
					<!-- END mosaic-overlay -->
					</a>
				
					<!-- BEGIN mosaic-backdrop -->
					<div class="mosaic-backdrop">
				
						<img src="<?php echo $image[url]; ?>" width="<?php echo $image[width]; ?>" height="<?php echo $image[height]; ?>" alt="image"/>
				
					<!-- END mosaic-backdrop -->
					</div>
		
				<!-- END post -->
				</div>
		
			<!-- END mosaic block bar-->	
			</div>
		
			<!-- CLEAR -->
			<div class="clear" style="height:1px;"></div>
			
			<h4 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4> 
						
			<p class="date"><?php the_time('F jS, Y') ?></p>
			
			<?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore'); ?>
		
		<!-- END text-wrap -->		
		</div>

	<!-- END loop -->
	<?php endwhile; ?>

	<!-- END main -->
	</div>

<!-- END full-middle -->
</div>

<!-- CLEAR -->
<div class="clear" style=""></div>

<!-- BEGIN full-pagination -->
<div class="full-pagination">

	<!-- BEGIN main -->
	<div class="main">

		<!-- BEGIN pagination -->
		<?php if (function_exists("pagination")) { pagination($additional_loop->max_num_pages); } ?>

	<!-- END main -->
	</div>

<!-- END pagination-->
</div>

<!-- BEGIN else -->
<?php else : ?>

<h2>Not Found</h2>
<p>Sorry, but you are looking for something that isn't here.</p>
<?php get_search_form(); ?>

<?php endif; ?>