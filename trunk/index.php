<?php
    $page = (isset($_GET['page']) ? $_GET['page'] : 'fooldal');
    $title = (isset($_GET['title']) ? $_GET['title'] : '');

    include_once("helpers/menu_helper.php");
    include_once("helpers/html_helper.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta keywords="<?=get_meta_keywords($page, $title);?>"/>
    <meta description="<?=get_meta_description($page, $title);?>"/>
    <meta name="author" content="MaGe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="css/site.css">

    <script src="js/jquery.min.js"></script>
</head>
<body>
    <div class="stick">
        <header>
            <h1 class="main-title">Magyar tésztagép</h1>

            <div class="content">
                <button type="button" class="btn-menu">
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>

                <?php include("menu.php"); ?>
            </div>
        </header>
        <div class="header-placeholder"></div>

        <main>
            <div class="content">
                <?php
                    $file_path = "content/".$page.".php";

                    if (file_exists($file_path)) {
                        print_page_title($page, true);
                        include_once($file_path);
                    }
                ?>
            </div>
        </main>

        <?php include_once('footer.php'); ?>
    </div>

    <script src="js/script.js"></script>
</body>
</html>