<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8e6b8e3f5e00bfb132a7fde37c8fc6ca784f3c007fdb54d50821ea284f2d6fae extends Twig_Template
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
        $__internal_7828b9cf50d15283cc908e4db343e72e515c5e3ee563da79322159015388421f = $this->env->getExtension("native_profiler");
        $__internal_7828b9cf50d15283cc908e4db343e72e515c5e3ee563da79322159015388421f->enter($__internal_7828b9cf50d15283cc908e4db343e72e515c5e3ee563da79322159015388421f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7828b9cf50d15283cc908e4db343e72e515c5e3ee563da79322159015388421f->leave($__internal_7828b9cf50d15283cc908e4db343e72e515c5e3ee563da79322159015388421f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
