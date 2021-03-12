
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_LAYOUT; ?>/bootstrap.min.css">
    <script type="text/javascript" src = "<?php echo JS_LAYOUT; ?>/bootstrap.min.js"></script>
    <title><?php echo SITENAME;?></title>

    <header>
        <nav id= "my-nav-bar" class = "navbar navbar-default">
            <div class="container">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#monMeno" >
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class = "navbar-brand" href="#">Ullamco et est</a>
                </div>
                <div>
                    <ul class = "nav navbar-nav">
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href ="#">Users</a></li>
                    </ul>

                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href = "Authentication-widget.php"><span class = "glyphicon glyphicon-log-in"> Login </span></a></li>
                        <li><a href = "#"><span class = "glyphicon glyphicon-log-out"> Logout</span></a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
