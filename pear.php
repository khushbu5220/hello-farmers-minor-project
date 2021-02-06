<!DOCTYPE html>
<html>
<head>
<title>Pear</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 350%;
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
<h3>PEAR</h3>
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

<p>Important fruit crop of temperate region. It belongs to the family Rosaceae. It can be grown at 1,700-2,400m above mean sea-level. Pear fruit is rich source of Protein and Vitamins. due to its wider adaptability of climate and soil pear can be grown in subtropical to temperate regions. In India Pear is cultivated in Himachal Pradesh, Jammu and Kashmir and U.P and low chilling varieties do well in subtropical regions.</p><br>
<div style="float:right" class="zoom"><img alt="Pear" src="pear1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown on variety of soil ranging from sandy loam to clay loam. It gives best results when grown in deep, well drained, fertile soil without having any hard pan upto 2meter depth. pH of soil should not be more than 8.7. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Planting is completed in January Month. One year old plants are used for planting.<br>
<b>Spacing</b><br>
Plants are planted at distance of 8 x 4 m. Before planting, clear land and remove remains of earlier plants. Then levelled land properly and give gentle slope for water drainage.
<br> 
<b>Sowing Depth</b><br>
Dig a pit of 1x1x1 m size and fill pits one month before planting in November month with top soil and add well rotten farm yard manure and then allow it to settle. Finally pit should be filled with sub soil mixed with 10-15 kg of well decomposed cow dung, 500 kg SSP and drench the pit with Chlorpyriphos@50ml/10litre of water per pit. After planting, irrigation should be done.
<br>
<b>Method of Sowing</b><br>
For planting, square or rectangular planting can be adopted. In hilly areas contour system of planting is used for cultivation.
<br></p>
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
    <td>10-25°C</td>
    <td>50-75mm</td>
	<td>10-18°C</td>
    <td>18-25°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion" style="width:75%">Propagation</button>
<div class="panel">
<p>The seedling rootstocks used for pear are Kainth. Collect fully mature seeds of Kainth from September end to October first week crops. Extract seeds and place them in wooden box containing alternate layer of moist sand in December month for 30days. In January month sow them in nursery. In 10days seeds get germinate. Seedling is ready for grafting in January of next year.
<br>2) Place seeds in wooden box containing moist sand layer for germinate. They get germinated with 10-12days. After then, place seedling in field at distance of 10cm. Keep 60cm distance after every four lines. Seedling is ready for grafting in December-January.
<br>Pear is T budded or tongue grafted on kainth seedling. Grafting is done in December January or T budded in May-June.
</p>
</div>
<br><br><br><br>
<button class="accordion">Intercrops</button>
<div class="panel">
<p>In kharif season, crop like Mash, Moong, Toria can be taken as intercrops whereas in Wheat, Pea, Gram are taken as rabi crop during non-bearing season.</p>
</div>
<br>
<button class="accordion">Pruning and Training</button>
<div class="panel">
<p>Training is done for the development of strong framework of scaffold branches to get higher yield and quality fruit. The pear trees are trained according to modified central leader system.
<br><b>Pruning:</b> Remove all diseased, dead, broken weak branches, head back 1/4th during dormant season to induce spreading of branches.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement</b><br>
<table style="width:50%">
  <tr>
  <th>Age of the crop (Year)</th>
  <th>Well decomposed cow dung (in kg)</th>
    <th>UREA (in gm)</th>
    <th>SSP (in gm)</th>
	<th>MURIATE OF POTASH (in gm)</th>
  </tr>
  <tr>
  <td>First to three year</td>
  <td>10-20</td>
    <td>100-300</td>
    <td>200-600</td>
    <td>150-450</td>
  </tr>
  <tr>
  <td>Four to six</td>
  <td>25-35</td>
    <td>400-600</td>
    <td>800-1200</td>
	<td>600-900</td> 
  </tr>
  <tr>
  <td>Seven to nine</td>
  <td>40-60</td>
    <td>700-900</td>
    <td>1400-1800</td>
    <td>1050-1350</td>
  </tr>
  <tr>
  <td>Ten and above</td>
  <td>60</td>
    <td>1000</td>
    <td>2000</td>
    <td>1500</td>
  </tr>
