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
        $__internal_7deab8b57cfa7cd989040152da06ee78d2a4a7c64f72b9110f3cf90e5cf880d6 = $this->env->getExtension("native_profiler");
        $__internal_7deab8b57cfa7cd989040152da06ee78d2a4a7c64f72b9110f3cf90e5cf880d6->enter($__internal_7deab8b57cfa7cd989040152da06ee78d2a4a7c64f72b9110f3cf90e5cf880d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7deab8b57cfa7cd989040152da06ee78d2a4a7c64f72b9110f3cf90e5cf880d6->leave($__internal_7deab8b57cfa7cd989040152da06ee78d2a4a7c64f72b9110f3cf90e5cf880d6_prof);

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
