<?php
    include ('connect.php');
?>

<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="right">
            <h2>Recent Updates</h2>
            <?php
                $sql_query="SELECT * FROM updates GROUP BY update_date DESC";
                $result_set=mysqli_query($con,$sql_query);
                if(mysqli_num_rows($result_set)>0)
                {
                    while($row=mysqli_fetch_row($result_set))
                    {
                        ?>
                            <div style="position:relative; width:90%; margin:auto; margin-bottom:10px;">
                                <p style="text-align:center; font-size:18px"><?php echo $row[1];?></p>
                                <p style="text-align:center; font-size:10px; position:relative; width:100%; bottom:15px;"><?php echo $row[2];?></p>
                            </div>
                        <?php
                    }
                }
                else
                {
                    ?>
                        No updates yet!
                    <?php
                }
            ?>
        </div>
    </body>
</html>