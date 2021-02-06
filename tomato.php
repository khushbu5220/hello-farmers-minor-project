<!DOCTYPE html>
<html>
<head>
<title>Tomato</title>
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
<h3>TOMATO</h3>
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

<p>Tomato is originated in Peru of South America. It is important commercial vegetable crop of India. It is the second most important crop of world after potato. Fruits are eaten raw or in cooked form. It is rich source of vitamin A, C, potassium and minerals. It is used in soup, juice and ketch up, powder. The major tomato producing states are Bihar, Karnataka, Uttar Pradesh, Orissa, Maharashtra, Andhra Pradesh, Madhya Pradesh and West Bengal. In Punjab state, Amritsar, Ropar, Jalandhar, Hoshiarpur are tomato growing districts.</p>
<br>
<div style="float:right" class="zoom"><img alt="Tomato" src="tomato1.jfif"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown in varied type of soil ranging from sandy loam to clay, black soil and red soil having proper drainage. It gives best result when grown under well drained sandy soil with high organic content. For good growth pH of soil should be 7-8.5. It can tolerate moderate acidic and saline soil. Avoid cultivation in high acidic soils. For early crops, light soil is beneficial where for heavy yields clay loam and silt-loam soils are useful.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For tomato plantation, it required well pulverise and levelled soil. To bring soil to fine tilth, plough land for 4-5times, then planking is done to make soil level. At time of last ploughing add well decomposed cow dung and Carbofuron@5kg or Neem cake@8kg per acre should be applied. Transplantation of tomato is done on raised bed. For that prepared raised bed of 80-90cm width. To destroy harmful soil borne pathogen, pest and organism, soil solarization is carried out. It can be done by using transparent plastic film as mulch. This sheet absorb radiation and thus increases soil temperature and kill pathogen.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
For northern state, tomato cultivation for spring season is done in late November and transplanted in second fortnight of January. For autumn crop, sowing is done in July - August and transplanted in August - September. In hilly areas sowing is done in March- April and transplantation is done in April -May.<br>
<b>Spacing</b><br>
Depending upon variety use and its growth habit, use spacing of 60x30cm or 75x60cm or 75x75cm. In Punjab, for dwarf variety use spacing of 75cm x 30cm and for rainy season use spacing of 120-150 x 30cm.<br>
<b>Sowing depth</b><br>
In nursery sow seeds at depth of 4cm and then covered with soil.<br>
<b>Method of Sowing</b><br>
Transplanting of seedling in main field.
</p>
</div>
<br>
<button class="accordion"style="width:75%">Nursery Management and Transplanting</button>
<div class="panel">
<p>Do solarization for one month before sowing. Sow tomato seeds on raised beds of 80-90cm width and of convenient length. After sowing covered bed with mulch and irrigate bed with Rose-Can daily in morning. To protect crop from virus attack cover nursery bed with fine nylon net.<br>
10-15days after transplanting sprayed 19:19:19 along with micronutrients@2.5 to 3gm/Ltr of water. To make plants healthier and stronger and to harden seedling against transplanting sock take spray of Lihocin@1ml/Ltr water at 20days after sowing. Damping Off damages crop to great extent, to prevent crop from it avoid overcrowding of seedlings and keep soil wet. If wilting is observed, do drenching of Metalaxyl@2.5gm/Ltr water, 2-3 times till plants are ready for transplantation.<br>
Seedling is ready for transplantation 25 to 30days after sowing with 3-4leaves. In case if seedlings age is more than 30days transplant it after de-toping. Water seedling beds 24hours before transplanting so that seedlings can be easily uprooted and be turgid at transplanting time.<br>
To protect crop from bacterial wilt, dip seedlings in 100ppm Streptocycline solution for 5 minutes before transplanting.
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
    <td>10-25°C</td>
    <td>400-600mm</td>
	<td>15-25°C</td>
    <td>10-15°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use seed rate of 100gm for preparing seedling for sowing in one acre land.<br>
<b>Seed Treatment</b><br>
To protect crop from soil borne disease and pest, before sowing do seed treatment with Thiram@3gm or Carbendazim @ 3gm of seeds. After chemical treatment, treat seed with Trichoderma@5gm/kg of seeds.  keep it in shade. And use it for sowing.<br>
<center>
<table style="width:50%">
  <tr style="background-color:gold">
    <th>Fungicide Name</th>
    <th>Quantity (per kg Seed)</th>
  </tr>
  <tr style="background-color:yellow">
    <td>Carbendazim</td>
    <td>3 gm</td>
  </tr>
  <tr style="background-color:yellow">
  <td>Thiram</td>
  <td>3 gm</td>
  </tr>
</table></center>
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
    <td>130</td>
    <td>155</td>
    <td>45</td>
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
    <td>60</td>
    <td>25</td>
    <td>25</td>
  </tr>
