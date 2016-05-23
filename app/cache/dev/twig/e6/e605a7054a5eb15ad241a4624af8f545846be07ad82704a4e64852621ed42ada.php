<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_b7293a2510b5d0d4f691f47012d9c33c33a6543fbe711f96240954e2980fe8af extends Twig_Template
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
        $__internal_d04134c64f63846a7227e3c72703ad385225face8a6b23f27d672cb66c6a3f2e = $this->env->getExtension("native_profiler");
        $__internal_d04134c64f63846a7227e3c72703ad385225face8a6b23f27d672cb66c6a3f2e->enter($__internal_d04134c64f63846a7227e3c72703ad385225face8a6b23f27d672cb66c6a3f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d04134c64f63846a7227e3c72703ad385225face8a6b23f27d672cb66c6a3f2e->leave($__internal_d04134c64f63846a7227e3c72703ad385225face8a6b23f27d672cb66c6a3f2e_prof);

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
