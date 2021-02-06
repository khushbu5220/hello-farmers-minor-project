<!DOCTYPE html>
<html>
<head>
<title>Cabbage</title>
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
<h3>CABBAGE</h3>
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

<p>It is leafy green or purple plant grown as annual vegetable crop. These are rich source of vitamin A and C also it contains minerals like phosphorus, potassium, calcium, sodium and iron. Cabbage can be eaten as raw as well as in cook form. In India, cabbage is grown mainly in winter in the plains region.</p><br>
<div style="float:right" class="zoom"><img alt="cabbage" src="cabbage1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It can be grown on wide range of soil, but gives best result when grown on well drained loamy soil having good moisture holding capacity. pH of soil should be in range of 5.5 to 6.5. It cannot thrives well in highly acidic soils.</p>
</div>
<br><br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
  <p>Bring soil to fine tilth by ploughing land thoroughly. Give ploughing for 3-4times then do levelling of soil. Add well decomposed cow dung and mixed well in soil at time of last ploughing.</p>
</div>
<br><br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:magenta">
    <th>Temperature</th>
    <th>Rainfall</th>
	<th>Harvesting Temperature</th>
	<th>Sowing Temperature</th>
  </tr>
  <tr style="background-color:orchid">
    <td>12-30°C</td>
    <td>10-15 (Winter)</td>
	<td>10-15 (Winter)</td>
    <td>25-30°C</td>
  </tr>
  <tr style="background-color:violet">
  <td>-</td>
  <td>21-26 (Summer)</td>
  <td>21-26 (Summer)</td>
  <td>-</td>
  </tr>
</table>
</center>
<br><br>
</div><br>
<button class="accordion">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
September to October is ideal planting time in plain areas.<br>
<b>Spacing</b><br>
Use spacing of 45 x 45 cm for early season crop whereas for late maturing crop use spacing of 60 x 45 cm.<br> 
<b>Sowing Depth</b><br>
Sow seeds at depth of 1-2 cm.<br>
<b>Method of Sowing</b><br>
For Sowing dibbling method and transplanting methods can be used.<br>
Sow seeds in nursery and apply irrigation, fertilizer dose as per requirement. Seedlings are ready to transplant within 25-30 days after sowing. For transplantation use three to four weeks old seedlings.</p>
</div>
<br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For sowing use seed rate of 200-250 gm per acre is required.<br>
<b>Seed Treatment</b><br>
Before sowing dip seeds in hot water (50°C for 30 min) or streptocycline@0.01gm/Ltr for two hours. After treatment dry them in shade and then sow on bed. Blackrot mostly observed in Rabi. As a preventive measure seed treatment with Mercury chloride is essential. For that dip seeds in Mercury chloride@1gm/Ltr solution for 30 min after that dry them in shed. Crop grown in sandy soils are more prone to stem rot. To prevent it do seed treatment with Carbendazim 50%WP@3gm/kg seed.<br>
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
    <td>40</td>
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
    <td>25</td>
  </tr>
