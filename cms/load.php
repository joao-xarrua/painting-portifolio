<?php 
    // FUNÇÕES ---------------------------
    // funções para facilitar o uso de campos nas páginas
    function get_field($key, $page_id = 0) {
        $id = $page_id !== 0 ? $page_id : get_the_ID();
        return get_post_meta($id, $key, true);
    }

    function the_field($key, $page_id = 0) {
        echo get_field($key, $page_id);
    }

    // usar campos externos em diferentes páginas
    function general_field($key, $another_page) {
        $pag = get_page_by_title($another_page)->ID;
        the_field($key, $pag);
    }

    // usar imagem como campo
    function image_field($field_id, $size = 'full') {
        $imagem = wp_get_attachment_image_src(get_field($field_id), $size)[0];
        return $imagem;
    }

    // carrega os campos do CMB2
    require_once get_template_directory() . './cms/adicionar_script.php';
?>