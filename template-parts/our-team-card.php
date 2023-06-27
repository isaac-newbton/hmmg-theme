<article class="team-member" id="team-member-<?= get_the_ID() ?>">
	<img src="<?php the_post_thumbnail_url('full') ?>" alt="<?= get_the_title() ?>" class="team-member-image">
	<h3 class="team-member-name"><?= get_the_title() ?></h3>
	<div class="team-member-job-title"><?= get_post_meta(get_the_ID(), '_ham_team_member_job_title', true) ?></div>
	<div class="team-member-description"><?= get_the_excerpt() ?></div>
	<a href="<?= get_the_permalink() ?>" class="team-member-learn-more">Learn More</a>
</article>