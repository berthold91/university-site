<?php get_header() ?>
    <div class="page-banner">
      <div
        class="page-banner__bg-image"
        style="background-image: url(images/ocean.jpg)"
      ></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Event</h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?= site_url('/blog') ?>"
            ><i class="fa fa-home" aria-hidden="true"></i> Back to Blog List</a
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
              <h5 class="event-summary__title headline headline--tiny"><?php the_title() ?></h5>
              <p><?php the_content() ?></p>
            </div>
            <br>
            <p>Posted By: <a href="<?php get_post_type_archive_link('post') ?>"><?php the_author() ?></a></p>
            <p>category: <a href="<?php get_post_type_archive_link('post') ?>"><?php the_category(",","",get_the_ID()) ?></a></p>
          </div>
		<?php } ?>
      </div>
	  <br>
	  <p style="text-align: center"> <?= paginate_links() ?> </p>
    </div>
  
    <?php get_footer() ?>