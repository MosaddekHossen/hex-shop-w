<?php
new \Kirki\Panel(
    'hexShop_panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__('Header Options', 'hexShop'),
        'description' => esc_html__('My Panel Description.', 'hexShop'),
    ]
);

// hexShop_header_logo
function hexShop_header_logo()
{
    new \Kirki\Section(
        'logo_section_id',
        [
            'title'       => esc_html__('Logo Section', 'hexShop'),
            'description' => esc_html__('Logo Section Description.', 'hexShop'),
            'panel'       => 'hexShop_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'hexShop_header_logo',
            'label'       => esc_html__('hexShop header logo', 'hexShop'),
            'description' => esc_html__('The saved value will be the URL.', 'hexShop'),
            'section'     => 'logo_section_id',
            'default'     => get_template_directory_uri() . '/assets/imgs/logo.svg',
        ]
    );
}
hexShop_header_logo();

// hexShop_copyright
function hexShop_copyright()
{
    new \Kirki\Section(
        'hexShop_copyright_section_id',
        [
            'title'       => esc_html__('Footer Copyright', 'hexShop'),
            'description' => esc_html__('My Copyright Section.', 'hexShop'),
            'panel'       => 'hexShop_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'hexShop_copyright_id',
            'label'    => esc_html__('hexShop Copyright', 'hexShop'),
            'section'  => 'hexShop_copyright_section_id',
            'default'  => esc_html__('&copy; Copyright 2024 Made with <i class="ti-heart text-danger"></i> By <a href="#">DevCRUD', 'hexShop'),
            'priority' => 10,
        ]
    );
}
hexShop_copyright();
