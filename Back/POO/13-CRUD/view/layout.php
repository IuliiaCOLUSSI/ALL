<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?= $title ?></title>
  </head>
  <body>

  
    <!-- Le layout et template principal de l'application, à vous de personnaliser en y intégrant une nevbar, un footer et une section au milieu -->


     <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Large</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3" focusable="false" role="img"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#">World</a>
      <a class="p-2 text-muted" href="#">U.S.</a>
      <a class="p-2 text-muted" href="#">Technology</a>
      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Science</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a>
    </nav>
  </div>
  <section class="container">
  <h1 class="display-4 text-center mt-4"><?= $title ?></h1>
  <?= $content ?>
  </section>
  <section class="container">
  <footer class="blog-footer text-center">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@IuliiaColussi</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
</section>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
