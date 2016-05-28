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
        $__internal_47b316fc2a0710ce2c4cabd69b64d20ff11b492414fc60599350834a8f0dd8e8 = $this->env->getExtension("native_profiler");
        $__internal_47b316fc2a0710ce2c4cabd69b64d20ff11b492414fc60599350834a8f0dd8e8->enter($__internal_47b316fc2a0710ce2c4cabd69b64d20ff11b492414fc60599350834a8f0dd8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_47b316fc2a0710ce2c4cabd69b64d20ff11b492414fc60599350834a8f0dd8e8->leave($__internal_47b316fc2a0710ce2c4cabd69b64d20ff11b492414fc60599350834a8f0dd8e8_prof);

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
