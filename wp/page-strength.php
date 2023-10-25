<?php get_header(); ?>

<main class="strength">

  <section class="hero03">
    <div class="containers core">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">ア・ロッカが選ばれる3つの理由</h1>
        <div class="lead">ITエンジニア採用領域に専門・特化しているからこその"独自ノウハウ"を活用することで<br>貴社のITエンジニア採用をご支援させていただきます。</div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more bgG">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <section class="symmetry">
    <div class="containers">

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <!--<div class="item__box--num">01</div>-->
          <h2 class="item__box--ttl">採用のプロ集団でチームを構築</h2>
          <h3 class="item__box--txt">最新の業界トレンドを把握しながら、企業での採用担当を経験した人材や、長年IT業界で人事を担当した社員、ITエンジニア出身の社員が伴走支援いたします。</h3>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry01.jpg" alt="採用のプロ集団でチームを構築"></figure>
      </div>

      <div class="flex aiC item">
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry02.jpg" alt="わかりやすい料金設定"></figure>
        <summary class="item__box">
          <!--<div class="item__box--num">02</div>-->
          <h2 class="item__box--ttl">わかりやすい料金設定</h2>
          <h3 class="item__box--txt">月額10万円～提供しており、弊社ではスカウト通数課金型にてプランをご用意しております。契約期間に関しては、媒体契約期間と同じ期間を設定いただくことをオススメしております。</h3>
        </summary>
      </div>

      <div class="flex aiC sp-reverse item">
        <summary class="item__box">
          <!--<div class="item__box--num">03</div>-->
          <h2 class="item__box--ttl">ITエンジニア採用のノウハウを活用</h2>
          <h3 class="item__box--txt">弊社のSES事業において培った、ITエンジニア採用の成功ノウハウを活用しながら、蓄積されたデータに基づいた分析、各施策を実行し、支援させていただきます。</h3>
        </summary>
        <figure class="item__img"><img src="<?php echo assets_path() ?>img/strength/img-symmetry03.jpg" alt="ITエンジニア採用のノウハウを活用"></figure>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/reason' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>