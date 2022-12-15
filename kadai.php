
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kadai.css">
    <title>Document</title>
</head>
<body>


<form action="kadai_create.php" method="POST" enctype="multipart/form-data">
    <h2>好みの靴下</h2>
    <div class="size">日付
    <input type="date" name="date">
    </div>
    <div class="size">名前
        <input type="text" name="namae">
    </div>
    <div class="size">メールアドレス
        <input type="text" name="email">
    </div>
    <div class="size">好きな靴下の色
    <input type="text" name="socks">
</div>
<div class="size">
    <input type="color" name="color">
    </div>
<div class="size">好きな靴下の画像
        <input type="file" name="upimg" accept="image/*">
</div>

    <button>登録</button>
</form>

    <script>
    
    
    </script>
</body>
</html>