<?php

/***********************************************************\
|* EasySQL Framework v1.0.1                                *|
|* Author: Djordje Jocic                                   *|
|* Year: 2013                                              *|
|* ------------------------------------------------------- *|
|* Filename: value_processor.php                           *|
|* ------------------------------------------------------- *|
|* Copyright (C) 2013                                      *|
|* ------------------------------------------------------- *|
|* This program is free software: you can redistribute     *|
|* it and/or modify it under the terms of the GNU Affero   *|
|* General Public License as published by the Free         *|
|* Software Foundation, either version 3 of the License,   *|
|* or any other, later, version of the License.            *|
|* ------------------------------------------------------- *|
|* This program is distributed in the hope that it will    *|
|* be useful, but WITHOUT ANY WARRANTY; without even the   *|
|* implied warranty of MERCHANTABILITY or FITNESS FOR A    *|
|* PARTICULAR PURPOSE.  See the GNU Affero General Public  *|
|* License for more details. You should have received a    *|
|* copy of the GNU Affero General Public License along     *|
|* with this program.                                      *|
|* ------------------------------------------------------- *|
|* If not, see <http://www.gnu.org/licenses/>.             *|
|* ------------------------------------------------------- *|
|* Removal of this copyright header is strictly prohibited *|
|* without written permission from the original author(s). *|
\***********************************************************/

// Security Check.

if (!defined("CONST_EASY_SQL")) exit("Action not allowed.");

// Class.

class ValueProcessor
{
    // "Is" Methods.

    public function isValueSelection($value)
    {
        return (strlen($value) > 4) && (strtolower(substr($value, 0, 4)) == "vls:");
    }

    // "Main" Methods.

    public function processVariable($params = null)
    {
        if (!is_array($params))
            $params = func_get_args();

        $count  = count($params);

        if ($params[0] instanceof ValueSelection) // If it's VS, return that object
        {
            return $params[0];
        }
        else if ($count == 1 && is_string($params[0])) // If there is only one param. and that param is string.
        {
            if ($this->isValueSelection($params[0]))
            {
                $params[0] = explode(",", trim(substr($params[0], 4)));

                for ($i = 0; $i < count($params[0]); $i ++)
                    $params[0][$i] = trim($params[0][$i]);
            }

            $cs = new ValueSelection($params[0]);

            return $cs;
        }
        else if ($count > 1) // If user used an array.
        {
            $cs = new ValueSelection($params);

            return $cs;
        }
    }
}

?>