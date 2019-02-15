<?php

/***********************************************************\
|* EasySQL Framework v1.0.1                                *|
|* Author: Djordje Jocic                                   *|
|* Year: 2013                                              *|
|* ------------------------------------------------------- *|
|* Filename: easysql_objects.php                           *|
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

// "Core Data Objects" Includes.

require_once "/../objects/data/argument.php";

// "Selection Data Objects" Includes.

require_once "/../objects/data/selection/column_selection.php";
require_once "/../objects/data/selection/table_selection.php";
require_once "/../objects/data/selection/value_selection.php";
require_once "/../objects/data/selection/argument_selection.php";

// "Default Structure Objects" Includes.

require_once "/../objects/structure/easy_schema.php";
require_once "/../objects/structure/easy_table.php";
require_once "/../objects/structure/easy_view.php";

// "Default Structure Sub-Objects" Includes.

require_once "/../objects/structure/subobjects/easy_column.php";
require_once "/../objects/structure/subobjects/easy_primary_key.php";
require_once "/../objects/structure/subobjects/easy_index.php";
require_once "/../objects/structure/subobjects/easy_foreign_key.php";

// "Structure Sub-Objects - Details" Includes.

require_once "/../objects/structure/subobjects/details/column_name.php";
require_once "/../objects/structure/subobjects/details/column_type.php";
require_once "/../objects/structure/subobjects/details/column_null.php";
require_once "/../objects/structure/subobjects/details/column_value.php";
?>