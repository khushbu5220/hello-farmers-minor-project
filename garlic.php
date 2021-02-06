<!DOCTYPE html>
<html>
<head>
<title>Garlic</title>
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
<h3>GARLIC</h3>
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

<br><br>
<p>Garlic is a native of Southern Europe and a popular bulb crop cultivated throughout Asia. It is used as spice in many dishes. It has excellent medicinal properties. It is rich source of Protein, Phosphorus, Potassium etc. It helps in digestion; also it reduces cholesterol in human blood. Major Garlic producing states are Madhya Pradesh, Gujarat, Rajasthan, Orissa, Uttar Pradesh, Maharashtra, Punjab and Haryana.</p><br>
<div style="float:right" class="zoom"><img alt="Garlic" src="garlic1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be cultivated on various soil types. It gives best result when grown in sandy loam and silt loam soils rich in organic matter. Loose and sandy soils are not suitable for cultivation as bulb produce in such soil are deformed with less keeping quality. pH of soil should be 6 to 7.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Give three to four deep ploughing and bring soil to fine tilth. Add well decomposed cow dung to increase organic content of soil. Then levelled soil and divide into small plots and channels.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Optimum time for sowing is last week of September to first week of October.<br>
<b>Spacing</b><br>
Keep spacing of 7.5 cm between two plant and 15 cm between the rows.<br>
<b>Sowing depth</b><br>
Sow garlic cloves 3 to 5 cm deep keeping their growing heads upward.<br>
<b>Method of Sowing</b><br>
For sowing of garlic use Kera method. Sowing can be done manually or with help of Machine. Cover cloves with soil and provide light irrigation.<br></p>
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
    <td>10-30°C</td>
    <td>600-700mm</td>
	<td>10-15°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Use seed rate of 225-250 kg per acre.<br>
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
    <td>110</td>
    <td>155</td>
    <td>As per Soil Test</td>
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
    <td>50</td>
    <td>25</td>
    <td>-</td>
  </tr>
</table></center>
<br> 
<p>Apply two tonnes of Farm Yard Manure or well decomposed cow dung 10 days before sowing. Apply Nitrogen@50 kg, Phophorus@25 kg in form of Urea@110 kg and Single Super Phosphate@155 kg per acre. Apply whole quantity of SSP before sowing and nitrogen should be applied in three equal splits. Apply Urea 30, 45 and 60 days after sowing.<br>
<b>WSF:</b> 10-15 days after transplanting, spray 19:19:19 along with micronutrient@2.5 to 3 gm/Ltr of water.<br>
</p></div>
<br>
<br>
<button>
<a href="https://www.google.com/search?q=buy+fertilizer+for+garlic&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk01oQwVF1bolDHv4AdMGYEfpMrDMRg:1607178177363&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjXtuiihbftAhUPH7cAHfrBAoEQ_AUoAnoECA0QBA&biw=1536&bih=698" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Depending upon climatic conditions and soil type decide irrigation amount and frequency. Apply first irrigation immediately after sowing then depending upon need apply irrigation with interval of 10-15days.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Initially garlic seedlings grow slowly. So it is better to use chemical herbicides than hand weeding to avoid injury. To control weeds take spray of Pendimethalin@1 Ltr/200 Ltr water/acre within 72 hours of sowing. Apply Oxyfluorfen@425ml/200Ltr of water per acre as post emergence herbicide 7 days after planting. Two to three weeding are recommended for weed control. First hand weeding should be done one month after sowing and second hand weeding to be done one month after first hand weeding.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Thrips:</b> If it is not controlled properly, can cause yield loss up to 50%. Mostly observed in dry weather. They suck sap from the foliage and results in curling of leaves, leaves become cup shaped or curved upward.<br>
To check severity of thrips incidence, keep blue sticky traps @6-8 per acre. If infestation observed in field take spray of Fipronil@30 ml/15 Ltr water or Profenophos@10 ml or Carbosulfan@10 ml+ Mancozeb@25 gm/10 Ltr water by 8-10 days interval.<br>
ii.<b>Maggots:</b> Infestation observed in January-February Month. They feed on roots cause browning of leaves. Base of plant become watery.<br>
If infestation is observed, apply Carbaryl@4 kg or Phorate@4 kg to the soil and give light irrigation. Apply Chlorpyriphos @1 Ltr/acre alongwith irrigation water or sand.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Purple blotch and stem phylium blight:</b> In severe infestation may cause yield loss up to 70%. Deep purple lesions are observed on leaves. Yellow streaks get turn brown and extend along the blade.<br>
Take spray of Propineb70%WP@350 gm/acre/150 ltr of water, twice at 10 days interval.<br>
</p>
</div>
<br><br>
<button>
<a href="https://agribegri.com/products/coragen---broad-spectrum-insecticide-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Crop becomes ready in 135-150 days after sowing. Crop can be harvested when 50% leaves start yellowing and drying. Stop irrigation atleast 15days before harvesting. Plants are pull out or uprooted, then tied into small bundle and kept in field or shade for 2-3days. After proper drying, dry stalks are removed and bulbs are cleaned.</p>
</div>
<br>
<button class="accordion">Post_Harvest</button>
<div class="panel">
<p>After harvesting and proper drying, bulbs are sorted and graded according to size.</p>
</div><br>
<div class="zoom">
<img alt="Garlic" src="garlic2.jpg">
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
