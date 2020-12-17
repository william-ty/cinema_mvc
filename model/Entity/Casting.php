<?php 

    namespace Model\Entity;

    use App\AbstractEntity;

    class Casting extends AbstractEntity {

        private $acteur;
        private $film;
        private $role;

        public function __construct($date){
            parent::hydrate($date, $this);
        }


        /**
         * Get the value of acteur
         */ 
        public function getActeur()
        {
                return $this->acteur;
        }

        /**
         * Set the value of acteur
         *
         * @return  self
         */ 
        public function setActeur($acteur)
        {
                $this->acteur = $acteur;

                return $this;
        }

        /**
         * Get the value of film
         */ 
        public function getFilm()
        {
                return $this->film;
        }

        /**
         * Set the value of film
         *
         * @return  self
         */ 
        public function setFilm($film)
        {
                $this->film = $film;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }

        public function __toString(){
            return $this->acteur." ".$this->film." ".$this->role;
        }
    }



    

        
    