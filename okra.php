<!DOCTYPE html>
<html>
<head>
<title>Okra</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 310%;
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
<h3>OKRA</h3>
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

<p>Okra or Ladies Finger is an annual plant belongs to the family Malvaceae. The place of origin is Ethiopia, it is mainly grown  in tropical and sub-tropical regions. The major growing states in India are Uttar Pradesh, Bihar, West Bengal and Orissa. Okra is mainly grown for its green tender nutritive fruits. Dry fruits and skin are useful in paper industry and fibre extraction. Okra is rich source of vitamins, protein, calcium and other minerals.</p><br>
<div style="float:right" class="zoom"><img alt="Okra" src="okra1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Okra can be cultivated in wide range of soil. The ideal soil for okra cultivation is sandy loam to clay loam with rich organic matter and better drainage facility. If proper drainage is available it can grow well in heavy soils. The pH of soil should be 6.0 to 6.5. Do not cultivate crop in alkaline, saline soils also in poor drainage capacity soils.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>The land is prepared by giving 5-6 deep ploughings and levelling is done by two or three planking. Apply well decomposed cowdung@100qtl/acre in soil at time of last ploughing. Ridges and Furrow type of layout is use. Sometime okra is also sown at the border of main crop and layout is same as for main crop. Directly sown in soil 1.5 to 2 cm deep by seed drill, hand dibbling or behind the plough.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
In north it is cultivated in rainy and spring season. In rainy season, it is sown during June-July and for spring season it is cultivated in February - March.<br>
<b>Spacing</b><br>
Row to row spacing should be 45 cm is recommended and plant to plant distance is 15-20 cm.<br>
<b>Sowing depth</b><br>
Plant seed at depth of 1-2 cm.<br>
<b>Method of Sowing</b><br>
For sowing dibbling method is used.</p>
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
    <td>20-30°C</td>
    <td>1000mm</td>
	<td>25-30°C</td>
    <td>20-90°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For rainy season crop (June - July) used seed rate of 4-6kg/acre with spacing of 60x30cm for branching varieties and 45x30cm for non-branching varieties. Upto mid-February used seed rate 15-18 kg/acre and for sowing in march used seed rate 4-6 kg/acre.<br>
<b>Seed Treatment</b><br>
Seed germination can be enhanced by soaking the seeds in water for 24hours. Seed treatment with Carbendazim will protect seeds from attack of soil born fungus. For that soak seeds in Carbendazim solution@2gm/Ltr of water for 6 hours and dry them in shades. Then immediately complete sowing.  For better germination and also to protect crop from soil born disease, treat seed with Imidacloprid@5ml per 1Kg seed followed by treatment with Trichoderma viride@4gm/kg seeds.<br>
<center>
<table style="width:50%">
  <tr style="background-color:gold">
    <th>Fungicide Name</th>
    <th>Quantity (per kg Seed)</th>
  </tr>
  <tr style="background-color:yellow">
    <td>Carbendazim</td>
    <td>2 gm</td>
  </tr>
  <tr style="background-color:yellow">
    <td>Imidacloprid</td>
    <td>5 gm</td>
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
    <td>80</td>
    <td>As per soil test</td>
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
    <td>36</td>
    <td>As per soil test</td>
    <td>As per soil test</td>
  </tr>
