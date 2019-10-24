<?php get_header(); ?>

    <section class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <div class="intro__content">
                    <h1 class="intro__title">
                        <?php bloginfo( 'name' ); ?>
                    </h1>
                    <div class="intro__text">
						<p>
							<?php bloginfo( 'description' ); ?>
					</p>
                    </div>
                    <div class="intro__links">
                        <a href="#" class="btn">Download</a>
                        <a href="#" class="intro__cv">CV <i class="fas fa-arrow-right"></i></a>
                    </div>
                    
                </div>
                <div class="intro__photo">
                    <img src="<?php bloginfo('template_directory') ?>/images/intro__photo.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <div class="services" id="services">
        <div class="container">
            <div class="services__inner">
                <div class="services__item">
                    <h3 class="services__title">Front End Development</h3>
                    <div class="services__text"><p>Lorem ipsum dolor sit amet, consectetur 
                        adipisicing elit. Vel nobis quaerat debitis perspiciatis, 
                        placeat repellat natus aut quis aspernatur.</p></div>
                    <a href="#" class="services__link">Read more</a>
                </div>

                <div class="services__item">
                    <h3 class="services__title">UI-UX Design for web</h3>
                    <div class="services__text"><p>Lorem ipsum dolor sit amet, consectetur 
                        adipisicing elit. Vel nobis quaerat debitis perspiciatis, 
                        placeat repellat natus aut quis aspernatur.</p></div>
                    <a href="#" class="services__link">Read more</a>
                </div>

                <div class="services__item">
                    <h3 class="services__title">Web Development</h3>
                    <div class="services__text"><p>Lorem ipsum dolor sit amet, consectetur 
                        adipisicing elit. Vel nobis quaerat debitis perspiciatis, 
                        placeat repellat natus aut quis aspernatur.</p></div>
                    <a href="#" class="services__link">Read more</a>
                </div>

            </div>
        </div>
    </div>


    <section class="aboutme" id="aboutme">
        
        <div class="container">
            <div class="aboutme__inner">

                <div class="skills">

                    <h3 class="skills__title">My Skills for work</h3>

                    <div class="skills__item">

                        <div class="skills__top">
                            <div class="skills__item__title">
                                Html
                            </div>
                            <div class="skills__item__percent">80%</div>
                        </div>

                        <div class="skills__line">
                            <div class="skills__line__based">
                                <div class="skills__line__now" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skills__item">

                        <div class="skills__top">
                            <div class="skills__item__title">
                                CSS
                            </div>
                            <div class="skills__item__percent">85%</div>
                        </div>

                        <div class="skills__line">
                            <div class="skills__line__based">
                                <div class="skills__line__now" style="width: 85%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skills__item">

                        <div class="skills__top">
                            <div class="skills__item__title">
                                Javascript
                            </div>
                            <div class="skills__item__percent">95%</div>
                        </div>

                        <div class="skills__line">
                            <div class="skills__line__based">
                                <div class="skills__line__now" style="width: 95%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skills__item">

                        <div class="skills__top">
                            <div class="skills__item__title">
                                Ajax
                            </div>
                            <div class="skills__item__percent">80%</div>
                        </div>

                        <div class="skills__line">
                            <div class="skills__line__based">
                                <div class="skills__line__now" style="width: 80%;"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skills__item">

                        <div class="skills__top">
                            <div class="skills__item__title">
                                UI/ UX Design
                            </div>
                            <div class="skills__item__percent">90%</div>
                        </div>

                        <div class="skills__line">
                            <div class="skills__line__based">
                                <div class="skills__line__now" style="width: 90%;"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="aboutme__content">
                    <h2 class="aboutme__title">About Me : Why I am different then other Freelancer.</h2>
                    <div class="aboutme__text">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Quis ipsum suspendi sse ultrices gravida. Risus commodo viverra maecenas.</p>
                        <br>
                        <p>Cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, 
                            sunt in culpa qui officia deseruntm.</p>
                    </div>
                    <div class="aboutme__links">
                        <a href="#" class="btn btn--black">Learn</a>
                        <a href="#" class="aboutme__more">More <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="provide" id="provide">
        <div class="container">
            <div class="provide__inner">

                <div class="provide__content">
                    <h2 class="provide__title">Services I Provide..</h2>
                    <p class="provide__text">Lorem ipsum dolor sit amet, consectetur 
                        adipisicing elit, sed do eiusmod tempor incididunt.</p>
                </div>

                <div class="provide__services">

                    <div class="provide__services__item">
                        <div class="provide__services__item__logo">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <a href="#" class="provide__services__item__title">Photography</a>
                        <p class="provide__services__item__text">Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse 
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                    </div>

                    <div class="provide__services__item">
                        <div class="provide__services__item__logo">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <a href="#" class="provide__services__item__title">Branding</a>
                        <p class="provide__services__item__text">Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse 
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                    </div>

                    <div class="provide__services__item">
                        <div class="provide__services__item__logo">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <a href="#" class="provide__services__item__title">Logo Design</a>
                        <p class="provide__services__item__text">Duis aute irure dolor in 
                            reprehenderit in voluptate velit esse 
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                    </div>

                    <div class="provide__services__item">
                            <div class="provide__services__item__logo">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <a href="#" class="provide__services__item__title">Photography</a>
                            <p class="provide__services__item__text">Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                        </div>
    
                        <div class="provide__services__item">
                            <div class="provide__services__item__logo">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <a href="#" class="provide__services__item__title">Branding</a>
                            <p class="provide__services__item__text">Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                        </div>
    
                        <div class="provide__services__item">
                            <div class="provide__services__item__logo">
                                <i class="fas fa-laptop"></i>
                            </div>
                            <a href="#" class="provide__services__item__title">Logo Design</a>
                            <p class="provide__services__item__text">Duis aute irure dolor in 
                                reprehenderit in voluptate velit esse 
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint.</p>
                        </div>

                </div>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="portfolio__head">
                <h2 class="portfolio__head__title">My Portfolio</h2>
                <div class="portfolio__head__text"><p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                </p></div>
            </div>
            <div class="portfolio__nav">
                <a href="#" class="portfolio__nav__link" data-filter="all">All</a>
                <a href="#" class="portfolio__nav__link" data-filter="graphics">Graphics</a>
                <a href="#" class="portfolio__nav__link" data-filter="web">Web</a>
                <a href="#" class="portfolio__nav__link" data-filter="marceting">Marceting</a>
                <a href="#" class="portfolio__nav__link" data-filter="photoshop">Photoshop</a>
                <a href="#" class="portfolio__nav__link" data-filter="illustrator">Illustrator</a>
            </div>
            <div class="portfolio__works">
                <div class="portfolio__works__top">

                    <div class="portfolio__works__item" data-cat="web">
                        <img class="portfolio__works__image" src="<?php bloginfo('template_directory') ?>/images/portf_1.jpg" alt="Portfolio Image">
                        <div class="portfolio__works__item__icon__bg"></div>
                        <div class="portfolio__works__item__icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>

                    <div class="portfolio__works__item" data-cat="photoshop">
                        <img class="portfolio__works__image" src="<?php bloginfo('template_directory') ?>/images/portf_2.jpg" alt="Portfolio Image">
                        <div class="portfolio__works__item__icon__bg"></div>
                        <div class="portfolio__works__item__icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>

                    <div class="portfolio__works__item" data-cat="graphics">
                        <img class="portfolio__works__image" src="<?php bloginfo('template_directory') ?>/images/portf_3.png" alt="Portfolio Image">
                        <div class="portfolio__works__item__icon__bg"></div>
                        <div class="portfolio__works__item__icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>
                
                </div>
                <div class="portfolio__works__bot">

                    <div class="portfolio__works__item" data-cat="web">
                        <img class="portfolio__works__image" src="<?php bloginfo('template_directory') ?>/images/portf_4.png" alt="Portfolio Image">
                        <div class="portfolio__works__item__icon__bg"></div>
                        <div class="portfolio__works__item__icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>

                    <div class="portfolio__works__item" data-cat="illustrator">
                        <img class="portfolio__works__image" src="<?php bloginfo('template_directory') ?>/images/portf_5.jpg" alt="Portfolio Image">
                        <div class="portfolio__works__item__icon__bg"></div>
                        <div class="portfolio__works__item__icon">
                            <i class="fas fa-binoculars"></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <div class="container">

            <div class="projects__head">
                <h2 class="projects__head__title">My News and Projects</h2>
                <div class="projects__head__text">
                    <p>
                        Etiam id augue sollicitudin ex ultrices accumsan id eget urna. Duis ut vestibulum arcu. Ut congue facilisis 
                    </p>
                </div>
            </div>

            <div class="blog">
                <div class="blog__item">
                    <div class="blog__image">
                        <img src="<?php bloginfo('template_directory') ?>/images/blog_1.jpg" alt="">
                    </div>

                    <div class="blog__wrap">
                        <div class="blog__bar">
                            <i class="fas fa-user"></i> Oruna 
                            <i class="far fa-clock"></i> 09:31 AM
                            <i class="far fa-calendar-alt"></i> APR 16, 2019
                        </div>

                        <h4 class="blog__title">Quisque sed ligula quam. Fusce non massa condimentum tellus.</h4>
                        <div class="blog__text"><p>
                                Mauris eu ligula at ju risque mollis ut at orci. Cras augue nisi, malesuada quis gravida eu, ornare quis neque. Ut sed.
                        </p></div>
                        <a href="#" class="blog__link">Read more</a>
                    </div>
                    
                </div>
                <div class="blog__sm">
                    
                        <div class="blog__item">
                            <div class="blog__image">
                                <img src="<?php bloginfo('template_directory') ?>/images/blog_2.jpg" alt="">
                            </div>
        
                            <div class="blog__wrap">
                                <div class="blog__bar">
                                    <i class="fas fa-user"></i> Mithila 
                                    <i class="far fa-clock"></i> 06:20 AM
                                    <i class="far fa-calendar-alt"></i> JUN 20, 2019
                                </div>
        
                                <h4 class="blog__title">Vivamus vulputate laeet augue odio mollis acdks.</h4>
                                <div class="blog__text"><p>
                                        Nunc tortor erat, pulvinar et odio id, dictum bibendu mauris. 
                                        Nulla at turpis varius, tristique metus sit amet, laoreet est. 
                                        Etiam quis libero.
                                </p></div>
                                <a href="#" class="blog__link">Read more</a>
                            </div>
                        </div>

                        <div class="blog__item">
                            <div class="blog__image">
                                <img src="<?php bloginfo('template_directory') ?>/images/blog_3.jpg" alt="">
                            </div>
        
                            <div class="blog__wrap">
                                <div class="blog__bar">
                                    <i class="fas fa-user"></i> Robocop 
                                    <i class="far fa-clock"></i> 06:20 AM
                                    <i class="far fa-calendar-alt"></i> FEB 13, 2019
                                </div>
        
                                <h4 class="blog__title">Phasellus nunc non ligula venenatis vestibulum. sit amet metu eros</h4>
                                <div class="blog__text"><p>
                                    Maecenas maximus erat quis lectus luctus, vel porta nulla commodo. Donec felis nulla, faucibus quis metus eget, sagittis consectetur mi. Nam non.
                                </p></div>
                                <a href="#" class="blog__link">Read more</a>
                            </div>
                        </div>

                </div>
            </div>

        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews__inner">
                <div class="reviews__head">
                    <h3 class="reviews__title">Happy Clients talk</h3>
                    <div class="reviews__text"><p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                    </p></div>
                </div>
                <div class="reviews__reviews">
                    <div class="reviews__item" data-reviews>
                        <div>
                            <div class="reviews__item__container">
                                <div class="reviews__item__head">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                        sed do eiusmod tempor incididunt
                                         ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                         quis nostrud exercitation</p>
                                </div>
                                <div class="reviews__item__foot">
                                    <div class="reviews__item__person">
                                        <div class="reviews__item__name">Hira Doe</div>
                                        <div class="reviews__item__prof">Web Developer</div>
                                    </div>
                                    <img src="<?php bloginfo('template_directory') ?>/images/reviews__photo.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviews__item__container">
                                <div class="reviews__item__head">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                        sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                            quis nostrud exercitation</p>
                                </div>
                                <div class="reviews__item__foot">
                                    <div class="reviews__item__person">
                                        <div class="reviews__item__name">Hira Doe</div>
                                        <div class="reviews__item__prof">Web Developer</div>
                                    </div>
                                    <img src="<?php bloginfo('template_directory') ?>/images/reviews__photo.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="reviews__item__container">
                                <div class="reviews__item__head">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                                        sed do eiusmod tempor incididunt
                                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                            quis nostrud exercitation</p>
                                </div>
                                <div class="reviews__item__foot">
                                    <div class="reviews__item__person">
                                        <div class="reviews__item__name">Hira Doe</div>
                                        <div class="reviews__item__prof">Web Developer</div>
                                    </div>
                                    <img src="<?php bloginfo('template_directory') ?>/images/reviews__photo.jpg" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="partners">
        <div class="container">
            <div class="partners__inner" data-slider>

                <div><img src="<?php bloginfo('template_directory') ?>/images/low22.png" alt=""></div>
                <div><img src="<?php bloginfo('template_directory') ?>/images/themeforest-logo.png" alt=""></div>
                <div><img src="<?php bloginfo('template_directory') ?>/images/photodune-logo.png" alt=""></div>
                <div><img src="<?php bloginfo('template_directory') ?>/images/codecanyon-logo.png" alt=""></div>
                <div><img src="<?php bloginfo('template_directory') ?>/images/themeforest-logo.png" alt=""></div>

            </div>
        </div>
    </div>

    <section class="contact">
        <div class="container">
            <div class="contact__inner">
                <div class="contact__info">
                    <h3 class="contact__title">Contact Info:</h3>
                    <div class="contact__text">
                        <p>
                        Praesent interdum congue mauris, et fringilla lacus pel
                        vitae. Quisque nisl mauris, aliquam eu ultrices vel, conse
                        vitae sapien at imperdiet risus. Quisque cursus risus id.
                        fermentum, in auctor quam consectetur.
                        </p>
                    </div>
                    <div class="contact__contacts">
                        <div class="contact__contacts__item">Address:  10111 Santa Monica Boulevard, LA</div>
                        <div class="contact__contacts__item">Phone:  +44 987 065 908</div>
                        <div class="contact__contacts__item">Email:  info@Example.com</div>
                        <div class="contact__contacts__item">Fax:  +44 987 065 909</div>
                    </div>
                </div>
                <div class="contact__form">
                    <form action="/" method="POST" class="form">
                        <div class="form__wrap">
                            <input type="text" class="form__input" placeholder="Your Name">
                            <input type="email" class="form__input" placeholder="Your Email">
                        </div>
                        <input type="phone" class="form__input" placeholder="Phone">
                        <textarea name="input-text" class="form__textarea" placeholder="Your Comment"></textarea>
                        <a href="#" class="btn btn--black">SEND MESSAGE</a>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<?php get_footer() ?>
