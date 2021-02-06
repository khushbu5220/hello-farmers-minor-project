<!DOCTYPE html>
<html>
<head>
<title>Sugarcane</title>
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
<h3>SUGARCANE</h3>
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
<div style="float:right" class="zoom"><img alt="Sugarcane" src="sugarcane1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>Well drained, deep, loamy soil with ground water table below 1.5-2 m from the soil surface with adequate water holding capacity is ideal for sugarcane cultivation. It can tolerate considerable degree of acidity and alkalinity so it can be grown on soil, ranging from 5 to 8.5. If soil is low in pH (less than 5) add lime in soil and for high pH (more than 9.5) do gypsum application.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Give two ploughings to land. First ploughing should be given at depth of 20-25 cm. Crush clods with suitable implements or machine.</p>
</div>
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
    <td>20-30°C</td>
    <td>75-150cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Various research and experiment shows that, germination percentage of 3 bud sets is higher than the setts having more or less than three buds. Germination percentage of single bud sett is very low because of moisture loss from other cut end. Also if whole can stalk is planted without giving any cut, still germination percentage remain low as only top end will get germinate.
<br>Seed rate vary from region to region. In North West India, seed rate is high because of low germination percentage and adverse weather i.e hot weather with desiccating winds. Use seed rate of 20,000 three budded setts per acre.<br>

<b>Seed Treatment:</b>
Take seed material from crop of 6-7 months age. It should be free from pest and disease. Discard pest, disease affected and damaged buds and canes. Harvest seed crop one day before planting, it will give high and uniform germination. The setts should be soaked in Carbendazim@3gm in 1litre of water. After chemical treatment treat with  Azospirillum. For that dip setts in Azospirillum inoculum@800gm/acre +sufficient water solution for 15min before planting.   
<br>
<b>Soil Treatment:</b>Suspended 5 kg of bio fertilizer per acre in 10 litres of water & mixed with thoroughly with 80-100 kg of FYM. The mixed bio fertilizer in FYM is sprinkled over cane setts in the rows of planting. Immediately rows should be covered.
</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel"><br>
<center>
<p><b>Fertilizer Requirement (kg/acre)</b></p>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
    <th>Muriate of Potash</th>
  </tr>
  <tr>
    <td>200</td>
    <td>As per soil test</td>
    <td>As per soil test</td>
  </tr>  
</table>
<br><br>
<p><b>Nutrient Requirement (kg per acre)</b></p>
<table style="width:50%">
  <tr>
    <th>Nitrogen</th>
    <th>Phosphorus</th>
    <th>Potash</th>
  </tr>
  <tr>
    <td>90</td>
    <td>As per soil test</td>
    <td>As per soil test</td>
  </tr>
</table>
<br>
  <p> Add more sufficient organic content while preparing soil.</p>
 </center></div>
<br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/sugarcane-bio-fertilizer-7349484612.html" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Planting season of sugarcane is from September to October and February to March. Sugarcane takes generally one year to mature therefore called as Eksali.<br>

<b>Spacing:</b>
Row spacing is ranges from 60-120 cm for sub-tropical regions.<br>
 
<b>Sowing Depth:</b>
Sow the sugarcane at depth of 3-4 cm and cover it with soil.<br>

<b>Method of Sowing:</b>
A) For sowing use improved method of planting like deep furrow, trench method, paired row method or ring pit method.
<br>
1) Dry planting in ridges and furrow: With the help of tractor drawn ridger, make ridges and furrows at distance of 90 cm. Plant sugarcane setts then cover it with soil. After then give light irrigation.
 <br>
2) Paired row planting: Make Trenches at 150 cm distance using trenches opener. Plant sugarcane in paired row using 30:30-90-30:30cm spacing. It gives higher yield as compared to ridges and furrow.
 <br>
3) Ring Pit method: Circular pits of 60 cm diameters are dug at depth of 30 cm with a tractor mounted digger. 60 cm gap is provided between adjacent pits. 2-3 ratoons can be taken. 25-50% higher yield can be obtained compared to ridge and furrow.
 <br><br>
