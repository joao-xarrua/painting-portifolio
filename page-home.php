<?php 
// Template Name: Página Inicial
?>

<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- HEADER -->
    <section id="inicio" class="header-bg">
      <div class="header js-scroll">
        <h1><?php the_field('frase-principal-header');?></h1>
        <h2>
          <?php the_field('frase-secundaria-header');?>
        </h2>
        <a
          href="https://wa.me/5511949109612?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento."
          ><?php the_field('texto-botao-header');?>
        </a>
      </div>
    </section>

    <!-- CARDS -->
    <section class="cards">
      <?php
      $cartoes = get_field('cartoes');
      if (isset($cartoes)) { foreach ($cartoes as $cartao) { ?>
        <!-- CARD -->
        <div class="qualidade-card js-scroll">
          
          <img src="<?php echo $cartao['icone-card'];?>">
          <h2><?php echo $cartao['titulo-card']; ?></h2>
          <p>
          <?php echo $cartao['texto-card']; ?>
          </p>
        </div>
      <?php } } ?>
    </section>

    <!-- SERVIÇOS -->
    <section id="servicos" class="servicos js-scroll">
      <h2><?php the_field('titulo-servicos');?></h2>
      <span><?php the_field('subtitulo-servicos');?></span>

      <?php
      $servicos = get_field('servicos-list');
      if (isset($servicos)) { foreach ($servicos as $servico) { ?>
        <!-- SEVIÇO ITEM -->
        <div class="servico-item">
          <img src="<?php echo $servico['icone-servico'];?>"/>
          <div>
            <h3><?php echo $servico['titulo-servico'];?></h3>
            <p>
              <?php echo $servico['texto-servico'];?>
            </p>
          </div>
        </div>
      <?php } } ?>
    </section>

    <!-- CALLER -->
    <section class="caller-bg">
      <div class="caller js-scroll">
        <div class="caller-content">
          <h2><?php the_field('frase-principal-caller');?></h2>
          <p>
            <?php the_field('frase-secundaria-caller');?>
          </p>
        </div>
        <a
          href="https://wa.me/5511949109612?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento."
          ><?php the_field('texto-botao-caller');?>
        </a>
      </div>
    </section>

    <!-- PROJETOS -->
    <section id="projetos" class="projetos js-scroll">
      <h2><?php the_field('titulo-projetos');?></h2>
      <span><?php the_field('subtitulo-projetos');?></span>
      <div class="galeria">
        <?php
        $projetos = get_field('projetos-list');
        if (isset($projetos)) { foreach ($projetos as $projeto) { ?>
          <img src="<?php echo $projeto['imagem-projeto'];?>"/>
        <?php } }?>
      </div>
      <a href="projetos.html">Veja mais</a>
    </section>

<?php endwhile; else: endif; ?>
<?php get_footer();?>
    