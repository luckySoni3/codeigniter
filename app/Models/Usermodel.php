<?php
namespace App\Models;
use CodeIgniter\Model;

class Usermodel extends Model
{
    protected $table='users';
    protected $allowfields=['name','email','phone','password','user_type'];
    protected $beforeinsert=['beforeInsert'];
    protected $beforeupdate=['beforeUpdate'];
    protected $primaryKey='id';

    protected function beforeInsert(array $data)
    {
        $data=$this->password_hash($data);
        $data['data']['created_at']=date('Y-m-d H:i:s');
        return $data;
    }
    protected function beforeUpdate(array $data)
    {
        $data=$this->password_hash($data);
        $data['data']['update_at']=date('Y-m-d H:i:s');
        return $data;
    }
    protected function passwordHash(array $data)
    {
        if(isset($data['data']['password']))
        $data['data']['password']=password_hash($data['data']['password'],PASSWORD_DEFAULT);
        return $data;
    }
}

?>