<!DOCTYPE html>
<html>
<head>
<title>Capsicum</title>
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
<h3>CAPSICUM</h3>
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
<p>It is a valuable vegetable crop which is grown in green house or in shade net houses. It is also known as Sweet pepper or bell pepper. Capsicums are the rich source of minerals and Vitamins A and C. it is a perennial herbaceous plant which belongs to the family of Solanaceae. It attains the height of 75 cm. It has small flowers which are white or purple in color which bears fruits. In open field it mainly gives an average yield of 83-165 qtl/acre and in greenhouse it gives an average yield of 415-500 qtl/acre. Punjab, Bangalore, Pune and Karnataka are the major states growing capsicums in green houses. Kerala, Maharashtra, Gujarat, Goa, Andhra Pradesh and West Bengal are the states which do small scale production of capsicums.</p><br>
<div style="float:right" class="zoom"><img alt="capsicum" src="capsicum1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It requires an ideal soil temperature between 18-35°C.It is grown in all type of soils ranging from clayey to loamy soil. It can also withstand in acidic soil to some extent. It gives best result when grown under sandy loam soil having high fertility and good drainage system. It requires pH ranging from 6-7 is best for capsicum.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For capsicum plantation, fields should be well prepared. To bring the soil to fine tilth, 5-6 ploughings followed by planking’s must be done. At the time of land preparation FYM (Farm Yard Manure) or compost is mixed with the soil.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Seeds are mainly sown in the end of the October month and transplanting is done in mid-February. For early yield, seeds are sown in the mid-October month and transplanting is done in end November.<br>
<b>Spacing</b><br>
Use row to row spacing of 50 cm and plant to plant spacing of 40 cm.<br> 
<b>Sowing Depth</b><br>
Depth should be 2-4 cm.<br>
<b>Method of Sowing</b><br>
i.<b> Low tunnel technology:</b> This technology is used to produce early yield of capsicum in early summer. It helps to protect the crop from cold season i.e. in the month of December to mid-February. Beds of 2.5 m width are sown in the month of December. Use row to row spacing of 130 cm and line to line spacing of 30 cm for seedling sowing. Before sowing supportive rods of 45-60 cm length are fixed in the soil. Cover the field with plastic sheet (100 gauge thickness) with the help of support rods. Plastic sheet should be removed mainly in the month of February when temperature is suitable outside.<br>
ii.<b>Dibbling method</b>
</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
	<th>Harvesting Temperature</th>
	<th>Sowing Temperature</th>
  </tr>
  <tr style="background-color:magenta">
    <td>21-25°C</td>
    <td>625-1500mm (Winter)</td>
	<td>12 - 15°C</td>
    <td>30-35°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use seed rate of 200-300 gm for one acre of land.<br>
<b>Seed Treatment</b><br>
Soak the seeds in Thiram or Captan, Ceresan etc. @2gm/kg of seeds before sowing to prevent the crops from seed borne diseases.<br></p>
</div>
<br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>For capsicum farming, nursery beds are raised firstly. Seed beds of 300 x 60 x 15cm are prepared to raise seedlings. Seeds are sown in raised nursery beds and after sowing cover the nursery beds with thin layer of soil manure. Light irrigation is necessary after sowing the seeds in raising beds for optimum germination of seeds.<br>
Transplanting is done when seedlings attain 4-5 leaves. Transplanting is done in prepared fields. Transplanting is mainly done in evening during cloudy weather. Mainly 50-60 old seedlings are used for transplanting.<br>
Apply water to the nursery beds before transplanting so that seedling can be easily uprooted.<br></p>
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
    <td>110</td>
    <td>175</td>
    <td>20</td>
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
    <td>50</td>
    <td>25</td>
    <td>12</td>
  </tr>
