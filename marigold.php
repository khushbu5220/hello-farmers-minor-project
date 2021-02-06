<!DOCTYPE html>
<html>
<head>
<title>Marigold</title>
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
<h3>MARIGOLD</h3>
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

<div style="float:right" class="zoom"><img alt="Marigold" src="marigold1.jfif"></div>
<button class="accordion" style="width:75%">WHEN TO PLANT MARIGOLD</button>
<div class="panel">
<p>i.Young French and signet marigolds can be planted from spring through midsummer, but the tall African marigolds are best planted right away in the spring (after danger of frost has passed) because they are slower to mature and produce flowers.<br>
ii.Sow seeds directly into the garden once the soil is warm in the spring. You can start seeds indoors, but they germinate so easily outside that there’s really no advantage. The exception is African marigolds, which are best bought as young plants or started indoors about 4 to 6 weeks before your last frost date.<br>
iii.Marigolds sprout within a week in warm weather and plants typically produce blooms in about 8 weeks.</p>
</div>
<br>
<button class="accordion" style="width:75%">CHOOSING AND PREPARING A PLANTING SITE</button>
<div class="panel">
<p>i.Marigolds thrive in full sunshine and can often withstand very hot summers. African and signet marigolds are drought tolerant, while French marigolds are more tolerant of wet conditions.<br>
ii.If planted in shade and cool, moist areas, marigolds are prone to powdery mildew and won’t bloom well. <br>
iii.Though they grow in almost any soil, marigolds do best in moderately fertile, well-drained soil. <br>
iv.Prepare the soil by digging down about 6 inches to loosen it. Remove stones. </p>
</div>
<br>
<button class="accordion" style="width:75%">HOW TO PLANT MARIGOLD</button>
<div class="panel">
<p>i.French marigolds can easily be started from seed, while African marigolds are best purchased as young plants (when started from seed, they can take a long time to flower).<br>
ii.Optional: If soil is nutrient-starved, add some slow-release (granular) fertilizer in the planting hole. A 5-10-5 works fine.<br>
iii.Moisten the soil, then sow seeds 1 inch apart and no more than 1 inch deep.<br>
iv.While still small, thin the seedlings. Space French and signet types 8 to 10 inches apart. The larger African marigolds should be at least 10 to 12 inches apart.<br>
v.If planting transplants, thoroughly water each plant after planting in the garden.<br>
vi.If planting in containers, use a soil-based potting mix. Either mix in slow-acting granular fertilizer at planting time or plan to water with diluted liquid fertilizer periodically. Take care to space properly; marigolds grown in containers can become crowded.</p>
</div>
<br>
 <button class="accordion" style="width:75%">CARE</button>
 <div class="panel">
 <p><b>HOW TO GROW MARIGOLD</b><br>
i.Once the marigolds have established themselves, pinch off the tops of the plants to encourage them to grow bushier. This will keep the plants from becoming leggy and will encourage more blooming.<br>
ii.Marigolds don’t require deadheading, but if dying blossoms are regularly removed, it will encourage the plant to continue blooming profusely.<br>
iii.When you water marigolds, allow the soil to dry somewhat between waterings, then water well and repeat the process. Water more in high heat. <br>
iv.Do not water marigolds from overhead. Water at the base of the plant. (Excess water on leaves can lead to powdery mildew.)<br>
v.Do not fertilize marigolds during growth. A diet that’s too nitrogen-rich stimulates lush foliage at the expense of flowers. <br>
vi.The dense, double flowerheads of the African marigolds tend to rot in wet weather.<br>
vii.Add a layer of mulch between plants to suppress weeds and keep soil moist, especially when plants are young.<br>
<br>
<b>HOW TO DEADHEAD MARIGOLD</b><br>
Deadheading encourages the plant to produce more blooms, extending the flowering season. Deadheading marigolds is very simple:<br>
i.When a blossom starts to go bad, pinch (cut) its stem back to the nearest set of leaves.<br>
ii.The plant will be encouraged to produce new flowers.<br>
<br>
</div>
<br><br><br><br>
<button class="accordion">PESTS/DISEASES</button>
<div class="panel">
<p>Marigolds have few pests or problems overall, but <b>spider mites </b>and <b>aphids </b>sometimes infest the plants. Usually a spray of water or the application of an insecticidal soap, repeated every other day for a week or two, will solve the problem. Occasionally, marigolds will be affected by <b> fungal diseases</b> such as powdery mildew if conditions are too wet. To prevent fungal issues, avoid getting water on the marigolds’ leaves, keep weeds down, and plant in well-drained soil. </p>
</div>
<br>
<button class="accordion">HARVEST/STORAGE</button>
<div class="panel">
<p>i.In flower arrangements, strip off any leaves that might be under water in the vase; this will discourage the overly pungent odor.<br>
ii.Marigolds can be dried for long-lasting floral arrangements. Strip foliage from perfect blossoms and hang them upside down.<br>
iii.You may see “marigolds” listed as edible flowers. In fact, it’s the flowers of Calendula—not Tagetes—that make great additions to a summer dish. Flowers from Tagetes marigolds may be irritating to the skin, so we do not recommend ingesting them.</p>
</div>
<div class="zoom">
<img alt="Marigold" src="marigold2.jpg">
</div>
<br><br><br><br><br>
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