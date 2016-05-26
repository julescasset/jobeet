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
        $__internal_64de0bd10f684669a014ba9bdc77d0cf9550fb08805c6f145d6c412e38188485 = $this->env->getExtension("native_profiler");
        $__internal_64de0bd10f684669a014ba9bdc77d0cf9550fb08805c6f145d6c412e38188485->enter($__internal_64de0bd10f684669a014ba9bdc77d0cf9550fb08805c6f145d6c412e38188485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_64de0bd10f684669a014ba9bdc77d0cf9550fb08805c6f145d6c412e38188485->leave($__internal_64de0bd10f684669a014ba9bdc77d0cf9550fb08805c6f145d6c412e38188485_prof);

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
