<?php

/* @SonataAdmin/Pager/base_results.html.twig */
class __TwigTemplate_3f6eea3b39628e287815dead3c3a13f13ece197b3a3c41d89a44bfdf084fa819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f46dfcfd14a8514eade01f24afa5b709e6b0d1f30d593c245a3a7ca16a01ce3a = $this->env->getExtension("native_profiler");
        $__internal_f46dfcfd14a8514eade01f24afa5b709e6b0d1f30d593c245a3a7ca16a01ce3a->enter($__internal_f46dfcfd14a8514eade01f24afa5b709e6b0d1f30d593c245a3a7ca16a01ce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_f46dfcfd14a8514eade01f24afa5b709e6b0d1f30d593c245a3a7ca16a01ce3a->leave($__internal_f46dfcfd14a8514eade01f24afa5b709e6b0d1f30d593c245a3a7ca16a01ce3a_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_f0ba9c0da09b1468f0c5bd12aefe6cf68379ae25fecbad17000b3c2c1b11d15c = $this->env->getExtension("native_profiler");
        $__internal_f0ba9c0da09b1468f0c5bd12aefe6cf68379ae25fecbad17000b3c2c1b11d15c->enter($__internal_f0ba9c0da09b1468f0c5bd12aefe6cf68379ae25fecbad17000b3c2c1b11d15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_f0ba9c0da09b1468f0c5bd12aefe6cf68379ae25fecbad17000b3c2c1b11d15c->leave($__internal_f0ba9c0da09b1468f0c5bd12aefe6cf68379ae25fecbad17000b3c2c1b11d15c_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_fd50d7280daee421fb4ecb11282377cb33a8dbcd9ca7ab9df8da8dcd3b4b6f9a = $this->env->getExtension("native_profiler");
        $__internal_fd50d7280daee421fb4ecb11282377cb33a8dbcd9ca7ab9df8da8dcd3b4b6f9a->enter($__internal_fd50d7280daee421fb4ecb11282377cb33a8dbcd9ca7ab9df8da8dcd3b4b6f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_fd50d7280daee421fb4ecb11282377cb33a8dbcd9ca7ab9df8da8dcd3b4b6f9a->leave($__internal_fd50d7280daee421fb4ecb11282377cb33a8dbcd9ca7ab9df8da8dcd3b4b6f9a_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_d7341e6d068012515d642a9e07fdb421cd959f0e2c6835dab7525bb278cc6412 = $this->env->getExtension("native_profiler");
        $__internal_d7341e6d068012515d642a9e07fdb421cd959f0e2c6835dab7525bb278cc6412->enter($__internal_d7341e6d068012515d642a9e07fdb421cd959f0e2c6835dab7525bb278cc6412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_d7341e6d068012515d642a9e07fdb421cd959f0e2c6835dab7525bb278cc6412->leave($__internal_d7341e6d068012515d642a9e07fdb421cd959f0e2c6835dab7525bb278cc6412_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  111 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
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
/* {% block num_pages %}*/
/*     {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block num_results %}*/
/*     {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}*/
/*     &nbsp;-&nbsp;*/
/* {% endblock %}*/
/* */
/* {% block max_per_page %}*/
/*     <label class="control-label" for="{{ admin.uniqid }}_per_page">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>*/
/*     <select class="per-page small form-control" id="{{ admin.uniqid }}_per_page" style="width: auto">*/
/*         {% for per_page in admin.getperpageoptions %}*/
/*             <option {% if per_page == admin.datagrid.pager.maxperpage %}selected="selected"{% endif %} value="{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}">*/
/*                 {{ per_page }}*/
/*             </option>*/
/*         {% endfor %}*/
/*     </select>*/
/* {% endblock %}*/
/* */
