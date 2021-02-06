<!DOCTYPE html>
<html>
<head>
<title>Pumpkin</title>
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
<h3>PUMPKIN</h3>
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

<p>It is a popular vegetable crop in India which is grown in rainy season. It is also known as " HalwaKaddu ” or “ Kaddu ” in hindi and it belongs to cucurbitaceae family. India is the second largest producer of pumpkin. It is used for cooking purpose and is used to make sweets. It is good source of Vitamin A and potassium. Pumpkin helps to boost eye vision, lowers blood pressure and has antioxidant properties. Its leaves, young stems, fruit juice and flowers contain medicinal properties.</p><br>
<div style="float:right" class="zoom"><img alt="Pumpkin" src="pumpkin1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It requires loamy soil having good drainage system and is rich in organic matter. Soil pH of 6-7 is optimum for pumpkin cultivation.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Well prepared land is required for pumpkin farming. To bring the soil to fine tilth, ploughings with local tractor is required.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
February-March and June-July is an optimum time for seed sowing.<br>
<b>Spacing</b><br>
Sow two seeds on per hill and use spacing of 60cm. For hybrid varieties, sow seeds on both side of bed and use spacing of 45cm.<br>
<b>Sowing depth</b><br>
Seeds are sown 1 inch deep in the soil.<br>
<b>Method of Sowing</b><br>
Direct sowing</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    </tr>
  <tr style="background-color:magenta">
    <td>25-28°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Seed rate of 1kg seed is sufficient for one acre land.<br>
<b>Seed Treatment</b><br>
Treatment with Benlate or Bavistin @2.5 gm/kg of seed is used to cure from soil borne diseases.
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
    <td>40</td>
    <td>20</td>
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
    <td>90</td>
    <td>125</td>
    <td>35</td>
  </tr>
</table></center>
<br> 
<p>Application of well rotten FYM@8-10tonnes/acre is used before preparation of beds. Fertilizer dose of Nitrogen @40kg/acre in the form of urea @90kg/acre, Phosphorus @20kg/acre in the form of SSP@125kg/acre and Potassium @20kg/acre in the form of MOP@35kg/acre is added. Nitrogen dose is applied in 2 equal splits. First half dose is applied before sowing and then remaining dose of nitrogen is applied as top dressing within one month.
</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.com/pumpkin-fertilizer/s?k=pumpkin+fertilizer" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Proper irrigation at proper intervals of time is required. Immediate irrigation is required after seed sowing. Depending upon the season, subsequent irrigations at the interval of 6-7 days is required. In total 8-10 irrigation are required.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>To control the weeds, frequent weeding or earthing up operation is required. Weeding is done with the help of hoe or by hands. First weeding is done after 2-3 weeks of seed sowing. In total 3-4 weedings are required to make the field weed free.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphids and Thrips: </b>They suck the sap from the leaves resulting in yellowing and drooping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.<br>
If infestation is observed in field, to control spray the crop with Thiamethoxam@5gm/15Ltr of water.<br>
ii.<b>Pumpkin flies:</b> They cause sunken brown color spots on fruits and white maggot gets develop on the fruit.<br>
Foliar application of Neem oil @3.0% is given to cure the crop from fruit fly pest.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Powdery mildew:</b> Patchy, white powdery growth appears on upper surface of leaves also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.<br>
If infestation is observed take spray of water soluble Sulphur@20gm/10Ltr of water 2-3 times with interval of 10 days.<br>
ii.<b>Downy mildew:</b> Caused by Pseudopernospora cubensis. Symptoms are mottling and purplish color spots are seen on lower surface of the leaves.<br>
If infestation is observed, 400gm Dithane M-45 or Dithane Z-78 is used to get rid of this disease.<br>
iii.<b>Anthracnose:</b> Anthracnose affected foliage appears scorched appearance. <br>
As a preventive measure, treat seed with Carbendazim@2gm/kg of seed. If infestation is observed in field, take spray of Mancozeb@2gm or Carbendazim@3gm/liter of water.<br>
iv.<b>Wilt:</b> Root rotting is a result of this disease. <br>
If infestation is observed then drenching with M-45@400gm mixed 100ltr of water is done.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?q=buy+pesticide+for+pumpkin&rlz=1C1CHBD_enIN921IN921&hl=hi&sxsrf=ALeKk00NNrgn5RmFRAawgunUVBqlwLyrjA:1607179550616&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjhoNGxirftAhUuxjgGHW-GDz8Q_AUoAXoECAsQAw&biw=732&bih=687" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is mainly done when skin of the fruits turns pale brown in color and the inner flesh becomes golden yellow in color. Mature fruits having good storage capacity therefore they can be used for long distance transportation. Harvesting of immature fruits is also done for sale purpose. 
</p>
</div>
<br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>Keep isolation distance of 1000m for foundation and 500m for certified seed production from other varieties of pumpkin. Remove diseased plants from field. When fruits are mature i.e. they changes their color into dull. Then they are crushed with hands in fresh water and then separate seeds from pulp. Seeds which are settled in bottom are collected for seed purpose.</p>
</div><br>
<div class="zoom">
<img alt="Pumpkin" src="pumpkin2.jpg">
</div><br><br><br><br><br>
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
