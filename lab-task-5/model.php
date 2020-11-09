<?php
    require_once 'db_connect.php';
    
    function showAllProducts(){
        $conn = db_conn();
        $selectQuery = 'SELECT * FROM `product` ';
        try{
            $stmt = $conn->query($selectQuery);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }


    function addProduct($data){
        $conn = db_conn();
        $selectQuery = "INSERT into product (name, buying_price, selling_price)
    VALUES (:name, :buying_price, :selling_price)";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                ':name' => $data['name'],
                ':buying_price' => $data['buying_price'],
                ':selling_price' => $data['selling_price']
                // ':password' => $data['password'],
                // ':image' => $data['image']
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }

    function showProduct($id){
        $conn = db_conn();
        $selectQuery = "SELECT * FROM `product` where ID = ?";
    
        try {
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        return $row;
    }

    function updateProduct($id, $data){
        $conn = db_conn();
        $selectQuery = "UPDATE product set name = ?, buying_price = ?, selling_price = ? where id = ?";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                $data['name'], $data['buying_price'], $data['selling_price'], $id
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }


    function deleteProduct($id){
        $conn = db_conn();
        $selectQuery = "DELETE FROM `product` WHERE `id` = ?";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        $conn = null;
    
        return true;
    }

 ?>
