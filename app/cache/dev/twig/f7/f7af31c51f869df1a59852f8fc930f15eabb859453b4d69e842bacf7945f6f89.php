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
        $__internal_86f0c486e7e8078973ac0ac7a75181fe095ca93b75f0122a0489c4b8eb3a7df6 = $this->env->getExtension("native_profiler");
        $__internal_86f0c486e7e8078973ac0ac7a75181fe095ca93b75f0122a0489c4b8eb3a7df6->enter($__internal_86f0c486e7e8078973ac0ac7a75181fe095ca93b75f0122a0489c4b8eb3a7df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_86f0c486e7e8078973ac0ac7a75181fe095ca93b75f0122a0489c4b8eb3a7df6->leave($__internal_86f0c486e7e8078973ac0ac7a75181fe095ca93b75f0122a0489c4b8eb3a7df6_prof);

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
