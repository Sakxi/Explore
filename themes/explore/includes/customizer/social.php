<?php
/* Welcome Section Part */
function explore_social_customizer_section($wp_customize){
    $wp_customize->add_section('explore_welcome_section',array(
        'title'=>__('Welcome Settings','explore'),
        'priority'=>100
    ));
    $wp_customize->add_section('explore_success_section',array(
        'title'=>__('Success Stories','explore'),
        'priority'=>300
    ));
    $wp_customize->add_section('explore_footer_section',array(
        'title'=>__('Footer Menu','explore'),
        'priority'=>500
    ));


    /*Instructor Section */
    $wp_customize->add_section('explore_instructor_section',array(
        'title'=>__('Instructors Section','explore'),
        'priority'=>300
    ));
    
    $wp_customize->add_setting('explore_title',array(
        'default'=>''
        )); 
    $wp_customize->add_setting('explore_content',array(
            'default'=>''
            )); 
            $wp_customize->add_setting('explore_content2',array(
                'default'=>''
                )); 

            $wp_customize->add_setting('explore_image',array(
                'transport'=>'refresh',
                'height'=>375,
            ));
            $wp_customize->add_setting('explore_success_title',array(
                'default'=>''
                )); 
                $wp_customize->add_setting('explore_success_subtitle',array(
                    'default'=>''
                    )); 
                    $wp_customize->add_setting('explore_success_content_handle',array(
                        'default'=>''
                        )); 
                        $wp_customize->add_setting('explore_success_point1',array(
                            'default'=>''
                            )); 
                            $wp_customize->add_setting('explore_success_point2',array(
                                'default'=>''
                                )); 
                                $wp_customize->add_setting('explore_success_point3',array(
                                    'default'=>''
                                    )); 
                                    $wp_customize->add_setting('explore_success_point4',array(
                                        'default'=>''
                                        )); 

/*Instructor Settings */
$wp_customize->add_setting('explore_instructor_title',array(
    'default'=>''
    )); 
    $wp_customize->add_setting('explore_instructor_subtitle',array(
        'default'=>''
        )); 
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_title_text',array(

            'label'=>__('Title','explore'),
            'section'=>'explore_welcome_section',
            'type'=>'text',
            'settings'=>'explore_title'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_content_text',array(

            'label'=>__('Content','explore'),
            'section'=>'explore_welcome_section',
            'type'=>'textarea',
            'settings'=>'explore_content'

        )));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'explore_image',array(
            'label'=>__('Image','explore'),
            'section'=>'explore_welcome_section',
            'settings'=>'explore_image',
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_content2_text',array(

            'label'=>__('Content2','explore'),
            'section'=>'explore_welcome_section',
            'type'=>'textarea',
            'settings'=>'explore_content2'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_title_text',array(

            'label'=>__('Title','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_title'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_subtitle_text',array(

            'label'=>__('Subtitle','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_subtitle'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_content_handle_text',array(

            'label'=>__('Content','explore'),
            'section'=>'explore_success_section',
            'type'=>'textarea',
            'settings'=>'explore_success_content_handle',
            'description'=>'Please Enter your details here'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_point1_text',array(

            'label'=>__('Point1','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_point1'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_point2_text',array(

            'label'=>__('Point2','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_point2'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_point3_text',array(

            'label'=>__('Point3','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_point3'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_success_point4_text',array(

            'label'=>__('Point4','explore'),
            'section'=>'explore_success_section',
            'type'=>'text',
            'settings'=>'explore_success_point4'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_instructor_title_text',array(

            'label'=>__('Title','explore'),
            'section'=>'explore_instructor_section',
            'type'=>'text',
            'settings'=>'explore_instructor_title'

        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_instructor_subtitle_text',array(

            'label'=>__('SubTitle','explore'),
            'section'=>'explore_instructor_section',
            'type'=>'text',
            'settings'=>'explore_instructor_subtitle'

        )));
        $wp_customize->add_setting('instructor_image',array(
            'transport'=>'refresh',
            'height'=>375,
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'instructor_image',array(
            'label'=>__('Image','explore'),
            'section'=>'explore_instructor_section',
            'settings'=>'instructor_image'
        )));

        $wp_customize->add_setting('footer_image',array(
            'transport'=>'refresh',
            'height'=>375,
        ));
        
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'footer_image',array(
            'label'=>__('Image','explore'),
            'section'=>'explore_footer_section',
            'settings'=>'footer_image'
        )));

        $wp_customize->add_setting('explore_footer_content1',array(
            'default'=>''
            )); 
            $wp_customize->add_setting('explore_footer_content2',array(
                'default'=>''
                )); 
                $wp_customize->add_setting('explore_footer_content3',array(
                    'default'=>''
                    )); 

    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_footer_content1',array(

                        'label'=>__('Content','explore'),
                        'section'=>'explore_footer_section',
                        'type'=>'textarea',
                        'settings'=>'explore_footer_content1',
            
                    )));

                    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_footer_content2',array(

                        'label'=>__('Content','explore'),
                        'section'=>'explore_footer_section',
                        'type'=>'text',
                        'settings'=>'explore_footer_content2',
            
                    )));
                    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'explore_footer_content3',array(

                        'label'=>__('Content','explore'),
                        'section'=>'explore_footer_section',
                        'type'=>'text',
                        'settings'=>'explore_footer_content3',
            
                    )));


}
?>