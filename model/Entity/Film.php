<?php 

    namespace Model\Entity;

    use App\AbstractEntity;

    class Film extends AbstractEntity {

        private $id;
        private $titre;
        private $dateSortie;
        private $duree;
        private $synopsys;
        private $note;
        private $affiche;
        private $realisateur;
        
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
         * Get the value of titre
         */ 
        public function getTitre()
        {
                return $this->titre;
        }

        /**
         * Set the value of titre
         *
         * @return  self
         */ 
        public function setTitre($titre)
        {
                $this->titre = $titre;

                return $this;
        }

        /**
         * Get the value of dateSortie
         */ 
        public function getDateSortie()
        {
                return $this->dateSortie;
        }

        /**
         * Set the value of dateSortie
         *
         * @return  self
         */ 
        public function setDateSortie($dateSortie)
        {
                $this->dateSortie = $dateSortie;

                return $this;
        }

        /**
         * Get the value of duree
         */ 
        public function getDuree()
        {
                return $this->duree;
        }

        /**
         * Set the value of duree
         *
         * @return  self
         */ 
        public function setDuree($duree)
        {
                $this->duree = $duree;

                return $this;
        }

        /**
         * Get the value of synopsys
         */ 
        public function getSynopsys()
        {
                return $this->synopsys;
        }

        /**
         * Set the value of synopsys
         *
         * @return  self
         */ 
        public function setSynopsys($synopsys)
        {
                $this->synopsys = $synopsys;

                return $this;
        }

        /**
         * Get the value of note
         */ 
        public function getNote()
        {
                return $this->note;
        }

        /**
         * Set the value of note
         *
         * @return  self
         */ 
        public function setNote($note)
        {
                $this->note = $note;

                return $this;
        }

        /**
         * Get the value of affiche
         */ 
        public function getAffiche()
        {
                return $this->affiche;
        }

        /**
         * Set the value of affiche
         *
         * @return  self
         */ 
        public function setAffiche($affiche)
        {
                $this->affiche = $affiche;

                return $this;
        }
                /**
         * Get the value of realisateur
         */ 

        public function getRealisateur()
        {
                return $this->realisateur;
        }

        /**
         * Set the value of realisateur
         *
         * @return  self
         */ 
        public function setRealisateur($realisateur)
        {
                $this->realisateur = $realisateur;

                return $this;
        }

        public function __toString(){
            return $this->titre;
        }

    }
