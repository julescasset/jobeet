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
        $__internal_ab7a1b4e70f47aa364548a9ce9ec08803d4bf0a6a35d6cfafc0e6133a3f9e4f5 = $this->env->getExtension("native_profiler");
        $__internal_ab7a1b4e70f47aa364548a9ce9ec08803d4bf0a6a35d6cfafc0e6133a3f9e4f5->enter($__internal_ab7a1b4e70f47aa364548a9ce9ec08803d4bf0a6a35d6cfafc0e6133a3f9e4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab7a1b4e70f47aa364548a9ce9ec08803d4bf0a6a35d6cfafc0e6133a3f9e4f5->leave($__internal_ab7a1b4e70f47aa364548a9ce9ec08803d4bf0a6a35d6cfafc0e6133a3f9e4f5_prof);

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
