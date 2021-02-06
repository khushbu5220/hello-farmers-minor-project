<!DOCTYPE html>
<html>
<head>
<title>Banana</title>
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
<h3>Banana Cultivation</h3>
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
<p>Banana is the second most important fruit crop of India next to mango. It is available round the year and because of its taste, nutritive and medicinal value. It is favorite fruit of all classes of people. It is a rich source of carbohydrate and vitamins particularly vitamin B. Banana helps to reduce the risk of heart diseases. Also, it is recommended for patients suffering from high arthritis, blood pressure, ulcer, gastroenteritis and kidney disorders. From banana, various products are made such as chips, banana puree, jam, jelly, juice, etc. Banana fibre is used to make items like bags, pots and wall hangers. Rope and good quality paper can be prepared from banana waste. In India, banana ranks first in production and third in the area among fruit crops. Within India, Maharashtra has the highest productivity. The other major banana producing states are Karnataka, Gujarat, Andhra Pradesh and Assam.</p><br>
<div style="float:right" class="zoom"><img alt="banana" src="banana1.jfif"></div>

<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It is grown in variety of soils ranging from poorest to the richest type of soils such as deep silty, clay, loam and rich loamy soil is suited best for banana farming. The soil having pH 6-7.5 is preferred for banana cultivation. For banana growing, select soil having good drainage, adequate fertility, and moisture capacity. Soils which are rich in nitrogen content and have adequate phosphorus content and high level of potash are good for banana cultivation. Avoid waterlogged, poor aerated and nutritionally deficient soils. Also avoid sandy, saline, calcareous and extremely clayey soils.
</p></div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Plough the land thoroughly atleast for 3-4 times in summer. At the time of last ploughing add about 10 tonnes of well rotten FYM or well decomposed cow dung and mix it well in soil. To level soil used blade harrow or laser leveler. In areas where nematode problem is prevalent, nematicides and fumigants are also added to pits before planting.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement (gm/tree)</b></p>
<table style="width:50%">
  <tr>
    <th>MONTH</th>
    <th>UREA</th>
    <th>DAP</th>
	<th>MOP</th>
  </tr>
  <tr>
    <td>February-March</td>
    <td>-</td>
    <td>190</td>
	<td>-</td>
  </tr>
  <tr>
    <td>March</td>
    <td>60</td>
    <td>-</td>
	<td>60</td>
  </tr>
  <tr>
  <td>June</td>
  <td>60</td>
  <td>-</td>
  <td>60</td>
  </tr>
  <tr>
  <td>July</td>
  <td>80</td>
  <td>-</td>
  <td>70</td>
  </tr>
  <tr>
  <td>August</td>
  <td>80</td>
  <td>-</td>
  <td>80</td>
  </tr>
  <tr>
  <td>September</td>
  <td>80</td>
  <td>-</td>
  <td>80</td>
  </tr>
</table>
<br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br>
  <button type="button">
<a href="https://www.amazon.in/Biosar-Gromax-Banana-1kg-Micronutrient/dp/B00XPMMJOK" class="button button1">Buy Fertilizer Here</a>
</button><br>
<br>
 <button class="accordion">Weather requirement</button>
<div class="panel">
  <p>Temperature: 15ºC - 35ºC<br>Rainfall: 650-750 mm</p></div>
