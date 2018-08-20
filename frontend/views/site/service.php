<div id="fh5co-services">
    <div class="container">
        <div class="row row-pb-md">
            <div class="col-md-8 col-md-offset-2 text-center animate-box" data-animate-effect="fadeInUp">
                <div class="fh5co-heading">
                    <span>We're expert</span>
                    <h2>What We Do</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ( $service as $item ) : ?>

                <div class="col-md-4 col-sm-4 ">
                    <div class="feature-center animate-box" data-animate-effect="fadeInUp">
                            <span class="icon">
                                <i class="<?php echo $item['icon']; ?>"></i>
                            </span>
                        <h3><?php echo $item['name']; ?></h3>
                        <p><?php echo $item['content']; ?></p>
<!--                        <p><a href="#">Learn more</a></p>-->
                    </div>
                </div>

            <?php endforeach; ?>

        </div>
    </div>
</div>

<div id="fh5co-testimonial" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box row-pb-md">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>You deserved happiness</span>
                <h2>Happy Clients</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 animate-box">
                <div class="testimonial">
                    <blockquote>
                        <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                        <p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
                    </blockquote>
                </div>

                <div class="testimonial">
                    <blockquote>
                        <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                        <p class="author"><img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
                    </blockquote>
                </div>
            </div>

            <div class="col-md-6 animate-box">
                <div class="testimonial">
                    <blockquote>
                        <p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                        <p class="author"><img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
                    </blockquote>
                </div>

                <div class="testimonial">
                    <blockquote>
                        <p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
                        <p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
                    </blockquote>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->render('__start'); ?>