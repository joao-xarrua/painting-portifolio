<!-- FOOTER -->
<footer class="footer-bg">
      <div class="footer">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-square.png" class="logo_footer" alt="Logo APT Pinturas" />
        <div class="footer-content">
          <h2><?php bloginfo('name'); ?></h2>
          <p>
            Somos uma empresa situada em Jundiaí (SP), que presta serviços por
            toda região, dedicados sempre a entregar a melhor qualidade de
            nossos projetos.
          </p>
          <span>(11)94910-9612</span>
          <p>
            <b><?php bloginfo('name'); ?></b> © <?php echo date("Y"); ?> - Todos os direitos reservados
          </p>
        </div>
      </div>
    </footer>
    <script src="<?php get_stylesheet_directory_uri();?>/js/scripts.js"></script>
    <!-- Abre footer WP -->
    <?php wp_footer();?>
    <!-- Fecha footer WP -->
  </body>
</html>
