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

/* @SurvosBootstrap/_example_sidebar.html.twig */
class __TwigTemplate_9e4208d3371da99adcf188ecc46a3aaf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/_example_sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SurvosBootstrap/_example_sidebar.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark\">
            <div class=\"d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100\">
                <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5 d-none d-sm-inline\">Menu</span>
                </a>
                <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link align-middle px-0\">
                            <i class=\"fs-4 bi-house\"></i> <span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-speedometer2\"></i> <span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                        <ul class=\"collapse show nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-table\"></i> <span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li>
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle \">
                            <i class=\"fs-4 bi-bootstrap\"></i> <span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#submenu3\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-grid\"></i> <span class=\"ms-1 d-none d-sm-inline\">Products</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu3\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 2</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 3</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-people\"></i> <span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class=\"dropdown pb-4\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col py-3\">
            Content area...
        </div>
    </div>
</div>
Example 1 - Demo

Sidebar Example 2
Vertical sidebar that changes to navbar on mobile

This 2nd example is a vertical sidebar (on large screens) that switches to a horizontal navbar (on smaller mobile screens). It's a multi-level sidebar with collapsible menu items. The menu functions like an \"accordion\" where only a single menu is open at a time.

This sidebar layout also considers sticky and scrolling behaviors. The sidebar and bottom footer both appear fixed on larger screens. Only the content area is scrollable (when content height allows). On mobile screens, the horizontal sidebar remains fixed at the top (using sticky position), and the remaining content and footer sections scroll the entire page height. For this reason a small CSS change is need to make the height responsive...

Alt Text

HTML Markup
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-auto bg-light sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top\">
                <a href=\"/\" class=\"d-block p-3 link-dark text-decoration-none\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Icon-only\">
                    <i class=\"bi-bootstrap fs-1\"></i>
                </a>
                <ul class=\"nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\">
                            <i class=\"bi-house fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Dashboard\">
                            <i class=\"bi-speedometer2 fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Orders\">
                            <i class=\"bi-table fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Products\">
                            <i class=\"bi-heart fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Customers\">
                            <i class=\"bi-people fs-1\"></i>
                        </a>
                    </li>
                </ul>
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"bi-person-circle h2\"></i>
                    </a>
                    <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm p-3 min-vh-100\">
            <!-- content -->
        </div>
    </div>
</div>
Example 2 - Demo

If you don't need the sticky footer, here's a slight variation that doesn't reguire extra CSS

Sidebar Example 3
Sidebar with Bootstrap icons

The next example is similar to the prior as it changes to horizontal orientation on mobile. This full height example has big beautiful icons from Bootstrap icons. This example also use sticky position to make the sidebar appear fixed as the page is scrolled.

Alt Text

HTML Markup
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-auto bg-light sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top\">
                <a href=\"/\" class=\"d-block p-3 link-dark text-decoration-none\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Icon-only\">
                    <i class=\"bi-bootstrap fs-1\"></i>
                </a>
                <ul class=\"nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\">
                            <i class=\"bi-house fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Dashboard\">
                            <i class=\"bi-speedometer2 fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Orders\">
                            <i class=\"bi-table fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Products\">
                            <i class=\"bi-heart fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Customers\">
                            <i class=\"bi-people fs-1\"></i>
                        </a>
                    </li>
                </ul>
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"bi-person-circle h2\"></i>
                    </a>
                    <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm p-3 min-vh-100\">
            <!-- content -->
        </div>
    </div>
</div>
Example 3 - Demo

Sidebar Example 4
Collapse off-canvas left sidebar

This is the first collapsible example, and it's done using Bootstrap 5's new Offcanvas component. This left sidebar overlays the main content area and can be hidden/shown using a toggle button.

Alt Text

