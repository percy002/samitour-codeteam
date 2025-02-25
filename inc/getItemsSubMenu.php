<?php 
function getSubMenu(){

    $terms = get_terms(array(
        'taxonomy' => 'tipo_tour',
        'hide_empty' => false,
    ));
    
    $itemsSubmenu = array();
    
    if (count($terms) > 0) {
        foreach ($terms as $term) {
            // Obtener el campo personalizado 'portada' para cada término
            $portada = get_field('portada', 'term_' . $term->term_id);
            $portada_url = is_array($portada) ? $portada['url'] : ''; // Manejar el caso en que 'portada' no exista o no sea un array
        
            // Obtener los CPT asociados a cada término
            $query = new WP_Query(array(
                'post_type' => 'tour',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'tipo_tour',
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
                wp_reset_postdata();
            }
            var_dump($posts);
            // Almacenar la información en el array
            $itemsSubmenu[] = array(
                'term_id' => $term->term_id,
                'slug' => $term->slug,
                'name' => $term->name,
                'description' => $term->description,
                'portada' => $portada_url,
                'posts' => $posts,
            );
        }
    }

    return $itemsSubmenu;
}

// Ahora $items contiene toda la información estructurada
?>