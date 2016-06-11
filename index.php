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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- CDN - Latest compiled and minified CSS (bootstrap) -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
    </head>
    <body>
        <div class="jumbotron">
            <div class="container">
            <center>
                <h1>Logo Quiz</h1>
                <p>BSAITM Fest 2015</p>
            </center>
            </div>
        </div>
        <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active setup"><a href="#teamSetUp" aria-controls="teamSetUp" role="tab" data-toggle="tab">Team setup</a></li>
                <li role="presentation" class="round"><a href="#round1" aria-controls="round1" role="tab" data-toggle="tab">Round 1</a></li>
                <li role="presentation" class="round"><a href="#round2" aria-controls="round2" role="tab" data-toggle="tab">Round 2</a></li>
                <li role="presentation" class="round"><a href="#round3" aria-controls="round3" role="tab" data-toggle="tab">Round 3</a></li>
            </ul>
            <br>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="teamSetUp">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 well well-lg">
                                <form action="pages/teamandmember.php" method="post">
                                    <div id="">
                                        <div class="form-group">
                                            <label for="numOfTeam">No. of teams</label>
                                            <input type="number" class="form-control" id="numOfTeam" placeholder="No of team" name="num_of_team" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label for="numOfMember">No. of Members</label>
                                            <input type="number" class="form-control" id="numOfMember" placeholder="No. of Members" name="num_of_members" required="required">
                                        </div>
                                        <button type="submit" class="btn btn-default">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="round1">
                    <div class="container">
                        <div class="well well-lg">
                            <center>
                                <a href="pages/round1.php"><button type="button" class="btn btn-primary btn-lg">Start Round 1</button></a>
                            </center>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="round2">
                    <div class="container">
                        <div class="well well-lg">
                            <center>
                                <a href="pages/round2.php"><button type="button" class="btn btn-primary btn-lg">Start Round 2</button></a>
                            </center>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="round3">
                    <div class="container">
                        <div class="well well-lg">
                            <center>
                                <a href="pages/round3.php"><button type="button" class="btn btn-primary btn-lg">Start Round 3</button></a>
                            </center>
                        </div>
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
        <script src='js/jquery-2.1.1.min.js'></script>
        <!--<script src='js/jquery-ui.min.js'></script>-->
        <!--<script src='js/jquery.velocity.min.js'></script>-->
        <script src='js/bootstrap.min.js'></script>
        <script src='js/respond.js'></script>
        <script src='js/main.js'></script>
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

            //$(document).ready(function(){
            //    var tabActive = <?php echo $_REQUEST['tabActive']?>;
            //    if(tabActive == '1'){
            //        alert("1");
            //        $("#round3").removeClass("active");
            //        $("#round1").removeClass("active");
            //        $("#round2").removeClass("active");
            //        $("#teamSetUp").addClass("active");
            //    }
            //    if(tabActive == '2'){
            //        alert("2");
            //        $("#teamSetUp").removeClass("active");
            //        $("#round3").removeClass("active");
            //        $("#round2").removeClass("active");
            //        $("#round1").AddClass("active");
            //    }
            //    if(tabActive == '3'){
            //        alert("3");
            //        $("#teamSetUp").removeClass("active");
            //        $("#round1").removeClass("active");
            //        $("#round3").removeClass("active");
            //        $("#round2").AddClass("active");
            //    }
            //    if(tabActive == '4'){
            //        alert("4");
            //        $("#teamSetUp").removeClass("active");
            //        $("#round1").removeClass("active");
            //        $("#round2").removeClass("active");
            //        $("#round3").AddClass("active");
            //    }
            //});
        </script>
    </body>
</html>
