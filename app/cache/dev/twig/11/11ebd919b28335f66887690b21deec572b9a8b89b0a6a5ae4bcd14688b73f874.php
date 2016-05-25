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
        $__internal_fc953ad6f55bf4fec8af3ea090f139abec561d0b7cc7399cc5e7fda0dc4e2f1d = $this->env->getExtension("native_profiler");
        $__internal_fc953ad6f55bf4fec8af3ea090f139abec561d0b7cc7399cc5e7fda0dc4e2f1d->enter($__internal_fc953ad6f55bf4fec8af3ea090f139abec561d0b7cc7399cc5e7fda0dc4e2f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_fc953ad6f55bf4fec8af3ea090f139abec561d0b7cc7399cc5e7fda0dc4e2f1d->leave($__internal_fc953ad6f55bf4fec8af3ea090f139abec561d0b7cc7399cc5e7fda0dc4e2f1d_prof);

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
