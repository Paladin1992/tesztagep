<?php
    // debug
    $_HTML_BASE_URL = 'http://localhost:8080/tesztagep/trunk/';
    // release
    //$_HTML_BASE_URL = 'https://www.tesztagep.hu/';

    $_TITLE_SEPARATOR = '&bull;';
    $_TITLE_SUFFIX = 'Magyar tésztagép';

    function set_base_url() {
        global $_HTML_BASE_URL;
        echo '<base href="'.$_HTML_BASE_URL.'">';
    }
?>