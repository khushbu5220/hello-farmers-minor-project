<!DOCTYPE html>
<html>
<head>
<title>Tulip</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 650%;
background-image: linear-gradient(to left, #fff 80%, #2DF90E 20%);
}
.navsection{
width: 100%;  background-color: orange;
display: flex; justify-content: space-around;
align-item: center;
background-image: linear-gradient(to top, #fff 60%, #2DF90E 40%);
}
.logo{
width: 40%;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
color: #fff;
background-image: linear-gradient(#FFA500 40%, #FF8C00 60%);
padding-left: 100px;
box-sizing: border-box;
}
.logo h3{
text-transform: uppercase;
font-size: 1.5rem;
animation: aagepichhe 2s linear infinite;
animation-direction: alternate;
}
@keyframes aagepichhe{
from{ padding-left: 40%; }
to{ padding-right: 40%; }
}
nav{

width: 60%;
display: flex;
justify-content: space-around;
  border-color: #0000;
}
nav img{
border-radius: 50% 50% 50% 50% / 50% 50% 50% 50% ;
border: visible;
  display: inline-block;
  border-color: #000;
}
.translator {
text-align: right;
}
.accordion {
  background: linear-gradient(to bottom,blue,white);;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background: linear-gradient(to bottom,lightblue,white);
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

table , th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left; 
  }
  tr:nth-child(odd) {background-color: blueviolet;}
  tr:nth-child(even) {background-color: mediumslateblue;}
.container {
 color: #000;
 }
 .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1 {
  background-color: white;
  color: black;
  border: 2px solid #FF69B4;
}

.button1:hover {background-color: #FF69B4;}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
p{ text-align:center;}
.zoom {
  padding: 50px;
  transition: transform .2s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}
a {
	text-decoration: none;
}
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>TULIP</h3>
</div>
<br>
<nav>
<br>
<br>
<a href = "https://www.accuweather.com/">
<img alt="weather" src="wheather.jfif" width="70" height="70">
<br> Weather
</a>
<br><br>
</nav>
</section>
<h4 style="text-align: right;">Translate this page: &nbsp&nbsp</h4>

<div id="google_translate_element" class="translator"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript">
(function(){var gtConstEvalStartTime = new Date();/*

 Copyright The Closure Library Authors.
 SPDX-License-Identifier: Apache-2.0
*/
function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk='445303.2143855006';var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script><br><br>
</p><br>
<div style="float:right" class="zoom"><img alt="Tulip" src="tulip1.jfif"></div>
<button class="accordion"style="width:75%">SELECTING A PLANTING SITE</button>
<div class="panel">
<p>i.Tulips prefer a site with full or afternoon sun. In Zones 7 and 8, choose a shady site or one with morning sun only, as tulips donot like a lot of heat.<br>
ii.Soil must be well-draining, neutral to slightly acidic, fertile, and dry or sandy. All tulips dislike areas with excessive moisture. <br>
iii.Tall varieties should be sheltered from strong winds.<br>
iv.You will want to space bulbs 4 to 6 inches apart, so choose a large enough planting site.</p></div>
<br>
<button class="accordion"style="width:75%">WHEN TO PLANT TULIPS</button>
<div class="panel">
<p>
i.Plant tulip bulbs in the fall, 6 to 8 weeks before a hard, ground-freezing frost is expected. The bulbs need time to establish themselves. Planting too early leads to disease problems. <br>
a.A good rule of thumb is to plant bulbs when the average nighttime temperatures in your area are in the 40- to 50-degree range.<br>
b.In colder northern climates, plant in September or October. In warmer climates, plant bulbs in December (or even later).<br>
ii.Nature never intended for bulbs to loll about above ground, so donot delay planting the bulbs after purchase.<br>
iii.In southern climates with mild winters, plant bulbs in late November or December. The bulbs will need to be chilled in the refrigerator for about 12 weeks before planting. (Bulb suppliers often offer pre-chilled bulbs for sale, too.)<br>
iv.If you miss planting your bulbs at the optimal time, donot wait for spring or next fall. Bulbs are not like seeds. Even if you find an unplanted sack of tulips or daffodils in January or February, plant them and take your chances.</p>
</div><br>
<button class="accordion"style="width:75%">HOW TO PLANT TULIPS</button>
<div class="panel">
<p>i.Prepare the garden bed by using a garden fork or tiller to loosen the soil to a depth of 12 to 15 inches, then mix in a 2- to 4-inch layer of compost.<br>
ii.Plant bulbs deep-at least 8 inches, measuring from the base of the bulb. And that means digging even deeper, to loosen the soil and allow for drainage, or creating raised beds. Remember, the bigger the bulb, the deeper the hole it needs.<br>
iii.Set the bulb in the hole with the pointy end up. Cover with soil and press soil firmly.<br>
iv.Water bulbs right after planting. Although they canot bear wet feet, bulbs need water to trigger growth.<br>
v.If you are planning to raise perennial tulips, feed them a balanced fertilizer when you plant them in the fall. Bulbs are their own complete storage system and contain all of the nutrients they need for one year. Use organic material, compost, or a balanced time-release bulb food.<br>
vi.To deter mice and moles-if they have been a problem-put holly or any other thorny leaves in the planting holes. Some gardeners use kitty litter or crushed gravel. If ravenous voles and rodents are a real problem, you may need to take stronger measures, such as planting bulbs in buried wire cages.</p>
</div>
<br>
<button class="accordion">CARE</button>
<div class="panel">
 <p><b>HOW TO GROW TULIPS</b><br>
 i. If it rains weekly, do not water. However, if there is a dry spell and it does not rain, you should water the bulbs weekly until the ground freezes.<br> 
ii. Rainy summers, irrigation systems, and wet soil are death to tulips. Never deliberately water a bulb bed unless in a drought. Wet soil leads to fungus and disease and can rot bulbs. Add shredded pine bark, sand, or any other rough material to the soil to foster swift drainage.<br>
iii. Apply compost annually to provide nutrients needed for future blooms.<br>
iv. In the spring, when leaves emerge, feed your tulip the same bulb food or bone meal which you used at planting time. Water well.<br>
v. Deadhead tulips as soon as they go by, but do not remove the leaves!<br>
vi. Allow the leaves to remain on the plants for about 6 weeks after flowering. The tulips need their foliage to gather energy for next years blooms! After the foliage turns yellow and dies back, it can be pruned off.<br>
vii. Large varieties may need replanting every few years; small types usually multiply and spread on their own.</p>
</div><br>
<button class="accordion">PESTS/DISEASES</button>
<div class="panel">
<p>i.Gray mold<br>
ii.Slugs<br>
iii.Snails<br>
iv.Aphids<br>
v.Nematodes<br>
vi.Bulb rot<br>
vii.Squirrels, rabbits, mice, and voles are especially fond of tulip bulbs.</p>
</div><br>

<button class="accordion">RECOMMENDED VARIETIES</button>
<div class="panel">
<p>Tulip flowers may be single, double, ruffled, fringed, or lily-shaped, depending on the variety.<br>
i.<b>Wild-or Species-tulips</b> are small in size, ranging in height from 3 to 8 inches. They are tougher than hybrids. They also bloom in the South and look best when planted as a carpet of color. One of our favorites is Lilac Wonder.<br>
ii.<b>Triumph hybrids</b> are the classic single, cup-shape tulip that make up the largest grouping of tulip types. Top varieties:<br>
a.<b>Cracker tulip</b> is a midspring bloomer with purple, pink, and lilac petals.<br>
b.<b>Ile de France</b> is a midseason bloomer, with its intensely red blooms on stems to 20 inches tall.<br>
c.<b>Calgary</b> is a midspring bloomer with snowy-white petals and blue-green foliage.<br>
d.Though tulips tend be planted as annuals, the <b> Darwin Hybrid </b> tulips are known to act as perennials, blooming for several years.</p>
</div>
<br>
<div class="zoom">
<img alt="Tulip" src="tulip2.jpg">
</div>
<br><br><br><br>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</header>
</body>          
</html>  