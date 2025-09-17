<?php get_header(); ?>

<section class="p-10">
  <h4 class="font-bold mb-4">Event List</h4>

  <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
    <?php 
      $events = new WP_Query(['post_type'=>'event','posts_per_page'=>-1]);
      if ($events->have_posts()) :
        while ($events->have_posts()) : $events->the_post();
          $date = get_post_meta(get_the_ID(), 'event_datetime', true);
          $location = get_post_meta(get_the_ID(), 'event_location', true);
          $price = get_post_meta(get_the_ID(), 'event_price', true);
          $banner = wp_get_attachment_url(get_post_meta(get_the_ID(), 'event_banner', true));
    ?>
      <a href="<?php the_permalink(); ?>" class="event-card">
        <div class="shadow-xl h-full rounded-[10px] pb-5">
          <div class="flex flex-col gap-3">
            <div>
              <img width="100" class="w-full rounded-t-[10px]" src="<?php echo esc_url($banner); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="p-3 flex flex-col gap-2">
              <div class="font-bold"><?php the_title(); ?></div>
              <div class="text-gray-500"><?php echo date('d M Y', strtotime($date)); ?></div>
              <div class="font-bold">Rp <?php echo number_format($price,0,',','.'); ?></div>
            </div>
          </div>
        </div>
      </a>
      
        <!-- 
        <div class="event-content">
          /div>
        </div>
      </a> -->
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </div>
</section>



<!-- <h1 style="text-align:center;margin:1rem 0;">Event List</h1>
<div class="events-grid">

</div>
<?php get_footer(); ?>
