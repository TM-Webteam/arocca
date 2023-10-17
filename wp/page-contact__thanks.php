<?php get_header(); ?>

<main class="thanks">

  <section>
    <div class="containers">

      <h1 class="ttl-primary-lower">お問合せ・ご相談いただき<br class="sp-only">ありがとうございました。</h1>

      <div class="lead">お打ち合わせをご要望の方は<br class="sp-only">以下より日程をご指定くださいませ。</div>

      <div>
        <!-- Start of Meetings Embed Script -->
          <div class="meetings-iframe-container" data-src="https://meetings.hubspot.com/arocca/meeting?embed=true"></div>
          <script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
        <!-- End of Meetings Embed Script -->
      </div>

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="more">トップページに戻る</a>

    </div>
  </section>

</main>

<?php get_footer(); ?>