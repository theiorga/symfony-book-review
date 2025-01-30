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

/* book/show.html.twig */
class __TwigTemplate_fcb8622d67cff52a1282e8c8b1f84d7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/show.html.twig", 1);
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

        yield "Book";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-5\">Book: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-md-8 col-lg-4 pb-5\">
                ";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 10, $this->source); })()), "imageFilename", [], "any", false, false, false, 10)) {
            // line 11
            yield "                     <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 11, $this->source); })()), "imageFilename", [], "any", false, false, false, 11))), "html", null, true);
            yield "\" class=\"img-fluid\" width=\"100%\" height=\"225\" alt=\"Book cover image\">
                ";
        }
        // line 13
        yield "            </div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Title</div>
            <div class=\"col-md-8\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), "html", null, true);
        yield "</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Author</div>
            <div class=\"col-md-8\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 21, $this->source); })()), "author", [], "any", false, false, false, 21), "html", null, true);
        yield "</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Pages</div>
            <div class=\"col-md-8\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 25, $this->source); })()), "pages", [], "any", false, false, false, 25), "html", null, true);
        yield "</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Summary</div>
            <div class=\"col-md-8\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 29, $this->source); })()), "summary", [], "any", false, false, false, 29), "html", null, true);
        yield "</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Genre</div>
            <div class=\"col-md-8\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 33, $this->source); })()), "genre", [], "any", false, false, false, 33), "html", null, true);
        yield "</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Added by</div>
            <div class=\"col-md-8\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 37, $this->source); })()), "createdBy", [], "any", false, false, false, 37), "email", [], "any", false, false, false, 37), "html", null, true);
        yield "</div>
        </div>
        ";
        // line 39
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 39, $this->source); })()), "createdBy", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)))) {
            // line 40
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"btn btn-secondary\">Edit</a>
        ";
        }
        // line 42
        yield "
        <hr>

        <h2 class=\"text-center my-5\">Reviews</h2>
        <a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_new", ["bookId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" class=\"btn mb-3 btn-primary\">Write a review</a>

        ";
        // line 48
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 48, $this->source); })()))) {
            // line 49
            yield "            <div class=\"row\">
                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 50, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 51
                yield "                    <div class=\"col-12 mb-3\">
                        <div class=\"card\">
                            <div class=\"card-header\">Reviewer: ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "reviewer", [], "any", false, false, false, 53), "email", [], "any", false, false, false, 53), "html", null, true);
                yield "</div>
                            <div style=\"padding-right: 1rem;\">
                               <span class=\"float-end text-muted\">";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 55), "d M Y H:i"), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"card-body\">
                                <p>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "reviewText", [], "any", false, false, false, 58), "html", null, true);
                yield "</p>
                                ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["review"], "reviewer", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)))) {
                    // line 60
                    yield "                                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_review_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    yield "\" class=\"btn btn-primary\">Edit</a>
                                    ";
                    // line 61
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "review/_delete_form.html.twig");
                    yield "
                                ";
                }
                // line 63
                yield "                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            yield "            </div>
            <div class=\"mt-4 d-flex justify-content-center\">
                ";
            // line 69
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 69, $this->source); })()));
            yield "
            </div>
        ";
        } else {
            // line 72
            yield "            <p class=\"text-center\">No reviews available.</p>
        ";
        }
        // line 74
        yield "
        ";
        // line 75
        yield Twig\Extension\CoreExtension::include($this->env, $context, "_back_to_list_btn.html.twig");
        yield "
    </div>
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
        return "book/show.html.twig";
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
        return array (  269 => 75,  266 => 74,  262 => 72,  256 => 69,  252 => 67,  235 => 63,  230 => 61,  225 => 60,  223 => 59,  219 => 58,  213 => 55,  208 => 53,  204 => 51,  187 => 50,  184 => 49,  182 => 48,  177 => 46,  171 => 42,  165 => 40,  163 => 39,  158 => 37,  151 => 33,  144 => 29,  137 => 25,  130 => 21,  123 => 17,  117 => 13,  111 => 11,  109 => 10,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"text-center mb-5\">Book: {{ book.title }}</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-10 col-md-8 col-lg-4 pb-5\">
                {% if book.imageFilename %}
                     <img src=\"{{ asset('uploads/' ~ book.imageFilename)}}\" class=\"img-fluid\" width=\"100%\" height=\"225\" alt=\"Book cover image\">
                {% endif %}
            </div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Title</div>
            <div class=\"col-md-8\">{{ book.title }}</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Author</div>
            <div class=\"col-md-8\">{{ book.author }}</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Pages</div>
            <div class=\"col-md-8\">{{ book.pages }}</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Summary</div>
            <div class=\"col-md-8\">{{ book.summary }}</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Genre</div>
            <div class=\"col-md-8\">{{ book.genre }}</div>
        </div>
        <div class=\"row mb-4 border-bottom pb-2\">
            <div class=\"col-md-4 fw-bold\">Added by</div>
            <div class=\"col-md-8\">{{ book.createdBy.email }}</div>
        </div>
        {% if app.user and app.user.id == book.createdBy.id %}
            <a href=\"{{ path('app_book_edit', {'id': book.id}) }}\" class=\"btn btn-secondary\">Edit</a>
        {% endif %}

        <hr>

        <h2 class=\"text-center my-5\">Reviews</h2>
        <a href=\"{{ path('app_review_new', {'bookId':book.id}) }}\" class=\"btn mb-3 btn-primary\">Write a review</a>

        {% if reviews is not empty %}
            <div class=\"row\">
                {% for review in reviews %}
                    <div class=\"col-12 mb-3\">
                        <div class=\"card\">
                            <div class=\"card-header\">Reviewer: {{ review.reviewer.email }}</div>
                            <div style=\"padding-right: 1rem;\">
                               <span class=\"float-end text-muted\">{{ review.createdAt|date('d M Y H:i') }}</span>
                            </div>
                            <div class=\"card-body\">
                                <p>{{ review.reviewText }}</p>
                                {% if app.user and app.user.id == review.reviewer.id %}
                                    <a href=\"{{ path('app_review_edit', {'id': review.id}) }}\" class=\"btn btn-primary\">Edit</a>
                                    {{ include('review/_delete_form.html.twig') }}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
            <div class=\"mt-4 d-flex justify-content-center\">
                {{ knp_pagination_render(reviews) }}
            </div>
        {% else %}
            <p class=\"text-center\">No reviews available.</p>
        {% endif %}

        {{ include('_back_to_list_btn.html.twig') }}
    </div>
{% endblock %}
", "book/show.html.twig", "C:\\Users\\theo_\\Desktop\\Theo\\Uni\\Symfony Project\\bookreview\\templates\\book\\show.html.twig");
    }
}
