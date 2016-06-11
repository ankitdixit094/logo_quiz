<?php
    require 'db/fatch_full_logo.php';
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logo Quiz | Round 1</title>
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
                    <h2>Repid fire round<br><small>Round 1</small></h2>
                </center>
            </div>
            <div class="dilogbox-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="<?php echo $location; ?>" alt="..." class="img-thumbnail small-img">
                        </div>
                        <div class="col-md-7 alert alert-warning disc">
                            <h2 style="font-weight: 900;" ><?php echo $logoName; ?></h2>
                        </div>
                        <div class="col-md-7 alert alert-warning disc">
                            <h3 style="font-weight: 600;" >Logo Description</h3>
                            <p style="font-size: 17px !important; margin-top: 10px;"><?php echo $logoDescription; ?></p>
                        </div>
                    </div>
                    <br><br>
                    <?php
                    $ansByTeam = $_POST['ansByTeam'];
                    $_SESSION["ansByTeam"] = $ansByTeam;
                    ?>
                    <form method="post" action="db/db_round1_result_update.php" class="">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg pull-left" style="width: 40%;" name="submit" value="correct"><i class="fa fa-check-square-o fa-2x"></i></i></button>
                            <button type="submit" class="btn btn-danger btn-lg pull-right" style="width: 40%;" name="submit" value="wrong"><i class="fa fa-times fa-2x"></i></button>
                        </div>
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