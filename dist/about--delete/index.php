<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The portfolio of Manchester based developer and designer, Luke Dagnall">
    <title>About - lukedagnall.co.uk</title>
    <link rel="stylesheet" href="/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php";?>

  <div class="banner">
    <div class="shape-container">
      <div class="shape-wrapper shape-wrapper--header shape-wrapper--small">
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/shapes.php";?>
      </div>
    </div>

    <h1>Behind the code</h1>

    <div class="line-path">
      <div class="line-path__title"><a href="#explore">Let's go!</a></div>
    </div>
  </div>

  <div class="site-container site-container--central">
    <main>

      <section class="dual-row" id="explore">
        <div class="column">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="column column--img">
          <img src="/images/illustrations/sky.svg" alt="">
        </div>
      </section>

      <section class="section section--tracks section--no-margin">
        <div class="track-container track-container--no-margin">
          <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/recenttracks.php";?>
        </div>
      </section>

      <section class="dual-row">
        <div class="column column--img">
          <img src="/images/illustrations/sky.svg" alt="">
        </div>

        <div class="column">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </section>


    </main>
  </div>

  <?php include $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php";?>