</table></center>
<br> 
<p>At the time of land preparation, mixed FYM @20-25 tonnes/acre in the soil. Along with FYM, apply fertilizer dose of Nitrogen @50 kg/acre in the form of urea @110kg/acre, Phosphorus @25kg/acre in the form of super phosphate@175 kg/acre and Potassium@12kg/acre in the form of Muriate of Potash@20 kg/acre.<br>
Full dose of Potassium, phosphorus and 1/3rd dose of Nitrogen is mixed in rows just before transplanting and the rest of the nitrogen dose is given in two equal splits i.e. one after one month of transplanting and second after two months of transplanting.<br></p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.in/Stevia-Leaves-Capsicum-Fertilizer-Responce/dp/B07FBXPB7G" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Light irrigation is given immediately after seed sowing. Then next irrigation is given immediately after transplanting, and then later irrigation is given when requires. In arid and semi-arid regions irrigation is required at proper intervals.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>For good yield of crop, weeding must be done at proper intervals. Earthing up after 2-3 weeks of transplanting will help to remove weeds from the fields. First weeding is done after 30 days of transplanting then second weeding is done after 60 days of transplanting.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Disease and their control:</b><br><br>
i.<b>Damping off:</b> It is a fungal disease which affects the young seedlings. The symptoms are patches shown on the stem which ultimately shrivel and then die. They affect the whole crop within 4-5 days. The diseases mainly occur when crop is grown in poor drained soils.<br>
<b>Treatment:</b> Spraying of Bordeaux mixture @0.5-1.0% or any copper oxychloride mixture such as Blitox or Fytolan will help to get rid of damping off.<br>
ii.<b>Anthracnose:</b> It is a fungal disease which affects the stem, leaves and fruits of the crop.  The symptoms are dark and round spots on fruits and black color minute spots are seen on the seeds. After some time the infected fruits will drop prematurely. The disease is mostly infected in high humidity.<br>
<b>Treatment:</b> Seed treatment is must before sowing the seeds. Seeds are treated with Thiram @0.2% or Brassico @0.2% to prevent from anthracnose disease. If disease occurs then spray of Dithane(M-45) or Blitox @0.4% or Difoltan @0.2% is done at the interval of 15 days.<br>
iii.<b>Powdery mildew:</b> The disease mainly occurs in summers. The symptoms are white talcum powder like growth is seen on the leaf, stunted growth and leaves get shed.<br>
<b>Treatment:</b> Spraying of Sulfex @0.2% or Tridemorph@0.2% is done at the interval of 15 days is done to get rid of powdery mildew.<br>
iv.<b>Bacterial wilt:</b> The symptoms are rapid growth of wilting on leaves as well as on fruits.<br>
<b>Treatment:</b> Application of bleaching powder @15kg before will help to prevent bacterial wilt. Use of resistant varieties such as “Arka Gaurav” will help to prevent disease.<br>
v.<b>Leaf curl disease:</b> The symptoms are leaf curling, blistering of interveinal areas and thickening of mid vein of leaves.<br>
<b>Treatment: </b>The plants showing this should be uprooted to prevent further infection.<br>
vi<b>Thrips:</b> The symptoms are white blotches seen on leaves and stunted growth.<br>
<b>Treatment:</b> Spraying of Malathion(Cythion 50 EC @1.5ml/ltr of water) or Dimethoate (Rogor 30 EC @ 2ml/ltr of water). The pest can also be controlled by spraying of Nicotine sulphate @0.25%.<br>
vii.<b>Aphids:</b> They destroy the plant by feeding themselves on cell sap of leaves.<br>
<b>Treatment:</b> Application of Monocrotophos @0.05-0.01% or Demeton methyl @0.05-0.02% will help to get rid from aphids.<br>
viii.<b>Mites:</b> They are tiny spider like creatures which feed in leaves of capsicum.<br>
<b>Treatment:</b> Spraying of cypermethrin 5 EC @3ml/ltr will help to control mites. Spraying of Dimethoate (Rogor @2ml/ltr) or Dicofol (Kelthane @1.5ml/ltr of water) is also effective to control mites.<br>
</p>
</div>
<br><br>
<button>
<a href="https://agribegri.com/products/capsicum-special--buy-capsicum-special-online-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Green fruits which are immature are ready for harvesting. Immature fruits are soft and crispy which is good for harvesting. Capsicum farming mainly gives an average yield of 40-50 qtl/acre.</p>
</div>
<br>
<div class="zoom"><img alt="capsicum" src="capsicum2.jpg"></div>
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