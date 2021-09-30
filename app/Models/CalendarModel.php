<?php

namespace App\Models;

use App\Entities\EntityCalendar;
use CodeIgniter\Model;
use App\Entities\UserInfo;

class CalendarModel extends Model
{
    protected $table      = 'calendar';
    protected $primaryKey = 'id_calendar';

    protected $useAutoIncrement = true;

    protected $returnType     = User::class;
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title', 'idanydesk', 'url','lab_pc', 'group_id', 'start', 'end', 'id_user'];

    protected $useTimestamps = true;
    protected $createdField  = '';
    protected $updatedField  = '';
    protected $deletedField  = '';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
    protected $beforeInsert = ['addUserid'];


 

    protected $userid;


    public function addUser($UserId)

    {
        $row = $this->db->table('users')
        ->where('id', $UserId)->get()->getFirstRow();
        if ($row != null) {
            $id = $this->userid = $row->id;
            
         }
    } 

    protected function addUserid($data)
    {

        $data['data']['id_user'] = $this->userid;
        d($data);
        return $data;
    }







   
}
