<?php
$team_query = new WP_Query([
	'post_type' => 'team_member',
	'post_status' => 'publish',
	'posts_per_page' => 4,
	'order' => 'ASC',
	'orderby' => 'ID',
]);
?>

<?php if ($team_query->have_posts()) : ?>
	<div class="our-team-container">
		<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>
			<?php get_template_part('template-parts/our-team', 'card'); ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php wp_reset_postdata();
