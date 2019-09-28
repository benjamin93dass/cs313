<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Benjamin Dass</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Benjamin Dass</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="assignments.php">Assignments</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div id="testimonial">
      <p>CS 313: Web Engineering II</p>
    </div>
    

    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        window.sr = ScrollReveal();
        sr.reveal('.navbar', {
          duration: 2000,
          origin:'bottom'
        });
        sr.reveal('.showcase-left', {
          duration: 2000,
          origin:'top',
          distance:'300px'
        });
        sr.reveal('.showcase-right', {
          duration: 2000,
          origin:'right',
          distance:'300px'
        });
    </script>

    <script>
    $(function() {
      // Smooth Scrolling
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
  </body>
</html>