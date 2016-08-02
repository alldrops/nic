<?php if (have_rows('tabs_repeater')) : ?>
<section class="tab-container">
    <div class="row">
        <div class="small-12">
            <div class="tab">
                <ul class="tabs">
                    <?php while (have_rows('tabs_repeater')) : the_row();
                        $tabTitle = get_sub_field('tab_title');

                        if(!empty($tabTitle)) :
                            echo '<li><a href="#">' . $tabTitle . '</a></li>';
                        endif;
                    endwhile; ?>
                </ul>
                <div class="tab_content">
                    <?php while (have_rows('tabs_repeater')) : the_row();
                        $tabType = get_sub_field('tab_content_type');

                        if ($tabType == 'general') : 
                            $generalContent = get_sub_field('general_content');
                            if(!empty($generalContent)) :
                                echo '<div class="tabs_item">'.$generalContent.'</div>';
                            endif;
                        elseif($tabType == 'outline') :
                            if (have_rows('course_outline')) :
                                echo '<div class="tabs_item"><dl class="accordion">';
                                while (have_rows('course_outline')) : the_row();
                                    $courseName = get_sub_field('course_name');
                                    $courseLength = get_sub_field('course_length');
                                    $courseDesc = get_sub_field('course_description');
                                    
                                    if(!empty($courseName)) :
                                        echo '<dt><a href="">'.$courseName.'</a></dt>';
                                    endif;
                                    if(!empty($courseDesc)) :
                                        echo '<dd>'.$courseDesc.'</dd>';
                                    endif;
                                endwhile;
                                echo "</dl></div>";
                            endif;
                        elseif($tabType == 'faculty') :
                            if( have_rows('faculty') ):
                                echo '<div class="tabs_item">';
                                while ( have_rows('faculty') ) : the_row();
                                    $post_object = get_sub_field('faculty_member');
                                    if( $post_object ):
                                        $post = $post_object; setup_postdata( $post );
                                         
                                        echo '<div><a href="#">'.the_title().'</a></div>';
                                         
                                        wp_reset_postdata();
                                    endif;
                                endwhile;
                                echo '</div>';
                            endif;
                        elseif($tabType == 'admissions') :
                            $admissions = get_sub_field('admissions');
                            if(!empty($admissions)) :
                                echo '<div class="tabs_item">'.$admissions.'</div>';
                            endif;
                        endif;
                    endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>