HTML Markup
<div class=\"offcanvas offcanvas-start w-25\" tabindex=\"-1\" id=\"offcanvas\" data-bs-keyboard=\"false\" data-bs-backdrop=\"false\">
    <div class=\"offcanvas-header\">
        <h6 class=\"offcanvas-title d-none d-sm-block\" id=\"offcanvas\">Menu</h6>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body px-0\">
        <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-start\" id=\"menu\">
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-house\"></i><span class=\"ms-1 d-none d-sm-inline\">Home</span>
                </a>
            </li>
            <li>
                <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-speedometer2\"></i><span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-table\"></i><span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle  text-truncate\" id=\"dropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fs-5 bi-bootstrap\"></i><span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span>
                </a>
                <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdown\">
                    <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                </ul>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-grid\"></i><span class=\"ms-1 d-none d-sm-inline\">Products</span></a>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-people\"></i><span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
            </li>
        </ul>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col min-vh-100 py-3\">
            <!-- toggler -->
            <button class=\"btn float-end\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvas\" role=\"button\">
                <i class=\"bi bi-arrow-right-square-fill fs-3\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvas\"></i>
            </button>
            Content..
        </div>
    </div>
</div>
Example 4 - Offcanvas \"overlay\" Sidebar Demo

Sidebar Example 5
Navbar with search form and left sticky sidebar

This last example considers other components like the top Navbar and main content area. The sidebar uses sticky-top to appear fixed on the left side so that it remains in place as the page is scrolled. On mobile, the sidebar switches to a horizontal icon bar positioned below the Navbar.

Example 5 - Navbar + Sidebar Demo

Sidebar Example 6
Simple offcanvas \"push\" sidebar

If you read my Bootstrap 5 Offcanvas article you've seen that the Offcanvas component is for an \"overlay\" type sidebar. However, if you want a \"push\" type sidebar, the Offcanvas component isn't going to work.

To create a \"push\" type sidebar, instead use a Bootstrap grid column to contain the sidebar, and the Collapse component to toggle it open/closed...
<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto px-0\">
            <div id=\"sidebar\" class=\"collapse collapse-horizontal show border-end\">
                <div id=\"sidebar-nav\" class=\"list-group border-0 rounded-0 text-sm-start min-vh-100\">
                    <a href=\"#\" class=\"list-group-item border-end-0 d-inline-block text-truncate\" data-bs-parent=\"#sidebar\"><span>Item</span> </a>
                    (more nav items) ...
                </div>
            </div>
        </div>
        <main class=\"col ps-md-2 pt-2\">
            <a href=\"#\" data-bs-target=\"#sidebar\" data-bs-toggle=\"collapse\" class=\"border rounded-3 p-1 text-decoration-none\"><i class=\"bi bi-list bi-lg py-2 p-1\"></i> Menu</a>
            <div class=\"row\">
                <div class=\"col-12\">
                    Content area...
                </div>
            </div>
        </main>
    </div>
</div>
Example 6 - Simple \"push\" Sidebar Demo

Did you notice that all of the above examples were done using only Bootstrap classes? 😎 This means you don't need custom CSS to create a Sidebar with Bootstrap 5.

It's also worth taking a look 👀 at Bootstrap's official sidebar examples. The official Bootstrap examples don't consider entire page layout, but still may be helpful when considering the sidebar content alone. Discover what else is new in Bootstrap 5

I hope these Sidebar example will kickstart your next Bootstrap project. Let me know your thoughts in the comments!

Discussion (17)
Subscribe
pic
Add to the discussion

afif profile image
Temani Afif
•
Apr 12

Ah, Zim is on DEV. Nice seeing you here 👍


6
likes
Reply

carolskelly profile image
Carol Skelly
•
Apr 12

Hello 👋 my SO friend, Nice see you too!


2
likes
Reply

afif profile image
Temani Afif
•
Apr 12

I want you to crash DEV 💥 with Boostrap posts!

PS: you can add html in front of the 3 slashes to have a colored code dev-to-uploads.s3.amazonaws.com/up...


4
likes
Thread
carolskelly profile image
Carol Skelly
•
Apr 12

Cool... much better 😉 thanks for the tip!


2
likes
Reply

pgarciabaez profile image
Patricio García
•
Aug 27

I have a problem in Sidebar Example 2 when I try to introduce a big responsive table in the text. As you can see in my fork of it (codeply.com/p/PNoCYKK8Wk), using table view there is an overlapping between the sidebar and the contents. Do you know how I can fix this problem?


1
like
Reply

carolskelly profile image
Carol Skelly
•
Sep 2

I'm not seeing overlap.. I'm seeing the table wrap. Is that what you mean?


2
likes
Reply

pgarciabaez profile image
Patricio García
•
Sep 2

There is an overlap when I scroll, but finally I solved it adding \"col-sm-9\" in div class of line 62. Thanks


