<?php

    namespace Model\Entity;

    use App\AbstractEntity;

    class Realisateur extends AbstractEntity {

        private $id;
        private $prenomRealisateur;
        private $nomRealisateur;
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
         * Get the value of prenomRealisateur
         */ 
        public function getPrenomRealisateur()
        {
                return $this->prenomRealisateur;
        }

        /**
         * Set the value of prenomRealisateur
         *
         * @return  self
         */ 
        public function setPrenomRealisateur($prenomRealisateur)
        {
                $this->prenomRealisateur = $prenomRealisateur;

                return $this;
        }

        /**
         * Get the value of nomRealisateur
         */ 
        public function getNomRealisateur()
        {
                return $this->nomRealisateur;
        }

        /**
         * Set the value of nomRealisateur
         *
         * @return  self
         */ 
        public function setNomRealisateur($nomRealisateur)
        {
                $this->nomRealisateur = $nomRealisateur;

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
            return $this->nomRealisateur." ".$this->prenomRealisateur;
        }
    }

?>