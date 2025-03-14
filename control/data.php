<?php

    class Data {
        private $name = "name";
        private $password = "password";

        public function getNome($nameUser) {
            $this->name = $nameUser;
            return $this->name;
        }

        public function getPassword($passUser) {
            $this->password = $passUser;
            return $this->password;
        }

        public function showName(){
            return $this->name;
        }

        public function showPassword(){
            return $this->password;
        }
}

?>