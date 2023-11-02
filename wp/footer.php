<footer>
  <div class="containers nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav__img"><img src="<?php echo assets_path() ?>img/common/f-logo.svg" alt="A・ROCCA"></a>
    <div class="address">〒460-0003　愛知県名古屋市中区錦1丁目5－11名古屋伊藤忠ビル4F<br>TEL:052-855-4794</div>
    <nav class="flex">
      <div class="nav__box">
        <div class="nav__box--ttl">サービス</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>it_personnel/">アイティ人事</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>manga/">マンガでわかるアイティ人事</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">ニーズ・課題から探す</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>concurrent_post/">採用を兼務されているご担当者様へ</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">お役立ち情報</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>case/">実績・事例</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>strength/">選ばれる理由</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>column/direct_recruiting/">ダイレクトリクルーティングとは</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>whitepaper/">お役立ち資料</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>column/">お役立ちコラム</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>news/">お知らせ</a></li>
        </ul>
      </div>
      <div class="nav__box">
        <div class="nav__box--ttl">お問合せ</div>
        <ul class="nav__box--list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>catalog/">サービス資料ダウンロード</a></li>
          <li><a href="<?php echo esc_url(home_url('/')); ?>contact/">お問合せ・ご相談</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <aside class="aside">
    <ul class="flex jcC inherit aside__nav">
      <li><a href="<?php echo esc_url(home_url('/')); ?>company/">企業情報</a></li>
      <li><a href="https://arocca.co.jp/privacy/">プライバシーポリシー</a></li>
      <li><a href="<?php echo esc_url(home_url('/')); ?>sitemap/">サイトマップ</a></li>
    </ul>
    <div class="aside__copy">© A・ROCCA Inc. All Rights Reserved.</div>
  </aside>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo assets_path() ?>js/all.min.js"></script>

</body>

</html>