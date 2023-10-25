<?php get_header(); ?>

<main class="top">

  <section class="hero">
    <div class="containers">
      <div class="hero__sub">ITエンジニア採用代行/RPO</div>
      <h1 class="ttl-primary">アイティ人事</h1>
      <div class="hero__lead">ITエンジニア採用のプロ集団が<br class="pc-only">「採用戦略」・「スカウト配信代行」<br class="pc-only">などの採用業務を伴走支援いたします。</div>
      <div class="flex fS aiC hero__btn">
        <!-- <a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/" class="more core">採用を兼務されているご担当者様へ</a> -->
        <div class="ctabtn">
          <a href="<?php echo esc_url(home_url('/')); ?>catalog/it_personnel/" class="more bgG core">
            <div class="balloon"><span class="balloon__txt">エンジニア採用を強力にサポート！</span></div>
            サービス資料ダウンロード
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="video01">
    <div class="containers">
      <h2 class="ttl-secondary">１５秒でわかる！アイティ人事</h2>
      <div class="item">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/934mG51Z59I?si=hwx3TdLoCTJC39xl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/material'); ?>

  <section class="card-type5">
    <div class="containers">
      <h2 class="ttl-secondary">以下の課題・ニーズを持つ企業様に<br class="sp-only">"アイティ人事"は導入されています。</h2>
      <ul class="flex gap30 card">
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type5-1.jpg" alt="ダイレクトリクルーティングでの返信率が上がらない"></figure>
          <h3 class="card__box--ttl core">採用業務を実行するリソース不足</h3>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type5-2.jpg" alt="エンジニア採用に関するノウハウが不足している"></figure>
          <h3 class="card__box--ttl core">人材紹介サービスから紹介が減少</h3>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type5-3.jpg" alt="採用業務の工数（時間）削減＆年間採用コストを低減したい"></figure>
          <h3 class="card__box--ttl core">採用代行/RPOで<br>効果が向上するか心配</h3>
        </li>
      </ul>
      <!-- <a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/" class="more">採用を兼務されているご担当者様へ</a> -->
    </div>
  </section>

  <section class="card-type1 bg-B">
    <div class="containers">
      <h2 class="ttl-secondary">ITエンジニア採用に関する"採用戦略から内定者フォロー"までご支援</h2>
      <ul class="flex gap30 card">
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type01.jpg" alt="採用戦略の策定・求人原稿カスタマイズ・スカウト配信・分析改善を代行可能"></figure>
          <h3 class="card__box--ttl">採用戦略の策定・求人原稿カスタマイズ・スカウト配信・分析改善を代行可能</h3>
          <div class="card__box--txt">ダイレクトリクルーティング手法に関する”面接”業務以外のほぼすべてを代行することで、面接のみを行えば良い状態のフローの構築が可能です。また、当社では内定者フォローまで代行が可能です。</div>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type02.jpg" alt="スカウト媒体（求人媒体）の適切な活用を行い”攻め”の手法で採用業務を行います"></figure>
          <h3 class="card__box--ttl">スカウト媒体（求人媒体）の適切な活用を行い”攻め”の手法で採用業務を行います</h3>
          <div class="card__box--txt">人材紹介サービスや求人広告では応募者からの応募を待つだけの運用となり、ミスマッチも多く発生しますが、欲しい人材に直接アプローチ可能な媒体を適切に運用し、欲しい人材のみ獲得することでミスマッチの軽減が可能です。</div>
        </li>
        <li class="card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-card-type03.jpg" alt="当社エンジニア社員採用において確立されたロジックにて業務代行が可能"></figure>
          <h3 class="card__box--ttl">当社エンジニア社員採用において確立されたロジックにて業務代行が可能</h3>
          <div class="card__box--txt">ダイレクトリクルーティングを用いての採用活動は、採用ご担当者のスキルや経験によって成果が依存してしまう傾向にあります。当社サービスを導入することにより、確立されたロジックを用いて、適切な採用活動を行うことが可能です。</div>
        </li>
      </ul>
      <a href="<?php echo esc_url(home_url('/')); ?>it_personnel/" class="more">サービス詳細を見る</a>
    </div>
  </section>

  <?php get_template_part('template-parts/reason'); ?>

  <section class="useful-wp">
    <div class="containers">
      <h2 class="ttl-secondary cW">お役立ち資料</h2>
      <div class="flex jcC gap30">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 2,
          'post_type' => 'whitepaper',
          'paged' => $paged,
          'order' => 'DESC',
          'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) :
        ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="card">
              <figure class="card__img"><?php the_post_thumbnail(); ?></figure>
              <summary class="card__box">
                <h3 class="card__box--ttl"><?php the_title(); ?></h3>
                <div class="card__box--txt"><?php echo CFS()->get('lead'); ?></div>
                <div class="more bgG small">資料をダウンロード</div>
              </summary>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>whitepaper/" class="more">お役立ち資料一覧を見る</a>
    </div>
  </section>

  <section class="grid">
    <div class="containers">
      <h2 class="ttl-secondary">エンジニア採用に役立つコラム集</h2>
      <div class="flex gap30 grid">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'posts_per_page' => 4,
          'post_type' => 'column',
          'meta_key' => 'top_view_flg',
          'meta_value' => '1',
          'paged' => $paged,
          'order' => 'DESC',
          'orderby' => 'post_date',
          'post_status' => 'publish',
        );
        $grid_query = new WP_Query($args);
        if ($grid_query->have_posts()) :
        ?>

          <?php while ($grid_query->have_posts()) : $grid_query->the_post();
            $post_id = get_the_ID();
            $post_terms = get_the_terms($post_id, 'column_category');
          ?>

            <a href="<?php the_permalink(); ?>" class="grid__card">
              <div class="grid__card--img"><?php the_post_thumbnail(); ?></div>
              <div class="flex fS grid__card--cat">
                <?php if ($categories) : ?>
                  <?php foreach ($post_terms as $post_term) : ?>
                    <span class="cat"><?php echo esc_html($post_term->name); ?></span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <h3 class="grid__card--ttl"><?php the_title(); ?></h3>
              <div class="grid__card--time"><time class="time"><?php echo get_the_date('Y.m.d', $post_id); ?></time></div>
            </a>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
      <a href="<?php echo esc_url(home_url('/')); ?>column/" class="more">お役立ちコラム一覧を見る</a>
    </div>
  </section>

  <section class="info bg-B">
    <div class="containers">
      <h2 class="ttl-secondary">会社情報</h2>
      <div class="flex gap30 card">
        <a href="<?php echo esc_url(home_url('/')); ?>company/" class="flex aiC card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info01.svg" alt="企業情報"></figure>
          <dl class="card__box--txt">
            <dt>
              <h3>企業情報</h3>
            </dt>
          </dl>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>strength/" class="flex aiC card__box">
          <figure class="card__box--img"><img src="<?php echo assets_path() ?>img/top/img-info02.svg" alt="ア・ロッカが選ばれる理由"></figure>
          <dl class="card__box--txt">
            <dt>
              <h3>ア・ロッカが選ばれる理由</h3>
            </dt>
          </dl>
        </a>
      </div>
    </div>
  </section>

  <section class="sec-news">
    <div class="containers">
      <h2 class="ttl-secondary">お知らせ</h2>

      <?php
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
        'posts_per_page' => 5,
        'post_type' => 'news',
        'paged' => $paged,
        'order' => 'DESC',
        'post_status' => 'publish',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
          $post_id = get_the_ID();
          $post_terms = get_the_terms($post_id, 'news_category');

        ?>

          <a href="<?php the_permalink(); ?>" class="sec-news__box">
            <dl class="flex aiC gap30 sec-news__box--item">
              <dt class="flex aiC gap20 sp-fS">
                <time class="time"><?php echo get_the_date(); ?></time>
              </dt>
              <dd>
                <h3><?php echo strip_tags(get_the_title()); ?></h3>
              </dd>
            </dl>
          </a>

        <?php endwhile; ?>
      <?php endif; ?>

      <a href="<?php echo esc_url(home_url('/')); ?>news/" class="more">お知らせ一覧を見る</a>
    </div>
  </section>

  <?php get_template_part('template-parts/inquiry'); ?>

</main>

<?php get_footer(); ?>