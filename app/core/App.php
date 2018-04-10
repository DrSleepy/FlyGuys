<?php
// Creates URL & Loads appropriate controller
// URL FORMAT - /controller/method/params

class App {
  // defaults
  private $controller = "Home";
  private $method = "index";
  private $params = [];

  public function __construct() {
    $url = $this->parseUrl(); // returns sanitized url
    $url = $this->controllerHandler($url); // sets and returns url excluding controller
    $url = $this->methodHandler($url); // sets and returns url parameters only
    $this->paramsHandler($url); // sets this.params to params passed

    //pass parameters to method within appropriate controller
    call_user_func_array([$this->controller, $this->method], $this->params);
  }

  public function parseUrl() {
    $urlIsSet = isset($_GET['url']);
    if (!$urlIsSet) {
      return;
    };

    $url = $_GET['url'];
    $trim = rtrim($url, '/'); // remove end '/' on url
    $sanitizeUrl = filter_var($trim, FILTER_SANITIZE_URL); // sanitize url
    $splitUrl = explode('/', $sanitizeUrl); // split url on '/' and make into associative array

    return $splitUrl;
  }

  public function controllerHandler($url) {
    $newUrl = $url;
    $passedController = ucwords($url[0]);
    $controllerUrl = APP_ROOT . "/controllers/$passedController.php";

    if (file_exists($controllerUrl)) {
      $this->controller = $passedController;
      unset($newUrl[0]); //remove passed controller from new url
    }

    require_once APP_ROOT . "/controllers/$this->controller.php";
    $this->controller = new $this->controller; // instantiating controller (so its methods are useable)

    return $newUrl; // returns url excluding controller (contains only method and parameters)
  }

  public function methodHandler($url) {
    $methodIsSet = isset($url[1]);
    if (!$methodIsSet) {
      return;
    }

    $newUrl = $url;
    $passedMethod = $url[1];
    $passedMethodExists = method_exists($this->controller, $passedMethod);

    if ($passedMethodExists) {
      $this->method = $passedMethod;
      unset($newUrl[1]); //remove passed method from new url
    }

    return $newUrl; // returns only parameters from url
  }

  public function paramsHandler($url) {
    $this->params = !empty($url) ? array_values($url) : [];
  }
}

?>
 