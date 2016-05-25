<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7388f43d61d63636cedf2974c0ccdb1ca8c050f0b590e751d6148fadd0b360ea extends Twig_Template
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
        $__internal_e7ab3651673a18b17af8ece96d21abef7f9b5af2edae9a198d98dcf6925d3ba4 = $this->env->getExtension("native_profiler");
        $__internal_e7ab3651673a18b17af8ece96d21abef7f9b5af2edae9a198d98dcf6925d3ba4->enter($__internal_e7ab3651673a18b17af8ece96d21abef7f9b5af2edae9a198d98dcf6925d3ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e7ab3651673a18b17af8ece96d21abef7f9b5af2edae9a198d98dcf6925d3ba4->leave($__internal_e7ab3651673a18b17af8ece96d21abef7f9b5af2edae9a198d98dcf6925d3ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
