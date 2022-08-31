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

/* home/index.html.twig */
class __TwigTemplate_dc25e0f1e330437cc8136abd1a231c8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        echo "<main>
    <section class=\"hero\">
        <div class=\"container-hero\">
            <div class=\"box-recherche\">
                <div class=\"bouton-type-recherche\">
                    <a href=\"#\">Rechercher une association</a>
                    <a href=\"#\">Rechercher un animal</a>
                </div>
                <div class=\"bouton-deroulant-recherche\">
                    <a href=\"\" class=\"recherche-deroulante\">Race</a>
                    <a href=\"\" class=\"recherche-deroulante\">Gabarit</a>
                    <a href=\"\" class=\"recherche-deroulante\">Age</a>
                    <a href=\"\" class=\"recherche-deroulante\">Lieu d'adoption</a>
                    <a href=\"\" class=\"recherche-deroulante\">Espece</a>
                    <a href=\"\" class=\"recherche-deroulante\">Sexe</a>
                    <a href=\"\" class=\"recherche-deroulante\">Pelage</a>
                    <a href=\"\" class=\"recherche-deroulante\">Cas spécifique</a>
                </div>
                <a href=\"#\" class=\"bouton-trouver\">Trouver un nouveau compagnon</a>
            </div>
        </div>
    </section>

    <div class=\"container-card\">
        <section class=\"chien-honneur\">

            <h2>Chien à l‘honneur :</h2>

            <section class=\"splide\" aria-label=\"Splide Basic HTML Example\">
                <div class=\"splide__track\">
                    <ul class=\"splide__list\">
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </section>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}
<main>
    <section class=\"hero\">
        <div class=\"container-hero\">
            <div class=\"box-recherche\">
                <div class=\"bouton-type-recherche\">
                    <a href=\"#\">Rechercher une association</a>
                    <a href=\"#\">Rechercher un animal</a>
                </div>
                <div class=\"bouton-deroulant-recherche\">
                    <a href=\"\" class=\"recherche-deroulante\">Race</a>
                    <a href=\"\" class=\"recherche-deroulante\">Gabarit</a>
                    <a href=\"\" class=\"recherche-deroulante\">Age</a>
                    <a href=\"\" class=\"recherche-deroulante\">Lieu d'adoption</a>
                    <a href=\"\" class=\"recherche-deroulante\">Espece</a>
                    <a href=\"\" class=\"recherche-deroulante\">Sexe</a>
                    <a href=\"\" class=\"recherche-deroulante\">Pelage</a>
                    <a href=\"\" class=\"recherche-deroulante\">Cas spécifique</a>
                </div>
                <a href=\"#\" class=\"bouton-trouver\">Trouver un nouveau compagnon</a>
            </div>
        </div>
    </section>

    <div class=\"container-card\">
        <section class=\"chien-honneur\">

            <h2>Chien à l‘honneur :</h2>

            <section class=\"splide\" aria-label=\"Splide Basic HTML Example\">
                <div class=\"splide__track\">
                    <ul class=\"splide__list\">
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                        <li class=\"splide__slide\">
                            <div class=\"info\">
                                <img src=\"img/fond.jpg\" alt=\"\">
                                <p class=\"name\">Rox</p>
                                <p class=\"sexe\">♂</p>
                                <p class=\"lieu\">Spa de luynes</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

        </section>
    </div>
</main>
{% endblock %}
", "home/index.html.twig", "/Users/leadargenton/new-hope/templates/home/index.html.twig");
    }
}
