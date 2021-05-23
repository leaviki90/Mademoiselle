<?php

/**
 * Adds Foo_Widget widget.
 */
class widgetForm extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
                'widget-form', // Base ID
                'Widget Form', // Name
                array('description' => __('Displays a form', 'news-theme'),) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if (!empty($title)) {
            echo $before_title . $title . $after_title;
        }
        //our code
        ?>
        <form id="searchform" class="searchform" role="search" method="get" action="<?PHP echo home_url(); ?>">
            <div class="input-group mb-9">
                <input type="search" name="s" id="s" value="" class="form-control border-end-0 search-input" placeholder="Search">
                <button type="submit" name="send" value="Search" id="searchsubmit" class="btn border border-start-0">
                    <img src="<?php echo get_template_directory_uri() . "/frontend/img/search-icon.png" ?>" alt="" class="search-icon"/>
                </button>
            </div>
        </form>



        <?PHP
        echo $after_widget;
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance) {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'text_domain');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }

}

// class Foo_Widget
?>

<?php
// Register Foo_Widget widget
add_action('widgets_init', 'widget_form');

function widget_form() {
    register_widget('widgetForm');
}
?>        


