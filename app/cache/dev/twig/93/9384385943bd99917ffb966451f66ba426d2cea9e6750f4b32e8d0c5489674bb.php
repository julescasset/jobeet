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
        $__internal_ab5ef2d93356d823d99ddf077ff8e29a4138ec949b6386da4e440d1f96a67df0 = $this->env->getExtension("native_profiler");
        $__internal_ab5ef2d93356d823d99ddf077ff8e29a4138ec949b6386da4e440d1f96a67df0->enter($__internal_ab5ef2d93356d823d99ddf077ff8e29a4138ec949b6386da4e440d1f96a67df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ab5ef2d93356d823d99ddf077ff8e29a4138ec949b6386da4e440d1f96a67df0->leave($__internal_ab5ef2d93356d823d99ddf077ff8e29a4138ec949b6386da4e440d1f96a67df0_prof);

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
