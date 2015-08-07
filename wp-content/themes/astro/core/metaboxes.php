<?php

    class PrMetaboxes {
        public function __construct(){
            global $pr_options;
            $this->data = $pr_options;
            add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
            add_action('save_post', array($this, 'save_meta_boxes'));
            //add_action('admin_enqueue_scripts', array($this, 'admin_script_loader'));
        }
        public function save_meta_boxes($post_id)
        {
            if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
                return;
            }

            foreach($_POST as $key => $value) {
                if(strstr($key, 'pr_')) {
                    update_post_meta($post_id, $key, $value);
                }
            }
        }
        public function add_meta_boxes()
        {
            $post_types = get_post_types( array( 'public' => true ) );
            $this->add_meta_box('page_options', 'Page Options', 'page');
            $this->add_meta_box('portfolio_options', 'Portfolio Option', 'portfolio');
            $this->add_meta_box('team_options', 'Team Option', 'team');

        }
        //Add metaboxes page
        function page_options(){
            $pr_options = $this->data;
            include 'layouts/metaboxes/blog_options.php';
        }
        //Add metaboxes portfolio option 
        function portfolio_options(){
            $pr_options = $this->data;
            include 'layouts/metaboxes/portfolio_options.php';
        }
        function team_options(){
           $pr_options = $this->data;
           include 'layouts/metaboxes/team_options.php'; 
        }
        public function add_meta_box($id, $label, $post_type)
        {
            add_meta_box( 
                'pr_' . $id,
                $label,
                array($this, $id),
                $post_type
            );
        }
        /* Creat Html select option*/
        public function select($id, $label, $options,$defualt, $desc = '')
        {
            global $post;

            $html = '';
            $html .= '<div id="pr_meta_field_'.$id.'" class="pr_meta_field">';
            $html .= '<label for="pr_' . $id . '">';
            $html .= $label;
            $html .= '</label>';
            $html .= '<div class="field">';
            $html .= '<select id="pr_' . $id . '" name="pr_' . $id . '">';

            $value = get_post_meta($post->ID, 'pr_' . $id, true);
            $defualt = $value == '' ? $defualt ='global': $value;

            foreach($options as $key => $option) {
                $selected = $defualt === (string)$key?'selected="selected"':null;
                $html .= '<option ' . $selected . 'value="' . $key . '">' . $option . '</option>';
            }
            $html .= '</select>';
            if($desc) {
                $html .= '<p>' . $desc . '</p>';
            }
            $html .= '</div>';
            $html .= '</div>';

            echo $html;
        }
        public function text($id, $label, $default, $desc = '')
        {
            global $post;
            $value = get_post_meta($post->ID, 'pr_' . $id, true);
            if (!$value){
                $value = $default;
            }
            $html = '';
            $html .= '<div id="pr_metabox_field_'.$id.'" class="pr_metabox_field">';
            $html .= '<label for="pr_' . $id . '">';
            $html .= $label;
            $html .= '</label>';
            $html .= '<div class="field">';
            $html .= '<input type="text" id="pr_' . $id . '" name="pr_' . $id . '" value="' . $value . '" />';
            if($desc) {
                $html .= '<p>' . $desc . '</p>';
            }
            $html .= '</div>';
            $html .= '</div>';

            echo $html;
        }
        public function textarea($id, $label, $desc = '')
        {
            global $post;

            $html = '';
            $html = '';
            $html .= '<div id="pr_metabox_field_'.$id.'" class="pr_metabox_field">';
            $html .= '<label for="pr_' . $id . '">';
            $html .= $label;
            $html .= '</label>';
            $html .= '<div class="field">';
            $html .= '<textarea cols="30" rows="5" id="pr_' . $id . '" name="pr_' . $id . '">' . get_post_meta($post->ID, 'pr_' . $id, true) . '</textarea>';
            if($desc) {
                $html .= '<p>' . $desc . '</p>';
            }
            $html .= '</div>';
            $html .= '</div>';

            echo $html;
        }

        

    }
    $metaboxes = new PrMetaboxes;
?>
