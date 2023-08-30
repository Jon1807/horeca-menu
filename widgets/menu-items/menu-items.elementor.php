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
				'label' => esc_html__( 'Menu Items', 'horeca' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'item_type',
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
			'layout_heading',
			[
				'label' => esc_html__( 'Item Layout', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'layout_display',
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
				'condition' => [
					'item_type' => 'heading',
				],
			]
		);
		$repeater->add_control(
			'dish_heading',
			[
				'label' => esc_html__( 'Dish Heading', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your heading goes here.', 'horeca' ),
				'condition' => [
					'item_type' => 'heading',
				],
			],
		);
		$repeater->add_control(
			'heading_size',
			[
				'label' => esc_html__( 'Heading Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '30',
				'condition' => [
					'item_type' => 'heading',
				],
			]
		);
		$repeater->add_control(
         'heading_weight',
         [
             'label' => esc_html__('Heading Font weight', 'horeca'),
             'label_block' => true,
             'type' => \Elementor\Controls_Manager::SELECT,
             'condition' => [
					'item_type' => 'heading',
				],
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
			'heading_color',
			[
				'label' => esc_html__( 'Heading Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'item_type' => 'heading',
				],
			]
		);
		$repeater->add_control(
			'default_heading2',
			[
				'label' => esc_html__( 'Image Settings', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_image',
			[
				'label' => esc_html__( 'Image', 'horeca' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
	  	'image_dimensions',
		  [
		    'type' => \Elementor\Controls_Manager::IMAGE_DIMENSIONS,
		    'label' => __( 'Image Dimensions', 'horeca' ),
		    'condition' => [
				'item_type' => 'product',
			],
		    'default' => [
		      'width' => '100',
		      'height' => '100',
		      'unit' => 'px',
		    ],
		  ]
		);
		$repeater->add_control(
			'default_heading3',
			[
				'label' => esc_html__( 'Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_title',
			[
				'label' => esc_html__( 'Dish Title', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Your description goes here.', 'horeca' ),
				'default' => 'Greek Salad',
				'condition' => [
					'item_type' => 'product',
				],
			],
		);
		$repeater->add_control(
			'title_size',
			[
				'label' => esc_html__( 'Title Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '20',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
         'title_weight',
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
             'condition' => [
					'item_type' => 'product',
				],
         ]
      	);
		$repeater->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'default_heading4',
			[
				'label' => esc_html__( 'Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_price',
			[
				'label' => esc_html__( 'Dish Price', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Dish Price goes here.', 'horeca' ),
				'default' => '25.50',
				'condition' => [
					'item_type' => 'product',
				],
			],
		);
		$repeater->add_control(
			'price_size',
			[
				'label' => esc_html__( 'Price Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '18',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
         'price_weight',
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
             'condition' => [
					'item_type' => 'product',
				],
         ]
      	);
		$repeater->add_control(
			'price_color',
			[
				'label' => esc_html__( 'Title Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'default_heading5',
			[
				'label' => esc_html__( 'Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_description',
			[
				'label' => esc_html__( 'Dish Description', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Dish Description goes here.', 'horeca' ),
				'default' => 'Tomatoes, green bell pepper, sliced cucumber onion, olives and feta cheese.',
				'condition' => [
					'item_type' => 'product',
				],
			],
		);
		$repeater->add_control(
			'description_size',
			[
				'label' => esc_html__( 'Description Font size', 'horeca' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => '15',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
         'description_weight',
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
             'condition' => [
					'item_type' => 'product',
				],
         ]
      	);
		$repeater->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Description Color', 'horeca' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'default_heading6',
			[
				'label' => esc_html__( 'Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_toggle',
			[
				'label' => esc_html__( 'Show Label', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'dish_promotion',
			[
				'label' => esc_html__( 'Dish Promotion', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Recommended', 'horeca' ),
				'condition' => [
					'dish_toggle' => 'yes',
					'item_type' => 'product'
				],
			]
		);
		$repeater->add_control(
			'default_heading7',
			[
				'label' => esc_html__( 'Badges', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'badge_alignment',
			[
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'label' => esc_html__( 'Badge Alignment', 'horeca' ),
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
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'vegan_toggle',
			[
				'label' => esc_html__( 'Vegan', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'gluten_toggle',
			[
				'label' => esc_html__( 'Gluten Free', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'spicy_toggle',
			[
				'label' => esc_html__( 'Spicy', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'sugar_toggle',
			[
				'label' => esc_html__( 'Sugar free', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'alcohol_toggle',
			[
				'label' => esc_html__( 'Alcoholic', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'default_heading8',
			[
				'label' => esc_html__( 'Nutritional Info', 'horeca' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'calories_toggle',
			[
				'label' => esc_html__( 'Calories', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'calories',
			[
				'label' => esc_html__( 'Total Calories (Cal.)', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Calories go here.', 'horeca' ),
				'default' => '300',
				'condition' => [
					'item_type' => 'product',
					'calories_toggle' => 'yes',
				],
			],
		);
		$repeater->add_control(
			'fat_toggle',
			[
				'label' => esc_html__( 'Fat', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'fat',
			[
				'label' => esc_html__( 'Total Fat (g)', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Fat go here.', 'horeca' ),
				'default' => '9',
				'condition' => [
					'item_type' => 'product',
					'fat_toggle' => 'yes',
				],
			],
		);
		$repeater->add_control(
			'carbs_toggle',
			[
				'label' => esc_html__( 'Carbs', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'carbs',
			[
				'label' => esc_html__( 'Total Carbs (g)', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Carbs go here.', 'horeca' ),
				'default' => '12',
				'condition' => [
					'item_type' => 'product',
					'carbs_toggle' => 'yes',
				],
			],
		);
		$repeater->add_control(
			'proteins_toggle',
			[
				'label' => esc_html__( 'Proteins', 'horeca' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'horeca' ),
				'label_off' => esc_html__( 'Hide', 'horeca' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'item_type' => 'product',
				],
			]
		);
		$repeater->add_control(
			'proteins',
			[
				'label' => esc_html__( 'Total Protein (g)', 'horeca' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Proteins go here.', 'horeca' ),
				'default' => '15',
				'condition' => [
					'item_type' => 'product',
					'proteins_toggle' => 'yes',
				],
			],
		);
		$this->add_control( 
	        'tab1',
	        [
	            'label' => esc_html__('Menu Items', 'horeca'),
	            'type' => \Elementor\Controls_Manager::REPEATER,
	            'fields' => $repeater->get_controls(),
	            'default' => [
					[
						'dish_heading' => esc_html__( 'APPETIZERS', 'horeca' ),
						'dish_title' => esc_html__( 'Greek Salad', 'horeca' ),
						'dish_price' => esc_html__( '$25.50', 'horeca' ),
						'dish_description' => esc_html__( 'Tomatoes, green bell pepper, sliced cucumber
						 onion, olives, and feta cheese.', 'horeca' ),
					],
					[
						'dish_heading' => esc_html__( 'MAINS', 'horeca' ),
						'dish_title' => esc_html__( 'Lasagne', 'horeca' ),
						'dish_price' => esc_html__( '$40.00', 'horeca' ),
						'dish_description' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading' => esc_html__( 'EXTRAS', 'horeca' ),
						'dish_title' => esc_html__( 'Butternut Pumpkin', 'horeca' ),
						'dish_price' => esc_html__( '$30.55', 'horeca' ),
						'dish_description' => esc_html__( 'Typesetting industry simply dummy Ipsum is
						 simply dummy text of the priands.', 'horeca' ),
					],
					[
						'dish_heading' => esc_html__( 'SODAS', 'horeca' ),
						'dish_title' => esc_html__( 'Tokusen Wagyu', 'horeca' ),
						'dish_price' => esc_html__( '$39.00', 'horeca' ),
						'dish_description' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
						 sauce, seasonings and spices.', 'horeca' ),
					],
					[
						'dish_heading' => esc_html__( 'WINES', 'horeca' ),
						'dish_title' => esc_html__( 'Opu Fish', 'horeca' ),
						'dish_price' => esc_html__( '$40.00', 'horeca' ),
						'dish_description' => esc_html__( 'Avocados with crab meat, red onion, crab salad
						 stuffed red bell pepper and green bell pepper.', 'horeca' ),
					],
					[
						'dish_heading' => esc_html__( 'COCKTAILS', 'horeca' ),
						'dish_title' => esc_html__( 'Olivas Rellenas', 'horeca' ),
						'dish_price' => esc_html__( '$30.55', 'horeca' ),
						'dish_description' => esc_html__( 'Vegetables, cheeses, ground meats, tomato
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
		$version = $settings['version'];
		$columns = $settings['columns'];
		$alignment = $settings['alignment'];
		$image_alignment = $settings['image_alignment'];

		echo do_shortcode('[horeca-menu-items tab1="'.base64_encode(serialize($tab1)).'" version="'.$version.'" columns="'.$columns.'" alignment="'.$alignment.'" image_alignment="'.$image_alignment.'" ]');
		?>
<?php
	}						
}

