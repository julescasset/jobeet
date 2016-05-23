<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b9590c6f8815eedfdba9e38a6d42c227b9f135e0d0d29d6b725f37ebd99b5147 extends Twig_Template
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
        $__internal_bf8e063e65e18aac4022394f2097aa317646d24d0c53fda3c1fda68d76904c04 = $this->env->getExtension("native_profiler");
        $__internal_bf8e063e65e18aac4022394f2097aa317646d24d0c53fda3c1fda68d76904c04->enter($__internal_bf8e063e65e18aac4022394f2097aa317646d24d0c53fda3c1fda68d76904c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bf8e063e65e18aac4022394f2097aa317646d24d0c53fda3c1fda68d76904c04->leave($__internal_bf8e063e65e18aac4022394f2097aa317646d24d0c53fda3c1fda68d76904c04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
