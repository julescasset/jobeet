<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_7ea225dca47ca20818f5b36064b14ce0422e4f4a1955ea3d70d881308f888e5d extends Twig_Template
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
        $__internal_4166372c77cbe8d4b82098e9945cbfff4533649bd924408616a1f480ef3851fd = $this->env->getExtension("native_profiler");
        $__internal_4166372c77cbe8d4b82098e9945cbfff4533649bd924408616a1f480ef3851fd->enter($__internal_4166372c77cbe8d4b82098e9945cbfff4533649bd924408616a1f480ef3851fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4166372c77cbe8d4b82098e9945cbfff4533649bd924408616a1f480ef3851fd->leave($__internal_4166372c77cbe8d4b82098e9945cbfff4533649bd924408616a1f480ef3851fd_prof);

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
