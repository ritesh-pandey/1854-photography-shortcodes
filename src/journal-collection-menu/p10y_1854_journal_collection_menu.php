<style>
.journal_menu_body > * {
  margin: 0;
  padding: 0;
}
.journal_menu {
  margin-top: 10px;
  border-bottom: 2px solid #ebebeb;
}
.journal_menu_body {
  background: #EDEDED;
}

.journal_menu .journal_menu_heading ul li {
  list-style: none;
  font-weight: 500;
  text-transform: uppercase;
  margin-left: 0;
}

.journal_menu li a {
  text-decoration : none;
  font-size: 13px;
}

.journal_menu .heading_flex {
  display: flex;
  gap: 25px;
  max-width: 75em;
  margin: auto;
  padding: 0 16px;
}

.journal_menu .heading_flex .header-item {
  color: #404040;
}

.journal_menu .heading_flex .header-item.explore-item {  
  color: #266B68;
  cursor: pointer;
  font-size: 13px !important;
  padding-top: 2px;
}

.explore-item i{
  transition: 0.5s;
}

.journal_menu .heading_flex .header-item.latest-item {
  border-bottom: 3px solid #266B68;
  padding-bottom: 11px;
}

.menu_body_grid {
  padding: 40px 16px;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  max-width: 75em;
  margin: auto;
}

.journal_menu ul.menu_body_grid li {
  margin-bottom: 0;
  list-style: none;
  margin-left: 0;
}

.journal_menu .menu_body_grid .expanded-menu-item {
  color: #266B68;
  background: #fff;
  padding: 4px 16px;
  margin: 5px 0 0 0;
  display: inline-block;
  font-weight: 500;
}

.journal_menu .menu_body_grid .expanded-menu-item:hover {
  color: #fff;
  background: #266B68;
}
</style>
<?php
$mainMenuItems = [
	['link' => 'agenda',             'displayText' => 'Agenda'],
	['link' => 'bookshelf',          'displayText' => 'Bookshelf'],
	['link' => 'projects',           'displayText' => 'Projects'],
	['link' => 'industry-insights',  'displayText' => 'Industry Insights']
];
$highlightClass = 'latest-item';
$slug = '';
if (is_category()) {
	$category = get_category( get_query_var( 'cat' ) );
	$slug = $category->slug;
}
?>
<div class="journal_menu hide-for-small-only hide-for-medium-only">
  <div class="journal_menu_content">
    <div class="journal_menu_heading">
      <ul class="heading_flex">
        <li><a href="/journal/" class="header-item <?php echo is_page('journal') ? $highlightClass : '';?>">latest</a></li>
        <?php foreach ($mainMenuItems as $item) { ?>
	        <li><a href="/collection/<?php echo $item['link'];?>/" class="header-item <?php echo $item['link'] === $slug ? $highlightClass : '';?>"><?php echo $item['displayText'];?></a></li>
        <?php } ?>
        <li><a href="https://www.thebjpshop.com/" class="header-item">magazine</a></li>
        <li class="header-item explore-item"> <i class="fa fa-chevron-down"></i> Explore</li>
      </ul>
    </div>
    <div class="journal_menu_body" style="display:none;">
      <ul class="menu_body_grid">
        <li><a href="/collection/any-answers/" class="expanded-menu-item">ANY ANSWERS</a></li>
        <li><a href="/collection/fine-art" class="expanded-menu-item">FINE ART </a></li>
        <li><a href="/collection/in-the-studio/" class="expanded-menu-item">IN THE STUDIO </a></li>
        <li><a href="/collection/parenthood/" class="expanded-menu-item">PARENTHOOD </a></li>
        <li><a href="/collection/art-activism/" class="expanded-menu-item">ART & ACTIVISM</a></li>
        <li><a href="/collection/for-the-record/" class="expanded-menu-item">FOR THE RECORD </a></li>
        <li><a href="/collection/landscape/" class="expanded-menu-item">LANDSCAPE </a></li>
        <li><a href="/collection/picture-this/" class="expanded-menu-item">PICTURE THIS </a></li>
        <li><a href="/collection/creative-brief/" class="expanded-menu-item">CREATIVE BRIEF</a></li>
        <li><a href="/collection/gender-sexuality/" class="expanded-menu-item">GENDER & SEXUALITY </a></li>
        <li><a href="/collection/mixed-media/" class="expanded-menu-item">MIXED MEDIA </a></li>
        <li><a href="/collection/power-empowerment/" class="expanded-menu-item">POWER & EMPOWERMENT </a></li>
        <li><a href="/collection/documentary/" class="expanded-menu-item">DOCUMENTARY</a></li>
        <li><a href="/collection/home-belonging/" class="expanded-menu-item">HOME & BELONGING </a></li>
        <li><a href="/collection/on-location/" class="expanded-menu-item">ON LOCATION </a></li>
        <li><a href="/collection/portraiture/" class="expanded-menu-item">PORTRAITURE</a></li>
        <li><a href="/collection/decade-of-change/" class="expanded-menu-item">DECADE OF CHANGE</a></li>
        <li><a href="/collection/technology-humanity/" class="expanded-menu-item">HUMANITY & TECHNOLOGY</a></li>
        <li><a href="/collection/opinion/" class="expanded-menu-item">OPINION</a></li>
        <li><a href="/collection/then-now/" class="expanded-menu-item">THEN & NOW</a></li>
      </ul>
    </div>
  </div>
