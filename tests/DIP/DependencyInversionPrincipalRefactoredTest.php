<?php

class DependencyInversionPrincipalRefactoredTest extends PHPUnit_Framework_TestCase
{
    public function testGetMessageFromFileReader()
    {
        $fileReader = new SOLID\DIP\Refactored\FileReader();
        $fileManager = new SOLID\DIP\Refactored\FileManager();
        $fileManager->setFileService($fileReader);
        $this->assertRegExp('/message/', $fileManager->getFileMessage());
    }

    public function testGetMessageFromXMLFileReader()
    {
        $xmlFileReader = new SOLID\DIP\Refactored\XMLFileReaderService();
        $fileManager = new SOLID\DIP\Refactored\FileManager();
        $fileManager->setFileService($xmlFileReader);
        $this->assertRegExp('/message/', $fileManager->getFileMessage());
    }
}