<?php
/**
 * mithra62
 *
 * @copyright	Copyright (c) 2015, mithra62, Eric Lamb.
 * @link		http://mithra62.com/
 * @version		1.0
 * @filesource 	JaegerApp/Twig/m62LangTwigExtension.php
 */
namespace JaegerApp\Platforms\View;

use Twig_Extension;
use Twig_Filter_Method;
use JaegerApp\Traits\View\Helpers As ViewHelpers;
use JaegerApp\Platforms\View\ViewInterface;

/**
 * mithra62 - Twig View Helpers
 *
 * Contains all the view helpers for Twig
 *
 * @package Twig
 * @author Eric Lamb <eric@mithra62.com>
 */
class m62TwigExtension extends \Twig_Extension implements ViewInterface
{
    use ViewHelpers;
    
    /**
     * (non-PHPdoc)
     * 
     * @see Twig_ExtensionInterface::getName()
     */
    public function getName()
    {
        return 'm62Twig';
    }

    /**
     * (non-PHPdoc)
     * 
     * @see Twig_Extension::getFilters()
     */
    public function getFilters()
    {
        return array(
            'm62Lang' => new Twig_Filter_Method($this, 'm62Lang'),
            'm62FileSize' => new Twig_Filter_Method($this, 'm62FileSize'),
            'm62DateTime' => new Twig_Filter_Method($this, 'm62DateTime'),
            'm62Encode' => new Twig_Filter_Method($this, 'm62Encode'),
            'm62Decode' => new Twig_Filter_Method($this, 'm62Decode'),
            'm62RelativeDateTime' => new Twig_Filter_Method($this, 'm62RelativeDateTime'),
            'm62TimeFormat' => new Twig_Filter_Method($this, 'm62TimeFormat'),
            'm62Options' => new Twig_Filter_Method($this, 'm62Options')
        );
    }
}