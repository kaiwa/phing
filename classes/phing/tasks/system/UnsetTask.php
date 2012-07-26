<?php

include_once 'phing/Task.php';

class UnsetTask extends Task {
    protected $property; 
    
    function setProperty($name) {
        $this->property = (string) $name;
    }
    
    function getProperty() {
        return $this->property;
    }
    
    function main() {
        if ($this->property !== null) {
            $this->project->setProperty($this->property, null);
        }
    }
    
}