</table></center>
<br> 
<p>When Crop is 1-3 year, apply 10-20 kg of well decomposed cow dung, 100-300 gm of Urea, SSP@200-600 gm, MOP@150-450 gm per Tree. For 4-6 year old crop, apply 25-35 kg of cowdung, Urea@400-600 gm, SSS@800-1200 gm and MOP@600-900 gm per Tree. For 7-9 year old crop, apply Cowdung@40-60 kg, Urea@700-900 gm, SSP@1400-1800 gm, MOP@1050-1350 gm per tree. For 10 year and above, apply 60 kg of Cowdung, Urea@1000 gm, SSP@2000 gm, MOP@1500 gm per tree.
<br>Apply whole amount of cowdung, SSP and MOP in December Month. Apply half dose of Urea before flowering i.e in early February and remaining half dose after fruit set i.e in April Month.<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=pear+fertilizer&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk03dw8zOe1mfnvDzHP2pbinRt2rFfw:1604399562790&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjJ95GQlubsAhXQZSsKHVuKDa0Q_AUoAnoECBQQBA&biw=1536&bih=666" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>A well distributed average rainfall of 75–100cm is required throughout the year for pear cultivation. It needs regular irrigation after transplantation. In summer irrigate crop with 5-7days interval whereas increased irrigation interval to 15days in winter months. In January month stop irrigating trees. Give flood irrigation to bearing tree in summer month it will help to increased fruit quality and size.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Spray with Diuron @ 1.6 kg/acre as pre-emergence after completing ploughing. The weeds can be controlled as post emergence by Glyphosate @ 1.2 Ltr/acre or Paraquat @ 1.2 Ltr/acre in 200Ltr of water when weeds are 15-20 cm in height.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Spider Mite:</b>They feed on leaves and suck sap thus causes yellowing of leaves.
<br>If infestation is observed, take spray of wettable Sulphur @ 1.5 gm per Ltr of water or Propergite @ 1 ml or Fenazaquin @ 1 ml or Dicofol @ 1.5 ml per Ltr of water.<br>
<b>Hopper:</b>They suck sap from influences, leaves. On infection flower get sticky and sooty mould a black color fungus is developed on affected parts.
<br>If infestation is observed take Spray Carbaryl @ 1kg or Dimethoate @ 200ml in 200Ltr of water. <br>
<b>Aphid and Thrips:</b>They suck sap from leaves and causing yellowing of leaves. They secret honey dew like subtance and black sooty mould is developed on affected areas. 
<br>Take spray of Imidacloprid@60ml or Thiamethoxam@80gm/150 ltr water when crop is at initiation of foliage in last week of Feb. take second spray in full boom in March month, and third on fruit set stage. <br>
<br><b>Disease and their control:</b><br><br>
<b>Pear Scab:</b>Dark mouldy spots are observed underside of leaves. Later they turn into gray color. Affected portion get fall off. Later on spot are observed on fruits.
<br>Give Captan spray@2gm/ltr starting from when crop is in dormant stage and continue spray with 10 days interval till petal falls. Remove infected fruits, Plant parts and destroyed them away from field. <br>
<b>Root Rot:</b>Bark and wood get turn brown with white powdery growth on it. Infected tree get wilted and give early leaves fall.
<br>Take spray of Copper Oxychloride@400gm/200 ltr of water in March month when disease is seen. Repeat the spray in June month. Mix Carbendazim@10gm + Carboxin (Vitavax)@5gm in 10 ltr water, and apply this solution around fully grown tree for two times, first at before monsoon (April-May) and second application after monsoon (September-October). Give light irrigation to tree after this treatment. </p>
<br></div>
<br><br>
<button>
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&biw=1536&bih=666&tbm=shop&sxsrf=ALeKk017LbEwfTqheG3T6cinv7ijEgonUg%3A1604399962293&ei=WjOhX_7DEbKd4-EPjq-6wA4&q=pear+pesticide&oq=pear+pesticide&gs_lcp=Cgtwcm9kdWN0cy1jYxADMgYIABANEBgyCAgAEAUQHhAYMggIABAIEB4QGDIICAAQCBAeEBg6BAgjECc6BggAEAgQHjoGCAAQHhAYOgQIABATOgYIABAKEBM6BggAEAoQGDoECAAQHjoGCAAQBRAeOggIABAIEA0QHjoICAAQChAeEBg6CAgAEA0QHhAYOgoIABAFEAoQHhAYOggIABANEAoQGDoICAAQDRAFEB46CggAEA0QBRAeEBhQgKwGWKHdBmCZ5gZoAHAAeACAAfYEiAGbI5IBCTAuNS44LjUtM5gBAKABAaoBD3Byb2R1Y3RzLWNjLXdpesABAQ&sclient=products-cc&ved=0ahUKEwj-2NHOl-bsAhWyzjgGHY6XDugQ4dUDCAs&uact=5" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>For local markets fruits are harvested at fully mature stage and in case of distant markets firm and green fruits are picked. Delayed picking reduces storage life, unattractive colour and insipid flavour. Hard peach variety required near about 145days to mature whereas semi soft peach varieties required near about 135-140days for harvesting.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting do sorting and grading of fruits. Then pack these fruits in Corrugated Fibre Board cartons for ripening, storage and marketing purpose. Treat fruits with 1000ppm Ethephon for three to four minutes or exposed them to 100ppm ethylene gas for 24hrs and then stored at 20°C.Fruits can be stored for 60days when they are stored at 0-1°C temperature with relative humidity 90-95%.</p>
</div><br>
<div class="zoom">
<img alt="pear" src="pear2.jpg">
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
