<?php
class Templater {
    function render($file, $variables = array()) {
        extract($variables);
        ob_start();
        include $file;
        $renderedView = ob_get_clean();
        return $renderedView;
    }
}
?>