<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e9fd2876d3f08bb1d3d12f58f6242881361f008631d2faa7ddd2065e84734505 extends Twig_Template
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
        $__internal_c444acc57df479e915c7627cd0d75550e48ef60cae4936aa6a460b6af955c504 = $this->env->getExtension("native_profiler");
        $__internal_c444acc57df479e915c7627cd0d75550e48ef60cae4936aa6a460b6af955c504->enter($__internal_c444acc57df479e915c7627cd0d75550e48ef60cae4936aa6a460b6af955c504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c444acc57df479e915c7627cd0d75550e48ef60cae4936aa6a460b6af955c504->leave($__internal_c444acc57df479e915c7627cd0d75550e48ef60cae4936aa6a460b6af955c504_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