1
like
Reply

viragdesai profile image
Virag Dilip Desai
•
Apr 21

Very nice! Great, simple and fantastic examples!


3
likes
Reply

neutromancer profile image
neutromancer
•
Jun 10

Neat examples, I have a problem with Example 2 tho... in the \"sticky footer\" version, both the footer and the top navbar stretch to fill the space if there is not enough text to fill the page. This doesn't happen in the \"normal footer\" version. Is there any class or tag that can be added to prevent this?
This isn't normally noticeable in the Demo since there's a bunch of placeholder text, but if I delete some of it, it stretches.


1
like
Reply

2pulses profile image
2pulses
•
Dec 1

Nicely done! One question: how does one place the horizontal Navbar in Example #2 to the bottom as opposed to the top? I've tried changing to \"fixed-bottom\" but then the Sidebar no longer occupies the full length of the screen.


Like
Reply

devmedtz profile image
DevMed
•
Apr 28

Its real amazing


2
likes
Reply

paulkd profile image
Paul Dunderdale
•
Apr 17

I haven't checked/tried your code, but there is absolutely nothing wrong with Bootstrap, or the Bootstrap Offcanvas component (which displays just fine on mobile).


2
likes
Reply

udo_schmitz_184a9d42ff3bd profile image
Udo Schmitz
•
Nov 6

Super interesting. Unfortunately I can’t see any of the examples. Codeply certificate expired?


1
like
Reply

udo_schmitz_184a9d42ff3bd profile image
Udo Schmitz
•
Nov 25

Working again :)


1
like
Reply

elburro profile image
Comment marked as low quality/non-constructive by the community. View Code of Conduct
El-Burro
•
Apr 14 • Edited on Apr 17

Ah, lovely, when you completely fail all things mobile in a post about responsiveness. This is utter nonsense. Don't use bootstrap. Do some research and work it out, it'll be faar better than this post missing the point completely. Try opening it on a mobile device and you'll see that both all code (while highly illegible and unnecessarily complex) And the demo's And the examples all fail. So this is obviously a how not to guide.

-- Since it looks like you've blocked me because of ... valid critique? Here's my response. I suggest you do some research and tests first before answering.

Codeply is not fully responsive, I tested it on multiple devices (phone, laptops, tablets), platforms (android, windows, ios, osx), multiple browsers (chrome, safari, edge, opera, Firefox), and always there are elements (partly) hidden.
My point was to not use bootstrap in general, learn to use CSS properly, and build things yourself. It certainly has its uses, but in general, I think you're better of without it.

As to your point that the code works: no it doesn't. Using multiple setups, the main content is only partly visible, or even unreachable!
Don't assume when someone criticizes you, they don't do their homework, I did do so but you obviously did not, or you would have at least had the decency to check and acknowledge your mistakes.


1
like
Reply

carolskelly profile image
Carol Skelly
•
Apr 17 • Edited on Apr 17

\"Don't use bootstrap\" - The point of this post is using Bootstrap to create a sidebar. Whether or not you choose to is up to you, but please don't respond with ignoramus comments. And unless your mobile device is a gameboy emulator, you'll see that the examples all work responsively and as expected.


7
likes
Reply

tweetfrog profile image
Tom Michew
•
Apr 19

Your sidebar examples work for fine for me as well. Thanks for the article!


4
likes
Reply
Code of Conduct • Report abuse
Read next
smeijer profile image
Typed GraphQL with react-query & graphql-request
Stephan Meijer - Nov 25

prachigarg19 profile image
Project 6:Ajax Type Ahead
prachigarg19 - Dec 6

xjamundx profile image
One Cool Trick to Speed Up Your Website Performance (Not Really)
Jamund Ferguson - Dec 13

colocodes profile image
How to become a web developer in 2022, with coach Gandalf
Damian Demasi - Dec 14


Codeply
Follow
Codeply is the HTML/CSS/JS editor that makes frontend design & development easier by enabling you to leverage the frameworks of your choice. Codeply is integrated with popular frameworks like Bootstrap, MD, Vue and Angular.

