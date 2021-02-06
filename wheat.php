<!DOCTYPE html>
<html>
<head>
<title>Wheat</title>
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
<h3>WHEAT</h3>
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
<br>
<p>Wheat is grown on 13 percent of the cropped area of India. Next to rice, wheat is the most important food-grain of India and is the staple food of millions of Indians, particularly in the northern and north-western parts of the country.                                                                                                                    
It is rich in proteins, vitamins and carbohydrates and provides balanced food. India is the fourth largest producer of wheat in the world after Russia, the USA and China and accounts for 8.7% of the world’s total production of wheat.</p>
<div style="float:right" class="zoom"><img alt="Wheat" src="wheat3.jpg"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>The very important part of wheat farming is selection of an appropriate place.  You must look for a place that has fertile soil for wheat farming. Soil with a loam texture, good structure and moderate water holding capacity are some factors that you must consider to grow wheat.</p>
</div><br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>The soil must be properly prepared before starting the wheat farming. For this you can plough the soil either with disc or mould board plough. Then arrange the soil by giving one deep plough, followed by 2 to 3 light ploughing and planking. Now add natural fertilizers to it.</p>
</div><br>
 <button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <p>Wheat plants can be grown and planted in a wide range of agro-climatic conditions. The plants have high flexibility and hence can be grown in the tropical, sub-tropical zones and temperate zone. The most suitable climate for wheat farming is moist and cool weather.  The plants can easily survive in temperature between 3.5 °C and 35 °C, but the best temperature for wheat farming is between 21 °C and 26 °C.</p>
</div><br>
<button class="accordion" style="width:75%">Seeding</button>
<div class="panel">
<p> Usually 40 to 50 kg seeds are required in one acre of land. Although exact amount of seeds required depends on the variety and sowing method.</p>
</div><br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<table style="width:75%">
  <tr>
    <th>S.NO.</th>
    <th>Fertilizer</th>
    <th>Quantity (per acre)</th>
  </tr>
  <tr>
    <td>1.</td>
    <td>Nitrogen</td>
    <td>50 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>25 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>12 kg</td>
  </tr>
</table>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center>
  </div><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/organic-fertilizer-18957907262.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Planting</button>
<div class="panel">
<p>The wheat seeds must be sown in about 4 to 5 cm inside the soil. Always put the seeds in rows and maintain a spacing of 20-22.5 cm between the rows. Planting or sowing the seeds in the right time is also important as delayed sowing can cause a gradual decline in the production. In India, it is generally sown in the end of October and early November.
<br>Also see that the wheat seeds is properly graded and thoroughly cleaned before sowing. Here you can apply fungicide for treating the seeds.</p>
</div><br>
<button class="accordion">Caring</button>
<div class="panel">
<p>The wheat plants are quite tough and strong. They generally do well in favorable climate conditions and require less care. And if you take some extra care, it will be good and will ensure maximum production.
<br>
<b>Fertilization -</b> you donot need to add more fertilizers if you had previously added it while preparing the soil.
<br><br>
<b>Watering -</b> good and proper irrigation is required for wheat farming. First irrigation must be done after 20 to 25 days after planting the seeds. Then, additional 4 to 5 irrigation should be done after every 20 days.
<br><br>
<b>Weeding -</b> Most of the weeds in your field can be controlled while preparing the soil. Hence make sure you remove the weeds properly. For additional weeding you can use wide  range of chemicals available in the market.
</div><br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p>The wheat plants are susceptible to many pests and diseases like aphids and termites. While some of the common diseases in wheat plants are brown rust, powdery mildew, Flag smut, etc. To control the pests or diseases, you can use good quality pesticides or insecticides. You can also consult with the local agriculture extension office or an expert who can give you proper advice on it.</p>
</div><br>
<button type="button">
<a href="https://www.indiamart.com/proddetail/pesticide-for-wheat-2532399130.html" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting starts when the leaves and stem turn yellow in color and become fairly dry. Remember that the wheat must be harvested before it is dead ripe to avoid loss in yield. Thus, timely harvesting is necessary for good quality as well as maximum production of wheat. When the moisture content in the wheat reaches to about 25 - 30%, then the wheat is ready to be harvested. Combine harvester are available in the market for harvesting, threshing and winnowing of wheat crop in a single operation.</p>
</div>
<br>
<div class="zoom">
<img alt="Wheat" src="wheat5.jpg">
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