<?php get_header(); ?>
 <main class="main">
    <div class="slider">
      <button class="arrow left">&lt;</button>
      <div class="slider-window">
        <div class="slider-track">
          <div class="slide">
            <img src="http://site/wp-content/uploads/2024/12/игрушки.jpg" alt="">
          </div>
        </div>
      </div>
      <button class="arrow right">&gt;</button>
    </div>
    

    <section class="section">
      <div class="section-content">
        <div class="block1">
        <img class="img-gir" src="http://site/wp-content/uploads/2024/12/9588_13_12_2022_16_24_57-1005x670-1.jpg" alt="Гирлянды">
        <div class="card1">
        <h2>Гирлянды</h2>
        <p>Создайте уют и праздничную атмосферу с нашими гирляндами.</p>
      </div>
      </div>
      
      <div class="block2">
        <div class="card2">
        <h2>Подарки</h2>
        <p>Идеи подарков для ваших близких и друзей.</p>
      </div>
        <img class="img-gifts" src="http://site/wp-content/uploads/2024/12/подарки.jpg" alt="Подарки">
      </div>
      </div>
    </section>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="qazx"><?php the_title(); ?></p>
     <?php endwhile; else: ?>
        <p class="qazx"> Записей нет.</p>
      <?php endif; ?>
    <section class="dop">
      <div class="dop-item">Скидки до 50%</div>
      <div class="dop-item">Бесплатная доставка</div>
    </section>
  
  </main>
<?php get_footer(); ?>