<?php

include_once 'phing/Task.php';
include_once 'phing/system/util/Properties.php';

class UnsetTask extends Task {
    protected $property; 
    
    protected $env;
    
    function setProperty($name) {
        $this->property = (string) $name;
    }
    
    function getProperty() {
        return $this->property;
    }
    
    function main() {
        if ($this->name !== null) {
            $this->project->setProperty($this->name, null);
        }
    }
    
}
