<?php
class buildHeader{
    public function printHeader(){
        $this->printHead();
        $this->printNavBar();
    }

    private function printHead(){
        ?>

        <!DOCTYPE html>
        <html ng-app="app">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>ab-works</title>
            <link href="medias/favicon.ico" rel="shortcut icon" type="image/x-icon" />

            <!-- Bootstrap -->
            <link href="frameworks/bootstrap/css/bootstrap.css" rel="stylesheet">
            <link href="frameworks/bootstrap/css/bootstrap-custom.css" rel="stylesheet">
            <style> body {  padding-top: 50px;  } </style>

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
        <?php
    }

    private function printNavBar()
    {
        ?>

        <div class="navbar navbar-custom navbar-fixed-top hidden-tablet hidden-phone">

            <div class="navbar-header">
                <a href="./layout.php?page=home&menu=presentation" name="home"  type="submit" id="home" onclick="home()" class="navbar-brand glyphicon glyphicon-home"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                        <li><a href="./layout.php?page=overview" name="overview"  type="submit" id="overview" onclick="overview()"><strong>Overview</strong></a></li>
                        <li><a href="./layout.php?page=editor" name="editor"    type="submit" id="editor"   onclick="editor()"><strong>Editor</strong></a></li>
                </ul>



                <ul class="nav navbar-nav navbar-right">
                    <li><!--
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>-->
                        <a target="_blank" href="https://github.com/abworksdotnet/my_phpmyadmin" title="View source code on GitHub"><img src="./medias/github.png" width="20" height="20" class="img-circle"></a>
                    </li>
                    <li>
                        <a href="model/model_logout.php"
                           class="glyphicon glyphicon-log-out"
                            <?php echo 'title=\'Logout ' . $_SESSION['login'] . '\''; ?>>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <?php
    }
}