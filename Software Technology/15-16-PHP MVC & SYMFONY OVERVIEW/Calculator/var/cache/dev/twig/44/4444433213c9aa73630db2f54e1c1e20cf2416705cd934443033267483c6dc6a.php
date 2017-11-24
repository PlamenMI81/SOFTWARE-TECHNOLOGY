<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_870b02348cb3098fa3d6625b67a263b78612ac92322f009239908aa850ce8ef9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_673c5e3f44ebec878235b6efa1d71a8a1288659d4a174808fd65a258880fd1fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_673c5e3f44ebec878235b6efa1d71a8a1288659d4a174808fd65a258880fd1fd->enter($__internal_673c5e3f44ebec878235b6efa1d71a8a1288659d4a174808fd65a258880fd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_673c5e3f44ebec878235b6efa1d71a8a1288659d4a174808fd65a258880fd1fd->leave($__internal_673c5e3f44ebec878235b6efa1d71a8a1288659d4a174808fd65a258880fd1fd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_25d52b0c157801a2b6996362b04669880da2fa738348f7aadffde6e59251a855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d52b0c157801a2b6996362b04669880da2fa738348f7aadffde6e59251a855->enter($__internal_25d52b0c157801a2b6996362b04669880da2fa738348f7aadffde6e59251a855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_25d52b0c157801a2b6996362b04669880da2fa738348f7aadffde6e59251a855->leave($__internal_25d52b0c157801a2b6996362b04669880da2fa738348f7aadffde6e59251a855_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5eed0e1e6e0b59c89da41f7183917773b8a00d15f9cb2abdf4e9563f7e4d293f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eed0e1e6e0b59c89da41f7183917773b8a00d15f9cb2abdf4e9563f7e4d293f->enter($__internal_5eed0e1e6e0b59c89da41f7183917773b8a00d15f9cb2abdf4e9563f7e4d293f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5eed0e1e6e0b59c89da41f7183917773b8a00d15f9cb2abdf4e9563f7e4d293f->leave($__internal_5eed0e1e6e0b59c89da41f7183917773b8a00d15f9cb2abdf4e9563f7e4d293f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d87ecca123fc784411c3c83c3f7da503c7f44a1ee9edb89e332210b4444064a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d87ecca123fc784411c3c83c3f7da503c7f44a1ee9edb89e332210b4444064a->enter($__internal_7d87ecca123fc784411c3c83c3f7da503c7f44a1ee9edb89e332210b4444064a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7d87ecca123fc784411c3c83c3f7da503c7f44a1ee9edb89e332210b4444064a->leave($__internal_7d87ecca123fc784411c3c83c3f7da503c7f44a1ee9edb89e332210b4444064a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
