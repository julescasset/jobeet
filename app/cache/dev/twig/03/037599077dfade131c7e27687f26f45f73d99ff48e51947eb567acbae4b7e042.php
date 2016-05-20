<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5319097dae7fc6ff78d7be7e9bf897970cf018fa2024e9818e04647d418385d2 extends Twig_Template
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
        $__internal_1def68919c0dda6c060f121480495ea5472409f7db36c1958466ced44c28c27f = $this->env->getExtension("native_profiler");
        $__internal_1def68919c0dda6c060f121480495ea5472409f7db36c1958466ced44c28c27f->enter($__internal_1def68919c0dda6c060f121480495ea5472409f7db36c1958466ced44c28c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1def68919c0dda6c060f121480495ea5472409f7db36c1958466ced44c28c27f->leave($__internal_1def68919c0dda6c060f121480495ea5472409f7db36c1958466ced44c28c27f_prof);

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
