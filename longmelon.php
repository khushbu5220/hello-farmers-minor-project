<!DOCTYPE html>
<html>
<head>
<title>Long Melon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 310%;
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
<h3>LONG MELON</h3>
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

<p>Long melon is popularly known as Kakri. It belongs to the family of cucurbitaceae and its botanical name is Cucumis melo. It is native to India. It has light green color fruits having smooth skin and white flesh. It is mainly eaten raw as a salad with salt and pepper. The fruit contains cooling effect therefore it is mainly eaten in summer season.</p><br>
<div style="float:right" class="zoom"><img alt="Long Melon" src="longmelon1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in variety of soil types ranging from sandy loam to heavy soil having good drainage system. The pH of soil 5.8-7.5 is good for crop cultivation.</p></div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Well prepared land is required for long melon cultivation. To bring the soil to fine tilth, 2-3 ploughings followed by harrowing are necessary.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
February-Mach month is appropriate for seed sowing.<br>
<b>Spacing</b><br>
When seedling are transplanted in main field, use row to row spacing of 45 cm and plant to plant distance of 30 cm.<br>
<b>Sowing depth</b><br>
Sowing depth of 2.5-4cm is used.<br>
<b>Spacing</b><br>
Use 200-250cm of spacing between the channels and 60-90cm of spacing between the hills. Two seeds are sown at one place for good stand.<br>
<b>Method of Sowing</b><br>
Seeds are directly sown on bed or ridge.</p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use 1kg/acre of seeds.<br>
<b>Seed Treatment</b><br>
Treatment with Benlate or Bavistin @2.5 gm/kg of seed is used to cure from soil borne diseases.
</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>90</td>
    <td>125</td>
    <td>35</td>
  </tr>
</table> <br>
<b>Nutrient Requirement (kg/acre)</b>
<table style="width:50%">
  <tr>
    <th>NITROGEN</th>
    <th>PHOSPHORUS</th>
	<th>POTASH</th> 
  </tr>
  <tr>
    <td>40</td>
    <td>20</td>
    <td>20</td>
  </tr>
</table></center>
<br> 
<p>Apply full dose of P2O5 and K2O and 1/3rd dose of Nitrogen at the time of sowing is applied 15cm away from the nursery beds. Remaining nitrogen is applied after one month of sowing.</p>
</div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=buy+fertilizer+for+long+melon&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk00Q_IZknnDahtYzeToV6k-2pDGGOw:1607178442470&source=lnms&tbm=shop&sa=X&ved=2ahUKEwiOqp2hhrftAhUXwzgGHZtxClMQ_AUoA3oECA0QBQ&biw=732&bih=687" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Immediate irrigations after sowing are required. In summers, 4-5 irrigations are required and in rainy season depending upon requirement irrigation is done.</p></div><br>
<br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Two shallow hoeing’s required before spreading of vines to control the weed.</p>
</div><br>
<br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid and Thrips:</b> They suck the sap from the leaves resulting in yellowing and drooping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.<br>
If infestation is observed in field, to control spray the crop with Thiamethoxam@5gm/15Ltr of water.<br>
ii.<b>Beetles:</b> The symptoms are damage to flowers, leaves and stems.<br>
If infestation is observed, spraying of Malathion@2ml/ ltr of water Carbaryl@2gm/ltr will help to get rid of beetles.<br>
iii.<b>Fruit fly:</b> It is a serious pest found in longmelon. Females fly lay eggs below epidermis of young fruits. Later on maggots feed on pulp afterward fruits starts rotting and get drop.<br>
<b>Treatment:</b> Foliar application of Neem oil @3.0%is given to cure the crop from fruit fly pest.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Powdery Mildew:</b> Patchy, White powdery growth appears on upper surface of leaves also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.<br>
If infestation is observed take Spray of water soluble Sulphur@20gm/10Ltr of water 2-3times with interval of 10 days.<br>
ii.<b>Anthracnose:</b> Anthracnose affected foliage appears scorched appearance. <br>
As a preventive measure, treat seed with Carbendazim@2gm/kg of seed. If infestation is observed in field, take spray of Mancozeb@2gm or Carbendazim@2.5gm/liter of water.<br>
iii.<b>Downy mildew: </b>Caused by Pseudopernospora cubensis. Symtoms are mottling and purplish color spots are seen on lower surface of the leaves.<br>
If infestation is observed, Dithane M-45 or Dithane Z-78 is used to get rid of this disease.<br>
iv.<b>Fusarium wilt:</b> It affects the vascular tissues of the plant which result in immediate wilting.<br>
Drenching with Captan or Hexocap @0.2-0.3% solution is used to get rid of fusarium wilt.<br>
v.<b>Cucurbit phyllody:</b> Symptoms are internodes shortening and stunted growth of plant. As a result crop does not bear fruits.<br>
Application of Furadan@5 kg/acre at the time of sowing will helps to prevent from this disease. If infestation is observed, then spraying of Dimecron@0.05% at the interval of 10 days is done.<br>
</p>
</div>
<br><br>
<button>
<a href="https://agribegri.com/products/coragen---broad-spectrum-insecticide-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Fruits are ready to harvest in 60-70 days. Harvesting is mainly done when fruits attain full size and are tender. Harvesting is mainly done at the interval of 3-4 days in the peak season.</p>
</div>
<br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>Keep isolation distance of 1000m from other varieties of wild melon, muskmelon, snap melon and long melon. Remove disease infected plants from field. When fruits are mature i.e. they changes their color into dull. Then they are crushed with hands in fresh water and then separate seeds from pulp. Seeds which are settled in bottom are collected for seed purpose.</p>
</div><br>
<div class="zoom">
<img alt="Long Melon" src="longmelon2.jpg">
</div><br><br><br><br>
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
