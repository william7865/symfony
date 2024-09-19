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

/* accueil.html.twig */
class __TwigTemplate_c05c963e22ffa26be496ef401f186038 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\">
      <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
      <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22> </text></svg>\">
      <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        yield "\">
      ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 11
        yield "      ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 14
        yield "  </head>
  <body>
      ";
        // line 16
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 147
        yield "  </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Agence Site";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        yield "          ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_link_tags')->getCallable()("app"), "html", null, true);
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        yield "          ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('encore_entry_script_tags')->getCallable()("app"), "html", null, true);
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "      <section class=\"home\">
        <nav>
            <div class=\"logo\">
                <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Trip_advice.png"), "html", null, true);
        yield "\" alt=\"Trip Advice Logo\">
            </div>
            <div class=\"info\">
                <a href=\"#propos\">A propos</a>
                <a href=\"#nouveautes\">Nouveautés</a>
            </div>
        </nav>
        <div class=\"content\">
            <div class=\"text-section\">
                <h1>Bienvenue Sur Trip Advice</h1>
                <h2>Voyagez comme vous êtes !</h2>
                <a href=\"#destinations\" class=\"btn\">Voir les destinations</a>
            </div>
            <div class=\"image-section\">
                <img src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/avion.png"), "html", null, true);
        yield "\" alt=\"Avion\">
            </div>
        </div>
        <div class=\"scroll-down\">
            <span>&#x2193;</span>
        </div>
    </section>

    <section id=\"nouveautes\">
      <div class=\"nouveautes\">
        <h1>CE QUE NOUS PROPOSONS</h1>
        <p>
          1 ALLEZ - RETOURS VERS BALI<br />
          POUR SEULEMENT 1€ SYMBOLIQUE
        </p>
        <img src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bali.jpg"), "html", null, true);
        yield "\" alt=\"avion\" />
      </div>
    </section>

    <!-- Section Partant -->
<section class=\"partant\">
    <div class=\"partant-container\">
        <div class=\"partant-text\">
            <h1>Partant(e) ?</h1>
            <p> Votre été commence ici.
                Découvrez leurs meilleurs conseils pour une escale palpitante de 24 heures, des idées pour des séjours prolongés et explorez le Qatar avec style.Commencez par choisir votre activité préférée.</p>
                
            <a href=\"#\" class=\"btn-partant\">Rejoins-Nous !</a>
        </div>
        <div class=\"partant-image\">
            <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/bali2.png"), "html", null, true);
        yield "\" alt=\"avion\" />
        </div>
    </div>
</section>
<!-- Section Page3 -->
<section class=\"page3\">
    <div class=\"stats_1\">
        <div class=\"produit\">
            <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/produits.png"), "html", null, true);
        yield "\" alt=\"Produits locaux\">
            <h3>Produits locaux</h3>
        </div>
        <div class=\"produit\">
            <img src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/couverts.png"), "html", null, true);
        yield "\" alt=\"Restauration incluse\">
            <h3>Restauration incluse</h3>
        </div>
        <div class=\"produit\">
            <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stats.png"), "html", null, true);
        yield "\" alt=\"De plus en plus d'utilisateurs\">
            <h3>De plus en plus d'utilisateurs</h3>
        </div>
    </div>
    <div class=\"stats_2\">
        <div class=\"produit\">
            <h2>+1k</h2>
            <h3>Utilisateur par mois</h3>
        </div>
        <div class=\"avis\">
            <h2>84</h2>
            <h3>Avis</h3>
        </div>
        <div class=\"etoiles\">
            <h2>4,6</h2>
            <h3>Sur 5 étoiles</h3>
        </div>
        <div class=\"heures\">
            <h2>24h</h2>
            <h3>Temps de réponse</h3>
        </div>
    </div>
