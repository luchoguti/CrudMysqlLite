<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title;?> - Aplication </title>
        <link href="<?php echo $ruta_publica; ?>public/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo $ruta_publica; ?>public/css/jquery-ui-1.8.4.custom.css" rel="stylesheet">
    </head>
    <body>
        <header>
            
            <div class="container-fluid">
                <!-- Second navbar for search -->
                <nav class="navbar navbar-inverse">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">CRUDE</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-3">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Aspirantes</a></li>
                      </ul>
                      <div class="collapse nav navbar-nav nav-collapse slide-down" id="nav-collapse3">
                        <form class="navbar-form navbar-right" role="search">
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" />
                          </div>
                          <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </form>
                      </div>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->
                </nav><!-- /.navbar -->
            </div><!-- /.container-fluid -->
        </header>

