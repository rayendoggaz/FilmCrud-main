<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_9d38e6ffc6c0c4d4a08800482baeafd0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home | page ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container start-50 top-50 position-absolute translate-middle\">
        <div class=\"row\">
            <div class=\"col\"></div>

            <div class=\"col text-center\">
                <h1>Films</h1>
            </div>

            <div class=\"col text-center\">
                <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#create\">Add Film</button>
            </div>
        </div>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 20
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 22
                echo "                    <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
        ";
        // line 28
        echo "<div class=\"row mt-3\">
    <div class=\"col\">
        <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_books");
        echo "\" method=\"GET\">
            <div class=\"input-group mb-3 d-flex\">
                <input type=\"text\" class=\"form-control me-2\" name=\"q\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "get", ["q"], "method", false, false, false, 32), "html", null, true);
        echo "\" placeholder=\"Search by title or author\">
                <button class=\"btn btn-outline-secondary me-2\" type=\"submit\">Search</button>

                <select class=\"form-select me-2\" name=\"sort_by\">
                    <option value=\"title\">Title</option>
                    <option value=\"author\">Author</option>
                    <option value=\"genre\">Genre</option>
                    <option value=\"releaseYear\">Release Year</option>
                </select>
                <button class=\"btn btn-outline-secondary\" type=\"submit\">Sort</button>
            </div>
        </form>
    </div>
</div>

        <div class=\"row text-center mt-3\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Releaseyear</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 60
        if ( !twig_test_empty((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 60, $this->source); })()))) {
            // line 61
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 62
                echo "                        <tr class=\"table-row\">
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 64), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "genres", [], "any", false, false, false, 65), "html", null, true);
                echo "</td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "releaseYear", [], "any", false, false, false, 66), "html", null, true);
                echo "</td>

                            <td class=\"text-center\">
                                <button class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editBook-";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\"><i class=\"bi bi-pencil-square\"></i></button>
                                <button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteBook\" onclick=\"verwijderProductId(";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 70), "html", null, true);
                echo ")\"><i class=\"bi bi-trash\"></i></button>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
                ";
        } else {
            // line 76
            echo "                    <tr>
                        <td colspan=\"5\"><h4>No film found</h4></td>
                    </tr>
                ";
        }
        // line 80
        echo "
                </tbody>
            </table>
        </div>
    </div>


    <div class=\"modal\" tabindex=\"-1\" id=\"create\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"mx-auto\">Add Film</h3>

                    <button class=\"btn\" type=\"button\"data-bs-dismiss=\"modal\">
                        <h4>x</h4>
                    </button>
                </div>

                ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_start', ["attr" => ["id" => "form", "class" => "form-horizontal"]]);
        echo "
                <div class=\"modal-body\">
                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "author", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "title", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "genres", [], "any", false, false, false, 102), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "releaseYear", [], "any", false, false, false, 103), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"modal-footer d-flex justify-content-center\">
                    <button type=\"submit\" class=\"btn btn-primary mx-auto\">Create</button>
                </div>
                ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 114
            echo "    <div class=\"modal\" tabindex=\"-1\" id=\"editBook-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 114), "html", null, true);
            echo "\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"mx-auto\">Edit Film</h3>

                    <button class=\"btn\" type=\"button\"data-bs-dismiss=\"modal\">
                        <h4>x</h4>
                    </button>
                </div>

                ";
            // line 125
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 125, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 125), [], "array", false, false, false, 125), 'form_start', ["attr" => ["class" => "form-horizontal", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_book", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 125)])]]);
            echo "
                <div class=\"modal-body\">
                    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 127, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 127), [], "array", false, false, false, 127), "author", [], "any", false, false, false, 127), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                    ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 128, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 128), [], "array", false, false, false, 128), "title", [], "any", false, false, false, 128), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                    ";
            // line 129
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 129, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 129), [], "array", false, false, false, 129), "genres", [], "any", false, false, false, 129), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                    ";
            // line 130
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 130, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 130), [], "array", false, false, false, 130), "releaseYear", [], "any", false, false, false, 130), 'row', ["attr" => ["class" => "form-control"]]);
            echo "
                </div>
                <div class=\"modal-footer d-flex justify-content-center\">
                    <button type=\"submit\" class=\"btn btn-primary mx-auto\">Edit</button>
                </div>
                ";
            // line 135
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["editForm"]) || array_key_exists("editForm", $context) ? $context["editForm"] : (function () { throw new RuntimeError('Variable "editForm" does not exist.', 135, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 135), [], "array", false, false, false, 135), 'form_end');
            echo "
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
    <div class=\"modal\" tabindex=\"-1\" id=\"deleteBook\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <form action=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_book", ["id" => "PLACEHOLDER_ID"]);
        echo "\" method=\"post\">

                    <div class=\"modal-header\">
                        <h1 class=\"mx-auto\">Are you sure?</h1>
                    </div>

                    <input type=\"hidden\" id=\"verwijderen-id\" name=\"id\">

                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary ms-auto me-3\">
                            <i class=\"bi bi-check-lg\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-danger me-auto\" data-bs-dismiss=\"modal\">
                            <i class=\"bi bi-x-lg\"></i>
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 170
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 

    <script>
        function verwijderProductId(bookId) {
            document.getElementById('verwijderen-id').value = bookId;
            document.querySelector('form[action*=\"PLACEHOLDER_ID\"]').action = '";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_book", ["id" => "PLACEHOLDER_ID"]);
        echo "'.replace('PLACEHOLDER_ID', bookId);
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  393 => 175,  377 => 170,  343 => 145,  336 => 140,  325 => 135,  317 => 130,  313 => 129,  309 => 128,  305 => 127,  300 => 125,  285 => 114,  281 => 113,  273 => 108,  265 => 103,  261 => 102,  257 => 101,  253 => 100,  248 => 98,  228 => 80,  222 => 76,  218 => 74,  208 => 70,  204 => 69,  198 => 66,  194 => 65,  190 => 64,  186 => 63,  183 => 62,  178 => 61,  176 => 60,  145 => 32,  140 => 30,  136 => 28,  133 => 26,  126 => 24,  117 => 22,  113 => 21,  108 => 20,  104 => 19,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends'base.html.twig' %}

    {% block title %}Home | page {% endblock %}

