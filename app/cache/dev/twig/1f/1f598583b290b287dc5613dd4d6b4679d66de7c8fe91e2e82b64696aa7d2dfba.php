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
        $__internal_d9a65a4420e98f42e7285c3209b1211465f10cc66ca5dd35314249f5a6ba1324 = $this->env->getExtension("native_profiler");
        $__internal_d9a65a4420e98f42e7285c3209b1211465f10cc66ca5dd35314249f5a6ba1324->enter($__internal_d9a65a4420e98f42e7285c3209b1211465f10cc66ca5dd35314249f5a6ba1324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d9a65a4420e98f42e7285c3209b1211465f10cc66ca5dd35314249f5a6ba1324->leave($__internal_d9a65a4420e98f42e7285c3209b1211465f10cc66ca5dd35314249f5a6ba1324_prof);

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
