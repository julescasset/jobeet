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
        $__internal_24b7fcdb4205bce76c359183c00f1ed1d2876bfb3b1cf1cb3a9c50ac2294432a = $this->env->getExtension("native_profiler");
        $__internal_24b7fcdb4205bce76c359183c00f1ed1d2876bfb3b1cf1cb3a9c50ac2294432a->enter($__internal_24b7fcdb4205bce76c359183c00f1ed1d2876bfb3b1cf1cb3a9c50ac2294432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_24b7fcdb4205bce76c359183c00f1ed1d2876bfb3b1cf1cb3a9c50ac2294432a->leave($__internal_24b7fcdb4205bce76c359183c00f1ed1d2876bfb3b1cf1cb3a9c50ac2294432a_prof);

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
