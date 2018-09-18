<?php

    class Ocena extends Db_object{ 
        
        protected static $db_table = "ocene";
        protected static $db_table_fields = array('id', 'user_id', 'macka_id', 'ocena', 'komentar', 'date');
        public $id;
        public $user_id;
        public $macka_id;
        public $ocena;
        public $komentar;
        public $date;            
 
    } // END OF Class




?>