<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9f919c33a75972f36f0f3f6338614f461df5540c655ea8c54ca1ffd73ab7bd68 extends Twig_Template
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
        $__internal_ed625709609b5f70622e36a8e6ca7a645f3ab430ca1edf6c0d27669a12195110 = $this->env->getExtension("native_profiler");
        $__internal_ed625709609b5f70622e36a8e6ca7a645f3ab430ca1edf6c0d27669a12195110->enter($__internal_ed625709609b5f70622e36a8e6ca7a645f3ab430ca1edf6c0d27669a12195110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ed625709609b5f70622e36a8e6ca7a645f3ab430ca1edf6c0d27669a12195110->leave($__internal_ed625709609b5f70622e36a8e6ca7a645f3ab430ca1edf6c0d27669a12195110_prof);

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
