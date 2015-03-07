<?php

/* ::base.html.twig */
class __TwigTemplate_dcd774e5b5c756369d922c5d91bdda6afbe2e312ffc3b84fe851e477025525b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <!DOCTYPE html>
    <html>

       <head>
           <meta http-equiv=\"content-type\" content=\"text/html\"; charset=\"utf-8\" />
           <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog </title>
            <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->
           ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "           <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        </head>
        <body>
             <section id=\"wrapper\">
                <header id=\"header\">
                    <div class=\"top\">
                        ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 32
        echo "
                    </div>

                    <hgroup>
        <h2>";
        // line 36
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
        <h3>";
        // line 37
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
        </hgroup>
                </header>

                  <section class=\"main-col\">
                    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "                </section>
                <aside class=\"sidebar\">
                    ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 46
        echo "                </aside>

                <div id=\"footer\">
                    ";
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "                </div>
            </section>

            ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "

        </body>
    </html>

";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "                <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
                <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
                <!--<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />-->
            ";
    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        // line 24
        echo "        <nav>
            <ul class=\"navigation\">
                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
            </ul>
        </nav>
    ";
    }

    // line 36
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
    }

    // line 37
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 45
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 49
    public function block_footer($context, array $blocks = array())
    {
        // line 50
        echo "                        Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                    ";
    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 55,  181 => 50,  178 => 49,  173 => 45,  168 => 42,  160 => 37,  152 => 36,  144 => 28,  140 => 27,  136 => 26,  132 => 24,  129 => 23,  123 => 14,  119 => 13,  115 => 11,  112 => 10,  106 => 6,  97 => 56,  95 => 55,  90 => 52,  88 => 49,  83 => 46,  81 => 45,  77 => 43,  75 => 42,  67 => 37,  63 => 36,  57 => 32,  55 => 23,  44 => 16,  42 => 10,  35 => 6,  28 => 1,);
    }
}
