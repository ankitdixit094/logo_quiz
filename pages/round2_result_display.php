<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logo Quiz | Round 2</title>
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
        <div class="jumbotron" style="padding: 20px;">
            <div class="container">
            <center>
                <h1>Result of Round 2</h1>
            </center>
            </div>
        </div>

        <div class="container">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="">Team name</th>
                    <th class="">Team Member's</th>
                    <th class="">Correct</th>
                    <th class="">Wrong</th>
                    <th class="">status</th>
                    <th class="">active</th>
                </tr>
                <tr>
                    <?php
                        $servername = "localhost";
                        $username = "";
                        $password = "";
                        $dbname = "logo_quiz";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM round2_result r LEFT JOIN team t ON r.team_id = t.team_id ORDER BY status DESC, wrong ASC";
                        $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()):?>
                                    <?php $ui = $row['team_id']; ?>
                                    <tr class="row<?php echo $ui;?>" >
                                        <th class=""><?php echo $row["team_name"];?></th>
                                        <th class=""><?php echo $row["member"];?></th>
                                        <td class=""><?php echo $row["correct"];?></td>
                                        <td class=""><?php echo $row["wrong"];?></td>
                                        <td class=""><?php echo $row["status"];?></td>
                                        <td class="">
                                            <button type="button" class="btn btn-success" value="<?php echo $row["team_id"];?>">Qualify</button>
                                            <button type="button" class="btn btn-danger" value="<?php echo $row["team_id"];?>">Disqualify</button>
                                        </td>
                                    </tr>
                                <?php endwhile;
                            }else{
                                echo "error: in faching data";
                            }
                    ?>
            </table>
            <a href="round3_resultANDteam_result_dumy.php" ><button type="button" class="btn btn-primary btn-lg btn-block">Start Round 3</button></a>
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
            //?ID='+ID+',button=success
            $(document).ready(function(){
                $(".btn-success").click(function(){
                    var ID = $(this).val();
                    $.ajax({
                        url:'db/db_round2_result_display.php',
                        type: "GET",
                        data: {"ID": ID, "Button": "qualify"},
                        success: function(){
                            $('.row'+ID).addClass("success");
                            $('.row'+ID).removeClass("danger");
                        },
                        error: function(){
                        },
                    });
                });

                $(".btn-danger").click(function(){
                    var ID = $(this).val();
                    $.ajax({
                        url:'db/db_round2_result_display.php',
                        type: "GET",
                        data: {"ID": ID, "Button": "disqualify"},
                        success: function(){
                            $('.row'+ID).addClass("danger");
                            $('.row'+ID).removeClass("success");
                        },
                        error: function(){
                        },
                    });
                });
            });

        </script>

    </body>
</html>