<br>
<button class="accordion">Varieties</button>
<div class="panel">
<p>Banana is available in many different types and varieties all over the world. Some popular wheat varieties available and cultivated in India are as follows:</p>
<br>
<center>
<table style="width:50%">
<tr>
<th>S.No.</th>
<th>STATES</th>
<th>VARIETY GROWN</th>
</tr>
<tr>
<th>1.</th>
<th>Andhra Pradesh</th>
<th>Dwarf Cavendish, Robusta, Rasthali, Amritpant, Thellachakrakeli, Karpoora Poovan, Chakrakeli, Monthan and Yenagu Bontha</th>
</tr>
<tr>
<th>2.</th>
<th>Assam</th>
<th>Jahaji (Dwarf Cavendish), Chini Champa, Malbhog, Borjahaji (Robusta), Honda, Manjahaji, Chinia (Manohar), Kanchkol, Bhimkol, Jatikol, Digjowa, Kulpait, Bharat Moni</th>
</tr>
<tr>
<th>3.</th>
<th>Bihar</th>
<th>Dwarf Cavendish, Alpon, Chinia , Chini Champa, Malbhig, Muthia, Kothia , Gauria</th>
</tr>
<tr>
<th>4.</th>
<th>Gujarat</th>
<th>Dwarf Cavendish, Lacatan, Harichal (Lokhandi), Gandevi Selection, Basrai, Robusta, G-9, Harichal, Shrimati </th>
</tr>
<tr>
<th>5.</th>
<th>Jharkhand</th>
<th>Basrai, Singapuri</th>
</tr>
<tr>
<th>6.</th>
<th>Karnataka</th>
<th>Dwarf Cavendish, Robusta, Rasthali, Poovan, Monthan, Elakkibale</th>
</tr>
<tr>
<th>7.</th>
<th>Kerala</th>
<th>Nendran (Plantain), Palayankodan (Poovan), Rasthali, Monthan, Red Banana, Robusta</th>
</tr>
<tr>
<th>8.</th>
<th>Madhya Pradesh</th>
<th>Basrai</th>
</tr>
<tr>
<th>9.</th>
<th>Maharashtra</th>
<th> Dwarf Cavendish, Basrai, Robusta, Lal Velchi, Safed Velchi, Rajeli Nendran, Grand Naine, Shreemanti, Red Banana</th>
</tr>
<tr>
<th>10.</th>
<th>Orissa</th>
<th>Dwarf Cavendish, Robusta, Champa, Patkapura (Rasthali)</th>
</tr>
<tr>
<th>11.</th>
<th>Tamil Nadu</th>
<th>Virupakshi, Robusta, Rad Banana, Poovan, Rasthali, Nendran, Monthan, Karpuravalli, Sakkai, Peyan, Matti</th>
</tr>
<tr>
<th>12.</th>
<th>West Bengal</th>
<th>Champa, Mortman , Dwarf Cavendish, Giant Governor, Kanthali, Singapuri</th>
</tr>
</table>
</center></div>
<br>

<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>If the spacing of 1.8x1.5m is adopted, near about 1452plants fits per acre. For spacing of 2mx2.5m, 800plants are accommodated in one acre.<br>

<b>Seed Treatment:</b>
For planting, use healthy and uninfected sucker or rhizomes. Before planting, wash suckers and then dip in a solution of Chlorpyrifos 20EC@ 2.5ml/Litre of water. To protect the crop from rhizome weevil, before planting, dip suckers in Carbofuran 3%CG@33gm/sucker after then dry them in shade for 72 hours. To prevent suckers from nematode attacked, treat suckers with Carbofuran 3%CG@50gm/sucker. For fusarium wilt control, dip suckers in Carbendazim @2gm/litre of water solution for about 15–20 minutes.
 </p></div>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Mid-February to first week of March is best time for sowing.
<br>

<b>Spacing:</b>
In north India, coastal belt and areas having high humidity and low temperature i.e. below 5-7°C, the planting distance should not be less than 1.8m x 1.8m.
<br>
 
<b>Sowing Depth:</b>
Banana sucker is planted in a pit size of 45cm x 45cm x 45cm or 60x60x60cm. Pits are left open in sun; it will help in killing the harmful insects. Fill pits with topsoil mixed with 10kg of FYM or well decomposed cow dung, Neem cake@250gm and Carbofuran@20gm. Plant suckers in the center of the pit and gently pressed the soil around it. Avoid deep planting.
<br>

<b>Method of Sowing:</b>
Transplanting method is used for sowing.</p></div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization:</b>Application of urea@450gm (Nitrogen@200gm) and MOP@350g (K2O@210gm) is done in 5 equal splits.<br>
<br><br>
<b>Watering:</b>Banana is a shallow rooted crop requires large quantity of water for increasing productivity. Overall it requires 70-75 irrigations for good yield. Provide irrigation at an interval of 7-8days in winter where as in summer provide irrigation at an interval of 4-5days. In the rainy season, provide irrigation if required. Remove excess water from the field as it will affect plant establishment and growth.
<br>
Advance irrigation technology like drip irrigation can be used. Research shows that use of drip irrigation in banana saves about 58% of water and increasing yield by 23-32%. In drip irrigation, apply water@5-10 litres/plant/day from planting to 4th month, 10-15 litres/plant/day from 5th to shooting and 15 litres /plant/day from shooting to till 15 days prior to harvest.
<br><br>
<b>Weeding:</b>Remove weeds before planting by deep ploughing and cross harrowing. Take pre-emergence application of Diuron 80% WP@800gm/150Litre of water/acre, if infestation by the weed species. </p>
</div><br>

