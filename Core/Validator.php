<?php

namespace Core;

class Validator {
    protected $data;
    protected $rules = [];
    protected $errors = [];

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function setRules(array $rules) {
        $this->rules = $rules;
    }

    public function validate() {
        foreach ($this->rules as $field => $rules) {
            foreach ($rules as $rule) {
                $params = [];

                if (strpos($rule, ':') !== false) {
                    list($rule, $params) = explode(':', $rule, 2);
                    $params = explode(',', $params);
                }

                $methodName = 'validate' . ucfirst($rule);
                $value = isset($this->data[$field]) ? $this->data[$field] : null;

                if (!method_exists($this, $methodName)) {
                    throw new \Exception("Invalid validation rule: {$rule}");
                }

                $result = call_user_func_array([$this, $methodName], array_merge([$value], $params));

                if (!$result) {
                    $this->addError($field, $rule, $params);
                }
            }
        }

        return empty($this->errors);
    }

    public function getErrors() {
        return $this->errors;
    }

    protected function addError($field, $rule, $params) {
        $this->errors[$field][] = ['rule' => $rule, 'params' => $params];
    }

    protected function validateRequired($value) {
        return $value !== null && $value !== '';
    }

    protected function validateEmail($value) {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    protected function validateMin($value, $min) {
        return strlen($value) >= $min;
    }


}

//$data = [
//    'name' => 'John Doe',
//    'email' => 'johndoe@example.com',
//    'password' => 'secret123',
//];
//
//$rules = [
//    'name' => ['required'],
//    'email' => ['required', 'email'],
//    'password' => ['required', 'min:6'],
//];
//
//$validator = new Validator($data);
//$validator->setRules($rules);
//
//if ($validator->validate()) {
//    echo 'Validation passed!';
//} else {
//    $errors = $validator->getErrors();
//
//    foreach ($errors as $field => $rules) {
//        foreach ($rules as $rule) {
//            $message = "Validation failed for field '{$field}' with rule '{$rule['rule']}'";
//
//            if (!empty($rule['params'])) {
//                $message .= ' with params: ' . implode(', ', $rule['params']);
//            }
//
//            echo $message . "\n";
//        }
//    }
//}

