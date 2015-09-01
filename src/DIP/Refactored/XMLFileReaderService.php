<?php

namespace SOLID\DIP\Refactored;

class XMLFileReaderService implements FileReaderInterface
{
    public function getMessage()
    {
        // ...Do lots of complicated things XML file related.
        return 'some message from an XML file.';
    }
} 