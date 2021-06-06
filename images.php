<!DOCTYPE html>
<html lang="en">

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

    <script>
        function f1(src) {
            document.getElementById('modalImg').src = 'img/' + src;
            $('#myModal').modal();
        }

        function downloadImage() {
            //get image file name
            var src = document.getElementById('modalImg').src.split("/");

            //download file
            var aTag = document.createElement('a');
            aTag.href = document.getElementById('modalImg').src;
            aTag.download = src[src.length - 1]
            aTag.click();
        }
    </script>
</head>

<body>
    <div class="container-fluid">
        <?php
        $search = $_GET['id'];

        $conn = mysqli_connect("localhost", "root", "", "search");

        $sql = "select * from website where site_des like '%$search%' or site_link like '%$search%' or site_title like '%$search%' or site_key like '%$search%'";

        $rs = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($rs, MYSQLI_NUM)) {
            echo "<img src='img/$row[5]' onclick=\"f1('$row[5]')\" height='200px' style='margin-top:15px'>&nbsp;&nbsp;&nbsp;&nbsp;";
        }

        ?>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button class="btn btn-info" onclick="downloadImage()">Download</button>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body" style="height:100%; width:100%">
                        <img id='modalImg' style="max-height:100%; max-width:100%"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>