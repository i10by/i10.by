<?  // Router

    $url = explode('/', $_SERVER['REQUEST_URI']);
    $url_page = "services";

    if (!empty($url[1]))
        $url_page = $url[1];

    if (!empty($url[2]))
        $url_sector = $url[2];

    if($url_page == "s")
        include_end(SCRIPTS_PATH . $url_sector . '.php');

    $page_addr = PAGES_PATH.$url_page.'.php';

    if(!file_exists($page_addr))
        not_found_f();

    include(CORE_PATH.'template.php');