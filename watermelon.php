<!DOCTYPE html>
<html>
<head>
<title>Watermelon</title>
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
<h3>WATERMELON</h3>
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
<br>
<div style="float:right" class="zoom"><img alt="Watermelon" src="watermelon1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>Watermelon grows well in deep fertile and well-drained soil. It gives best result when grown on sandy or sandy loam soil. Soil having poor drainage capacity is not suited for watermelon cultivation. Follow crop rotation as continuous growing of same crop on same field leads loss of nutrients, poor yield and more disease attack. pH of soil should be in between 6-7.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>Plough land and bring to fine tilth. In North India, sowing is done February - March month. In North east and west India sowing is done during November to January. Watermelon can be direct seeded or transplant in nursery and then transplanted to main field.</p>
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
    <td>20-30°C</td>
    <td>50-75mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing one acre land, seed rate of 1.5 to 2 kg is required.<br>

<b>Seed Treatment:</b>
Before sowing treat seed with Carbendazim@2gm/kg of seeds. After chemical treat seeds with Trichoderma viride@4gm per kg of seeds. Dry seeds in shade and then do sowing immediately.    
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
    <td>55 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>100 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>25 kg</td>
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
    <td>25 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>16 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>15 kg</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.amazon.in/s?k=fertilizer+for+watermelon+crop&rh=n%3A3638818031&ref=nb_sb_noss" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
In north it is sown during middle of January to March and in November to December.
<br>

<b>Spacing:</b>
Depending upon sowing method spacing may get vary. In pit method use row to row spacing of 2-3.5m and 60 cm between two plant.<br>
 
<b>Sowing Depth:</b>
Plant seed about 2-3cm deep.
<br>

<b>Method of Sowing:</b>
For sowing different methods of planting like furrow method, Pit method and hill method can be used depending upon climate and season.  
<br>
<b>Furrow Method:</b>Sowing is done on either side of furrows. Sow 3-4 seeds (After germination keep only healthy seedling) at a time and keep plant to plant distance of 60-90cm.
<br>
<b>Pit Method:</b> Sow 4 seeds in pit. For that make pit of 60x60x60cm at distance of 2-3.5m between two rows and 0.6-1.2m between plants. Fill pit with well decomposed cow dung and soil. After germination keep only one seedling.
<br>
<b>Hill method:</b> Similar to pit method. In this, pit of 30x30x30cm pits are made at distance of 1-1.5m. Two seeds are sown per hill.
</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>Apply Farm Yard Manure or well decomposed cowdung@8-10tonnes per acre. Apply Nitrogen@25kg, Phosphorus@16kg and Potash@15kg in form of Urea@55kg, Single Super Phosphate@100kg and Muriate of Potash@25kg per acre. Apply whole amount of Phosphorus, Potash and one third amount of Nitrogen before sowing seed. Apply remaining dose of Nitrogen near vines base, avoid touching it and mixed well in soil during initial growth period.   
<br>When crop is of 10-15 days old, for good growth of crop along with good quality, take spray of 19:19:19+Micro-nutrients@ 2-3gm/Ltr of water. Prevent flower drop and increase yield up to 10% take spray of Humic acid@3ml + MAP(12:61:00)@5gm/Ltr of water at flowering stage. Spray Salicylic Acid(4-5 tabs of Aspirin Tablet 350mg)/15Ltr water at initial flowering, fruiting and maturity stage, One or two times with 30days interval. After 55days of sowing spray 13:00:45@100gm + Hexaconazole @250ml/150Ltr water for fast development of fruits and protection against powdery mildew. 65days after sowing to increase in fruit size, sweetness and colour take spray with 00:00:50 @1.5kg/acre using 100gm/15Ltr of water.<br><br>
<b>Watering –</b>Apply irrigation, every week in summer season. At time of maturity give irrigation only when needed. Avoid over flooding in watermelon field. At time of applying irrigation, should not wet the vines or vegetative parts, especially during flowering and fruit-set. Avoid frequent irrigation in heavy soil as it will promote excessive vegetative growth. For better sweetness and flavour, stop irrigation or reduce watering 3-6days before harvesting.
<br><br>
<b>Weeding -</b>Keep bed weed free during early stage of growth. In absence of proper control measures, weed can cause yield loss of 30%. 15-20days after sowing carry out intercultural operations. Depending upon severity and intensity of weeds, two to three weeding are required.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid and Thrips: </b>  They suck the sap from the leaves resulting in yellowing and dropping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.
<br>If infestation is observed in field, to control spray the crop with Thiamethoxam@5gm/15Ltr of water. If infestation of sucking pest and powdery/downy mildew is observed, take spray of Thiamethoxam and 15days after spraying, spray with Dimethoate@250ml+Tridemorph@100ml/200Ltr of water.
<br>
ii.<b>Fruit fly:</b>It is serious pest. Females lay eggs below epidermis of young fruits. Later on maggots feed on pulp afterward fruits starts rotting.
<br>Remove and destroyed infected fruits away from field. If infestation is observed, at initial stage take spray of Neem seed kernal extracts@50gm/Ltr of water. Take spray of Malathion@300ml + Jaggery@100gm in 200litre of water 3-4times at 10 days interval.
<br>
iii.<b>Anthracnose:</b> Anthracnose affected foliage appears scorched appearance.  
<br>As a preventive measure, treat seed with Carbendazim@2gm/kg of seed. If infestation is observed in field, take spray of Mancozeb@400gm or Carbendazim@400gm/200liter of water.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Powdery Mildew:</b> Patchy, white powdery growth appears on upper surface of leaves also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.
<br>
ii.<b>Sudden wilt:</b>It can affect crop at any stage. Plant get weak and give yellow appearance at initial stage, in severe infestation complete wilting is observed.
<br>
Avoid water logging in field. Destroy infected parts away from field. Apply Trichoderma Viride@1kg/acre mixed with 20kg FYM or Well decomposed Cowdung. If infestation is observed, take spray of Mancozeb or Copper Oxychloride@400gm/200liter or Carbendazim or Thiophanate-methyl@200gm/200liter of water.
<br>
iii.<b>Leaf Miner:</b> Maggots of leaf miner feed on leaf and make serpentine mines into leaf. It affects the photosynthesis and fruit formation.
<br>If infestation of leaf miner is observed, spray of Abamectin@6ml/15Ltr of water should be done to get rid of leaf miner.
</p></div><br><br>
<button type="button">
<a href="https://www.amazon.in/s?k=pesticides+for+watermelon+crop&rh=n%3A3638818031&ref=nb_sb_noss" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>If tendril near stem gets dried also whitish color of fruit which touch to ground get yellowish then assume that fruit is ready for harvesting. On thumping melon if it sounds hollow (usually as a dull thump or thud) then it is ready for harvest and immature fruit sounds dense. Dont pick immature fruits as they ripe only when attached to vine. Immature fruit don’t have rich sugar content or color. To harvest ripe fruit, cut stem 1" from fruit with a pair of sharp pruners or knife. Fruit can be stored in a cool humid environment.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>Grading is done on basis of size of fruit. It can be store for 14 days at temperature of 15°C. Do not store watermelon with apples and banana as it developed off flavor along with softening of fruit.</p>
</div><br>
<div class="zoom">
<img alt="Watermelon" src="watermelon2.jfif">
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