<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_82360856ef18f19914d7914400296c8fe5148879e5a106800931827e3d600027 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c22824ddbff7f2b349ef93b157744532b19ff3c204b6b1a4163af4dd460e17f = $this->env->getExtension("native_profiler");
        $__internal_0c22824ddbff7f2b349ef93b157744532b19ff3c204b6b1a4163af4dd460e17f->enter($__internal_0c22824ddbff7f2b349ef93b157744532b19ff3c204b6b1a4163af4dd460e17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c22824ddbff7f2b349ef93b157744532b19ff3c204b6b1a4163af4dd460e17f->leave($__internal_0c22824ddbff7f2b349ef93b157744532b19ff3c204b6b1a4163af4dd460e17f_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_d8eb546bd7caa400ceaee2159a3829649b26275d8d80b8005e94755e848bb27c = $this->env->getExtension("native_profiler");
        $__internal_d8eb546bd7caa400ceaee2159a3829649b26275d8d80b8005e94755e848bb27c->enter($__internal_d8eb546bd7caa400ceaee2159a3829649b26275d8d80b8005e94755e848bb27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_d8eb546bd7caa400ceaee2159a3829649b26275d8d80b8005e94755e848bb27c->leave($__internal_d8eb546bd7caa400ceaee2159a3829649b26275d8d80b8005e94755e848bb27c_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_ddb4b25a3c046fd91f91a68c567d599c5dd456a8d5a8a471fd4dff36122fab3b = $this->env->getExtension("native_profiler");
        $__internal_ddb4b25a3c046fd91f91a68c567d599c5dd456a8d5a8a471fd4dff36122fab3b->enter($__internal_ddb4b25a3c046fd91f91a68c567d599c5dd456a8d5a8a471fd4dff36122fab3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_ddb4b25a3c046fd91f91a68c567d599c5dd456a8d5a8a471fd4dff36122fab3b->leave($__internal_ddb4b25a3c046fd91f91a68c567d599c5dd456a8d5a8a471fd4dff36122fab3b_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_a64eab6f2af190e450478ae077b75d609c43d7f9520fd32767c24dc607ecffef = $this->env->getExtension("native_profiler");
        $__internal_a64eab6f2af190e450478ae077b75d609c43d7f9520fd32767c24dc607ecffef->enter($__internal_a64eab6f2af190e450478ae077b75d609c43d7f9520fd32767c24dc607ecffef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_a64eab6f2af190e450478ae077b75d609c43d7f9520fd32767c24dc607ecffef->leave($__internal_a64eab6f2af190e450478ae077b75d609c43d7f9520fd32767c24dc607ecffef_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_eb68778e6b9768b19c908b439b5f981c51413902cf2ae766fa410fa2e369ef8b = $this->env->getExtension("native_profiler");
        $__internal_eb68778e6b9768b19c908b439b5f981c51413902cf2ae766fa410fa2e369ef8b->enter($__internal_eb68778e6b9768b19c908b439b5f981c51413902cf2ae766fa410fa2e369ef8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_eb68778e6b9768b19c908b439b5f981c51413902cf2ae766fa410fa2e369ef8b->leave($__internal_eb68778e6b9768b19c908b439b5f981c51413902cf2ae766fa410fa2e369ef8b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fc33815b1c2526c87f86642913bd1817e8796c097550fc2f85e584ebb79e64c = $this->env->getExtension("native_profiler");
        $__internal_2fc33815b1c2526c87f86642913bd1817e8796c097550fc2f85e584ebb79e64c->enter($__internal_2fc33815b1c2526c87f86642913bd1817e8796c097550fc2f85e584ebb79e64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2fc33815b1c2526c87f86642913bd1817e8796c097550fc2f85e584ebb79e64c->leave($__internal_2fc33815b1c2526c87f86642913bd1817e8796c097550fc2f85e584ebb79e64c_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e0c022a6d727ca402e5bcd3683fa4c7c87dd052b046f5664afb4e761504505de = $this->env->getExtension("native_profiler");
        $__internal_e0c022a6d727ca402e5bcd3683fa4c7c87dd052b046f5664afb4e761504505de->enter($__internal_e0c022a6d727ca402e5bcd3683fa4c7c87dd052b046f5664afb4e761504505de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_e0c022a6d727ca402e5bcd3683fa4c7c87dd052b046f5664afb4e761504505de->leave($__internal_e0c022a6d727ca402e5bcd3683fa4c7c87dd052b046f5664afb4e761504505de_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_3e29ddc579c0e3a57cb9e1072d90b989d8d4add071d532f3c790a5ac217dfd4c = $this->env->getExtension("native_profiler");
        $__internal_3e29ddc579c0e3a57cb9e1072d90b989d8d4add071d532f3c790a5ac217dfd4c->enter($__internal_3e29ddc579c0e3a57cb9e1072d90b989d8d4add071d532f3c790a5ac217dfd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_3e29ddc579c0e3a57cb9e1072d90b989d8d4add071d532f3c790a5ac217dfd4c->leave($__internal_3e29ddc579c0e3a57cb9e1072d90b989d8d4add071d532f3c790a5ac217dfd4c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