<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Corm weevil:</b> If the infestation of corm weevil is observed, then to control, apply Carbaryl@10– 20gm/plant in the soil around the stem.
<br>
<br>
<b>Rhizome weevil:</b>As a preventive measure, remove dried leaves and keep the orchards clean. Dip the rhizome in Methyl oxydemeton@2ml/Litre of solution before planting. Apply castor cake@250gm or Carbaryl@50gm or Phorate@10gm per pit before planting.
<br><br>
<b> Banana Aphids:</b> If the infestation is observed, take spray of Methyl demeton@2ml/litre or Dimethoate 30EC@2ml/litre of water.
<br><br>
<b>Thrips and Lace wing bugs:</b>Take spray of Methyl demeton 20EC@2ml/litre of water or Monocrotophos 36 WSC@2ml/litre of water.
<br><br>
<b>Nematode: </b>To prevent suckers from nematode attacked, treat suckers with Carbofuran 3%CG@50gm/sucker. If suckers treatment is not done, apply 40gm of Carbofuran around each plant one month after planting. 
<br><br>
<b> Disease and their control:</b><br>
<b>Sigatoka leaf spot:</b> Remove and burn infected leaves. Provide proper drainage in the field to avoid waterlogging conditions.
<br>Take spray of any one of fungicides i.e Carbendazim@2gm/litre or Mancozeb@2gm/litre or Copper oxychloride@2.5gm/litre or Ziram@2ml/litre of water or Chlorothalonil@2gm/litre of water. Add 5ml of wetting agent like Sandovit, Teepol etc. per 10 litres of spray fluid.
<br><br>
<b>Anthracnose:</b>If the infestation is observed, take spray Copperoxychloride @2.5gram/Litre or Bordeaux mixture@10gram/Litre or chlorothalonil fungicide @2gm/litre or Carbendazim@3gm/Litre of water.
<br><br>
<b>Panama Disease: </b>If infection observed in the field, uproot and destroy severely affected plants away from the field. Then apply lime@1 – 2 kg in the pits.
<br>Before planting dipped suckers in Carbendazim@2gm/Litre of water. Also, do bi-monthly drenching of Carbendazim starting six months after planting.
 
<br><br>
<b>Fusarium wilt:</b>Remove of infected trees and apply lime @1-2 Kg/pit.<br>
Do capsule application of Carbendazim@60mg/capsule/tree on 2nd, 4th and 6th month after planting. Do spot drenching of Carbendazim@2gm/Litre of water.
<br><br>
<b>Bunchy Top:</b>It is caused due to aphid infestation, Removed and burn diseased plant parts away from the field. If infestation of aphid is observed, spraying of Dimethoate@20ml/10Litre of water.
<br><br></p></div>
<br>
<button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/fruits/banana.html?dir=asc&mode=list&order=price&pd_type=0&pest_disease=Stem+Weevil" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>The crop is ready for harvesting 11-12months after planting. Carry out harvesting when banana is slightly or fully mature also according to market requirement. For local market, harvest fruits at maturity stage and for long distance transport, harvest fruit at 75-80 % maturity. Whereas for export purpose, carry out harvesting, the day before or the same day of shipment. Harvest fruit early in the day in the summer. In winter, avoid harvesting too early in the morning.
</p></div>
<br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting, curing, washing, grading, packaging, storage, transportation and marketing etc., are the main post harvest operations.
Grading is done on basis of size, color, and maturity. Remove small, overripe, damaged and disease infected fruits. Fruits are generally harvested early in the season at a pre-mature stage to capture the market. Then mature fruits are ripened with lower doses of Ethrel for uniform colour development.
 </p>
</div>
<br>
<div class="zoom">
<img alt="banana" src="banana2.jfif">
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
