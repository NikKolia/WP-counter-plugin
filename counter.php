<?php
/*
Plugin Name: Counter Plugin
Description: This plugin adds counter in widget area.
Author URI: https://github.com/NikKolia/WP-counter-plugin.git
*/

// The widget class
class Counter_Widget extends WP_Widget
{

    // Main constructor
    public function __construct()
    {
        parent::__construct(
            'counter_widget',
            __('COUNTER', 'text_domain'),
            array(
                'customize_selective_refresh' => true,
            )
        );
    }

    // The widget form (for the backend )
    public function form($instance)
    {

        // Set widget defaults
        $defaults = array(
            'title' => '',
            'first_number' => '13',
            'first_text' => 'единиц',
            'first_text_bottom' => 'техники',
            'second_number' => '26',
            'second_text' => 'лет',
            'second_text_bottom' => 'на рынке',
            'third_number' => '365',
            'third_text' => 'дней',
            'third_text_bottom' => 'в году',
            'fourth_number' => '1588',
            'fourth_text' => 'детей',
            'fourth_text_bottom' => 'у Чингисхана',
        );

        // Parse current settings with defaults
        extract(wp_parse_args(( array )$instance, $defaults)); ?>

        <?php // Widget Title ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Widget Title', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text"
                   value="<?php echo esc_attr($title); ?>"/>
        </p>
        <?php // First number ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('first_number')); ?>"><?php _e('First number:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('first_number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('first_number')); ?>" type="text"
                   value="<?php echo esc_attr($first_number); ?>"/>
        </p>

        <?php // First text ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('first_text')); ?>"><?php _e('First text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('first_text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('first_text')); ?>" type="text"
                   value="<?php echo esc_attr($first_text); ?>"/>
        </p>

        <?php // First text bottom ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('first_text_bottom')); ?>"><?php _e('First text bottom:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('first_text_bottom')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('first_text_bottom')); ?>" type="text"
                   value="<?php echo esc_attr($first_text_bottom); ?>"/>
        </p>
        <?php // Second number ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('second_number')); ?>"><?php _e('Second number:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('second_number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('second_number')); ?>" type="text"
                   value="<?php echo esc_attr($second_number); ?>"/>
        </p>

        <?php // Second text ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('second_text')); ?>"><?php _e('Second text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('second_text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('second_text')); ?>" type="text"
                   value="<?php echo esc_attr($second_text); ?>"/>
        </p>

        <?php // Second text bottom ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('second_text_bottom')); ?>"><?php _e('Second text bottom:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('second_text_bottom')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('second_text_bottom')); ?>" type="text"
                   value="<?php echo esc_attr($second_text_bottom); ?>"/>
        </p>
        <?php // Third number ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('third_number')); ?>"><?php _e('Third number:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('third_number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('third_number')); ?>" type="text"
                   value="<?php echo esc_attr($third_number); ?>"/>
        </p>

        <?php // Third text ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('third_text')); ?>"><?php _e('Third text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('third_text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('third_text')); ?>" type="text"
                   value="<?php echo esc_attr($third_text); ?>"/>
        </p>

        <?php // Third text bottom ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('third_text_bottom')); ?>"><?php _e('Third text bottom:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('third_text_bottom')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('third_text_bottom')); ?>" type="text"
                   value="<?php echo esc_attr($third_text_bottom); ?>"/>
        </p>
        <?php // Fourth number ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('fourth_number')); ?>"><?php _e('Fourth number:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('fourth_number')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('fourth_number')); ?>" type="text"
                   value="<?php echo esc_attr($fourth_number); ?>"/>
        </p>

        <?php // Fourth text ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('fourth_text')); ?>"><?php _e('Fourth text:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('fourth_text')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('fourth_text')); ?>" type="text"
                   value="<?php echo esc_attr($fourth_text); ?>"/>
        </p>

        <?php // Fourth text bottom ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('fourth_text_bottom')); ?>"><?php _e('Fourth text bottom:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('fourth_text_bottom')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('fourth_text_bottom')); ?>" type="text"
                   value="<?php echo esc_attr($fourth_text_bottom); ?>"/>
        </p>

    <?php }

