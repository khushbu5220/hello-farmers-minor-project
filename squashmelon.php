<!DOCTYPE html>
<html>
<head>
<title>Squash Melon</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 250%;
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
<h3>SQUASH MELON</h3>
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

<p>Squash Melon is also known as round melon, round gourd, and Indian squash. It is important summer vegetable of north India. In Punjab it is called as "tinda".  Squash Melon origin is present in India. It belongs to family of Cucurbitaceae. Its raw fruits are used for vegetable purpose. 100gm of immature fruits contains Proteins@1.4%, fat@0.4%, carbohydrates@3.4%, carotene@13mg and vitamin@18mg. Fruits also possess medicinal property, they are used against dry cough and also for improving blood circulation.</p><br>
<div style="float:right" class="zoom"><img alt="Squash Melon" src="squashmelon2.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>For good growth and yield it required well drained, rich organic matter contained sandy loam soils. pH of soil in range of 6 to 7 is ideal for optimum growth of crop. It also gives good results when grown on lands having water table near to soil. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Plough land and bring soil to fine tilth. Apply well decomposed cow dung@8-10tonnes/acre at time of field preparation. Prepared raised bed for cultivation. Seeds can be sown on furrow or in Pits.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
In North India, it can be cultivated for two times. It is sown in February-March and also in June-July.<br>
<b>Spacing</b><br>
Sow seeds on both side of bed and use spacing of 45cm.<br>
<b>Sowing depth</b><br>
Seeds are sown at depth of 2-3cm.<br>
<b>Method of Sowing</b><br>
Seeds are directly sown on bed or ridge.</p>
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
    <td>10-28°C</td>
    <td>200-300mm</td>
	<td>20-28°C</td>
    <td>10-20°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Sow two seeds per spot. Seed rate of 1.5kg is sufficient for one acre land.<br>
<b>Seed Treatment</b><br>
Before sowing soaked seeds in water for 12-24hours. It will increased germination percentage.
To protect seeds from soil borne fungus, treat seeds with Carbendazim@2gm/kg of seeds or Thiram@2.5gm/kg of seeds before sowing. After chemical treatment, treat seeds with Trichoderma Viride@4gm/kg of seeds or Pseudomonas fluroscens@10gm/kg of seeds. <br>
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
  <td>Thiram</td>
  <td>2.5 gm</td>
  </tr>
</table></center>
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
    <td>90</td>
    <td>125</td>
    <td>35</td>
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
    <td>40</td>
    <td>20</td>
    <td>20</td>
  </tr>
</table></center>
<br> 
<p>Overall squash crop required Nitrogen@40kg in form of Urea@90kg/acre, Phosphorus@20kg in form of SSP@125kg/acre and Potash@20kg in form of MOP@35kg/acre. Apply one third dose of Nitrogen and full dose of Phosphorus and Potash at time of sowing. Apply remaining dose of Nitrogen during early period of growth.</p>
</div>
<br>
<br>
<button>
<a href="https://www.flipkart.com/airex-round-gourd-tinda-vegetables-seeds-humic-acid-fertilizer-for-growth-all-plant-better-responce-15-gm-20-per-packet-seed/p/itmewsqhgzk7f9pg" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>It need frequent irrigation as it is short duration crop. If seed are sown on pre-irrigated furrows, apply first irrigation on second or third day after sowing. Depending upon climate, soil type, in summer season provides irrigation with interval of 4-5days. In rainy season provide irrigation depending upon rainfall frequency. Squash Melon responds well to drip irrigation and it improves yield by 28%.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Use of black polythene mulch will help to control weeds problem also it will help to conserved moisture. To make field weed free, do hand weeding and keep check on weeds. Carry out first hand weeding 15-20days after sowing. Give remaining weedings depending upon weed intensity.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid and Thrips:</b> They suck the sap from the leaves resulting in yellowing and drooping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.<br>
If infestation is observed in field, To control spray the crop with Thiamethoxam@5gm/15Ltr of water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Powdery Mildew:</b> Patchy, White powdery growth appears on upper surface of leaves also on main stem of infected plant. It parasitizes the plant using it as a food source. In severe infestation it causes defoliation and premature fruit ripening.<br>
If infestation is observed take Spray of water soluble Sulphur@20gm/10Ltr of water 2-3times with interval of 10days.<br>
ii.<b>Anthracnose:</b> This disease attacks only on fruits which will lead to fruit drying.<br>
As a preventive measure, treat seed with Carbendazim@2gm/kg of seed. If infestation is observed in field, take spray of Mancozeb@2gm or Carbendazim@0.5gm/liter of water.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?q=buy+pesticide+for+tinda&rlz=1C1CHBD_enIN921IN921&hl=hi&sxsrf=ALeKk00hLEGTZkLKFvMX6pq4pahOK-yCWQ:1607183069723&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjAuNa_l7ftAhWf4HMBHSxSA-4Q_AUoAXoECAQQAw&biw=732&bih=687" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety fruits are ready for harvesting within 60days of sowing. Carryout harvesting when fruits are tender and of medium size. Carry out picking at interval of 4-5days.</p>
</div>
<br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>Keep isolation distance of 800m from other varieties of squash melon. Removed disease infected plants from field. When fruits are mature i.e. they changes their color into dull. Then they are crushed with hands in fresh water and then separate seeds from pulp. Seeds which are settled in bottom are collected for seed purpose.</p>
</div><br>
<div class="zoom">
<img alt="Squash Melon" src="squashmelon1.jpg" style="height:100%;width:140%">
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
