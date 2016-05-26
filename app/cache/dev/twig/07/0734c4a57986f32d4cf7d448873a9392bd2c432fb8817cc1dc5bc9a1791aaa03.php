<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_db5713f1c9b1a76681287b0a0e5b48d26547a264960fe58e624ecaed1049214d extends Twig_Template
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
        $__internal_497e657071c04c01d0871735f8f321627ab90ce582fd660960b4b1817b3565d7 = $this->env->getExtension("native_profiler");
        $__internal_497e657071c04c01d0871735f8f321627ab90ce582fd660960b4b1817b3565d7->enter($__internal_497e657071c04c01d0871735f8f321627ab90ce582fd660960b4b1817b3565d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_497e657071c04c01d0871735f8f321627ab90ce582fd660960b4b1817b3565d7->leave($__internal_497e657071c04c01d0871735f8f321627ab90ce582fd660960b4b1817b3565d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
