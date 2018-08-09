<?php
use Slim\Http\Request;
use Slim\Http\Response;

class MembersController {
  protected $container;

  public function __construct (ContainerInterface $container) {
    $this->container = $container;
  }

  /**
  * Get a listing of the resource.
  *
  * @param Slim\Http\Request $request
  * @param Slim\Http\Response $response
  * @param array $args
  *
  * @return Slim\Http\Response
  */
  public function index (Request $request, Response $response, array $args) {
  
  }

  /**
  * Get a specific member
  *
  * @param Slim\Http\Response $response
  * @param Slim\Http\Response $response
  * @param array $args
  *
  * @return Slim\Http\Response
  */
  public function getMember(Request $request, Response $response, array $args) {
    // split into getting full info vs getting essential info
  }

  /**
  * Store the specified resource in storage
  *
  * @param Slim\Http\Request $request
  * @param Slim\Http\Response $response
  * @param array $args
  *
  * @return Slim\Http\Response
  */
  public function store (Request $request, Response $response, array $args) {

  }

  /**
  * Update specified resource in storage
  *
  * @param Slim\Http\Request $request
  * @param Slim\Http\Response $response
  * @param array $args
  *
  * @return Slim\Http\Response
  */
  public function update (Request $request, Response $response, array $args) {

  }

  /**
  * Remove specified resource from storage.
  *
  * @param Slim\Http\Request $request
  * @param Slim\Http\Response $response
  * @param array $args
  *
  * @return Slim\Http\Response
  */
  public function destroy (Request $request, Response $response, array $args) {

  }
}
