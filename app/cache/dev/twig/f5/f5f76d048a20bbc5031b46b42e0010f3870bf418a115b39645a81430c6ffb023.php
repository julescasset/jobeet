<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_4065ec1a06c2d0b35d4aa808808f342413def0e0137dcaeb6d5ac17594ae975c extends Twig_Template
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
        $__internal_1da51b58426b6bd86ef0fd15c39382f43b9e9f0be99a33efa528d9f4d71b3e37 = $this->env->getExtension("native_profiler");
        $__internal_1da51b58426b6bd86ef0fd15c39382f43b9e9f0be99a33efa528d9f4d71b3e37->enter($__internal_1da51b58426b6bd86ef0fd15c39382f43b9e9f0be99a33efa528d9f4d71b3e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1da51b58426b6bd86ef0fd15c39382f43b9e9f0be99a33efa528d9f4d71b3e37->leave($__internal_1da51b58426b6bd86ef0fd15c39382f43b9e9f0be99a33efa528d9f4d71b3e37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
