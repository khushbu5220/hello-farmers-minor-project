<!DOCTYPE html>
<html>
<head>
<title>Mango</title>
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
<h3>MANGO</h3>
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

<div style="float:right" class="zoom"><img alt="Mango" src="mango1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown on variety of soil. Deep soil without any hard pan upto depth of 4feet is required for mango cultivation. pH of soil should be less than 8.5%.</p>
</div><br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Do ploughing, cross ploughing of land and then levelled the land. Prepare land in such way that water stagnation should not occurred in field. After levelling take one deeper ploughing and then divide lands in blocks. Spacing is varied from place to place.</p>
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
    <td>22°C - 27°C</td>
    <td> 50-80 mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion" style="width:75%">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Planting is done in month of August-September also in February - March. Do planting in cool hours of evening. Protect crop from high wind.<br>

<b>Spacing:</b>
For grafted varieties use distance of 9m x 9m and plant them in square system.<br>
 
<b>Sowing Depth:</b>
Dug pits of 1x1x1m size at distance of 9x9m one month earlier before planting. Expose them to sun. Fill with mixture of soil, 30 to 40 kg of FYM or Compost and 1 kg single super phosphate.<br>

<b>Method of Sowing:</b>Square and hexagonal planting can be adopted. Hexagonal planting accommodates 15% more plants.</p></div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>Age of Crop (year)</th>
    <th>Well decomposed cow dung (in kg)</th>
    <th>Urea (in gm)</th>
	<th>SSP (in gm)</th>
	<th>MOP (in gm)</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>5-20</td>
    <td>100-200</td>
	<td>250-500</td>
	<td>175-350</td>
  </tr>
  <tr>
    <td>Four to Six year</td>
    <td>25</td>
    <td>200-400</td>
	<td>500-700</td>
	<td>350-700</td>
  </tr>
  <tr>
  <td>Seven to nine year</td>
  <td>60-90</td>
  <td>400-500</td>
  <td>750-1000</td>
  <td>700-1000</td>
  </tr>
  <tr>
  <td>Ten and above</td>
  <td>100</td>
  <td>500</td>
  <td>1000</td>
  <td>1000</td>
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
    <td>27 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>7 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>30 kg</td>
  </tr>
</table>
<br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div>
  <br><br>
  <button type="button">
<a href="https://www.amazon.in/s?k=fertilizer+for+mango+plant&adgrpid=61688607969&ext_vrnc=hi&gclid=CjwKCAjwlbr8BRA0EiwAnt4MTmkAkexLdSa4HZ8zs1NtAWELBxu8NMq8LyH9jAjhBivofa39-luNhhoCUiUQAvD_BwE&hvadid=294103361676&hvdev=c&hvlocphy=1007751&hvnetw=g&hvqmt=b&hvrand=2253295830674997344&hvtargid=kwd-314083156476&hydadcr=5876_1738709&tag=googinhydr1-21&ref=pd_sl_8gxi6rb81k_b" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Treatment:</b>
Before planting, dip stones in solution of Dimethoate for few minutes. It will protect crop from mango weevils. Seed treatment with Captan fungicide protects seeds from fungal infections.
</p></div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>Mango crop required 27 kg of N, P2O5 about 7 kg and 30 kg of K2O per acre. For crop of 1-3 year old, Apply 5 to 20 kg of well decomposed cow dung, 100-200 gm of Urea, 250-500 gm of Single super Phosphate and 175-350 gm of MOP per tree. For 4-6 year old crop apply increased cow dung dose by 25 kg, give Urea@200-400 gm, SSP@500-700 gm and MOP@350-700 gm per Tree. <br>
For 7-9 year old crop, apply 60-90 kg of well decomposed cow dung, Urea@400-500 gm, SSP@750-1000 gm, MOP@700-1000 gm per tree. For 10 year or above 10 year crop, apply 100 kg of well decomposed cow dung, Urea@400-500 gm, SSP@1000 gm and MOP@1000 gm per Tree.<br>
Give N and K dose of fertilizer in February month whereas apply whole amount of cow dung and SSP in December month.<br>
Sometime changing weather causes fruit and inflorescences drop. If fruit drop is observed to minimize it spray 13:00:45@10gm/Ltr of water.Use mulching to minimize temperature effect. For good flowering and yield, spray 00:52:34 @150 gm/15 Ltr of water twice at 8 days interval when flowering starts. It will prevent flower drop also.<br>
<br>
<b>Watering –</b>Amount and interval of irrigation depend upon, type of soil, climate and source of irrigation. To young plant apply light and frequent irrigation. Light irrigation always give best results as compared to flood irrigation. In summer apply irrigation at interval of 5-7days where as in winter slowly increased irrigation interval to 25-30days. In rainy season, apply irrigation depending upon rainfall intensity. Bearing trees required irrigation during fruit development period at interval of 10-12days. After fertilizer application in February month give light irrigation.
<br><br>
<b>Weeding -</b>Weeding and earthing up should be done around newly planted crop. Intercrop can be taken till plant gets well acquainted to surrounding atmosphere upto plant start bearing. Depending upon variety it will take 5-6years. Intercropping helps to minimize weed control. Leguminous crop like moong, mash, gram and Lentil can be taken as intercrop. Also crop like onion, tomato, Radish, beans, cauliflower, cabbage are useful for intercropping. Avoid Bajra, maize and sugarcane as intercropped.
 </p></div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Mealy Bug:</b> It causes damage to crop by sucking sap from inflorescences, stem, leaves and shoot. Infestation observed mostly in January to April. Mealy bug affected part dried and sooty mould is seen on infected parts.<br>
