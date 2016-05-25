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
        $__internal_5284efc7c1accef848816d1379dcdab2f2a20c60f70ed2955a41bf32d2b6fd70 = $this->env->getExtension("native_profiler");
        $__internal_5284efc7c1accef848816d1379dcdab2f2a20c60f70ed2955a41bf32d2b6fd70->enter($__internal_5284efc7c1accef848816d1379dcdab2f2a20c60f70ed2955a41bf32d2b6fd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5284efc7c1accef848816d1379dcdab2f2a20c60f70ed2955a41bf32d2b6fd70->leave($__internal_5284efc7c1accef848816d1379dcdab2f2a20c60f70ed2955a41bf32d2b6fd70_prof);

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
