<?php

/**
 *
 * @package    is_htmlspecialchars
 * @version    Release: 1.0.0
 * @license    GPL3
 * @author     Ali YILMAZ <aliyilmaz.work@gmail.com>
 * @category   Html special characters control
 * @link       https://github.com/aliyilmaz/is_htmlspecialchars
 *
 */
class is_htmlspecialchars
{

    /**
     * Html special characters control
     * @param string $code
     * @return bool
     */
    public function is_htmlspecialchars($code){
        if(strpos($code, '&lt;') OR strpos($code, '&gt;') OR strpos($code, '&quot;') 
        OR strpos($code, '&#39;') OR strpos($code, '&amp;')){ return true; } 
        return false;
    }
}
