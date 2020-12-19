<?php 

    namespace Model\Entity;

    use App\AbstractEntity;

    class Genre extends AbstractEntity {

        private $id;
        private $libelleGenre;
        private $nbFilm; // non mappé

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
         * Get the value of libellegenre
         */ 
        public function getLibelleGenre()
        {
                return $this->libelleGenre;
        }

        /**
         * Set the value of libellegenre
         *
         * @return  self
         */ 
        public function setLibelleGenre($libelleGenre)
        {
                $this->libelleGenre = $libelleGenre;

                return $this;
        }

        public function __toString(){
            return $this->libelleGenre;
        }
    }

?>