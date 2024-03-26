<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otoyol Geçiş Sistemi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .center-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row center-form">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Otoyol Geçiş Sistemi</h2>
            <form action="/transForm" method="post" name="transForm">
                <div class="form-group">
                    <label for="formPlaka">Plakanız</label>
                    <input type="text" class="form-control"
                           id="formPlaka"
                           name="formPlaka"
                           minlength="8"
                           maxlength="8"
                           placeholder="Plakanızı boşluk bırakmadan giriniz..."
                     required>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-block">Geçiş Yap</button>
                    </div>
                    <div class="col-md-6">
                        <a href="/transList" class="btn btn-success btn-block">Geçiş Listesi</a>
                    </div>
                </div>

            </form>
            <?php if (!empty($message)): ?>
                <div class="alert alert-success text-center mt-3">
                    <?= $message ?>
                </div>
            <?php endif; ?>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
