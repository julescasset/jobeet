<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_810bbd3ca6bafe4cb322b2f945e7d82b41c62349b524155db60fb5171148aff0 extends Twig_Template
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
        $__internal_50df22ed793e2600558b4e85d09f7f7d50ab5f07b5d07af091c9d68090f1eae0 = $this->env->getExtension("native_profiler");
        $__internal_50df22ed793e2600558b4e85d09f7f7d50ab5f07b5d07af091c9d68090f1eae0->enter($__internal_50df22ed793e2600558b4e85d09f7f7d50ab5f07b5d07af091c9d68090f1eae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_50df22ed793e2600558b4e85d09f7f7d50ab5f07b5d07af091c9d68090f1eae0->leave($__internal_50df22ed793e2600558b4e85d09f7f7d50ab5f07b5d07af091c9d68090f1eae0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
