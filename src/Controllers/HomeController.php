<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

use App\Application\Actions\Records\ListRecords;
use App\Domain\Records\RecordsRepository;

class HomeController
{
    protected $recordsRepository;
    protected $renderer;


    public function __construct(RecordsRepository $recordsRepository)
    {
        $this->recordsRepository = $recordsRepository;
    }

    public function index(Request $request, Response $response, $args)
    {
        $message = $request->getQueryParams()['message'] ?? '';

        ob_start();
        include __DIR__ . '/../views/pages/home/index.php';
        $content = ob_get_clean();

        $response->getBody()->write($content);

        return $response;

    }

    public function transList(Request $request, Response $response, $args)
    {
        $records = $this->recordsRepository->findAll();

        ob_start();
        include __DIR__ . '/../views/pages/home/list.php';
        $content = ob_get_clean();

        $response->getBody()->write($content);
        return $response;

    }
}