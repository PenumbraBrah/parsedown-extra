<?php

#
#
# Raindown
# https://github.com/PenumbraBrah/raindown
#
# (c) Jay Andorian
#
# For the full license information, view the LICENSE file that was distributed
# with this source code.
#
#

class Raindown extends ParsedownExtra
{
    function __construct()
    {
    }

    function content($text)
    {
        if (strpos($text, '<raindown>') !== false) {
            list($meta, $content) = explode('<raindown>', $text, 2);
            return parent::text($content);
        }
        return parent::text($text);
    }

    function meta($text)
    {
        if (strpos($text, '<raindown>') !== false) {
            list($meta, $content) = explode('<raindown>', $text, 2);
            $meta = json_decode($meta);
            return $meta;
        }
        return false;
    }
    
    function storm($text)
    {
        if (strpos($text, '<raindown>') !== false) {
            list($meta, $content) = explode('<raindown>', $text, 2);
            $meta = json_decode($meta);
            return array($meta, parent::text($content));
        }
        return array(false, parent::text($text));
    }
}
