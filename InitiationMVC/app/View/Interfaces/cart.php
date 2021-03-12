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
          <a class="nav-link" href="<?php echo URLROOT ;?>/Pages/shop">Shop <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo URLROOT ;?>/Pages/product">Details <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT ;?>/Pages/cart">Cart <span class="sr-only">(current)</span></a>
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

