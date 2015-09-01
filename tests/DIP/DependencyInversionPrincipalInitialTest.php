<?php

class DependencyInversionPrincipalInitialTest extends PHPUnit_Framework_TestCase
{
    public function testGetMessageFromFileReader()
    {
        $fileReader = new SOLID\DIP\Initial\FileReader();
        $fileManager = new SOLID\DIP\Initial\FileManager();
        $fileManager->setFileService($fileReader);
        $this->assertRegExp('/message/', $fileManager->getFileMessage());
    }

    public function testGetMessageFromXMLFileReader()
    {
        // ...Not possible without some messy changes to the file manager.
    }
}