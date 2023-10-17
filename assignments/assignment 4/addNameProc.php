<?php

class AddNamesProc {
    private $namesArray = [];

    public function addClearNames() {
        if (isset($_POST['addName'])) {
            $this->addName();
        } elseif (isset($_POST['clearNames'])) {
            $this->clearNames();
        }
        return $this->getFormattedNames();
    }

    private function addName() {
        $name = trim($_POST['nameInput']);
        $nameParts = explode(' ', $name);
        if (count($nameParts) == 2) {
            $formattedName = "{$nameParts[1]}, {$nameParts[0]}";
            array_push($this->namesArray, $formattedName);
            asort($this->namesArray);
        }
    }

    private function clearNames() {
        $this->namesArray = [];
    }

    private function getFormattedNames() {
        return implode("\n", $this->namesArray);
    }
}

?>