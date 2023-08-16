<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Horeca_Menu_Items extends \Elementor\Widget_Base { 
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
		return 'menu items';
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
		return esc_html__( 'Horeca - Menu Items', 'horeca' );
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
		return 'eicon-table-of-contents';
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
		return [ 'horeca', 'menu', 'items' ];
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
			'version_section',
			[
				'label' => esc_html__( 'Menu Settings', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'version',
			[
				'label' => esc_html__( 'Version', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'v1',
				'options' => [
					'v1' => esc_html__( 'v1', 'horeca' ),
					'v2'  => esc_html__( 'v2', 'horeca' ),
					'v3'  => esc_html__( 'v3', 'horeca' ),
				],
			]
		);
		$this->add_control(
			'columns',
			[
				'label' => esc_html__( 'Columns', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '2',
				'options' => [
					'1' => esc_html__( '1', 'horeca' ),
					'2'  => esc_html__( '2', 'horeca' ),
					'3'  => esc_html__( '3', 'horeca' ),
				],
			]
		);
		$this->add_control(
			'alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Text Alignment', 'horeca' ),
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
				'default' => 'left',
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
				'default' => 'left',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Tab Names', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'tab_title1',
			[
				'label' => esc_html__( 'First Tab Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your tab title goes here.', 'horeca' ),
				'default' => 'Breakfast',
			],
		);
		$this->add_control(
			'tab_title2',
			[
				'label' => esc_html__( 'Second Tab Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your tab title goes here.', 'horeca' ),
				'default' => 'Lunch',
			],
		);
		$this->add_control(
			'tab_title3',
			[
				'label' => esc_html__( 'Third Tab Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your tab title goes here.', 'horeca' ),
				'default' => 'Brunch',
			],
		);
		$this->add_control(
			'tab_title4',
			[
				'label' => esc_html__( 'Fourth Tab Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your tab title goes here.', 'horeca' ),
				'default' => 'Dinner',
			],
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'content_section1',
			[
				'label' => esc_html__( 'Tab #1', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item_type1',
			[
				'label' => esc_html__( 'Item Type', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'product',
               'options' => [
                 'product' => esc_html__( 'Product', 'horeca' ),
                 'heading' => esc_html__( 'Heading', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'layout_heading1',
			[
				'label' => esc_html__( 'Item Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'layout_display1',
			[
				'label' => esc_html__( 'Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex' => esc_html__( 'List', 'horeca' ),
					'block'  => esc_html__( 'Grid', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'default_heading1',
			[
				'label' => esc_html__( 'Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_heading1',
			[
				'label' => esc_html__( 'Dish Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your heading goes here.', 'horeca' ),
			],
		);
		$repeater->add_control(
			'heading_size1',
			[
				'label' => esc_html__( 'Heading Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '30',
			]
		);
		$repeater->add_control(
         'heading_weight1',
         [
             'label' => esc_html__('Heading Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'heading_color1',
			[
				'label' => esc_html__( 'Heading Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading5',
			[
				'label' => esc_html__( 'Image Settings', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_image1',
			[
				'label' => esc_html__( 'Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
	  	'image_dimensions1',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'default' => [
		      'width' => '100',
		      'height' => '100',
		      'unit' => 'px',
		    ],
		  ]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_title1',
			[
				'label' => esc_html__( 'Dish Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Greek Salad',
			],
		);
		$repeater->add_control(
			'title_size1',
			[
				'label' => esc_html__( 'Title Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '20',
			]
		);
		$repeater->add_control(
         'title_weight1',
         [
             'label' => esc_html__('Title Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'title_color1',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading3',
			[
				'label' => esc_html__( 'Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_price1',
			[
				'label' => esc_html__( 'Dish Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Dish Price goes here.', 'horeca' ),
				'default' => '25.50',
			],
		);
		$repeater->add_control(
			'price_size1',
			[
				'label' => esc_html__( 'Price Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '18',
			]
		);
		$repeater->add_control(
         'price_weight1',
         [
             'label' => esc_html__('Price Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'price_color1',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading4',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_description1',
			[
				'label' => esc_html__( 'Dish Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Dish Description goes here.', 'horeca' ),
				'default' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives and feta cheese.',
			],
		);
		$repeater->add_control(
			'description_size1',
			[
				'label' => esc_html__( 'Description Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '15',
			]
		);
		$repeater->add_control(
         'description_weight1',
         [
             'label' => esc_html__('Description Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'description_color1',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading6',
			[
				'label' => esc_html__( 'Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_toggle1',
			[
				'label' => esc_html__( 'Show Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'dish_promotion1',
			[
				'label' => esc_html__( 'Dish Promotion', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recommended', 'horeca' ),
			]
		);
		$this->add_control( 
	        'tab1',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'dish_heading1' => esc_html__( 'APPETIZERS', 'horeca' ),
						'dish_title1' => esc_html__( 'Greek Salad', 'horeca' ),
						'dish_price1' => esc_html__( '$25.50', 'horeca' ),
						'dish_description1' => esc_html__( 'Tomatoes, green bell pepper, sliced cucumber
						 onion, olives, and feta cheese.', 'horeca' ),
					],
					[
						'dish_heading1' => esc_html__( 'MAINS', 'horeca' ),
						'dish_title1' => esc_html__( 'Lasagne', 'horeca' ),
						'dish_price1' => esc_html__( '$40.00', 'horeca' ),
						'dish_description1' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading1' => esc_html__( 'EXTRAS', 'horeca' ),
						'dish_title1' => esc_html__( 'Butternut Pumpkin', 'horeca' ),
						'dish_price1' => esc_html__( '$30.55', 'horeca' ),
						'dish_description1' => esc_html__( 'Typesetting industry simply dummy Ipsum is
						 simply dummy text of the priands.', 'horeca' ),
					],
					[
						'dish_heading1' => esc_html__( 'SODAS', 'horeca' ),
						'dish_title1' => esc_html__( 'Tokusen Wagyu', 'horeca' ),
						'dish_price1' => esc_html__( '$39.00', 'horeca' ),
						'dish_description1' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading1' => esc_html__( 'WINES', 'horeca' ),
						'dish_title1' => esc_html__( 'Opu Fish', 'horeca' ),
						'dish_price1' => esc_html__( '$40.00', 'horeca' ),
						'dish_description1' => esc_html__( 'Avocados with crab meat, red onion, crab salad
						 stuffed red bell pepper and green bell pepper.', 'horeca' ),
					],
					[
						'dish_heading1' => esc_html__( 'COCKTAILS', 'horeca' ),
						'dish_title1' => esc_html__( 'Olivas Rellenas', 'horeca' ),
						'dish_price1' => esc_html__( '$30.55', 'horeca' ),
						'dish_description1' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
				],
	        ]
	    );
		$this->end_controls_section();
		$this->start_controls_section(
			'content_section2',
			[
				'label' => esc_html__( 'Tab #2', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item_type2',
			[
				'label' => esc_html__( 'Item Type', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'product',
               'options' => [
                 'product' => esc_html__( 'Product', 'horeca' ),
                 'heading' => esc_html__( 'Heading', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'layout_heading2',
			[
				'label' => esc_html__( 'Item Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'layout_display2',
			[
				'label' => esc_html__( 'Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex' => esc_html__( 'List', 'horeca' ),
					'block'  => esc_html__( 'Grid', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'default_heading1',
			[
				'label' => esc_html__( 'Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_heading2',
			[
				'label' => esc_html__( 'Dish Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your heading goes here.', 'horeca' ),
				'default' => 'APPETIZERS',
			],
		);
		$repeater->add_control(
			'heading_size2',
			[
				'label' => esc_html__( 'Heading Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '30',
			]
		);
		$repeater->add_control(
         'heading_weight2',
         [
             'label' => esc_html__('Heading Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'heading_color2',
			[
				'label' => esc_html__( 'Heading Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading5',
			[
				'label' => esc_html__( 'Image Settings', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_image2',
			[
				'label' => esc_html__( 'Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
	  	'image_dimensions2',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'default' => [
		      'width' => '100',
		      'height' => '100',
		      'unit' => 'px',
		    ],
		  ]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_title2',
			[
				'label' => esc_html__( 'Dish Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Greek Salad',
			],
		);
		$repeater->add_control(
			'title_size2',
			[
				'label' => esc_html__( 'Title Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '20',
			]
		);
		$repeater->add_control(
         'title_weight2',
         [
             'label' => esc_html__('Title Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'title_color2',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading3',
			[
				'label' => esc_html__( 'Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_price2',
			[
				'label' => esc_html__( 'Dish Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Dish Price goes here.', 'horeca' ),
				'default' => '25.50',
			],
		);
		$repeater->add_control(
			'price_size2',
			[
				'label' => esc_html__( 'Price Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '18',
			]
		);
		$repeater->add_control(
         'price_weight2',
         [
             'label' => esc_html__('Price Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'price_color2',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading4',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_description2',
			[
				'label' => esc_html__( 'Dish Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Dish Description goes here.', 'horeca' ),
				'default' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives and feta cheese.',
			],
		);
		$repeater->add_control(
			'description_size2',
			[
				'label' => esc_html__( 'Description Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '15',
			]
		);
		$repeater->add_control(
         'description_weight2',
         [
             'label' => esc_html__('Description Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'description_color2',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading6',
			[
				'label' => esc_html__( 'Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_toggle2',
			[
				'label' => esc_html__( 'Show Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'dish_promotion2',
			[
				'label' => esc_html__( 'Dish Promotion', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recommended', 'horeca' ),
			]
		);
		$this->add_control( 
	        'tab2',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'dish_heading2' => esc_html__( 'APPETIZERS', 'horeca' ),
						'dish_title2' => esc_html__( 'Greek Salad', 'horeca' ),
						'dish_price2' => esc_html__( '$25.50', 'horeca' ),
						'dish_description2' => esc_html__( 'Tomatoes, green bell pepper, sliced cucumber
						 onion, olives, and feta cheese.', 'horeca' ),
					],
					[
						'dish_heading2' => esc_html__( 'MAINS', 'horeca' ),
						'dish_title2' => esc_html__( 'Lasagne', 'horeca' ),
						'dish_price2' => esc_html__( '$40.00', 'horeca' ),
						'dish_description2' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading2' => esc_html__( 'EXTRAS', 'horeca' ),
						'dish_title2' => esc_html__( 'Butternut Pumpkin', 'horeca' ),
						'dish_price2' => esc_html__( '$30.55', 'horeca' ),
						'dish_description2' => esc_html__( 'Typesetting industry simply dummy Ipsum is
						 simply dummy text of the priands.', 'horeca' ),
					],
					[
						'dish_heading2' => esc_html__( 'SODAS', 'horeca' ),
						'dish_title2' => esc_html__( 'Tokusen Wagyu', 'horeca' ),
						'dish_price2' => esc_html__( '$39.00', 'horeca' ),
						'dish_description2' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading2' => esc_html__( 'WINES', 'horeca' ),
						'dish_title2' => esc_html__( 'Opu Fish', 'horeca' ),
						'dish_price2' => esc_html__( '$40.00', 'horeca' ),
						'dish_description2' => esc_html__( 'Avocados with crab meat, red onion, crab salad
						 stuffed red bell pepper and green bell pepper.', 'horeca' ),
					],
					[
						'dish_heading2' => esc_html__( 'COCKTAILS', 'horeca' ),
						'dish_title2' => esc_html__( 'Olivas Rellenas', 'horeca' ),
						'dish_price2' => esc_html__( '$30.55', 'horeca' ),
						'dish_description2' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
				],
	        ]
	    );
		$this->end_controls_section();
		$this->start_controls_section(
			'content_section3',
			[
				'label' => esc_html__( 'Tab #3', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item_type3',
			[
				'label' => esc_html__( 'Item Type', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'product',
               'options' => [
                 'product' => esc_html__( 'Product', 'horeca' ),
                 'heading' => esc_html__( 'Heading', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'layout_heading3',
			[
				'label' => esc_html__( 'Item Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'layout_display3',
			[
				'label' => esc_html__( 'Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex' => esc_html__( 'List', 'horeca' ),
					'block'  => esc_html__( 'Grid', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_heading3',
			[
				'label' => esc_html__( 'Dish Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your heading goes here.', 'horeca' ),
				'default' => 'APPETIZERS',
			],
		);
		$repeater->add_control(
			'heading_size3',
			[
				'label' => esc_html__( 'Heading Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '30',
			]
		);
		$repeater->add_control(
         'heading_weight3',
         [
             'label' => esc_html__('Heading Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'heading_color3',
			[
				'label' => esc_html__( 'Heading Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading5',
			[
				'label' => esc_html__( 'Image Settings', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_image3',
			[
				'label' => esc_html__( 'Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
	  	'image_dimensions3',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'default' => [
		      'width' => '100',
		      'height' => '100',
		      'unit' => 'px',
		    ],
		  ]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_title3',
			[
				'label' => esc_html__( 'Dish Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Greek Salad',
			],
		);
		$repeater->add_control(
			'title_size3',
			[
				'label' => esc_html__( 'Title Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '20',
			]
		);
		$repeater->add_control(
         'title_weight3',
         [
             'label' => esc_html__('Title Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'title_color3',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading3',
			[
				'label' => esc_html__( 'Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_price3',
			[
				'label' => esc_html__( 'Dish Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Dish Price goes here.', 'horeca' ),
				'default' => '25.50',
			],
		);
		$repeater->add_control(
			'price_size3',
			[
				'label' => esc_html__( 'Price Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '18',
			]
		);
		$repeater->add_control(
         'price_weight3',
         [
             'label' => esc_html__('Price Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'price_color3',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading4',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_description3',
			[
				'label' => esc_html__( 'Dish Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Dish Description goes here.', 'horeca' ),
				'default' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives and feta cheese.',
			],
		);
		$repeater->add_control(
			'description_size3',
			[
				'label' => esc_html__( 'Description Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '15',
			]
		);
		$repeater->add_control(
         'description_weight3',
         [
             'label' => esc_html__('Description Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'description_color3',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading6',
			[
				'label' => esc_html__( 'Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_toggle3',
			[
				'label' => esc_html__( 'Show Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'dish_promotion3',
			[
				'label' => esc_html__( 'Dish Promotion', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recommended', 'horeca' ),
			]
		);
		$this->add_control( 
	        'tab3',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'dish_heading3' => esc_html__( 'APPETIZERS', 'horeca' ),
						'dish_title3' => esc_html__( 'Greek Salad', 'horeca' ),
						'dish_price3' => esc_html__( '$25.50', 'horeca' ),
						'dish_description3' => esc_html__( 'Tomatoes, green bell pepper, sliced cucumber
						 onion, olives, and feta cheese.', 'horeca' ),
					],
					[
						'dish_heading3' => esc_html__( 'MAINS', 'horeca' ),
						'dish_title3' => esc_html__( 'Lasagne', 'horeca' ),
						'dish_price3' => esc_html__( '$40.00', 'horeca' ),
						'dish_description3' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading3' => esc_html__( 'EXTRAS', 'horeca' ),
						'dish_title3' => esc_html__( 'Butternut Pumpkin', 'horeca' ),
						'dish_price3' => esc_html__( '$30.55', 'horeca' ),
						'dish_description3' => esc_html__( 'Typesetting industry simply dummy Ipsum is
						 simply dummy text of the priands.', 'horeca' ),
					],
					[
						'dish_heading3' => esc_html__( 'SODAS', 'horeca' ),
						'dish_title3' => esc_html__( 'Tokusen Wagyu', 'horeca' ),
						'dish_price3' => esc_html__( '$39.00', 'horeca' ),
						'dish_description3' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading3' => esc_html__( 'WINES', 'horeca' ),
						'dish_title3' => esc_html__( 'Opu Fish', 'horeca' ),
						'dish_price3' => esc_html__( '$40.00', 'horeca' ),
						'dish_description3' => esc_html__( 'Avocados with crab meat, red onion, crab salad
						 stuffed red bell pepper and green bell pepper.', 'horeca' ),
					],
					[
						'dish_heading3' => esc_html__( 'COCKTAILS', 'horeca' ),
						'dish_title3' => esc_html__( 'Olivas Rellenas', 'horeca' ),
						'dish_price3' => esc_html__( '$30.55', 'horeca' ),
						'dish_description3' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
				],
	        ]
	    );
		$this->end_controls_section();
		$this->start_controls_section(
			'content_section4',
			[
				'label' => esc_html__( 'Tab #4', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item_type4',
			[
				'label' => esc_html__( 'Item Type', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'product',
               'options' => [
                 'product' => esc_html__( 'Product', 'horeca' ),
                 'heading' => esc_html__( 'Heading', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'layout_heading4',
			[
				'label' => esc_html__( 'Item Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'layout_display4',
			[
				'label' => esc_html__( 'Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'flex',
				'options' => [
					'flex' => esc_html__( 'List', 'horeca' ),
					'block'  => esc_html__( 'Grid', 'horeca' ),
				],
			]
		);
		$repeater->add_control(
			'default_heading1',
			[
				'label' => esc_html__( 'Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_heading4',
			[
				'label' => esc_html__( 'Dish Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your heading goes here.', 'horeca' ),
				'default' => 'APPETIZERS',
			],
		);
		$repeater->add_control(
			'heading_size4',
			[
				'label' => esc_html__( 'Heading Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '30',
			]
		);
		$repeater->add_control(
         'heading_weight4',
         [
             'label' => esc_html__('Heading Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'heading_color4',
			[
				'label' => esc_html__( 'Heading Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading5',
			[
				'label' => esc_html__( 'Image Settings', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_image4',
			[
				'label' => esc_html__( 'Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
	  	'image_dimensions4',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'default' => [
		      'width' => '100',
		      'height' => '100',
		      'unit' => 'px',
		    ],
		  ]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_title4',
			[
				'label' => esc_html__( 'Dish Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Greek Salad',
			],
		);
		$repeater->add_control(
			'title_size4',
			[
				'label' => esc_html__( 'Title Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '20',
			]
		);
		$repeater->add_control(
         'title_weight4',
         [
             'label' => esc_html__('Title Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'title_color4',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading3',
			[
				'label' => esc_html__( 'Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_price4',
			[
				'label' => esc_html__( 'Dish Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Dish Price goes here.', 'horeca' ),
				'default' => '25.50',
			],
		);
		$repeater->add_control(
			'price_size4',
			[
				'label' => esc_html__( 'Price Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '18',
			]
		);
		$repeater->add_control(
         'price_weight4',
         [
             'label' => esc_html__('Price Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'price_color4',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading4',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_description4',
			[
				'label' => esc_html__( 'Dish Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Dish Description goes here.', 'horeca' ),
				'default' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives and feta cheese.',
			],
		);
		$repeater->add_control(
			'description_size4',
			[
				'label' => esc_html__( 'Description Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '15',
			]
		);
		$repeater->add_control(
         'description_weight4',
         [
             'label' => esc_html__('Description Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'options' => [
                 '' => __('Select', 'horeca'),
                 '400' => __('400', 'horeca'),
                 '500' => __('500', 'horeca'),
                 '600' => __('600', 'horeca'),
                 '700' => __('700', 'horeca'),
                 '800' => __('800', 'horeca'),
             ],
             'default' => '500',
         ]
      );
		$repeater->add_control(
			'description_color4',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
			]
		);
		$repeater->add_control(
			'default_heading6',
			[
				'label' => esc_html__( 'Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'dish_toggle4',
			[
				'label' => esc_html__( 'Show Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'dish_promotion4',
			[
				'label' => esc_html__( 'Dish Promotion', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recommended', 'horeca' ),
			]
		);
		$this->add_control( 
	        'tab4',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'dish_heading4' => esc_html__( 'APPETIZERS', 'horeca' ),
						'dish_title4' => esc_html__( 'Greek Salad', 'horeca' ),
						'dish_price4' => esc_html__( '$25.50', 'horeca' ),
						'dish_description4' => esc_html__( 'Tomatoes, green bell pepper, sliced cucumber
						 onion, olives, and feta cheese.', 'horeca' ),
					],
					[
						'dish_heading4' => esc_html__( 'MAINS', 'horeca' ),
						'dish_title4' => esc_html__( 'Lasagne', 'horeca' ),
						'dish_price4' => esc_html__( '$40.00', 'horeca' ),
						'dish_description4' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading4' => esc_html__( 'EXTRAS', 'horeca' ),
						'dish_title4' => esc_html__( 'Butternut Pumpkin', 'horeca' ),
						'dish_price4' => esc_html__( '$30.55', 'horeca' ),
						'dish_description4' => esc_html__( 'Typesetting industry simply dummy Ipsum is
						 simply dummy text of the priands.', 'horeca' ),
					],
					[
						'dish_heading4' => esc_html__( 'SODAS', 'horeca' ),
						'dish_title4' => esc_html__( 'Tokusen Wagyu', 'horeca' ),
						'dish_price4' => esc_html__( '$39.00', 'horeca' ),
						'dish_description4' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading4' => esc_html__( 'WINES', 'horeca' ),
						'dish_title4' => esc_html__( 'Opu Fish', 'horeca' ),
						'dish_price4' => esc_html__( '$40.00', 'horeca' ),
						'dish_description4' => esc_html__( 'Avocados with crab meat, red onion, crab salad
						 stuffed red bell pepper and green bell pepper.', 'horeca' ),
					],
					[
						'dish_heading4' => esc_html__( 'COCKTAILS', 'horeca' ),
						'dish_title4' => esc_html__( 'Olivas Rellenas', 'horeca' ),
						'dish_price4' => esc_html__( '$30.55', 'horeca' ),
						'dish_description4' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
				],
	        ]
	    );
		$this->end_controls_section();
		$this->start_controls_section(
			'content_style',
			[
				'label' => esc_html__( 'Menu Styling', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .horeca-menu-items-container',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .horeca-menu-items-container',
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
		$tab1 = $settings['tab1'];
		$tab2 = $settings['tab2'];
		$tab3 = $settings['tab3'];
		$tab4 = $settings['tab4'];
		$tab_title1 = $settings['tab_title1'];
		$tab_title2 = $settings['tab_title2'];
		$tab_title3 = $settings['tab_title3'];
		$tab_title4 = $settings['tab_title4'];
		$version = $settings['version'];
		$columns = $settings['columns'];
		$alignment = $settings['alignment'];
		$image_alignment = $settings['image_alignment'];

		echo do_shortcode('[horeca-menu-items tab1="'.base64_encode(serialize($tab1)).'" tab2="'.base64_encode(serialize($tab2)).'" tab3="'.base64_encode(serialize($tab3)).'" tab4="'.base64_encode(serialize($tab4)).'" tab_title1="'.base64_encode(serialize($tab_title1)).'" tab_title2="'.base64_encode(serialize($tab_title2)).'" tab_title3="'.base64_encode(serialize($tab_title3)).'" tab_title4="'.base64_encode(serialize($tab_title4)).'" version="'.$version.'" columns="'.$columns.'" alignment="'.$alignment.'" image_alignment="'.$image_alignment.'" ]');
		?>

<?php
	}						
}

