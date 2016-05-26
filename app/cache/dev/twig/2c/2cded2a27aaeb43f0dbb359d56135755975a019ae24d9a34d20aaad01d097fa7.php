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
        $__internal_7d3588f385a386f07c9a04aafdf86899f8a0d4ec5bae1ec4c84c206986a33170 = $this->env->getExtension("native_profiler");
        $__internal_7d3588f385a386f07c9a04aafdf86899f8a0d4ec5bae1ec4c84c206986a33170->enter($__internal_7d3588f385a386f07c9a04aafdf86899f8a0d4ec5bae1ec4c84c206986a33170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7d3588f385a386f07c9a04aafdf86899f8a0d4ec5bae1ec4c84c206986a33170->leave($__internal_7d3588f385a386f07c9a04aafdf86899f8a0d4ec5bae1ec4c84c206986a33170_prof);

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