</table></center>
<br> 
<p>Apply well decomposed cow dung@120-150qtl as basal dose. Overall okra crop required Nitrogen@36kg per acre in form of Urea@80kg/acre. Apply half dose Nitrogen at time of sowing and remaining after first picking of fruits.  <br>
To obtain good yield, 10-15days after sowing take spray of 19:19:19 along with micro-nutrients@2.5 to 3gm/Ltr of water. Repeat the spray of 19:19:19@4-5gm/Ltr of water 10-15days after first spray. To obtain good flowering and fruiting, take spray of 00:52:34@50gm/10Ltr water at before onset of flowering followed by another during fruit formation stage. To increase yield and to obtained good quality, at fruit development stage spray with 13:00:45 (Potassium Nitrate)@100gm/10Ltr of water.<br>
</p></div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=buy+fertilizer+for+lady+finger&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk01XFcv2_CJ2Ot1z_07LYC4IIdkRaA:1607178867043&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjzk9frh7ftAhXwwjgGHSH7BhkQ_AUoAnoECA4QBA&biw=732&bih=687" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Pre sowing irrigation should be given in summer season crop to ensure good germination if sufficient moisture is not present in soil. The next irrigation is given after seed germination. Then the field is irrigated after 4 to 5 days in summer and 10 to 12 days in rainy season.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Weeding is done to control the growth of weeds in okra. Earthing up in the rows should be done in rainy season crop. First weeding is done after 20-25 days of sowing and second weeding is done after 40-45 days of sowing. Application of Fluchoralin 48%@1 liter per acre or Pendimethalin@1ltr/acre or Alachlor@1.6Ltr/acre is used as pre-emergence herbicide for controlling weeds in Bhindi is found an effective method.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Shoot and Fruit borer:</b> The insect larvae bore into the shoots during vegetative growth resulting in drooping of affected shoots. In later stages bored fruits have larvae inside and filled with excreta.<br>
Destroy infested parts. If pest population is high, spray Spinosad@1ml/Ltr water or Chlorantraniliprole 18.5%SC (Coragen) @7ml/15Ltr of water or Flubendiamide@50ml/acre added in 200Ltr water.<br>
ii.<b>Blister beetle:</b> The beetle feed on pollen, petals and flower buds.<br>
If infestation is observed, collect and destroy adults and take spray of Carbaryl@800gm/150Ltr of water or Malathion@400ml/150Ltr of water or Cypermethrin@80ml per 150Ltr of water is effective.<br>
iii.<b>Aphid:</b> Colony of aphids on young leaves and fruits can be seen. Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and sooty, black mould is developed on affected parts.<br>
Destroy affected parts as soon as infestation is noticed. Apply Dimethoate 300 ml/150Ltr of water, 20 to 35 days after sowing. Repeat again if necessary. If infestation is observed, take spray of Thiamethoxam 25WG@5gm/15Ltr of water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Yellow Vein Mosaic Virus:</b> The characteristic symptom of this disease is homogenous interwoven network of yellow veins. Growth of the plant gets affected and they remain stunted. Fruits also give yellow appearance with small size and tough texture. It causes yield losses up to 80-90%. This disease is spread due to white fly and leaf hopper.<br>
Use resistant varieties for cultivation. Remove and destroyed diseased plants away from field. To control white fly take spray of Dimethoate@300ml/200Ltr of water.<br>
ii.<b>Powdery mildew:</b> White powdery growth is observed on young leaves and also on fruits. In severe condition premature defoliation and fruit drop is observed. Fruit quality get deteriorated and they remain small in size.<br>
If infestation is observed in field, take spray of Wet table Sulphur 25gm/10Ltr of water or Dinocap@5ml/10Ltr of water, 4times at 10days interval or Tridemorph@5ml or Penconazol@10ml/10Ltr of water for 4 times with 10days interval.<br>
iii.<b>Cercospora leaf spot:</b> Spots of grayish centre and red borders appears on the leaves. In case of severe infestation, defoliation occurs.<br>
To avoid future infection do seed treatment with Thiram. If infestation of disease is observed in field, take spray of Mancozeb@4gm/Ltr or Captan@2gm/Ltr or Carbendazime@2gm per Ltr of water. Or Give two - three foliar spray of Difenoconazole/Hexaconazole@0.5gm/Ltr of water.<br>
iv.<b>Root rot:</b> Infested roots become dark brown in color and plant die in case of severe infestation.<br>
Avoid monocropping and follow crop rotation. Before sowing do seed treatment with Carbendazim@2.5gram per kg of seed. Drench the soil with Carbendazim solution@1gm/Ltr of water.<br>
v.<b>Wilt:</b> In wilt disease, initially older leaves turn yellow followed by complete wilting of crop. It can attack crop at any stage.<br>
If infestation is observed, Drench with Carbendazim@10gm/10Ltr water around root zone.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?rlz=1C1CHBD_enIN921IN921&hl=hi&biw=732&bih=687&tbm=shop&sxsrf=ALeKk03Kxn6IP8RXvjY5GaZNloBgICcv3w%3A1607178716560&ei=3JnLX9rYIYDH4-EPs4qzyA0&q=buy+pesticide+for+lady+finger&oq=buy+pesticide+for+lady+finger&gs_lcp=Cgtwcm9kdWN0cy1jYxADOgQIIxAnOgQIIRAKUK-5DljK5w5gle4OaABwAHgAgAH4AYgB1huSAQYwLjQuMTOYAQCgAQGqAQ9wcm9kdWN0cy1jYy13aXrAAQE&sclient=products-cc&ved=0ahUKEwjatvajh7ftAhWA4zgGHTPFDNkQ4dUDCAs&uact=5" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The fruits are ready to harvest after 60 to 70 days of sowing. Small and tender fruit should be harvested. The fruits should be harvested in the morning and evenings. Delay in harvesting may make the fruits fibrous and they lose their tenderness and taste. Rainy season crop gives 120 -150 quintal/ha. Summer crop gives 80 -100 quintal/ha. Duration is 100 & 90 days respectively.</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>Okra has short shelf life and cannot be stored for longer time. The okra fruit should be stored at 7-10°C and 90% relative humidity to increase the shelf life. For local markets the fruits are filled in jute bags, whereas for distant markets the fruits are packed in perforated paper cartons.</p>
</div><br>
<div class="zoom">
<img alt="Okra" src="okra2.jpg">
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
