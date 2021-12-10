<?php

namespace Portfolio;

class Plugin {

    public function __construct()
    {
       // Constructor side i will place all my add_action, these allow me to connect a method on a hook 
       add_action(
        'init',
        [$this, 'portfolio_create_project_post_type']
        );

        add_action(
        'init',
        [$this, 'portfolio_create_techno_custom_taxonomy']
        );


    }

    public function portfolio_create_project_post_type()
    {

        // Method that allows us to add CPT
        $labels = [
            'name' => 'Projets',
            'all_items' => 'Tout les projets',
            'singular_name' => 'Projet',
            'add_new_item' => 'Ajouter un projet',
            'edit_item' => 'Modifier le projet',
            'menu_name' => 'Projets'
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => [
                'title',
                'editor',
                'thumbnail',
                'revisions',
                'excerpt',
                'custom-fields'
            ],
            'menu_position' => 5,
            'menu_icon' => 'dashicons-code-standards'
        ];

        register_post_type('projects', $args);

    }

    public function portfolio_create_techno_custom_taxonomy()
    {
        $labels = [
            'name' => 'Technos',
            'new_item_name' => 'Nom d\'une nouvelle techno',
        ];

        $args = [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'hierarchical' => false
        ];

        register_taxonomy('technos', 'projects', $args);
    }


}