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
        $__internal_91e4e361f0fa9709aa0e86a4ad945250eda10b66d85a6f2749d8fb330a816f79 = $this->env->getExtension("native_profiler");
        $__internal_91e4e361f0fa9709aa0e86a4ad945250eda10b66d85a6f2749d8fb330a816f79->enter($__internal_91e4e361f0fa9709aa0e86a4ad945250eda10b66d85a6f2749d8fb330a816f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_91e4e361f0fa9709aa0e86a4ad945250eda10b66d85a6f2749d8fb330a816f79->leave($__internal_91e4e361f0fa9709aa0e86a4ad945250eda10b66d85a6f2749d8fb330a816f79_prof);

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
