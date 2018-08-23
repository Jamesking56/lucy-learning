<?php

class Library
{
    /**
     * This method finds something to read for someone
     */
    public function iNeedSomethingToRead(Readable $readable) {
        $readable->read();
        $readable->readTheBlurb();
    }
}