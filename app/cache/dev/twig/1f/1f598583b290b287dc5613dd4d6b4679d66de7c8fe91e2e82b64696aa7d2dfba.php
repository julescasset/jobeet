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
        $__internal_461511e0cbf13e4268408e7b2a3f9a0c4b15c677dc43cad2e9499442dc9a322c = $this->env->getExtension("native_profiler");
        $__internal_461511e0cbf13e4268408e7b2a3f9a0c4b15c677dc43cad2e9499442dc9a322c->enter($__internal_461511e0cbf13e4268408e7b2a3f9a0c4b15c677dc43cad2e9499442dc9a322c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_461511e0cbf13e4268408e7b2a3f9a0c4b15c677dc43cad2e9499442dc9a322c->leave($__internal_461511e0cbf13e4268408e7b2a3f9a0c4b15c677dc43cad2e9499442dc9a322c_prof);

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
