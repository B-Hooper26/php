<?php

class MemberController {

    protected $db;

    public function __construct(DatabaseController $db)
    {
        $this->db = $db;
    }

    public function get_member_by_id(int $id)
    {
        $sql = "SELECT * FROM user WHERE id = :User_id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->fetch();
    }

    public function get_member_by_email(string $email)
    {
        $sql = "SELECT * FROM user WHERE email = :Email";
        $args = ['email' => $email];
        return $this->db->runSQL($sql, $args)->fetch();
    }

    public function get_all_members()
    {
        $sql = "SELECT * FROM user";
        return $this->db->runSQL($sql)->fetchAll();
    }

    public function update_member(array $member)
    {
        $sql = "UPDATE user SET firstname = :F_name, lastname = :S_name, email = :Email, Phone = :Phone_number, Address = :Address WHERE id = :User_id";
        return $this->db->runSQL($sql, $member)->execute();
    }

    public function delete_member(int $id)
    {
        $sql = "DELETE FROM user WHERE id = :User_id";
        $args = ['id' => $id];
        return $this->db->runSQL($sql, $args)->execute();
    }

    public function register_member(array $member)
    {
        try {

            $sql = "INSERT INTO user(firstname, lastname, email, password, Phone, Address) 
                    VALUES (:F_name, :S_name, :Email, :password, :Phone_number, :Address)"; 

            return $this->db->runSQL($sql, $member)->fetch();

        } catch (PDOException $e) {

            if ($e->getCode() == 23000) { //Could be 1062
                return false;
            }
            throw $e;
        }
    }   

    public function login_member(string $email, string $password)
    {
        $member = $this->get_member_by_email($email);

        if ($member) {
            $auth = password_verify($password,  $member['password']);
            return $auth ? $member : false;
        }
        return false;
    }


}

?>