<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_239ae82e1c0b740d1a133a7bae1394c8e3105706f08a2c85b0cf56f2822e1bde extends Twig_Template
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
        $__internal_9d0f72393d05d3e532b66a22fde13f4b62d2fd7d8c48bc166dedd867286c13f0 = $this->env->getExtension("native_profiler");
        $__internal_9d0f72393d05d3e532b66a22fde13f4b62d2fd7d8c48bc166dedd867286c13f0->enter($__internal_9d0f72393d05d3e532b66a22fde13f4b62d2fd7d8c48bc166dedd867286c13f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9d0f72393d05d3e532b66a22fde13f4b62d2fd7d8c48bc166dedd867286c13f0->leave($__internal_9d0f72393d05d3e532b66a22fde13f4b62d2fd7d8c48bc166dedd867286c13f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
