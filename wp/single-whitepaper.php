<?php get_header(); ?>

<main class="sng-whitepaper bg-gray">

  <section class="">
    <div class="containers flex">

      <!-- 資料紹介 -->
      <article class="sub-conts article">

        <h1 class="article__ttl"><?php the_title(); ?></h1>

        <!-- 資料のスライダー -->
        <div class="wp-slick">
          <div id="wp-slick">
            <figure><?php the_post_thumbnail(); ?></figure>
            <?php if (!empty(CFS()->get('img-wp2'))) : ?>
              <figure><img src="<?php echo esc_url(CFS()->get('img-wp2')); ?>" alt=""></figure>
            <?php endif; ?>
            <?php if (!empty(CFS()->get('img-wp3'))) : ?>
              <figure><img src="<?php echo esc_url(CFS()->get('img-wp3')); ?>" alt=""></figure>
            <?php endif; ?>
          </div>
        </div>
        

        <h2 class="article__desc"><?php echo CFS()->get('lead'); ?></h2>

        <div class="article__toc">
          <h2 class="article__toc--ttl">本資料の目次</h2>
          <div class="article__toc--list">

          <?php $paragraph_arr = CFS()->get('toc'); ?>
          <?php if ($paragraph_arr) : ?>
            <dl>
              <?php foreach ($paragraph_arr as $paragraph) : ?>
              <dt><h3><?php echo esc_html(strip_tags($paragraph['title'])) ?></h3></dt>
              <?php if ($paragraph['caption']) : ?>
              <dd>
                <ul>
                  <?php foreach ((array)$paragraph['caption'] as $caption) : ?>
                    <li><h4><?php echo esc_html(strip_tags($caption['caption_title'])) ?></h4></li>
                  <?php endforeach ?>
                </ul>
              </dd>
              <?php endif; ?>
              <?php endforeach; ?>
            </dl>
          <?php endif; ?>

          </div>
        </div>

      </article>

      <!-- サイドメニュー -->
      <aside class="side-form">
      <div class="form__ttl">ダウンロード申込みフォーム</div>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
      <script>
        hbspt.forms.create({
          region: "na1",
          portalId: "23387379",
          formId: "<?php echo CFS()->get('form_id'); ?>"
        });
      </script>

      </aside>
      
    </div>
  </section>

</main>

<?php get_footer(); ?>