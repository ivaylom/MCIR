<?php
/*
Magical Code Injection Rainbow - A set of configurable injection testbeds 
Daniel "unicornFurnace" Crowley
Copyright (C) 2014 Trustwave Holdings, Inc.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
	<title>SQLol - Challenge 11 - No WHERE 2</title>
<link rel="stylesheet" type="text/css" href="../../includes/mcir.css">
</head>
<body>
	<center><h1>SQLol - Challenge 11 - No WHERE 2</h1></center><br>

	<hr width="40%">
	<hr width="60%">
	<hr width="40%">
<div id="challenge">
	
In this challenge, you are working with an ordinary SELECT query. However, this is not a standard injection into the WHERE clause. In this challenge, you are injecting into the ORDER BY clause in the query.<br>
<br>
Your objective is to obtain the social security numbers from the database.

<pre>
PARAMETERS:
Query Type - SELECT query
Injection Type - Column name
Method - GET
Sanitization - None
Output - No error messages, query shown
</pre>

</div>
<form action="../select.php" method="get" name="challenge_form">
	<input type="hidden" name="query_results" value="all"/>
	<input type="hidden" name="error_level" value="none"/>
	<input type="hidden" name="show_query" value="on"/>
	<input type="hidden" name="location" value="order_by"/>
	Injection String: <input type="text" name="inject_string"/><br>
	<input type="submit" name="submit" value="Inject!"/>
</form>
<br>
</body>
</html>
