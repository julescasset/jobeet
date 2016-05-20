<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7e0a739b4687c9ab1d1499b1366be51ee7d67792d530f14fafc2e8ef0a063f2a extends Twig_Template
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
        $__internal_a655f55bc7b02ceaaaf418cd92604c4d81d3606a279fde76760ba51c350449a8 = $this->env->getExtension("native_profiler");
        $__internal_a655f55bc7b02ceaaaf418cd92604c4d81d3606a279fde76760ba51c350449a8->enter($__internal_a655f55bc7b02ceaaaf418cd92604c4d81d3606a279fde76760ba51c350449a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a655f55bc7b02ceaaaf418cd92604c4d81d3606a279fde76760ba51c350449a8->leave($__internal_a655f55bc7b02ceaaaf418cd92604c4d81d3606a279fde76760ba51c350449a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
