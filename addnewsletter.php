<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Add subscriber</title>
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
  
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="thumbnail center well well-sm text-center">
          <h2>Add New Newsletter </h2>
            <p>Please create a newsletter .</p>
              <form method="post" action="addingnewsletter_secure.php">  
                  <fieldset class="form-group">
                    <label for="formGroupExampleInput">
                      <span class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                        Title:
                      </span>
                    </label>
                     <input type="text" class="form-control" id="formGroupExampleInput" name="title" value="" placeholder="Title of newsletter">
                  </fieldset>   
                   <?php

                   # Include database connection-file - connectdb.php
                  include('includes/connectdb.php');
      
                  # Make a sql-query to the database
                  $newsCategoryQuery = "SELECT id, category FROM news_category";

                  #Perform queries against the database:
                  $resultNewsCategory = mysqli_query($dbc, $newsCategoryQuery);
                  ?>
                  
                  <fieldset class="form-group">
                    <label for="newscategoryname">News Category:</label>
                      <select name="newscategoryid" class="form-control" id="exampleSelect1">
                        <?php while($row = mysqli_fetch_array($resultNewsCategory)): ?>
                          <option value=" <?php echo $row['id']; ?> "><?php echo $row['category']; ?></option>
                        <?php endwhile; ?>
                      </select>  
                  </fieldset>           
                  <fieldset class="form-group">
                    <label for="exampleTextarea">
                      <span class="input-group-addon">
                        Subtitel:
                      </span>
                    </label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="subtitle" value="" placeholder="Subtitle of newsletter">
                  </fieldset>
                  <fieldset class="form-group">
                    <label for="exampleTextarea">
                      <span class="input-group-addon">
                        <i class="fa fa-asterisk"></i>
                        Teaser:
                      </span>
                    </label>
                    <textarea class="form-control" id="exampleTextarea" name="teaser" placeholder="Teaser of the newsletter" rows="10"></textarea>
                  </fieldset>

                  <fieldset class="form-group">
                    <label for="exampleTextarea">
                      <span class="input-group-addon">           
                        Miniteaser:
                      </span>
                    </label>
                    <textarea class="form-control" id="exampleTextarea" name="miniteaser" placeholder="Miniteaser of the newsletter" rows="4"></textarea>
                  </fieldset>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <input type="reset" value="Reset" class="btn btn-danger">
              </form>
        </div> <!--END thumbnail -->    
      </div> <!--END col-md-4  -->
    </div> <!--END row -->
  </div> <!-- END CONTAINER -->


</body>
</html>
