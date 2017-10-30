<!doctype html>
<html>
<head>
    <title>future_test</title>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <div class="content">
        <div class="info">
            <div style="padding-top: 40px; font-size: 10px; font-weight: bold;">
                <p>Телефон: (999) 999-99-99</p>
                <p>Email: info@test</p>
            </div>
            <div style="margin-top: 80px;">
                <p style="font-size: 44px; margin: 0;">Комментарии</p>
            </div>
        </div>
        <div class="logo">
        </div>
    </div>
</div>
<div class="comments">
    <div class="content">

<?php
while ($row = $stmt->fetch()) {
//foreach ( $pdo->query($query) as $row ){
    $time = date('G:i d.m.Y', $row['time']);
    echo <<<END
<div class = "comment">
            <div class = "name">
                $row[name]
            </div>
            <div class = "date">
                $time
            </div>
            <div style = "clear: both"></div>
            <div class = "text">
                <p>$row[text]</p>
            </div>
        </div>
        
END;
        };
?>
<br>
<hr>
<div class="form">
    <form action="index.php" method="POST">
        <label>Ваше имя</label><br><br>
        <input type="text" size="26" name="first_name" required><br><br>
        <label>Ваш комментарий</label><br><br>
        <textarea cols="40" rows=10 name="comment" required></textarea>
        <br>
        <input type="text" name = "token" value = "<?php echo $token?>" hidden>
        <input type="submit" value="Отправить">
    </form>
</div>
<div style="clear:both"></div>
</div>
</div>
<div class="footer">
    <div class="content">
        footer
    </div>
</div>
</body>
</html>
