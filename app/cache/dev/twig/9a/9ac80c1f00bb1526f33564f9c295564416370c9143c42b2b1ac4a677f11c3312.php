<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_75bf290cb453e063e474c62867d8ae58726b310fc79642ef3f41eb9eb8b8f44f extends Twig_Template
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
        $__internal_c7d29b43c954da5285da55f4cf0ffae9dcaf9c8c7ddc5532ee302d852189f2d3 = $this->env->getExtension("native_profiler");
        $__internal_c7d29b43c954da5285da55f4cf0ffae9dcaf9c8c7ddc5532ee302d852189f2d3->enter($__internal_c7d29b43c954da5285da55f4cf0ffae9dcaf9c8c7ddc5532ee302d852189f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c7d29b43c954da5285da55f4cf0ffae9dcaf9c8c7ddc5532ee302d852189f2d3->leave($__internal_c7d29b43c954da5285da55f4cf0ffae9dcaf9c8c7ddc5532ee302d852189f2d3_prof);

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
