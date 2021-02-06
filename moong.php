<!DOCTYPE html>
<html>
<head>
<title>Moong</title>
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
<h3>GREEN GRAM</h3>
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<br><br>
<p>Green gram also known as moong is one of the main pulse crop of India. It is a rich source of Protein along with fibre and iron. It can be cultivated as Kharif as well as summer crop. In Punjab, near about 5.2 thousand hectares of area is under moong cultivation with total production of 4.5 thousand tones (2012-2013).</p><br>
<div style="float:right" class="zoom"><img alt="moong" src="moong1.jfif"></div>

<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be cultivated on wide range of soil. Gives best result when grown on well drained loamy to sandy-loam soils. Saline and water logged soils are not suitable for cultivation.</p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
  <p>To bring soil to fine tilth give two to three ploughing. After each ploughing carry out planking.</p>
</div><br>
<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>UREA</th>
    <th>SSP</th>
	<th>MURIATE OF POTASH</th>
  </tr>
  <tr>
    <td>12</td>
    <td>100</td>
    <td>-</td>
  </tr>
</table> <br>
<br>
<p><b>Nutrient Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>NITOGEN</th>
    <th>PHOSPHOROUS</th>
	<th>POTASH</th>
  </tr>
  <tr>
    <td>5</td>
    <td>16</td>
    <td>-</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center>
  </div>
  <br>
   <button type="button">
<a href="https://www.amazon.in/Homemade-Vermicompost-Fertilizer-Organic-Nutrient/dp/B07DTJZCP9/ref=sr_1_30?adgrpid=58997522396&dchild=1&ext_vrnc=hi&gclid=CjwKCAjwoc_8BRAcEiwAzJevtYK3ngd5MxNbZwR-cS4Y-lACnyAZdFT2Phmw90Ix0vG-UnN7FLSbrhoCEK4QAvD_BwE&hvadid=294103130568&hvdev=c&hvlocphy=9061659&hvnetw=g&hvqmt=b&hvrand=8924950146583784581&hvtargid=kwd-450567256708&hydadcr=5877_1738710&keywords=fertilizer+for+green+plants&qid=1603543303&sr=8-30&tag=googinhydr1-21" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Weather requirement</button>
<div class="panel">
  <p>Temperature: 25°C - 35°C<br>Rainfall: 60-90 cm</p></div>
<br>

<button class="accordion">Varieties</button>
<div class="panel">
<p>Sunflower is available in many different types and varieties all over the world. Some popular wheat varieties available and cultivated in India are as follows:</p>
<br>
<center>
<table style="width:50%">
<tr>
<th>S.No.</th>
<th>VARIETY</th>
<th>SPECIALITY</th>
</tr>
<tr>
<th>1.</th>
<th>SSL 1827</th>
<th> This variety is made by cross breeding with green gram and Ricebean. It gives an average yield of 5.0qtl/acre. The variety is resistant to yellow mosaic virus.</th>
</tr>
<tr>
<th>2.</th>
<th>ML 2056</th>
<th>Suitable for Kharif season. Plants are of medium height. Ready to harvest in 75 days. Each pod contains 11-12 seeds. It is tolerant to yellow mosaic and cercospora as well as bacterial leaf spots. Also it is tolerant to sucking pest like jassid and white fly. Gives average yield of 4.5 qtl/acre.</th>
</tr>
<tr>
<th>3.</th>
<th>ML 818</th>
<th>Suitable for kharif season. Plants are of medium height. Ready to harvest in 80 days. Each pod contains 10-11 seeds. It is moderately resistant to yellow mosaic and cercospora as well as bacterial leaf spots. Gives average yield of 4.9 qtl/acre. </th>
</tr>
<tr>
<th>4.</th>
<th>PAU 911</th>
<th> Suitable for kharif season. Ready to harvest in 75 days. Each pod contains 9-11 seeds. Gives average yield of 4.9 qtl/acre. Grains are medium bold and green.
</th>
</tr>
<tr>
<th>5.</th>
<th>SML 668</th>
<th> Suitable for summer sowing. Plants are dwarf. Ready to harvest in 61 days. Pods are long and each pod contains 10-11 seeds. It is tolerant to yellow mosaic and thrips. Gives average yield of 4.5 qtl/acre.
</th>
</tr>
<tr>
<th>6.</th>
<th>SML 832</th>
<th>Suitable for summer sowing. Plants are medium height. Ready to harvest in 62days. Each pod contains 10 seeds. Grains are medium sized with shinning green color. Gives average yield of 4.6 qtl/acre.
 </th>
</tr>
<tr>
<th>7.</th>
<th>TMB 37</th>
<th>Suitable for spring or summer season. The variety is released by PAU for general cultivation in Punjab. Ready to harvest in 60days.</th>
</tr>

