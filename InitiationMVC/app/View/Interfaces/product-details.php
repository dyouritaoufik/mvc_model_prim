<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_LAYOUT; ?>/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_LAYOUT; ?>/web-style.css">
<script type="text/javascript" src = "<?php echo JS_LAYOUT; ?>/bootstrap.min.js"></script>

<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Lorem ipsum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ;?>/Shops/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo URLROOT ;?>/Products/index">Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ;?>/Pages/cart">Cart</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>

<div class="container-product">

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Library</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </nav>

  <div id = "id-card-position" class="card">
    <img class="rounded-0" src="<?php echo IMG_PUBLIC; ?>/atlas-architecture-benin-projet-r-1.jpg" alt="Edgy image">
    <div class="card-body bg-light mr-auto">
      <h4 class="card-title">Rolex</h4>
      <p class="card-text">
        Some quick example text to build on the card title
        and make up the bulk of the card's content.
      </p>
      <a href="#!" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">Fluid jumbotron</h1>
      <p class="lead">
        This is a modified jumbotron that occupies
        the entire horizontal space of its parent.
      </p>
    </div>
  </div>

  <div id = "id-card-description" class="row">
    <div id = "id-card-col" class="col">
      <div class="card card-body bg-light">
        <h3>Description</h3>
          <div class="row">
              <div class="col">
                Etiam porta sem malesuada magna mollis euismod.
              </div>
              <div class="col">
                Etiam porta sem malesuada magna mollis euismod.                
              </div>
          </div>

      </div>
    </div>
  </div>

  <dl class="dl-horizontal">
    <h3 class="display-6">Description</h3>
    <dt class="col-sm-3">Description lists</dt>
    <dd class="col-sm-9">
      For years, top recruiters in industry have hired fresh engineers based solely on their knowledge of Javascript. If you want to get a programming job, this is the language to learn! But learning Javascript is complicated!  There's fancy syntax, weird design patterns, and a billion resources online that might be giving you wrong - or even be out of date - information.

      We built this course to solve your problems.  This is the best and most up-to-date resource online for becoming a Javascript professional as quickly as possible. Every minute of this course has been created with one goal in mind: teaching you how to become a great engineer.
    </dd>

    <dt class="col-sm-3">Euismod</dt>
    <dd class="col-sm-9">Vestibulum  felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd class="col-sm-9">Donec id elit non mi porta gravida at eget metus.</dd>

    <dt class="col-sm-3">Malesuada porta</dt>
    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
    <dd class="col-sm-9">Fusce dapibmodo, nibh, ut fermentum massa justo sit amet risus.</dd>

    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
    <dd class="col-sm-9">Fusce dapibmodo, nibh, ut fermentum massa justo sit amet risus.</dd>

    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
    <dd class="col-sm-9">Fusce dapibmodo, nibh, ut fermentum massa justo sit amet risus.</dd>
  </dl>


</div>



<footer id = "footer" class = "mojFooter">
  <nav class = "container-fluid">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Fluid jumbotron</h1>
        <p class="lead">
          This is a modified jumbotron that occupies
          the entire horizontal space of its parent.
        </p>
      </div>
    </div>

    <div class = "container">
      <div class = "row">
          <div class = "col-sm-4">
              <h4>The first container</h4>
              <p>Laborum cillum tempor ut deserunt nisi aliquip.</p>
          </div>
          <div class = "col-sm-4">
              <h4>The second container</h4>
              <p>Quis ut cillum duis ut excepteur irure.</p>
          </div>
          <div class = "col-sm-4">
              <h4>The third container</h4>
              <p>Est consequat esse occaecat sit.</p>
          </div>
      </div>
    </div>
  </nav>
</footer>   


