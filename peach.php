<!DOCTYPE html>
<html>
<head>
<title>Peach</title>
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
<h3>PEACH</h3>
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

<div style="float:right" class="zoom"><img alt="Peach" src="peach1.jpg"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>Peach requires deep sandy loam soil rich in organic matter with good drainage. The pH of the soil should be between 5.8 and 6.8. Acidic and saline soils are unfit for peach cultivation. The land with gentle slope is ideal for peach cultivation. The fruit thrives best in foothills, high hills and mid hills situation.
</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Land must be prepared by proper dig at 5m X 5m apart and the beds are fully filled with 20 kg of FYM, 125 g of urea and 25ml of chlorpyriphos. These are mixed with 30 cm soil and filled above 10 cm of ground level.</p>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Propagation process is used.<br>   
</p></div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>25°C - 30°C</td>
    <td>200-300 mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>Tree age (in years)</th>
    <th>FYM (kg/tree)</th>
    <th>UREA (gm/tree)</th>
	<th>SSP (gm/tree)</th>
	<th>MOP (gm/tree)</th>
  </tr>
  <tr>
    <td>1-2</td>
    <td>10-15</td>
    <td>150-200</td>
	<td>200-300</td>
	<td>150-300</td>
  </tr>
  <tr>
    <td>3-4</td>
    <td>15-20</td>
    <td>500-700</td>
	<td>500-700</td>
	<td>400-600</td>
  </tr>
  <tr>
  <td>5 and above</td>
  <td>	25-30</td>
  <td>1000</td>
  <td>1000</td>
  <td>800</td>
  </tr>
 
</table>
  </center></div><br><br>
  <button type="button">
<a href="https://www.flipkart.com/green-dews-citrus-plant-food-fertilizer/p/itmffde2heg7hkq2?pid=SMNFFBY9Z8DVTXMB&lid=LSTSMNFFBY9Z8DVTXMBEL4PDT&marketplace=FLIPKART&cmpid=content_soil-manure_8965229628_gmc" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Propagation</button>
<div class="panel">
<p>For propagation, grafting or budding method is used. For raising rootstock Sharbati, Khurmani are used. Peach tree needs heavy and regular pruning. Pruning must be done in last week of October. Water sprouts and other shoots must be eradicated. The newly peach tree should be planted about 35 inches height.</p>
</div><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b><br>
T- budding is done in the first week of May. T -budded seedlings are ready for transplantation in field in the month of December-January.<br>
<b>Spacing:</b><br>
For planting square system is used with spacing of 6.5 m x 6.5 m.<br>
<b>Sowing Depth:</b><br>
The seeds of peach tree must be sown in beds which are 5 cm in depth with 12-16 cm apart from each other.<br>
<b>Method of Sowing:</b><br>
In the starting budding /grafting is done and then transplanting method is used for growing the plants in the main field.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>When the tree is 1-2 years old, apply FYM@10-15 kg/tree, UREA@150-200gm/tree, SSP@200-300gm/tree and MOP@150-300gm/tree. When the tree is 3-4 years old, apply FYM@15-20kg/tree, UREA@500-700gm/tree, SSP@500-700gm/tree and MOP@400-600gm/tree. When the trees is 5 years and above, apply FYM@25-30 kg/tree, UREA@1000gm/tree, SSP@1000gm/tree and MOP@800gm/tree.<br>
<b>Watering –</b>After planting the trees, irrigation should be given immediately. In rainy season, these plants may not require watering. Drip irrigation is the best method for effective use of water. Irrigation should be given at some critical stages, in case of dry spell. Watering is important at flowering/budding stage and fruit development stage.<br>
<b>Weeding -</b>These are regulated by manual weeding however it is tiring as well as expensive.  As peach roots are irregular, they can be often damaged by continual ploughing. Thus, usage of herbicides is excellent substitute.  A pre-emergence applying Diuron @ 800 gm-1 kg/acre or even post-emergence use of Glyphosate @ 6 ml/acre in 200 liters of water throughout February-March efficiently manages broad-leave weeds as well as usual grasses in new orchards.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Peach leaf curl aphid:</b>The pest is active in March to May month. The pest results in curling and yellowing of leaves.
<br>Treatment:Spraying of Rogor 30 EC@800ml/acre in 500ltr water should be done. Do spraying after 15 days if required.<br>
ii.<b>Peach black aphid:</b>The pest is active in April-June month.
<br>Treatment:Spraying of Malathion 50EC @800ml/acre in 500ltr water.<br>
iii.<br>Flat headed borer:</b>It is a serious pest which is active in mid-March month. They feed on foliage.
<br>Treatment:Drenching with Durmet 20 EC@1000ml/acre in 500ltr should be done in June month after harvesting for the prevention of this pest.<br>
iv.<br>Beetles:</b>The beetles feed on leaves during night time.
<br>Treatment:Spraying of Hexavin 50 WP@1kg/acre in 500ltr water is done at the evening time. If damage continues repeat the spray after 5-6 days.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Shot hole:</b>The symptoms are dark brown color lesions on leaves.
<br>Treatment:Spraying with Captan or Ziram or Thiram@0.2% should be done at the time of leaf fall or bud swelling stage.<br>
ii.<b>Bacterial canker and gummosis:</b>It attacks on main trunk, shoots, branches, spurs, blossoms, dormant buds, leaves and even fruits.<br>
Treatment:Ensure that a suitable peach variety and rootstock is chosen based on geographic location and environmental conditions to prevent stress to tree which predisposes tree to canker disease, apply protective copper spray to trees before flowering, prune trees in early summer to decrease likelihood of infection.<br>
iii.<b>Brown rot:</b>It causes wilting of plant and killing of petals and young twigs.
<br>Treatment:Spraying with Captan@0.2% before 3 weeks of harvesting.
</p></div><br><br>
<button type="button">
<a href="https://www.amazon.in/Zaena-Controller-Certified-Pesticide-miticide/dp/B082WJQ6VB/ref=asc_df_B082WJQ6VB/?tag=googleshopdes-21&linkCode=df0&hvadid=397083842627&hvpos=&hvnetw=g&hvrand=59118744110886475&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9075215&hvtargid=pla-917679720652&psc=1&ext_vrnc=hi" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>April to May is the peak month of harvesting peach crop. They reach good color and hard flesh that shows they are ready to harvest. Harvesting of peach crop is carried by twisting the fruit.</p>
</div>
<br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting they are stored in moderate temperature and can be used in processing squash.</p>
</div>
<br>
<div class="zoom">
<img alt="Peach" src="peach2.jpg">
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