    // Update widget settings
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = isset($new_instance['title']) ? wp_strip_all_tags($new_instance['title']) : '';
        $instance['first_number'] = isset($new_instance['first_number']) ? wp_strip_all_tags($new_instance['first_number']) : '';
        $instance['first_text'] = isset($new_instance['first_text']) ? wp_strip_all_tags($new_instance['first_text']) : '';
        $instance['first_text_bottom'] = isset($new_instance['first_text_bottom']) ? wp_strip_all_tags($new_instance['first_text_bottom']) : '';
        $instance['second_number'] = isset($new_instance['second_number']) ? wp_strip_all_tags($new_instance['second_number']) : '';
        $instance['second_text'] = isset($new_instance['second_text']) ? wp_strip_all_tags($new_instance['second_text']) : '';
        $instance['second_text_bottom'] = isset($new_instance['second_text_bottom']) ? wp_strip_all_tags($new_instance['second_text_bottom']) : '';
        $instance['third_number'] = isset($new_instance['third_number']) ? wp_strip_all_tags($new_instance['third_number']) : '';
        $instance['third_text'] = isset($new_instance['third_text']) ? wp_strip_all_tags($new_instance['third_text']) : '';
        $instance['third_text_bottom'] = isset($new_instance['third_text_bottom']) ? wp_strip_all_tags($new_instance['third_text_bottom']) : '';
        $instance['fourth_number'] = isset($new_instance['fourth_number']) ? wp_strip_all_tags($new_instance['fourth_number']) : '';
        $instance['fourth_text'] = isset($new_instance['fourth_text']) ? wp_strip_all_tags($new_instance['fourth_text']) : '';
        $instance['fourth_text_bottom'] = isset($new_instance['fourth_text_bottom']) ? wp_strip_all_tags($new_instance['fourth_text_bottom']) : '';
        return $instance;
    }

    // Display the widget
    public function widget($args, $instance)
    {

        extract($args);

        // Check the widget options
        $title = isset($instance['title']) ? apply_filters('widget_title', $instance['title']) : '';
        $first_number = isset($instance['first_number']) ? $instance['first_number'] : '';
        $first_text = isset($instance['first_text']) ? $instance['first_text'] : '';
        $first_text_bottom = isset($instance['first_text_bottom']) ? $instance['first_text_bottom'] : '';
        $second_number = isset($instance['second_number']) ? $instance['second_number'] : '';
        $second_text = isset($instance['second_text']) ? $instance['second_text'] : '';
        $second_text_bottom = isset($instance['second_text_bottom']) ? $instance['second_text_bottom'] : '';
        $third_number = isset($instance['third_number']) ? $instance['third_number'] : '';
        $third_text = isset($instance['third_text']) ? $instance['third_text'] : '';
        $third_text_bottom = isset($instance['third_text_bottom']) ? $instance['third_text_bottom'] : '';
        $fourth_number = isset($instance['fourth_number']) ? $instance['fourth_number'] : '';
        $fourth_text = isset($instance['fourth_text']) ? $instance['fourth_text'] : '';
        $fourth_text_bottom = isset($instance['fourth_text_bottom']) ? $instance['fourth_text_bottom'] : '';

        // WordPress core before_widget hook (always include )
        echo $before_widget;

        // Display the widget
        // Display widget title if defined
        if ($title) {
            echo $before_title . $title . $after_title;
        }
        echo '<div class="counterItems">';

        echo '<div class="counterItems_item">';

        // Display first number
        if ($first_number) {
            echo '<p>' . $first_number . '</p>';
        }

        // Display first text field
        if ($first_text) {
            echo '<p>' . $first_text . '</p>';
        }

        // Display first bottom text field
        if ($first_text_bottom) {
            echo '<p>' . $first_text_bottom . '</p>';
        }

        echo '</div>';

        echo '<div class="counterItems_item">';

        // Display second number
        if ($second_number) {
            echo '<p>' . $second_number . '</p>';
        }

        // Display second text field
        if ($second_text) {
            echo '<p>' . $second_text . '</p>';
        }

        // Display second bottom text field
        if ($second_text_bottom) {
            echo '<p>' . $second_text_bottom . '</p>';
        }

        echo '</div>';

        echo '<div class="counterItems_item">';

        // Display third number
        if ($third_number) {
            echo '<p>' . $third_number . '</p>';
        }

        // Display third text field
        if ($third_text) {
            echo '<p>' . $third_text . '</p>';
        }

        // Display third bottom text field
        if ($third_text_bottom) {
            echo '<p>' . $third_text_bottom . '</p>';
        }

        echo '</div>';

        echo '<div class="counterItems_item">';

        // Display fourth number
        if ($fourth_number) {
            echo '<p>' . $fourth_number . '</p>';
        }

        // Display third text field
        if ($fourth_text) {
            echo '<p>' . $fourth_text . '</p>';
        }

        // Display third bottom text field
        if ($fourth_text_bottom) {
            echo '<p>' . $fourth_text_bottom . '</p>';
        }

        echo '</div>';


        echo '</div>';

        // WordPress core after_widget hook (always include )
        echo $after_widget;

    }

}

// Register the widget
function my_register_custom_widget()
{
    register_widget('Counter_Widget');
}

add_action('widgets_init', 'my_register_custom_widget');