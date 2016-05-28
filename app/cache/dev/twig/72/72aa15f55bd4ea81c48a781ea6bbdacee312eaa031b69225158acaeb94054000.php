<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_cf94a0948b754057ad2dbd108df5a516fd5827a1967e045558ee08a48d7fffc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0776e8a0693cdd7266f6f767cb577bb62bd2d93d6d03498e04cb551fcbb62d1 = $this->env->getExtension("native_profiler");
        $__internal_d0776e8a0693cdd7266f6f767cb577bb62bd2d93d6d03498e04cb551fcbb62d1->enter($__internal_d0776e8a0693cdd7266f6f767cb577bb62bd2d93d6d03498e04cb551fcbb62d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0776e8a0693cdd7266f6f767cb577bb62bd2d93d6d03498e04cb551fcbb62d1->leave($__internal_d0776e8a0693cdd7266f6f767cb577bb62bd2d93d6d03498e04cb551fcbb62d1_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_9816d1d8c33dd97d5fe9c5505a7c394c2cc3c2e582624fd1e9af0c0027bd5566 = $this->env->getExtension("native_profiler");
        $__internal_9816d1d8c33dd97d5fe9c5505a7c394c2cc3c2e582624fd1e9af0c0027bd5566->enter($__internal_9816d1d8c33dd97d5fe9c5505a7c394c2cc3c2e582624fd1e9af0c0027bd5566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_9816d1d8c33dd97d5fe9c5505a7c394c2cc3c2e582624fd1e9af0c0027bd5566->leave($__internal_9816d1d8c33dd97d5fe9c5505a7c394c2cc3c2e582624fd1e9af0c0027bd5566_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ef9b1b576b428674f8089f6d624b61bb6af907f346963fa0b5e09f23d49e1347 = $this->env->getExtension("native_profiler");
        $__internal_ef9b1b576b428674f8089f6d624b61bb6af907f346963fa0b5e09f23d49e1347->enter($__internal_ef9b1b576b428674f8089f6d624b61bb6af907f346963fa0b5e09f23d49e1347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ef9b1b576b428674f8089f6d624b61bb6af907f346963fa0b5e09f23d49e1347->leave($__internal_ef9b1b576b428674f8089f6d624b61bb6af907f346963fa0b5e09f23d49e1347_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_d70a8e5037a49c7f85eb6a23bdde0f1dc467ca8b0029a7984f50829afc603b4e = $this->env->getExtension("native_profiler");
        $__internal_d70a8e5037a49c7f85eb6a23bdde0f1dc467ca8b0029a7984f50829afc603b4e->enter($__internal_d70a8e5037a49c7f85eb6a23bdde0f1dc467ca8b0029a7984f50829afc603b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_d70a8e5037a49c7f85eb6a23bdde0f1dc467ca8b0029a7984f50829afc603b4e->leave($__internal_d70a8e5037a49c7f85eb6a23bdde0f1dc467ca8b0029a7984f50829afc603b4e_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_db678f8e119ee949ce67f971a29267e332d656547638b781e40957d2715699f5 = $this->env->getExtension("native_profiler");
        $__internal_db678f8e119ee949ce67f971a29267e332d656547638b781e40957d2715699f5->enter($__internal_db678f8e119ee949ce67f971a29267e332d656547638b781e40957d2715699f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_db678f8e119ee949ce67f971a29267e332d656547638b781e40957d2715699f5->leave($__internal_db678f8e119ee949ce67f971a29267e332d656547638b781e40957d2715699f5_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2526e44885a23fcdded807797158844450ec25f5313c3e00ed7595ce29873edf = $this->env->getExtension("native_profiler");
        $__internal_2526e44885a23fcdded807797158844450ec25f5313c3e00ed7595ce29873edf->enter($__internal_2526e44885a23fcdded807797158844450ec25f5313c3e00ed7595ce29873edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_2526e44885a23fcdded807797158844450ec25f5313c3e00ed7595ce29873edf->leave($__internal_2526e44885a23fcdded807797158844450ec25f5313c3e00ed7595ce29873edf_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_fc614bf199e7e70b1b717b6ef32f8dcdf95f0230a01bd36283ff2a66f96ba88d = $this->env->getExtension("native_profiler");
        $__internal_fc614bf199e7e70b1b717b6ef32f8dcdf95f0230a01bd36283ff2a66f96ba88d->enter($__internal_fc614bf199e7e70b1b717b6ef32f8dcdf95f0230a01bd36283ff2a66f96ba88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_fc614bf199e7e70b1b717b6ef32f8dcdf95f0230a01bd36283ff2a66f96ba88d->leave($__internal_fc614bf199e7e70b1b717b6ef32f8dcdf95f0230a01bd36283ff2a66f96ba88d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_d69d24ecc23b1a86fa9aa88d3b823aa616dc3036438726dac94e8a550179623c = $this->env->getExtension("native_profiler");
        $__internal_d69d24ecc23b1a86fa9aa88d3b823aa616dc3036438726dac94e8a550179623c->enter($__internal_d69d24ecc23b1a86fa9aa88d3b823aa616dc3036438726dac94e8a550179623c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_d69d24ecc23b1a86fa9aa88d3b823aa616dc3036438726dac94e8a550179623c->leave($__internal_d69d24ecc23b1a86fa9aa88d3b823aa616dc3036438726dac94e8a550179623c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  113 => 32,  107 => 31,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends admin_pool.getTemplate('layout') %}*/
/* */
/* {% block sonata_header %}{% endblock %}*/
/* {% block sonata_left_side %}{% endblock %}*/
/* {% block sonata_nav %}{% endblock %}*/
/* {% block sonata_breadcrumb %}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         .content {*/
/*             margin: 0px;*/
/*             padding: 0px;*/
/*         }*/
/*     </style>*/
/* */
/* {% endblock %}*/
/* */
/* {% block sonata_wrapper %}*/
/*     {% block sonata_page_content %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endblock %}*/
/* */
