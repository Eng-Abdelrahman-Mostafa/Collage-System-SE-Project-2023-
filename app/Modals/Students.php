<?php

namespace Modals;

use Core\Database;

class Student {
    private $id;
    private $national_id_number;
    private $nationality_id;
    private $full_name_ar;
    private $full_name_en;
    private $email;
    private $password;
    private $photo;
    private $phone_number;
    private $address;
    private $description;
    private $academic_id;
    private $department_id;
    private $grade_id;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    public function __construct($info = null) {
        if ($info) {
            $this->id = $info['id'];
            $this->national_id_number = $info['national_id_number'];
            $this->nationality_id = $info['nationality_id'];
            $this->full_name_ar = $info['full_name_ar'];
            $this->full_name_en = $info['full_name_en'];
            $this->email = $info['email'];
            $this->password = $info['password'];
            $this->photo = $info['photo'];
            $this->phone_number = $info['phone_number'];
            $this->address = $info['address'];
            $this->description = $info['description'];
            $this->academic_id = $info['academic_id'];
            $this->department_id = $info['department_id'];
            $this->grade_id = $info['grade_id'];
            $this->created_at = $info['created_at'];
            $this->updated_at = $info['updated_at'];
            $this->deleted_at = $info['deleted_at'];
        }
    }

    public function add() {
        // perform validation, then insert or update the record in the database
        // and set $this->id to the new ID if it's an insert
    }

    public function delete($id = null) {
        // delete the record from the database based on the current $this->id
        if (!$id)
        {
            $id = $this->id;
        }
        $config = require  base_path("app/config.php");
        $db = new Database($config) ;
        $db->query("DELETE FROM `students` WHERE `id` = :id",['id' => $id]);
        return true;
    }

    public function update($info) {
        // perform validation, then update the record in the database based on the current $this->id

        if ($info) {
            $this->id = $info['id'];
            $this->national_id_number = $info['national_id_number'];
            $this->nationality_id = $info['nationality_id'];
            $this->full_name_ar = $info['full_name_ar'];
            $this->full_name_en = $info['full_name_en'];
            $this->email = $info['email'];
            isset($info['password']) ? $this->password = $info['password'] : $this->password = null ;
            $this->photo = $info['photo'];
            $this->phone_number = $info['phone_number'];
            $this->address = $info['address'];
            $this->description = $info['description'];
            $this->academic_id = $info['academic_id'];
            $this->department_id = $info['department_id'];
            $this->grade_id = $info['grade_id'];
            $this->created_at = $info['created_at'];
            $this->updated_at = $info['updated_at'];
            $this->deleted_at = $info['deleted_at'];
        }

        $config = require base_path("app/config.php");
        $db = new Database($config);

        $sql = "UPDATE `teaching_staff` SET";

        $columns = [];
        $values = [];

        if ($info) {
            foreach ($info as $key => $value) {
                if($key==='id'){
                    continue;
                }else{

                        $columns[] = "`$key`";
                        $values[] = $value;
                }
            }
        }

        $setClauses = [];
        for ($i = 0; $i < count($columns); $i++) {
            $setClauses[] = "$columns[$i] = ?";
        }

        $sql .= implode(", ", $setClauses);

        $sql.= "where id = ?";

        array_push($values,$info['id']);

        $db->query($sql,$values);
    }

    public function get($id = null) {
        // fetch the record with the given ID from the database and return a new instance of this class
        if(!$id)
        {
            $id = $this->id;
        }
        $config = require base_path("app/config.php");
        $db = new Database($config);
        return   $db->query("SELECT * FROM `students` where id =:id",['id' => $id])->fetchAll();
    }

    // getters and setters for each property (omitted for brevity)
}
