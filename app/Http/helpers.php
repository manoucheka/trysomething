<?php
use App\Patient;

class Helpers {

    protected $firstname;
    protected $id;

    public function setName($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function __toString() {
        return "Pa " . $this->firstname . " - " . $this->id . " CODE";
    }
}