</div>

<script>
$ = jQuery;
$(".journal_menu_body").slideUp(500);

$(".explore-item").on("click", (e) => {
  if ($(".explore-item i").hasClass("expanded-menu")) {
    $(".explore-item i").removeClass("expanded-menu");
    $(".journal_menu_body").slideUp(500);
    $(".explore-item i").css({
      "-webkit-transform": "rotate(" + 0 + "deg)",
      "-moz-transform": "rotate(" + 0 + "deg)",
      "-ms-transform": "rotate(" + 0 + "deg)",
      transform: "rotate(" + 0 + "deg)"
    });
  } else {
    $(".explore-item i").addClass("expanded-menu");
    $(".journal_menu_body").slideDown(500);

    $(".explore-item i").css({
      "-webkit-transform": "rotate(" + 180 + "deg)",
      "-moz-transform": "rotate(" + 180 + "deg)",
      "-ms-transform": "rotate(" + 180 + "deg)",
      transform: "rotate(" + 180 + "deg)"
    });
  }
});
</script>

<!-- Mobile menu begin -->
<style>
.journal-menu-mobile {
  background: #f8f8f8;
  border-bottom: 2px solid #ebebeb;
}

.journal-menu-mobile-content {
  padding: 20px 12px 10px 12px;
}
.journal-mobile-menu-text {
  font-size: 18px;
font-weight: 500;
}

.journal-menu-mobile-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;
margin-bottom: 10px;
}

.journal-menu-mobile-heading i {
  font-size: 16px;
  outline: none;
  border: none;
  cursor: pointer;
}

.journal-menu-mobile .fa-bars {
  font-size: 20px;
}

.journal-menu-mobile .fa-times {
  padding: 4px 6px;
  background: #000;
}

.journal-menu-mobile .fa-times::before {
  color: #fff !important;
}

.journal-menu-mobile-body ul{
  margin-bottom: 0;
}

.journal-menu-mobile .journal-menu-mobile-body ul li{
  list-style: none;
  font-weight: 500;
  padding: 6px 0 10px 0;
  border-bottom: 1px solid #d6d3d3;
  margin-bottom: 0;
  margin-left: 0;
}

.journal-menu-mobile li:last-child {
  border: none;
}

.journal-menu-mobile li a{
  text-decoration: none;
  font-size: 15px;
  color: #000000;
}

