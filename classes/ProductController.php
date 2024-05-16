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
        VALUES (:Product_name, :Description, :Category, :Quantity, :Price, :Image);";
        $this->db->runSQL($sql, $product);
        return $this->db->lastInsertId();
    }
    //Wehn a row is needed, it will get slected by its id

    public function get_product_by_id(int $id)
    {
        $sql = "SELECT * FROM products WHERE Product_id = :id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->fetch();
    }
    //Gets all the data from the DB

    public function get_all_products()
    {
        $sql = "SELECT * FROM products";
        return $this->db->runSQL($sql)->fetchAll();
    }
    //updates all the data from the DB

    public function update_product(array $product)
    {
        $sql = "UPDATE products SET Product_name = :Product_name, Description = :Description, Category = :Category, Quantity = :Quantity,  Price = :Price, Image = :Image WHERE Product_id = :id";
    }

    public function delete_product(int $id)
    {
        $sql = "DELETE FROM products WHERE Product_id = :id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->execute();
    }

}

?>