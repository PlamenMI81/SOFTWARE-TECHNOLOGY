<?php

/* calculator/index.html.twig */
class __TwigTemplate_4f982514dcea170d2d1e17f88bf1a76f3111ef67861768f823540257a0fb7148 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "calculator/index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd152d2328a466f342c24a1956fe80b3e8cb2f6ef2dcc6a311680672fe352f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd152d2328a466f342c24a1956fe80b3e8cb2f6ef2dcc6a311680672fe352f87->enter($__internal_cd152d2328a466f342c24a1956fe80b3e8cb2f6ef2dcc6a311680672fe352f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "calculator/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd152d2328a466f342c24a1956fe80b3e8cb2f6ef2dcc6a311680672fe352f87->leave($__internal_cd152d2328a466f342c24a1956fe80b3e8cb2f6ef2dcc6a311680672fe352f87_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_54fb40badefab8d356f8ffbd10c0313fa1a286332d83b4fa8e4f8cc7fa0d7c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fb40badefab8d356f8ffbd10c0313fa1a286332d83b4fa8e4f8cc7fa0d7c42->enter($__internal_54fb40badefab8d356f8ffbd10c0313fa1a286332d83b4fa8e4f8cc7fa0d7c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "leftOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" ";
        // line 18
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "+"))) ? ("selected") : (""));
        echo ">+</option>
                                <option value=\"-\" ";
        // line 19
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "-"))) ? ("selected") : (""));
        echo ">-</option>
                                <option value=\"*\" ";
        // line 20
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "*"))) ? ("selected") : (""));
        echo ">*</option>
                                <option value=\"/\" ";
        // line 21
        echo (((array_key_exists("calculator", $context) && ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : $this->getContext($context, "calculator")), "operator", array()) == "/"))) ? ("selected") : (""));
        echo ">/</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())))) ? ($this->getAttribute((isset($context["calculator"]) ? $context["calculator"] : null), "rightOperand", array())) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    ";
        // line 39
        if (array_key_exists("form", $context)) {
            // line 40
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
            echo "
                    ";
        }
        // line 42
        echo "
                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (((array_key_exists("result", $context) &&  !(null === (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))))) ? ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))) : ("")), "html", null, true);
        echo "\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
";
        
        $__internal_54fb40badefab8d356f8ffbd10c0313fa1a286332d83b4fa8e4f8cc7fa0d7c42->leave($__internal_54fb40badefab8d356f8ffbd10c0313fa1a286332d83b4fa8e4f8cc7fa0d7c42_prof);

    }

    public function getTemplateName()
    {
        return "calculator/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 46,  106 => 42,  100 => 40,  98 => 39,  85 => 29,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'base.html.twig' %}

{% block main %}
    <div class=\"container body-content span=8 offset=2\">
        <div class=\"well\">
            <form class=\"form-inline\" action=\"{{ path('index') }}\" method=\"POST\">
                <fieldset>
                    <div class=\"form-group\">
                        <div class=\"col-sm-1 \">
                            <input type=\"text\" class=\"form-control\" id=\"leftOperand\" placeholder=\"Left Operand\"
                                   name=\"calculator[leftOperand]\" value=\"{{ calculator.leftOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <select class=\"form-control\" name=\"calculator[operator]\">
                                <option value=\"+\" {{ calculator is defined and calculator.operator == '+' ? 'selected' : '' }}>+</option>
                                <option value=\"-\" {{ calculator is defined and calculator.operator == '-' ? 'selected' : '' }}>-</option>
                                <option value=\"*\" {{ calculator is defined and calculator.operator == '*' ? 'selected' : '' }}>*</option>
                                <option value=\"/\" {{ calculator is defined and calculator.operator == '/' ? 'selected' : '' }}>/</option>
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"rightOperand\" placeholder=\"Right Operand\"
                                   name=\"calculator[rightOperand]\" value=\"{{ calculator.rightOperand ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-2 \">
                            <p>=</p>
                        </div>
                    </div>

                    {% if form is defined %}
                        {{ form_row(form._token) }}
                    {% endif %}

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 \">
                            <input type=\"text\" class=\"form-control\" id=\"result\" placeholder=\"Result\"
                                   name=\"result\" value=\"{{ result ?? '' }}\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-sm-4 col-sm-offset-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">Calculate</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
{% endblock %}
";
    }
}
