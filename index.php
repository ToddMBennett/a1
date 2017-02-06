<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSCI 15 Assignment 1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <!-- Author's name -->
      <h1>Todd Michael Bennett</h1>
      <img class="img-responsive" src="propic.jpg" />
      <hr>

      <!-- A description about the author and why he wants to learn more about web dev -->
      <p>Hi! My name is Todd Michael Bennett and I am based out of Denver but frequently fly to Asia for business.
        I started an educational consulting firm in Seoul, South Korea about five years ago and deal with companies
        like Samsung, Hyundai, and LG.  I recruit top corporate trainers that hold seminars and workshops, educating
        employees to get-up-to-speed on various topics related to business.</p>
      <p>I joined this class to further my understanding with coding and become more familiar with server-side code.
        For the past couple of years, I have been learning client-side programming i.e., HTML, CSS, and JS.  I realize
        that these technologies are great but want to understand the whole picture and how the back-end works.  So, here
        I am and excited to learn everything about PHP and related technologies</p>
      <hr>
      <!-- random quote generator
      quotes extracted from https://www.goodreads.com/quotes -->
      <div id="quote">
        <?php
          echo "<h4>Famous Semi-Random Quote</h4>";
          //creating variable
          $number = rand (0, 5);

          //on page load, switch randomly picks a number and displays associative quote
          switch($number)
            {
              case 0:
              echo "'Don't cry because it's over, smile because it happened.' - <b>Dr. Seuss</b>";
              break;
              case 1:
              echo "'Be yourself; everyone else is already taken.' - <b>Oscar Wilde</b>";
              break;
              case 2:
              echo "'So many books, so little time.' - <b>Frank Zappa</b>";
              break;
              case 3:
              echo "'You only live once, but if you do it right, once is enough.' - <b>Mae West</b>";
              break;
              case 4:
              echo "'Be the change that you wish to see in the world.' - <b>Mahatma Gandhi</b>";
              break;
              case 5:
              echo "'No one can make you feel inferior without your consent.' - <b>Eleanor Roosevelt</b>";
              break;
            }
        ?>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
