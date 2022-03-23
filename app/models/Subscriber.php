<?php
    class Subscriber{
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function getSubscribers(){
            $this->db->query("SELECT * from subscriber");

            $results = $this->db->resultSet();
            return $results;
        }

        public function addSubscriber($data){
            $this->db->query("INSERT INTO subscriber (phoneNumber,username,password,domain,status) VALUES (:phoneNumber,:username,:password,:domain,:status)");
            // Bind Values
            $this->db->bind(':phoneNumber', $data['phoneNumber']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':domain', $data['domain']);
            $this->db->bind(':status', $data['status']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function getSubscriberById($id){
            $this->db->query("SELECT * FROM subscriber WHERE phoneNumber = :id");
            $this->db->bind(':id', $id);

            $row = $this->db->single();
            return $row;
        }

        public function updateSubscriber($data){
            $this->db->query("UPDATE subscriber SET username = :username, password = :password, domain = :domain, status = :status WHERE phoneNumber = :phoneNumber");
            // Bind Values
            $this->db->bind(':phoneNumber', $data['phoneNumber']);
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':domain', $data['domain']);
            $this->db->bind(':status', $data['status']);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        public function deleteSubscriber($id){
            $this->db->query("DELETE FROM subscriber WHERE phoneNumber = :phoneNumber");
            // Bind Values
            $this->db->bind(':phoneNumber', $id);

            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }