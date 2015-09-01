<?php

namespace SOLID\DIP\Refactored;

class FileReader implements FileReaderInterface
{
    public function getMessage()
    {
        // ...Do lots of complicated things file related.
        return 'a flat file message';
    }
} 