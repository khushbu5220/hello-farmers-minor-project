<!DOCTYPE html>
<html>
<head>
<title>Spinach</title>
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
<h3>SPINACH</h3>
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

<p>Spinach belongs to family of "Amaranthaceae" and it is native of central and western Asia. It is perennial vegetable and cultivated throughout the world. Spinach is also known as "Palak" in Hindi. It is a rich source of iron, vitamin and anti-oxidants. It has many health benefits. It helps to increases immunity. It is good for digestion, also good for skin, hair, eyes and for brain health. It has anti-cancer and anti-ageing property. Andhra Pradesh, Telangana, Kerala, Tamil Nadu, Uttar Pradesh, Karnataka, Maharashtra, West Bengal and Gujarat are leading producing states of spinach in India.</p><br>
<div style="float:right" class="zoom"><img alt="Spinach" src="spinach1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown on any type of soil having good drainage capacity. But it give good result when grown on sandy loam and alluvial soil. Avoid acidic soils also water logged soils for spinach cultivation. pH of soil should be in range of 6 to 7.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Soil should be prepared by ploughing 2-3 times. After ploughing do levelling of soil for uniform bed formation. Prepared bed and irrigation channels.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Spinach is sown throughout the year. For winter season, best time for sowing is from September to October. For spring season complete sowing from Mid-February to April.<br>
<b>Spacing</b><br>
Use row to row spacing of 25-30 cm and plant to plant spacing of 5-10 cm.<br>
<b>Sowing depth</b><br>
Sow seeds at depth of 3-4 cm.<br>
<b>Method of Sowing</b><br>
Sowing can be done by line sowing and broadcasting method.</p>
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
    <td>15-30°C</td>
    <td>80-120mm</td>
	<td>15-20°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For winter season use, seed rate of 4-6 kg and for summer crop use seed rate of 10-15 kg per acre. <br>
<b>Seed Treatment</b><br>
Before sowing soaked seeds in water for 12-24 hours. It will increased germination percentage.<br>
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
    <td>75</td>
    <td>75</td>
    <td>-</td>
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
    <td>35</td>
    <td>12</td>
    <td>-</td>
  </tr>
</table></center>
<br> 
<p>For good yield, apply well decomposed cowdung@100 qtl and Nitrogen@35 kg (in form of Urea@75 kg), Phosphorus@12 kg (in form of Superphosphate@75 kg) per acre. Apply whole amount of well decomposed cowdung and phosphorus along with half amount of nitrogen before sowing. Apply remaining amount of nitrogen in two equal splits after each cutting. After fertilizer application provide light irrigation.</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.in/Shiviproducts-19-19-19-Fertilizer-Coriander-Fenugreek/dp/B07NJ7YY6S" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>For proper seed germination and good growth soil should have enough moisture content. At time of sowing if proper soil moisture is not present in soil then provide pre-sowing irrigation.<br>
First irrigation should be given after sowing. In summer month, apply irrigation at interval of 4-6 days where as in winter month apply irrigation at interval of 10-12 days. Avoid over irrigation also care should be taken not to water on leaves, as it will leads to occurrence of disease and deterioration of quality. Drip irrigation is proves to be beneficial for spinach cultivation.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>To keep check on weeds along with to provide aeration to soil two - three hoeing are required. To control weed chemically, use Pyrazone@1-1.12 kg/acre as pre-emergence herbicide. Do not use weedicide afterwards.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid:</b> If infestation is observed, take spray of Malathion 50EC@350 ml/ 80-100 ltr of water. Do not harvest crop immediately after spraying of Malathion. Harvest seven days after spray.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Cercospora Leaf spot:</b> On leaves, small circular to semi-circular spots with grey centre and red margins appeared. On seed crop, if infestation is observed, take spray of Carbendazim@400 gm or Indofil M-45@400 gm in 150 ltr of water per acre. If necessary, repeat spray with intervals of 15 days.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.google.com/search?q=buy+pesticide+for+spinach&rlz=1C1CHBD_enIN921IN921&hl=hi&sxsrf=ALeKk03alp5sY9PT69LYAs1uyUvOhUL1EA:1607180026564&source=lnms&tbm=shop&sa=X&ved=2ahUKEwix4cqUjLftAhXYyjgGHVzaCOUQ_AUoAXoECAwQAw&biw=732&bih=687" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety, crop is ready for first cutting 25-30 days after sowing. For harvesting, use sharp knife or sickle. Depending upon variety and season, subsequent cutting should be done at interval of 20-25 days.</p>
</div>
<br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>For seed production, use spacing of 50 cm x 30 cm. Keep isolation distance of 1000 m around palak seed plot. Skip one row after every five rows; it is essential for field inspection. Remove disease plant; also remove plant showing variation in leaf characteristic. Harvest crop when seed stalks turn brown. After harvesting keep plant in field for curing and drying purpose for a week. After proper drying, for seed purpose, threshing of crop is to be done.</p>
</div><br>
<div class="zoom">
<img alt="Spinach" src="spinach2.jpg" style="height:100%;width:140%">
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
