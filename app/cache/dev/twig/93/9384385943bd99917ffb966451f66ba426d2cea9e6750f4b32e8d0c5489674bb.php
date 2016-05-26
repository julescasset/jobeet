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
        $__internal_1bf5708ac50bf47e01ad1a5c57d74ef477dc4f3fef842f2b798ace71b4591ea1 = $this->env->getExtension("native_profiler");
        $__internal_1bf5708ac50bf47e01ad1a5c57d74ef477dc4f3fef842f2b798ace71b4591ea1->enter($__internal_1bf5708ac50bf47e01ad1a5c57d74ef477dc4f3fef842f2b798ace71b4591ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_1bf5708ac50bf47e01ad1a5c57d74ef477dc4f3fef842f2b798ace71b4591ea1->leave($__internal_1bf5708ac50bf47e01ad1a5c57d74ef477dc4f3fef842f2b798ace71b4591ea1_prof);

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
