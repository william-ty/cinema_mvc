<?php

    namespace Model\Entity;

    use App\AbstractEntity;

    class Acteur extends AbstractEntity {
        
        private $id;
        private $prenomActeur;
        private $nomActeur;
        private $dateNaissance;
        private $sexe;

        public function __construct($date){
            parent::hydrate($date, $this);
        }


        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of prenomActeur
         */ 
        public function getPrenomActeur()
        {
                return $this->prenomActeur;
        }

        /**
         * Set the value of prenomActeur
         *
         * @return  self
         */ 
        public function setPrenomActeur($prenomActeur)
        {
                $this->prenomActeur = $prenomActeur;

                return $this;
        }

        /**
         * Get the value of nomActeur
         */ 
        public function getNomActeur()
        {
                return $this->nomActeur;
        }

        /**
         * Set the value of nomActeur
         *
         * @return  self
         */ 
        public function setNomActeur($nomActeur)
        {
                $this->nomActeur = $nomActeur;

                return $this;
        }

        /**
         * Get the value of dateNaissance
         */ 
        public function getDateNaissance()
        {
                return $this->dateNaissance;
        }

        /**
         * Set the value of dateNaissance
         *
         * @return  self
         */ 
        public function setDateNaissance($dateNaissance)
        {
                $this->dateNaissance = $dateNaissance;

                return $this;
        }

        /**
         * Get the value of sexe
         */ 
        public function getSexe()
        {
                return $this->sexe;
        }

        /**
         * Set the value of sexe
         *
         * @return  self
         */ 
        public function setSexe($sexe)
        {
                $this->sexe = $sexe;

                return $this;
        }

        public function __toString(){
            return $this->nomActeur." ".$this->prenomActeur;
        }
    }