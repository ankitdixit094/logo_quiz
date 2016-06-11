<?php
    require 'db/fatch_small_logo_round3.php';
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logo Quiz | Round 3</title>
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
        <div class="alert alert-info container dilogbox" style="width: 90%;">
            <div class="dilogbox-header">
                <center>
                    <h2>Question round<br><small>Round 3</small></h2>
                </center>
            </div>
            <div class="dilogbox-body">
                <div class="container-fluid">
                    <div class="" style="font-size: 25px; font-weight: 900; display: block;">
                        <?php echo "<i class='fa fa-question-circle' style='font-size: 30px; font-weight: 900;' ></i> ".$quesNo." of ".$lastNo." asked to Team ".$team_name;?>
                    </div>
                    <div class="clearfix">
                        <div class="col-md-7 alert alert-warning disc center-block">
                            <h3 style="font-weight: 600;" >Question</h3>
                            <p style="font-size: 17px !important; margin-top: 10px;" ><?php echo $_SESSION["logoQuestion"]; ?></p>
                        </div>
                    </div>
                    <br>
                    <br>
                    <form method="post" action="round3second.php" class="form-inline">
                        <input type="hidden" value="<?php echo $team_id;?>" name="ansByTeam" />
                        <div class="row">
                        <?php foreach($logoNameArray as $name):?>
                            <button type="submit" class="btn btn-primary btn-lg col-md-4" style="width: 40%; margin: 10px; margin-left: 50px; margin-right: 50px;" value="<?php echo $name;?>" name="submit" ><?php echo $name;?></button>
                        <?php endforeach; ?>
                    </form>
                </div>
            </div>
        </div>
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
                $(".round-button").click(function(){
                    //var id = $(this).attr('id');
                    //alert("id is:="+id);
                    //$("#form").html('<input type="hidden" id="ansByTeam" value="'+ $(this).attr('id') +'" name="ansByTeam"/>');
                    //$("$ansByTeam").attr('value',id);
                    //document.getElementById("ansByTeam").value = id;
                });
            });
        </script>
        
    </body>
</html>