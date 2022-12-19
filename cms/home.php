<?php 
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial_header');
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial_cards');
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial_servicos');
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial_caller');
add_action('cmb2_admin_init', 'cmb2_fields_pagina_inicial_projetos');

// array('item1', 'item2') === ['item1', 'item2']
function cmb2_fields_pagina_inicial_header() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial-header', // id deve ser único
    'title' => 'Cabeçalho',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $cmb->add_field([
    'name' => 'Frase Principal',
    'id' => 'frase-principal-header',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Frase Secundária',
    'id' => 'frase-secundaria-header',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Texto Botão',
    'id' => 'texto-botao-header',
    'type' => 'text',
  ]);
}

function cmb2_fields_pagina_inicial_cards() {
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial-cards', // id deve ser único
    'title' => 'Cartões',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  // O campo repetidor é do tipo group
  $cards = $cmb->add_field([
    'name' => 'Cartões',
    'id' => 'cartoes',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Cartão {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  // Cada campo é adicionado com add_group_field
  // Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($cards, [
    'name' => 'Icone',
    'id' => 'icone-card',
    'type' => 'file',
    'options' => ([
      'url' => false, // Hide the text input for the url
    ]),
    'text' => ([
      'add_upload_file_text' => 'Adicionar Arquivo' // Change upload button text. Default: "Add or Upload File"
    ]),
  ]);

  $cmb->add_group_field($cards, [
    'name' => 'Titulo',
    'id' => 'titulo-card',
    'type' => 'text',
  ]);

  $cmb->add_group_field($cards, [
    'name' => 'Texto',
    'id' => 'texto-card',
    'type' => 'textarea_small',
  ]);
}

function cmb2_fields_pagina_inicial_servicos() {
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial-servicos', // id deve ser único
    'title' => 'Serviços',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $cmb->add_field([
    'name' => 'Titulo',
    'id' => 'titulo-servicos',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Subtitulo',
    'id' => 'subtitulo-servicos',
    'type' => 'text',
  ]);

  // O campo repetidor é do tipo group
  $servicos = $cmb->add_field([
    'name' => 'Serviços',
    'id' => 'servicos-list',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Serviço {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  // Cada campo é adicionado com add_group_field
  // Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($servicos, [
    'name' => 'Icone',
    'id' => 'icone-servico',
    'type' => 'file',
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text' => array(
      'add_upload_file_text' => 'Adicionar Arquivo' // Change upload button text. Default: "Add or Upload File"
    ),
  ]);

  $cmb->add_group_field($servicos, [
    'name' => 'Titulo',
    'id' => 'titulo-servico',
    'type' => 'text',
  ]);

  $cmb->add_group_field($servicos, [
    'name' => 'Texto',
    'id' => 'texto-servico',
    'type' => 'textarea_small',
  ]);
}

function cmb2_fields_pagina_inicial_caller() {
  // Adiciona um bloco
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial-caller', // id deve ser único
    'title' => 'Chama contato',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $cmb->add_field([
    'name' => 'Frase Principal',
    'id' => 'frase-principal-caller',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Frase Secundária',
    'id' => 'frase-secundaria-caller',
    'type' => 'textarea_small',
  ]);

  $cmb->add_field([
    'name' => 'Texto Botão',
    'id' => 'texto-botao-caller',
    'type' => 'text',
  ]);
}

function cmb2_fields_pagina_inicial_projetos() {
  $cmb = new_cmb2_box([
    'id' => 'pagina-inicial-projetos', // id deve ser único
    'title' => 'Projetos',
    'object_types' => ['page'], // tipo de post
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php',
    ], // modelo de página
  ]);

  $cmb->add_field([
    'name' => 'Titulo',
    'id' => 'titulo-projetos',
    'type' => 'text',
  ]);

  $cmb->add_field([
    'name' => 'Subtitulo',
    'id' => 'subtitulo-projetos',
    'type' => 'text',
  ]);

  // O campo repetidor é do tipo group
  $servicos = $cmb->add_field([
    'name' => 'Projetos',
    'id' => 'projetos-list',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Projeto {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  // Cada campo é adicionado com add_group_field
  // Passando sempre o campo de grupo como primeiro argumento
  $cmb->add_group_field($servicos, [
    'name' => 'Imagem Projeto',
    'id' => 'imagem-projeto',
    'type' => 'file',
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text' => array(
      'add_upload_file_text' => 'Adicionar Arquivo' // Change upload button text. Default: "Add or Upload File"
    ),
  ]);
}
?>