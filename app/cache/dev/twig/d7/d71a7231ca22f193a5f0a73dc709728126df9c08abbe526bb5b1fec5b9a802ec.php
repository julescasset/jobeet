<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_226fee78d7cdba74b0b8740d116ee35da6c94f0e654e00c6057b5eba1d10adfd extends Twig_Template
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
        $__internal_e964171bd36c2803d4899e39df3c52f87ce0fb234eb887675a338fde161507a6 = $this->env->getExtension("native_profiler");
        $__internal_e964171bd36c2803d4899e39df3c52f87ce0fb234eb887675a338fde161507a6->enter($__internal_e964171bd36c2803d4899e39df3c52f87ce0fb234eb887675a338fde161507a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e964171bd36c2803d4899e39df3c52f87ce0fb234eb887675a338fde161507a6->leave($__internal_e964171bd36c2803d4899e39df3c52f87ce0fb234eb887675a338fde161507a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
