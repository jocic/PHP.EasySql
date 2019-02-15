<?php

/***********************************************************\
|* EasySQL Framework v1.0.0                                *|
|* Author: Djordje Jocic                                   *|
|* Year: 2013                                              *|
|* ------------------------------------------------------- *|
|* Filename: easy_config.php                               *|
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

class DBConfig
{
	// "Core" Variables.

    private $host       = "localhost";
    private $username   = "root";
    private $password   = "";
    private $dbSchema   = "easql_test";
    private $tblPrefix  = "db_";
	private $viewPrefix = "dbv_";
	
	// "Main" Methods.
	
	public function getHostname() { return $this->host; }
	
	public function getUsername() { return $this->username; }
	
	public function getPassword() { return $this->password; }
	
	public function getSchemaName() { return $this->dbSchema; }
	
	public function getTablePrefix() { return $this->tblPrefix; }
	
	public function getViewPrefix() { return $this->viewPrefix; }
}

?>