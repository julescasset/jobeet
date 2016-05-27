<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_32bfaf8c00ed5b17987071b7d613dfad6845317505ff209c96adbc50421917b7 extends Twig_Template
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
        $__internal_183c161d4871a15247cb8456566128457fdc40b64d1954a2d82f02ff61b17d16 = $this->env->getExtension("native_profiler");
        $__internal_183c161d4871a15247cb8456566128457fdc40b64d1954a2d82f02ff61b17d16->enter($__internal_183c161d4871a15247cb8456566128457fdc40b64d1954a2d82f02ff61b17d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_183c161d4871a15247cb8456566128457fdc40b64d1954a2d82f02ff61b17d16->leave($__internal_183c161d4871a15247cb8456566128457fdc40b64d1954a2d82f02ff61b17d16_prof);

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
