<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_f1b2cb9d5530e806c24b7d7c4e14ec390becbf939afed5232d3e978676fec79f extends Twig_Template
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
        $__internal_3eee304bda9004cc6403cdba5ceef0e4d2876a9aa3ba45d800f4ce51c2706a38 = $this->env->getExtension("native_profiler");
        $__internal_3eee304bda9004cc6403cdba5ceef0e4d2876a9aa3ba45d800f4ce51c2706a38->enter($__internal_3eee304bda9004cc6403cdba5ceef0e4d2876a9aa3ba45d800f4ce51c2706a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3eee304bda9004cc6403cdba5ceef0e4d2876a9aa3ba45d800f4ce51c2706a38->leave($__internal_3eee304bda9004cc6403cdba5ceef0e4d2876a9aa3ba45d800f4ce51c2706a38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
