<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/[{name}]', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

    $app->get("/product/", function (Request $request, Response $response){
        $sql = "SELECT * FROM product";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $response->withJson(["status" => "success", "data" => $result], 200);
    });

    $app->post("/product/", function (Request $request, Response $response){

        $product = $request->getParsedBody();

        $sql = "INSERT INTO product (name, products_recommendation_id) VALUE (:name, :product_recommendation_id)";

        $samsung = "samsung";
        $kit ="kit";
        $apple = "apple";
        $spigen= "spigen";


        $recommendation= "SELECT * FROM product_recommendation   WHERE name = 'Spigen iPhone 7 Case Slim Armor Series'";
        $stmt1 = $this->db->prepare($recommendation);
//        $stmt1->bindParam(":name", $product['name']);
        $stmt1->execute();
        $result = $stmt1->fetchAll();

        $stmt = $this->db->prepare($sql);

        $data = [
            ":name" => $product["name"],
            ":product_recommendation_id" => $product["product_recommendation_id"],
        ];

        if($stmt->execute($data))
            return $response->withJson(["status" => "success", "data" => $result], 200);

        return $response->withJson(["status" => "failed", "data" => "try again"], 200);
    });
};
