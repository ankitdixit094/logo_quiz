<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
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
        <form action="db/db_team.php" method="post">
            <?php
            $num_of_team = $_POST['num_of_team'];
            $num_of_members = $_POST['num_of_members'];
            ?>
            <input type="hidden" name="num_of_members" value="<?php echo $num_of_members?>">
            <input type="hidden" name="num_of_team" value="<?php echo $num_of_team?>">
            <div class="container-fluid" >
                <div class="row">
                <?php for ($i=1; $i <= $num_of_team; $i++):?>
                    <div class="col-md-3" style="background-color:#f8f8f8; border: 5px solid #f1f1f1; margin: 50px;">
                        <h1>Time<?php echo $i; ?></h1>
                            <div class="form-group">
                                <label for="nameOfTeam<?php echo $i;?>">Name of team</label>
                                <input type="text" class="form-control" id="nameOfTeam<?php echo $i;?>" placeholder="Name of team" name="name_of_team<?php echo $i;?>">
                            </div>
                        <?php for ($j=1; $j <= $num_of_members; $j++):?>
                            <div class="form-group">
                              <label for="nameOfMember<?php echo $j;?>">Name of Member</label>
                              <input type="text" class="form-control" id="nameOfMember<?php echo $j;?>" placeholder="Name of member<?php echo $j;?>" name="name_of_member<?php echo $i.$j;?>">
                            </div>
                        <?php endfor;?>
                    </div>
                <?php endfor;?>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary btn-lg">Submit Team Info.</button>
                </center><br><br>
            </div>
        <form>
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
        <!--<script src='js/respond.js'></script>-->
        <script src='../js/main.js'></script>
        <!-- CDN - minified jQuery v1.11.1 -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <!-- CDN - Latest compiled and minified JavaScript (bootstrap) -->
        <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
        <script>
        $(document).ready(function(){
            var availh = screen.availHeight;
            var bodyh = $("body").outerHeight(true);
            if (availh > bodyh) {
                $("#footer").addClass("page-footer-fixed");
            }
        });
        </script>
    </body>
</html>
