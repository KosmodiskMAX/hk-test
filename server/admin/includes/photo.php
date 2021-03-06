 <?php

class Photo extends Db_object{
    
    protected static $db_table = "photos";
    protected static $db_table_fields = array('id', 'user_id', 'title', 'caption', 'description', 'filename', 'alternate_text', 'type', 'size');
    public $id;
    public $user_id;
    public $title;
    public $caption;
    public $description;
    public $alternate_text;

        
    
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
                $this->errors[] = "File directory probably dosent have rifht premissions";
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