<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>SKUM - <?php echo $pageTitle; ?></title>
    <!-- CSS-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <link href="<?php echo base_url(); ?>html/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>html/css/mobile-fix.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata|Raleway" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/js/materialize.min.js"></script>
     
    <script src="<?php echo base_url(); ?>html/js/script.js"></script>
    <?php foreach($stylesheet as $fileName){ ?>
    <link href="<?php echo base_url(); ?>html/css/<?php echo $fileName; ?>" rel="stylesheet">
    <?php } ?>
    <script src="https://use.fontawesome.com/4c9f41dc36.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <script>
        $(document).ready(function (){
            $(".click").click(function (){
                $('html, body').animate({
                    scrollTop: $("#our_partner").offset().top
                }, 2000);
            });
        });
    </script>

</head>
<body class="grey lighten-2">
<style type="text/css">
    .me{background: red;}
</style>
<nav class="<?php if(strtolower($this->uri->segment(1)) == 'home'){ ?>transparent-nav<?php }?> nav-bar" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="home" class="brand-logo main-logo"><img src="<?php echo base_url(); ?>html/images/logo.png" alt="SKUM"/></a>
      <ul class="desktop-nav-link right hide-on-med-and-down">
        <li><a href="home">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="#">Institute</a></li>
        <li><a href="admission" >Admission</a></li>
        <li><a href="curriculum">Curriculum</a></li>
        <li><a href="#">Affiliation</a></li>
        <li><a href="#">vacancies</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
        
      <ul id="nav-mobile" class="side-nav">
        <li><a href="home">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="#">Institute</a></li>
        <li><a href="admission" >Admission</a></li>
        <li><a href="curriculum">Curriculum</a></li>
        <li><a href="#">Affiliation</a></li>
        <li><a href="#">vacancies</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>