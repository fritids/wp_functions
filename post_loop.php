<?php if ( have_posts() ) : while ( have_posts() ) : ?>
	<div class="col-lg-12">
		<?php for($i = 0; $i < 6; $i++) : the_post(); ?>
			<?php 
				if(empty($post->ID))
				{
					echo '</div>';
					break 2;
				} 
			?>
			<div class="col-lg-2 post_wrap">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_bloginfo('template_directory').'/img/sample1.jpg'?>" />
				</a>
				<h2 class="post_title_custom">
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="main_post_article">
					<?php echo mb_substr(get_the_content(),0,50); ?>
				</div>
				<div class="main_post_cat">
					<span>
						カテゴリ:
					</span>
					<?php the_category(','); ?>
				</div>
				<div class="main_post_tag">
					<?php the_tags(); ?>
				</div>
			</div>
				<?php endfor; ?>
	</div>
<?php endwhile; else: ?>
	まだ投稿がありません。
<?php endif; ?>
