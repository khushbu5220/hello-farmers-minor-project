<!DOCTYPE html>
<html>
<head>
<title>Guava</title>
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
<h3>GUAVA</h3>
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
<p> Common but important commercial fruit crop of India. It is native to Central America. It can grow in tropical and sub-tropical areas. It is rich source of Vitamin C and Pectin along with Calcium and Phosphorus. It is the fourth most important crop after Mango, Banana and Citrus. It can be grown all over India. Bihar, Uttar Pradesh, Maharashtra, Karnataka, Orissa, WB, AP and Tamilnadu are the major stated growing guava. Also it can be successfully grown throughout Punjab, Haryana and Uttar Pradesh. In Punjab, it occupies an area of 8022ha with annual production of 160463MT.
</p><br>
<div style="float:right" class="zoom"><img alt="guava" src="guava1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p> It is a hardy crop. And grows wells in all type of soil from poor, alkaline and ill drained soil. It can grow in soil having pH ranging from 6.5 to 7.5. It gives best results when grown under deep, well drained, sandy loam to clay loam soil. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>Do ploughing, cross ploughing of land and then levelled the land. Prepare land in such way that water stagnation should not occurred in field. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
February-March or August-September month is optimum time for planting of Guava.<br>
<b>Spacing</b><br>
For planting use spacing of 6x5 m. Use of planting distance of 7m, then in square system, 132 plants can be accommodating in one acre.
<br> 
<b>Sowing Depth</b><br>
Roots should be sown at the depth of 25 cm.<br>
<b>Method of Sowing</b><br>
Direct sowing, Transplanting method, Budding, Rootstock raising.
<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Propagation</button>
<div class="panel">
<p>Plants are propagated by budding or Air layering. Sardar variety seeds are tolerant to wilt and can be used for raising rootstock. Extract seed from ripen fruit and sow them in raise bed in August-March. Make raised beds of 2mx1m. When seedling becomes six months old they are ready for transplantation. Transplanted seedling when attain diameter of 1-1.2cm and height of 15cm they are ready for budding process. May and June months are best for budding process. Freshly cut, angular bud wood from current season’s growth is used for budding purpose.
</p>
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
    <td>15-30°C</td>
    <td>100cm</td>
	<td>15-20°C</td>
    <td>20-25°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Pruning and Training</button>
<div class="panel">
<p>Training and Pruning is necessary to provide stronger frame work to guava tree. Stronger frame work helps to support high yield. To maintain the productivity of trees, light pruning at time of first harvesting is necessary. Regularly remove dead and diseased infected branches. Modified leader system of training is followed. Flowers in guava are borne on current seasons growth so carry out light annual pruning and remove upto 10cm tip, it will encourage new shoots after harvesting.
</p></div>
<br>
<button class="accordion">Intercrops</button>
<div class="panel">
<p>During initial 3-4years, grow vegetable like carrot, okra, brinjal and radish can be taken as intercrop. Also legumes crop like gram, beans can be sown as intercrop.</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Fertilizer Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
  <th>Age of crop (Year)</th>
  <th>Well decomposed  cow dung (in kg)</th>
    <th>Urea (in gm)</th>
    <th>SSP (in gm)</th>
	<th>MURIATE OF POTASH (in gm)</th>
  </tr>
  <tr>
  <td>First to three year	</td>
  <td>10-20</td>
    <td>150-200</td>
    <td>500-1500</td>
    <td>100-400</td>
  </tr>
  <tr>
  <td>Four to six year</td>
  <td>25-40</td>
    <td>300-600</td>
    <td>1500-2000</td>
	<th>600-1000</th> 
  </tr>
  <tr>
  <td>Seven to ten year</td>
  <td>40-50</td>
    <td>750-1000</td>
    <td>2000-2500	</td>
	<th>1100-1500</th> 
  </tr>
  <tr>
  <td>Ten year and above</td>
    <td>50</td>
    <td>1000</td>
    <td>2500</td>
    <td>1500</td>
  </tr>