B) Single budded set planting: Select healthy setts for plantation. Make furrows at distance of 75-90 cm. Place single budded setts. If only small size setts from top portion of cane are selected then they are planted at distance of 6"-9". Place eye of sett on upward direction to ensure proper and quick germination. Cover setts with soil and apply light irrigation.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p>•<b>Fertilization –</b>Soil testing after every three year is necessary to know actual need of fertilizer. Before sowing at time of last ploughing, add well decomposed cow dung@8ton or Vermicompost+ Ralligold@8-10kg or PSB@5-10kg per Acre.
At time of sowing apply Urea@66kg per acre. At development stage, apply second dose of Urea@66kg at the time of second irrigation. Apply third dose of Urea@66kg at time of fourth irrigation.
<br>
In winter due to low temperature uptake of nutrient by crop become less and plant give yellow appearance. To recovered crop take spray of 19:19:19@100gm/15Ltr of water. In water scarcity situation spray of Urea+Potash@2.5kg/100Ltr is helpful for crop.
<br><br>
•<b>Watering –</b>The number of irrigations required will depending upon soil type, water availability etc. The hot weather associated with dry winds and drought increases the water requirement of the crop. 
<br>
Apply first irrigation when 20-25% crops have germinated. In monsoon, apply irrigation depending upon rainfall intensity and frequency. In case of scanty rainfall apply irrigation with 10days interval. Afterwards increase irrigation intervals, i.e apply water with 20-25days interval. To conserved moisture in soil do mulching in between cane rows. Avoid water stress from April to June. Water stress during these days will reduce yield. Avoid water logging in standing field. Tillering stage and elongation or grand growth phase are critical for irrigation.
<br>
Earthing: Soil between the furrows of canes, is taken with the help of spade and applied to the sides of the plants. It help to mix top dressed fertilizer well within the soil, also it help to support plant and prevent it from lodging.
<br><br>
•<b>Weeding -</b>In sugarcane due to weed infestation about 12 to 72% yield loss is observed depending upon severity. Initial 60-120 days are critical for weed management. Therefore weed management practices should be adopt within 3-4 months after planting. For control of weeds, chemical is not only solution. Adopting mechanical as well as cultural practices gives effective solution.
<br>1) Mechanical Measure: As sugarcane is widely space crop, weeding with hand or interculture operation can be easily carried out. Take 3-4 hoeing after every irrigation.
<br>
2) Cultural Operations: It included change in cropping pattern, intercropping and trash mulching. Monocropping leads to heavy infestation of weed. Crop rotation with fodder or green manure crops suppress weeds. Also sugarcane is wider space crop so there is opportunity for weed to grow in large numbers. If sugarcane is intercrop with short duration crops then it will suppress the weed growth also give additional benefit. In trash mulching, mulch of 10-12cm thickness is provided in between cane row after emergence of cane. It will restrict the sunlight thus help to check weed growth. It also conserved soil moisture.
<br>
3) Chemical: To control weeds, carry out pre-emergence weedicide application with Simazine or Atrazine@600-800 g/acre or Metribuzine@ 800 g/acre or Diuron@1- 1.2 kg/acre. Apply pre-emergence herbicides immediately after planting. Apply 2,4-D@250-300 g/acre as post-emergence herbicide for broad-spectrum weed control in sugarcane.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Early shoot borer:</b> Attacked in germination stage upto internodes formations. Larva make holes in shoot below the ground level and then enter into it thus causes dead heart. It give offensive smell. It is mostly observed in light soil and in dry weather. Pest is active from March - June.
<br>Avoid late plantation. Apply Chlorpyriphos@1litres/acre with 100-150 litres of water over the setts placed on furrows with the help of rosecan. Remove dead heart infected plants. Give light irrigation and avoid drying of field.
<br>
ii.<b>White Grub:</b>These feed on root system and thus damage to crop. Entire drying up of stalks and easily dislodging of cane are main symptoms for white grub infestation. In initial stage infestation observed in patches and afterwards it spread on entire field.
<br>The adult beetles emerge from the soil during June-July with the first showers of rain. They congregate on the nearby trees and feed on their leaves during night. The eggs are laid in the soil and the larvae (grubs) hatching from them eat away the rootlets or root hairs of the groundnut plants. To destroy beetles spray Imidacloprid@4-6ml/10Ltr of water on plants of nearby sugarcane plants.
<br>For effective management of white grub. Plough the field and exposes the beetles resting in the soil. Do not delay crop sowing. Before sowing treat cane with Chlorpyriphos. Apply Phorate@4kg or carbofuran@13kg per acre in the soil at or before sowing. In heavily infested fields, flooding is to be done for 48 hrs. Do drenching of Clothianidin@40gm/acre with 400 Ltr of water using cane.
<br>
iii.<b>Termites:</b>Before sowing do cane treatment. Dip setts in imidacloprid solution@4ml/10Ltr for 2min or at time planting spray Chlorpyriphos@2litre/acre on setts. If infestation occur in standing crop, drench with Imidacloprid@60ml/150litre of water or Chlorpyriphos@1ltr/200Ltr of water.
<br>
iv.<b>Pyrilla:</b> Severe pest of North India. Adult suck leaf sap under the surface of leaves. It results in yellowing white spot and withering. They secretes honey like substance and attract sooty mould fungi, due to this leaves become blackish.
<br>At regular interval, collect and destroy white-puffy egg masses. In severe infestation spray with Dimethoate or Acephate@ 1-1.5ml/Ltr of water.      
<br>
v.<b>Root borer:</b>Borer enter into root zone of shoot below ground. Infestation is high from July onward. Due to infestation yellowing of leaves from leaf apex to downwards along the margin is seen.
<br>Before sowing do cane treatment with Chlorpyriphos. In dry field infestation is low so keep field dry and clean, avoid water logging condition in field. Carry out earthing operation at 90days. If infestation is observed in field, do drenching with Chlorpyriphos 20EC@1Ltr/acre with 100-150Ltr of water near the root zone or do granular application of Quinalphos@300ml/acre. Remove infected cane and destroyed it away from field.
<br>
vi.<b>Stalk Borer:</b>It attacks crops from tillering to maturity phase. Larvae makes tunnels into midribs causes white streak which later turns brown. If infestation occurs during tillering phase, the attacked shoots dies resulting in dead heart formation. If it attacks on grown up canes, apical growth is arrested resulting in bunchy top symptoms.
<br>To control do drenching of Rynaxypyr 20SC@60ml/acre in 100-150Ltr of water in between period of month end of April to first week of May. Maintain proper drainage in soil, as water logging increases top borer incidence.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Red Rot:</b> From top, third and fourth leaves show yellowing and drying. At later stage show discoloured lesion on rind. If split the diseased stalk show reddening of internal tissue. A sour and alcoholic smell emanates from the infected cane.  
<br>To control grow disease resistance varieties. Select disease free cane for sowing. Discard cane which show reddening at cut end and at the nodal region. Do crop rotation with paddy or with green manure crops. Avoid water logging field. If infestation is observed remove the crop and destroyed it away from field. Disinfect soil around the diseased clump with Carbendazim@0.1% solution.
<br>
ii.<b>Wilt:</b> Root borer, nematodes, termite, drought and water logging condition cause plant to wilt infection. Crown leaves turn yellow and loose turgor and withers. Boat shape cavities appears in pith region and crop get shrink. It reduces germination and reduces yield.
<br>Use disease free setts for planting. Do setts treatments with Carbendazim@0.2% + Boric acid@0.2% for 10min. Intercropping with onion, garlic and coriander will reduces the wilt disease.
<br>
iii.<b>Pokkah Boeng:</b> It is air borne disease. Symptoms are observed in monsoon. Disease plant bear distorted and wrinkled leaves. Leaves show reddish patches at base of leaf blade. Newly formed leaves become shortened and sword like.
<br>Grow pokkah boeng disease resistive varieties. If infection of disease is observed spray with Carbendazim@4gm/Ltr or Copper Oxychloride@3gm/Ltr or Mancozeb@3gm/Ltr of water.
</p></div><br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/pesticide-for-sugarcane-2532417733.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting of cane at right time is necessary for good yield and for high sugar recovery. Harvesting at over aged or under aged cane leads to loss in cane yield. Depending upon withering of leaves and cane juice, harvesting time can be decided. To know the right harvesting time some farmer used hand sugar refractometer is used. Sickles are used for harvesting. Stalks are cut at ground level so that the bottom sugar rich internodes are harvested which add to yield and sugar. De-topping at appropriate height. After harvesting quick disposal of the harvested cane to factory is necessary.</p>
</div><br>
<div class="zoom">
<img alt="Sugarcane" src="sugarcane2.jfif">
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