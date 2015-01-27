<?  // Functions

    function go($addr) {
        header("Location: /".$addr);
    }

    function not_found_f() {
        go("404");
    }

    function include_end($inc) {
        include $inc;
        exit();
    }

    function get_page($page_name) {
        include PAGES_PATH.$page_name.'.php';
    }

    function get_template($tml_name) {
        include TPL_PATH.$tml_name.'.php';
    }

    function is_ajax_req() {
        if($_POST['ajax_req'] == '1')
            return true;

        return false;
    }

    function get_title($url) {
        switch($url) {
            case("404"):
                echo "Страница не найдена";
                break;
            case("contacts"):
                echo "Контакты";
                break;
            case("discounts"):
                echo "Скидки";
                break;
            case("new"):
                echo "Оформление заказа";
                break;
            case("partners"):
                echo "Партнёрам";
                break;
            case("portfolio"):
                echo "Портфолио";
                break;
            case("services"):
                echo "Заказать сайт";
                break;
            case("vacancies"):
                echo "Вакансии";
                break;
            default:
                echo "";
                break;
        }
    }