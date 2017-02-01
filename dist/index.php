<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The portfolio of Manchester based developer and designer, Luke Dagnall">
    <title>Home - lukedagnall.co.uk</title>
    <link rel="stylesheet" href="/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <?php include 'includes/header.php' ?>

  <div class="banner">
    <div class="shape-container">
      <div class="shape-wrapper shape-wrapper--header">
        <?php include 'includes/shapes.php' ?>
      </div>
    </div>

    <h1>Web Developer &amp; Designer</h1>

    <div class="line-path">
      <div class="line-path__title"><a href="#explore">Work</a></div>
    </div>
  </div>

  <div class="site-container">
    <main>
      <section class="section section--work" id="explore">
        <div class="work-container">
          <a href="#">
            <div class="work-tile work-tile--feature work-tile--yellow">
              <div class="shape-wrapper shape-wrapper--work rellax" data-rellax-speed="0.7">
                <div class="shape shape--plus">
                  <img src="/images/shapes/plus-yellow.svg" alt="">
                </div>
                <div class="shape shape--diamond">
                  <img src="/images/shapes/diamond-red.svg" alt="">
                </div>

              </div>
              <div class="work-tile__img">
                <img src="/images/placeholder.png" alt="">
              </div>
              <h2 class="work-tile__title">My Style Guide</h2>
              <div class="btn">
                <span class="btn__text">View project</span>
              </div>
            </div>
          </a>

          <a href="#">
            <div class="work-tile work-tile--feature work-tile--blue">
              <div class="shape-wrapper shape-wrapper--work rellax" data-rellax-speed="0.7">
                <div class="shape shape--plus">
                  <img src="/images/shapes/plus-yellow.svg" alt="">
                </div>

                <div class="shape shape--diamond">
                  <img src="/images/shapes/diamond-green.svg" alt="">
                </div>

                <div class="shape shape--plus">
                  <img src="/images/shapes/plus-blue.svg" alt="">
                </div>

              </div>
              <div class="work-tile__img">
                <img src="/images/placeholder.png" alt="">
              </div>
              <h2 class="work-tile__title">Digital CV</h2>
              <div class="btn">
                <span class="btn__text">View project</span>
              </div>
            </div>
          </a>
        </div>
      </section>
    </main>



    <section class="section section--tracks">
      <h2 class="section__title">Appreciate what i'm listening to right now</h2>

      <div class="track-container">
        <?php include 'includes/recenttracks.php' ?>
      </div>

      <span class="section__tag">Find out a bit more about what I like</span>
      <div class="btn">
        <a href="/about/" class="btn__text">About me</a>
      </div>
    </section>
  </div>

<?php include 'includes/footer.php' ?>
