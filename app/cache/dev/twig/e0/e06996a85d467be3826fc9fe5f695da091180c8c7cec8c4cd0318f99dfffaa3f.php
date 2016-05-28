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
        $__internal_d09edb6cc415a5dfd15e2e81e144da0208052479b5d9a6699647876ee0d149fa = $this->env->getExtension("native_profiler");
        $__internal_d09edb6cc415a5dfd15e2e81e144da0208052479b5d9a6699647876ee0d149fa->enter($__internal_d09edb6cc415a5dfd15e2e81e144da0208052479b5d9a6699647876ee0d149fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d09edb6cc415a5dfd15e2e81e144da0208052479b5d9a6699647876ee0d149fa->leave($__internal_d09edb6cc415a5dfd15e2e81e144da0208052479b5d9a6699647876ee0d149fa_prof);

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
