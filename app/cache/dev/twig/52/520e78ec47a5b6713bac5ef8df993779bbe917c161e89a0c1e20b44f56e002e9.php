<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fc3cd414875162599e0bd93c4ce757d0c418f53604d0877080e213f79e72898b extends Twig_Template
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
        $__internal_74bc348e4f07741f1a0d12a7cde885ad49e9172c75359d673694846ac21ffec4 = $this->env->getExtension("native_profiler");
        $__internal_74bc348e4f07741f1a0d12a7cde885ad49e9172c75359d673694846ac21ffec4->enter($__internal_74bc348e4f07741f1a0d12a7cde885ad49e9172c75359d673694846ac21ffec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_74bc348e4f07741f1a0d12a7cde885ad49e9172c75359d673694846ac21ffec4->leave($__internal_74bc348e4f07741f1a0d12a7cde885ad49e9172c75359d673694846ac21ffec4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
