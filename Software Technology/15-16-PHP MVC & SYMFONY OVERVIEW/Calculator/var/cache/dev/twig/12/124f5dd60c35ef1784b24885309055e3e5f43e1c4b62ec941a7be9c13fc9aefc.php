<?php

/* base.html.twig */
class __TwigTemplate_2624fcccf33357a99c1e66f9021509c4453f82bec6f82a837acfb7cbe2605b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34d929b8f498204b690c6a8736b34b46f8863b9179e737a74e851b29a0d38fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d929b8f498204b690c6a8736b34b46f8863b9179e737a74e851b29a0d38fbd->enter($__internal_34d929b8f498204b690c6a8736b34b46f8863b9179e737a74e851b29a0d38fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_34d929b8f498204b690c6a8736b34b46f8863b9179e737a74e851b29a0d38fbd->leave($__internal_34d929b8f498204b690c6a8736b34b46f8863b9179e737a74e851b29a0d38fbd_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_23c53ea7962d329d1032e759d2b6acfa01ab7f6aa016868db33af28c5dabc0dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c53ea7962d329d1032e759d2b6acfa01ab7f6aa016868db33af28c5dabc0dc->enter($__internal_23c53ea7962d329d1032e759d2b6acfa01ab7f6aa016868db33af28c5dabc0dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_23c53ea7962d329d1032e759d2b6acfa01ab7f6aa016868db33af28c5dabc0dc->leave($__internal_23c53ea7962d329d1032e759d2b6acfa01ab7f6aa016868db33af28c5dabc0dc_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31edd4b0dee75e1a27641fc8d6e42551ebd55298a5eced4a953dcbac75ba5fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31edd4b0dee75e1a27641fc8d6e42551ebd55298a5eced4a953dcbac75ba5fd1->enter($__internal_31edd4b0dee75e1a27641fc8d6e42551ebd55298a5eced4a953dcbac75ba5fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_31edd4b0dee75e1a27641fc8d6e42551ebd55298a5eced4a953dcbac75ba5fd1->leave($__internal_31edd4b0dee75e1a27641fc8d6e42551ebd55298a5eced4a953dcbac75ba5fd1_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1fd7977b6c7eca5bad48f9ccdab1aaa26d048959aec3e43cc0371d5be20a4b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd7977b6c7eca5bad48f9ccdab1aaa26d048959aec3e43cc0371d5be20a4b07->enter($__internal_1fd7977b6c7eca5bad48f9ccdab1aaa26d048959aec3e43cc0371d5be20a4b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_1fd7977b6c7eca5bad48f9ccdab1aaa26d048959aec3e43cc0371d5be20a4b07->leave($__internal_1fd7977b6c7eca5bad48f9ccdab1aaa26d048959aec3e43cc0371d5be20a4b07_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_e1cf667f042ab75203a6d5737a71f0997eaf4b240cd540b3a2500304fe73435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1cf667f042ab75203a6d5737a71f0997eaf4b240cd540b3a2500304fe73435f->enter($__internal_e1cf667f042ab75203a6d5737a71f0997eaf4b240cd540b3a2500304fe73435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_e1cf667f042ab75203a6d5737a71f0997eaf4b240cd540b3a2500304fe73435f->leave($__internal_e1cf667f042ab75203a6d5737a71f0997eaf4b240cd540b3a2500304fe73435f_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b36d631893185446d8ed061a9200fb98b54e2be6eb21873782d3b2bbc7ad3bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b36d631893185446d8ed061a9200fb98b54e2be6eb21873782d3b2bbc7ad3bb->enter($__internal_7b36d631893185446d8ed061a9200fb98b54e2be6eb21873782d3b2bbc7ad3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_7b36d631893185446d8ed061a9200fb98b54e2be6eb21873782d3b2bbc7ad3bb->leave($__internal_7b36d631893185446d8ed061a9200fb98b54e2be6eb21873782d3b2bbc7ad3bb_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_ddb60f96929ffa2c86df2fa65398e85bcc43aea96df80901052c9838ebac3e4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb60f96929ffa2c86df2fa65398e85bcc43aea96df80901052c9838ebac3e4e->enter($__internal_ddb60f96929ffa2c86df2fa65398e85bcc43aea96df80901052c9838ebac3e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ddb60f96929ffa2c86df2fa65398e85bcc43aea96df80901052c9838ebac3e4e->leave($__internal_ddb60f96929ffa2c86df2fa65398e85bcc43aea96df80901052c9838ebac3e4e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e65b27d756836de5e928fd3e9626d8b8ab09e3913ca7364a70d40e466044090e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65b27d756836de5e928fd3e9626d8b8ab09e3913ca7364a70d40e466044090e->enter($__internal_e65b27d756836de5e928fd3e9626d8b8ab09e3913ca7364a70d40e466044090e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e65b27d756836de5e928fd3e9626d8b8ab09e3913ca7364a70d40e466044090e->leave($__internal_e65b27d756836de5e928fd3e9626d8b8ab09e3913ca7364a70d40e466044090e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
