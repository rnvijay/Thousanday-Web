<?php
use Phalcon\Assets\Filters\Cssmin;
use byn9826\FakeSSR\FakeSSR;

class ExploreController extends ControllerBase {

  public function indexAction() {

    FakeSSR::detect(
      'https://smilings.me/explore',
      dirname(__dir__) . '/.ssr',
      false
    );

    $this->assets->collection('header')
      ->setTargetPath('../public/production/explore.css' )
      ->addCss('../public/css/globe.css')->addCss('../public/css/general.css')
      ->addCss('../public/css/explore.css')
      ->setTargetUri('/../production/explore.css')
      ->join(true)->addFilter(new Cssmin());
  }

  //* return moments based on filter
  public function readAction() {
    $this->response
      ->setHeader('Access-Control-Allow-Origin', '*')
      ->setHeader('Access-Control-Allow-Headers', 'X-Requested-With')  
      ->sendHeaders();
    $load = (int) $this->request->get('load');
    $type = (int) $this->request->get('type');
    $nature = (int) $this->request->get('nature');
    try {
      if ($load === 0) {
        $redis = new Predis\Client();
        $key = "data-explore-" . $type . "-" . $nature;
        if ($redis->exists($key)) {
          return $redis->get($key);
        }
      }
      $db = DbConnection::getConnection();
      $Pet = new Pet($db);
      $pets = $Pet->readFilterPets($type, $nature);
      if (count($pets) !== 0) {
        $merge = array_merge(...$pets);
        $Moment = new Moment($db);
        $result = $Moment->readPetsList($merge, $load);
        $result = json_encode($result);
      } else {
        $result = json_encode([]);
      }
      if ($load === 0) {
        $redis->set($key, $result);
      }
      return $result;
    } catch (Exception $e) {
      return $this->response->setStatusCode(500, 'Internal Server Error');
    }
  }

}