<?php

class ProductController {

    protected $db;

    public function __construct(DatabaseController $db)
    {
        $this->db = $db;
    }

    public function create_product(array $product) 
    {
        
        $sql = "INSERT INTO products(Product_name, Description, Category, Quantity, Price, Image)
        VALUES (:Product_name, :Description, :Category, :Quantity, :Price, :image);";
        $this->db->runSQL($sql, $product);
        return $this->db->lastInsertId();
    }

    public function get_product_by_id(int $id)
    {
        $sql = "SELECT * FROM products WHERE id = :Product_id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->fetch();
    }

    public function get_all_products()
    {
        $sql = "SELECT * FROM products";
        return $this->db->runSQL($sql)->fetchAll();
    }

    public function update_product(array $product)
    {
        $sql = "UPDATE products SET name = :Product_name, description = :Description, category = :Category, quantity = :Quantity,  price = :Price, image = :Image WHERE id = :Product_id";
        return $this->db->runSQL($sql, $product)->execute();
    }

    public function delete_product(int $id)
    {
        $sql = "DELETE FROM products WHERE id = :Product_id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->execute();
    }

}

?>