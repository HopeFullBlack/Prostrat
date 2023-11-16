<?php

class DSM_Business_Hours_Child extends ET_Builder_Module {

	public $slug       = 'dsm_business_hours_child';
	public $vb_support = 'on';
	public $type       = 'child';

	protected $module_credits = array(
		'module_uri' => 'https://divisupreme.com/',
		'author'     => 'Divi Supreme',
		'author_uri' => 'https://divisupreme.com/',
	);

	public function init() {
		$this->name                        = esc_html__( 'Business Hours Item', 'dsm-supreme-modules-pro-for-divi' );
		$this->advanced_setting_title_text = esc_html__( 'Business Hours Item', 'dsm-supreme-modules-pro-for-divi' );
		$this->settings_text               = esc_html__( 'Business Hours Item Settings', 'dsm-supreme-modules-pro-for-divi' );
		$this->child_title_var             = 'admin_title';
		$this->child_title_fallback_var    = 'title';

		$this->settings_modal_toggles = array(
			'general'    => array(
				'toggles' => array(
					'main_content' => esc_html__( 'Text', 'dsm-supreme-modules-pro-for-divi' ),
					'link'         => esc_html__( 'Link', 'dsm-supreme-modules-pro-for-divi' ),
					'image'        => esc_html__( 'Image', 'dsm-supreme-modules-pro-for-divi' ),
				),
			),
			'advanced'   => array(
				'toggles' => array(
					'icon_settings' => esc_html__( 'Image', 'dsm-supreme-modules-pro-for-divi' ),
					'text'          => array(
						'title'    => esc_html__( 'Text', 'dsm-supreme-modules-pro-for-divi' ),
						'priority' => 49,
					),
					'width'         => array(
						'title'    => esc_html__( 'Sizing', 'dsm-supreme-modules-pro-for-divi' ),
						'priority' => 65,
					),
				),
			),
			'custom_css' => array(
				'toggles' => array(
					'attributes' => array(
						'title'    => esc_html__( 'Attributes', 'dsm-supreme-modules-pro-for-divi' ),
						'priority' => 95,
					),
				),
			),
		);
	}

	public function get_advanced_fields_config() {
		return array(
			'fonts'           => array(
				'text'   => array(
					'label'             => esc_html__( '', 'dsm-supreme-modules-pro-for-divi' ),
					'css'               => array(
						'main' => '%%order_class%% .dsm-business-hours-header',
					),
					'font_size'         => array(
						'default' => '14px',
					),
					'line_height'       => array(
						'default' => '1.7em',
					),
					'letter_spacing'    => array(
						'default' => '0px',
					),
					'hide_header_level' => true,
					'hide_text_align'   => true,
					'hide_text_shadow'  => true,
					'tab_slug'          => 'advanced',
					'toggle_slug'       => 'text',
				),
				'header' => array(
					'label'             => esc_html__( 'Day', 'dsm-supreme-modules-pro-for-divi' ),
					'css'               => array(
						'main' => '%%order_class%% .dsm-business-hours-day',
					),
					'font_size'         => array(
						'default' => '14px',
					),
					'line_height'       => array(
						'default' => '1.7em',
					),
					'letter_spacing'    => array(
						'default' => '0px',
					),
					'hide_header_level' => true,
					'hide_text_align'   => true,
				),
				'time'   => array(
					'label'           => esc_html__( 'Time', 'dsm-supreme-modules-pro-for-divi' ),
					'css'             => array(
						'main' => '%%order_class%% .dsm-business-hours-time',
					),
					'font_size'       => array(
						'default' => '14px',
					),
					'line_height'     => array(
						'default' => '1.7em',
					),
					'letter_spacing'  => array(
						'default' => '0px',
					),
					'hide_text_align' => true,
				),
			),
			'text'            => array(
				'use_text_orientation'  => false,
				'use_background_layout' => false,
				'css'                   => array(
					'text_shadow' => '%%order_class%% .dsm_business_hours_item_wrapper',
				),
			),
			'background'      => array(
				'css' => array(
					'main' => '.dsm_business_hours .dsm_business_hours_child%%order_class%%',
				),
			),
			'borders'         => array(
				'default' => array(
					'css' => array(
						'main'      => array(
							'border_radii'  => '%%order_class%%',
							'border_styles' => '%%order_class%%',
						),
						'important' => 'all',
					),
				),
				/*
				'image'   => array(
					'css'             => array(
						'main' => array(
							'border_radii' => "%%order_class%% .dsm-business-hours-image img",
							'border_styles' => "%%order_class%% .dsm-business-hours-image img",
						)
					),
					'label_prefix'    => esc_html__( 'Image', 'dsm-supreme-modules-pro-for-divi' ),
					'tab_slug'          => 'advanced',
					'toggle_slug'       => 'icon_settings',
				),*/
			),
			'box_shadow'      => array(
				'default' => array(),
				/*
				'image'   => array(
					'label'               => esc_html__( 'Image Box Shadow', 'dsm-supreme-modules-pro-for-divi' ),
					'option_category'     => 'layout',
					'tab_slug'          => 'advanced',
					'toggle_slug'       => 'icon_settings',
					'css'                 => array(
						'main' => '%%order_class%% .dsm-business-hours-image img',
					),
					'default_on_fronts'  => array(
						'color'    => '',
						'position' => '',
					),
				),*/
			),
			'button'          => false,
			/*
			'filters'               => array(
				'child_filters_target' => array(
					'tab_slug' => 'advanced',
					'toggle_slug' => 'icon_settings',
				),
			),
			'icon_settings'         => array(
				'css' => array(
					'main' => '%%order_class%% .dsm-business-hours-image img',
				),
			),*/
			'position_fields' => false,
		);
	}

