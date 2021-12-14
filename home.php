<?php get_header(); ?>
<!-- ------------------------------ -->
<header>

  <div id="fixed">
    menu menu menu menu menu menu
  </div>

  <div class="heading">
    <div>logo</div>
    <button type="button" class="menu-btn">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <div class="menu">
    <div class="menu__item">TOP</div>
    <div class="menu__item">ABOUT</div>
    <div class="menu__item">BLOG</div>
    <div class="menu__item">CONTACT</div>
  </div>


  <!-- ------------------------------ -->
  <div class="video-area">
    <video webkit-playsinline playsinline muted autoplay loop>
      <source src='<?php echo get_template_directory_uri(); ?>/video/movie.mp4' type='video/mp4'>
    </video>
    <h1>住み替えを、<br>もっと気軽に。<br>もっと楽しく。</h1>
  </div>
</header>
<!-- ------------------------------ -->
<main>
  <h1>
    <?=
    'ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ';
    ?>
  </h1>


  <section>
    <div class="image-area">
      <div class="image">
        <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="img">
      </div>
      <div class='text'>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
      </div>
    </div>
  </section>
  <!-- ------------------------------ -->
  <section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <br>
    <?php endwhile;
    endif; ?>
  </section>

  <!-- ------------------------------ -->
  <section>
    <?php
    $args = array(
      'post_type' => 'info',
      'posts_per_page' => 3,
      'paged' => $paged
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="container">
      <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <div><?php echo get_the_date('Y.m.d'); ?></div>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
          <br>
        <?php endwhile; ?>
    </div>
    <?php wp_reset_postdata(); ?>
  <?php else : ?>
  <?php endif; ?>
  <h2> ---------- </h2>
  </section>
  <!-- ------------------------------ -->
  <section class="center">
    <div class="bg">
      <div class="sample">
        <ul>
          <li>あいうえおかきくけこ</li>
          <li>さしすせそ</li>
          <li>たちつてとなにぬねのはひふへほ</li>
        </ul>
      </div>
    </div>
    </div>
  </section>


  <div class="manbow">
    <a href="...">マンボウ</a>
  </div>

  <section>
    <form method="post" action=""> <?php //送信先が空なので、自分自身（index.php）を再度呼び出す
                                    ?>
      <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="your_name" value="<?php if (!empty($_POST['your_name'])) {
                                                      echo $_POST['your_name'];
                                                    } ?>">
        <!-- POSTパラメータが空じゃない場合のみvalue属性にセット -->
      </div>
      <div class="element_wrap">
        <label>メールアドレス</label>
        <input type="mail" name="email" value="<?php if (!empty($_POST['email'])) {
                                                  echo $_POST['email'];
                                                } ?>">
      </div>
      <div class="element_wrap">
        <label>性別</label>
        <label for="gender_male"><input id="gender_male" type="radio" name="gender" value="male">男性</label>
        <label for="gender_female"><input id="gender_female" type="radio" name="gender" value="female">女性</label>
      </div>
      <div class="element_wrap">
        <label>年齢</label>
        <select name="age">
          <option value="">選択してください</option>
          <option value="1">〜19歳</option>
          <option value="2">20歳〜29歳</option>
          <option value="3">30歳〜39歳</option>
          <option value="4">40歳〜49歳</option>
          <option value="5">50歳〜59歳</option>
          <option value="6">60歳〜</option>
        </select>
      </div>
      <div class="element_wrap">
        <label>お問い合わせ内容</label>
        <textarea name="contact"></textarea>
      </div>
      <div class="element_wrap">
        <label for="agreement"><input id="agreement" type="checkbox" name="agreement" value="1">プライバシーポリシーに同意する</label>
      </div>
      <input type="submit" name="btn_confirm" value="入力内容を確認する">
    </form>
  </section>



  <!-- ------------------------------ -->
</main>
<?php get_footer(); ?>

