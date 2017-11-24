<?php

/* form/fields.html.twig */
class __TwigTemplate_537fdf7cbc8b656f99c9ff9e6b480537d8d20ec0b2ff26bc555e34cb7326bb52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_009a37dcab51d96f65bd4c7827d290a2cc48cf44671bed597dc0c8643c89e867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009a37dcab51d96f65bd4c7827d290a2cc48cf44671bed597dc0c8643c89e867->enter($__internal_009a37dcab51d96f65bd4c7827d290a2cc48cf44671bed597dc0c8643c89e867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_009a37dcab51d96f65bd4c7827d290a2cc48cf44671bed597dc0c8643c89e867->leave($__internal_009a37dcab51d96f65bd4c7827d290a2cc48cf44671bed597dc0c8643c89e867_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_5e1cf951c7ee0614f39b08ea72fb5decd00b8bc29ab5cb853bbad274c37ca35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1cf951c7ee0614f39b08ea72fb5decd00b8bc29ab5cb853bbad274c37ca35a->enter($__internal_5e1cf951c7ee0614f39b08ea72fb5decd00b8bc29ab5cb853bbad274c37ca35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5e1cf951c7ee0614f39b08ea72fb5decd00b8bc29ab5cb853bbad274c37ca35a->leave($__internal_5e1cf951c7ee0614f39b08ea72fb5decd00b8bc29ab5cb853bbad274c37ca35a_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
