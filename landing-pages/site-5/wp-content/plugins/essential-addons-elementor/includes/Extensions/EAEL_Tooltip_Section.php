<?php
namespace Essential_Addons_Elementor\Pro\Extensions;
use Essential_Addons_Elementor\Pro\Classes\Helper;

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Controls_Manager;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Group_Control_Typography;

class EAEL_Tooltip_Section
{

    public function __construct()
    {
        add_action('elementor/element/common/_section_style/after_section_end', [$this, 'register_controls'], 10);
        add_action('elementor/widget/before_render_content', array($this, 'before_render'));
        add_action('elementor/widget/before_render_content', array($this, 'after_render'));
    }

    public function get_name()
    {
        return 'eael-tooltip-section';
    }

    public function register_controls($element)
    {

        $element->start_controls_section(
            'eael_tooltip_section',
            [
                'label' => __('<i class="eaicon-logo"></i> Advanced Tooltip', 'essential-addons-elementor'),
                'tab' => Controls_Manager::TAB_ADVANCED,
            ]
        );

        $element->add_control(
            'eael_tooltip_section_enable',
            [
                'label' => __('Enable Advanced Tooltip', 'essential-addons-elementor'),
                'type' => Controls_Manager::SWITCHER,
            ]
        );

        $element->start_controls_tabs('eael_tooltip_tabs');

        $element->start_controls_tab('eael_tooltip_settings', [
            'label' => __('Settings', 'essential-addons-elementor'),
            'condition' => [
                'eael_tooltip_section_enable!' => '',
            ],
        ]);

        $element->add_control(
            'eael_tooltip_section_content',
            [
                'label' => __('Content', 'essential-addons-elementor'),
                'type' => Controls_Manager::TEXT,
                'default' => __('I am a tooltip', 'essential-addons-elementor'),
                'dynamic' => ['active' => true],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
                'ai' => [
					'active' => false,
				],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_position',
            [
                'label' => __('Position', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'top',
                'options' => [
                    'top' => __('Top', 'essential-addons-elementor'),
                    'bottom' => __('Bottom', 'essential-addons-elementor'),
                    'left' => __('Left', 'essential-addons-elementor'),
                    'right' => __('Right', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_auto_flip',
            [
                'label' => __('Position Flip', 'essential-addons-elementor'),
                'type' => Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default' => 'yes',
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                    'eael_tooltip_section_position' => [ 'top', 'bottom' ]
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_animation',
            [
                'label' => __('Animation', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'scale',
                'options' => [
                    'shift-away' => __('Shift Away', 'essential-addons-elementor'),
                    'shift-toward' => __('Shift Toward', 'essential-addons-elementor'),
                    'scale' => __('Scale', 'essential-addons-elementor'),
                    'fade' => __('Fade', 'essential-addons-elementor'),
                    'perspective' => __('Perspective', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_arrow',
            [
                'label' => __('Arrow', 'essential-addons-elementor'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'essential-addons-elementor'),
                'label_off' => __('Hide', 'essential-addons-elementor'),
                'return_value' => true,
                'default' => true,
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_arrow_type',
            [
                'label' => __('Arrow Type', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'sharp',
                'options' => [
                    'sharp' => __('Sharp', 'essential-addons-elementor'),
                    'round' => __('Round', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                    'eael_tooltip_section_arrow!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_follow_cursor',
            [
                'label' => __('Follow Cursor', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'false',
                'options' => [
                    'false' => __('False', 'essential-addons-elementor'),
                    'vertical' => __('Vertical', 'essential-addons-elementor'),
                    'horizontal' => __('Horizontal', 'essential-addons-elementor'),
                    'initial' => __('Initial', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'description' => __('Follow cursor when the tooltip is visible.', 'essential-addons-elementor'),
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_trigger',
            [
                'label' => __('Trigger', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'mouseenter',
                'options' => [
                    'click' => __('Click', 'essential-addons-elementor'),
                    'mouseenter' => __('Hover', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_duration',
            [
                'label' => __('Duration', 'essential-addons-elementor'),
                'type' => Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 1000,
                'step' => 10,
                'default' => 300,
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_delay',
            [
                'label' => __('Delay out (s)', 'essential-addons-elementor'),
                'type' => Controls_Manager::NUMBER,
                'min' => 100,
                'max' => 1000,
                'step' => 5,
                'default' => 400,
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_size',
            [
                'label' => __('Size', 'essential-addons-elementor'),
                'type' => Controls_Manager::SELECT,
                'default' => 'regular',
                'options' => [
                    'small' => __('Small', 'essential-addons-elementor'),
                    'regular' => __('Regular', 'essential-addons-elementor'),
                    'large' => __('Large', 'essential-addons-elementor'),
                ],
                'frontend_available' => true,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->end_controls_tab();

        $element->start_controls_tab('eael_tooltip_section_styles', [
            'label' => __('Styles', 'essential-addons-elementor'),
            'condition' => [
                'eael_tooltip_section_enable!' => '',
            ],
        ]);

        $element->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'eael_tooltip_section_typography',
                'selector' => '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip',
                'separator' => 'after',
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_background_color',
            [
                'label' => __('Background Color', 'essential-addons-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#000000',
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip, .tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip .tippy-backdrop' => 'background-color: {{VALUE}};',
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"][x-placement^=top] .tippy-tooltip .tippy-arrow' => 'border-top-color: {{VALUE}};',
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"][x-placement^=bottom] .tippy-tooltip .tippy-arrow' => 'border-bottom-color: {{VALUE}};',
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"][x-placement^=left] .tippy-tooltip .tippy-arrow' => 'border-left-color: {{VALUE}};',
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"][x-placement^=right] .tippy-tooltip .tippy-arrow' => 'border-right-color: {{VALUE}};',
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip .tippy-roundarrow' => 'fill: {{VALUE}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_color',
            [
                'label' => __('Color', 'essential-addons-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_border_color',
            [
                'label' => __('Border Color', 'essential-addons-elementor'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip' => 'border: 1px solid {{VALUE}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                    'eael_tooltip_section_arrow' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_border_radius',
            [
                'label' => __('Border Radius', 'essential-addons-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_distance',
            [
                'label' => __('Distance', 'essential-addons-elementor'),
                'type' => Controls_Manager::NUMBER,
                'min' => 05,
                'max' => 50,
                'step' => 2,
                'default' => 10,
                'label_block' => false,
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_padding',
            [
                'label' => __('Padding', 'essential-addons-elementor'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'eael_tooltip_section_box_shadow',
                'selector' => '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip',
                'separator' => '',
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->add_control(
            'eael_tooltip_section_width',
            [
                'label' => __('Max Width', 'essential-addons-elementor'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
                    'size' => '350',
                ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                    ],
                ],
                'label_block' => false,
                'selectors' => [
                    '.tippy-popper[data-tippy-popper-id="{{ID}}"] .tippy-tooltip' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'eael_tooltip_section_enable!' => '',
                ],
            ]
        );

        $element->end_controls_tab();

        $element->end_controls_tabs();

        $element->end_controls_section();

    }

    public function before_render($element)
    {
        if ($element->get_settings('eael_tooltip_section_enable') == 'yes') {
            $element->add_render_attribute('_wrapper', [
                'id' => 'eael-section-tooltip-' . $element->get_id(),
                'class' => 'eael-section-tooltip',
            ]);
        }
    }

    public function after_render($element)
    {
        $settings = $element->get_settings_for_display();

        if ($settings['eael_tooltip_section_enable'] == 'yes') {
            $data         = $element->get_data();
            $content      = wp_kses_post($settings['eael_tooltip_section_content']);
            $position     = isset( $settings["eael_tooltip_section_position"] ) ? $settings["eael_tooltip_section_position"] : 'yes';
            $animation    = $settings['eael_tooltip_section_animation'];
            $duration     = isset( $settings["eael_tooltip_section_duration"] ) ? $settings["eael_tooltip_section_duration"] : 300;
            $distance     = isset( $settings["eael_tooltip_section_distance"] ) ? $settings["eael_tooltip_section_distance"] : 10;
            $delay        = isset( $settings["eael_tooltip_section_delay"] ) ? $settings["eael_tooltip_section_delay"] : 400;
            $arrow        = isset( $settings["eael_tooltip_section_arrow"] ) ? $settings["eael_tooltip_section_arrow"] : true;
            $arrowType    = $settings["eael_tooltip_section_arrow_type"];
            $size         = $settings["eael_tooltip_section_size"];
            $trigger      = $settings["eael_tooltip_section_trigger"];
            $width        = isset( $settings["eael_tooltip_section_width"] ) ? $settings["eael_tooltip_section_width"]: [ 'size' => 350 ];
            $followCursor = $settings["eael_tooltip_section_follow_cursor"];
            $flip         = isset( $settings["eael_tooltip_auto_flip"] ) ? $settings["eael_tooltip_auto_flip"] : 'yes';
            ?>

            <script>
                jQuery(window).on('elementor/frontend/init elementor/popup/show', function() {
                    var $currentTooltip = '#eael-section-tooltip-<?php echo esc_attr( $element->get_id() ); ?>';

                    if (typeof tippy !== 'undefined') {
                        tippy($currentTooltip, {
                            content: '<?php echo( wp_kses( str_replace( "'", "\'", $content ), Helper::eael_allowed_tags() ) ); ?>',
                            placement: '<?php echo esc_attr( $position ); ?>',
                            animation: '<?php echo esc_attr( $animation ); ?>',
                            arrow: '<?php echo esc_attr( $arrow ); ?>',
                            arrowType: '<?php echo esc_attr( $arrowType ); ?>',
                            duration: '<?php echo esc_attr( $duration ); ?>',
                            distance: '<?php echo esc_attr( $distance ); ?>',
                            delay: '<?php echo esc_attr( $delay ); ?>',
                            size: '<?php echo esc_attr( $size ); ?>',
                            trigger: '<?php echo esc_attr( $trigger ); ?> focus',
                            animateFill: false,
                            flip: <?php echo $flip == 'yes' ? esc_js( 'true' ) : esc_js( 'false' ); ?>,
                            flipOnUpdate: true,
                            interactive: true,
                            flipBehavior: <?php echo $flip == 'yes' ? "'flip'" : esc_js( '[]' ); ?>,
                            maxWidth: <?php echo esc_attr( $width['size'] ); ?>,
                            zIndex: 99999,
                            followCursor: <?php if ($followCursor !== 'false') {
				                echo esc_attr( "'$followCursor'" );
			                } else { ?> false <?php } ?>,
                            onShow(instance) {
                                var tippyPopper = instance.popper;
                                jQuery(tippyPopper).attr('data-tippy-popper-id', '<?php echo esc_attr( $data['id'] ); ?>');
                            }
                        });
                    }
                });
            </script>
        <?php }
    }
}