To prevent tree from mealy bug infestation, 25cm width Polythene(400gauge) strip fastened around tree trunk to stop ascent of nymphs before hatching of eggs in month of Nov and Dec. If infestation is observed, spray Acephate@2gm/Ltr or Spirotetramat@3ml/Ltr of water to control mealy bug.<br>
ii.<b>Mango Hopper:</b>Infestation is observed mostly in February-March Month when crop is in flowering stage. They suck sap from inflorescences, leaves. On infection flower get sticky and sooty mould a black color fungus is developed on affected parts.<br>
If infestation is observed take Spray Cypermethrin 25EC @3ml or Deltamethrin 28EC@9ml or Fenvelarate20EC@5ml or Neembicidine 1000ppm@20ml in 10Ltr water on whole tree.<br>
iii.<b>Mango Fruit Fly:</b> It is serious pest of mango. Females lay eggs below epidermis of young fruits. Later on maggots feed on pulp afterward fruits starts rotting and get drop.<br>
Destroy infected fruits away from field. During fruit developed stage, hang traps of 100ml emulsion of methyl Engenol 0.1%. In May month start spraying of Chlorpyrifos 20EC@2ml/Ltr of water for three times with interval of 20days.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Powdery mildew:</b> Whitish powdery growth observed on inflorescence and the floral parts. In severe condition, they get drop. Also fruits, branches and floral part show dieback symptoms.<br>
Before flowering, during flowering and after fruit set, take spray of 1.25kg wet able sulphur in 200litre of water. If needed, take second spray with interval of 10-15days. If infestation is observed in field, take spray of 178% Imidacloprid@3ml along with Hexaconzole@5ml/10Ltr water or Tridemorph@5ml or Carbendazim @10gm/10Ltr of water.
ii.<b>Stem Borer:</b>Serious pest of mango crop. It create tunnel under bark and destroyed tree by feeding on internal tissue. Larva of stem borer excreta is observed outside of tunnel.<br>
If infestation is observed, clean tunnel with hard wire and insert cotton swab dip in mixture of Kerosene and Chlorpyriphos in ratio of 50:50 and then closed it with mud.
iii.<b>Anthracnose or Dieback:</b> Dark brown or black spots are observed on shoots. On fruits also small, raise, dark spots are observed.<br>
To control dieback and other diseases, cut infested, dead portion and apply Bordo Paste on it. Spray Bordeaux mixture@10gm/Ltr of water. If infestation observed in field take spray of Copper oxychloride@30gm/10Ltr on infected trees. If Anthracnose observed on new flush. Spray with Thiophanate methyl@10gm or Carbendazim@10gm/10Ltr of water.<br>
iv.<b>Black Tip: </b> Fruits get abnormally elongated at tips along with pre-mature ripening of fruits.<br>
During flowering take spray of Borax@6gm/ltr of water + Copper Oxychloride@3gm/Ltr of water for three times with 10-15days interval.
</p></div><br>
<button type="button">
<a href="https://www.amazon.in/s?k=pesticides+for+mango+tree&adgrpid=67405721708&ext_vrnc=hi&gclid=CjwKCAjwlbr8BRA0EiwAnt4MTqpCnEBBa0Un7VQstmU7RhAd6zdAPCM-oQuIXwLhM6MPsckKSR-zNxoCEowQAvD_BwE&hvadid=294125482029&hvdev=c&hvlocphy=9061659&hvnetw=g&hvqmt=e&hvrand=12482099775650929322&hvtargid=kwd-817118047570&hydadcr=8392_1728269&tag=googinhydr1-21&ref=pd_sl_55ouvzb4bm_e" class="button button2">Buy Pesticide Here</a>
</button><br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Changing of fruit color is sign of fruit maturity. It usually required 15-16week after fruits set to get mature. Pick individual fruits with help of ladder or bamboo having sharp knife and having net to collect harvested fruits. Avoid falling of fruits on ground as it will damage fruits during storage. After harvesting, do sorting and grading of fruits according to size, color and then packed in boxes. Place harvested fruits on polynet upside down.
</p></div>
<br>
<button class="accordion">Post-harvest</button>
<div class="panel">
<p>After harvesting dip fruits in water. Reject immature fruits which float on water. After that place fruits in 25gm/Ltr salt water. Fruits which float in salt water are mainly used for export. According to prevention of Food adulteration act (1954) ripening of any food by using Carbide gas is a crime. For uniform ripening of fruits , dip 100kg fruits in 100Ltr of water containing (62.5ml-187.5ml) Ethrel at 52±2°C for 5min within 4-8 days after harvesting. For fruit fly detection in export quality fruits VHT (vapor heat treatment) is compulsory. For this process  use 3days prior harvested fruits.</p>
</div>
<div class="zoom">
<img alt="Mango" src="mango2.jfif">
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