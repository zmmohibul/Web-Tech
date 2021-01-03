<?php
  // Headers
  include_once 'dbConfig.php';

  function productsEncode($result) {
    $database = new Database();
    $db = $database->connect();

    $productCount = $result->rowCount();

    if ($productCount > 0) {
        $productArr = array();
        $productArr['data'] = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);

            $farmer = new User($db);
            $farmer->id = $farmer_seller;
            $farmer->readOne();

            $productInfo = array(
                'id' => $product_id,
                'productName' => $product_name,
                'price' => $price,
                'category' => $category,
                'seller_info'=> array(
                    'sellerId' => $farmer_seller,
                    'sellerName' => $farmer->firstName . " " . $farmer->lastName,
                    'sellerEmail' => $farmer->userEmail,
                    'sellerPhone' => $farmer->phone,
                ),
                'stockQty' => $stock_quantity,
                'imgURl' => $img_url
            );

            array_push($productArr['data'], $productInfo);
        }

        return json_encode($productArr);
     }
    }

    $database = new Database();
    $db = $database->connect();

    $product = new Product($db);

  if (isset($_GET['id'])) {
      $product->id = $_GET['id'];
      $product->readOne();

      $productArr = array();
      $productArr['data'] = array();

      $productInfo = array(
        'id' => $product->id,
        'productName' => $product->productName,
        'price' => $product->price,
        'category' => $product->category,
        'seller' => $product->seller,
        'stockQty' => $product->stockQty,
        'imgURl' => $product->imgURl
      );

      array_push($productArr['data'], $productInfo);
      echo json_encode($productArr);
  } else if (isset($_GET['sort'])) {
    $result = $product->sortedRead(htmlspecialchars($_GET["sort"]));

    $encodedProduct = productsEncode($result);

    echo $encodedProduct;

  } else if (isset($_GET['category'])) {
    $result = $product->filterCategory(htmlspecialchars($_GET["category"]));

    $encodedProduct = productsEncode($result);

    echo $encodedProduct;

  } else if(isset($_GET['search'])) {
    $result = $product->search(htmlspecialchars($_GET["search"]));

    $encodedProduct = productsEncode($result);

    echo $encodedProduct;

  }  else {
    $result = $product->sortedRead('min');

    $encodedProduct = productsEncode($result);

    echo $encodedProduct;
  }
