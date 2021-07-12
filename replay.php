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

        <div class="header_replay" style="margin-top: 20px;"> Replay </div>
        <?php
        $size = $_SESSION['size']; ?>

        <br>
        <br>
        <?php
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) { ?>
                <input type="button" class="btn2" id="xx<?php echo $i . $j ?>" value=" ">
        <?php
            }
            echo "<br>";
        }
        echo "<br>";
        echo "Step" . "<br>" ?>
        <h5 style="color: red;">** กรุณาเริ่มกดที่ 1 จนถึง ลำดับสุดท้าย ** </h5>
        <?php
        $sql = "SELECT * FROM history  ";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $Step = $row['Step'];
            $i = $row['Position'];
            $j = $row['Position2'];
            $Player = $row['Player'];

        ?>
            <input type="button" style="width: 40px;" id="OO<?php echo $i . $j ?>" value="<?php echo $Step ?>" onclick="replay2(<?php echo $i ?>,<?php echo $j ?>,'<?php echo $Player ?>')">


        <?php
            if ($Step == 10 || $Step == 20  || $Step == 30 || $Step == 40 || $Step == 50) {
                echo "<br>";
                echo "<br>";
            }
        }
        ?>
        <br>
        <br>
        <a href="./game.php">กลับไปหน้าเเรก</a>
    </center>
</body>

</html>