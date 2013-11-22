<?php
/**
 * @package ImpressPages
 *
 */

namespace Ip\Module\Design;


class Theme
{
    const PARAMETERS_FILE = 'parameters.php';

    protected $name;
    protected $title;
    protected $doctype;
    protected $version;
    protected $thumbnail;
    protected $authorTitle;
    protected $options;
    protected $widgetOptions;

    public function __construct(ThemeMetadata $metadata)
    {
        $properties = $metadata->getMetadata();
        foreach ($properties as $key => $value) {
            $this->$key = $value;
        }
    }

    public function getThumbnailUrl()
    {
        if ($this->thumbnail) {
            $image = ipConfig()->baseUrl($this->getPath() . $this->name . "/" . Model::INSTALL_DIR . $this->thumbnail);
        } else {
            $image = ipConfig()->coreModuleUrl('Design/assets/theme.png');
        }
        return $image;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDoctype()
    {
        return $this->doctype;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getAuthorTitle()
    {
        return $this->authorTitle;
    }

    public function getOptions()
    {
        if (!$this->options) {
            return array();
        }
        return $this->options;
    }


    public function getOptionsAsArray()
    {
        $options = $this->getOptions();
        $answer = $this->getGroupOptions($options);
        return $answer;
    }

    protected function getGroupOptions($groupOptions)
    {
        $answer = $groupOptions;
        foreach($groupOptions as $option) {
            if (!empty($option['type']) && $option['type'] === 'group' && !empty($option['options'])) {
                $answer = array_merge($answer, $this->getGroupOptions($option['options']));
            }
        }
        return $answer;
    }

    public function getWidgetOptions()
    {
        if (!$this->widgetOptions) {
            return array();
        }
        return $this->widgetOptions;

    }

}