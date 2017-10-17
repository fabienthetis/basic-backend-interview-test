<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_540208acb6eb8e68f2ef3e007d7996a1eb047223c9fe99bdc16804a2f1c9db94 extends Twig_Template
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
        $__internal_7063966115dcf1c8355c9184b98d5df6ab31de3ed42858113568a7ce2bce5eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7063966115dcf1c8355c9184b98d5df6ab31de3ed42858113568a7ce2bce5eb5->enter($__internal_7063966115dcf1c8355c9184b98d5df6ab31de3ed42858113568a7ce2bce5eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_392cedab4bdea6cffe8fe99f7d71dcaef6ba74a88cf510d76ea59f11e82cad61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_392cedab4bdea6cffe8fe99f7d71dcaef6ba74a88cf510d76ea59f11e82cad61->enter($__internal_392cedab4bdea6cffe8fe99f7d71dcaef6ba74a88cf510d76ea59f11e82cad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7063966115dcf1c8355c9184b98d5df6ab31de3ed42858113568a7ce2bce5eb5->leave($__internal_7063966115dcf1c8355c9184b98d5df6ab31de3ed42858113568a7ce2bce5eb5_prof);

        
        $__internal_392cedab4bdea6cffe8fe99f7d71dcaef6ba74a88cf510d76ea59f11e82cad61->leave($__internal_392cedab4bdea6cffe8fe99f7d71dcaef6ba74a88cf510d76ea59f11e82cad61_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1e96ed89213baa1c5bcf23ff20d085fda79849cc94db6c6fd7f6f8b8bee19af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1e96ed89213baa1c5bcf23ff20d085fda79849cc94db6c6fd7f6f8b8bee19af->enter($__internal_b1e96ed89213baa1c5bcf23ff20d085fda79849cc94db6c6fd7f6f8b8bee19af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b0ebe3e46a9966fb5da81ccb7126040264d1ce9aa336d95720cb1610fb402bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0ebe3e46a9966fb5da81ccb7126040264d1ce9aa336d95720cb1610fb402bb->enter($__internal_8b0ebe3e46a9966fb5da81ccb7126040264d1ce9aa336d95720cb1610fb402bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8b0ebe3e46a9966fb5da81ccb7126040264d1ce9aa336d95720cb1610fb402bb->leave($__internal_8b0ebe3e46a9966fb5da81ccb7126040264d1ce9aa336d95720cb1610fb402bb_prof);

        
        $__internal_b1e96ed89213baa1c5bcf23ff20d085fda79849cc94db6c6fd7f6f8b8bee19af->leave($__internal_b1e96ed89213baa1c5bcf23ff20d085fda79849cc94db6c6fd7f6f8b8bee19af_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1bb99eb2180260546e032df4b1e925713b9648a8c66bda429a821986b493c58d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bb99eb2180260546e032df4b1e925713b9648a8c66bda429a821986b493c58d->enter($__internal_1bb99eb2180260546e032df4b1e925713b9648a8c66bda429a821986b493c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_690443b768a0649aedf88114145d97c4a425ca989ab87af3fda6727929410b93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690443b768a0649aedf88114145d97c4a425ca989ab87af3fda6727929410b93->enter($__internal_690443b768a0649aedf88114145d97c4a425ca989ab87af3fda6727929410b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_690443b768a0649aedf88114145d97c4a425ca989ab87af3fda6727929410b93->leave($__internal_690443b768a0649aedf88114145d97c4a425ca989ab87af3fda6727929410b93_prof);

        
        $__internal_1bb99eb2180260546e032df4b1e925713b9648a8c66bda429a821986b493c58d->leave($__internal_1bb99eb2180260546e032df4b1e925713b9648a8c66bda429a821986b493c58d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_90b125a3f43a0775ccf66f8dbf7b6a957acccd73bad6451f6f843bcb25404e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b125a3f43a0775ccf66f8dbf7b6a957acccd73bad6451f6f843bcb25404e78->enter($__internal_90b125a3f43a0775ccf66f8dbf7b6a957acccd73bad6451f6f843bcb25404e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad9a00a371761474e29aebd1fe97f64075aaa6a0fe4ba42bde0e9d573d8d7d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9a00a371761474e29aebd1fe97f64075aaa6a0fe4ba42bde0e9d573d8d7d62->enter($__internal_ad9a00a371761474e29aebd1fe97f64075aaa6a0fe4ba42bde0e9d573d8d7d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ad9a00a371761474e29aebd1fe97f64075aaa6a0fe4ba42bde0e9d573d8d7d62->leave($__internal_ad9a00a371761474e29aebd1fe97f64075aaa6a0fe4ba42bde0e9d573d8d7d62_prof);

        
        $__internal_90b125a3f43a0775ccf66f8dbf7b6a957acccd73bad6451f6f843bcb25404e78->leave($__internal_90b125a3f43a0775ccf66f8dbf7b6a957acccd73bad6451f6f843bcb25404e78_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/fabienthetis/my_project_name_save/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
