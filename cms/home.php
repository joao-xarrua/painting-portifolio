<?php 
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_pagina_inicial() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial', // id deve ser único
    'title' => 'Página Inicial',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $cmb->add_field([
    'name' => 'Menu da Semana',
    'id' => 'menu',
    'type' => 'text',
  ]);
}

?>