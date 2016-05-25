<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_b02725eb684e3b9d014b9fbf39063afc6b997910ef57f23708cd2e3e2f428c96 extends Twig_Template
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
        $__internal_6e59dd3b0541736aec3b68d79eaebbdf8afa9e9964974912e31ddd5015223b68 = $this->env->getExtension("native_profiler");
        $__internal_6e59dd3b0541736aec3b68d79eaebbdf8afa9e9964974912e31ddd5015223b68->enter($__internal_6e59dd3b0541736aec3b68d79eaebbdf8afa9e9964974912e31ddd5015223b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6e59dd3b0541736aec3b68d79eaebbdf8afa9e9964974912e31ddd5015223b68->leave($__internal_6e59dd3b0541736aec3b68d79eaebbdf8afa9e9964974912e31ddd5015223b68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
