<?php

require_once "phing/Task.php";

class BuildNavigationTask extends Task {

    private $filesets = array();

    function createFileSet() {
        $num = array_push($this->filesets, new FileSet());
        return $this->filesets[$num-1];
    }

    public function main() {
        foreach ($this->filesets as $fs) {
            var_dump($fs);
            // try {
            //     $files = $fs->getDirectoryScanner($this->project)->getIncludedFiles();
            //     foreach ($files as $file) {
            //         echo $file;
            //     }
            // } catch (BuildException $be) {
            //     $this->log($be->getMessage(), Project::MSG_WARN);
            // }
        }

    }
}
