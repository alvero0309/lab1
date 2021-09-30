<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = User::class;
    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'email', 'password','pass', 'groups_id_group'];

    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delated_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $beforeInsert = ['addGroup'];
    protected $afterInsert = ['storeUserInfo'];


    protected $infoUser;
//Inserta los datos Nombre y apellido en la tabla users_info
    protected function storeUserInfo($data){
       $this->infoUser->users_id = $data['id'];
       $model = model('UsersModelInfo');
       $model->insert($this->infoUser);
    }



    //Asigna el grupo de manera automatica
    protected function addGroup($data)
    {

        $data['data']['groups_id_group'] = $this->setGroup;

        return $data;
    }

    protected $setGroup;



    public function withGroup($group)
    {
        $row = $this->db->table('groups')
            ->where('name_group', $group)->get()->getFirstRow();
        //Se le asigna a setGroup el valor de la Configuration   
        if ($row != null) {
            $id = $this->setGroup = $row->id_group;
            d($id);
        }
    }

    public function addInfoUser (UserInfo $ui){
         $this->infoUser = $ui;
    }





    public function getUserBy(string $column, string $value)
    {

        return $this->where($column, $value)->first();
    }

}
