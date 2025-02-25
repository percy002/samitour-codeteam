<?php 
function getMenu() {
    $menu_name = 'primary-menu'; // Nombre del menú registrado
    $locations = get_nav_menu_locations();
    $menu_id = $locations[$menu_name];
    $menu_items = wp_get_nav_menu_items($menu_id);

    $itemsSubmenu = array();

    foreach ($menu_items as $menu_item) {
        $item = array(
            'ID' => $menu_item->ID,
            'title' => $menu_item->title,
            'url' => $menu_item->url,
            'type' => $menu_item->type,
        );
        // Si el elemento del menú es una taxonomía, obtener los términos relacionados
        if ($menu_item->type == 'taxonomy') {
            $term = get_term($menu_item->object_id, $menu_item->object);
            if ($term) {
                $portada = get_field('portada', 'term_' . $term->term_id);

                $query = new WP_Query(array(
                    'post_type' => 'tour',
                    'tax_query' => array(
                        array(
                            'taxonomy' => $term->taxonomy,
                            'field' => 'term_id',
                            'terms' => $term->term_id,
                        ),
                    ),
                ));

                $posts = array();
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $posts[] = array(
                            'title' => get_the_title(),
                            'permalink' => get_permalink(),
                        );
                    }
                }
                
                $item['term_id'] = $term->term_id;
                $item['slug'] = $term->slug;
                $item['name'] = $term->name;
                $item['description'] = $term->description;
                $item['portada'] = $portada['url'];
                $item['posts'] = $posts;
            }
            wp_reset_postdata();
        }

        // Agregar el elemento al array de submenús
        $itemsSubmenu[] = $item;
    }

    return $itemsSubmenu;
}
?>