</table>
</center>
</div>
<br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For Kharif season, use seed rate of 8-9 kg/acre whereas for summer season used seed rate of 12-15 kg/acre.<br>
<b>Seed Treatment</b><br>
Seed should be treated with Captan or Thiram @3 gm/kg of seed before sowing.
<br>
<center>
<table>
<tr>
<th>Fungicide/Insecticide name</th>
<th>Quantity (Dosage per kg seed)</th>
</tr>
<tr>
<td>Captan</td>
<td>3gm</td>
</tr>
<tr>
<td>Thiram</td>
<td>3gm</td>
</tr>
</table>
</div>
<br>
<button class="accordion">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Optimum time for kharif sowing is first fortnight of July. Optimum time for summer moong cultivation is from March to April.<br>
<b>Spacing</b><br>
Use row spacing of 30 cm and plant to plant spacing of 10 cm for Kharif sowing. For Rabi sowing use row spacing of 22.5 cm and plant to plant spacing of 7 cm.<br> 
<b>Sowing Depth</b><br>
Sow seeds at depth of 4-6 cm.<br>
<b>Method of sowing</b><br>
For sowing drill/pora/kera methods are used.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization –</b>5 kg of Nitrogen (12 kg of Urea), 16 kg of P2O5 (100 kg of Superphosphate) should be applied per acre at time of sowing.<br><br>
<b>Watering –</b>Moong is mainly grown as a kharif crop. If needed provide irrigation depending upon the climatic conditions.
<br>For summer season crop, three to five irrigations are required depending upon soil type and climatic condition. For good yield stop irrigation 55 days after sowing.
<br><br>
<b>Weeding -</b>To keep field weed free, do one or two hoeing, first hoeing four week after sowing and second hoeing two week after first hoeing are required. To control weed chemically, apply Fluchloralin @ 600ml/acre or Trifluralin @ 800 ml/acre before sowing (take sowing on same day). Also after sowing, within two days, take spray of Pendimethalin @ 1Ltr/acre in 100-200 Ltrs of water.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Sucking pest (Jassid, aphid, white fly):</b> If infestation is observed, take spray of Malathion @ 375ml or Dimethoate @ 250ml or Oxydemeton Methyl @ 250ml/acre.<br>
<br>For white fly control, take spray of Thiamethoxam @40gm Triazophos@600ml/acre. If necessary take second spray 10days after first spray.
<br><br>
<b>Mite:</b> If infestation is observed take spray of Dimethoate 30EC @150ml/acre.
<br><br>
<b>Blister beetle:</b> They cause damage at flowering stage. They feed on flowers, buds thus prevent grain formation.<br>
If infestation is observed, take spray of Indoxacarb 14.5SC @ 200ml or Acephate 75SC @ 800gm/acre. Carry out spraying in evening hours and if necessary take second spray 10days after first spray.
<br><br>
<b>Pod Borer:</b> Serious pest cause heavy loss in yield. If infestation is observed, take spray of Indoxacarb 14.5SC @ 200ml or Acephate 75SP @ 800gm or Spinosad 45SC @ 60ml/acre. Repeat spray after two weeks.
<br><br>
<b>Tobacco caterpillar:</b> If infestation is observed, take spray of Acephate 57SP @ 800gm/acre or Chlorpyriphos 20EC @1.5Ltr/acre. If necessary take second spray 10days after first spray.
<br><br>
<b>Hairy Caterpillar:</b> To control hairy caterpillar pick caterpillar manually and destroyed by crushing or putting in kerosene water when infestation is low. In case of high infestation, take spray of Quinalphos @500ml or Dichlorvos @200ml/acre.
<br><br>
<b>Disease and their control:</b><br>
<b>Yellow mosaic virus:</b> It is spread due to white fly. Irregular yellow, green patches are observed on leaves. Pods not developed on infected plants.<br>
Grow yellow mosaic virus resistant varieties. For white fly control, take spray of Thiamethoxam@40gm, Triazophos@ 600ml/acre. If necessary take second spray 10days after first spray.<br>
<br>
<b>Cercospora leaf spot:</b> As a preventive measure, do seed treatment with Captan and Thiram. Use cercospora leaf spot resistant variety. If infestation is observed take spray of Zineb 75WP @400gm/acre. Take two to three sprays at interval of 10 days.<br></p>
</div>
<br>
<button type="button">
<a href="https://www.amazon.in/WizAgro-Organic-Fertilizer-Pesticide-Plants/dp/B08DYHNHD4/ref=sr_1_18?dchild=1&keywords=pesticides+for+green+plants&qid=1603543790&sr=8-18" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Best time of harvesting when 85% of pods get matured. Over-ripening of pods should be avoided as produce may be lost due to shattering. Do harvesting with sickle. After harvesting carried out threshing. After threshing, seeds are cleaned and dried in the sunshine.</p>
</div><br>
<div class="zoom">
<img alt="moong" src="moong2.jfif">

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
