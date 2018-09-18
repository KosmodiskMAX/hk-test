 <?php

class Macka extends Db_object{
    
    protected static $db_table = "macke";
    protected static $db_table_fields = array('id', 'user_id', 'ime', 'prezime', 'image', 'date');
    public $id;
    public $user_id;
    public $ime;
    public $prezime;
    public $image;
    public $date;

        
    
    public function save(){
        if($this->id){
            $this->update();
        }else{
            if(!empty($this->errors)){
                return false;
            }
            if(empty($this->filename) || empty($this->tmp_path)){
                $this->errors[] = "The file was not available";
                return false;
            }
            
            $target_path = SITE_ROOT .DS. 'admin' .DS. $this->picture_path();
            
            if(file_exists($target_path)){
                $this->errors[] = "The file {$this->filename} already exists";
                    return false;
            }
            if(move_uploaded_file($this->tmp_path, $target_path)){
                if($this->create()){
                    unset($this->tmp_path);
                    return true;
                }
            }else{
                $this->errors[] = "File directory probably dosent have right premissions";
                return false;
            }
            
        }
        
    }
    
    public function delete_photo(){

        if($this->delete()){
            $target_path = SITE_ROOT .DS. 'admin' .DS. $this->picture_path();
            return unlink($target_path) ? true : false;
        }else{
            return false;
        }
    }
    
} //END of Class


?>