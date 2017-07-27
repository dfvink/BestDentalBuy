<?php
/*
Template Name: home
*/
?>

<?php get_header(); ?>
			
<section id="home_hero" class="home_hero">
	<div class="row" >
		<div class="large-4 medium-6 columns end">
			<div class="home_hero_content">
				<h5><?php the_field('hero_subkop')?></h5>
				<h1><?php the_field('hero_kop')?></h1>
				<?php the_field('hero_intro')?>
				<div>
					<a href="#numbers"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_down.svg"></a>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="numbers">
	<div class="row" data-equalizer data-equalize-on="medium">
		<div class="large-4 medium-4 columns number_container border_right">
			<div data-equalizer-watch>
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_handshake.svg"><span class="count"><?php the_field('nummer_1')?></span> %</h1>
				<h4><?php the_field('nummer_1_label')?></h4>
				<div>
					<?php the_field('nummer_1_intro')?>
				</div>			
				<a href="<?php the_field('nummer_1_link')?>" class="leesmeer">LEES MEER</a>
			</div>
		</div>
		<div class="large-4 medium-4 columns number_container border_right">
			<div data-equalizer-watch>
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_groep.svg"><span class="count"><?php the_field('nummer_2')?></span></h1>
				<h4><?php the_field('nummer_2_label')?></h4>
				<div>
					<?php the_field('nummer_2_intro')?>
				</div>
				<a href="<?php the_field('nummer_2_link')?>" class="leesmeer">LEES MEER</a>
			</div>
		</div>
		<div class="large-4 medium-4 columns number_container">
			<div data-equalizer-watch>
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_document.svg"><span class="count"><?php the_field('nummer_3')?></span></h1>
				<h4><?php the_field('nummer_3_label')?></h4>
				<div>
					<?php the_field('nummer_3_intro')?>
				</div>
				<a href="<?php the_field('nummer_3_link')?>" class="leesmeer">LEES MEER</a>
			</div>
		</div>
	</div>
</section>

<section id="waarom">
	<div class="row columns text-center">
		<h3>Waarom Best Dental Buy</h3>
	</div>
	<div class="row" data-equalizer data-equalize-on="medium">
		<div class="large-6 columns">
			<div data-equalizer-watch>
			 	<img src="<?php the_field('waarom_image')?>">
			</div>
		</div>
		<div class="large-6 columns">
			<div class="waarom_intro_container" data-equalizer-watch>
			 	<?php the_field('waarom_intro')?>
			 	<a href="/werkwijze" class="button">Onze werkwijze</a>
			</div>
		</div>
	</div>
</section>

<section id="ervaringen">
	<div class="row">
		<div class="large-4 columns">
		</div>
		<div class="large-4 columns">
		<h3>Ervaringen</h3>
		</div>
		<div class="large-4 columns">
		</div>
	</div>
</section>

<?php get_footer(); ?>