</section>
    <section class = \"form\">
        <div class=\"form-container\">
            <form action=\"index.php\" method=\"POST\">
                <label for=\"nom\">Nom :</label>
                <input type=\"text\" id=\"nom\" name=\"nom\" required>
                
                <label for=\"prénom\">Prénom :</label>
                <input type=\"text\" id=\"prénom\" name=\"prénom\" required>
                
                <label for=\"adresse\">Adresse :</label>
                <textarea id=\"adresse\" name=\"adresse\" rows=\"4\" required></textarea>
                
                <label for=\"codePostal\">Code Postal :</label>
                <input type=\"text\" id=\"codePostal\" name=\"codePostal\" required>
                
                <label for=\"ville\">Ville :</label>
                <input type=\"text\" id=\"ville\" name=\"ville\" required>
                
                <label for=\"telephone\">Numéro de téléphone :</label>
                <input type=\"tel\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{10}\" required>
                
                <label for=\"email\">Email :</label>
                <input type=\"email\" id=\"email\" name=\"email\" required> 

                <div>
                    <label>Carte de VTC :</label>
                    <input type=\"radio\" id=\"oui\" name=\"carte_vtc\" value=\"Oui\">
                    <label for=\"oui\">Oui</label>
                    <input type=\"radio\" id=\"non\" name=\"carte_vtc\" value=\"Non\">
                    <label for=\"non\">Non</label>
                </div>
                <div>
                    <label>Société :</label>
                    <input type=\"radio\" id=\"oui\" name=\"société\" value=\"Oui\" required>
                    <label for=\"oui\">Oui</label>            
                    <input type=\"radio\" id=\"non\" name=\"société\" value=\"Non\" required>
                    <label for=\"non\">Non</label>
                </div>
                <button type=\"submit\" name=\"valider\">Valider</button>
            </form>
        </div>
    </section>

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
        return "accueil.html.twig";
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
        return array (  264 => 80,  257 => 76,  250 => 72,  239 => 64,  221 => 49,  203 => 34,  186 => 20,  181 => 17,  168 => 16,  154 => 12,  141 => 11,  127 => 9,  114 => 8,  91 => 5,  78 => 147,  76 => 16,  72 => 14,  69 => 11,  67 => 8,  63 => 7,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
      <meta charset=\"UTF-8\">
      <title>{% block title %}Agence Site{% endblock %}</title>
      <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22> </text></svg>\">
      <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
      {% block stylesheets %}
          {{encore_entry_link_tags('app') }}
      {% endblock %}
      {% block javascripts %}
          {{encore_entry_script_tags('app') }}
      {% endblock %}
  </head>
  <body>
      {% block body %}
      <section class=\"home\">
        <nav>
            <div class=\"logo\">
                <img src=\"{{ asset('images/Trip_advice.png') }}\" alt=\"Trip Advice Logo\">
            </div>
            <div class=\"info\">
                <a href=\"#propos\">A propos</a>
                <a href=\"#nouveautes\">Nouveautés</a>
            </div>
        </nav>
        <div class=\"content\">
            <div class=\"text-section\">
                <h1>Bienvenue Sur Trip Advice</h1>
                <h2>Voyagez comme vous êtes !</h2>
                <a href=\"#destinations\" class=\"btn\">Voir les destinations</a>
            </div>
            <div class=\"image-section\">
                <img src=\"{{ asset('images/avion.png') }}\" alt=\"Avion\">
            </div>
        </div>
        <div class=\"scroll-down\">
            <span>&#x2193;</span>
        </div>
    </section>

    <section id=\"nouveautes\">
      <div class=\"nouveautes\">
        <h1>CE QUE NOUS PROPOSONS</h1>
        <p>
          1 ALLEZ - RETOURS VERS BALI<br />
          POUR SEULEMENT 1€ SYMBOLIQUE
        </p>
        <img src=\"{{ asset('images/bali.jpg') }}\" alt=\"avion\" />
      </div>
    </section>

    <!-- Section Partant -->
<section class=\"partant\">
    <div class=\"partant-container\">
        <div class=\"partant-text\">
            <h1>Partant(e) ?</h1>
            <p> Votre été commence ici.
                Découvrez leurs meilleurs conseils pour une escale palpitante de 24 heures, des idées pour des séjours prolongés et explorez le Qatar avec style.Commencez par choisir votre activité préférée.</p>
                
            <a href=\"#\" class=\"btn-partant\">Rejoins-Nous !</a>
        </div>
        <div class=\"partant-image\">
            <img src=\"{{ asset('images/bali2.png') }}\" alt=\"avion\" />
        </div>
    </div>
</section>
<!-- Section Page3 -->
<section class=\"page3\">
    <div class=\"stats_1\">
        <div class=\"produit\">
            <img src=\"{{ asset('images/produits.png') }}\" alt=\"Produits locaux\">
            <h3>Produits locaux</h3>
        </div>
        <div class=\"produit\">
            <img src=\"{{ asset('images/couverts.png') }}\" alt=\"Restauration incluse\">
            <h3>Restauration incluse</h3>
        </div>
        <div class=\"produit\">
            <img src=\"{{ asset('images/stats.png') }}\" alt=\"De plus en plus d'utilisateurs\">
            <h3>De plus en plus d'utilisateurs</h3>
        </div>
    </div>
    <div class=\"stats_2\">
        <div class=\"produit\">
            <h2>+1k</h2>
            <h3>Utilisateur par mois</h3>
        </div>
        <div class=\"avis\">
            <h2>84</h2>
            <h3>Avis</h3>
        </div>
        <div class=\"etoiles\">
            <h2>4,6</h2>
            <h3>Sur 5 étoiles</h3>
        </div>
        <div class=\"heures\">
            <h2>24h</h2>
            <h3>Temps de réponse</h3>
        </div>
    </div>
</section>
    <section class = \"form\">
        <div class=\"form-container\">
            <form action=\"index.php\" method=\"POST\">
                <label for=\"nom\">Nom :</label>
                <input type=\"text\" id=\"nom\" name=\"nom\" required>
                
                <label for=\"prénom\">Prénom :</label>
                <input type=\"text\" id=\"prénom\" name=\"prénom\" required>
                
                <label for=\"adresse\">Adresse :</label>
                <textarea id=\"adresse\" name=\"adresse\" rows=\"4\" required></textarea>
                
                <label for=\"codePostal\">Code Postal :</label>
                <input type=\"text\" id=\"codePostal\" name=\"codePostal\" required>
                
                <label for=\"ville\">Ville :</label>
                <input type=\"text\" id=\"ville\" name=\"ville\" required>
                
                <label for=\"telephone\">Numéro de téléphone :</label>
                <input type=\"tel\" id=\"telephone\" name=\"telephone\" pattern=\"[0-9]{10}\" required>
                
                <label for=\"email\">Email :</label>
                <input type=\"email\" id=\"email\" name=\"email\" required> 

                <div>
                    <label>Carte de VTC :</label>
                    <input type=\"radio\" id=\"oui\" name=\"carte_vtc\" value=\"Oui\">
                    <label for=\"oui\">Oui</label>
                    <input type=\"radio\" id=\"non\" name=\"carte_vtc\" value=\"Non\">
                    <label for=\"non\">Non</label>
                </div>
                <div>
                    <label>Société :</label>
                    <input type=\"radio\" id=\"oui\" name=\"société\" value=\"Oui\" required>
                    <label for=\"oui\">Oui</label>            
                    <input type=\"radio\" id=\"non\" name=\"société\" value=\"Non\" required>
                    <label for=\"non\">Non</label>
                </div>
                <button type=\"submit\" name=\"valider\">Valider</button>
            </form>
        </div>
    </section>

    {% endblock %}
  </body>
</html>
", "accueil.html.twig", "/Users/william/symfo_test_dev2/templates/accueil.html.twig");
    }
}
