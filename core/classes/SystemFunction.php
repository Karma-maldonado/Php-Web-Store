<?php

namespace core\classes;

use Exception;

class SystemFunction
{
    #To present views
    public static function Layouts($structures, $data = null)
    {
        if (!is_array($structures)) {
            throw new Exception("Error in layout - System Function");
        }

        if (!empty($data) && is_array($data)) {
            extract($data);
        }

        foreach ($structures as $st => $structure) {
            include("../core/views/$structure.php");
        }
    }
}
