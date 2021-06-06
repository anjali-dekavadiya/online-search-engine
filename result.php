<!DOCTYPE html>
<html>

<head>
    <title> Result Found </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .result {
            margin-left: 10%;
            margin-right: 25%;
            margin-top: 12px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <form action="result.php" method="get">
            <div class="row" style="background:#f2f2f2">
                <div class="col-sm-1">
                    <a href="search.php"><img src="img/search.jpg" height="60px"></a>
                </div>
                <div class="col-sm-6" style="margin-left:15px">
                    <div class="input-group" style="margin-top:10px">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-outline-secondary" name="search_button" value="Go!">
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="result">
        <table>
            <tr>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "search");

                if (isset($_GET['search_button'])) {
                    $search = $_GET['search'];
                    /*                            require "phpspellcheck/include.php";

$search = new SpellCheckButton();
$search->InstallationPath = "/phpspellcheck/";
$search->Fields = "ALL";
echo $search->SpellImageButton();


$search = new SpellAsYouType();
$search->InstallationPath = "/phpspellcheck/";
$search->Fields = "ALL";
echo $search->Activate();*/

                    if ($search == "") {
                        echo "<center><b>Please write something in search box!</b></center>";
                        exit();
                    }

                    $sql = "select * from website where site_des like '%$search%' or site_link like '%$search%' or site_title like '%$search%' or site_key like '%$search%' limit 0, 5";

                    $rs = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($rs) < 1) {
                        echo "<center><h4><b> Oops!!! Sorry,there is no result found to related the world.</b></h4></center>";
                        exit();
                    }

                    echo "<font size='+1' color='#lalaff'>Images for $search</font>";

                    while ($row = mysqli_fetch_array($rs, MYSQLI_NUM)) {
                        echo "<td>
                                        <table style='margin-top:10px'>
                                            <tr>
                                                <td>
                                                    <img src='img/$row[5]' height='100px'>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>";
                    }
                }
                ?>
            </tr>
        </table>


        <?php

        echo "<a href='images.php?id=$search'><font size='+1' color='#lalaff'>More images for $search</font></a>";

        echo "<hr>";

        $sql1 = "SELECT * FROM website WHERE site_des LIKE '%$search%' OR site_link LIKE '%$search%' OR site_key LIKE '%$search%' OR site_title LIKE '%$search%'";

        $rs1 = mysqli_query($conn, $sql1);

        while ($row1 = mysqli_fetch_array($rs1, MYSQLI_NUM)) {
            echo "<a href='$row1[2]'><font size='4' color='#0000cc'><b>$row1[1]</b></font></a><br>";
            echo "<font size='3' color='#006400'>$row1[2]</font><br>";
            echo "<font size='3' color='#666666'>$row1[4]</font><br><br>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>