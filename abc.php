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
                <li role="presentation" class="active"><a href="#teamSetUp" aria-controls="teamSetUp" role="tab" data-toggle="tab">Team setup</a></li>
                <li role="presentation"><a href="#round1" aria-controls="round1" role="tab" data-toggle="tab">Round 1</a></li>
                <li role="presentation"><a href="#round2" aria-controls="round2" role="tab" data-toggle="tab">Round 2</a></li>
                <li role="presentation"><a href="#round3" aria-controls="round3" role="tab" data-toggle="tab">Round 3</a></li>
            </ul>
          
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="teamSetUp">
                    <br>
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
                <div role="tabpanel" class="tab-pane fade" id="round1">..dsf.</div>
                <div role="tabpanel" class="tab-pane fade" id="round2">..oi.</div>
                <div role="tabpanel" class="tab-pane fade" id="round3">..bvn.</div>
            </div>
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
    </body>
</html>