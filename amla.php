<!DOCTYPE html>
<html>
<head>
<title>Amla</title>
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
<h3>AMLA</h3>
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

<p> Amla is commonly known as an Indian gooseberry or Nelli. It is known for its high medicinal properties.  Its fruits are used for preparing various drugs. Drugs prepared from amla used for treatment of anemia, sores, diarrhea, toothache, and fever. Fruits are the rich source of Vitamin-C. The green fruits of amla are also used in making pickles. Many products such as shampoo, hair oil, dye, tooth powder and face creams are made from amla. It is a branching tree with average height of 8-18 m with glabrous branches. Flowers are greenish-yellow in color and are of two types i.e. male flower and female flower. Fruits are pale-yellow in color and are 1.3-1.6 cm in diameter. Uttar Pradesh and Himachal Pradesh are major amla growing states in India.</p><br>
<div style="float:right" class="zoom"><img alt="amla" src="amla1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p> Owing to its hardy nature it is grown in variety of soils. It is grown in slightly acidic to saline soils and can be grown in calcareous soil. It gives best result when grown under fertile-loamy soil with good drainage system. It can also tolerate moderate alkaline soil. It requires pH of soil ranging 6.5-9.5. Avoid cultivation in heavy soils. </p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
<p>For Amla plantation, it required well ploughed and organic soil. To bring soil to fine tilth, plough land before planting. Organic fertilizers such as FYM are mixed with the soil. Then nursery beds are prepared 2.5cm deep and 15cm x 15cm size.
 </p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Amla cultivation is done in the month of July to September. In Udaipur cultivation is done in the month of January to February.
<br>
<b>Spacing</b><br>
Sow budded seedling at a distance of 4.5m x 4.5m in the month of May-June.
<br> 
<b>Sowing Depth</b><br>
The pits of 1 metre square are dug and are left as such for 15-20 days for exposure to sun.
<br>
<b>Method of Sowing</b><br>
Transplanting of budded seedlings in main field.
<br></p>
</div>
<br>
<button class="accordion">Climate</button>
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
    <td>46-48°C</td>
    <td>630-800 mm</td>
	<td>22-30°C</td>
    <td>8-15°C</td>
  </tr>
</table></center>
</div><br>

<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Nutrient Requirement (gm/plant)</b>
<table>
<tr>
<th>Nitrogen</th>
<th>Phosphorus</th>
<th>Potash</th>
</tr>
<tr>
<td>100</td>
<td>50</td>
<td>100</td>
</tr>
</table>
</center>
<br> 
<p>At the time of land preparation, apply 10 kg FYM and mix well with soil. Apply fertilizer dose of N:P:K in the form of nitrogen @100 gm/plant, phosphorus @50 gm/plant and potassium @100 gm/plant. Fertilizer dose is given to one year old plant and increased constantly up to 10 years. Full dose of phosphorus and half dose of potassium and nitrogen are given as basal dose in the month of January-February. The remaining half dose is given in the month of august. In sodic soils, boron and zinc sulphate @100-500g is given as per tree age and vigour.
</p>
</div>
<br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>In summer, apply irrigation with interval of 15 days and in winter, give water through drips @25-30litres/day/tree in October-December month. In monsoon month, it does not require irrigation. Avoid irrigation during the flowering period.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do frequent weedings to make field weed free. Training and pruning is also done. Criss cross branches are cut and only 4-5 straight branches are left behind for further growth.
<br>Mulching is also an effective way to control soil weeds. In summer, mulching is done from the base of tree up to 15-10cm of the trunk.
</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Bark eating caterpillar:</b> They damage the stem and bark by feeding themselves.<br>
Application of quinalphos @0.01% or fenvalerate @0.05% is given in their holes to protect from insect.
  <br><br>
<b>Gall caterpillar:</b> They bore in apical meristem and makes tunnel.<br>
Application of Dimethoate @0.03% is given to control the pest. <br><br>
<b>Disease and their control:</b><br>
<b>Rust:</b> Circular red rust appear on the leaves and on fruits.<br>
Application of Indofil M-45 @0.3% is given twice. Once is given in early September and then after 15 days to control crop from diseases. <br><br>
<b>Internal necrosis:</b> mainly caused due to the deficiency of boron. Tissues turn brown and then black are the symptoms of this disease.
<br>Application of boron @0.6% is done in the month of September to October to get rid of this disease.<br><br>
<b>Fruit rot:</b>The symptoms of this disease are swelling and color changing of fruits.
<br>Application of borax or NaCl @0.1%-0.5% is done to cure from this disease.
<br><br>
</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Plant starts yielding in about 7-8 years after planting. Harvesting is done in the month of February when fruits are green in color and have maximum ascorbic acid content. Harvesting is done by vigorous shaking of tree. When fruits get fully mature they turn into dull greenish-yellow color. For processing and seeds extraction, mature fruits are used.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, grading is done. Then fruits are packed in bamboo baskets or crates or wooden boxes. For the less spoilage of crop perfect packing is done and quick transport is required. From amla fruits several products like amla powder, churna, chavanprash, arista and sweet preserves are made. </p>
</div><br>
<div class="zoom">
<img alt="amla" src="amla2.jpg">

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
<br><br><br><br>
</header>
</body>
</html>
