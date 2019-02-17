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
\t\t<p>>> Нажмите на понравившейся модели и закажите <em><u> бесплатную</u></em>  консультацию с нашим модельером <b>любым удобным для вас способом</b> >></p>
\t</div>

\t<div id=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["magnific"] ?? null), "html", null, true);
        echo "\" class=\"magnific\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "gallery", array()), "images", array()));
        foreach ($context['_seq'] as $context["i"] => $context["image"]) {
            // line 21
            echo "\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"picture-box thumb appearing-text-container\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\tdata-request=\"onPicClick\"
\t\t\t\t\t\t\t\t\t\tdata-request-data=\"
\t\t\t\t\t\t\t\t\t\t\tpic_url: '";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\t\t\tpic_title: '";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "',
\t\t\t\t\t\t\t\t\t\t\tpic_description: '";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
            echo "'
\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail image-to-be-overlayed\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "description", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array(0 => ($context["width"] ?? null), 1 => ($context["height"] ?? null)), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "property", array(0 => "width"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t\t\theight=\"";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["magnific"] ?? null), "property", array(0 => "height"), "method"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-symbol-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"appearing-symbol\"> &#9825; </span>
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
        // line 49
        echo "\t        </div>
\t    </div>
\t</div>
</div>


";
        // line 55
        if (0) {
            // line 56
            echo "\t<div id=\"dumper\"> ";
            echo $this->extensions['Cms\Twig\DebugExtension']->runDump($this->env, $context);
            echo "</div>
";
        }
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
        return array (  121 => 56,  119 => 55,  111 => 49,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  76 => 32,  69 => 28,  65 => 27,  61 => 26,  55 => 23,  51 => 21,  47 => 20,  41 => 17,  23 => 1,);
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
\t\t<p>>> Нажмите на понравившейся модели и закажите <em><u> бесплатную</u></em>  консультацию с нашим модельером <b>любым удобным для вас способом</b> >></p>
\t</div>

\t<div id=\"{{ magnific }}\" class=\"magnific\">
\t    <div class=\"container\">
\t        <div class=\"row\">
\t          {% for i, image in magnific.gallery.images %}
\t\t\t\t\t\t\t<div class=\"col-xs-6 col-sm-3\">
\t\t\t\t\t\t\t\t<div class=\"picture-box thumb appearing-text-container\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ image.path }}\"
\t\t\t\t\t\t\t\t\t\tdata-request=\"onPicClick\"
\t\t\t\t\t\t\t\t\t\tdata-request-data=\"
\t\t\t\t\t\t\t\t\t\t\tpic_url: '{{ image.path }}',
\t\t\t\t\t\t\t\t\t\t\tpic_title: '{{ image.title }}',
\t\t\t\t\t\t\t\t\t\t\tpic_description: '{{ image.description }}'
\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<img class=\"img-thumbnail image-to-be-overlayed\"
\t\t\t\t\t\t\t\t\t\t\t\ttitle=\"{{ image.title }}\"
\t\t\t\t\t\t\t\t\t\t\t\talt=\"{{ image.description }}\"
\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{ image.thumb( width , height ) }}\"
\t\t\t\t\t\t\t\t\t\t\t\twidth=\"{{ magnific.property('width') }}\"
\t\t\t\t\t\t\t\t\t\t\t\theight=\"{{ magnific.property('height') }}\"
\t\t\t\t\t\t\t\t\t\t/>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"specific-appearing-symbol-container\">
\t\t\t\t\t\t\t\t\t\t<span class=\"appearing-symbol\"> &#9825; </span>
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
</div>


{% if 0 %}
\t<div id=\"dumper\"> {{ dump() }}</div>
{% endif %}", "E:\\xampp\\htdocs\\oct-veil-shop-fin/themes/demo/pages/magazin-fat-u-halimat.htm", "");
    }
}
