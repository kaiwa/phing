<?php

require_once 'phing/Task.php';

class TargetCallTask extends Task {
    protected $target;

    function setTarget($target) {
        $this->target = (string) $target;
    }

    function main() {
        $this->project->executeTarget($this->target);
    }
}
