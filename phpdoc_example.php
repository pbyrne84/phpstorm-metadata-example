<?php

/**
 * @template T
 *
 * @param T $a
 *
 * @return T
 */
function a($a) {
    return $a;
}

//no warnings and auto completes
a(new DOMDocument())->cloneNode();
a(DOMDocument::class)->cloneNode();

