  <!-- conetent start here -->
  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <?php 
        $args = array(
          'post_type' => 'news',
          'orderby' => 'post_id',
          'order' => 'ASC'
        );
        $loop = new WP_Query($args);
        while ( $loop->have_posts() ) : $loop->the_post();
      ?>
      <div class="col-md-4">
        <h4 class="pb-2">
          <b><?php the_title(); ?></b>
        </h4>
        <p class="text-justify"><?php the_field('description'); ?></p>
        <p>
          <a class="btn btn-sm btn-secondary" href="#" role="button">View details »</a>
        </p>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
