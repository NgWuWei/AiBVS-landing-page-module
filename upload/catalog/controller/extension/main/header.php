<?php
class ControllerExtensionMainHeader extends Controller{
    public function index(){


        $this->load->language('extension/main/home');

        $data = array();

        $data['top_content_background'] = 'catalog/view/theme/image/top_content_background.svg';
        $data['small_aibvs_logo'] = 'catalog/view/theme/image/abvs logo.svg';
        $data['cashierbook_logo'] = 'catalog/view/theme/image/art-in-book-logo.svg';
        $data['aibvs_logo'] = 'catalog/view/theme/image/AIBVS Logo.svg';
        $data['join_learn_logo'] = 'catalog/view/theme/image/Join Learn Icon.svg';
        $data['join_capture_logo'] = 'catalog/view/theme/image/Join Capture Icon.svg';
        $data['join_explore_logo'] = 'catalog/view/theme/image/Join Explore Icon.svg';
        $data['key_topic_background'] = 'catalog/view/theme/image/Key Topic Background.svg';
        $data['facebook_logo'] = 'catalog/view/theme/image/Facebook Icon.svg';
        $data['instagram_logo'] = 'catalog/view/theme/image/Instagram Icon.svg';
        $data['search_icon'] ='catalog/view/theme/image/search icon.svg';

        return $this->load->view('extension/main/header', $data);
    }

}