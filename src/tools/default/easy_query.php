<?php

/***********************************************************\
|* EasySQL Framework v1.0.0                                *|
|* Author: Djordje Jocic                                   *|
|* Year: 2013                                              *|
|* ------------------------------------------------------- *|
|* Filename: easy_query.php                                *|
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

class EasyQuery
{
	// "Other" Methods.
	
	public static function execute($query = null)
	{
		new Notice("EasyQuery", "Using EasyQuery tool is <strong>unsafe</strong> and should be used only if it's absolutley necessary!.");
	
		new DebugInfo("EasyQuery", $query); // Print debug info.
		
		// Perform the Query.
        
        $result = mysql_query($query);
		
        if (!$result)
			new Notice("EasyQuery", "The query could not be run.");
	}
}

?>