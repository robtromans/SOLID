<?php

namespace SOLID\DIP\Refactored;

class FileManager
{
    protected $fileReader;

    public function setFileService(FileReaderInterface $fileReader)
    {
        $this->fileReader = $fileReader;
    }

    public function getFileMessage()
    {
        return $this->fileReader->getMessage();
    }
} 