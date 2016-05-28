<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_60490187c582056bc4261db2d6b8e8b81aa29e0fc7e42d5fb987423944bee0c4 extends Twig_Template
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
        $__internal_7706fe1ceee42bda5ade8f219213ee666cf7a64001389acb08f56042f093b78e = $this->env->getExtension("native_profiler");
        $__internal_7706fe1ceee42bda5ade8f219213ee666cf7a64001389acb08f56042f093b78e->enter($__internal_7706fe1ceee42bda5ade8f219213ee666cf7a64001389acb08f56042f093b78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7706fe1ceee42bda5ade8f219213ee666cf7a64001389acb08f56042f093b78e->leave($__internal_7706fe1ceee42bda5ade8f219213ee666cf7a64001389acb08f56042f093b78e_prof);

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