Codeply
More from Codeply
Simple Calculator using Vue and Bootstrap 5
#webdev #vue #bootstrap #javascript
Helpful Page Layouts using Tailwind CSS
#webdev #tailwindcss #css #design
Re-Order Grid Columns in Bootstrap 5
#css #bootstrap #webdev #html
<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark\">
            <div class=\"d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100\">
                <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5 d-none d-sm-inline\">Menu</span>
                </a>
                <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link align-middle px-0\">
                            <i class=\"fs-4 bi-house\"></i> <span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-speedometer2\"></i> <span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                        <ul class=\"collapse show nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-table\"></i> <span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li>
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle \">
                            <i class=\"fs-4 bi-bootstrap\"></i> <span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#submenu3\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-grid\"></i> <span class=\"ms-1 d-none d-sm-inline\">Products</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu3\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 2</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 3</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-people\"></i> <span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class=\"dropdown pb-4\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col py-3\">
            Content area...
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@SurvosBootstrap/_example_sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark\">
            <div class=\"d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100\">
                <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5 d-none d-sm-inline\">Menu</span>
                </a>
                <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link align-middle px-0\">
                            <i class=\"fs-4 bi-house\"></i> <span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-speedometer2\"></i> <span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                        <ul class=\"collapse show nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-table\"></i> <span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li>
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle \">
                            <i class=\"fs-4 bi-bootstrap\"></i> <span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#submenu3\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-grid\"></i> <span class=\"ms-1 d-none d-sm-inline\">Products</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu3\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 2</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 3</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-people\"></i> <span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class=\"dropdown pb-4\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col py-3\">
            Content area...
        </div>
    </div>
</div>
Example 1 - Demo

Sidebar Example 2
Vertical sidebar that changes to navbar on mobile

This 2nd example is a vertical sidebar (on large screens) that switches to a horizontal navbar (on smaller mobile screens). It's a multi-level sidebar with collapsible menu items. The menu functions like an \"accordion\" where only a single menu is open at a time.

This sidebar layout also considers sticky and scrolling behaviors. The sidebar and bottom footer both appear fixed on larger screens. Only the content area is scrollable (when content height allows). On mobile screens, the horizontal sidebar remains fixed at the top (using sticky position), and the remaining content and footer sections scroll the entire page height. For this reason a small CSS change is need to make the height responsive...

Alt Text

HTML Markup
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-auto bg-light sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top\">
                <a href=\"/\" class=\"d-block p-3 link-dark text-decoration-none\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Icon-only\">
                    <i class=\"bi-bootstrap fs-1\"></i>
                </a>
                <ul class=\"nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\">
                            <i class=\"bi-house fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Dashboard\">
                            <i class=\"bi-speedometer2 fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Orders\">
                            <i class=\"bi-table fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Products\">
                            <i class=\"bi-heart fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Customers\">
                            <i class=\"bi-people fs-1\"></i>
                        </a>
                    </li>
                </ul>
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"bi-person-circle h2\"></i>
                    </a>
                    <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm p-3 min-vh-100\">
            <!-- content -->
        </div>
    </div>
</div>
Example 2 - Demo

If you don't need the sticky footer, here's a slight variation that doesn't reguire extra CSS

Sidebar Example 3
Sidebar with Bootstrap icons

The next example is similar to the prior as it changes to horizontal orientation on mobile. This full height example has big beautiful icons from Bootstrap icons. This example also use sticky position to make the sidebar appear fixed as the page is scrolled.

Alt Text

HTML Markup
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-auto bg-light sticky-top\">
            <div class=\"d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top\">
                <a href=\"/\" class=\"d-block p-3 link-dark text-decoration-none\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Icon-only\">
                    <i class=\"bi-bootstrap fs-1\"></i>
                </a>
                <ul class=\"nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Home\">
                            <i class=\"bi-house fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Dashboard\">
                            <i class=\"bi-speedometer2 fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Orders\">
                            <i class=\"bi-table fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Products\">
                            <i class=\"bi-heart fs-1\"></i>
                        </a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link py-3 px-2\" title=\"\" data-bs-toggle=\"tooltip\" data-bs-placement=\"right\" data-bs-original-title=\"Customers\">
                            <i class=\"bi-people fs-1\"></i>
                        </a>
                    </li>
                </ul>
                <div class=\"dropdown\">
                    <a href=\"#\" class=\"d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle\" id=\"dropdownUser3\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"bi-person-circle h2\"></i>
                    </a>
                    <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdownUser3\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-sm p-3 min-vh-100\">
            <!-- content -->
        </div>
    </div>
