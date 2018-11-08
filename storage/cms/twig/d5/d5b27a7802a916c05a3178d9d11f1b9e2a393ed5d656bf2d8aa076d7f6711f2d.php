<?php

/* E:\xampp\htdocs\oct-veil-shop-fin/themes/demo/partials/site/header.htm */
class __TwigTemplate_ddb60f9a96e26c997c30f1fe10e1f1e743756220187b81261366e00d223f4917 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar-pink navbar navbar-default navbar-fixed-top \" role=\"navigation\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("magazin-fat-u-halimat");
        echo "\">Фаты = Мечты</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse pull-right\">
            <ul class=\"nav navbar-nav\">
                <li class=\"";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("magazin-fat-u-halimat");
        echo "\">Виды фат </a></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\">Как выбрать</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">О нас</a></li>
\t            <li class=\"separator hidden-xs\"></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\" href=\"\"><span class=\"rounded-span\"> &nbsp&#10084;&nbsp</span></a></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\" href=\"\"><span class=\"rounded-span\"> &nbsp 3 &nbsp </span></a></li>
\t            <li class=\"nav-item ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a class=\"navbar-link\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Получить консультацию</a></li>

            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  58 => 17,  50 => 16,  42 => 15,  35 => 11,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar-pink navbar navbar-default navbar-fixed-top \" role=\"navigation\" >
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'magazin-fat-u-halimat'|page }}\">Фаты = Мечты</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse pull-right\">
            <ul class=\"nav navbar-nav\">
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'magazin-fat-u-halimat'|page }}\">Виды фат </a></li>
                <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\">Как выбрать</a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">О нас</a></li>
\t            <li class=\"separator hidden-xs\"></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\" href=\"\"><span class=\"rounded-span\"> &nbsp&#10084;&nbsp</span></a></li>
\t            <li class=\"nav-item\"><a class=\"navbar-link\" href=\"\"><span class=\"rounded-span\"> &nbsp 3 &nbsp </span></a></li>
\t            <li class=\"nav-item {% if this.page.id == 'plugins' %}active{% endif %}\"><a class=\"navbar-link\" href=\"{{ 'plugins'|page }}\">Получить консультацию</a></li>

            </ul>
        </div>
    </div>
</nav>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/partials/site/header.htm", "");
    }
}