.journal-menu-mobile .mobile-header-item{
  text-transform: uppercase;
  font-weight: 700;
}
</style>
<div class="journal-menu-mobile hide-for-large">
  <div class="journal-menu-mobile-content">
    <div class="journal-menu-mobile-heading">
      <div class="journal-mobile-menu-text">
        Explore Stories
      </div>
      <i class="fas fa-bars"></i>
    </div>
    <div class="journal-menu-mobile-body">
      <ul>
        <li><a href="/journal/" class="mobile-header-item">latest</a></li>
        <li><a href="/collection/agenda/" class="mobile-header-item">agenda</a></li>
        <li><a href="/collection/bookshelf" class="mobile-header-item">bookshelf</a></li>
        <li><a href="/collection/projects/" class="mobile-header-item">projects</a></li>
        <li><a href="/collection/ones-to-watch-2021/" class="mobile-header-item">theme in focus</a></li>
        <li><a href="/collection/industry-insights" class="mobile-header-item">industry insights</a></li>
        <li><a href="/bjp-print-issue" class="mobile-header-item">magazine</a></li>
        <li><a href="/collection/any-answers/" class="mobile-expanded-menu-item">ANY ANSWERS</a></li>
        <li><a href="/collection/fine-art" class="mobile-expanded-menu-item">FINE ART </a></li>
        <li><a href="/collection/in-the-studio/" class="mobile-expanded-menu-item">IN THE STUDIO </a></li>
        <li><a href="/collection/parenthood/" class="mobile-expanded-menu-item">PARENTHOOD </a></li>
        <li><a href="/collection/art-activism/" class="mobile-expanded-menu-item">ART & ACTIVISM</a></li>
        <li><a href="/collection/for-the-record/" class="mobile-expanded-menu-item">FOR THE RECORD </a></li>
        <li><a href="/collection/landscape/" class="mobile-expanded-menu-item">LANDSCAPE </a></li>
        <li><a href="/collection/picture-this/" class="mobile-expanded-menu-item">PICTURE THIS </a></li>
        <li><a href="/collection/creative-brief/" class="mobile-expanded-menu-item">CREATIVE BRIEF</a></li>
        <li><a href="/collection/gender-sexuality/" class="mobile-expanded-menu-item">GENDER & SEXUALITY </a></li>
        <li><a href="/collection/mixed-media/" class="mobile-expanded-menu-item">MIXED MEDIA </a></li>
        <li><a href="/collection/power-empowerment/" class="mobile-expanded-menu-item">POWER & EMPOWERMENT </a></li>
        <li><a href="/collection/documentary/" class="mobile-expanded-menu-item">DOCUMENTARY</a></li>
        <li><a href="/collection/home-belonging/" class="mobile-expanded-menu-item">HOME & BELONGING </a></li>
        <li><a href="/collection/on-location/" class="mobile-expanded-menu-item">ON LOCATION </a></li>
        <li><a href="/collection/portraiture/" class="mobile-expanded-menu-item">PORTRAITURE</a></li>
        <li><a href="/collection/decade-of-change/" class="mobile-expanded-menu-item">DECADE OF CHANGE</a></li>
        <li><a href="/collection/technology-humanity/" class="mobile-expanded-menu-item">HUMANITY & TECHNOLOGY</a></li>
        <li><a href="/collection/opinion/" class="mobile-expanded-menu-item">OPINION</a></li>
        <li><a href="/collection/then-now/" class="mobile-expanded-menu-item">THEN & NOW</a></li>
      </ul>
    </div>

  </div>
</div>

<script>
$ = jQuery;
$(".journal-menu-mobile-body").slideUp(500);
$(".journal-menu-mobile-heading i").on("click", (e) => {
  if ($(".journal-menu-mobile-heading i").hasClass("expanded-menu")) {
    $(".journal-menu-mobile-heading i").removeClass("fa-times");
    $(".journal-menu-mobile-heading i").addClass("fa-bars");
    $(".journal-menu-mobile-heading i").removeClass("expanded-menu");
    $(".journal-menu-mobile-body").slideUp(500);
  } else {
    $(".journal-menu-mobile-heading i").removeClass("fa-bars");
    $(".journal-menu-mobile-heading i").addClass("fa-times");
    $(".journal-menu-mobile-heading i").addClass("expanded-menu");
    $(".journal-menu-mobile-body").slideDown(500);
  }
});
</script>
