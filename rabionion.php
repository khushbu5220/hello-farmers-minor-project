<!DOCTYPE html>
<html>
<head>
<title>Rabi Onion</title>
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
a:link {
  text-decoration: none;
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
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>RABI ONION</h3>
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

<p>Onion is most widely cultivated popular vegetable species. It is used for culinary purpose also it has several non-culinary use like it is used as Moth repellent because of its pungent juice, it is used to polish glass and copperware, onion concentrated water can be spray on plants to increased plants pest resistance. India ranks first in term of area and second in production after China.</p><br>
<div style="float:right" class="zoom"><img alt="Onion" src="onion1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can cultivate on various soil type such as sandy loam, clay loam silt loam and heavy soils. It gives best result when grown in deep loam and alluvial soils with good drainage, moisture holding capacity and sufficient organic matter. Loose and sandy soils are not suitable for cultivation as bulb produce in such soil are deformed with less keeping quality. pH of soil should be 6 to 7.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Give three to four deep ploughing and bring soil to fine tilth. Add well decomposed cow dung to increase organic content of soil. Then leveled soil and divide into small plots and channels.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Optimum time for raising nursery is middle of October to middle of November month. Seedlings are ready for transplantation in middle of December to Middle of January month. For transplanting, select 10-15 cm heighted healthy seedlings.<br>
<b>Spacing</b><br>
While transplanting, use spacing of 15 cm between rows and 7.5 cm between plants.<br>
<b>Sowing depth</b><br>
In nursery, sow seeds at depth of 1-2 cm.<br>
<b>Method of Sowing</b><br>
For sowing use transplanting method.</p>
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
    <td>650-750mm</td>
	<td>20-30°C</td>
    <td>15-21°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use seed rate of 3-4 kg/acre.<br>
<b>Seed Treatment</b><br>
Seed treatment with Thiram@2 gm/kg of seed + Benomyl 50WP@1 gm/liter water effectively controls damping off and smut diseases. After chemical treatment, seed treatment with bio agent Trichoderma viride@2 gm/kg of seed is recommended, it help in reducing early seedling diseases and soil borne inoculum.</p>
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
<p>Apply 20 tonnes of Farm Yard Manure or well decomposed cow dung 10 days before sowing. Apply Nitrogen@40 kg, Phophorus@20 kg and Potash@20 in form of Urea@90 kg, Single Super Phosphate@125 kg per acre and MOP@35 kg/acre. Apply whole quantity of Phosphorus, Potash and half dose of Nitrogen at time of transplanting. Apply remaining amount of nitrogen as top dressing, four weeks after transplantation.<br>
<b>WSF:</b> 10-15 days after transplanting, sprayed 19:19:19 along with micronutrient@2.5 to 3 gm/Ltr of water.<br>
</p></div>
<br>
<br>
<button>
<a href="https://www.indiamart.com/proddetail/onion-special-fertilizers-2519377730.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Depending upon climatic conditions and soil type decide irrigation amount and frequency. Apply first irrigation immediately after sowing then depending upon need apply irrigation with interval of 10-15days.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Initially onion seedlings grow slowly. So better to use chemical herbicides than hand weeding to avoid injury. To control weeds take spray of Pendimethalin(Stomp)@1 Ltr/200 Ltr water/acre within 72 hours of sowing. Apply oxyfluorfen@425 ml/200Ltr of water per acre as post emergence herbicide 7 days after planting. Two to three weeding are recommended for weed control. First hand weeding should be done one month after sowing and second hand weeding to be done one month after first hand weeding.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Maggots:</b> Infestation observed in January-February Month. They feed on roots because browning of leaves. Base of plant become watery.<br>
If infestation is observed, apply Carbaryl@4kg or Phorate@4kg to the soil and give light irrigation. Or Apply Chlorpyriphos @1.5Ltr/acre along with irrigation water or sand.<br>
ii.<b>Thrips:</b> If not controlled properly can cause yield loss up to 50%. Mostly observed in dry weather. They suck sap from the foliage and results in curling of leaves, leaves become cup shaped or curved upward.<br>
To check severity of thrips incidence, keep blue sticky traps @6-8 per acre. If infestation observed in field take spray of Fipronil (Reagent)@30ml/15Ltr water or Profenofos@10ml /10Ltr water by 8-10days interval.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Purple blotch and stem phylium blight:</b> In severe infestation may cause yield loss up to 70%. Deep purple lesions are observed on leaves. Yellow streaks get turn brown and extend along the blade.<br>
Take spray of Propineb70%WP@350gm/acre/150Ltr of water, twice at 10days interval.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/onion.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting at proper time is necessary. It depend upon variety, season, market price etc. 50% neck falls is sign indicating crop is ready for harvesting. Harvesting is done manually by uprooting bulbs. After harvesting they are kept in field for 2-3 days to remove excessive moisture from bulb.</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>After harvesting and proper drying, bulbs are sorted and graded according to size.</p>
</div><br>
<div class="zoom">
<img alt="Onion" src="onion2.jpg">
</div>
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
