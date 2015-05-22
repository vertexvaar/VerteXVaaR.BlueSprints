<?php
namespace VerteXVaaR\BlueSprints\Mvc;

use VerteXVaaR\BlueSprints\Utility\Files;

/**
 * Class TemplateHelper
 *
 * @package VerteXVaaR\BlueSprints\View
 */
class TemplateHelper
{

    /**
     * @var string
     */
    protected $fileName = '';

    /**
     * @var array[]
     */
    protected $variables = [];

    /**
     * @param string $fileName
     * @param array $variables
     * @return void
     */
    public function requireLayout($fileName = '', array $variables = [])
    {
        $this->fileName = $fileName;
        $this->variables = $variables;
    }

    /**
     * @param string $body
     * @return string
     */
    public function renderLayoutContent($body = '')
    {
        if (!empty($this->fileName)) {
            ob_start();
            $this->variables['body'] = $body;
            Files::requireFile('view/Layout/' . $this->fileName . '.php', $this->variables);
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        return $body;
    }
}