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
        $__internal_b63c4f3b3eda691da6be0a04dece06c089f57773ab10b217738b0a9de79d457c = $this->env->getExtension("native_profiler");
        $__internal_b63c4f3b3eda691da6be0a04dece06c089f57773ab10b217738b0a9de79d457c->enter($__internal_b63c4f3b3eda691da6be0a04dece06c089f57773ab10b217738b0a9de79d457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b63c4f3b3eda691da6be0a04dece06c089f57773ab10b217738b0a9de79d457c->leave($__internal_b63c4f3b3eda691da6be0a04dece06c089f57773ab10b217738b0a9de79d457c_prof);

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
