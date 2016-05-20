<?php

/* :job:index.html.twig */
class __TwigTemplate_67e2e8afc9c4c3845e1ffd0050dedb7e8c7185272e7dc24751d65b7040c4dc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81d098fc9ecfae17cb246d022fdf002bd5b587b1c5082d1939c3a90d5ad109ab = $this->env->getExtension("native_profiler");
        $__internal_81d098fc9ecfae17cb246d022fdf002bd5b587b1c5082d1939c3a90d5ad109ab->enter($__internal_81d098fc9ecfae17cb246d022fdf002bd5b587b1c5082d1939c3a90d5ad109ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81d098fc9ecfae17cb246d022fdf002bd5b587b1c5082d1939c3a90d5ad109ab->leave($__internal_81d098fc9ecfae17cb246d022fdf002bd5b587b1c5082d1939c3a90d5ad109ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eeb9fb5dee73e02e536e864ea3cff2e610f0e37c6781f6c16228e56fca9eb70b = $this->env->getExtension("native_profiler");
        $__internal_eeb9fb5dee73e02e536e864ea3cff2e610f0e37c6781f6c16228e56fca9eb70b->enter($__internal_eeb9fb5dee73e02e536e864ea3cff2e610f0e37c6781f6c16228e56fca9eb70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>How_to_apply</th>
                <th>Token</th>
                <th>Is_public</th>
                <th>Is_activated</th>
                <th>Email</th>
                <th>Expires_at</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howtoapply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            if ($this->getAttribute($context["job"], "ispublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["job"], "isactivated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            if ($this->getAttribute($context["job"], "expiresat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["job"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_eeb9fb5dee73e02e536e864ea3cff2e610f0e37c6781f6c16228e56fca9eb70b->leave($__internal_eeb9fb5dee73e02e536e864ea3cff2e610f0e37c6781f6c16228e56fca9eb70b_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  175 => 59,  163 => 53,  157 => 50,  148 => 46,  142 => 45,  136 => 44,  132 => 43,  124 => 42,  116 => 41,  112 => 40,  108 => 39,  104 => 38,  100 => 37,  96 => 36,  92 => 35,  88 => 34,  84 => 33,  80 => 32,  74 => 31,  71 => 30,  67 => 29,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Company</th>*/
/*                 <th>Logo</th>*/
/*                 <th>Url</th>*/
/*                 <th>Position</th>*/
/*                 <th>Location</th>*/
/*                 <th>Description</th>*/
/*                 <th>How_to_apply</th>*/
/*                 <th>Token</th>*/
/*                 <th>Is_public</th>*/
/*                 <th>Is_activated</th>*/
/*                 <th>Email</th>*/
/*                 <th>Expires_at</th>*/
/*                 <th>Created_at</th>*/
/*                 <th>Updated_at</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for job in jobs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ens_job_show', { 'id': job.id }) }}">{{ job.id }}</a></td>*/
/*                 <td>{{ job.type }}</td>*/
/*                 <td>{{ job.company }}</td>*/
/*                 <td>{{ job.logo }}</td>*/
/*                 <td>{{ job.url }}</td>*/
/*                 <td>{{ job.position }}</td>*/
/*                 <td>{{ job.location }}</td>*/
/*                 <td>{{ job.description }}</td>*/
/*                 <td>{{ job.howtoapply }}</td>*/
/*                 <td>{{ job.token }}</td>*/
/*                 <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ job.email }}</td>*/
/*                 <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('ens_job_show', { 'id': job.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
