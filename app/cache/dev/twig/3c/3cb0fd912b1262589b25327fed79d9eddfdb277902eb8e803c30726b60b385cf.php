<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9290838761a74446b2b5dc866f31ae478deb416602afbecc5832cbaf25fb5889 extends Twig_Template
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
        $__internal_1ed55cb72f31bc1eb966de19cb38bda80bf73b0b3430b37dc5bd7bb541a1f707 = $this->env->getExtension("native_profiler");
        $__internal_1ed55cb72f31bc1eb966de19cb38bda80bf73b0b3430b37dc5bd7bb541a1f707->enter($__internal_1ed55cb72f31bc1eb966de19cb38bda80bf73b0b3430b37dc5bd7bb541a1f707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1ed55cb72f31bc1eb966de19cb38bda80bf73b0b3430b37dc5bd7bb541a1f707->leave($__internal_1ed55cb72f31bc1eb966de19cb38bda80bf73b0b3430b37dc5bd7bb541a1f707_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */