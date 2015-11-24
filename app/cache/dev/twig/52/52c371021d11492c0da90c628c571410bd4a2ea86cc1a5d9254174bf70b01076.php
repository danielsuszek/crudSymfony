<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_53647b9f6447267c03e1e810f3a7a4747b2d8752f2937df6e7411b9a14a948db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bfc407a9f45718129292cede917ef7304bb13e8d8419a56e92ff71f4d6a7e3db = $this->env->getExtension("native_profiler");
        $__internal_bfc407a9f45718129292cede917ef7304bb13e8d8419a56e92ff71f4d6a7e3db->enter($__internal_bfc407a9f45718129292cede917ef7304bb13e8d8419a56e92ff71f4d6a7e3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfc407a9f45718129292cede917ef7304bb13e8d8419a56e92ff71f4d6a7e3db->leave($__internal_bfc407a9f45718129292cede917ef7304bb13e8d8419a56e92ff71f4d6a7e3db_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_760f27395b7af6e443e17c7caf60a2cee81c22a08cff431a83b81965566c44da = $this->env->getExtension("native_profiler");
        $__internal_760f27395b7af6e443e17c7caf60a2cee81c22a08cff431a83b81965566c44da->enter($__internal_760f27395b7af6e443e17c7caf60a2cee81c22a08cff431a83b81965566c44da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_760f27395b7af6e443e17c7caf60a2cee81c22a08cff431a83b81965566c44da->leave($__internal_760f27395b7af6e443e17c7caf60a2cee81c22a08cff431a83b81965566c44da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ae827609c8403302a12b3422a0780a39413f9334ce26701bffa9bb96999a17bb = $this->env->getExtension("native_profiler");
        $__internal_ae827609c8403302a12b3422a0780a39413f9334ce26701bffa9bb96999a17bb->enter($__internal_ae827609c8403302a12b3422a0780a39413f9334ce26701bffa9bb96999a17bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ae827609c8403302a12b3422a0780a39413f9334ce26701bffa9bb96999a17bb->leave($__internal_ae827609c8403302a12b3422a0780a39413f9334ce26701bffa9bb96999a17bb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_146eecf6d55f7e6757a009177ec7b66c0e2fcccd6b2957ecc0567ab75a282244 = $this->env->getExtension("native_profiler");
        $__internal_146eecf6d55f7e6757a009177ec7b66c0e2fcccd6b2957ecc0567ab75a282244->enter($__internal_146eecf6d55f7e6757a009177ec7b66c0e2fcccd6b2957ecc0567ab75a282244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_146eecf6d55f7e6757a009177ec7b66c0e2fcccd6b2957ecc0567ab75a282244->leave($__internal_146eecf6d55f7e6757a009177ec7b66c0e2fcccd6b2957ecc0567ab75a282244_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
