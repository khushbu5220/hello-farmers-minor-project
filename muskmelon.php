<!DOCTYPE html>
<html>
<head>
<title>Muskmelon</title>
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
<h3>MUSKMELON</h3>
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

<div style="float:right" class="zoom"><img alt="Muskmelon" src="muskmelon1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>It grows well in deep fertile and well-drained soil. It gives best result when grown on well drained loam soil. Soil having poor drainage capacity is not suited for Muskmelon cultivation. Follow crop rotation as continuous growing of same crop on same field leads loss of nutrients, poor yield and more disease attack. pH of soil should be in between 6-7. Alkaline soil with high salt concentration is not suitable for cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Plough land and bring to fine tilth. In North India, sowing is done in middle of February month. In North east and west India sowing is done during November to January.</p>
</div><br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>18-30°C</td>
    <td>50-75mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing in one acre land, seed rate of 400gm seeds are required.<br>

<b>Seed Treatment:</b>
Before sowing treat seed with Carbendazim@2gm/kg of seeds. After chemical treatment, treat the seeds with Trichoderma viride@4gm per kg of seeds. Dry seeds in shade and then do sowing immediately.    
</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Urea</td>
    <td>110 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>115 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>40 kg</td>
  </tr>
  
</table>
<br><br>
<p><b>Nutrient Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Nitrogen</td>
    <td>50 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>25 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>25 kg</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.shopclues.com/urea-all-purpose-fertiliser-nitrogen-manure-for-garden-plants-seeds-crops-approx.-400gms-149133809.html?mcid=ps&utm_source=google&utm_medium=cpc&utm_campaign=Search-PLA-Smart-Shopping-November18" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Middle of February is optimum time for muskmelon cultivation.
<br>
<b>Spacing:</b>
Prepare 3-4m wide beds depending upon variety use. Sow two seeds per hill on bed and keep distance of 60cm between hill.<br>
 <b>Sowing Depth:</b>
Plant seed about 1.5cm deep.
<br>
<b>Method of Sowing:</b>
For Sowing dibbling method and transplanting methods can be used.
<br>
<b>Transplanting:</b>
Sow seeds in polythene bag of 15cm x 12cm size with thickness of 100 gauge in last week of January or first week of February. Fill polythene bag with equal proportion of well rotten cow dung and soil. Seedlings are ready for transplantation by end of February or first week of March. Transplantation is done for 25-30 days old seedling. Apply irrigation immediately after transplantation. 
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization:</b>Apply Farm Yard Manure or well decomposed cowdung@10-15tonnes per acre. Apply Nitrogen@50kg, Phosphorus@25kg and Potash@25kg in form of Urea@110kg, Single Super Phosphate@155kg and Muriate of Potash@40kg per acre. Apply whole amount of Phosphorus, Potash and one third amount of Nitrogen before sowing seed. Apply remaining dose of Nitrogen near vines base, avoid touching it and mixed well in soil during initial growth period. When crop is of 10-15 days old, for good growth of crop along with good quality, take spray of 19:19:19+Micro-nutrients@ 2-3gm/Ltr of water. Prevent flower drop and increase yield up to 10% take spray of Humic acid@3ml + MAP(12:61:00)@5gm/Ltr of water at flowering stage. Spray Salicylic Acid(4-5 tabs of Aspirin Tablet 350mg)/15Ltr water at initial flowering, fruiting and maturity stage, One or two times with 30days interval. After 55days of sowing spray 13:0:45@100gm + Hexaconazole @25ml/15Ltr water for fast development of fruits and protection against powdery mildew. 65days after sowing to increase in fruit size, sweetness and colour take spray with 0:0:50 @1.5kg/acre using 100gm/15Ltr of water.<br><br>
<b>Watering:</b>Apply irrigation, every week in summer season. At time of maturity give irrigation only when needed. Avoid over flooding in muskmelon field. During application of irrigation, do not wet the vines or vegetative parts, especially during flowering and fruit-set. Avoid frequent irrigation in heavy soil as it will promote excessive vegetative growth. For better sweetness and flavor, stop irrigation or reduce watering 3-6days before harvesting.   
<br><br>
<b>Weeding:</b>Keep bed weed free during early stage of growth. In absence of proper control measures, weed can cause yield loss of 30%. 15-20days after sowing carry out intercultural operations. Depending upon severity and intensity of weeds, two to three weeding are required.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>These are serioAphid and Thrips:</b>They suck the sap from the leaves resulting in yellowing and drooping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.
<br>If infestation is observed in field, to control spray the crop with Thiamethoxam@5gm/15Ltr of water. If infestation of sucking pest and powdery/downy mildew is observed, take spray of Thiamethoxam and 15days after spraying, spray with Dimethoate@10ml+Tridemorph@10ml/10Ltr of water.
<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Powdery Mildew:</b>Patchy, white powdery growth appears on upper surface of leaves and also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.
<br>If infestation is observed take spray of water soluble Sulphur@20gm/10Ltr of water 2-3times with interval of 10days.
<br><br>
ii.<b>Sudden wilt:</b>It can affect crop at any stage. Plant get weak and give yellow appearance at initial stage, in severe infestation complete wilting is observed.
<br>Avoid waterlogging in field. Destroy infected parts away from field. Apply Trichoderma Viride@1kg/acre mixed with 50kg FYM or well decomposed cowdung. If infestation is observed, take spray of Mancozeb or Copper Oxychloride@2.5gm/liter or Carbendazim or Thiophanate-methyl@1gm/liter of water.
<br><br>
iii.<b>Anthracnose: </b> Anthracnose affected foliage appears scorched appearance.
<br>As a preventive measure, treat seed with Carbendazim@2gm/kg of seed. If infestation is observed in field, take spray of Mancozeb@2gm or Carbendazim@0.5gm/liter of water.
<br><br>
iv.<b>Downy Mildew:</b> It occurs frequently in muskmelon and less in case of watermelon. Yellowing occurs on upper side of leaves. Later yellowing get increases and center of leaves turning brown. Underside of leaves white-gray light blue fungus appears. Cloudy, rainy and humid conditions are favorable for spread of this disease.
<br>If infestation is observed in field, take spray of Metalaxyl 8%+Mancozeb 64% WP (Ridomil)@2gm/Ltr of water.
</p></div><br><br>
<button type="button">
<a href="https://agribegri.com/products/chipku-pheromone-eco-trap-with-melon-fly-lure-bactocera-cucurbit.php" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting of Haramadhu should be done when fruits turn to yellow. Harvest other variety depending upon market distance. For long distance markets harvest fruits at mature green stage where as for local markets harvest at half-slip stage. A slight depression of the stem end indicates half-slip stage.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting do precooling to reduce field heat. Grading is done on basis of size of fruit. Muskmelons harvested at partial slip can be held for up to 15 days at 2° to 5°C at 95% relative humidity whereas Muskmelons harvested at full slip can be held for 5 to 14 days at 0° to 2.2°C at 95% relative humidity.</p>
</div><br>
<div class="zoom">
<img alt="Muskmelon" src="muskmelon2.jfif">
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