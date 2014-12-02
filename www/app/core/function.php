<?  // Functions

    function go($addr) {
        header("Location: /".$addr);
    }

    function not_found_f() {
        go("404");
    }

    function get_page($page_name) {
        include PAGES_PATH.$page_name.'.php';
    }

    function get_template($tml_name) {
        include 'template/'.$tml_name.'.php';
    }