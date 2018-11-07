<?php

/* E:\xampp\htdocs\oct-veil-shop-fin/plugins/mohsin/magnificgallery/components/magnific/default.htm */
class __TwigTemplate_27bf1e971bf0184ac0ab1dfddda1138b34eb3f43172916a5cc707eadaa9ef08f extends Twig_Template
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
        echo "
<div id=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\" class=\"magnific\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "gallery", array()), "images", array()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 4
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
            echo "\"><img title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => ($context["width"] ?? null), 1 => ($context["height"] ?? null)), "method"), "html", null, true);
            echo "\" width=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
            echo "\" height=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
            echo "\"></a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\oct-veil-shop-fin/plugins/mohsin/magnificgallery/components/magnific/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  34 => 4,  30 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div id=\"{{ __SELF__ }}\" class=\"magnific\">
  {% for i, image in __SELF__.gallery.images %}
  <a href=\"{{ image.path }}\"><img title=\"{{ image.title }}\" alt=\"{{ image.description }}\" src=\"{{ image.thumb( width , height ) }}\" width=\"{{ __SELF__.property('width') }}\" height=\"{{ __SELF__.property('height') }}\"></a>
  {% endfor %}
</div>
", "E:\\xampp\\htdocs\\oct-veil-shop-fin/plugins/mohsin/magnificgallery/components/magnific/default.htm", "");
    }
}
