<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_022778f74fba9b3b1feab01199636883fde38a0bdb7f5602d8b2c8880a13a97c extends Twig_Template
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
        $__internal_3bc76a53a52b338be3d2064b53ced52c0a5e1951e940c22b8603a6d1ba950a16 = $this->env->getExtension("native_profiler");
        $__internal_3bc76a53a52b338be3d2064b53ced52c0a5e1951e940c22b8603a6d1ba950a16->enter($__internal_3bc76a53a52b338be3d2064b53ced52c0a5e1951e940c22b8603a6d1ba950a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3bc76a53a52b338be3d2064b53ced52c0a5e1951e940c22b8603a6d1ba950a16->leave($__internal_3bc76a53a52b338be3d2064b53ced52c0a5e1951e940c22b8603a6d1ba950a16_prof);

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
