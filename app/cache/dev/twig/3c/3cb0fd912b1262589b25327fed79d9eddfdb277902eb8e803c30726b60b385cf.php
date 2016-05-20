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
        $__internal_0816d1f791353566e47b42e07d074172cea3246ef4f1da191b7580569ef5068a = $this->env->getExtension("native_profiler");
        $__internal_0816d1f791353566e47b42e07d074172cea3246ef4f1da191b7580569ef5068a->enter($__internal_0816d1f791353566e47b42e07d074172cea3246ef4f1da191b7580569ef5068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0816d1f791353566e47b42e07d074172cea3246ef4f1da191b7580569ef5068a->leave($__internal_0816d1f791353566e47b42e07d074172cea3246ef4f1da191b7580569ef5068a_prof);

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
