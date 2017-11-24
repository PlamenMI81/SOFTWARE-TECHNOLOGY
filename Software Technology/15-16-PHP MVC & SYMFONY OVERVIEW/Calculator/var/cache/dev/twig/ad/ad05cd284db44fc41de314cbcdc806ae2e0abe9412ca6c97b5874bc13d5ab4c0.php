<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d5c02898e8db6e073160681ee7960f648147d0be98144bd9bf82f81dfd5887e1 extends Twig_Template
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
        $__internal_268fe723c12bdb59a4cef7510a044ab0905971ef522591bba52353beb40ba974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268fe723c12bdb59a4cef7510a044ab0905971ef522591bba52353beb40ba974->enter($__internal_268fe723c12bdb59a4cef7510a044ab0905971ef522591bba52353beb40ba974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_268fe723c12bdb59a4cef7510a044ab0905971ef522591bba52353beb40ba974->leave($__internal_268fe723c12bdb59a4cef7510a044ab0905971ef522591bba52353beb40ba974_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1bcb13b79a2341fe49770ac737a44fb78bcc7ac1562af3aa0759e076e8c901e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bcb13b79a2341fe49770ac737a44fb78bcc7ac1562af3aa0759e076e8c901e3->enter($__internal_1bcb13b79a2341fe49770ac737a44fb78bcc7ac1562af3aa0759e076e8c901e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1bcb13b79a2341fe49770ac737a44fb78bcc7ac1562af3aa0759e076e8c901e3->leave($__internal_1bcb13b79a2341fe49770ac737a44fb78bcc7ac1562af3aa0759e076e8c901e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67fc03165ffcc8d6555ebbda472749309cac45ed8b57b5512f4ffb98ff1fabfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fc03165ffcc8d6555ebbda472749309cac45ed8b57b5512f4ffb98ff1fabfa->enter($__internal_67fc03165ffcc8d6555ebbda472749309cac45ed8b57b5512f4ffb98ff1fabfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67fc03165ffcc8d6555ebbda472749309cac45ed8b57b5512f4ffb98ff1fabfa->leave($__internal_67fc03165ffcc8d6555ebbda472749309cac45ed8b57b5512f4ffb98ff1fabfa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b06ad4d3baacfc5f02a6555ee3e28099c37fe563207f1d2da1c32c92a2631d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06ad4d3baacfc5f02a6555ee3e28099c37fe563207f1d2da1c32c92a2631d35->enter($__internal_b06ad4d3baacfc5f02a6555ee3e28099c37fe563207f1d2da1c32c92a2631d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b06ad4d3baacfc5f02a6555ee3e28099c37fe563207f1d2da1c32c92a2631d35->leave($__internal_b06ad4d3baacfc5f02a6555ee3e28099c37fe563207f1d2da1c32c92a2631d35_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
