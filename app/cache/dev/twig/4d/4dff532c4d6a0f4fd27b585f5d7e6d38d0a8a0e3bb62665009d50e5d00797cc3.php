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
        $__internal_00331e3f7bdb437ec923da1a836c5239cd1512d4da8683ec29729c6e451e885b = $this->env->getExtension("native_profiler");
        $__internal_00331e3f7bdb437ec923da1a836c5239cd1512d4da8683ec29729c6e451e885b->enter($__internal_00331e3f7bdb437ec923da1a836c5239cd1512d4da8683ec29729c6e451e885b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_00331e3f7bdb437ec923da1a836c5239cd1512d4da8683ec29729c6e451e885b->leave($__internal_00331e3f7bdb437ec923da1a836c5239cd1512d4da8683ec29729c6e451e885b_prof);

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
