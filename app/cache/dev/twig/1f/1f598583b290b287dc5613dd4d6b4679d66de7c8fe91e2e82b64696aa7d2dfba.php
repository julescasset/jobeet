<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_307786920eec0f9f2017178e0d96acd958a4892de61271fd5df9fd526b1e7989 extends Twig_Template
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
        $__internal_afb40916e9c5e7a26eac5389e7ada290a768ff536801d35a6f77809337c0abe0 = $this->env->getExtension("native_profiler");
        $__internal_afb40916e9c5e7a26eac5389e7ada290a768ff536801d35a6f77809337c0abe0->enter($__internal_afb40916e9c5e7a26eac5389e7ada290a768ff536801d35a6f77809337c0abe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_afb40916e9c5e7a26eac5389e7ada290a768ff536801d35a6f77809337c0abe0->leave($__internal_afb40916e9c5e7a26eac5389e7ada290a768ff536801d35a6f77809337c0abe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
