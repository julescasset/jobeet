<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_da1f6988d0701f30cbb7260fd1827eefcdfecf0e54700222715832535f64b51e extends Twig_Template
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
        $__internal_4a2f2bd98ba65587d3cf7431125fea46cd04d92db92cba656f734ee37ff9a94d = $this->env->getExtension("native_profiler");
        $__internal_4a2f2bd98ba65587d3cf7431125fea46cd04d92db92cba656f734ee37ff9a94d->enter($__internal_4a2f2bd98ba65587d3cf7431125fea46cd04d92db92cba656f734ee37ff9a94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4a2f2bd98ba65587d3cf7431125fea46cd04d92db92cba656f734ee37ff9a94d->leave($__internal_4a2f2bd98ba65587d3cf7431125fea46cd04d92db92cba656f734ee37ff9a94d_prof);

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