{% block body %}
    <div class=\"container start-50 top-50 position-absolute translate-middle\">
        <div class=\"row\">
            <div class=\"col\"></div>

            <div class=\"col text-center\">
                <h1>Films</h1>
            </div>

            <div class=\"col text-center\">
                <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#create\">Add Film</button>
            </div>
        </div>

        {% for label, messages in app.flashes %}
            <div class=\"alert alert-{{ label }}\">
                {% for message in messages %}
                    <p>{{ message }}</p>
                {% endfor %}
            </div>
        {% endfor %}

        {# Search Form and Sorting Options #}
<div class=\"row mt-3\">
    <div class=\"col\">
        <form action=\"{{ path('crud_books') }}\" method=\"GET\">
            <div class=\"input-group mb-3 d-flex\">
                <input type=\"text\" class=\"form-control me-2\" name=\"q\" value=\"{{ app.request.query.get('q') }}\" placeholder=\"Search by title or author\">
                <button class=\"btn btn-outline-secondary me-2\" type=\"submit\">Search</button>

                <select class=\"form-select me-2\" name=\"sort_by\">
                    <option value=\"title\">Title</option>
                    <option value=\"author\">Author</option>
                    <option value=\"genre\">Genre</option>
                    <option value=\"releaseYear\">Release Year</option>
                </select>
                <button class=\"btn btn-outline-secondary\" type=\"submit\">Sort</button>
            </div>
        </form>
    </div>
</div>

        <div class=\"row text-center mt-3\">
            <table class=\"table table-striped\">
                <thead>
                <tr>
                    <th>Author</th>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Releaseyear</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                {% if books is not empty %}
                    {% for book in books %}
                        <tr class=\"table-row\">
                            <td>{{ book.author }}</td>
                            <td>{{ book.title }}</td>
                            <td>{{ book.genres }}</td>
                            <td>{{ book.releaseYear }}</td>

                            <td class=\"text-center\">
                                <button class=\"btn btn-success\" data-bs-toggle=\"modal\" data-bs-target=\"#editBook-{{ book.id }}\"><i class=\"bi bi-pencil-square\"></i></button>
                                <button class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#deleteBook\" onclick=\"verwijderProductId({{ book.id }})\"><i class=\"bi bi-trash\"></i></button>
                            </td>
                        </tr>
                    {% endfor %}

                {% else %}
                    <tr>
                        <td colspan=\"5\"><h4>No film found</h4></td>
                    </tr>
                {% endif %}

                </tbody>
            </table>
        </div>
    </div>


    <div class=\"modal\" tabindex=\"-1\" id=\"create\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"mx-auto\">Add Film</h3>

                    <button class=\"btn\" type=\"button\"data-bs-dismiss=\"modal\">
                        <h4>x</h4>
                    </button>
                </div>

                {{ form_start(form, {'attr': {'id': 'form', 'class': 'form-horizontal'}}) }}
                <div class=\"modal-body\">
                    {{ form_row(form.author, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(form.title, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(form.genres, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(form.releaseYear, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"modal-footer d-flex justify-content-center\">
                    <button type=\"submit\" class=\"btn btn-primary mx-auto\">Create</button>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>

    {% for book in books %}
    <div class=\"modal\" tabindex=\"-1\" id=\"editBook-{{ book.id }}\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3 class=\"mx-auto\">Edit Film</h3>

                    <button class=\"btn\" type=\"button\"data-bs-dismiss=\"modal\">
                        <h4>x</h4>
                    </button>
                </div>

                {{ form_start(editForm[book.id], {'attr': {'class': 'form-horizontal', 'action': path('edit_book', {'id': book.id})}}) }}
                <div class=\"modal-body\">
                    {{ form_row(editForm[book.id].author, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(editForm[book.id].title, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(editForm[book.id].genres, {'attr': {'class': 'form-control'}}) }}
                    {{ form_row(editForm[book.id].releaseYear, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"modal-footer d-flex justify-content-center\">
                    <button type=\"submit\" class=\"btn btn-primary mx-auto\">Edit</button>
                </div>
                {{ form_end(editForm[book.id]) }}
            </div>
        </div>
    </div>
    {% endfor %}

    <div class=\"modal\" tabindex=\"-1\" id=\"deleteBook\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <form action=\"{{ path('delete_book', {'id': 'PLACEHOLDER_ID'}) }}\" method=\"post\">

                    <div class=\"modal-header\">
                        <h1 class=\"mx-auto\">Are you sure?</h1>
                    </div>

                    <input type=\"hidden\" id=\"verwijderen-id\" name=\"id\">

                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-primary ms-auto me-3\">
                            <i class=\"bi bi-check-lg\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-danger me-auto\" data-bs-dismiss=\"modal\">
                            <i class=\"bi bi-x-lg\"></i>
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %} 

    <script>
        function verwijderProductId(bookId) {
            document.getElementById('verwijderen-id').value = bookId;
            document.querySelector('form[action*=\"PLACEHOLDER_ID\"]').action = '{{ path(\"delete_book\", {\"id\": \"PLACEHOLDER_ID\"}) }}'.replace('PLACEHOLDER_ID', bookId);
        }
    </script>

{% endblock %}", "index.html.twig", "C:\\Users\\betech.tn\\Downloads\\BookCrud-main\\BookCrud-main\\templates\\index.html.twig");
    }
}