</div>
Example 3 - Demo

Sidebar Example 4
Collapse off-canvas left sidebar

This is the first collapsible example, and it's done using Bootstrap 5's new Offcanvas component. This left sidebar overlays the main content area and can be hidden/shown using a toggle button.

Alt Text

HTML Markup
<div class=\"offcanvas offcanvas-start w-25\" tabindex=\"-1\" id=\"offcanvas\" data-bs-keyboard=\"false\" data-bs-backdrop=\"false\">
    <div class=\"offcanvas-header\">
        <h6 class=\"offcanvas-title d-none d-sm-block\" id=\"offcanvas\">Menu</h6>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body px-0\">
        <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-start\" id=\"menu\">
            <li class=\"nav-item\">
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-house\"></i><span class=\"ms-1 d-none d-sm-inline\">Home</span>
                </a>
            </li>
            <li>
                <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-speedometer2\"></i><span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-table\"></i><span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
            </li>
            <li class=\"dropdown\">
                <a href=\"#\" class=\"nav-link dropdown-toggle  text-truncate\" id=\"dropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fs-5 bi-bootstrap\"></i><span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span>
                </a>
                <ul class=\"dropdown-menu text-small shadow\" aria-labelledby=\"dropdown\">
                    <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    <li>
                        <hr class=\"dropdown-divider\">
                    </li>
                    <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                </ul>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-grid\"></i><span class=\"ms-1 d-none d-sm-inline\">Products</span></a>
            </li>
            <li>
                <a href=\"#\" class=\"nav-link text-truncate\">
                    <i class=\"fs-5 bi-people\"></i><span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
            </li>
        </ul>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col min-vh-100 py-3\">
            <!-- toggler -->
            <button class=\"btn float-end\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvas\" role=\"button\">
                <i class=\"bi bi-arrow-right-square-fill fs-3\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvas\"></i>
            </button>
            Content..
        </div>
    </div>
</div>
Example 4 - Offcanvas \"overlay\" Sidebar Demo

Sidebar Example 5
Navbar with search form and left sticky sidebar

This last example considers other components like the top Navbar and main content area. The sidebar uses sticky-top to appear fixed on the left side so that it remains in place as the page is scrolled. On mobile, the sidebar switches to a horizontal icon bar positioned below the Navbar.

Example 5 - Navbar + Sidebar Demo

Sidebar Example 6
Simple offcanvas \"push\" sidebar

If you read my Bootstrap 5 Offcanvas article you've seen that the Offcanvas component is for an \"overlay\" type sidebar. However, if you want a \"push\" type sidebar, the Offcanvas component isn't going to work.

To create a \"push\" type sidebar, instead use a Bootstrap grid column to contain the sidebar, and the Collapse component to toggle it open/closed...
<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto px-0\">
            <div id=\"sidebar\" class=\"collapse collapse-horizontal show border-end\">
                <div id=\"sidebar-nav\" class=\"list-group border-0 rounded-0 text-sm-start min-vh-100\">
                    <a href=\"#\" class=\"list-group-item border-end-0 d-inline-block text-truncate\" data-bs-parent=\"#sidebar\"><span>Item</span> </a>
                    (more nav items) ...
                </div>
            </div>
        </div>
        <main class=\"col ps-md-2 pt-2\">
            <a href=\"#\" data-bs-target=\"#sidebar\" data-bs-toggle=\"collapse\" class=\"border rounded-3 p-1 text-decoration-none\"><i class=\"bi bi-list bi-lg py-2 p-1\"></i> Menu</a>
            <div class=\"row\">
                <div class=\"col-12\">
                    Content area...
                </div>
            </div>
        </main>
    </div>
</div>
Example 6 - Simple \"push\" Sidebar Demo

Did you notice that all of the above examples were done using only Bootstrap classes? 😎 This means you don't need custom CSS to create a Sidebar with Bootstrap 5.

It's also worth taking a look 👀 at Bootstrap's official sidebar examples. The official Bootstrap examples don't consider entire page layout, but still may be helpful when considering the sidebar content alone. Discover what else is new in Bootstrap 5

I hope these Sidebar example will kickstart your next Bootstrap project. Let me know your thoughts in the comments!

