<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Horeca_Social_Media_Links extends \Elementor\Widget_Base { 
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
		return 'social media links';
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
		return esc_html__( 'Horeca - Social Media Links', 'horeca' );
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
		return 'eicon-shape';
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
		return [ 'horeca', 'social', 'media', 'links' ];
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
				'label' => esc_html__( 'Meeek Social Icons', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .horeca-icon-link' => 'color: {{VALUE}}',
				],
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'horeca' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'social',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'fa-solid',
				],
			]
		);

		$this->add_control(
			'icons_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Icons Alignment', 'horeca' ),
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

	  $repeater->add_control(
            'link',
            [
                'label' => esc_html__( 'Link', 'horeca' ),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => esc_html__( 'https://your-link.com', 'horeca' ),
                'options' => [ 'url', 'is_external', 'nofollow' ],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

		$this->add_control( 
	        'list',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-facebook',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #2', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-instagram',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #3', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-youtube',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #4', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-spotify',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #5', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-snapchat',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #6', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-linkedin',
							'library' => 'fa-solid',
						],
					],
					[
						'text' => esc_html__( 'List Item #7', 'horeca' ),
						'icon' => [
							'value' => 'fab fa-steam',
							'library' => 'fa-solid',
						],
					],
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
		$list = $settings['list'];// var_dump($list);
		$icons_alignment = $settings['icons_alignment'];
		// get the individual values of the input

		echo do_shortcode('[horeca-social-media-links list="'.base64_encode(serialize($list)).'" icons_alignment="'.$icons_alignment.'"]');
	}						
}
