<?php get_header(); ?>

<main class="strength">

  <section class="hero03">
    <div class="containers core">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">ア・ロッカが選ばれる3つの理由</h1>
        <div class="lead">採用業務をアウトソーシングし、工数（時間）を削減、弊社のノウハウを活用することで<br>「ミスマッチ」を防ぎ、エンジニア採用の年間採用コストを低減することが可能です。</div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more bgG">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <section class="symmetry">
    <div class="containers">

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">01</div>
          <h2 class="item__box--ttl">ダイレクトリクルーティングについてのノウハウを蓄積可能</h2>
          <h3 class="item__box--txt">自社エンジニア社員採用で培ったノウハウを活用しながら 支援を行います。</h3>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry01.jpg" alt="ダイレクトリクルーティングについてのノウハウを蓄積可能"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry02.jpg" alt="業務をアウトソーシングすることにより、採用工数（時間）の低減が可能"></figure>
        <summary class="item__box">
          <div class="item__box--num">02</div>
          <h2 class="item__box--ttl">業務をアウトソーシングすることにより、採用工数（時間）の低減が可能</h2>
          <h3 class="item__box--txt">スカウトメールの作成・送信、面接日程調整などを弊社がご支援するため、約35時間の削減が可能です！</h3>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <div class="item__box--num">03</div>
          <h2 class="item__box--ttl">ターゲット人材に確実に訴求</h2>
          <h3 class="item__box--txt">エンジニア採用に強い媒体と 連携し、自社ノウハウを活用して成果の最大化＆ミスマッチを防ぐことが可能です。</h3>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry03.jpg" alt="ターゲット人材に確実に訴求"></figure>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/reason' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>