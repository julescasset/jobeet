<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_39200ae5c1649474c06611dad8bc62f58a70472902b0a9471cc13ddc94eda2cf extends Twig_Template
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
        $__internal_0d799415b664c079cdf0e5b9b5ddd87bcbfa7517b2bff3e2eb2c3eefa90af9ae = $this->env->getExtension("native_profiler");
        $__internal_0d799415b664c079cdf0e5b9b5ddd87bcbfa7517b2bff3e2eb2c3eefa90af9ae->enter($__internal_0d799415b664c079cdf0e5b9b5ddd87bcbfa7517b2bff3e2eb2c3eefa90af9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_0d799415b664c079cdf0e5b9b5ddd87bcbfa7517b2bff3e2eb2c3eefa90af9ae->leave($__internal_0d799415b664c079cdf0e5b9b5ddd87bcbfa7517b2bff3e2eb2c3eefa90af9ae_prof);

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
