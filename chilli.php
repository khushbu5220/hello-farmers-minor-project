<!DOCTYPE html>
<html>
<head>
<title>Chilli</title>
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
<h3>CHILLI</h3>
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
<br><br>
<p>It is known as the most valuable crop of India. It is used as a principle ingredient of various curries and chutneys, also used in vegetables, spices, condiments, sauces and pickles. Pungency in chillies is due to the active constituent "Capsaicin", an alkaloid. The native home of chilli is considered to be Mexico with secondary origin of Guatemala. Chilli was introduced in India by the Portuguese in Goa in the middle of 17th century and since then it had rapidly spread throughout the country. Capsaicin has many medicinal properties, especially as an anti-cancerous agent and instant pain reliever. It also prevents heart diseases by dilating blood vessels. Major chilli growing countries are India, China, Pakistan, Indonesia, Korea, Turkey and Sri Lanka in Asia; Nigeria, Ghana, Tunisia and Egypt in Africa; Mexico, United States of America in North & Central America; Yugoslavia, Spain, Romania, Bulgaria, Italy and Hungary in Europe and Argentina, Peru and Brazil in South America. India is the world leader in chilli production followed by China & Pakistan. Andhra Pradesh, Maharashtra, Karnataka, Orissa, Tamil Nadu, Bihar, UP and Rajasthan are the main chilly growing states.
</p><br>
<div style="float:right" class="zoom"><img alt="Chilli" src="chilli2.jpeg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Chilli is grown in many types of soils-sandy to heavy clay. A well-drained, fairly light fertile loam with a fair moisture holding capacity is ideal. The light soils produce better quality fruits than heavy soils. Chilli crop prefers a soil reaction ranging from pH 6–7.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Carry out ploughing for 2-3 times and clod crushing after each ploughing. Add compost or Farm Yard Manure @150-200 qtl/acre and mix well in the soil 15-20 days before sowing. Form ridges and furrows at spacing of 60cm. Apply 0.8 kg/acre of Azospirillum and 0.8 kg/acre of Phosphobacteria by mixing with 20 kg of FYM.<br>
<b>IMP:</b> Do not cultivate Tomato and Chilly crop in same field or in nearby field, as pest and diseases are similar. Also spread anthracnose and bacterial disease. When it is intercropped with onion and coriander, it gives additional income also helps in controlling weed population. For nematodes control, take onion, garlic or merry gold as intercrop.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
The ideal time for raising nursery is from October end to mid of November. Cover the nursery area with 50 % shade net and cover the sides using 40 / 50 mesh insect proof nylon net. Seedlings are ready for transplantation in 30-40 days (Usually in February - March).<br>
<b>Spacing</b><br>
Use row to row spacing of 75 cm and plant to plant spacing of 45 cm.<br> 
<b>Method of Sowing</b><br>
Transplantation method is used.<br></p>
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
    <td>18-40°C</td>
    <td>625-1500mm</td>
	<td>35-40°C</td>
    <td>35-40°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For varieties use seed rate of 200 gm/acre and 80-100 gm/acre for hybrids.<br>
<b>Seed Treatment</b><br>
To protect crop from various soil borne disease seed treatment is necessary. Before sowing do seed treatment with Thiram@3gm or Carbendazim@2gm/kg. After chemical treatment, treat seed with Trichoderma@5gm/kg or Pseudomonas fluorescens@10gm/kg. Keep it in shade and use it for sowing. Do watering with rosecan on daily basis. Drench the nursery with Copper oxychloride@2.5gm/ltr of water at 15days interval to prevent crop from damping off disease.<br>
To protect against wilt, sucking pest, dip roots for 15 min in Trichoderma harzianum@20gm/Ltr+0.5ml/Ltr Imidacloprid before transplanting. Seedling inoculation with VAM supplemented with nitrogen fixing bacteria, save super phosphate by 50% along with saving of 25% nitrogen application.  <br>
For seed treatment use any one fungicide from the following:<br>
<center>
<table style="width:50%">
  <tr style="background-color:gold">
    <th>Fungicide Name</th>
    <th>Quantity(Dosage per kg Seed)</th>
  </tr>
  <tr style="background-color:yellow">
    <td>2gm</td>
    <td>3gm</td>
  </tr>