	public function get_fields() {
		$et_accent_color = et_builder_accent_color();

		return array(
			'module_id'                        => array(
				'label'           => esc_html__( 'CSS ID', 'dsm-supreme-modules-pro-for-divi' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'description'     => esc_html__( "Assign a unique CSS ID to the element which can be used to assign custom CSS styles from within your child theme or from within Divi's custom CSS inputs.", 'dsm-supreme-modules-pro-for-divi' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'classes',
				'option_class'    => 'et_pb_custom_css_regular',
			),
			'module_class'                     => array(
				'label'           => esc_html__( 'CSS Class', 'dsm-supreme-modules-pro-for-divi' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'description'     => esc_html__( "Assign any number of CSS Classes to the element, separated by spaces, which can be used to assign custom CSS styles from within your child theme or from within Divi's custom CSS inputs.", 'dsm-supreme-modules-pro-for-divi' ),
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'classes',
				'option_class'    => 'et_pb_custom_css_regular',
			),
			'admin_title' => array(
				'label'       => esc_html__( 'Admin Label', 'dsm-supreme-modules-pro-for-divi' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the business hours item in the builder for easy identification.', 'dsm-supreme-modules-pro-for-divi' ),
				'toggle_slug' => 'admin_label',
			),
			'time'        => array(
				'label'            => esc_html__( 'Time', 'dsm-supreme-modules-pro-for-divi' ),
				'type'             => 'text',
				'option_category'  => 'basic_option',
				'description'      => esc_html__( 'The time of the day', 'dsm-supreme-modules-pro-for-divi' ),
				'toggle_slug'      => 'main_content',
				'default_on_front' => '9:00 AM - 6:00 PM',
				'dynamic_content'  => 'text',
				'mobile_options'   => true,
			),
			'title'       => array(
				'label'            => esc_html__( 'Day', 'dsm-supreme-modules-pro-for-divi' ),
				'type'             => 'text',
				'option_category'  => 'basic_option',
				'description'      => esc_html__( 'The day', 'dsm-supreme-modules-pro-for-divi' ),
				'toggle_slug'      => 'main_content',
				'default_on_front' => 'Monday',
				'dynamic_content'  => 'text',
				'mobile_options'   => true,
			),
			/*
			'image' => array(
				'label'              => esc_html__( 'Image', 'dsm-supreme-modules-pro-for-divi' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'dsm-supreme-modules-pro-for-divi' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'dsm-supreme-modules-pro-for-divi' ),
				'update_text'        => esc_attr__( 'Set As Image', 'dsm-supreme-modules-pro-for-divi' ),
				'depends_show_if'    => 'off',
				'description'        => esc_html__( 'Upload an image to display at the top of your blurb.', 'dsm-supreme-modules-pro-for-divi' ),
				'toggle_slug'        => 'image',
			),
			'alt' => array(
				'label'           => esc_html__( 'Image Alt Text', 'dsm-supreme-modules-pro-for-divi' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Define the HTML ALT text for your image here.', 'dsm-supreme-modules-pro-for-divi' ),
				'depends_show_if' => 'off',
				'tab_slug'        => 'custom_css',
				'toggle_slug'     => 'attributes',
			),
			'image_max_width' => array(
				'label'           => esc_html__( 'Image Width', 'dsm-supreme-modules-pro-for-divi' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'depends_show_if' => 'off',
				'default'         => '50%',
				'default_unit'    => '%',
				'default_on_front'=> '',
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '50',
					'step' => '1',
				),
				'responsive'      => true,
			),
			'image_spacing' => array(
				'label'           => esc_html__( 'Image Gap Spacing', 'dsm-supreme-modules-pro-for-divi' ),
				'type'            => 'range',
				'option_category' => 'layout',
				'tab_slug'        => 'advanced',
				'toggle_slug'     => 'icon_settings',
				'mobile_options'  => true,
				'validate_unit'   => true,
				'default'         => '25px',
				'default_unit'    => 'px',
				'default_on_front'=> '',
				'allow_empty'     => true,
				'range_settings'  => array(
					'min'  => '0',
					'max'  => '50',
					'step' => '1',
				),
				'responsive'      => true,
			),
			*/
		);
	}

	public function render( $attrs, $content, $render_slug ) {
		$multi_view         = et_pb_multi_view_options( $this );
		$title = $this->props['title'];
		$time  = $this->props['time'];
		/*
		$image                 = $this->props['image'];
		$alt                   = $this->props['alt'];
		$image_spacing = $this->props['image_spacing'];
		$image_spacing_tablet      = $this->props['image_spacing_tablet'];
		$image_spacing_phone       = $this->props['image_spacing_phone'];
		$image_spacing_last_edited = $this->props['image_spacing_last_edited'];
		$image_max_width             = $this->props['image_max_width'];
		$image_max_width_tablet      = $this->props['image_max_width_tablet'];
		$image_max_width_phone       = $this->props['image_max_width_phone'];
		$image_max_width_last_edited = $this->props['image_max_width_last_edited'];*/

		/*
		if ( '' !== $image_max_width_tablet || '' !== $image_max_width_phone || '' !== $image_max_width ) {
			$image_max_width_responsive_active = et_pb_get_responsive_status( $image_max_width_last_edited );

			$image_max_width_values = array(
				'desktop' => $image_max_width,
				'tablet'  => $image_max_width_responsive_active ? $image_max_width_tablet : '',
				'phone'   => $image_max_width_responsive_active ? $image_max_width_phone : '',
			);

			et_pb_generate_responsive_css( $image_max_width_values, '%%order_class%% .dsm-business-hours-image', 'max-width', $render_slug );
		}*/


		if ( '' !== $title ) {

			$title = $multi_view->render_element(
				array(
					'tag'     => 'div',
					'content' => '{{title}}',
					'attrs'   => array(
						'class' => 'dsm-business-hours-day',
					),
				)
		    );
			
		}

		if ( '' !== $time ) {

			$time = $multi_view->render_element(
				array(
					'tag'     => 'div',
					'content' => '{{time}}',
					'attrs'   => array(
						'class' => 'dsm-business-hours-time',
					),
				)
		    );
		}

		/*
		$image = ( '' !== trim( $image ) ) ? sprintf(
			'<img src="%1$s" alt="%2$s" />',
			esc_url( $image ),
			esc_attr( $alt )
			//esc_attr( " et_pb_animation_{$animation}" )
		) : '';

		// Images: Add CSS Filters and Mix Blend Mode rules (if set)
		$generate_css_image_filters = '';
		if ( $image && array_key_exists( 'icon_settings', $this->advanced_fields ) && array_key_exists( 'css', $this->advanced_fields['icon_settings'] ) ) {
			$generate_css_image_filters = $this->generate_css_filters(
				$render_slug,
				'child_',
				self::$data_utils->array_get( $this->advanced_fields['icon_settings']['css'], 'main', '%%order_class%%' )
			);
		}

		$image = $image ? sprintf(
			'<div class="dsm-business-hours-image%2$s">%1$s</div>',
			$image,
			esc_attr( $generate_css_image_filters )
		) : '';*/

		$video_background          = $this->video_background();
		$parallax_image_background = $this->get_parallax_image_background();
		$this->module_id( true );
		// Render module content.
		return sprintf(
			'%5$s
			%4$s
			<div class="dsm_business_hours_item_wrapper%3$s">
				<div class="dsm-business-hours-header">
					%1$s
					<div class="dsm-business-hours-separator"></div>
					%2$s
				</div>
			</div>',
			$title,
			$time,
			$this->get_text_orientation_classname(),
			$video_background,
			$parallax_image_background
		);
	}
}

new DSM_Business_Hours_Child();
