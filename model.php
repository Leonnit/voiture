<?php 
   class Utilisateur
   {
        public $nom;
        public $prenom;
        public $pseudo;
        public $email;
        public $passw;

    //declaration fonction ou operation effectu par un utilisateu
        public function _inscription($nom, $prenom, $pseudo, $email, $passw)
        {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->pseudo=$pseudo;
            $this->email=$email;
            $this->passw=$passw;

        }
        public function _connexion($email, $passw)
        {
            $this->email=$email;
            $this->passw=$passw;
        }
        public function _deconnexion()
        {
           //$_SESSION
        }
   } 
?>