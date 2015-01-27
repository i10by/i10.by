<? // Configs

    /* $user = "root";
    $db_name = "root";
    $password = "";
    $addr = "localhost";

    $database_connect = mysql_connect($addr, $user, $password);
    mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $database_connect);
    mysql_select_db($db_name, $database_connect); */

    # Constants
    define ('sMonth', 2592000);

    # Cookies
    if(!isset($_COOKIE['lang']))
        setcookie ('lang', 'rus', time() + sMonth, '/');