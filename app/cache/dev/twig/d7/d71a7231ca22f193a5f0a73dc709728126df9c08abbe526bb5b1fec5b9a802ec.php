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
        $__internal_7c848316ef21e2373fcbcd7e5f5951491fb835c1af7366c343ff409ce0a58f6f = $this->env->getExtension("native_profiler");
        $__internal_7c848316ef21e2373fcbcd7e5f5951491fb835c1af7366c343ff409ce0a58f6f->enter($__internal_7c848316ef21e2373fcbcd7e5f5951491fb835c1af7366c343ff409ce0a58f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7c848316ef21e2373fcbcd7e5f5951491fb835c1af7366c343ff409ce0a58f6f->leave($__internal_7c848316ef21e2373fcbcd7e5f5951491fb835c1af7366c343ff409ce0a58f6f_prof);

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
