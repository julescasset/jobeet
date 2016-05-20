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
        $__internal_0dbd902dc4ebfed1ebc3b1ffaeaf7d419f2daac686f8d03992f0bc2e6de0a888 = $this->env->getExtension("native_profiler");
        $__internal_0dbd902dc4ebfed1ebc3b1ffaeaf7d419f2daac686f8d03992f0bc2e6de0a888->enter($__internal_0dbd902dc4ebfed1ebc3b1ffaeaf7d419f2daac686f8d03992f0bc2e6de0a888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0dbd902dc4ebfed1ebc3b1ffaeaf7d419f2daac686f8d03992f0bc2e6de0a888->leave($__internal_0dbd902dc4ebfed1ebc3b1ffaeaf7d419f2daac686f8d03992f0bc2e6de0a888_prof);

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
