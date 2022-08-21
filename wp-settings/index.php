<?php get_header(); ?>
    <section class="about" id="about">
        <div class="container">
            <div class="about__inner">
                <div class="about__item">
                    <div class="about__year">2011</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2012</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit.
                        Begitus vit urna nulla.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2013</div>
                    <div class="about__text">Sed at auctor sem, nec tincidunt elit. Pellentesque enim turpis, porttitor ac orci in, ultrices efficitur nisl. Ut odio libero, sodales a tellus eleifend, suscipit dapibus mi.</div>
                </div>
                <div class="about__item">
                    <div class="about__year">2014</div>
                    <div class="about__text">Lorem ipsum dolor sit amet, consectetur adipiselit. Vivamus varius nec diam vitae hendrerit bigus mit.
                        Begitus vit urna nulla.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="team" id="team">
        <div class="container">
            <h2 class="block__title">This is our team</h1>
            <p class="block__text">We are small but effective and ...</p>
            <div class="team__inner">
                <div class="team__item">
                    <img src="img/mark.png" alt="mark">
                    <div class="team__name">Mark Once</div>
                    <div class="team__desc">Designer & Front-End Developer</div>
                    <div class="team__link">
                        <a href="#">
                            <img src="img/instagram.png" alt="instagram">
                        </a>
                        <a href="">
                            <img src="img/twitter.png" alt="instagram">
                        </a>
                    </div>
                </div>
                <div class="team__item">
                    <img src="img/justin.png" alt="justin">
                    <div class="team__name">Justin Twice</div>
                    <div class="team__desc">Founder & CEO</div>
                    <div class="team__link">
                        <a href="#">
                            <img src="img/instagram.png" alt="instagram">
                        </a>
                        <a href="">
                            <img src="img/twitter.png" alt="instagram">
                        </a>
                    </div>
                </div>
                <div class="team__item">
                    <img src="img/antonio.png" alt="antonio">
                    <div class="team__name">Antonio Never</div>
                    <div class="team__desc">Someone & Somewhere</div>
                    <div class="team__link">
                        <a href="#">
                            <img src="img/instagram.png" alt="instagram">
                        </a>
                        <a href="">
                            <img src="img/twitter.png" alt="instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <h2 class="block__title">We provide you everything</h2>
            <p class="block__text">Maybe not everything, but we provide you some stuff.</p>
            <div class="services__inner">
                <div class="services__item">
                    <div class="img">
                        <img src="img/graph.png" alt="graph">
                    </div>
                    <div class="services__name">Some Analytics</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
                <div class="services__item">
                    <div class="img">
                        <img src="img/heart.png" alt="heart">
                    </div>
                    <div class="services__name">We provide you love</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
                <div class="services__item">
                    <div class="img">
                        <img src="img/cloud.png" alt="cloud">
                    </div>
                    <div class="services__name">And Some Cloud</div>
                    <div class="services__desc">Aenean nisi lectus, convallis non lorem sit amet, rhoncus malesuada justo</div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <div class="block__title">Contact Us</div>
            <p class="block__text">We know what we need to do</p>
            <div class="contacts__inner">
                <div class="contacts__item">
                    <a href="tel:555222333"><img src="img/phone.png" alt="phone"></a>
                    <a href="tel:555222333" class="contacts__desc">555-222-333</a>
                </div>
                <div class="contacts__item">
                    <a href="#">
                        <img src="img/pin.png" alt="pin">
                    </a>
                    <a href="#" class="contacts__desc">Here is some address</a>
                </div>
                <div class="contacts__item">
                    <a href="mailto: somemail@hotmail.com">
                        <img src="img/mai.png" alt="mail">
                    </a>
                    <a href="mailto: somemail@hotmail.com" class="contacts__desc">somemail@hotmail.com</a>
                </div>
            </div>
            <form class="contacts__form">
                <input class="contacts__name" type="text" placeholder="Full Name">
                <input class="contacts__email" type="email" placeholder="Email">
                <input class="contacts__number" type="phone" placeholder="Number">
                <textarea class="contact__text" name="" id="" placeholder="Write your Message here..."></textarea>
                <button class="contact_btn">
                    Submit
                </button>
            </form>
        </div>
    </section>
    <?php get_footer(); ?>
</body>
</html>