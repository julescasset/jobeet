<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e27b50ea6d797da3ebc3c137d332cad5ac5ea2d5af97596c4551f4e008498990 extends Twig_Template
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
        $__internal_c5e0443a993c41c923517619d1e7d3d30aa2e612ccc23458f89c32e7575afe5c = $this->env->getExtension("native_profiler");
        $__internal_c5e0443a993c41c923517619d1e7d3d30aa2e612ccc23458f89c32e7575afe5c->enter($__internal_c5e0443a993c41c923517619d1e7d3d30aa2e612ccc23458f89c32e7575afe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c5e0443a993c41c923517619d1e7d3d30aa2e612ccc23458f89c32e7575afe5c->leave($__internal_c5e0443a993c41c923517619d1e7d3d30aa2e612ccc23458f89c32e7575afe5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
