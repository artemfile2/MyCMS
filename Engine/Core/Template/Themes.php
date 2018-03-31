<?php

namespace Engine\Core\Template;

class Themes
{
    /**
     * @var const RULES_NAME_FILE
     */
    const RULES_NAME_FILE = [
            'header' => 'header-%s',
            'footer' => 'footer-%s',
            'sidebar' => 'sidebar-%s'
        ];

    /**
     * @var string
     */
    public $url = '';

    /**
     * @param null $name
     * @throws \Exception
     */
    public function header($name = null)
    {
        $name = (string) $name;
        $file = 'header';

        if ($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['header'], $name);
        }

        $this->loadTemplateFile($file);
    }

    /**
     * @param string $name
     * @throws \Exception
     */
    public function footer($name = '')
    {
        $name = (string) $name;
        $file = 'footer';

        if ($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['footer'], $name);
        }

        $this->loadTemplateFile($file);
    }

    /**
     * @param string $name
     * @throws \Exception
     */
    public function sidebar($name = '')
    {
        $name = (string) $name;
        $file = 'sidebar';

        if ($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        }

        $this->loadTemplateFile($file);
    }

    /**
     * @param string $name
     * @param array $data
     * @throws \Exception
     */
    public function block($name = '', $data = [])
    {
        $name = (string) $name;
        $file = 'sidebar';

        if ($name !== ''){
            $file = sprintf(self::RULES_NAME_FILE['sidebar'], $name);
        }

        $this->loadTemplateFile($file);
    }

    /**
     * @param $nameFile
     * @param array $data
     * @throws \Exception
     */
    private function loadTemplateFile($nameFile, $data = [])
    {
        $templateFile = ROOT_DIR . '/Content/Themes/Default/' .  $nameFile . '.php';

        if (is_file($templateFile)){
            extract($data);
            require_once $templateFile;
        }
        else {
            throw new \Exception(
                sprintf('File themes %s not found',  $templateFile)
            );
        }
    }
}