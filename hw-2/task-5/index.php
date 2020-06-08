<?

function renderTemplate($page, $content = array()) {
    if (file_exists($page . ".php")) {
        ob_start();
        extract($content);
        include $page . ".php";
        return ob_get_clean();
    } else {
        echo error_log('Error');
    }
}

$menu = renderTemplate('menu');
$about = renderTemplate('about');

echo renderTemplate('main', ['menu' => $menu, 'about' => $about]);
