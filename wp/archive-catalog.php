<?php get_header(); ?>

<main class="arc-catalog">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">エンジニア採用に役立つア・ロッカのサービス資料</h1>
        <div class="lead">エンジニア採用や採用業務の工数過多にお困りの方は是非ご覧ください。</div>
      </div>
    </div>
  </section>

  <section class="catalog-menu bg-gray">
    <div class="containers">

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => -1,
        'post_type' => 'catalog',
        'paged' => $paged,
        'order' => 'DESC',
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="flex card">
            <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
            <summary class="card__box">
              <h2 class="card__box--ttl"><?php the_title(); ?></h2>
              <h3 class="card__box--txt"><?php echo CFS()->get('lead'); ?></h3>
              <div class="more bgG">資料をダウンロード</div>
            </summary>
          </a>

        <?php endwhile; ?>
      <?php endif; ?>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>