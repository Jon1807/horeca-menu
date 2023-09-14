<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Horeca_About_Me extends \Elementor\Widget_Base { 
   /**
	 * Get widget name.
	 *
	 * Retrieve Card widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */

	public function get_name() {
		return 'about me';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Card widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Horeca - About Me', 'horeca' );
	}

    /**
	 * Get widget icon.
	 *
	 * Retrieve Card widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-t-letter-bold';
	}

    /**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://www.modeltheme.com/';
	}

    /**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

    /**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'about', 'me', 'horeca' ];
	}

	public function get_link() {
		return 'link';
	}
    /**
	 * Register Card widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function register_controls() { 
		// our control function code goes here.

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content Section', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'about_us_image',
			[
				'label' => esc_html__( 'Choose Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
	  	'image_dimensions',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'default' => [
		      'width' => '200',
		      'height' => '200',
		      'unit' => 'px',
		    ],
		  ]
		);

		$this->add_control(
			'image_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Image Alignment', 'horeca' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'horeca' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'horeca' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'horeca' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_control(
			'about_us_title',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Your main title goes here.', 'horeca' ),
				'default' => 'Jenn',
			],
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .horeca-about-me-title',
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .horeca-about-me-title' => 'color: {{VALUE}}',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'title_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Title Alignment', 'horeca' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'horeca' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'horeca' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'horeca' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_control(
            'padding_title',
            [
                'label' => esc_html__( 'Title Padding', 'horeca' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .horeca-about-me-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default' => [
                'unit' => 'px',
                'size' => 150,
            ],
         ]
       );

		$this->add_control(
			'about_us_description',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'default' => 'Curating all things home decor, fashion, food and travel',
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Curating all things home decor, fashion, food and travel',
			],
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .horeca-about-me-description',
			]
		);	

		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .horeca-about-me-description' => 'color: {{VALUE}}',
				],
				'default' => '#000',
			]
		);

		$this->add_control(
			'description_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Description Alignment', 'horeca' ),
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'horeca' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'horeca' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'horeca' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_control(
            'padding_description',
            [
                'label' => esc_html__( 'Description Padding', 'horeca' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .horeca-about-me-description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
            ],
            'default' => [
                'unit' => 'px',
                'size' => 150,
            ],
         ]
       );

		$this->end_controls_section();

	}

    /**
	 * Render Card widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() { 

		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();
		// get the individual values of the input
		$about_us_image = $settings['about_us_image']['url'];
		$about_us_title = $settings['about_us_title'];
		$about_us_description = $settings['about_us_description'];
		$title_alignment = $settings['title_alignment'];
		$description_alignment = $settings['description_alignment'];
		$image_alignment = $settings['image_alignment'];

		$image_dimensions = $this->get_settings_for_display( 'image_dimensions' );
		$image_width = $image_dimensions['width'];
		$image_height = $image_dimensions['height'];

		echo do_shortcode('[horeca-about-me about_us_image="'.$about_us_image.'" about_us_title="'.$about_us_title.'" about_us_description="'.$about_us_description.'" title_alignment="'.$title_alignment.'" description_alignment="'.$description_alignment.'" image_alignment="'.$image_alignment.'" image_width="'.$image_width.'" image_height="'.$image_height.'"]');
	}						
}


