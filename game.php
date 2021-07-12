<html lang="en">
<?php session_start();
include './server.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <script src="./javascript.js"></script>
</head>

<body>
    <center>
        <div id="play">
            <form action="game.php" method="POST">
                <div class="input">
                    ระบุขนาดบอร์ดเกมส์:
                    <input type="number" id="" name="size" value="">
                    <button class="btn" name="ok" type="submit">ตกลง</button>
                </div>
            </form>
            <?php
            $sql = "DELETE FROM `history`";
            mysqli_query($conn, $sql);
            if (isset($_POST['ok'])) {
                $size = $_POST['size'];
                $_SESSION['size'] =  $size;
            ?>
                <script>
                    check(<?php $size ?>)
                </script>
                <span>
                    <h5 style=" color:blue"> PLAYER : 1 [X]</h5>
                    <div id="X" style=" color:blue; font-size:20px;">^</div>
                </span><span>
                    <h5 style="color:red;">PLAYER : 2 [O]</h5>
                    <div id="O" style="display: none; color:red; font-size:20px;">^</div>
                </span>

                <?php
                for ($i = 0; $i < $size; $i++) {
                    for ($j = 0; $j < $size; $j++) { ?>
                        <input type="button" class="btn2" id="xo<?php echo $i . $j ?>" onclick="x(<?php echo $i ?>,<?php echo $j ?>,<?php echo $size ?>)" value=" ">
            <?php     }
                    echo "<br>";
                }
            } ?>

            <br>
            <button type="submit" onclick="replay()" id="replay">จบเกมส์</button>
            <br>
        </div>

    </center>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>