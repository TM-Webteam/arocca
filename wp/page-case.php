<?php get_header(); ?>

<main class="case">

  <section class="hero03">
    <div class="containers core">
      <div class="hero03__box">
        <h1 class="ttl-primary-lower">実績・事例</h1>
        <div class="lead">アイティ人事は多くの企業様に選ばれています。</div>
        <div class="speech"><span class="cW">採用業務全般をサポートいたします。</span></div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="more bgG">お問合せ・ご相談はこちら</a>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/reason' ); ?>

  <?php get_template_part( 'template-parts/material' ); ?>

  <section class="voice">
    <div class="containers">
      <h2 class="ttl-secondary">お客様の声</h2>

      <div class="flex aiC voice__box">
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice01.jpg" alt="弊社の採用担当として色々動いてくれます。" class="avatar">
          <figcaption class="position">ソフトウェア<br>従業員数：180名</figcaption>
          <span class="tag">アイティ人事</span>
        </figure>
        <dl class="voice__box--cmt">
          <dt><h3>弊社の採用担当として色々動いてくれます。</h3></dt>
          <dd>以前にも中途採用はしていましたが年間1人採用できれば良い方で他の採用方法も模索していた中、ア・ロッカさんの採用支援サービスの事を知りその日のうちに無料相談しました。<br>さすがアイティと謳っているだけあり、最新のスキル事情も詳しく費用面も明確で弊社としても採用ノウハウも蓄積できるメリットもあり、これなら弊社の人事部として長くお付き合いできると判断しました。</dd>
        </dl>
      </div>

      <div class="flex aiC sp-reverse voice__box">
        <dl class="voice__box--cmt v2">
          <dt><h3>リソース不足で媒体運用ができないという失敗パターンから脱出できました。</h3></dt>
          <dd>説明を聞いて1番良いと思ったのは例えばスカウトだけを依頼したいなどサービスのカスタマイズが可能な点で、コストを最小限で運用を継続するというテーマでア・ロッカさんにはスカウトから面接の段取りをのみお願いし、その他は自社で担当分けを行い運用しています。<br>弊社が苦手なところをア・ロッカさんにお願いすることにより採用の仕組みに関しても改めて見直すきっかけを頂いた上に採用もコンスタントにできています。</dd>
        </dl>
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice02.jpg" alt="リソース不足で媒体運用ができないという失敗パターンから脱出できました。" class="avatar">
          <figcaption class="position">ソフトウェア<br>従業員数：15名</figcaption>
          <span class="tag">アイティ人事</span>
        </figure>
      </div>

      <div class="flex aiC voice__box">
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice03.jpg" alt="私の仕事は面接と判断する事だけです！" class="avatar">
          <figcaption class="position">ソフトウェア<br>従業員数：80名</figcaption>
          <span class="tag">アイティ人事</span>
        </figure>
        <dl class="voice__box--cmt">
          <dt><h3>私の仕事は面接と判断する事だけです！</h3></dt>
          <dd>私の本来の仕事であるプロジェクトマネジメント業務は全く支障なく遂行できています。採用に関する実作業は何もしていません、アイティ人事に全てお任せしていますね。<br>しいて言えば採用面接が多くなっているので時間配分は苦労していますが嬉しい悲鳴です。（笑）<br>会社の採用ノウハウ蓄積も必要なのでプランもカスタマイズして少しずつアイティ人事のノウハウも吸収していきます。</dd>
        </dl>
      </div>

      <div class="flex aiC sp-reverse voice__box">
        <dl class="voice__box--cmt v2">
          <dt><h3>オンラインで採用ができちゃうんですね。</h3></dt>
          <dd>実はア・ロッカさんのアイティ人事は個人的に代表の藤原さんと面識がありまして、サービスについて説明を受けた際に3つの点で良いと思いました。<br>①ソフトウェア業界を知っている<br>②スカウトの独自ノウハウに共感できた<br>③月額制であること<br>これなら採用できるのではと思い大阪支社独自の施策としてアイティ人事を活用しています。<br>採用担当者を雇うより安価に採用コンサルと採用アウトソーシングを雇うイメージですね。<br>ア・ロッカさんとは大阪と名古屋でロケーションも離れているので多少心配はしましたがオンラインでの運用が確立されていましたので1日目でその心配は吹き飛びました（笑）</dd>
        </dl>
        <figure class="voice__box--img">
          <img src="<?php echo assets_path() ?>img/case/img-voice04.jpg" alt="オンラインで採用ができちゃうんですね。" class="avatar">
          <figcaption class="position">ソフトウェア<br>従業員数：1,300名</figcaption>
          <span class="tag">アイティ人事</span>
        </figure>
      </div>
      
    </div>
  </section>

  <?php get_template_part( 'template-parts/material' ); ?>

  <?php get_template_part( 'template-parts/element' ); ?>

  <?php get_template_part( 'template-parts/inquiry' ); ?>

</main>

<?php get_footer(); ?>