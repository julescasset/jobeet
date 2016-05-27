<?php

/* :job:new.html.twig */
class __TwigTemplate_157507de6da923c92822a46cb278652ebd8bd8d8f9219378e53a07b4a8169fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsManonBundle::layout.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsManonBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_958a8c3485b492b3148762b8a2ce1e72a105b2f2712ea62698f18047c64aeaa0 = $this->env->getExtension("native_profiler");
        $__internal_958a8c3485b492b3148762b8a2ce1e72a105b2f2712ea62698f18047c64aeaa0->enter($__internal_958a8c3485b492b3148762b8a2ce1e72a105b2f2712ea62698f18047c64aeaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_958a8c3485b492b3148762b8a2ce1e72a105b2f2712ea62698f18047c64aeaa0->leave($__internal_958a8c3485b492b3148762b8a2ce1e72a105b2f2712ea62698f18047c64aeaa0_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_c12dec3febda1309a02a32bdb6490987b7eb9272dd88a3f6dce22cae92805edf = $this->env->getExtension("native_profiler");
        $__internal_c12dec3febda1309a02a32bdb6490987b7eb9272dd88a3f6dce22cae92805edf->enter($__internal_c12dec3febda1309a02a32bdb6490987b7eb9272dd88a3f6dce22cae92805edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul class=\"error_list\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c12dec3febda1309a02a32bdb6490987b7eb9272dd88a3f6dce22cae92805edf->leave($__internal_c12dec3febda1309a02a32bdb6490987b7eb9272dd88a3f6dce22cae92805edf_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36706bc565a66dab4cb45ad2c821a0bf2d0efa5c725f19e1032f6e18ff575fc5 = $this->env->getExtension("native_profiler");
        $__internal_36706bc565a66dab4cb45ad2c821a0bf2d0efa5c725f19e1032f6e18ff575fc5->enter($__internal_36706bc565a66dab4cb45ad2c821a0bf2d0efa5c725f19e1032f6e18ff575fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensmanon/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36706bc565a66dab4cb45ad2c821a0bf2d0efa5c725f19e1032f6e18ff575fc5->leave($__internal_36706bc565a66dab4cb45ad2c821a0bf2d0efa5c725f19e1032f6e18ff575fc5_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_c32e4a85503c9e37f0feddfbfbbc65b0371cb58f165883435a6a31350cc5ac16 = $this->env->getExtension("native_profiler");
        $__internal_c32e4a85503c9e37f0feddfbfbbc65b0371cb58f165883435a6a31350cc5ac16->enter($__internal_c32e4a85503c9e37f0feddfbfbbc65b0371cb58f165883435a6a31350cc5ac16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <h1>Job creation</h1>
    <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("job_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <table id=\"job_form\">
            <tfoot>
            <tr>
                <td colspan=\"2\">
                    <input type=\"submit\" value=\"Preview your job\" />
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'errors');
        echo "
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'errors');
        echo "
                    ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'widget');
        echo "
                    <br /> Whether the job can also be published on affiliate websites or not.
                </td>
            </tr>
            <tr>
                <th>";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                </td>
            </tr>
            </tbody>
        </table>

        ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_c32e4a85503c9e37f0feddfbfbbc65b0371cb58f165883435a6a31350cc5ac16->leave($__internal_c32e4a85503c9e37f0feddfbfbbc65b0371cb58f165883435a6a31350cc5ac16_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 115,  294 => 109,  290 => 108,  285 => 106,  277 => 101,  273 => 100,  268 => 98,  261 => 94,  257 => 93,  252 => 91,  245 => 87,  241 => 86,  236 => 84,  229 => 80,  225 => 79,  220 => 77,  213 => 73,  209 => 72,  204 => 70,  197 => 66,  193 => 65,  188 => 63,  181 => 59,  177 => 58,  172 => 56,  165 => 52,  161 => 51,  156 => 49,  149 => 45,  145 => 44,  140 => 42,  133 => 38,  129 => 37,  124 => 35,  108 => 24,  105 => 23,  99 => 22,  90 => 19,  85 => 18,  79 => 17,  71 => 14,  67 => 12,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsManonBundle::layout.html.twig' %}*/
/* */
/* {% form_theme form _self %}*/
/* */
/* {% block field_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             <ul class="error_list">*/
/*                 {% for error in errors %}*/
/*                     <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock field_errors %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensmanon/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/*     <form action="{{ path('job_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         <table id="job_form">*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <input type="submit" value="Preview your job" />*/
/*                 </td>*/
/*             </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.category) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.category) }}*/
/*                     {{ form_widget(form.category) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.type) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.type) }}*/
/*                     {{ form_widget(form.type) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.company) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.company) }}*/
/*                     {{ form_widget(form.company) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.file) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.file) }}*/
/*                     {{ form_widget(form.file) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.url) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.url) }}*/
/*                     {{ form_widget(form.url) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.position) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.position) }}*/
/*                     {{ form_widget(form.position) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.location) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.location) }}*/
/*                     {{ form_widget(form.location) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.description) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.description) }}*/
/*                     {{ form_widget(form.description) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.how_to_apply) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.how_to_apply) }}*/
/*                     {{ form_widget(form.how_to_apply) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.is_public) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.is_public) }}*/
/*                     {{ form_widget(form.is_public) }}*/
/*                     <br /> Whether the job can also be published on affiliate websites or not.*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.email) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.email) }}*/
/*                     {{ form_widget(form.email) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* {% endblock %}*/
