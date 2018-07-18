<?php get_header(); ?>	
	<section class="background" style="background-image: url('https://picsum.photos/1500/500?image=62');">
		<div class="background-content">
			<h3>“A journey of a thousand miles starts with a first step.”</h3>
			<p>- Laozi (Lao-tzu)</p>
		</div>
	</section>
	<main class="row">
		<section id="content">
			<div id="posts">
			<?php if ( have_posts() ) {
				while (have_posts()) : the_post();?>
				<article class="post">
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<div class="post-meta">
						<i class="fa fa-calendar-i"></i> <?php the_time('j F Y'); ?> <br>
						<i class="fa fa-user"></i> <?php the_author(); ?>
					</div>
				<?php the_post_thumbnail(); ?>
				<?php the_content(); ?>
				</article>
			<?php endwhile;
			} ?>

			</div>
			<div id="pagination"><?php echo paginate_links(); ?></div>
		</section>
		<aside>
			<p><img class="aligncenter" src="https://picsum.photos/600/300?image=110" alt="Piękna angielska wieś"></p>
			<h3>Sprawdzone trasy Wanderlust Walkers</h3>
			<ol>
				<li class="advanced" id="best">Clitheroe — śladami Tolkiena</li>
				<li class="medium">Macclesfield Forest</li>
				<li class="easy">Charlesworth i Coombes Edge</li>
				<li class="easy">Alderley Edge</li>
				<li class="medium">Hadfield, Charlesworth, Coombes Edge</li>
				<li class="easy">Buxton — Combs</li>
				<li class="advanced">Combs Moss</li>
				<li class="advanced">The Great Ridge, start z Edale</li>
			</ol>
		</aside>
	</main>
<?php get_footer(); ?>