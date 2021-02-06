<!DOCTYPE html>
<html>
<head>
<title>Potato</title>
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
<h3>POTATO</h3>
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

<p>Potato is most important food crop of the world. It is economical crop and referred as Poor man friend. Its origin is in South America. It is rich source of starch and vitamin. It is used as vegetable also used for making of chips. It is used for several industrial purposes for production of starch and alcohol. Potato is grown almost in all states. Uttar Pradesh, West Bengal, Punjab, Karnataka, Assam and Madhya Pradesh are major potato growing states. In Punjab, Jalandhar, Hoshiarpur, Ludhiana and Patiala are major potato producing belts.</p><br>
<div style="float:right" class="zoom"><img alt="Potato" src="potato1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can grow on wide range of soil, ranging from sandy loam, silt loam, loam and clay soils. It gives best yield when grown under well drained sandy loam and medium loam soils with rich in organic content. They can grow in acidic soil. It cannot grow under waterlogged soil also saline, alkaline soils are not suitable for potato cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Well pulverized bed should be prepared by ploughing land once up to 20-25 cm deep. Take two or three harrowing after ploughing operation. Soil should be leveled by planking operation for one to two times. Maintain sufficient moisture in soil before sowing. For planting, two methods are widely used :<br> 1) Ridge and furrow method <br>2) Flat Bed method.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Accurate planting time is necessary for obtaining good yield. Best time of planting is when maximum and minimum temperature is from 30-32 °C and 18-20 °C respectively. For early season crop complete sowing from 25th September to 10th October. For medium duration crop, sowing should be done in first week of October to third week of October. While for late duration crop, complete sowing from third week of October to first week of November.<br>
For spring season, second fortnight of January is best time planting.<br>
<b>Spacing</b><br>
For planting, use distance of 20 cm between tubers and 60 cm between ridges manually or mechanically. Planting distance vary with size of tubers. If diameter of tuber ranges from 2.5-3.5 cm, use planting distance of 60x15 cm where as if diameter of tuber is of 5-6 cm, use spacing of 60x40 cm.<br>
<b>Sowing depth</b><br>
Dig a trench of 6-8 inch deep and plant piece of potato with eye pointing up.<br>
<b>Method of Sowing</b><br>
For sowing, use tractor operated semi-automatic or automatic planter.</p>
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
    <td>14-25°C</td>
    <td>300-500mm</td>
	<td>14-20°C</td>
    <td>15-25°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use seed rate of 8-10 qtl/acre for small size tuber, 10-12 qtl/acre for medium size and 12-18qtl/acre for large size tubers. Use whole seeds for disease free quality seed production.<br>
