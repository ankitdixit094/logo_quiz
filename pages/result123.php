<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Logo Quiz | Result</title>
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
        <div class="container">
            <?php
                $servername = "localhost";
                $username = "";
                $password = "";
                $dbname = "logo_quiz";
                $conn = new mysqli($servername, $username, $password, $dbname);
            ?>
            <?php for($i=1; $i<=3; $i++): ?>
                <center>
                    <h2>Result of Round <?php echo $i;?></h2>
                </center>
                <table class="table table-bordered table-hover">
                    <tr>
                        <th class="">Team name</th>
                        <th class="">Team Member's</th>
                        <th class="">Correct</th>
                        <th class="">Wrong</th>
                        <th class="">status</th>
                    </tr>
                    <tr>
                        <?php
                            $sql = "SELECT r.team_id, r.team_name, r.correct, r.wrong, r.status, r.active, t.member FROM round".$i."_result r LEFT JOIN team t ON r.team_id = t.team_id ORDER BY status DESC, wrong ASC";
                            $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()):?>
                                        <?php $rcolor = $row['active']; ?>
                                        <tr class="row<?php echo $rcolor;?>" >
                                            <th class=""><?php echo $row["team_name"];?></th>
                                            <th class=""><?php echo $row["member"];?></th>
                                            <td class=""><?php echo $row["correct"];?></td>
                                            <td class=""><?php echo $row["wrong"];?></td>
                                            <td class=""><?php echo $row["status"];?></td>
                                        </tr>
                                    <?php endwhile;
                                }else{
                                    echo "error: in faching data";
                                }
                        ?>
                </table>
                <br>
            <?php endfor;?>
            <div class="row">
                <button type="button" class="btn btn-primary btn-lg col-md-4 col-md-offset-1 " onclick="printpage()">Print Result</button>
                <!--<a href="../index.php"><button type="button" class="btn btn-primary btn-lg col-md-4 col-md-offset-1 ">Start new test</button></a>-->
                <form action="../index.php">
                    <input type="submit" class="btn btn-primary btn-lg col-md-4 col-md-offset-1 " value="Start new test">
                </form>
            </div>
            <br><br>
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
                $(".row0").addClass("danger");
                $(".row1").addClass("success");
            });

            function printpage() {
                window.print();
            }
        </script>

    </body>
</html>
