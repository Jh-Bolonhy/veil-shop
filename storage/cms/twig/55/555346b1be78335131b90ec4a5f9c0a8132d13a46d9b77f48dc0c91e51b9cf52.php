<?php

/* E:\xampp\htdocs\oct-veil-shop-fin/themes/demo/pages/magazin-fat-u-halimat.htm */
class __TwigTemplate_562111ae0a68379055cb2ab34bdc7a82edca4a3696917636bf02e133634a4d6d extends Twig_Template
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
        echo "<div class=\"jumbotron hidden-xs\">
\t<div class=\"container\">
\t\t<div class=\"banner-container\">
\t\t\t<img src=\"http://oct-veil-shop-fin/storage/app/uploads/public/5bd/f28/395/5bdf28395ca84989959861.jpg\" />
\t\t\t<div class=\"banner-link-container\">
\t\t\t\t<a> <b> >> Как выбрать <em>Идеальную Фату</em>? </b></a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container\">
\t<div class=\"preambula\">
\t\t<p>>> Нажмите на понравившейся модели и закажите <em><u> бесплатную</u></em>  консультацию <b>любым удобным для вас способом</b> с нашим модельером >></p>
\t</div>
\t<div id=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["magnific"] ?? null), "html", null, true);
        echo "\" class=\"magnific\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t          ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "gallery", array()), "images", array()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 20
            echo "\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"picture-box thumb appearing-text-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail image-to-be-overlayed\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => ($context["width"] ?? null), 1 => ($context["height"] ?? null)), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\theight=\"";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-symbol-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"rounded-span appearing-symbol\"> &#10084;</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-text-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"appearing-text\"> В ПОНРАВИВШИЕСЯ \t</div>
\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t        </div>
\t    </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/pages/magazin-fat-u-halimat.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  75 => 28,  71 => 27,  67 => 26,  63 => 25,  59 => 24,  54 => 22,  50 => 20,  46 => 19,  40 => 16,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron hidden-xs\">
\t<div class=\"container\">
\t\t<div class=\"banner-container\">
\t\t\t<img src=\"http://oct-veil-shop-fin/storage/app/uploads/public/5bd/f28/395/5bdf28395ca84989959861.jpg\" />
\t\t\t<div class=\"banner-link-container\">
\t\t\t\t<a> <b> >> Как выбрать <em>Идеальную Фату</em>? </b></a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<div class=\"container\">
\t<div class=\"preambula\">
\t\t<p>>> Нажмите на понравившейся модели и закажите <em><u> бесплатную</u></em>  консультацию <b>любым удобным для вас способом</b> с нашим модельером >></p>
\t</div>
\t<div id=\"{{ magnific }}\" class=\"magnific\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t          {% for i, image in magnific.gallery.images %}
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"picture-box thumb appearing-text-container\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ image.path }}\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail image-to-be-overlayed\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"{{ image.title }}\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"{{ image.description }}\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ image.thumb( width , height ) }}\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"{{ magnific.property('width') }}\"
\t\t\t\t\t\t\t\t\t\t\t\theight=\"{{ magnific.property('height') }}\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-symbol-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"rounded-span appearing-symbol\"> &#10084;</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-text-container\">
\t\t\t\t\t\t\t\t\t\t<div class=\"appearing-text\"> В ПОНРАВИВШИЕСЯ \t</div>
\t\t\t\t\t\t\t\t  </div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t          {% endfor %}
\t        </div>
\t    </div>
\t</div>
</div>", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/pages/magazin-fat-u-halimat.htm", "");
    }
}