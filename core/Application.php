<?php
namespace app\core;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Application
{
    /** @var string  */
    public static string $ROOT_DIR;
    /** @var Router  */
    public Router $router;
    /** @var Request  */
    public Request $request;
    /** @var Response  */
    public Response $response;
    /** @var Application  */
    public static Application $app;

    /**
     * @param $rootPath
     */
    public function __construct($rootPath)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }


    public function run()
    {
        echo $this->router->resolve();
    }
}