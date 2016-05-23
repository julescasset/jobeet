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
        $__internal_75750fca96f0e0d7a67a79ace05bc71bcd7eec9442f03dff59882f1f5fc470c4 = $this->env->getExtension("native_profiler");
        $__internal_75750fca96f0e0d7a67a79ace05bc71bcd7eec9442f03dff59882f1f5fc470c4->enter($__internal_75750fca96f0e0d7a67a79ace05bc71bcd7eec9442f03dff59882f1f5fc470c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_75750fca96f0e0d7a67a79ace05bc71bcd7eec9442f03dff59882f1f5fc470c4->leave($__internal_75750fca96f0e0d7a67a79ace05bc71bcd7eec9442f03dff59882f1f5fc470c4_prof);

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
