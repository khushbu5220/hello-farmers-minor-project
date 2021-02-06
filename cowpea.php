<!DOCTYPE html>
<html>
<head>
<title>Cowpea</title>
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
<h3>Cowpea Cultivation</h3>
</div>
<nav>
<br>
<br>
<a href="https://www.accuweather.com/">
<img alt="wheather" src="wheather.jfif" width="70" height="70">
<br>Weather
</a>
<br>
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
<p>Cow pea is oldest annual legume grown throughout India for green pods, dry seeds, green manure and fodder. It is considered as crop of African origin. It is drought hardy crop also quick growing thus supressed weeds during initial stage. It also help to conserved soil and moisture. Cowpea is a good source of protein, calcium and iron. It is cultivated in irrigated areas of Punjab.</p><br>
<div style="float:right" class="zoom"><img alt="cowpea" src="cowpea1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown in variety of soils but gives best result when grown on well drained loamy soils.</p></div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>It required normal bed preparation like other pulse crops. Give two ploughing to bring soil to fine tilth and carry out planking after each ploughing.</p>
</div><br>
<button class="accordion" style="width:75%">Fertilizer</button>
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
    <td>17 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>140 kg</td>
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
    <td>7.5 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>22 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>-</td>
  </tr>
</table>
<br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br>
  <button type="button">
<a href="https://www.google.com/search?q=buy+fertilizer+for+cowpea&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk02grl_vLvmWB92JjfR9Akx1G3fC5A:1602183528721&source=lnms&tbm=shop&sa=X&ved=2ahUKEwj6juDg1qXsAhVJzjgGHegGDw4Q_AUoAXoECAwQAw&biw=1536&bih=631" class="button button1">Buy Fertilizer Here</a>
</button>
<br>
<br>
 <button class="accordion"> Weather requirement</button>
<div class="panel">
  <p>Temperature: 22-35°C<br>Rainfall: 750-1100mm</p></div>
<br>
<button class="accordion"> Varieties</button>
<div class="panel">
<p>Cowpea is available in many different types and varieties all over the world. Some popular wheat varieties available and cultivated in India are as follows:</p>
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
<th>Cowpea 88</th>
<th>Recommended for cultivation throughout state. It is grown for fodder as well as for grain purpose. Its pods are large and seeds are bold having chocolate brown seed color. It is resistant to yellow mosaic and anthracnose disease. It gives average seed yield of 4.4 qtl/acre and 100 qtl/acre of green fodder.  
</th>
</tr>
<tr>
<th>2.</th>
<th>CL 367</th>
<th>It can be grown for fodder as well as for grain purpose. It bear large no of pods. Its seeds are small with creamy white color. It give resistance to yellow mosaic virus and anthracnose disease. It give average seed yield of 4.9 qtl/acre and 108 qtl/acre of green fodder. 
</th>
</tr>
<tr>
<th>3.</th>
<th>Kashi Kanchan</th>
<th>Dwarf and bushy variety, suitable for cultivation in summer as well as rainy season. Pods are soft and of dark green color. It give average pod yield of 60-70 qtl/acre.
</th>
</tr>
<tr>
<th>4.</th>
<th>Pusa su Komal</th>
<th>Gives average yield of 40 qtl/acre. </th>
</tr>
<tr>
<th>5.</th>
<th>Kashi Unnati</th>
<th>Pods are of soft and light green color. For first cutting ready to harvest in 40-45 days after sowing. Gives average yield of 50-60 qtl/acre.
</th>
</tr>
</table>
</center></div>
<br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>When sown for fodder purpose, use seed rate of 20-25 kg for variety of Cowpea 88 and seed rate of 12 kg for variety of CL 367.<br>

<b>Seed Treatment:</b>
Before sowing, treat seeds with Emisan 6@2.5gm/kg of seeds or Carbendazim 50%WP@2gm per kg of seeds. It will protect seeds from seed rot and seedling mortality.
</p></div>
<br>
<button class="accordion"> Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Best time for sowing is from March to Mid-July.<br>

<b>Spacing:</b>
while sowing use row to row spacing of 30 cm and plant to plant spacing of 15 cm.<br>
 
<b>Sowing Depth:</b>
sowing depth should be 3-4 cm.   <br>

<b>Method of Sowing:</b>
Sow seeds with help of pora or seed cum fertilizer drill.</p></div>
<br>

<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization:</b>At time of sowing, apply N@7.5 kg in form of Urea@17kg/acre along with P@22kg in form of Single Super Phosphate@140kg/acre. Cowpea respond well to Phosphorus fertilizers. It helps to improves root as well as plant growth, plant nutrient uptake, nodulations etc.
<br><br>
<b>Watering:</b>For good growth, on an average 4-5 irrigations are required. When crop is sown in May month, apply irrigation at interval of 15 days till monsoon arrival.
<br><br>
<b>Weeding:</b>To protect crop from weeds, apply Pendimethalin@750ml/acre in 200 Ltr of water within 24 hours of sowing. </p></div>
<br>
<br>
<button class="accordion"> Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Jassid and Black Aphid:</b> If infestation of jassid and black aphid is observed, take spray of Malathion 50EC@200ml/acre in 80-100 Litres of water.
<br>
<br>
<b>Bihar hairy caterpillar:</b> Its infestation is high in month of August to November. To protect crop from this pest, take one row of sesame seeds around cowpea field at time of sowing.
<br><br>

<b> Disease and their control:</b><br>
<b>Seed rot and seeding mortality:</b> 
It is caused by various seed-borne microflora. The infected seeds are shrivelled and discoloured. Infected seedlings are killed before these emerge out of soil and cause poor stand of the crop. For its control treat seed with Emisan 6 @2.5 g/kg seed or Bavistin  50WP @ 2g/kg seed before sowing.
</p></div><br>
<button type="button">
<a href="https://www.google.com/search?q=buy+pesticides+for+cowpea&rlz=1C1CHBD_enIN921IN921&sxsrf=ALeKk01PGQfK60NqzleFqvvfxNgkb60srg:1602184915835&source=lnms&tbm=shop&sa=X&ved=2ahUKEwjh7Zb226XsAhW1oekKHRm8CZwQ_AUoAXoECA4QAw&biw=1536&bih=631" class="button button2">Buy Pesticide Here</a>
</button><br><br>

<button class="accordion"> Harvesting</button>
<div class="panel">
<p>55 to 65 days after, crop is ready for harvesting.</p>
</div>
<br>
<div class="zoom">
<img alt="cowpea" src="cowpea2.jfif">

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
