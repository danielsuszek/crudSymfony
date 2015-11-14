<?php

/* DevTaskBundle:Task:show.html.twig */
class __TwigTemplate_df9b1e87020dd03c18303e64395dcac51ae2e34863cd5323706b5e40fe00d090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevTaskBundle:Task:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c587c9a225df0876024bfdd8c6f107c7e496ccf53b1ce1c2ea1d5ac0a784f7 = $this->env->getExtension("native_profiler");
        $__internal_62c587c9a225df0876024bfdd8c6f107c7e496ccf53b1ce1c2ea1d5ac0a784f7->enter($__internal_62c587c9a225df0876024bfdd8c6f107c7e496ccf53b1ce1c2ea1d5ac0a784f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevTaskBundle:Task:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c587c9a225df0876024bfdd8c6f107c7e496ccf53b1ce1c2ea1d5ac0a784f7->leave($__internal_62c587c9a225df0876024bfdd8c6f107c7e496ccf53b1ce1c2ea1d5ac0a784f7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c444f92c77b34073d7906843358cfa8847cfe69ff90064d15c807941fea01ebf = $this->env->getExtension("native_profiler");
        $__internal_c444f92c77b34073d7906843358cfa8847cfe69ff90064d15c807941fea01ebf->enter($__internal_c444f92c77b34073d7906843358cfa8847cfe69ff90064d15c807941fea01ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Task</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Task</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "task", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Complete</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "complete", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("task");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("task_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_c444f92c77b34073d7906843358cfa8847cfe69ff90064d15c807941fea01ebf->leave($__internal_c444f92c77b34073d7906843358cfa8847cfe69ff90064d15c807941fea01ebf_prof);

    }

    public function getTemplateName()
    {
        return "DevTaskBundle:Task:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body -%}*/
/*     <h1>Task</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ entity.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Task</th>*/
/*                 <td>{{ entity.task }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Complete</th>*/
/*                 <td>{{ entity.complete }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{{ entity.created|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('task') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/*     <li>*/
/*         <a href="{{ path('task_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </li>*/
/*     <li>{{ form(delete_form) }}</li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
