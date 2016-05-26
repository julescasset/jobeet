<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_071024c808b9ae6d4e6354b591c43f9f0d0f520faaf28379457b1590db9eec4b extends Twig_Template
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
        $__internal_1379d48594869c946b4214fd6152c61d327a6b35ae56b2506803422d7edb1cf0 = $this->env->getExtension("native_profiler");
        $__internal_1379d48594869c946b4214fd6152c61d327a6b35ae56b2506803422d7edb1cf0->enter($__internal_1379d48594869c946b4214fd6152c61d327a6b35ae56b2506803422d7edb1cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1379d48594869c946b4214fd6152c61d327a6b35ae56b2506803422d7edb1cf0->leave($__internal_1379d48594869c946b4214fd6152c61d327a6b35ae56b2506803422d7edb1cf0_prof);

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
