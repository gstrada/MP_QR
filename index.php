<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>MP_QR</title>
</head>
<body style="height: 100vh !important;">
<div class="container-fluid"
     style="background-color: dimgray; min-height: 10% !important; text-align: center; color: white">
    <h1>Prueba pagos MP con código QR</h1>
</div>
<div class="container" style="margin-top: 2%">
    <div class="row">
        <div class="container">
            <div class="row d-flex justify-content-center"">
                <form action="cobrar.php" method="post">
                    <div>
                        <select name="cuenta" id="cuenta" class="form-control">
                            <option value="">Seleccionar cuenta a cobrar...</option>
                            <option value="150">Cliente 1 - $ 150</option>
                            <option value="500">Cliente 2 - $ 500</option>
                            <option value="1500">Cliente 3 - $ 1500</option>
                        </select>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">CREAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>