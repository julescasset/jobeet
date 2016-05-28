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
        $__internal_7cd09e2d036373157a173fc11c83769050ccd20ebaaf33c9e94ba8473a17937f = $this->env->getExtension("native_profiler");
        $__internal_7cd09e2d036373157a173fc11c83769050ccd20ebaaf33c9e94ba8473a17937f->enter($__internal_7cd09e2d036373157a173fc11c83769050ccd20ebaaf33c9e94ba8473a17937f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7cd09e2d036373157a173fc11c83769050ccd20ebaaf33c9e94ba8473a17937f->leave($__internal_7cd09e2d036373157a173fc11c83769050ccd20ebaaf33c9e94ba8473a17937f_prof);

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
