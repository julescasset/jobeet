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
        $__internal_0d95bcca90e37547229596ea2abf574bbb21d1f8bbd5e54ff1a11cffa00fbb41 = $this->env->getExtension("native_profiler");
        $__internal_0d95bcca90e37547229596ea2abf574bbb21d1f8bbd5e54ff1a11cffa00fbb41->enter($__internal_0d95bcca90e37547229596ea2abf574bbb21d1f8bbd5e54ff1a11cffa00fbb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0d95bcca90e37547229596ea2abf574bbb21d1f8bbd5e54ff1a11cffa00fbb41->leave($__internal_0d95bcca90e37547229596ea2abf574bbb21d1f8bbd5e54ff1a11cffa00fbb41_prof);

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