Discussion (17)
Subscribe
pic
Add to the discussion

afif profile image
Temani Afif
•
Apr 12

Ah, Zim is on DEV. Nice seeing you here 👍


6
likes
Reply

carolskelly profile image
Carol Skelly
•
Apr 12

Hello 👋 my SO friend, Nice see you too!


2
likes
Reply

afif profile image
Temani Afif
•
Apr 12

I want you to crash DEV 💥 with Boostrap posts!

PS: you can add html in front of the 3 slashes to have a colored code dev-to-uploads.s3.amazonaws.com/up...


4
likes
Thread
carolskelly profile image
Carol Skelly
•
Apr 12

Cool... much better 😉 thanks for the tip!


2
likes
Reply

pgarciabaez profile image
Patricio García
•
Aug 27

I have a problem in Sidebar Example 2 when I try to introduce a big responsive table in the text. As you can see in my fork of it (codeply.com/p/PNoCYKK8Wk), using table view there is an overlapping between the sidebar and the contents. Do you know how I can fix this problem?


1
like
Reply

carolskelly profile image
Carol Skelly
•
Sep 2

I'm not seeing overlap.. I'm seeing the table wrap. Is that what you mean?


2
likes
Reply

pgarciabaez profile image
Patricio García
•
Sep 2

There is an overlap when I scroll, but finally I solved it adding \"col-sm-9\" in div class of line 62. Thanks


1
like
Reply

viragdesai profile image
Virag Dilip Desai
•
Apr 21

Very nice! Great, simple and fantastic examples!


3
likes
Reply

neutromancer profile image
neutromancer
•
Jun 10

Neat examples, I have a problem with Example 2 tho... in the \"sticky footer\" version, both the footer and the top navbar stretch to fill the space if there is not enough text to fill the page. This doesn't happen in the \"normal footer\" version. Is there any class or tag that can be added to prevent this?
This isn't normally noticeable in the Demo since there's a bunch of placeholder text, but if I delete some of it, it stretches.


1
like
Reply

2pulses profile image
2pulses
•
Dec 1

Nicely done! One question: how does one place the horizontal Navbar in Example #2 to the bottom as opposed to the top? I've tried changing to \"fixed-bottom\" but then the Sidebar no longer occupies the full length of the screen.


Like
Reply

devmedtz profile image
DevMed
•
Apr 28

Its real amazing


2
likes
Reply

paulkd profile image
Paul Dunderdale
•
Apr 17

I haven't checked/tried your code, but there is absolutely nothing wrong with Bootstrap, or the Bootstrap Offcanvas component (which displays just fine on mobile).


2
likes
Reply

udo_schmitz_184a9d42ff3bd profile image
Udo Schmitz
•
Nov 6

Super interesting. Unfortunately I can’t see any of the examples. Codeply certificate expired?


1
like
Reply

udo_schmitz_184a9d42ff3bd profile image
Udo Schmitz
•
Nov 25

Working again :)


1
like
Reply

elburro profile image
Comment marked as low quality/non-constructive by the community. View Code of Conduct
El-Burro
•
Apr 14 • Edited on Apr 17

Ah, lovely, when you completely fail all things mobile in a post about responsiveness. This is utter nonsense. Don't use bootstrap. Do some research and work it out, it'll be faar better than this post missing the point completely. Try opening it on a mobile device and you'll see that both all code (while highly illegible and unnecessarily complex) And the demo's And the examples all fail. So this is obviously a how not to guide.

-- Since it looks like you've blocked me because of ... valid critique? Here's my response. I suggest you do some research and tests first before answering.

Codeply is not fully responsive, I tested it on multiple devices (phone, laptops, tablets), platforms (android, windows, ios, osx), multiple browsers (chrome, safari, edge, opera, Firefox), and always there are elements (partly) hidden.
My point was to not use bootstrap in general, learn to use CSS properly, and build things yourself. It certainly has its uses, but in general, I think you're better of without it.

As to your point that the code works: no it doesn't. Using multiple setups, the main content is only partly visible, or even unreachable!
Don't assume when someone criticizes you, they don't do their homework, I did do so but you obviously did not, or you would have at least had the decency to check and acknowledge your mistakes.


1
like
Reply

carolskelly profile image
Carol Skelly
•
Apr 17 • Edited on Apr 17

