<?php
 /*Template Name: New Template
 */
 
get_header(); ?>

<?php include ("inc/top-banner.php") ?>

<div class="page-content"> 
    <div class="row">
        <!-- <h1 class="page-title"><?php #the_title(); ?></h1> -->
        <h1 class="page-title">Events</h1>
        <div class="column small-12 medium-10 medium-centered">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pellentesque lacinia quam vel laoreet. Praesent eget arcu venenatis, suscipit tellus quis, consectetur urna. Phasellus facilisis justo magna, in mattis urna gravida a. Duis fermentum tristique odio, non semper nisl semper id. Nullam ac luctus nisi.
            </p>
            <p>
                Duis venenatis orci hendrerit, feugiat arcu a, mollis libero. Proin at tincidunt nibh, nec semper lorem. Sed eget cursus lectus. Duis semper, urna ut vulputate mollis, purus justo egestas ipsum, et pretium tortor magna ut massa.
            </p>
        </div>
    </div>

    <div class="tab-container">
        <div class="row">
            <div class="column medium-10 medium-centered small-12">
                <div class="tab">
                    <ul class="tabs">
                        <li><a href="#">Course Overview</a></li>
                        <li><a href="#">Course Outline</a></li>
                        <li><a href="#">Faculty</a></li>
                        <li><a href="#">Admissions</a></li>
                    </ul> <!-- / tabs -->

                    <div class="tab_content">

                        <div class="tabs_item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/examples/programs/film-acting.jpg">
                            <h4>Course Overview</h4>
                            <p>
                                Year One of New Images’ Acting Conservatory offers you a fast paced, challenging year of practical, hands-on actor’s training and self-discovery.
                            </p>
                            <p>
                                Seasoned, award winning professional actors guide you through fun and in-depth movement, text analysis, scene study and voice classes. Students learn to dissect, examine and break down scripts and perform them.
                            </p>
                            <p>
                                Our “on camera” component provides you with the specific preparation required to navigate through the exciting world of today’s film and television industries with skill and confidence. Our students further demonstrate and deepen their skill sets through the Live Theatre Module where, they rehearse, hone and then present their work in front of live audiences.
                            </p>
                            <p>
                                This life changing year of actor training is the best you will find anywhere. A great way to start your acting career, practice and get in to acting.
                            </p>
                        </div> <!-- / tabs_item -->

                        <div class="tabs_item">
                            <img class="alignleft max_width" alt="tabs_shortcode2" src="http://saspa.org/wp-content/uploads/2014/06/shutterstock_125381384.jpg">
                            <h4>Course Outline</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>

                            <dl class="accordion">

                                <dt><a href="">Course 1</a></dt>
                                <dd>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</dd>

                                <dt><a href="">Course 2</a></dt>
                                <dd>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</dd>

                                <dt><a href="">Course 3</a></dt>
                                <dd>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</dd>

                            </dl>
                        </div> <!-- / tabs_item -->

                        <div class="tabs_item">
                            <h4>Faculty</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, excepturi, minima, corporis deserunt quia quae sit officiis labore inventore autem a delectus consequuntur voluptatem modi eligendi similique sed nam vitae.</p>
                        </div> <!-- / tabs_item -->

                        <div class="tabs_item">
                            <h4>Admissions</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, suscipit, eaque asperiores neque numquam nam possimus dolorem ipsa aspernatur reiciendis?</p>
                        </div> <!-- / tabs_item -->
                        
                    </div> <!-- / tab_content -->
                </div> <!-- / tab -->
            </div>
        </div>
    </div>

    <section class="riverflow">
        <div class="row">
            <div class="riverflow__item">
                <div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/bring-on.jpg) no-repeat center center; background-size: cover;"></div>
                <div class="riverflow__item__content">
                    <h2 class="riverflow__item__title">Bring on the success</h2>
                    <div class="riverflow__item__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
                    </div>
                    <a href="#" class="riverflow__item__link">Learn more</a>
                </div>
            </div>
            <div class="riverflow__item">
                <div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/nic-talks.jpg) no-repeat center center; background-size: cover;"></div>
                <div class="riverflow__item__content">
                    <h2 class="riverflow__item__title">NIC Talks</h2>
                    <div class="riverflow__item__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
                    </div>
                    <a href="#" class="riverflow__item__link">Learn more</a>
                </div>
            </div>
            <div class="riverflow__item">
                <div class="riverflow__item__image" style="background: url(<?php echo get_template_directory_uri(); ?>/images/examples/events.jpg) no-repeat center center; background-size: cover;"></div>
                <div class="riverflow__item__content">
                    <h2 class="riverflow__item__title">Events</h2>
                    <div class="riverflow__item__description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vel erat non mi condimentum consectetur imperdiet nec dolor. Suspendisse lacinia est nec vulputate finibus. Sed ultrices odio ut nulla euismod, ut varius arcu ornare.</p>
                    </div>
                    <a href="#" class="riverflow__item__link">Learn more</a>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>