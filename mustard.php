<!DOCTYPE html>
<html>
<head>
<title>Mustard</title>
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
<h3>MUSTARD</h3>
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
<div style="float:right" class="zoom"><img alt="Mustard" src="mustard1.jfif"></div>
<button class="accordion"style="width:75%">Choose a good location</button>
<div class="panel">
<p>Light to heavy soil is good for mustard and rapeseed cultivation. Raya can be grown in all type of soil whereas loam to heavy soils are suitable for toria crop. Sandy and loamy sand soils are suitable for Taramira crops.</p>
</div>
<br>
<button class="accordion"style="width:75%">Soil preparation</button>
<div class="panel">
<p>For good germination of crop it required a fine seed bed. Do ploughing of soil for two to three times followed by two harrowing. Do planking after every ploughing. Prepared firm, moist and uniform seed bed as it will help in uniform germination of seed.</p>
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
    <td>22-25°C</td>
    <td>25-40cm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate</b><br>
When rapeseed - mustards are grown individually then it required seed rate of 1.5 kg seeds per acre. Do thinning operations three week after sowing and maintain only healthy seedlings.
<br><br>
<b>Seed Treatment</b><br>
To protect seed from soil borne pest and disease, before sowing do seed treatment with Thiram@3gm per kg of seeds.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<p>While preparing field, apply 70 to 120 qtl farm yard manure or well decomposed cow dung in soil. For accurate fertilizer dose, soil testing is necessary. Under irrigated condition for toria crop, apply N:P in ratio of 25:8kg/acre in form of Urea@55kg/acre and Super phosphate@50kg/acre. Apply K dose only when soil show deficiency of it. For raya and gobhi sarson, apply N:P:K in ratio of 40:12:6 kg/acre in form of Urea@90kg, SSP@75kg and MOP@10kg per acre. For rainfed raya crop apply Urea@33kg/acre and Super Phosphate@50kg/acre.
<br>Apply Urea just before pre-sowing irrigation. Under irrigated condition, for toria apply all fertilizer just before sowing and for raya, gobhi sarson, apply half of fertilizer just before sowing and remaining half with first irrigation. For rainfed condition, give all fertilizer just before sowing.
<br><b>Fertilizer Requirement (kg/acre)</b><br>
<center>
<table style="width:50%">
  <tr>
    <th>CROPS</th>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>Toria</td>
    <td>55</td>
    <td>50</td>
	<td>On soil test result</td>
  </tr>
  <tr> 
    <td>Raya and Gobhi sarson</td>
    <td>90</td>
    <td>75</td>
	<td>10</td>
  </tr>
