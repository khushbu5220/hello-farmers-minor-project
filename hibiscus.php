<!DOCTYPE html>
<html>
<head>
<title>HIBISCUS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 350%;
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
<h3>HIBISCUS</h3>
</div>
<nav>
<br>
<br>
<a href="https://www.accuweather.com/">
<img alt="wheather" src="wheather.jfif" width="70" height="70">
<br>Weather
</a>
<br>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<br><br>

<div style="float:right" class="zoom"><img alt="hibiscus" src="hibiscus1.jfif"></div>
<button class="accordion" style="width:75%">PLANTING</button>
<div class="panel">
<b>WHEN TO PLANT HIBISCUS</b>
<p>i.<b>Rose Mallow</b> and <b>Swamp Hibiscus</b> can be purchased as young plants from nurseries or started from seed or cuttings. They should be planted in the spring.<br>
a.Seeds can be sown indoors 12 weeks before the last spring frost.<br>
b.Alternatively, seeds can be sown outdoors after the last expected frost date.<br>
ii.<b>Rose of Sharon</b> are typically purchased as small shrubs. <br>
a.Plant in spring or fall.</p>
<br>
<br>
<h3>CHOOSING AND PREPARING A PLANTING SITE </h3>
<p>i.Choose a site that gets full or partial sun.<br>
ii.Fertile, well-draining soil will produce the healthiest plants. Hibiscus are tolerant of alkaline soils, but will grow best in neutral to slightly acidic soil.<br>
iii.To avoid breakage of the long stems, plant hibiscus where they won’t be exposed to strong winds.</p>
<br>
<br>
<h3>HOW TO PLANT HIBISCUS</h3>
<p>i.Plant potted hibiscus plants so that their stems are just at the soil surface.<br>
ii.Water well at the time of planting.<br>
iii.The hibiscus species that die back each year can be spaced 2 to 3 feet apart. Consider the potential height and width (up to 12 feet and 10 feet, respectively) of a mature Rose of Sharon before planting.</p>
</div><br>

 <button class="accordion" style="width:75%">CARE</button>
 <div class="panel">
 <h3>HOW TO CARE FOR HIBISCUS</h3>
  <p>i.Mulch around the plant to retain moisture and to provide winter protection for the roots.<br>
ii.Water plants deeply and thoroughly, if needed.<br>
iii.Hibiscus bloom on new wood (this year’s growth), so pruning is best done in the spring.<br>
iv.In early spring, remove dead stems from established plants and apply a balanced fertilizer.<br>
v.To encourage re-bloom, remove old flowers before they form seed heads or prune plants back by one third after a flush of bloom is finished.<br>
vi.Mature plants can be divided in the spring.</p></div>
<br>
<br>
<button class="accordion"> PESTS/DISEASES</button><div class="panel">

<p>i.Japanese beetles<br>
ii.Aphids<br>
iii.Whiteflies</p></div>
<br>
<button class="accordion"> RECOMMENDED VARIETIES</button>
<div class="panel">
<p>i.<b>Scarlet Swamp Hibiscus (H. coccineus):</b> This plant, also known as Texas Star, has 5-petaled, brilliant-red flowers.<br>
There are many wonderful hardy hibiscus hybrids available. Here are just a few:<br>
i.<b>‘Lord Baltimore’:</b> Red flowers.<br>
ii.<b>‘Sweet Caroline’:</b> Pink flowers with dark centers.<br>
iii.<b>‘Blue River II’:</b> Beautiful white flowers.<br>
iv.<b>‘Kopper King’:</b> Huge pink blossoms with red centers. It’s named for its dramatic copper-colored foliage. </p>
</div>
<div class="zoom"><img alt="hibiscus" src="hibiscus2.jpg"></div>
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