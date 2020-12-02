<?php

use Elementor\Controls_Manager;
use Elementor\Widget_Base;

class Subscription_Plan_Widget extends Widget_Base
{

    public function get_name()
    {
        return 'clicknpro_pricing_plan';
    }

    public function get_title()
    {
        return esc_html__('Subscription Plan', 'elementor-subscription-widget');
    }

    public function get_icon()
    {
        return 'fa fa-sun-o';
    }

    public function get_categories()
    {
        return ['reveal-core'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'general',
            [
                'label' => esc_html__('General', 'elementor-subscription-widget'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'elementor-subscription-widget'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'default' => __('See our packages', 'elementor-subscription-widget'),
            ]
        );

        $this->add_control(
            'content',
            [
                'label' => esc_html__('Content', 'elementor-subscription-widget'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('We offer best and smart packages for you.', 'elementor-subscription-widget'),
                'placeholder' => esc_html__('Type your description here', 'elementor-subscription-widget'),

            ]
        );
        $this->add_control(
            'button_title',
            [
                'label' => esc_html__('Button Title', 'elementor-subscription-widget'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'default' => __('Choose Plan', 'elementor-subscription-widget'),
            ]
        );

        $this->add_control(
            'column',
            [
                'label' => __('Number of Column', 'elementor-subscription-widget'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '3',
                'options' => array(
                    '2' => __('2', 'elementor-subscription-widget'),
                    '3' => __('3', 'elementor-subscription-widget'),
                ),
            ]
        );
        $this->add_control(
            'per_page',
            array(
                'label' => esc_html__('Posts Per Page', 'elementor-subscription-widget'),
                'type' => Controls_Manager::TEXT,
                'default' => '3',
            )
        );
        $this->add_control(
            'order',
            array(
                'label' => __('Order', 'elementor-subscription-widget'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'desc',
                'options' => array(
                    'desc' => __('DESC', 'elementor-subscription-widget'),
                    'asc' => __('ASC', 'elementor-subscription-widget'),
                ),
            )
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'style_section',
            array(
                'label' => __('Color', 'elementor-subscription-widget'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );
        $this->start_controls_tabs('tabs_button_style');
        $this->start_controls_tab(
            'tab_button_normal',
            [
                'label' => __('Normal', 'elementor'),
            ]
        );
        $this->add_control(
            'heading_color',
            array(
                'label'     => __('Heading Color', 'elementor-subscription-widget'),
                'separator' => 'before',
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .sec-heading .heading' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .pr-title' => 'color: {{VALUE}} !important',
                    '{{WRAPPER}} .pr-value' => 'color: {{VALUE}} !important',

                ),
            )
        );
        $this->add_control(
            'button_color',
            array(
                'label'     => __('Button Color', 'elementor-subscription-widget'),
                'separator' => 'before',
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .pricing-bottom .btn-pricing' => 'background: {{VALUE}}',
                ),
            )
        );
        $this->add_control(
            'icon_color',
            array(
                'label'     => __('Icon Color', 'elementor-subscription-widget'),
                'separator' => 'before',
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .pricing-header i' => 'color: {{VALUE}}',
                ),
            )
        );


        $this->end_controls_tab();
        $this->start_controls_tab(
            'tab_button_hover',
            [
                'label' => __('Hover', 'elementor'),
            ]
        );
        $this->add_control(
            'pricehover_color',
            array(
                'label'     => __('Button Color', 'elementor-subscription-widget'),
                'separator' => 'before',
                'type'      => \Elementor\Controls_Manager::COLOR,
                'selectors' => array(
                    '{{WRAPPER}} .pricing-bottom .btn-pricing:hover' => 'background: {{VALUE}} !important',
                ),
            )
        );



        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'text_style_section',
            array(
                'label' => __('Heading & Typography', 'elementor-subscription-widget'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            )
        );
        $this->add_control(
            'heading_tag',
            array(
                'label'     => esc_html__('Heading Tag', 'elementor-subscription-widget'),
                'type'      => Controls_Manager::SELECT,
                'options'   => array(
                    'h1'   => esc_html__('H1', 'elementor-subscription-widget'),
                    'h2'   => esc_html__('H2', 'elementor-subscription-widget'),
                    'h3'   => esc_html__('H3', 'elementor-subscription-widget'),
                    'h4'   => esc_html__('H4', 'elementor-subscription-widget'),
                    'h5'   => esc_html__('H5', 'elementor-subscription-widget'),
                    'h6'   => esc_html__('H6', 'elementor-subscription-widget'),
                    'div'  => esc_html__('div', 'elementor-subscription-widget'),
                    'span' => esc_html__('span', 'elementor-subscription-widget'),
                    'p'    => esc_html__('p', 'elementor-subscription-widget'),
                ),
                'default'   => 'h2',

            )
        );
        $this->add_control(
            'tagline_tag',
            array(
                'label'     => esc_html__('Tag Line Tag', 'elementor-subscription-widget'),
                'type'      => Controls_Manager::SELECT,
                'options'   => array(
                    'h1'   => esc_html__('H1', 'elementor-subscription-widget'),
                    'h2'   => esc_html__('H2', 'elementor-subscription-widget'),
                    'h3'   => esc_html__('H3', 'elementor-subscription-widget'),
                    'h4'   => esc_html__('H4', 'elementor-subscription-widget'),
                    'h5'   => esc_html__('H5', 'elementor-subscription-widget'),
                    'h6'   => esc_html__('H6', 'elementor-subscription-widget'),
                    'div'  => esc_html__('div', 'elementor-subscription-widget'),
                    'span' => esc_html__('span', 'elementor-subscription-widget'),
                    'p'    => esc_html__('p', 'elementor-subscription-widget'),
                ),
                'default'   => 'p',

            )
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            array(
                'name'     => 'content_typography',
                'label'    => __('Typography', 'elementor-subscription-widget'),
                'selector' => '{{WRAPPER}} .heading',
            )
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            array(
                'name'     => 'content_typography_two',
                'label'    => __('Typography', 'elementor-subscription-widget'),
                'selector' => '{{WRAPPER}} .tagline_heading',
            )
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $heading_tag = $settings["heading_tag"];
        $tagline_tag = $settings["tagline_tag"];
        $title = $settings["title"];
        $button_title = $settings["button_title"];
        $per_page = $settings['per_page'];
        $content = $settings["content"];
        $order = $settings['order'];
        $orderby = $order;

        $args = array(
            'posts_per_page' => $per_page,
            'post_type' => 'product',
            'order_by' => 'meta_value',
            'meta_key' => '_price',
            'order' => 'asc', // $orderby,
            'post_status'    => 'publish',
            'no_found_rows' => true,
            'tax_query'      => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => 'pack',
                ),
                array(
                    'taxonomy' => 'product_type',
                    'field'    => 'name',
                    'terms'    => 'subscription',
                )
            )
        );
        $products = wc_get_products($args);

        $column_no = $column = 3;

        switch ((int) $column_no) {
            case 2:
                $colclass = 'col-md-6';
                break;
            case 3:
                $colclass = 'col-xs-12 col-sm-6 col-md-4';
                break;
            default:
                $colclass = 'col-xs-12 col-sm-6 col-md-4';
                break;
        }
        $query = new \WP_Query($args);
        $rand = rand(000000, 999999);
        $loop = 1;
?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="sec-heading center">
                            <<?php echo $heading_tag; ?> class="heading"><?php echo $title; ?></<?php echo $heading_tag; ?>>
                            <<?php echo $tagline_tag; ?> class="tagline_heading"><?php echo $content; ?></<?php echo $tagline_tag; ?>>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if ($query->have_posts()) :
                        while ($query->have_posts()) :
                            $query->the_post();
                    ?>
                            <div class="col-lg-4 col-md-4">
                                <?php
                                $_product_attributes = get_post_meta(get_the_ID(), 'rlisting_recommended', true);
                                $recommended = '';

                                if (isset($_product_attributes['is-recommended']) && 
                                    isset($_product_attributes['is-recommended']['value'])
                                ) {
                                    if ((int) $_product_attributes['is-recommended']['value']) {
                                        $recommended = 'recommended';
                                    }
                                }
                                
                                ?>

                                <div class="pricing-wrap <?php echo $recommended; ?>">
                                    <div class="pricing-header">
                                        <i class="<?php echo get_post_meta(get_the_ID(), 'rlisting_p_icon_class', true); ?>"></i>
                                        <h4 class="pr-title"><?php the_title(); ?></h4>
                                        <span class="pr-subtitle"><?php echo get_post_meta(get_the_ID(), 'rlisting_p_sub_title', true); ?></span>
                                    </div>
                                    <div class="pricing-value">
                                        <h4 class="pr-value">
                                            <?php
                                            $price = get_post_meta(get_the_ID(), '_price', true);
                                            echo $price;
                                            ?>
                                        </h4>
                                    </div>
                                    <div class="pricing-body">
                                        <?php
                                        the_content();
                                        ?>
                                    </div>

                                    <div class="pricing-bottom">
                                        <a href="javascript:void(0)" class="btn-pricing add-to-cart-custom" data-price="<?php echo $price; ?>" data-product_id="<?php echo get_the_ID(); ?>"><?php echo esc_html($button_title); ?></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </section>
<?php
    }

    protected function _content_template()
    {
    }
}
