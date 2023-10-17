<?php get_header(); ?>

<main class="sitemap">

  <section class="hero03 core">
    <div class="containers">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">サイトマップ</h1>
      </div>
    </div>
  </section>

  <section class="sitemap__box">
    <div class="containers flex gap60">

      <div class="group">
        <div class="group__ttl">サービス</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>it_personnel/">アイティ人事</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>manga/">マンガでわかるアイティ人事</a></li>
        </ul>
      </div>

      <!-- <div class="group">
        <div class="group__ttl">ニーズ・課題から探す</div>
        <ul class="group__list">
          <li><a href="">採用を兼務されているご担当者様へ</a></li>
        </ul>
      </div> -->

      <div class="group">
        <div class="group__ttl">お役立ち情報</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>case/">実績・事例</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>strength/">選ばれる理由</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/direct_recruiting/">ダイレクトリクルーティングとは</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">お知らせ</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">お問合せ</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>catalog/">サービス資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">お問合せ・ご相談</a></li>
        </ul>
      </div>

      <div class="group">
        <div class="group__ttl">その他</div>
        <ul class="group__list">
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>company/">企業情報</a></li>
        </ul>
      </div>

    </div>
  </section>


</main>

<?php get_footer(); ?>