<?php get_header() ?>
    <div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(images/ocean.jpg)"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_archive_title() ?></h1>
        <div class="page-banner__intro">
          <p><?php the_archive_description() ?></p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?= site_url() ?>"
            ><i class="fa fa-home" aria-hidden="true"></i> Back to Home</a
          >
        </p>
      </div>
      <div class="generic-content">
		<?php while(have_posts()){ 
			the_post();
			?>
			<div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink()?>">
              <span class="event-summary__month"><?php the_time('m') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>
              <p><?php
			  if(has_excerpt()){
				the_excerpt();
			  } else {
				echo wp_trim_words(get_the_content(), 20);
			  } 
			   ?> <a href="<?php the_permalink() ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
		<?php } ?>
      </div>
	  <br>
	  <p style="text-align: center"> <?= paginate_links() ?> </p>
    </div>
  
    <?php get_footer() ?>