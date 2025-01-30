<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* book/_form.html.twig */
class __TwigTemplate_1094f6b5556f4b46d81527beb20cbab3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/_form.html.twig"));

        // line 1
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-4 col-lg-4\">
            ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "form-floating"]]);
        yield "
                ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
        yield "
                <div class=\"form-floating mb-3\">
                    ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "title", [], "any", false, false, false, 8), 'label', ["label" => "Enter the title of the book"]);
        yield "
                </div>

                <div class=\"form-floating mb-3\">
                    ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "author", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "author", [], "any", false, false, false, 13), 'label', ["label" => "Enter the author name"]);
        yield "
                </div>

                <div class=\"form-floating mb-3\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "pages", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "novalidate" => "novalidate"]]);
        yield "
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "pages", [], "any", false, false, false, 18), 'label', ["label" => "Enter the number of pages"]);
        yield "
                </div>

                <div class=\"form-floating mb-3\">
                    ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "summary", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "summary", [], "any", false, false, false, 23), 'label', ["label" => "Provide a short summary of the book"]);
        yield "
                </div>

                <div class=\"form-floating mb-3\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "genre", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "genre", [], "any", false, false, false, 28), 'label', ["label" => "Specify the genre"]);
        yield "
                </div>
                <div class=\"form-floating mb-3\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "imageFile", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "imageFile", [], "any", false, false, false, 32), 'label', ["label" => "(Optional) Upload an image of the book cover."]);
        yield "
                </div>

                <button class=\"btn btn-primary w-100\">Submit</button>
            ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "book/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  127 => 36,  120 => 32,  116 => 31,  110 => 28,  106 => 27,  99 => 23,  95 => 22,  88 => 18,  84 => 17,  77 => 13,  73 => 12,  66 => 8,  62 => 7,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-12 col-md-4 col-lg-4\">
            {{ form_start(form, { 'attr': { 'class': 'form-floating' } }) }}
                {{ form_errors(form) }}
                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.title, { 'attr': { 'class': 'form-control'} }) }}
                    {{ form_label(form.title, 'Enter the title of the book') }}
                </div>

                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.author, { 'attr': { 'class': 'form-control'} }) }}
                    {{ form_label(form.author, 'Enter the author name') }}
                </div>

                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.pages, { 'attr': { 'class': 'form-control', 'novalidate': 'novalidate' } }) }}
                    {{ form_label(form.pages, 'Enter the number of pages') }}
                </div>

                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.summary, { 'attr': { 'class': 'form-control'} }) }}
                    {{ form_label(form.summary, 'Provide a short summary of the book') }}
                </div>

                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.genre, { 'attr': { 'class': 'form-control'} }) }}
                    {{ form_label(form.genre, 'Specify the genre') }}
                </div>
                <div class=\"form-floating mb-3\">
                    {{ form_widget(form.imageFile, { 'attr': { 'class': 'form-control'} }) }}
                    {{ form_label(form.imageFile, '(Optional) Upload an image of the book cover.') }}
                </div>

                <button class=\"btn btn-primary w-100\">Submit</button>
            {{ form_end(form) }}
        </div>
    </div>
</div>", "book/_form.html.twig", "C:\\Users\\theo_\\Desktop\\Theo\\Uni\\Symfony Project\\bookreview\\templates\\book\\_form.html.twig");
    }
}