</table></center>
</p>
</div>
<br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p><b>Nursery Preparation:</b> Form raised beds of 1 m width and convenient length. Mix sterilized cocopeat@300kg with 5 kg neem cake along with Azospirillum and phosphobacteria each@1kg.<br>
Approximately 1.2 kg of cocopeat is required for filling one protray. 120 protrays are required for the production of 11,600 seedlings, which are required for one acre land.<br>
Sow the treated seed in protrays@1 seed per cell. Cover the seed with cocopeat and keep the trays one above the other and cover with a polythene sheet till germination starts. After sowing of seeds in nursery, cover bed with 400 mesh nylon net or thin white cloth. It helps to protect seedlings from pest-disease attack. After 6 days place the protrays with germinated seedlings individually on the raised beds inside the shade net. Water with rose can everyday upto seed germination. Drench with 19:19:19 @ 0.5% (5gm/Ltr) at 18 days after sowing.<br>
<b>Transplantation in Field:</b> After 30-40 days, seedlings are ready for transplantation. For transplantation 6-8 week old or 15-20 cm height seedlings are selected.<br>
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
    <td>55</td>
    <td>75</td>
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
    <td>25</td>
    <td>12</td>
    <td>12</td>
  </tr>
</table></center>
<br> 
<p>Apply Nitrogen@25kg in form of Urea@55kg/acre, Phosphorus@12kg in form of Single Super Phosphate@75kg and Potash@12kg in form of MOP (Muriate of Potash)@20kg/acre. Apply half dose of Nitrogen and full dose of Phosphorus and Potash at time of transplanting. Apply remaining amount of nitrogen after first picking.<br>
Also to obtain high yield take spray of MAP 12:61:00@75gm/15Ltr water at 40-45 days after transplanting at branch growing stage. To Increase yield along with to obtain more no of pickings, apply sulphur/Bensulf@10kg/acre and spray Calcium Nitrate@10gm/Ltr water in flowering stage.<br>
<b>Water Soluble Fertilizer:</b> 10-15 days after transplantation, sprayed 19:19:19 with micronutrients@2.5-3gm/Ltr of water. Then after 40-45 days spraying of 20% Boron@1gm+Micronutrients@2.5-3gm/Ltr of water should be done. When crop is in flowering stage sprayed 0:52:34@4-5gm+micronutrients@2.5-3gm/Ltr of water. In fruiting stage sprayed 0:52:34@4-5gm+Boron@1gm/Ltr of water. When crop is fruit formation stage sprayed 13:0:45@4-5gm+Calcium nitrate@2-2.5gm/Ltr of water.<br>
<b>Growth regulators:</b> To control flower drop and to get good quality fruit, take spray of NAA (naphthalene acetic acid)@4ml/15 ltr of water at flower initiation stage. Care during flowering & fruit set gives upto 20% more yield. Spray Homobrassinalide@5ml/10Ltr of water at flowering thrice at 15 days gap. To increase fruit set having good quality. Spray Triacontanol growth regulator at 1.25ppm(1.25ml/Ltr) on 20,40,60 and 80th day of planting.<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/vegetables/chilli.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>It cant withstand heavy moisture so apply irrigation only when needed. Heavy irrigation causes lanky vegetative growth and flower drop. Number of irrigation and interval of irrigation depend on soil and climatic condition. If plant show dropping at 4 pm, it is indication of plant needed irrigation. Flowering and fruit development are most critical stages of water requirement. Stagnation of water should not be allowed in nursery and field as it causes fungal infection.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Apply Pendimethalin @1ltr/acre or Fluchloralin @800ml/acre as pre-emergence herbicide followed by hand weeding once 30 days after planting. Carryout first weeding operation after 25 days of planting. Depending upon intensity, repeat weeding and keep field free of weeds.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Fruit borer:</b> Caterpillar eat leaves of crop afterward they enter into fruit and caused heavy loss in yield management. Collect and destroyed damaged fruits and grown up caterpillars. Set up pheromone traps for Helicoverpa armigera or Spodoptera litura at 5 Nos./acre.<br>
To control pod borers apply poison bait balls made up of bran-5 kg, Carbaryl-500 gm, Jaggery-500 gm and sufficient amount of water. If infestation of fruit borers is observed. spray Chlorpyrifos + Cypermethrin (Nurel-D/Amla) @30 ml+Teepol@0.5 ml in 12 Ltr of water with power sprayer. Spray with Emamectin benzoate 5% SG @4 gm/10 Ltr of water or Flubendiamide 20 WDG@6 gm/10 litre of water.<br>
ii.<b>Mite:</b> These are widely distributed pest observed throughout the world. It attacks on several crops like potato, chilli, beans, cotton, tobacco, curcurbit, castor, jute, coffee, lemon, citrus, blackgram, cowpea, pepper, tomato, sweet potato, mango, papaya, brinjal, guava. Nymphs and adults feed exclusively on the lower surface of the leaves. Infected leaves give cup shape appearance. Heavy infestation results in defoliation, bud shedding and drying of leaves.<br>
If Infestation of yellow mite & thrips is observed in field, spray of Chlorfenapyr@1.5ml/Ltr, Abamectin@1.5ml/Ltr are found effective. Mite is a serious pest and it may cause yield loss up to 80%. For effective control spray Spiromesifen 22.9SC@200ml/acre/180Ltr of water.<br>
iii.<b>Aphids:</b> Aphid: They attack mostly in winter month and later stage of crop. They suck sap from the leaf. They excrete honey like substance and developed sooty mold i.e blackish colour fungus on the calyx and pods thus deteriorate quality of product. Aphids also work as important insect vectors for chilli mosaic. Mosaic disease transmitted by aphids cause 20-30 percent loss in yield.<br>
To control, take spray of Acephate 75SP@5gm/Ltr or Methyl demeton 25EC@2ml/Ltr of water. Soil application of granular insecticides viz Carbofuran, Phorate@4-8kg/acre on 15 and 60 days after transplanting were also effective.<br>
iii.<b>White fly:</b> The nymphs and adults of White fly suck the cell sap from the leaves and weaken the plants. They secrete honey dew on which black sooty mould develops on leaves. They also transmit leaf curl diseases. To check infestation use yellow sticky traps coated with grease and sticky oils.<br>
In case of severe infestation to control take spray of Acetamiprid 20SP (@4gm/10Ltr of water or Triazophos@2.5ml/litre or Profenophos@2ml/litre of water. Repeat the spray after 15 days.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Powdery Mildew:</b> Patchy, White powdery growth appears on lower side of leaves. It parasitizes the plant using it as a food source. It commonly occurs on older leaves just before or at fruit set. But it can develop at any stage of crop development. In severe infestation it causes defoliation.<br>
Avoid water lodging in field. Keep field clean. To control spray with Hexaconazole(Contaf, Sitara) along with sticker @1 ml/Ltr of water. In case of sudden rain, chances of powdery mildew are more. Mild infestation take spray of water soluble Sulphur @ 20 gm/10 Ltr of water 2-3 times with interval of 10 days.<br>
ii.<b>Phytophthora blight:</b> It is caused by the fungus Phytophthora capsici. It is soil borne and commonly observed on soil with low drainage capacity and areas where proper cultural practices have not been maintained. Also cloudy weather is favourable for spread of this disease.<br>
Avoid crop rotation with brinjal, tomato, cucumber, pumpkin for atleast three years. Spray with Copper oxychloride@250gm/150Ltr of water.<br>
iii.<b>Thrips:</b> Commonly observed pest. Mostly observed in dry weather. They suck sap from the foliage and results in curling of leaves. Also causes flower drop.<br>
To check severity of thrips incidence, keep blue sticky traps @6-8 per acre. Also to reduce the incidence spray Verticillium lecani@5gm/Ltr water.<br>
If incidence of thrips is more, then take spray of Imidacloprid 17.8SL or Fipronil@1ml/Ltr water or Fipronil 80%WP@2.5ml/Ltr of water or Acephate 75% WP@1.0gm/Ltr or do drenching of Thiamethoxam 25% WG@1.0gm/Ltr of water.<br>
iv.<b>Die back and fruit rot:</b> The branches and leaves get dried and black spots are formed on infected parts. Spots are usually circular, water-soaked and sunken with black margins. The fruits with many spots drop off prematurely resulting in heavy loss of yield. The disease spreads rapidly with blowing wind, rains during rainy season. Partially affected plants bear fruits which are few and of low quality.<br>
Use disease free seeds. Before sowing seed treatment with Thiram or Captan@4gm/kg of seeds is effective in eliminating the seed borne inoculum. To control die back and fruit rot diseases spray with Mancozeb@2.5gm or Copper oxychloride@3gm per Ltr of water. Give first spray just before flowering and second at the time of fruit formation.<br>
v.<b>Wilt and damping off:</b> Moist and poorly drain soil causes damping off disease. It is soil borne disease. Water soaking and shrivelling of stem occurs. Seedlings killed before emergence. If it appears in nursery the entire lot of seedling may get destroyed.<br>
To control wilt, drench nearby soil with Copper oxychloride@250gm or Carbendazim@200gm/150Ltr of water. To control wilting of plants due to root rot do drenching with Trichoderma bio fungus@2.5kg/500Ltr water, near to roots of plants.<br>
vi.<b>Anthracnose:</b> It is caused by the fungi Colletotrichum piperatum and C.capsici and is promoted by warm temperatures, high moisture. It is characterised by black spots that are formed on infected parts. Spots are usually circular, water-soaked and sunken with black margins. The fruits with many spots drop off prematurely resulting in heavy loss of yield.<br>
If infestation of Anthracnose is observed then spraying with Propiconazole or Hexaconazole @1ml/Ltr of water should be done.<br>
vii.<b>Yellow Mosaic:</b> Light and green patches observed on leaves. In early stage plant growth get stops. Yellowing, chlorotic ring spots on leaves and fruits. Select healthy and disease free seeds for cultivation. Avoid monocropping in chilly crop. Raise two rows of maize or sorghum for every five rows of chilly against wind direction. Uproot and destroyed infected plant away from field.<br>
Recommendations given for aphids may be adopted (take spray of Acephate 75SP@1gm/Ltr or Methyl demeton 25EC@2ml/Ltr of water. Soil application of granular insecticides viz Carbofuran, Phorate@4-8kg/acre should be done on 15 and 60 days after transplanting.<br>
viii.<b>Bacterial Leaf Spot:</b> It is observed mostly in rainy season. On young leaves the spots are yellowish green, on older leaves they are dark and water soaked. Severely affected leaves become chlorotic and defoliation occurs. It observed on stem also. Stem infection leads to formation of cankerous growth and wilting of branches. On fruit round water soaked spots with pale yellow border is observed. <br>
To control various leaf spot and yellowing diseases, spray Propiconazole 25%EC@ 200ml or Chlorothalonil 75%WP @400-600gm per 150-200Ltr of water. If bacterial leaf spot infestation is observed, to control spray with Streptocycline@1gm +Copper oxychloride@400gm/200Ltr of water.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/chilli.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Chilly can be harvested green or left to ripen on the plant. The ripened colour will depend on the variety grown. To increases no. of pickings, Spray Urea@10gm/Ltr and Soluble K@10gm/Ltr (1% solution each) with 15 days interval during harvesting time. For canning purpose they are harvested when fruits are of red color. Chilly use for drying purpose is harvested at full ripe stage.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>This include:<br> 1) Drying<br> 2) Grading and Packing<br> 3) Storage</p>
</div><br>
<div class="zoom">
<img alt="Chilli" src="chilli1.jpg">
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
