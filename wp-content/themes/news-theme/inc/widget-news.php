<?php
 
/**
 * Adds Foo_Widget widget.
 */
class widgetNews extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'widget-news', // Base ID
            'Widget News', // Name
            array( 'description' => __( 'Displays three blog news', 'news-theme' ), ) // Args
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
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        //our code
        
      
                        
                        $argBlog = array(
                            "post_status" => "publish",
                            "post_type" => "post",
                            "posts_per_page" => 3,
                            "orderby" => "rand"
                        );
                        $blogNews = new WP_Query($argBlog);
                        if ($blogNews->have_posts()) {
                            ?>
                            <div class="aside-blog">
                            <?php
                            while ($blogNews->have_posts()) {
                                $blogNews->the_post();
                                get_template_part("template-parts/content-news");
                            }
                            ?>

                            </div>                 
    <?PHP
}
wp_reset_postdata();

        
        
        echo $after_widget;
    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'text_domain' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
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
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
        return $instance;
    }
 
} // class Foo_Widget
 
?>

 <?php
// Register Foo_Widget widget
add_action( 'widgets_init', 'widget_news' );
     
function widget_news() { 
    register_widget( 'widgetNews' ); 
}
?>        

