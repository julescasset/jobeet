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
        $__internal_9248f680c9588c07d32654ca6bebaef8ce52547c87f27b455458b28fec8bb25f = $this->env->getExtension("native_profiler");
        $__internal_9248f680c9588c07d32654ca6bebaef8ce52547c87f27b455458b28fec8bb25f->enter($__internal_9248f680c9588c07d32654ca6bebaef8ce52547c87f27b455458b28fec8bb25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9248f680c9588c07d32654ca6bebaef8ce52547c87f27b455458b28fec8bb25f->leave($__internal_9248f680c9588c07d32654ca6bebaef8ce52547c87f27b455458b28fec8bb25f_prof);

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
