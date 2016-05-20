<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e27b50ea6d797da3ebc3c137d332cad5ac5ea2d5af97596c4551f4e008498990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e532541ff13e40eec1bf8abef6c7ec1344f6bbd9c1301fe8b5cf0050fafe09f2 = $this->env->getExtension("native_profiler");
        $__internal_e532541ff13e40eec1bf8abef6c7ec1344f6bbd9c1301fe8b5cf0050fafe09f2->enter($__internal_e532541ff13e40eec1bf8abef6c7ec1344f6bbd9c1301fe8b5cf0050fafe09f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e532541ff13e40eec1bf8abef6c7ec1344f6bbd9c1301fe8b5cf0050fafe09f2->leave($__internal_e532541ff13e40eec1bf8abef6c7ec1344f6bbd9c1301fe8b5cf0050fafe09f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
