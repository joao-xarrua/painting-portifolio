<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
    <!-- Abre header WP -->
    <?php wp_head();?>
    <!-- Fecha header WP -->
  </head>
  <body>
    <!-- TOPBAR -->
    <div class="topbar-bg">
      <div class="topbar">
        <p>
          Entre em contato através de nossas redes sociais ou pelo número
          <span class="phone-top">(11) 91234-5678</span>
        </p>
        <ul>
          <li>
            <a href="">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="red"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14 13.5H16.5L17.5 9.5H14V7.5C14 6.47 14 5.5 16 5.5H17.5V2.14C17.174 2.097 15.943 2 14.643 2C11.928 2 10 3.657 10 6.7V9.5H7V13.5H10V22H14V13.5Z"
                  fill="black" />
              </svg>
            </a>
          </li>
          <li>
            <a href="">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2M7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7M12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z"
                  fill="black" />
              </svg>
            </a>
          </li>
          <li>
            <a
              href="https://wa.me/5511949109612?text=Ol%C3%A1%2C%20gostaria%20de%20fazer%20um%20or%C3%A7amento.">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M12.0117 2C6.50572 2 2.02348 6.47838 2.02148 11.9844C2.02048 13.7444 2.48147 15.4626 3.35547 16.9766L2 22L7.23242 20.7637C8.69142 21.5597 10.3339 21.9775 12.0059 21.9785H12.0098C17.5148 21.9785 21.995 17.4991 21.998 11.9941C22 9.32514 20.9622 6.81573 19.0762 4.92773C17.1902 3.04073 14.6837 2.001 12.0117 2ZM12.0098 4C14.1458 4.001 16.1531 4.8338 17.6621 6.3418C19.1711 7.8518 20 9.85819 19.998 11.9922C19.996 16.3962 16.4138 19.9785 12.0078 19.9785C10.6748 19.9775 9.35441 19.6428 8.19141 19.0078L7.51758 18.6406L6.77344 18.8164L4.80469 19.2813L5.28516 17.4961L5.50195 16.6953L5.08789 15.9766C4.38989 14.7686 4.02048 13.3874 4.02148 11.9844C4.02348 7.58238 7.60677 4 12.0098 4ZM8.47656 7.375C8.30956 7.375 8.03955 7.4375 7.81055 7.6875C7.58155 7.9365 6.93555 8.53958 6.93555 9.76758C6.93555 10.9956 7.83008 12.1826 7.95508 12.3496C8.07908 12.5156 9.68175 15.1152 12.2188 16.1152C14.3268 16.9462 14.7549 16.7822 15.2129 16.7402C15.6709 16.6992 16.6904 16.1377 16.8984 15.5547C17.1064 14.9717 17.1069 14.4702 17.0449 14.3672C16.9829 14.2632 16.8164 14.2012 16.5664 14.0762C16.3174 13.9512 15.0903 13.3486 14.8613 13.2656C14.6323 13.1826 14.4648 13.1406 14.2988 13.3906C14.1328 13.6406 13.6558 14.2012 13.5098 14.3672C13.3638 14.5342 13.2188 14.5566 12.9688 14.4316C12.7188 14.3056 11.9149 14.0414 10.9609 13.1914C10.2189 12.5304 9.71827 11.7148 9.57227 11.4648C9.42727 11.2158 9.55859 11.0791 9.68359 10.9551C9.79559 10.8431 9.93164 10.6636 10.0566 10.5176C10.1806 10.3716 10.2236 10.2676 10.3066 10.1016C10.3896 9.93556 10.3472 9.78906 10.2852 9.66406C10.2232 9.53906 9.73763 8.3065 9.51563 7.8125C9.32863 7.3975 9.13113 7.38786 8.95313 7.38086C8.80813 7.37486 8.64256 7.375 8.47656 7.375Z"
                  fill="black" />
              </svg>
            </a>
          </li>
          <li>
            <a href="">
              <svg
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M19.23 15.26L16.69 14.97C16.3914 14.9349 16.0887 14.968 15.8046 15.0667C15.5206 15.1654 15.2626 15.3273 15.05 15.54L13.21 17.38C10.3712 15.9362 8.06382 13.6288 6.62004 10.79L8.47004 8.94C8.90004 8.51 9.11004 7.91 9.04004 7.3L8.75004 4.78C8.69335 4.29218 8.45923 3.84224 8.09228 3.51585C7.72532 3.18946 7.25115 3.00942 6.76004 3.01H5.03004C3.90004 3.01 2.96004 3.95 3.03004 5.08C3.56004 13.62 10.39 20.44 18.92 20.97C20.05 21.04 20.99 20.1 20.99 18.97V17.24C21 16.23 20.24 15.38 19.23 15.26V15.26Z"
                  fill="black" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- NAVBAR -->
    <nav class="navbar-bg">
      <div class="navbar js-scroll">
        <h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Alex Pinturas" /></h1>
        <svg
          class="menu-icon"
          width="40"
          height="40"
          viewBox="0 0 30 30"
          fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M5 22.5H25C25.6875 22.5 26.25 21.9375 26.25 21.25C26.25 20.5625 25.6875 20 25 20H5C4.3125 20 3.75 20.5625 3.75 21.25C3.75 21.9375 4.3125 22.5 5 22.5ZM5 16.25H25C25.6875 16.25 26.25 15.6875 26.25 15C26.25 14.3125 25.6875 13.75 25 13.75H5C4.3125 13.75 3.75 14.3125 3.75 15C3.75 15.6875 4.3125 16.25 5 16.25ZM3.75 8.75C3.75 9.4375 4.3125 10 5 10H25C25.6875 10 26.25 9.4375 26.25 8.75C26.25 8.0625 25.6875 7.5 25 7.5H5C4.3125 7.5 3.75 8.0625 3.75 8.75Z"
            fill="white" />
        </svg>
        <div class="links-list">
          <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#projetos">Projetos</a></li>
            <li><a href="./sobre.html" class="link-externo">Sobre</a></li>
            <li><a href="./contato.html" class="link-externo">Contato</a></li>
          </ul>
        </div>
      </div>
    </nav>