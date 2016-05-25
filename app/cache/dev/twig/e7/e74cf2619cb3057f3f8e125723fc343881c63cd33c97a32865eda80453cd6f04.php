<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b45996ab19f69fa25a4975fe4c8f2962d2603c7fd683ab7be72c9bb35cc8ad9d extends Twig_Template
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
        $__internal_c856dd771476390f0ddca5d7d28a40d28cd72b3b901c9d1cd53112ef8388099c = $this->env->getExtension("native_profiler");
        $__internal_c856dd771476390f0ddca5d7d28a40d28cd72b3b901c9d1cd53112ef8388099c->enter($__internal_c856dd771476390f0ddca5d7d28a40d28cd72b3b901c9d1cd53112ef8388099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c856dd771476390f0ddca5d7d28a40d28cd72b3b901c9d1cd53112ef8388099c->leave($__internal_c856dd771476390f0ddca5d7d28a40d28cd72b3b901c9d1cd53112ef8388099c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
