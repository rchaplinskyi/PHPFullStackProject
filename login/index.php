<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Вхід в адмін-панель</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="box">
                <form action="check-login.php" method="post">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Логін</label>
                        <input type="text" name="login" class="form-control" id="formGroupExampleInput" placeholder="Введіть логін">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="Введіть пароль">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Увійти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
