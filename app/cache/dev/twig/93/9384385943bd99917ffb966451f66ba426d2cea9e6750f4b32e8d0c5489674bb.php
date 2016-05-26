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
        $__internal_21956df7eb21ef6b378b0154cd46def7532ca8773b7276af409a3cd9e5aef81d = $this->env->getExtension("native_profiler");
        $__internal_21956df7eb21ef6b378b0154cd46def7532ca8773b7276af409a3cd9e5aef81d->enter($__internal_21956df7eb21ef6b378b0154cd46def7532ca8773b7276af409a3cd9e5aef81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_21956df7eb21ef6b378b0154cd46def7532ca8773b7276af409a3cd9e5aef81d->leave($__internal_21956df7eb21ef6b378b0154cd46def7532ca8773b7276af409a3cd9e5aef81d_prof);

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
