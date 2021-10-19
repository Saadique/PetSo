<?php

    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function login($email, $password){
           $this->db->query('SELECT * FROM `petso`.`User` WHERE `us_email` = :email');
            // bind value
           $this->db->bind(':email', $email);

           $row = $this->db->single();

           $hashedPassword = $row->us_password;

           if(password_verify($password, $hashedPassword)) {
               return $row;
           } else {
               return false;
           }
        }

        public function register($data) {

            $this->db->query(
                'INSERT INTO `petso`.`User` (`us_name`, `us_email`, `us_mobile`, `us_password`, `account_status`) 
                VALUES (:username, :email, :mobile, :password, :accountStatus)');

            // bind values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':mobile', $data['mobile']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':accountStatus', 'active');

            // execute function
            if($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getUsers() {
            $this->db->query("SELECT * FROM User");

            $result = $this->db->resultSet();    // resultSet returns an array of Objects
            return $result;
        }

        public function findUserByEmail($email) {
            // prepared statement
            $this->db->query('SELECT * FROM `petso`.`User` WHERE `us_email` = :email');

            // email param will be binded with $email
            $this->db->bind(':email', $email);

            // check if already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }