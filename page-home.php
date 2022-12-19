<?php 
// Template Name: Página Inicial
?>

<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- HEADER -->
    <section id="inicio" class="header-bg">
      <div class="header js-scroll">
        <h1>Pintura Predial e Comercial em Jundiaí e Região</h1>
        <h2>
          Aplicação de Epoxi, restauração e acabamento de estruturas e outros
          serviços.
        </h2>
        <a
          href="https://wa.me/5511949109612?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento."
          >Solicite um orçamento
        </a>
      </div>
    </section>

    <!-- CARDS -->
    <section class="cards">
      <!-- CARD 1 -->
      <div class="qualidade-card js-scroll">
        <svg
          width="60"
          height="60"
          viewBox="0 0 60 60"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M41.2 26.025C40.225 27 38.6 27 37.625 26.025L26.45 14.875L8.825 32.475L7.175 30.9C5.77049 29.4937 4.9816 27.5875 4.9816 25.6C4.9816 23.6125 5.77049 21.7063 7.175 20.3L17.775 9.7C19.1813 8.2955 21.0875 7.5066 23.075 7.5066C25.0625 7.5066 26.9687 8.2955 28.375 9.7L41.2 22.5C42.175 23.475 42.175 25.05 41.2 26.025ZM42.95 20.725C44.9 22.675 44.9 25.85 42.95 27.8C39.775 30.975 36.425 28.35 35.875 27.8L26.475 18.4L12.55 32.325C12.3182 32.5563 12.1344 32.831 12.0089 33.1334C11.8835 33.4359 11.8189 33.7601 11.8189 34.0875C11.8189 34.4149 11.8835 34.7391 12.0089 35.0416C12.1344 35.344 12.3182 35.6187 12.55 35.85C13.525 36.825 15.1 36.825 16.1 35.85L27.65 24.3L29.425 26.075L17.875 37.625C17.6432 37.8563 17.4594 38.131 17.3339 38.4334C17.2085 38.7359 17.1439 39.0601 17.1439 39.3875C17.1439 39.7149 17.2085 40.0391 17.3339 40.3416C17.4594 40.644 17.6432 40.9187 17.875 41.15C18.85 42.125 20.425 42.125 21.425 41.15L32.975 29.6L34.75 31.375L23.2 42.925C22.9685 43.1565 22.7849 43.4312 22.6597 43.7336C22.5344 44.0361 22.4699 44.3602 22.4699 44.6875C22.4699 45.0148 22.5344 45.339 22.6597 45.6414C22.7849 45.9438 22.9685 46.2185 23.2 46.45C23.4315 46.6815 23.7062 46.8651 24.0086 46.9903C24.311 47.1156 24.6352 47.1801 24.9625 47.1801C25.2898 47.1801 25.6139 47.1156 25.9164 46.9903C26.2188 46.8651 26.4935 46.6815 26.725 46.45L38.275 34.9L40.05 36.675L28.5 48.225C28.2685 48.4565 28.0849 48.7312 27.9597 49.0336C27.8344 49.3361 27.7699 49.6602 27.7699 49.9875C27.7699 50.3148 27.8344 50.639 27.9597 50.9414C28.0849 51.2438 28.2685 51.5186 28.5 51.75C28.9674 52.2174 29.6014 52.48 30.2625 52.48C30.5898 52.48 30.9139 52.4156 31.2164 52.2903C31.5188 52.1651 31.7935 51.9815 32.025 51.75L52.825 30.9C54.2295 29.4937 55.0184 27.5875 55.0184 25.6C55.0184 23.6125 54.2295 21.7063 52.825 20.3L42.225 9.7C40.8446 8.32108 38.9813 7.53415 37.0304 7.50614C35.0795 7.47814 33.1944 8.21126 31.775 9.55L42.95 20.725Z"
            fill="white" />
        </svg>
        <h2>Profissionalismo</h2>
        <p>
          Profissionais dedicados e preparados para o mais diversos tipos de
          serviços. Temos a garantia do excelente resultado de nosso trabalho.
        </p>
      </div>

      <!-- CARD 2 -->
      <div class="qualidade-card js-scroll">
        <svg
          width="60"
          height="60"
          viewBox="0 0 60 60"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M26.25 32.5H20V25H26.25V18.75H33.75V25H40V32.5H33.75V38.75H26.25V32.5ZM30 5L10 12.5V27.725C10 40.35 18.525 52.125 30 55C41.475 52.125 50 40.35 50 27.725V12.5L30 5Z"
            fill="white" />
        </svg>
        <h2>SEGURANÇA</h2>
        <p>
          A integridade de nossos trabalhadores e satisfação de nossos clientes
          são nosso principal objetivo, por isso contamos com todos os
          equipamentos e normas de segurança necesárias durante todo o projeto.
        </p>
      </div>

      <!-- CARD 3 -->
      <div class="qualidade-card js-scroll">
        <svg
          width="60"
          height="60"
          viewBox="0 0 60 60"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M50 10H10C7.25 10 5.025 12.25 5.025 15L5 45C5 47.75 7.25 50 10 50H50C52.75 50 55 47.75 55 45V15C55 12.25 52.75 10 50 10ZM50 20L30 32.5L10 20V15L30 27.5L50 15V20Z"
            fill="white" />
        </svg>
        <h2>emitimos nota fiscal</h2>
        <p>
          Trabalhamos sempre com a documentação necessária para garantir a
          segurança e entrega do projeto para nossos clientes.
        </p>
      </div>
    </section>

    <!-- SERVIÇOS -->
    <section id="servicos" class="servicos js-scroll">
      <h2>Serviços</h2>
      <span>Conheça nossos serviços</span>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/painting-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brush-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/roll-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pallette-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/painting-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>

      <!-- SEVIÇO ITEM -->
      <div class="servico-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/brush-icon.png" alt="Balde de tinta icone" />
        <div>
          <h3>Pintura de Epóxi</h3>
          <p>
            Lorem ipsum dolot siamet a Lorem ipsum dolot siametLorem ipsum dolot
            siamet
          </p>
        </div>
      </div>
    </section>

    <!-- CALLER -->
    <section class="caller-bg">
      <div class="caller js-scroll">
        <div class="caller-content">
          <h2>Entre em contato!</h2>
          <p>
            Tire suas dúvidas ou solicite um orçamento. Nossa equipe está sempre
            à disposição para atendê-lo.
          </p>
        </div>
        <a
          href="https://wa.me/5511949109612?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento."
          >Whatsapp
        </a>
      </div>
    </section>

    <!-- PROJETOS -->
    <section id="projetos" class="projetos js-scroll">
      <h2>Projetos</h2>
      <span>Nossos projetos mais recentes</span>
      <div class="galeria">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3-projeto.jpg" alt="" />
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4-projeto.jpg" alt="" />
      </div>
      <a href="projetos.html">Veja mais</a>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer();?>
    