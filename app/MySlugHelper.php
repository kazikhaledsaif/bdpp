<?php

namespace App;

class MySlugHelper {
    public static function slug($string, $separator) {
        $slug = mb_strtolower(
            preg_replace('/([?]|\p{P}|\s)+/u', $separator, $string)
        );
        return trim($slug, $separator);
    }
}
