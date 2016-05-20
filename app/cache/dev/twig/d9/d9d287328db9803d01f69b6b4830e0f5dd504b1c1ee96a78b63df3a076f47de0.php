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
        $__internal_65998c1c454daba1d6b9e7dc413493c807fe28f98ba1257626623a2894467ca7 = $this->env->getExtension("native_profiler");
        $__internal_65998c1c454daba1d6b9e7dc413493c807fe28f98ba1257626623a2894467ca7->enter($__internal_65998c1c454daba1d6b9e7dc413493c807fe28f98ba1257626623a2894467ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_65998c1c454daba1d6b9e7dc413493c807fe28f98ba1257626623a2894467ca7->leave($__internal_65998c1c454daba1d6b9e7dc413493c807fe28f98ba1257626623a2894467ca7_prof);

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
