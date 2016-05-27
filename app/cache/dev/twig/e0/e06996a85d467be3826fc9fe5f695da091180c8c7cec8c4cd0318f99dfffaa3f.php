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
        $__internal_c5a9c56cbee9eb9ff6be995097665b57df47471d082630ad8a7c4ccb5c149bcc = $this->env->getExtension("native_profiler");
        $__internal_c5a9c56cbee9eb9ff6be995097665b57df47471d082630ad8a7c4ccb5c149bcc->enter($__internal_c5a9c56cbee9eb9ff6be995097665b57df47471d082630ad8a7c4ccb5c149bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c5a9c56cbee9eb9ff6be995097665b57df47471d082630ad8a7c4ccb5c149bcc->leave($__internal_c5a9c56cbee9eb9ff6be995097665b57df47471d082630ad8a7c4ccb5c149bcc_prof);

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