\"Don't use bootstrap\" - The point of this post is using Bootstrap to create a sidebar. Whether or not you choose to is up to you, but please don't respond with ignoramus comments. And unless your mobile device is a gameboy emulator, you'll see that the examples all work responsively and as expected.


7
likes
Reply

tweetfrog profile image
Tom Michew
•
Apr 19

Your sidebar examples work for fine for me as well. Thanks for the article!


4
likes
Reply
Code of Conduct • Report abuse
Read next
smeijer profile image
Typed GraphQL with react-query & graphql-request
Stephan Meijer - Nov 25

prachigarg19 profile image
Project 6:Ajax Type Ahead
prachigarg19 - Dec 6

xjamundx profile image
One Cool Trick to Speed Up Your Website Performance (Not Really)
Jamund Ferguson - Dec 13

colocodes profile image
How to become a web developer in 2022, with coach Gandalf
Damian Demasi - Dec 14


Codeply
Follow
Codeply is the HTML/CSS/JS editor that makes frontend design & development easier by enabling you to leverage the frameworks of your choice. Codeply is integrated with popular frameworks like Bootstrap, MD, Vue and Angular.

Codeply
More from Codeply
Simple Calculator using Vue and Bootstrap 5
#webdev #vue #bootstrap #javascript
Helpful Page Layouts using Tailwind CSS
#webdev #tailwindcss #css #design
Re-Order Grid Columns in Bootstrap 5
#css #bootstrap #webdev #html
<div class=\"container-fluid\">
    <div class=\"row flex-nowrap\">
        <div class=\"col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark\">
            <div class=\"d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100\">
                <a href=\"/\" class=\"d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none\">
                    <span class=\"fs-5 d-none d-sm-inline\">Menu</span>
                </a>
                <ul class=\"nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start\" id=\"menu\">
                    <li class=\"nav-item\">
                        <a href=\"#\" class=\"nav-link align-middle px-0\">
                            <i class=\"fs-4 bi-house\"></i> <span class=\"ms-1 d-none d-sm-inline\">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"#submenu1\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-speedometer2\"></i> <span class=\"ms-1 d-none d-sm-inline\">Dashboard</span> </a>
                        <ul class=\"collapse show nav flex-column ms-1\" id=\"submenu1\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1 </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2 </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-table\"></i> <span class=\"ms-1 d-none d-sm-inline\">Orders</span></a>
                    </li>
                    <li>
                        <a href=\"#submenu2\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle \">
                            <i class=\"fs-4 bi-bootstrap\"></i> <span class=\"ms-1 d-none d-sm-inline\">Bootstrap</span></a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu2\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Item</span> 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#submenu3\" data-bs-toggle=\"collapse\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-grid\"></i> <span class=\"ms-1 d-none d-sm-inline\">Products</span> </a>
                        <ul class=\"collapse nav flex-column ms-1\" id=\"submenu3\" data-bs-parent=\"#menu\">
                            <li class=\"w-100\">
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 1</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 2</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 3</a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"nav-link px-0\"> <span class=\"d-none d-sm-inline\">Product</span> 4</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"nav-link px-0 align-middle\">
                            <i class=\"fs-4 bi-people\"></i> <span class=\"ms-1 d-none d-sm-inline\">Customers</span> </a>
                    </li>
                </ul>
                <hr>
                <div class=\"dropdown pb-4\">
                    <a href=\"#\" class=\"d-flex align-items-center text-white text-decoration-none dropdown-toggle\" id=\"dropdownUser1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <img src=\"https://github.com/mdo.png\" alt=\"hugenerd\" width=\"30\" height=\"30\" class=\"rounded-circle\">
                        <span class=\"d-none d-sm-inline mx-1\">loser</span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-menu-dark text-small shadow\">
                        <li><a class=\"dropdown-item\" href=\"#\">New project...</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                        <li>
                            <hr class=\"dropdown-divider\">
                        </li>
                        <li><a class=\"dropdown-item\" href=\"#\">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col py-3\">
            Content area...
        </div>
    </div>
</div>
", "@SurvosBootstrap/_example_sidebar.html.twig", "/home/tac/g/survos/survos/demo/grid-demo/vendor/survos/bootstrap-bundle/templates/_example_sidebar.html.twig");
    }
}
