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
        $__internal_e46efcd3106df464a429fdf1bc57ba4338eecc80ca8d63146f9d16194559d6a8 = $this->env->getExtension("native_profiler");
        $__internal_e46efcd3106df464a429fdf1bc57ba4338eecc80ca8d63146f9d16194559d6a8->enter($__internal_e46efcd3106df464a429fdf1bc57ba4338eecc80ca8d63146f9d16194559d6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e46efcd3106df464a429fdf1bc57ba4338eecc80ca8d63146f9d16194559d6a8->leave($__internal_e46efcd3106df464a429fdf1bc57ba4338eecc80ca8d63146f9d16194559d6a8_prof);

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
