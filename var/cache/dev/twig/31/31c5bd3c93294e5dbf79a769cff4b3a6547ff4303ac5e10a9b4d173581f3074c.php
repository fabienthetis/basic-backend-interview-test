<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d8de0f99e344099204aff626deb5cbc0b82f7106ce08a3ffc6e5461e5316ca23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a13d2e7039426e0e47767656f7bc73cf304a97a1027a1d3663f6441954a1e766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13d2e7039426e0e47767656f7bc73cf304a97a1027a1d3663f6441954a1e766->enter($__internal_a13d2e7039426e0e47767656f7bc73cf304a97a1027a1d3663f6441954a1e766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d973ea790ec3d875424e812c1d49a5334d4c0be81a58657f7a71b3aa454275dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d973ea790ec3d875424e812c1d49a5334d4c0be81a58657f7a71b3aa454275dc->enter($__internal_d973ea790ec3d875424e812c1d49a5334d4c0be81a58657f7a71b3aa454275dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a13d2e7039426e0e47767656f7bc73cf304a97a1027a1d3663f6441954a1e766->leave($__internal_a13d2e7039426e0e47767656f7bc73cf304a97a1027a1d3663f6441954a1e766_prof);

        
        $__internal_d973ea790ec3d875424e812c1d49a5334d4c0be81a58657f7a71b3aa454275dc->leave($__internal_d973ea790ec3d875424e812c1d49a5334d4c0be81a58657f7a71b3aa454275dc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f65bda99fbc7da68b97cd19c440ffe444c5fffcf544db4af676eae18d1d180b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65bda99fbc7da68b97cd19c440ffe444c5fffcf544db4af676eae18d1d180b9->enter($__internal_f65bda99fbc7da68b97cd19c440ffe444c5fffcf544db4af676eae18d1d180b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c4818018075a23c054830da39cc2d38910db5107547bec2a020fc07bb5b65f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4818018075a23c054830da39cc2d38910db5107547bec2a020fc07bb5b65f9a->enter($__internal_c4818018075a23c054830da39cc2d38910db5107547bec2a020fc07bb5b65f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c4818018075a23c054830da39cc2d38910db5107547bec2a020fc07bb5b65f9a->leave($__internal_c4818018075a23c054830da39cc2d38910db5107547bec2a020fc07bb5b65f9a_prof);

        
        $__internal_f65bda99fbc7da68b97cd19c440ffe444c5fffcf544db4af676eae18d1d180b9->leave($__internal_f65bda99fbc7da68b97cd19c440ffe444c5fffcf544db4af676eae18d1d180b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/fabienthetis/my_project_name_save/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