</table>
<br><br>
<b>Nutrient Requirement (kg/acre)</b>
<table style="width:50%">
<tr>
<th>CROPS</th>
<th>NITROGEN</th>
<th>PHOSPHORUS</th>
<th>POTASH</th>
</tr>
<tr>
<td>Toria</td>
<td>25</td>
<td>8</td>
<td>On soil test result</td>
</tr>
<tr>
<td>Raya and Ghobi sarson</td>
<td>40</td>
<td>12</td>
<td>6</td>
</tr>
</table>
Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.amazon.in/Mustard-Cake-Fertilizer-Plants-5KG/dp/B07BTK4JLC" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Optimum time for sowing Mustard crop is from September to October month. For toria crop, complete sowing from first fortnight of September to October. For African sarson and Taramira can be sown in whole October month. For Raya crop complete sowing from Mid of October to November End.
When rapeseed-mustard grown as intercrop, time of sowing depend upon cultivation of main crop.  
<br><br>
<b>Spacing</b><br>
For rapeseed - mustards keep row to row distance of 30 cm while plant to plant distance of 10-15 cm.  For Gobhi sarson use distance of 45 cm in rows and plant to plant 10 cm.
<br><br>
<b>Sowing Depth</b><br>
Seeds are sown at depth of 4 to 5 cm.
<br><br>
<b>Method of sowing</b><br>
Use seed drill for sowing purpose.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel"><p>
•<b>Fertilization-</b>While preparing field, apply 70 to 120 qtl farm yard manure or well decomposed cow dung in soil. For accurate fertilizer dose, soil testing is necessary. Under irrigated condition for toria crop, apply N:P in ratio of 25:8kg/acre in form of Urea@55kg/acre and Super phosphate@50kg/acre. Apply K dose only when soil show deficiency of it. For raya and gobhi sarson, apply N:P:K in ratio of 40:12:6 kg/acre in form of Urea@90kg, SSP@75kg and MOP@10kg per acre. For rainfed raya crop apply Urea@33kg/acre and Super Phosphate@50kg/acre.
<br>Apply Urea just before pre-sowing irrigation. Under irrigated condition, for toria apply all fertilizer just before sowing and for raya, gobhi sarson, apply half of fertilizer just before sowing and remaining half with first irrigation. For rainfed condition, give all fertilizer just before sowing.
<br>
<br>
•<b>Watering –</b> Give pre-sowing irrigation before sowing of seeds. For good growth, crop required in general about three irrigation apply at interval of three weeks after sowing. Apply good amount of organic manures in soil, it will help to conserved moisture in soil.
<br><br>
•<b>Weeding -</b> To control weeds take two to three weeding and two hoeing at interval of two weeks when intensity of weeds is low. To control weeds in Toria crop, do pre-plant incorporation of Trifluralin @ 400ml/200Ltrs of water per acre. For raya crop, give pre-emergence spray of Isoproturon @ 400gm/200Ltr within 2 days of sowing. Or take post emergence spray 25-30 days after sowing.</p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Aphid:</b> They suck the sap and plant get weak, pale and plant remain stunted and in later stage do not bear pods.To control, do timely sowing of crop. Avoid excessive use of nitrogen fertilizer. In infestation is observed in field, take spray of any one pesticide like Thiamethoxam@80gm or Quinalphos or Oxydemeton@250ml or Chlorpyriphos @200ml in 100-125Ltr water per acre.
<br>
<br>
<b>Painted bug:</b> It destroyed crop at germination stage also at maturity stage. They suck sap and leads to drying of crop.Application of irrigation three to four week after sowing help in reducing pest population. If infestation is observed in field, take spray of Malathion @ 400ml/acre.
<br>
<br>
<b>Hairy caterpillar:</b> Young larva feed on leaves and destroyed them completely.If infestation is observed in field, take spray of Malathion 5% dust@15kg/acre or Dichlorvos@200ml/acre in 100-125ltr of water.
<br><br>
<b>Blight:</b> Dark brown spot with dot like bodies developed on stem, branches, leaflet and pods. In severe infestation, withering of stem and pod is observed.For cultivation use resistant varieties. On incidence of disease spray with Indofil M-45 or Captan @ 260gm/100Ltr of water per acre. If necessary repeat the spray at interval of 15days.
<br><br>
<b>Downy Mildew:</b>  Whitish growth is observed on lower surface of leaves. The leaves give green or yellow coloration appearance.Destroyed debris of previous crop before sowing of crop. Spray crop with Indofil M-45 @ 400gm in 150 Ltr of water per acre for four times with interval of 15 days.
<br><br>
<b>White Rust:</b> White pustules are observed on leaves, stem and on flower. Swelling of affected part is observed. Because of infection flower become sterile.If infestation observed in field, to control spray with Metalaxyl 8%+Mancozeb 64% @ 2gm/Ltr of water or spray with Copper oxychloride @ 25gm/Ltr of water. If necessary repeat the spray with interval of 10-15days.
</p>
</div><br>
<br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/pesticide-for-mustard-2532456530.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Crop takes 110 to 140 days to mature, depending variety. Harvest crop when pods turn yellow and seed become hard. To avoid shattering loss carried out harvesting in morning hours. With the help of sickle, cut crops close to ground. After then stacked harvested crops for 7-10 days. After proper drying complete threshing operation.</p>
</div><br>
<button class="accordion">Post harvest</button>
<div class="panel">
<p>Cleaned seed must be dried in the sun for 4-5days or till the moisture content comes down to 8 percent. After proper drying of seeds, stored seeds in gunny bags or bin.</p>
</div><br>
<div class="zoom">
<img alt="Mustard" src="mustard2.jfif">
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