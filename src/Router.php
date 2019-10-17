<?php
namespace Src;

require_once('src/Request.php');

class Router {
    
    /**
     * @var Request
     */
    private $request;

    /**
     * @var array
     */
    private $routes;

    public function __construct(Request $request) {
        $this->request = $request;
        $this->routes = array();
    }

    public function addRoute(string $type, string $url, string $controller, string $action) {
        $route = array( 'type' => $type, 'url' => $url, 'controller' => $controller, 'action' => $action );
        array_push( $this->routes, $route );
    }

    public function render() {
// ici vérifier que $type et $url match (pas derreur, ou qu'il y a bien du contenu)
        $content = ''; // ici rappatrier le controleur et sa vue

        return $content;
    }
}