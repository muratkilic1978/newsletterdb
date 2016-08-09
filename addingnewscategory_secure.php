<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Adding subscriber to subscribers-tabel</title>
    <!---
      * CSS files that are included
      * 
      *
    -->
    <!-- Latest AweSome Font CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Latest Bootstrap compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
      
    <!-- jQuery CSS  -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.2.0/respond.js"></script>
    <![endif]-->

<!--
 * JavaScript files that are included
 * 
 * 
-->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
      
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      
    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>

<?php
  # Connect to the database
  include('includes/connectdb.php');

  # Get data from Submit-Form and store it in variables
  $category = stripslashes($_POST['category']);
  #$category = mysql_real_escape_string($category);

  $description = stripslashes($_POST['description']);
  #$description = mysql_real_escape_string($description);
  

  # Prepare SQL-query for insert operation
  $query = "INSERT INTO news_category (category, description)  VALUES ('$category', '$description')";
  # Execute SQL-query and if some errors occur then return am error message 
  mysqli_query($dbc, $query)
    or die('Error querying database.');

  # Write out to html-document
  echo '<div class="wrap">';
  echo  '<div class="container">';
  echo      '<h4>Thank You for adding a news category.</h4>';
  echo      '<button class="btn btn-danger" onclick="goBack()">Go Back</button>';
  echo  '</div>';
  echo '</div>';

  # Close database-connection
  mysqli_close($dbc);
?>
  <!--  ###### A JS-script that make it possible to return to previus page ##### --> 
  <script>
    function goBack() {
    window.history.back();

    }
  </script>
  
</body>
</html>
