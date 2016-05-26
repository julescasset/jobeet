<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b11b5bd169c8e51d15f6b750cdfa03163db7d6c2db63331ccd5f1bfbc7d7b16 extends Twig_Template
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
        $__internal_739cbb44d8ff851e7a2719d4de5c1fe307190444713d0d487a8e2b9ed02d4d1d = $this->env->getExtension("native_profiler");
        $__internal_739cbb44d8ff851e7a2719d4de5c1fe307190444713d0d487a8e2b9ed02d4d1d->enter($__internal_739cbb44d8ff851e7a2719d4de5c1fe307190444713d0d487a8e2b9ed02d4d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_739cbb44d8ff851e7a2719d4de5c1fe307190444713d0d487a8e2b9ed02d4d1d->leave($__internal_739cbb44d8ff851e7a2719d4de5c1fe307190444713d0d487a8e2b9ed02d4d1d_prof);

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
