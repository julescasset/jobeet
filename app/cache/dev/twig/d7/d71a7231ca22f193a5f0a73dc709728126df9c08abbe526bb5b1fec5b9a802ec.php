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
        $__internal_2762106ea2e5b7f7893bfefa97131c867149fcee16232c64c8c7f40792ff688b = $this->env->getExtension("native_profiler");
        $__internal_2762106ea2e5b7f7893bfefa97131c867149fcee16232c64c8c7f40792ff688b->enter($__internal_2762106ea2e5b7f7893bfefa97131c867149fcee16232c64c8c7f40792ff688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2762106ea2e5b7f7893bfefa97131c867149fcee16232c64c8c7f40792ff688b->leave($__internal_2762106ea2e5b7f7893bfefa97131c867149fcee16232c64c8c7f40792ff688b_prof);

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
