<?php

namespace Modals;

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

    }

    public function save() {
        // perform validation, then insert or update the record in the database
        // and set $this->id to the new ID if it's an insert
    }

    public function delete() {
        // delete the record from the database based on the current $this->id
    }

    public function update() {
        // perform validation, then update the record in the database based on the current $this->id
    }

    public static function find($id) {
        // fetch the record with the given ID from the database and return a new instance of this class
    }

    // getters and setters for each property (omitted for brevity)
}
