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
        $__internal_b97fa2cdfdcc34ad18dc6e7aa526614edb0b030d28f61cb474818dc70b7678be = $this->env->getExtension("native_profiler");
        $__internal_b97fa2cdfdcc34ad18dc6e7aa526614edb0b030d28f61cb474818dc70b7678be->enter($__internal_b97fa2cdfdcc34ad18dc6e7aa526614edb0b030d28f61cb474818dc70b7678be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b97fa2cdfdcc34ad18dc6e7aa526614edb0b030d28f61cb474818dc70b7678be->leave($__internal_b97fa2cdfdcc34ad18dc6e7aa526614edb0b030d28f61cb474818dc70b7678be_prof);

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
