<?php

class ServiceStudent
{

        private $db;
        private $student;

        public function __construct(IConn $db, IStudent $student)
        {
            $this->db = $db->connect();
            $this->student = $student;
        }

        public function list()
        {
            return "Ok";
        }
        
        public function save()
        {
            
        }
        
        public function update()
        {
            
        }
        
        public function delete()
        {
            
        }

}