</table></center>
<br> 
<p>When crop is of 1-3 year old, apply well composed cow dung@10-25 kg per tree along with Urea@155-200 gm, SSP@500-1600 gm and MOP@100-400 gm per Tree. For 4-6year old crop, apply cowdung@25-40 kg, Urea@300-600 gm, SSP@1500-2000 gm, MOP@600 gm-1000 gm per tree. When crop become 7-10 year old, apply Cowdung@40-50 kg, Urea@750-1000 gm, SSP@2000-2500 gm and MOP@1100-1500 gm per Tree.
<br>When crop age is above 10 year, apply Cowdung@50 kg per tree, Urea@1000 gm, SSP@2500 gm and MOP@1500 gm per Tree.
<br>Apply half of dose of Urea, SSP and MOP and full dose of cowdung, in May-June month and remaining half dose in September - October.
<br>
</p>
</div>
<br>
<br>
<button>
<a href="https://www.amazon.in/Organic-Booster-Unique-Combination-Composts/dp/B07FZ8ZWT3" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>After planting, irrigate crop immediately, then irrigate on third day, afterwards irrigate depending upon soil type and climate. Irrigation is not required to well establish orchards. Young plantation required irrigation at weekly interval in summer month and 2-3 irrigation during winter month. Avoid flood irrigation during flowering stage as it leads to excessive flower drop.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Weed control is necessary for good crop growth and yield. To keep check on weed growth, apply Gramoxone 6ml/litre of water in March, July and September month. Apply Glyphosate@1.6Ltr/acre as post-emergence when weed growth is active (before weeds flower and attained height of 15-20cm). 200Ltr of water is sufficient to spray one acre land.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Fruit Fly:</b> It is serious pest of guava. Females lay eggs below epidermis of young fruits. Later on maggots feed on pulp afterward fruits starts rotting and get drop.
<br>If orchards are having history of fruit fly, avoid taking rainy season crop. Do harvesting at right time. Avoid delay in harvesting. Remove and destroyed infested branches, fruits away from field. Take spray of Fenvalerate@80ml in 150Ltr of water at weekly intervals on fruit ripening. Harvest should be done after third day of spraying.  <br>
<b>Mealy Bug:</b> They suck sap from different plant parts and thus weaken plant. If infestations of sucking pests like Mealy bug is observed then to control spray with Chlorpyriphos 50EC @300ml/100Ltr of water.<br>
<b>Guava Shoot Borer:</b>It is a serious pest of nursery. Infested shoots get dry up.
<br>If infestation is observed, take spray of Chlorpyriphos@500ml or Quinalphos@400ml in 100Litres of water per acre.<br>
<b>Aphid:</b>Serious and common pest of Guava. Adult and nymphs, both suck the sap thus weaken the plant. In severe infestation, they cause curling and deformation of young leaves. They secrete honey dew like substance and Sooty, black mould is developed on affected parts.
<br>If infestation is observed to control takes spray of Dimethoate@20ml or Methyl Demeton@20ml per 10Ltr water on new flush. <br>
<b>Disease and their control:</b><br>
<b>Wilt:</b> Serious disease of Guava crop. Yellowing, wilting of leaves along with defoliation are symptoms of wilt infestation.
<br>Keep field well drained; avoid water logging condition in field. Remove and destroyed infected plants away from field. Drench nearby soil with Copper oxychloride@25gm or Carbendazim@20gm/10Ltr of water <br>
<b>Anthracnose or Dieback:</b>Dark brown or black spots are observed on shoots. On fruits also small, raise, dark spots are observed. Fruits rot completely within 2 to 3days after infection.
<br>Keep field clean, destroyed infected plant parts, fruits also avoid water logging condition in soil. After pruning take spray of Captan@300gm in 100Ltr water. At fruit set repeat the spray of Captan and continue till fruits get mature with interval of 10-15days. If infestation observed in field take spray of Copper oxychloride@30gm/10Ltr on infected trees.<br>
<br><br><br>
</p>
</div>
<br><br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/pesticides/fruits/guava.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Within 2-3years after planting comes to bearing. Harvesting should be done when fruits get mature. On maturity, fruits changes color from dark green to greenish yellow. Do harvesting at proper time and avoid over-ripening of fruits as it deteriorates quality and test.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, carry out cleaning, grading and packing operations. As gauva is perishable fruits, it should be marketed immediately after harvest. For packing use CFB, corrugated fibre boxes or bamboo baskets of different size. </p>
</div><br>
<div class="zoom">
<img alt="guava" src="guava2.jpg">

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
