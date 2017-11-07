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
            <div class="contacts">
                <p>Телефон: (999) 999-99-99</p>
                <p>Email: info@test</p>
            </div>
            <div class = "nameComment">
                <p>Простая система комментариев</p>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="content">
    <nav class = "clearfix">
        <ul class = "pages">
            <li>Страницы: </li>
        <?php for ($i = 0; $i < $countPages; $i++ ) {
            if ( $selectedPage !== $i )
                echo "<li><a href = '{$_SERVER['PHP_SELF']}?page={$i}'>" . ($i+1) . "</a></li>";
            else
                echo "<li>" . ($i+1) . "</li>";
        } ?>
        </ul>
    </nav>
<?php
foreach ($arrComments as $row ) {
    $time = date('G:i d.m.Y', $row['time']); ?>
<div class = "comment">
    <div class = "clearfix">
        <div class = "name">
            <?php echo $row['name'] ?>
        </div>
        <div class = "date">
            <?php echo $time ?>
        </div>
    </div>
    <div class = "text">
        <p><?php echo $row['text'] ?></p>
    </div>
</div>
<?php }; ?>
        <nav class = "clearfix">
            <ul class = "pages">
                <li>Страницы: </li>
                <?php for ($i = 0; $i < $countPages; $i++ ) {
                    if ( $selectedPage !== $i )
                        echo "<li><a href = '{$_SERVER['PHP_SELF']}?page={$i}'>" . ($i+1) . "</a></li>";
                    else
                        echo "<li>" . ($i+1) . "</li>";
                } ?>
            </ul>
        </nav>
<br>
<hr>
<div class="form">
    <form action='<?php echo $_SERVER['PHP_SELF']."?page=".($countPages-1) ?>' method="POST">
        <label>Ваше имя</label><br><br>
        <input type="text" size="26" name="first_name" required><br><br>
        <label>Ваш комментарий</label><br><br>
        <textarea cols="40" rows=10 name="comment" required></textarea>
        <br>
        <input type="text" name = "token" value = "<?php echo $token?>" hidden>
        <input type="submit" value="Отправить">
    </form>
</div>
</div>
</section>
<div class="footer">
    <div class="content">
        footer
    </div>
</div>
</body>
</html>
