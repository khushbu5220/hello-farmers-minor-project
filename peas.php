<!DOCTYPE html>
<html>
<head>
<title>Peas</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 360%;
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
<h3>PEAS</h3>
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

<p>It belongs to Leguminaceae family. It is a cool season crop grown throughout the world. Green pods are used for vegetable purpose and dried peas are used as pulse. In India it is cultivated in Himachal Pradesh, Madhya Pradesh, Rajasthan, Maharashtra, Punjab, Haryana, Karnataka and Bihar. It is rich source of proteins, amino acids and sugars. Green peas straw is good source of nutritional fodder for livestock.</p><br>
<div style="float:right" class="zoom"><img alt="Peas" src="peas1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can grow on various soil types from sandy loam to clay soils. It gives best results when grown under well drained soil with pH range of 6 to 7.5. Crop cannot withstand in water logging conditions. For acidic soil, do limming.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>After kharif crop harvesting, to obtain fine seed bed do one to two ploughing. Along with ploughing take 2-3 harrowing and do planking after ploughing operation. Field should be level to avoid waterlogging conditions in soil. Give pre-sowing irrigation before sowing of crop, it will help in good germination of crop.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
To obtain good yield complete sowing between October end to Middle of November. Further delay in sowing will lead to yield loss. For early market, some growers sow peas in second fortnight of October.<br>
<b>Spacing</b><br>
Use spacing of 30cmx5cm for early varieties and for late varieties use spacing of 45-60cm x 10cm.<br>
<b>Sowing depth</b><br>
Sow the seeds at depth of 2-3cm in soil.<br>
<b>Method of Sowing</b><br>
For sowing use seed cum fertilizer drill on ridges which are 60 cm wide.</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
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
    <td>15-30°C</td>
    <td>400-500mm</td>
	<td>15-20°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For sowing in one acre land use seed rate of 35-40kg/acre.<br>
<b>Seed Treatment</b><br>
Before sowing, treat the seed with Captan or Thiram@3gm/kg of seed or Carbendazim@2.5gm/kg of seed. After chemical treatment, treat seeds with Rhizobium leguminosorum culture for better quality and yield. The culture material is emulsified in 10 percent sugar solution or jaggery solution. Mix thoroughly the emulsified culture with seed and dry in shade. It will increase yield upto 8-10%.<br>
Use any one of fungicides<br>
<center>
<table style="width:50%">
  <tr style="background-color:gold">
    <th>Fungicide Name</th>
    <th>Quantity (per kg Seed)</th>
  </tr>
  <tr style="background-color:yellow">
    <td>Carbendazim</td>
    <td>2.5 gm</td>
  </tr>
  <tr style="background-color:yellow">
    <td>Captan</td>
    <td>3 gm</td>
  </tr>
  <tr style="background-color:yellow">
  <td>Thiram</td>
  <td>3 gm</td>
  </tr>
</table></center></p>
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
    <td>45</td>
    <td>155</td>
    <td>As per soil test</td>
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
    <td>20</td>
    <td>25</td>
    <td>#</td>
  </tr>
</table></center>
<br> 
<p>At time of sowing apply Nitrogen@20kg in form of Urea@50kg and Phosphorus@25kg in form of Superphosphate@150kg per acre. Drill complete dose of fertilizer along the rows.</p>
</div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=buy+fertilizer+for+peas&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk035yGbVrMR2ipu-wSxcqgGM3DpBBw:1607179196378&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjHoNyIibftAhWrIbcAHcaRDMAQ_AUoAXoECAwQAw&biw=732&bih=687" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Pre sowing irrigation should be given for good germination. When it is cultivated after paddy crop and soil content sufficient moisture, it can sow without irrigation. After sowing it required one or two irrigation. Apply first irrigation during pre-flowering and second at pod formation stage. Heavy irrigation leads to the yellowing of plants and thus reducing the yield.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Depending upon variety it requires one or two weeding. First weeding is done either at 2-3 leaves stage or 3-4 weeks after sowing and second weeding is done before flowering. Using herbicides is the effective method of controlling weeds in peas cultivation. Pendimethalin@1 ltr/acre and Basalin@1 ltr/acre give good results in controlling the weeds. Apply herbicide within 48 hours of sowing.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Pea leaf Miner: </b>Larva of leaf miner create tunnel in leaves. Due infestation loss of 10-15% is observed.<br>
If infestation is observed, take spray of Dimethoate 30EC@300 ml in 80-100 Ltr water per acre. If necessary repeat the spray after 15 days.<br>
ii.<b>Pea Thrips and Aphid:</b> They suck cell saps leads to yellowing of crop and thus decreases yield of crop.<br>
If infestation is observed, take spray of Dimethoate 30EC@400 ml in 80-100 Ltr water per acre. If necessary repeat the spray after 15 days.<br>
iii.<b>Pod borer:</b> Pod borers are the most serious pests of pea. They bore flowers and pods, causing 10-90% losses, if left unprotected.  <br>
When infestation is in initial stage, take spray of Carbaryl@900gm/100Ltr of water per acre. If necessary repeat the spray after 15 days. In case of severe infestation take spray of Chlorpyriphos@1 Ltr or Acephate@800 gm in 100 Ltrs of water per acre with manually operated knapsack sprayer.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Wilt:</b> The roots turn black and the later rot away. Plant growth is stunted and discoloured, foliage turn yellow and downward curling of stipules and leaflets take place. The entire plant wilts and stem shrivels.<br>
<b>Control measures:</b> Treat seeds with Thiram@3gm/Ltr water or Carbendazim@2gm/Ltr water of water before sowing and avoid early sowing in badly affected areas. Follow three year crop rotation. Drench the infected area with Carbendazim@5gm/Ltr water. Destroy the weed hosts such as Lathyrus vicia etc.<br>
ii.<b>Rust:</b> Yellowish, brown spherical pustules can be observed on stems, leaves, branch and pods.<br>
Spray Mancozeb@25gm/Ltr of water or Indofil@400gm/100Ltr of water on disease appearance and repeat the spray at 10-15 days intervals.<br>
iii.<b>Powdery Mildew:</b> Patchy, White powdery growth appears on lower side of leaves, branches and pods. It parasitizes the plant using it as a food source. It can be developed at any stage of crop development. In severe infestation it causes defoliation.<br>
If infestation is observed, take spray of Karathane 40EC@80 ml in 100 Ltr water per acre. Take three sprays of Karathane with interval of 10 days.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/vegetable-pea.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The green peas pods should be harvested at proper stage. Harvesting of peas may start as soon as peas started changing colour from dark to green. Multiple pickings like, 4 to 5 pickling can be done within the 6 to 10 days interval. Yield depends on the variety, soil fertility and management of the field.</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>Storage is done at low temperature to increase the availability of green pods for longer duration. Packing is done in gunny bags, corrugated fibre board boxes, plastic containers and bamboo baskets.</p>
</div><br>
<div class="zoom">
<img alt="Peas" src="peas2.jpg">
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
