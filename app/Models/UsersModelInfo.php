<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\User;
use App\Entities\UserInfo;

class UsersModelInfo extends Model
{
    protected $table      = 'users_info';
    protected $primaryKey = 'users_id';

    protected $useAutoIncrement = true;

    protected $returnType     = User::class;
    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'surname', 'surname_m', 'account_name'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;


}
