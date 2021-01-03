<?php

    class Product {
        private $conn;
        private $table = 'products';

        public $id;
        public $productName;
        public $price;
        public $category;
        public $seller;
        public $stockQty;
        public $imgURl;


        public function __construct($db) {
            $this->conn = $db;
        }

        public function sortedRead($sort) {
            if ($sort == 'max') {
                $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table . " p LEFT JOIN category as c on p.category_id = c.category_id ORDER BY p.price DESC";

                $stmt = $this->conn->prepare($query);

                $stmt->execute();

                return $stmt;
            } else {
                $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table . " p LEFT JOIN category as c on p.category_id = c.category_id ORDER BY p.price ASC";

                $stmt = $this->conn->prepare($query);

                $stmt->execute();

                return $stmt;
            }

        }

        public function read() {
            $query = $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url FROM " . $this->table . " p LEFT JOIN category c on p.category_id";

            $stmt = $this->conn->prepare($query);

            $stmt->execute();

            return $stmt;
        }

        public function readOne() {
            $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url FROM " . $this->table . " p LEFT JOIN category c on p.category_id WHERE p.product_id = ?";

            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(1, $this->id);

            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->id = $row['product_id'];
            $this->productName = $row['product_name'];
            $this->price = $row['price'];
            $this->category = $row['category'];
            $this->seller = $row['farmer_seller'];
            $this->stockQty = $row['stock_quantity'];
            $this->imgURl = $row['img_url'];

        }

        // public function sortedRead($sort) {
        //     if ($sort == 'max') {
        //         $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table . " p LEFT JOIN category as c on p.category_id = c.category_id ORDER BY p.price DESC";

        //         $stmt = $this->conn->prepare($query);

        //         $stmt->execute();

        //         return $stmt;
        //     } else {
        //         $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table . " p LEFT JOIN category as c on p.category_id = c.category_id ORDER BY p.price ASC";

        //         $stmt = $this->conn->prepare($query);

        //         $stmt->execute();

        //         return $stmt;
        //     }

        // }

        public function filterCategory($category) {
            $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table  . " p LEFT JOIN category as c on p.category_id = c.category_id WHERE c.category_name='" . $category . "' ORDER BY p.price DESC";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }

        public function search($value) {
            $query = "SELECT c.category_name as category, p.product_id, p.product_name, p.price, p.farmer_seller, p.stock_quantity, p.img_url, p.farmer_seller FROM " . $this->table  . " p LEFT JOIN category as c on p.category_id = c.category_id WHERE p.product_name LIKE '%" . $value . "%' ORDER BY p.price DESC";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;
        }
    }
