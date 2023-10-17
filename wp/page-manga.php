<?php get_header(); ?>

<main class="manga">

  <section class="manga__box">
    <div class="containers">
      <div class="first"><img src="<?php echo assets_path() ?>img/manga/img-manga01.webp" alt=""></div>
      <div><img src="<?php echo assets_path() ?>img/manga/img-manga02.webp" alt=""></div>
      <div><img src="<?php echo assets_path() ?>img/manga/img-manga03.webp" alt=""></div>
      <div><img src="<?php echo assets_path() ?>img/manga/img-manga04.webp" alt=""></div>
      <div><img src="<?php echo assets_path() ?>img/manga/img-manga05.webp" alt=""></div>
    </div>
  </section>

  <section class="material">
    <div class="containers">
      <div class="flex aiC gap30 desc">
        <figure class="desc__img"><img src="<?php echo assets_path() ?>img/common/img-wp.png" alt="ITエンジニア採用支援サービス「アイティ人事」"></figure>
        <summary class="desc__box">
          <h3 class="desc__box--sub">エンジニア採用に関するお悩みを解決する！</h3>
          <h2 class="desc__box--ttl">ITエンジニア採用支援サービス<br>「アイティ人事」</h2>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/" class="more bgG">サービス資料をダウンロード</a>
        </summary>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>