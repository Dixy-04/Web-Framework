<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class mhs_model extends Model
{
    protected $table = 'mahasiswa';
     
    public function getMhs($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
    Public function saveMahasiswa($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    
}