<?php

namespace SOLID\DIP\Initial;

class FileManager
{
    protected $fileReader;

    public function setFileService(FileReader $fileReader)
    {
        $this->fileReader = $fileReader;
    }

    public function getFileMessage()
    {
        return $this->fileReader->getMessage();
    }
} 