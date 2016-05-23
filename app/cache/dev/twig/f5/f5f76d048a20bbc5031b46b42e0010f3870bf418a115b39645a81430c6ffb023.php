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
        $__internal_acdfd4f27d71b8d32ed72303eb304640507ea9cae807190bb40bd51658cb5852 = $this->env->getExtension("native_profiler");
        $__internal_acdfd4f27d71b8d32ed72303eb304640507ea9cae807190bb40bd51658cb5852->enter($__internal_acdfd4f27d71b8d32ed72303eb304640507ea9cae807190bb40bd51658cb5852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_acdfd4f27d71b8d32ed72303eb304640507ea9cae807190bb40bd51658cb5852->leave($__internal_acdfd4f27d71b8d32ed72303eb304640507ea9cae807190bb40bd51658cb5852_prof);

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
