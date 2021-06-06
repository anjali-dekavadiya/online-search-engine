<!DOCTYPE html>
<html>
    <head>
        <title> Our Search Engine </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body onload="Id()">
        <script>
            function Id()
            {
                document.search_box.search.focus();
            }
        </script>

        <style>
            body
            {
                margin:12%;
            }
            
        </style>
        <form name="search_box" action="result.php" method="GET">
            <center>
                <img src="img/search.jpg" class="img-fluid" alt="search" style="width:20%">
                <input type="text" class="form-control" name="search" style="width:60%; margin-top:20px;"><br>
                <input type="submit" class="btn btn-outline-primary" value="search Now" style="margin-top:20px" name="search_button" >
            </center>
        </form>
        <?php
            if(isset($_GET['search']))
            {
                include "result.php";
            }
        ?>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>