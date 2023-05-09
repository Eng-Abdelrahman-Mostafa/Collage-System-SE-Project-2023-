<?php

namespace Modals;

use Core\Database;

class TeachingStaff {
    private $id;
    private $national_id_number;
    private $nationality_id;
    private $role_num;
    private $full_name_ar;
    private $full_name_en;
    private $title;
    private $email;
    private $password;
    private $photo;
    private $phone_number;
    private $address;
    private $description;
    private $department_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    private $db;
    public $info=[];

    public function __construct($id = null) {
        $config = require base_path("app/config.php");
        $this->db = new Database($config);
        if ($id){
            $info=$this->db->query("SELECT * FROM `teaching_staff` where id =:id",['id' => $id])->fetch();
            $this->info = $info;
            $this->id = $info['id'];
        }
    }

    public function add($data) {
        $columns = [];
        $values = [];

        foreach ($data as $key => $value) {
            $columns[] = "`$key`";
            $values[] = $value;
        }

        $sql = "INSERT INTO `teaching_staff` (";
        $sql .= implode(", ", $columns);
        $sql .= ") VALUES (";
        $sql .= str_repeat("?, ", count($columns)-1) . "?";
        $sql .= ")";

        $this->db->query($sql, $values);
        $this->id = $this->db->lastInsertId();
    }

    public function delete() {
        if (!$this->id)
        {
            throw new \Exception("Cannot delete: ID not set");
        }

        $sql = "DELETE FROM `teaching_staff` WHERE `id` = ?";

        $this->db->query($sql, [$this->id]);

        $this->id = null;
    }

    public function update($data) {
        if (!$this->id)
        {
            $this->id = $data['id'];
//            throw new \Exception("Cannot update: ID not set");
        }
        $columns = [];
        $values = [];

        foreach ($data as $key => $value) {
            if($key !== 'id') {
                $columns[] = "`$key` = ?";
                $values[] = $value;
            }
        }

        $sql = "UPDATE `teaching_staff` SET ";
        $sql .= implode(", ", $columns);
        $sql .= " WHERE `id` = ?";

        $values[] = $this->id;
        $this->db->query($sql, $values);
    }

    public function get($id) {
        $ts = new TeachingStaff($id);
        return $ts->info;
    }
    public function list() {
        return $this->db->query("SELECT * FROM `teaching_staff`")->fetchAll();
    }
    public function login($email,$password) {
        $ts = $this->db->query("SELECT * FROM `teaching_staff` where email =:email and password =:password",['email' => $email,'password' => $password])->fetch();
        if($ts){
            return $ts;
        }else{
            return false;
        }
    }
    public function search($data) {
        $sql = "SELECT * FROM `teaching_staff` where ";
        $sql .= implode(" and ", $data);
        return $this->db->query($sql)->fetchAll();
    }


}
