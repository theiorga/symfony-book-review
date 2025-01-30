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

/* book/index.html.twig */
class __TwigTemplate_c6557bed289f3df94be9728de660cba5 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Book Review Library";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Book Reviews Library</h1>
                <p class=\"lead text-body-secondary\">Pick any book and check to see what others think about it. If you cannot find the book you're looking for, feel free to easily add it using the menu and then write a review about it.</p>
                <p>
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_new");
        yield "\" class=\"btn btn-primary my-2\">Add a book</a>
                </p>
            </div>
        </div>
    </section>

    <main>

        <div class=\"album py-5 bg-body-tertiary\">
            <div class=\"container\">
                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 25
            yield "                        <div class=\"col\">
                            <div class=\"card shadow-sm\">
                                <img src=\"";
            // line 27
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "imageFilename", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "imageFilename", [], "any", false, false, false, 27))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/_default_book.jpg"), "html", null, true)));
            yield "\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" alt=\"Book cover image\">
                                <div class=\"card-body\">
                                    <p class=\"card-text text-center\">";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 29), "html", null, true);
            yield "</p>
                                    <p class=\"card-text\">";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 30), "html", null, true);
            yield "</p>
                                    <div>
                                        <div class=\"d-flex justify-content-between\">
                                            <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary\">See book</a>
                                            <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new", ["bookId" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary\">Write a review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "                </div>

                <!-- Pagination -->
                <div class=\"mt-4 d-flex justify-content-center\">
                    ";
        // line 45
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 45, $this->source); })()));
        yield "
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "book/index.html.twig";
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
        return array (  169 => 45,  163 => 41,  150 => 34,  146 => 33,  140 => 30,  136 => 29,  131 => 27,  127 => 25,  123 => 24,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book Review Library{% endblock %}

{% block body %}

    <section class=\"py-5 text-center container\">
        <div class=\"row py-lg-5\">
            <div class=\"col-lg-6 col-md-8 mx-auto\">
                <h1 class=\"fw-light\">Book Reviews Library</h1>
                <p class=\"lead text-body-secondary\">Pick any book and check to see what others think about it. If you cannot find the book you're looking for, feel free to easily add it using the menu and then write a review about it.</p>
                <p>
                    <a href=\"{{ path('app_book_new') }}\" class=\"btn btn-primary my-2\">Add a book</a>
                </p>
            </div>
        </div>
    </section>

    <main>

        <div class=\"album py-5 bg-body-tertiary\">
            <div class=\"container\">
                <div class=\"row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 g-3\">
                    {% for book in books %}
                        <div class=\"col\">
                            <div class=\"card shadow-sm\">
                                <img src=\"{{ book.imageFilename ? asset('uploads/' ~ book.imageFilename) : asset('images/_default_book.jpg') }}\" class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"225\" alt=\"Book cover image\">
                                <div class=\"card-body\">
                                    <p class=\"card-text text-center\">{{ book.title }}</p>
                                    <p class=\"card-text\">{{ book.author }}</p>
                                    <div>
                                        <div class=\"d-flex justify-content-between\">
                                            <a href=\"{{ path('app_book_show', {'id':book.id}) }}\" class=\"btn btn-outline-secondary\">See book</a>
                                            <a href=\"{{ path('app_review_new', {'bookId':book.id}) }}\" class=\"btn btn-outline-primary\">Write a review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <!-- Pagination -->
                <div class=\"mt-4 d-flex justify-content-center\">
                    {{ knp_pagination_render(books) }}
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "book/index.html.twig", "C:\\Users\\theo_\\Desktop\\Theo\\Uni\\Symfony Project\\bookreview\\templates\\book\\index.html.twig");
    }
}