<b>Seed Treatment</b><br>
Select seed/tuber from reliable source. Choose medium size tuber of 25-125 gm weight for plantation purpose. For plantation purpose potato tuber after removing from cold storage are kept in cool and shady place for one to two weeks to allow emergence of sprouts. To get uniform sprouting, Treat tubers with Gibberellic acid@1 gm/10 ltr water for 1 hour then dry in shade and keep in aerated dim room for 10 days. Dip cut tubers in solution of 0.5% Mancozeb solution (5 gm/ltr of water) for ten minutes. It will prevent rotting of tuber in early plantation stage. To protect crop from rotting and black scurf disease treat whole and cut tubers with 6% Mercury solution (Tafasan)@0.25% (2.5 gm/ltr of water).
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
    <td>165</td>
    <td>155</td>
    <td>40</td>
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
<p>Apply 200 qtl/acre of Farm Yard Manure or well decomposed cow dung at time of land preparation two weeks before planting. For optimum growth, it required Nitrogen@75 kg per acre in form of Urea@165 kg/acre, Phosphorus@25 kg/acre in form of SSP@155 kg/acre and Potash@25 kg/acre in form of MOP@40 kg/acre.<br>
Apply 3/4th of nitrogen fertilizer and whole dose of phosphorus and potash at time of sowing. Remaining 1/4th dose of nitrogen should be applied after 30-40 days after planting at time of earthing up operation. In case of light soil apply half dose of nitrogen and full dose of P and K at time of sowing and remaining half should be apply as top dressing in two time in equal splits at time of earthing up operation.<br>
<b>Earthing up:</b> It is necessary to maintain proper aeration, proper soil temperature and moisture in soil for good growth of crop and proper development of tubers. In earthing up soil is drawn up around base of plant to encourage better tuber formation. It should be done when plant attained height of 15-20 cm. If required carry out second earthing up two weeks after first earthing up. It can be done manually with hoe or mould board plough or ridger for large areas.<br>
<b>WSF: </b>To promote bulking in Potato, Spray 13:0:45@ 2 kg and 100gm Magnesium EDTA per acre. Add fungicide Propineb@3 gm/ltr of water as prophylactic. To increase number of tubers and size, spray with Humic acid (12%) @ 3 ml+ MAP 12:61:00 @ 8 gm/DAP @ 15 gm/ltr of water in vegetative stage.
</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.com/potato-fertilizer/s?k=potato+fertilizer" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Depending soil moisture present in soil, irrigate field immediately or 2-3 days after planting. Light and frequent irrigation gives best result, avoid flood irrigation as it will cause rot disease. For medium to heavy soils, three to four irrigation is required whereas for sandy soils, 8-12 irrigation are necessary. Second irrigation should be done within 30-35days after planting depending on soil moisture. Remaining irrigation should be given as per requirement of soil and crop need. Stop irrigation 10-12days before harvesting.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Apply Metribuzin 70WP@200gm per acre or Alachlor@2 ltr per Acre before sprouts emergence. Remove weeds with hand in case of low infestation 25days after planting in plain areas and 40-45days in hilly areas when crop attained height of 8-10cm. Usually weedicide in potato plant are not required as earthing up operation destroyed almost all weeds.<br>
Mulching is also an effective way to minimized weed infestation along with it helps to conserve soil moisture. Paddy straw or farm remains can be used for mulching. Remove mulch 20-25days after planting</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid:</b> Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and sooty, black mould is developed on affected parts.<br>
Cut the foliage according region timing, to check infestation of aphid. If infestation of aphid and jassid observed take spray of Imidacloprid@50ml or Thiamethoxam@40 gm/acre/150ltr water.<br>
ii.<b>Cut worms:</b> They damage crop by cutting sprout at ground level. They feed at night so control becomes difficult.<br>
As a preventive measure, use only well rotten cow dung. If infestation is observed, spray crop with Chlorpyrifos 20% EC@ 2.5ml per ltr of water. Apply Phorate 10G@4 kg/acre around plants and they cover with soil.<br>
If infestation of tobacco caterpillar is observed then spraying with Quinalphos 25EC@ 20ml/10Ltr of water is done to control cut worms.<br>
iii.<b>Leaf eating Caterpillar:</b> They feed on potato leaves and thus damage the crop.<br>
If infestation observed in field, spray crop with Chlorpyrifos or Profenofos@2ml or Lambda Cyhalothrin@1ml/Ltr of water.<br>
iv.<b>Epilanchna Beetle:</b> Larva and adults damages crop by feeding on leaves.<br>
In initial phase of infestation, collect egg of beetle manually and then destroyed it away from the field. Take spray of Carbaryl@1gm per ltr of water.<br>
v.<b>White Grub:</b> They remain in soil and damage crop by feeding on roots, stem and tubers. Infected plants show drying up. Grubs make holes in tubers.<br>
As preventive measures, broadcasting with Carbofuran 3G@12kg or Thimet 10G@7kg/acre should be done at the time of sowing.<br>
vi.<b>Potato Tuber Moth:</b> It is major pest in field as well as in storage. It make tunnel in potato and feeds on flesh.<br>
Use healthy and diseased free seeds for sowing. Use only well decomposed cow dung. If infestation is observed take spray of Carbaryl@1gm per Ltr of water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Early blight:</b> Necrotic spots observed on lower leaves. The fungus due which infestation occurred lies in soil. It rapidly spread in high moisture and low temperature.<br>
Avoid mono cropping of crop and follow crop rotation. If infestation is observed, spraying of Mancozeb@30gm or Copper oxychloride@30gm/10ltr water at 45 days 2-3 times at 10 days interval should be done.<br>
ii.<b>Black scurf:</b> Black speck observed on tubers. Affected plants show drying up. In infected tubers, at time of sprouting, black, brown color appear on eyes.<br>
For planting use diseased free tubers. Before sowing, seed treatment with Mercury is essential. Avoid mono cropping and follow crop rotation. If land kept fallow for two years then severity of disease is reduced.<br>
iii.<b>Late Blight:</b> Infestation is observed on lower part of leaves and tip of leaves. Irregular water spots are seen on infected leaves. Around the spot white powdery growth is observed. In severe condition, white powdery growth is seen on nearby soil surface of infected plants. This disease is rapidly spread in cloudy weather and after rains. If not controlled, it can cause loss up to 50%.<br>
For sowing, use healthy and disease free seeds. If infestation is observed, take spray of Propineb@40gm/15Ltr of water.<br>
iv.<b>Common scab:</b> It survives in field as well as in storage. Disease is spread rapidly in low moisture condition. Light brown to dark brown lesion are appeared on infected tubers.<br>
Use only well rotten cow dung for application in field. Use diseased free seeds for planting. Avoid deep planting of tubers. Follow crop rotation and avoid mono cropping in same field. Before sowing, treat seeds with Emisan 6@0.25% (2.5gm/ltr of water) for five minutes.<br>
v.<b>Bacterial soft rot:</b> At base of plant black leg appears along with browning of infected tubers also plant give yellow appearance. In severe condition plant wilt and get died. On infected tubers soft, reddish spot appear on infected tubers.<br>
For sowing, use healthy and disease free tubers. Before sowing treat seed with Boric Acid@3% (300gm/10Ltr of water) for 30minutes and then dried in shades. Before storage of tubers repeat the treatment with Boric Acid. In plains areas, treat seed with Carbendazim@1% (100gm/10Ltr of water) for 15minutes for effective control of disease.<br>
vi.<b>Mosaic:</b> Mosaic affected plants give faint yellow appearance along with stunted growth. Size and number of tuber get reduced.<br>
For sowing use healthy and diseased free seeds. Inspect field regularly and destroyed infected plant and parts immediately. Take spray of Metasystox or Rogor@300ml in 200 litres of water per acre.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/potato.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p><b>Dehaulming:</b> It is necessary to get virus free seed also it increases size and number of tubers. Dehaulming means cutting of foliage close to ground at fix timing or date. Its timing is varying according to region and also on aphid population. In north it is carried out in last week of December.<br>
Crop is ready for harvesting when majority of the leaves turn yellow-brown and fall on ground. Harvest crop 15-20days after dehaulming at proper moisture in soil. Harvesting can be done by tractor drawn potato digger or manually with help of spade or khurpi. After harvesting potatoes are spread on ground and allowed to dry in shade, keep them in heaps for 10-15days in shade for curing of skin. Remove damaged and rotten tubers.
</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>Do sorting of tubers and remove cut, injured tubers. After sorting grading is done depending upon diameter or size of tubers. Over size tuber are having great demand as they are useful for chips making. Store potato at temperature of 4° to 7°C and relative humidity.</p>
</div><br>
<div class="zoom">
<img alt="Potato" src="potato2.jfif">
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
