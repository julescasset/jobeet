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
        $__internal_efd46b32f6a4fd56ab6f53d9a9b9aa1a46550967f9ce3613da455c577a331811 = $this->env->getExtension("native_profiler");
        $__internal_efd46b32f6a4fd56ab6f53d9a9b9aa1a46550967f9ce3613da455c577a331811->enter($__internal_efd46b32f6a4fd56ab6f53d9a9b9aa1a46550967f9ce3613da455c577a331811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_efd46b32f6a4fd56ab6f53d9a9b9aa1a46550967f9ce3613da455c577a331811->leave($__internal_efd46b32f6a4fd56ab6f53d9a9b9aa1a46550967f9ce3613da455c577a331811_prof);

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
