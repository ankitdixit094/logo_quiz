<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logo Quiz</title>
        <!--tab icon-->
        <!--<link rel='icon' href='' type='image/x-icon'/>-->
        <!--css files-->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <!-- CDN - Latest compiled and minified CSS (bootstrap) -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    </head>
    <body>
        <div class="container-fluid">
        <div class="alert alert-info container dilogbox" style="width: 60%;">
            <div class="dilogbox-header">
                <center>
                    <h2>LOGO UPLOAD</h2>
                </center>
            </div>
            <div class="dilogbox-body">
                <div class="container-fluid">
                    <form action="db/db_upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-inline">
                            <div class="form-group" style="width: 49%;">
                                <label for="fullLogo">Full logo input</label>
                                <input class="btn btn-default" type="file" id="fullLogo" name="fullLogo">
                                <p class="help-block">Enter the Full logo location</p>
                            </div>
                            <div class="form-group" style="width: 49%;">
                                <label for="smallLogo">Small logo input</label>
                                <input class="btn btn-default" type="file" id="smallLogo" name="smallLogo">
                                <p class="help-block">Enter the Small logo location</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="logoName">Logo Name</label>
                            <input type="text" class="form-control" id="logoName" name="logoName" placeholder="Enter Logo Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Logo verified for</label><br>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="round1" name="round1" value="1"> Round1
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="round2" name="round2" value="2"> Round2
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="round3" name="round3" value="3"> Round3
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="logoDescription">Logo Description</label>
                            <textarea class="form-control" id="logoDescription" name="logoDescription" placeholder="Enter Logo Description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="logoQuestion">Logo Question</label>
                            <textarea class="form-control" id="logoQuestion" name="logoQuestion" placeholder="Enter Logo Question" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" name="submit" value="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>

        <div class="container-fluid page-footer" id="footer">
            <center>
                <h3>Created & Designed by:  Dixit</h3>
            </center>
        </div>
        <!--javascript files-->
        <script src='../js/jquery-2.1.1.min.js'></script>
        <!--<script src='js/jquery-ui.min.js'></script>-->
        <!--<script src='js/jquery.velocity.min.js'></script>-->
        <script src='../js/bootstrap.min.js'></script>
        <script src='../js/respond.js'></script>
        <script src='../js/main.js'></script>
        <!-- CDN - minified jQuery v1.11.1 -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <!-- CDN - Latest compiled and minified JavaScript (bootstrap) -->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->

        <script>
            $(document).ready(function(){
                $(".round").click(function(){
                    $(".jumbotron").slideUp("slow",function(){
                        $(".jumbotron").hide();
                    });
                });
            });

            $(document).ready(function(){
                $(".setup").click(function(){
                    $(".jumbotron").slideDown("slow",function(){
                        $(".jumbotron").show();
                    });
                });
            });

            $(document).ready(function(){
                var availh = screen.availHeight;
                var bodyh = $("body").outerHeight(true);
                if (availh > bodyh) {
                    $("#footer").addClass("page-footer-fixed");
                }
            });

            $(document).ready(function(){
                $("#fullLogo").change(function(){
                    var filename = document.getElementById("fullLogo").value;
                    //alert(filename);
                });
            });
        </script>
    </body>
</html>