</table></center>
<br> 
<p>Apply well decomposed cow dung@40 tonnes per acre in soil along with Nitrogen@50kg, Phophorus@25kg and Potash@25kg in form of Urea@110kg, Single Superphosphate@155kg and Muriate of Potash@40kg. Apply whole quantity of cowdung, SSP and MOP and half quantity of Urea before transplanting. Apply remaining quantity of Urea four week after transplanting as top dressing. <br>
To get better flower (Curd) set and to obtain good yield, spray Water Soluble Fertilizer (19:19:19)@5-7gm/Ltr water during the early plant growth. 40days after transplanting take spray of 12:61:00@4-5gram + micronutrients@2.5 to 3 gram + Boron@1gm per Ltr water. To improve curd quality, apply Water Soluble Fertilizer 13:00:45@8-10gm/Ltr of water at the time of curd development.<br>
Do soil testing and if Magnesium deficiency is observed to overcome Mg deficiency apply Magnesium sulphate@5gm/Ltr, 30-35 days after transplantation and for Calcium deficiency apply Calcium Nitrate@5gm/Ltr, 30-35 days after transplanting.<br>
If Hollow and sometimes discolored stems are observed, Also curds become brown and leaves may get roll and curl it is due to Boron deficiency, apply Borax@250gm-400gm/acre.<br>
</p></div>
<br>
<br>
<button>
<a href="https://www.amazon.in/Orgfeed-Azotobacter-Nitrogen-Manufactured-Fertilizer/dp/B082SZ7ZBC/ref=asc_df_B082SZ7ZBC/?tag=googleshopdes-21&linkCode=df0&hvadid=397009238623&hvpos=&hvnetw=g&hvrand=3712403662803137347&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9061659&hvtargid=pla-916338297528&psc=1&ext_vrnc=hi" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Immediately after transplanting, give first irrigation. Depending upon soil, climatic condition, apply irrigation at interval of 10-15 days during winter season. Give adequate quantity of water to young seedling in vegetative stage. Heavy watering after head formation cause cracking of heads.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Apply Pendimethalin@1Ltr/acre four day before transplanting of seedlings followed one hand weeding after herbicide application.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><br><b> Pest and their Control</b><br><br>
<b>Cutworm: </b>As a preventive measure apply Methyl Parathion or Malathion (5% dust)@10kg/acre in soil before sowing.<br>
<b>Leaf Eating Caterpillar:</b> They feed on leaves. If infestation is observed in field to control of leaf eating caterpillars take spray of Dichlorvos@200ml/150Ltr water or Flubendiamide 48%S.C@0.5ml/3Ltr of water.<br>
<b>Diamond back moth:</b> Serious pest of cabbage. They lay eggs under surface leaves. Larva of greenish color with hair on body feed on leaves and make hole. In case of lack of proper control measures, it causes loss upto 80-90%.<br>
At initial stage take spray of Neem Seed Kernel Extract@40gm/Ltr of water at head initiation stage. Repeat this spray with interval of 10-15days. Avoid spraying at curd formation. Take spray of Bt formulations@200gm/acre at 35 and 50 days after planting. In severe infestation take spray of Spinosad 2.5%SC@80ml/150Ltr of water.<br>
<b>Sucking pest:</b> They suck the sap from the leaves resulting in yellowing and drooping of leaves. Thrips results in curling of leaves, leaves become cup shaped or curved upward.<br>
If incidence of sucking pest like Aphid and Jassid is observed take spray of Imidacloprid 17.8SL@60ml/acre using 150Ltr water. Dry weather causes infestation of sucking pest. Spray Thiamethoxam@ 80gm/150Ltr water for effective control.<br>
<br><b>Disease and their control:</b><br><br>
<b>Leaf spot, blight:</b> If infestation of leaf spot or blight is observed, to control take spray of Metalaxyl 8% + Mancozeb 64%WP@ 250gm/150Ltr of water along with sticker or Mancozeb@400gm/150litre or Carbendazim@400gm/150litre of water.<br>
<b>Downy Mildew:</b> Appearance of purplish-brown spots observed on lower side of leaves along with greyish white mold on leafs underside. Sanitation and crop rotation help in reducing infection. If infestation of downy is observed, it can be controlled by combined spraying of (Metalaxyl + Mancozeb)@2gm per litre. Spray three times with 10 days interval.<br>
<b>Black rot:</b> To protect crop from black rot, do seed treatment with Mercury chloride. Dip seeds in Mercury chloride@2gm/Ltr solution for 30min. After that dry them in shed. If infestation is observed in field take spray of Copper oxychloride @300gm + Streptomycin@6gm/150Ltr for better control.<br>
</p>
</div>
<br>
<button>
<a href="https://agribegri.com/products/nb-neem-oil-500-ml--neem-oil-online--best-organic-neem-oil.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>When head reach to full size and having firm texture. Harvesting can be done on basis of market need. In case of high demand and offers high price the crop is harvested early. Harvesting is done with help of knife.</p>
</div><br>
<button class="accordion">Post Harvest</button>
<div class="panel">
<p>After harvesting, do sorting and grading depending upon head size.</p>
</div><br>
<div class="zoom">
<img alt="cabbage" src="cabbage2.jpg">

</div>
<br><br><br><br>
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
