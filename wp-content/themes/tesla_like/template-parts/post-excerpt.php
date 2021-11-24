<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
  <section>
    <div id="<?php echo basename(get_permalink()); ?>" class="model_size" style="background-image: url('<?php echo $featured_img_url ?>')" >
      <h2 class="capitalize"><?php the_title(); ?></h2>
      <p class=""><?php echo get_the_excerpt(); ?></p>
      <!-- <a href="<?php the_permalink(); ?>" class="">Lire la suite</a> -->
    </div>
  </section>
