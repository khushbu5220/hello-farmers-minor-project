<!DOCTYPE html>
<html>
<head>
<title>Fennel</title>
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
<h3>FENNEL</h3>
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
<p>Fennel also known as Saunf in Hindi is belongs to Apiacae family. This annual herb is native of Europe. Its seeds after drying are mostly used for spice purpose. Fennel is good source of fibre, vitamin C, potassium. It is used for flavouring meat dishes, soups etc. Its leaves are used for garnishing dishes also in salads. Fennel also has medicinal properties like it is used for digestion, also to treat constipation, diarrhea, throat pain, headache etc. It is cultivated as Rabi crop. India is top producer of fennel and Rajasthan, Andhra Pradesh, Punjab, Uttar Pradesh, Gujarat, Madhya Pradesh, Karnataka and Haryana are major fennel growing states.</p><br>
<div style="float:right" class="zoom"><img alt="Fennel" src="fenel1.jfif"></div>
<button class="accordion"style="width:75%">Soil</button>
<div class="panel">
<p>All soils rich in organic matter are suitable for fennel cultivation. It gives best result when grown on well drained sandy loam to loamy soils. Avoid shallow soils for fennel cultivation. PH of soil should be in range of 6.5 to 8.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>To prepared fine seed bed, give two to three ploughings in medium soil. For heavy soils, take ploughing for three to four times. Carry out planking after each ploughing to obtained uniform bed.</p>
</div><br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
As it is long duration crop, complete sowing in second fortnight of October. To obtain good yield avoid delay in sowing.<br>
<b>Spacing</b><br>
Under rainfed condition, use spacing of 45 cm between two rows and 10 cm between two crops.<br>
<b>Sowing Depth</b><br>
Sow seeds at depth of 3-4 cm.<br>
<b>Method of sowing</b><br>
Fennel can be directly sown where as in some areas it first raised in nursery then transplanted to main field.</p>
</div><br>
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
    <td>15-25°C</td>
    <td>50-75mm</td>
	<td>18-25°C</td>
	<td>15-25°C</td>
	</tr>
</table></center>
</div><br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>For sowing use seed rate of 4 kg per acre.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Urea</td>
    <td>45</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>Apply if deficiency observed</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>Apply if deficiency observed</td>
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
    <td>20</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>-</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>-</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.amazon.in/s?k=gardening+fertilizer&adgrpid=58135162239&ext_vrnc=hi&gclid=EAIaIQobChMImILR4LCy7QIVUiUrCh2OXgcOEAMYASAAEgK7ovD_BwE&hvadid=381527412172&hvdev=c&hvlocphy=9075215&hvnetw=g&hvqmt=b&hvrand=15319107312895700635&hvtargid=kwd-295089140336&hydadcr=9033_1952770&tag=googinhydr1-21&ref=pd_sl_244746mak3_b" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Weeding</button>
<div class="panel">
<p>Depending upon weed intensity, carry out, one or two hoeing operation. To control weed chemical, apply Pendimethalin@1 ltr/acre.</p>
</div><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>For better germination of seeds, apply pre-sowing irrigation. First irrigation is given 10-15 days after sowing. Depending upon soil type and climate, apply remaining irrigation at interval of 15-25 days. Avoid water stress at flowering and seed formation stage.</p>
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Aphid</b>:If infestation of Aphid is observed, to controlled take spray of Dimethoate 30EC@2ml per litter of water or Methyl demeton 25EC@2ml per liter of water.<br>
<br>
<b> Disease and their control:</b><br>
i.<b>Powdery Mildew</b>: If infestation is observed, take spray of wettable Sulphur@2gm/ltr of water.</p>
</div><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Depending upon variety used, crop is ready to harvest in 180 days, i.e. end of April or end of May. Start harvesting when umbels change its color from green to light yellow. Harvesting is done by plucking umbels. After then umbels are dried in sun for 1-2 days and about 8-10 days in shades.</p>
</div><br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After proper drying, cleaning of fennel seed is carried out. Then depending upon quality, grading of fennel seed is done. After then seeds are packed in Jute bag.</p>
</div><br>
<div class="zoom">
<img alt="Fennel" src="fenel2.jfif">
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