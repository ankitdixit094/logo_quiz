<?php
    require 'db/fatch_small_logo.php';
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
                    <div class="pull-lef" style="font-size: 25px; font-weight: 900; display: block;">
                        <?php echo "<i class='fa fa-question-circle' style='font-size: 30px; font-weight: 900;' ></i> ".$quesNo." of ".$lastNo;?>
                    </div>
                    <div class="clearfix">
                        <img src="<?php echo $_SESSION["logoLocation"]; ?>" alt="..." class="img-thumbnail center-block small-img">
                    </div>
                    <br><br>
                    <form method="post" action="round1second.php" class="form-inline">
                        <div class="form-group">
                            <label for="teamList">Select team</label>
                            <select class="form-control input-lg" id="teamList" style="width: 200px;" name="ansByTeam">
                                <?php
                                    if ($result2->num_rows > 0) {
                                        while($row2 = $result2->fetch_assoc()):
                                            $teamId = $row2["team_id"];
                                            $teamName = $row2["team_name"];?>
                                                <option value="<?php echo $teamId;?>" ><?php echo $teamName;?></option>   
                                        <?php endwhile;
                                    }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Answer</button>
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