</table></center>
<br> 
<p>At the time of land preparation, apply well rotten cow dung@10ton/acre and mix well in the soil. Apply fertilizer dose of N:P:K @60:25:25kg/acre in form of Urea@130kg/acre, Single Super Phosphate@155kg/acre and MOP@45kg/acre. Apply half dose of Nitrogen, full dose of Phosphorus and Potash applied as basal dose, apply it before transplanting. 20 to 30days after transplantation apply remaining 1/4th dose of nitrogen. Two month after transplantation, apply remaining dose of Urea.<br>
<b>WSF:</b> 10-15days after transplanting, take spray of 19:19:19 along with micronutrient@2.5 to 3gm/ltr of water. Due to low temperature, plant absorbs fewer nutrients and growth get affected. In such cases foliar spray helps in growth of plants. In vegetative growth stage take spray of 19:19:19 or 12:61:00 @ 4-5 gm/Ltr. For better growth and more yield, spray with 50ml Brassinolide per acre in 150ltr of water at 40-50 days after transplanting for two times at 10days intervals.<br>
Obtain good fruit quality along with good yield, take spray of 12:61:00 (Mono Ammonium Phosphate)@10 gm/Ltr before flowering.  When flowering starts in initial days, take spray of Boron@25gm/10litre of water. It will help to control flower and fruit dropping.  Sometime black spots are observed on fruits, these are due to calcium deficiency. Take spray of calcium nitrate@2gm/ltr of water. In high temperature flower drop is seen, spray with NAA@50 ppm (50ml/10L water) when crop is in flowering stage. Give one spray of sulphate of potash (00:00:50+18S) during fruit development stage@3-5 gm/ltr of water. It will give good fruit development and colour. Fruit cracking reduces fruit quality and lowers prices up to 20%. Take spray of chelated boron (Solubor)@200gm/acre/200Ltr water at fruit ripening stage. To improve plant growth, flowering and fruit set, spray with sea weed extract (Biozyme/Dhanzyme)@3-4 ml/Ltr water twice a month. Maintain good soil moisture.
</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.in/Tomato-tone-Organic-Fertilizer-YOUR-TOMATOES/dp/B0011UEKKE" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In winter, apply irrigation with interval of 6 to 7days and in summer month, apply with interval of 10-15days depending upon soil moisture. Period of drought follow by heavy watering leads to cracking of fruits. Flowering stage is critical for irrigation, water stress during this stage can leads to flower drop and adversely affecting fruiting and productivity. According to various researches, it is found that, half inch irrigation at every fortnight causes maximum penetration of roots and thus gives high yield.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do frequent weeding, hoeing and earthing up and keep field weed free till 45 days. If weed left uncontrolled then it will reduce crop yield upto 70-90%. Two to three days of after transplantation take spray of Fluchloralin (Basalin) @800ml/200Ltr water as pre-emergence weedicide. If weed intensity is high, take post emergence spray of Sencor@300g/acre. Mulching is also an effective way to reduce soil temperature along with weed control.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Leaf Miner:</b> Maggots of leaf miner feed on leaf and make serpentine mines into leaf. It affects the photosynthesis and fruit formation.<br>
At initial stage, take spray of Neem Seed Kernel Extract@5%, 50gm/Ltr of water. To control leaf miner, spray with Dimethoate 30EC@250ml or Spinosad@80ml in 200Ltr of water or Triazophos@200ml/200Ltr of water.<br>
ii.<b>White fly:</b> The nymphs and adults of white fly suck the cell sap from the leaves and weaken the plants. They secrete honey dew on which black sooty mould develops on leaves. They also transmit leaf curl diseases.<br>
After sowing of seeds in nursery, cover bed with 400mesh nylon net or thin white cloth. It helps to protect seedlings from pest-disease attack. To check infestation use yellow sticky traps coated with grease and sticky oils. To control spread of whiteflies, uproot and destroy affected plants. In case of severe infestation, take spray of Acetamiprid 20SP@80gm/200Ltr of water or Triazophos@250ml/200litre or Profenophos@200ml/200litre of water. Repeat the spray after 15 days.<br>
iii.<b>Thrips:</b> Commonly observed pest. Mostly observed in dry weather. They suck sap from the foliage and results in curling of leaves, leaves become cup shaped or curved upward. Also causes flower drop.<br>
To check severity of thrips incidence, keep blue sticky traps @6-8 per acre. Also to reduce the incidence of this disease, spray Verticillium lecani@5gm/Ltr water. If incidence of thrips is more, then take spray of Imidacloprid 17.8SL @60ml or Fipronil@200ml/200Ltr of water or Acephate 75% WP@600 gm/200Ltr or Spinosad@80ml/acre in 200Ltr water.<br>
iv.<b>Gram Pod borer or Heliothis armigera:</b> It is a major pest of tomato. Crop loss due to Helicoverpa is about 22-37% if not controlled at proper stage. It feeds on leaves also on flower and fruits. On fruits they make circular holes and feed on flesh.<br>
In case of initial infestation, handpicked grown up larvae. At early stage use HNPV or Neem extract@50gm/Litre of water. To control fruit borer, put 16 pheromone traps/acre at equal distance after 20 days of transplanting. Change lure in every 20 days interval. Destroy infested parts. If pest population is high, spray Spinosad@80ml+sticker@400ml/200Ltr of water. To control shoot and fruit borer, spray Rynaxypyr(Coragen)@60ml/200Ltr water.<br>
v.<b>Mite:</b> Mite is a serious pest and it may cause yield loss up to 80%. These are widely distributed pest observed throughout the world. It attacks on several crops like potato, chilli, beans, cotton, tobacco, curcurbit, castor, jute, coffee, lemon, citrus, blackgram, cowpea, pepper, tomato, sweet potato, mango, papaya, brinjal, guava. Nymphs and adults feed exclusively on the lower surface of the leaves. Infected leaves give cup shape appearance. Heavy infestation results in defoliation bud shedding and drying of leaves.<br>
If Infestation of yellow mite & thrips is observed in field, spray of Chlorfenapyr@15ml/10Ltr, Abamectin@15ml/10Ltr or Fenazaquin @100ml/100Ltr are found effective. For effective control spray Spiromesifen 22.9SC(Oberon)@200ml/acre/180Ltr of water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Fruit Rot:</b> Major disease of tomato and observed due to changing weather. Water soaked lesions are appeared on fruits. Afterwards they turn into black or brown color and causing rotting of fruits.<br>
Before sowing, do seed treatment with Tricoderma@5-10gm or Carbendazim@2gm or Thiram@3 gm/Kg of seeds. If infection observed in field collect and destroy  infected fruit and leaves which lies on ground. Fruit rot and anthracnose attacked mostly observed in cloudy weather, to control take spray of Mancozeb@400gm or Copper Oxychloride@300gm or Chlorothalonil@250gm/200Ltr water. Repeat spray with 15 days interval.<br>
ii.<b>Anthracnose:</b> Warm temperatures, high moisture are ideal condition for spread of this disease. It is characterized by black spots that are formed on infected parts. Spots are usually circular, water-soaked and sunken with black margins. The fruits with many spots drop off prematurely resulting in heavy loss of yield.<br>
If Infestation of Anthracnose is observed. To control this disease, spraying of  Propiconazole or Hexaconazole@200ml/200Ltr of water should be done.<br>
iii.<b>Early Blight:</b> Common and major disease of tomato. Initially small, brown isolated spots are observed on leaf. Later spots are seen on stem and also on fruits. Fully developed spots become irregular, dark brown color with concentric ring inside spots. In severe condition, defoliation occurred.<br>
If infestation of early blight is observed, take spray of Mancozeb@400gm or Tabuconazol@200ml/200Ltr. Repeat spray 10-15 days after first spray. In cloudy weather, chances of incidence of early and late blight increases. As a preventive measure, spray with Chlorothalonil@250gm/100Ltr of water. Also sudden rain pattern aggravate blight and other diseases take spray of Copper based fungicides@300gm/Ltr+Streptocycline@6gm/200Ltr water to control blight disease.<br>
iv.<b>Wilt and Damping off:</b> Moist and poorly drain soil causes damping off disease. It is soil borne disease. Water soaking and shriveling of stem occurs. Seedlings killed before emergence. If it appears in nursery the entire lot of seedling may get destroyed.<br>
To prevent root rot, drench soil with 1% Urea@100gm/10Ltr and Copper oxychloride @250gm/200Ltr water. To control wilt, drench nearby soil with Copper oxychloride@250gm or Carbendazim@400gm/200Ltr of water. Increased temperature and humidity due to watering facilitate fungal growth at roots, to overcome it, apply Trichoderma 2 kg/acre along with cow dung near roots of plants. To control soil born disease, drench soil with Carbendazim@1gm/Ltr or Bordo mix@10gm/ltr, 1 month after that apply 2 kg Trichoderma /acre, mixed with 100kg cow dung.<br>
v.<b>Powdery Mildew:</b> Patchy, white powdery growth appears on lower side of leaves. It parasitizes the plant using it as a food source. It commonly occurs on older leaves just before or at fruit set. But it can develop at any stage of crop development. In severe infestation it causes defoliation.<br>
Avoid water lodging in field. Keep field clean. To control this disease, spraying with Hexaconazole along with sticker @1ml/Ltr of water should be done. In case of sudden rain, chances of powdery mildew is more. Mild infestation takes spray of water soluble sulphur@ 20gm/10Ltr of water 2-3 times with interval of 10 days.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/tomato.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plant starts yielding by 70days after transplantation. Harvesting is done depending upon purpose like for fresh market, long distance transport etc. Mature green tomatoes, 1/4th fruits portion gives pink color are harvested for long distance markets. Almost all fruits turn into pink or red color but having firm flesh are harvested for local markets. For processing and seed extraction purpose, fully ripe fruits with soft flesh are used.</p>
</div><br>
<br>
<button class="accordion">Post Harvest</button>
<div class="panel">
<p>After harvesting, grading is done. Then fruits are packed in bamboo baskets or crates or wooden boxes. To increase self-life of tomato during long distance transport pre-cooling is carried out. From ripen tomatoes several products like Puree, syrup, juice and ketch up are made after processing.</p>
</div><br>
<div class="zoom">
<img alt="Tomato" src="tomato2.jfif" style="height:100%;width:140%">
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
