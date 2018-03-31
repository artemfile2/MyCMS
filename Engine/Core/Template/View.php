<?php

namespace Engine\Core\Template;

use Engine\Core\Template\Themes;

class View
{

    /**
     * @var \Engine\Core\Template\Themes
     */
    protected $theme;

    /**
     * View constructor.
     */
    public function __construct()
    {
        $this->theme = new Themes();
    }

    /**
     * @param $template
     * @param array $vars
     * @throws \Exception
     */
    public function render($template, $vars = [])
    {
        $templatePath = ROOT_DIR . '/Content/Themes/Default/' . $template . '.php';

        if (!is_file($templatePath)){
            throw new \InvalidArgumentException(
                sprintf('Template "%s" not found in "%s"',
                    $template,
                    $templatePath)
                );
        }
        extract($vars);

        ob_start();
        ob_implicit_flush(0);

        try{
            require $templatePath;
        }catch (\Exception $e){
            ob_end_clean();
            throw $e;
        }

        echo ob_get_clean();
    }
}