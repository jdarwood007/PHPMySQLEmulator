<?php

// Compatibility where MySQL functions don't exist.
if (!function_exists('mysql_connect'))
{
	function mysql_connect($host, $username, $password){global $db_connection; $db_connection = mysqli_connect($host, $username, $password); return $db_connection;}
	function mysql_pconnect($host, $username, $password){global $db_connection; $db_connection = mysqli_connect('p:' . $host, $username, $password); return $db_connection}
	function mysql_real_escape_string($string, $resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_real_escape_string($resource, $string);}
	function mysql_select_db($database, $resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_select_db($resource, $database);}
	function mysql_fetch_row($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_fetch_row($resource);}
	function mysql_free_result($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_free_result($resource);}
	function mysql_num_rows($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_num_rows($resource);}
	function mysql_data_seek($resource = null, $row){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_data_seek($resource, $row);}
	function mysql_num_fields($resource = null, $row){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_num_fields($resource, $row);}
	function mysql_get_server_info($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_get_server_info($resource);}
	function mysql_error($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_error($resource);}
	function mysql_errno($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_errno($resource);}
	function mysql_query($query, $resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_query($resource, $query);}
	function mysql_unbuffered_query($query, $resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_query($resource, $query, MYSQLI_USE_RESULT);}
	function mysql_affected_rows($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_affected_rows($resource);}
	function mysql_insert_id($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_insert_id($resource);}
	function mysql_fetch_assoc($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_fetch_assoc($resource);}
	function mysql_set_charset($charset, $resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_set_charset($resource, $charset);}
	function mysql_numrows($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_num_rows($resource);}
	function mysql_close($resource = null){if(is_null($resource))$resource = $GLOBALS['db_connection']; return mysqli_close($resource);}
}
