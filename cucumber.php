<!DOCTYPE html>
<html>
<head>
<title>Cucumber</title>
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
<h3>CUCUMBER</h3>
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
<p>The botanical name of cucumber is Cucumis sativus. Cucumbers are originated in India. It is a climbing plant which is used as summer vegetable throughout in India. The cucumber fruit is eaten raw or is served as a salad or cooked as a vegetable. The seeds of cucumber are used for oil extraction which is good for body and brain. Cucumbers contain 96% water which is good in summer season. The plants are large sized, leaves are hairy and are triangular in shape and flowers are yellow in color. Cucumber is an excellent source of Mb (Molybdenum) and Vitamin K. Cucumber is used to cure skin problems, kidney and heart problems and is used as alkalizer.</p><br>
<div style="float:right" class="zoom"><img alt="Cucumber" src="cucumber2.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be sown in variety of soils ranging from sandy loam to heavy soil. But a loamy soil which is rich in organic matter and has well drainage system is best for the cucumber farming. The pH ranging from 6-7 is suited best for cucumber farming.</p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For cucumber plantation, it requires well prepared and weed free field. To bring soil to fine tilth, 3-4 ploughings must be done before planting. FYM such as cow dung is mixed with soil to enrich the field. Then nursery beds are prepared having width of 2.5m and at the distance of 60cm.</p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
It is sown in the month of February-March. <br>
<b>Spacing</b><br>
Sow two seeds per place of bed which is 2.5m wide and use spacing of 60cm between seeds.<br>
<b>Sowing depth</b><br>
Seeds are sown at the depth of 2-3cm. <br>
<b>Method of Sowing</b><br>
i.<b>Low tunnel technology:</b> This technology is used to produce early yield of cucumber in early summer. It helps to protect the crop from cold season i.e. in the month of December and January. Beds of 2.5m width are sown in the month of December. Seeds are sown both sides of the bed at the distance of 45cm. Before sowing supportive rods of 45-60cm length are fixed in the soil. Cover the field with plastic sheet (100 gauge thickness) with the help of support rods. Plastic sheet should be removed mainly in the month of February when temperature is suitable outside.<br>
ii.<b>Dibbling method</b><br>
iii.<b>Basing method</b><br>
iv.<b>Layout in ring method</b><br></p>
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
    <td>25-35°C</td>
    <td>120-150mm</td>
	<td>30-35°C</td>
    <td>22-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Seed rate of 1.0 kg is sufficient for one acre of land.<br>
Before sowing seeds, treat them with the suitable chemical to protect them from disease and pests and to increase viability. Seeds are treated with Captan@2gm before sowing. 
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
<p>At the time of land preparation apply fertilizer dose of Nitrogen @40kg (Urea@90kg), phosphorus @20kg (Single phosphate @125kg) and potassium@20kg (Muriate of potash@35kg) as a basal dose. At the time of sowing, apply one third of the Nitrogen dose along with Potassium and Single superphosphate. At the early stage of veins production i.e. one month of sowing apply rest of the dose.</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.com/Cucumber-Fertilizer-Nutrients-Greenway-Biotech/dp/B07DM3K2ZN" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In summer season it requires frequent irrigation and in rainy season it does not require any irrigation. In total it requires 10-12 irrigations. Pre-irrigation is required before sowing then subsequent irrigation is required after 2-3 days of sowing. After second sowing, the crops are then irrigated at the interval of 4-5 days. Drip irrigation is very useful for this crop.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Weed can be controlled by hand-hoeing and also controlled by chemically, use glyphosate@1.6litre per 150 litre of water. Use glyphosate only on weeds not on crop plants.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Fruit fly:</b> It is serious pest found in cucumber. Females fly lay eggs below epidermis of young fruits. Later on maggots feed on pulp afterward fruits starts rotting and get drop.
<b>Treatment:</b> Foliar application of Neem oil @3.0%is given to cure the crop from fruit fly pest.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Anthracnose:</b> It attacks almost all parts of the cucumber which are above the ground. The symptoms are yellowish color circular spots are seen on the older leaves and the circular and sunken spots are seen on the fruit.<br>
<b>Treatment:</b> Fungicidal application of Chlorothalonil and benomyl is given to protect the crop from disease.<br>
ii.<b>Bacterial wilt:</b> It is caused by Erwinia tracheiphila. It affects the vascular tissues of the plant which result in immediate wilting.<br>
<b>Treatment:</b> Spraying of foliar insecticides is done to cure the bacterial wilt.<br>
iii.<b>Powdery mildew:</b> The symptoms are appearance of white powdery spots on upper surface of leaves which causes leaf withering.<br>
<b>Treatment:</b> Application of carbendazim@2gm in 1ltr of water will help to cure powdery mildew. It can also be controlled by fungicidal sprays of Chlorothalonil, benomyl or dinocap.<br>
iv.<b>Mosaic:</b> The symptoms are stunted growth of plant, leaves turn down and fruit knobs become light yellow in color.<br>
<b>Treatment:</b> Application of Diazinon is done to cure mosaic disease. Use of Immidachloprid-17.8%SL @7ml in 10ltr of water is done to cure disease.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/vegetables/cucumber.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plants start yielding in about 45-50 days after sowing. Mainly 10-12 harvestings can be done. Harvesting is mainly done when the seed of cucumber are soft and the fruits are green and young. Harvesting is done with the help of sharp knife or any sharp object. It gives an average of 33-42qtl/acre of yield.</p>
</div>
<br>
<button class="accordion">Seed Production</button>
<div class="panel">
<p>Brown color fruits are best for seed production. For seed extraction, fruit pulp is taken out in fresh water for 1-2 days for the easy separation of seeds. The seeds are then rubbed with hands and as a result heavy seeds will settle down in water and then they are preserved for further use.</p>
</div><br>
<div class="zoom">
<img alt="Cucumber" src="cucumber2.jpg">
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
