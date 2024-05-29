<!doctype html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Додати нову новину</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Додавання нової новини</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="check-new.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Вкажіть назву новини</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Вкажіть текст новини</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>
                <div class="form-group">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input name="image" class="form-control" type="file" id="formFile">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Вкажіть дату публікації статті</label>
                    <input name="datetime" type="date" class="form-control" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary">Створити новину</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>