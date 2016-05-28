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
        $__internal_891d6f94c6d713decf0324780b19f7e19066edc4c4e9c1ae02d832ed93349f4d = $this->env->getExtension("native_profiler");
        $__internal_891d6f94c6d713decf0324780b19f7e19066edc4c4e9c1ae02d832ed93349f4d->enter($__internal_891d6f94c6d713decf0324780b19f7e19066edc4c4e9c1ae02d832ed93349f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_891d6f94c6d713decf0324780b19f7e19066edc4c4e9c1ae02d832ed93349f4d->leave($__internal_891d6f94c6d713decf0324780b19f7e19066edc4c4e9c1ae02d832ed93349f4d_prof);

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
