<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otoyol Geçiş Listesi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.1/css/buttons.dataTables.css" />
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
            <div class="row">
                <div class="col-md-6 float-left">
                    <h2 class="">Otoyol Geçiş Listesi</h2>
                </div>
                <div class="col-md-6 text-end">
                    <a href="/" class="btn btn-primary float-right">Geçiş Ekranı</a>
                </div>
            </div>

            <table id="example" class="display border" style="width:100%">
                <thead>
                <tr>
                    <th class="text-center">#ID</th>
                    <th class="text-center">GEÇİŞ SAYISI</th>
                    <th class="text-center">PLAKA</th>
                    <th class="text-center">TUTAR</th>
                    <th class="text-center">TARİH</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($records as $record){ ?>
                    <tr>
                        <td class="text-center"><?php echo $record->id; ?></td>
                        <td class="text-center"><?php echo $record->transId; ?></td>
                        <td class="text-center"><?php echo $record->plaka; ?></td>
                        <td class="text-center"><?php echo $record->price; ?> TL</td>
                        <td class="text-center"><?php echo $record->createdAt; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                    <th class="text-center">#ID</th>
                    <th class="text-center">GEÇİŞ SAYISI</th>
                    <th class="text-center">PLAKA</th>
                    <th class="text-center">TUTAR</th>
                    <th class="text-center">TARİH</th>
                </tr>
                </tfoot>
            </table>
        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script>
    $(document).ready( function () {
        $('#example').DataTable({
            layout: {
                topStart: {
                    buttons: ['csv']
                }
            }
        });
    } );
</script>
</body>
</html>
