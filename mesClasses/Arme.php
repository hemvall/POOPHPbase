class Arme {
    private $id;
    private $nom;
    private $nomImage;
    private $description;


    $num_args= func_num_args();              
                switch($num_args){                
                 case '0':                     
                    break;                 
                    case '3':                     
                        $this->nom = func_get_arg(0);                     
                        $this->image = func_get_arg(1);                     
                        $this->description = func_get_arg(2);                 
                        case '4':                     
                            $this->id = func_get_arg(0);                     
                            $this->nom = func_get_arg(1);                    
                            $this->image = func_get_arg(2);                     
                            $this->description = func_get_arg(3);                     
                            break;             
                        }              
                    }

    public function getId(){
        return $this-> id;
    }
    public function getNom(){
        return $this-> nom;
    }
    public function setId($new_id){
        $this-> nom = $new_id;
    }

    public function setNom($new_user_name){
        $this-> nom = $new_user_name;
    }

    public function getNomImage(){
        return $this-> nomImage;
    }
    public function setNomImage($new_user_img){
        $this-> nomImage = $new_user_img;
    }

    public function getDescription(){
        return $this-> description;
    }
    public function setDescription($new_user_desc){
        $this-> description = $new_user_desc;
    }

    
}
