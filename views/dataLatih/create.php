<!-- create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <br>
    <br>
    <div class="container">
        <form method="post" action="../Controllers/StoreController.php">
            <div class="form-group row">
                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Deskripsi</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" rows="8" cols="80"></textarea>
                    <select class="" name="">
                        <option value="opt">
                            Test
                        </option>
                        <option value="opt">
                            Testing
                        </option>
                        <option value="opt">
                            Tingting
                        </option>
                    </select>
                    <input type="radio" name="radioku" value="Radioku"> Radioku
                    <input type="radio" name="radiomu" value="Radiomu"> Radiomu
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>

</html>
