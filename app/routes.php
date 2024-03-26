<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Controllers\HomeController;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', [HomeController::class, 'index']);


    $app->post('/transForm', function (Request $request, Response $response, $args) {

        $pdo        = $this->get('pdo');
        $formData   = $request->getParsedBody();

        $createdAt  = date('Y-m-d');
        $price      = 10;

        $sql        = "SELECT COUNT(*) FROM pass_records WHERE plaka = :plaka AND DATE(createdAt) = :createdAt";

        $statement = $pdo->prepare($sql);
        $statement->execute([
            'plaka'     => $formData['formPlaka'],
            'createdAt' => $createdAt,
        ]);

        $count = $statement->fetchColumn();

        if ($count < 1){
            $price = 10;
        }elseif ($count > 0 && $count < 2 ){
            $price = $price / 2;
        }else{
            $price = 0;
        }

        $statement = $pdo->prepare("INSERT INTO pass_records (transId, plaka, price, createdAt) VALUES (:transId, :plaka, :price, :createdAt)");

        $statement->execute([
            "transId"   => $count+1,
            "plaka"     => $formData['formPlaka'],
            "price"     => $price,
            "createdAt" => date("Y-m-d H:i:s")
        ]);

        $response = $response->withHeader('Content-Type', 'application/json');
        $response->getBody()->write(json_encode(['message' => 'Geçiş Başarılı']));

        $url            = '/';
        $redirectUrl    = $url . '?message=İşlem başarıyla tamamlandı';
        return $response->withHeader('Location', $redirectUrl)->withStatus(302);
    });

    $app->get('/transList', [HomeController::class, 'transList']);

};
