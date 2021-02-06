<!DOCTYPE html>
<html>
<head>
<title>Apple</title>
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
<h3>APPLE</h3>
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

<p>Apple (Malus pumila) is an important temperate fruit. Apples are mostly consumed fresh but a small part of the production is processed in to  juices, jellies, canned slices and other items.
<br>In India, Apple is primarily cultivated in Jammu & Kashmir; Himachal Pradesh; hills of Uttar Pradesh and Uttaranchal. It is also cultivated to a small extent in Arunachal Pradesh; Nagaland; Punjab and Sikkim.
 </p><br>
<div style="float:right" class="zoom"><img alt="apple" src="apple1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Apples grow best on a well-drained, loam soils having a depth of 45 cm and a pH range of pH 5.5-6.5. The soil should be free from hard substrata and water-logged conditions. Soils with heavy clay or compact subsoil are to be avoided.
</p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
<p>  The pits are filled with good loamy soil and organic matter. Planting is done in the centre of the pit by scooping the soil and placing the soil ball keeping the roots intact. Loose soil is filled up in the remaining area and lightly pressed to remove air gaps.</p>
</div>
<br>
<button class="accordion" style="width:75%">Planting</button>
<div class="panel">
<p>The planting distance varies according to variety and the fertility level of the soil. The main consideration in planting trees is planting of sufficient pollinators to ensure effective pollination. Usually one pollinator tree is needed for two to three large trees planted at 10 m distance or one row pollinator for two rows of main cultivar. For high density planting the pollinator tree is planted after every sixth tree in a row.
<br>The most widely used planting system is the square system. In this system, the pollinators are planted after every sixth or ninth tree. The other popular system of planting is the rectangular system. In hilly areas the apple orchards are established by planting the trees on the contours so as to prevent soil erosion and reduce run off.
<br>The average number of plants in an area of one ha. can range between 200 to 1250. Four different categories of planting density are followed viz. low (less than 250 plants/ha.), moderate (250-500 plants/ha.), high (500-1250 plants/ha.) and ultra high density (more than 1250 plants /ha.). The combination of rootstock and scion variety determines the plant spacing and planting density/unit area. </p>
</div>
<br>
<button class="accordion" style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
Planting is usually done in the month of January and February.<br>
<b>Sowing Depth</b><br>
Pits measuring 60 cm are dug two weeks before planting.<br>
<b>Method of Sowing</b><br>
Direct sowing, Transplanting method, Budding, Rootstock raising.
<br></p>
</div>
<br>
<button class="accordion">Propagation</button>
<div class="panel">
<p><b>Grafting :</b> Apples are propagated by several methods viz.; whip, tongue, cleft and roots grafting. Tongue and cleft grafting at 10-15 cm above the collar during February-March gives the best results. Usually grafting is done at the end of winter.
<br><br>
<b>Budding :</b> Apples are mostly propagated by shield budding, which gives a high percentage of success. In shield budding a single bud along with a shield piece of stem is cut along with the scion and inserted beneath the rind of the rootstock through a 'T' shaped incision during active growth period. Budding is done when the buds are fully formed during summer. The optimum time of budding is September in Kashmir Valley, Kumaon hills of Uttaranchal, high hills of Himachal Pradesh and June in mid hills of Himachal Pradesh.
<br><br>
<b>Rootstocks :</b> Most of the apple plants are grafted or budded on seedling of wild crab apple. The seedling rootstocks obtained from the seeds of diploid cultivars like Golden Delicious, Yellow Newton, Wealthy, Macintosh and Granny Smith also can be used. High density planting is done using dwarfing rootstocks (M9, M4, M7 and M106).
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
  </tr>
  <tr style="background-color:magenta">
    <td>21-24°C</td>
    <td>1000-1250mm</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Pruning</button>
<div class="panel">
<p>Pruning is one of the most important practice which promotes plant vigour and productivity. Pruning is done with a view to divert the sap flow towards the fruiting branches and to force the plants to bear more fruits or to induce vigorous vegetative growth. During pruning, weak-growing and diseased branches are removed from the tree. Usually the trees are pruned every year in the month of December-January. The systems of pruning adopted in apple cultivation are as follows.
<br><br>
<b>Established Spur System :</b> Objective of this pruning is to develop permanent fruit spurs for production of fruits. To ensure formation of spurs on the laterals the central leader is cut back every year along with the strong erect laterals near the central leader. This leads to wide angled vigorous laterals for formation of spurs.
<br><b>Regulated System :</b> Regulated pruning is practiced generally on apple cultivars growing on semi-dwarfing and vigorous rootstocks. Before planting, the central leader of the tree is cut back at 75 cm on which three well- placed primary branches are allowed to grow. In bearing trees, the growth of leader and strong laterals are encouraged by pruning weak and crowded branches.
<br><b>Renewal System :</b> In vigorous cultivars instead of developing permanent spurs, the objective is to encourage continuous growth of new healthy shoots, spurs and branches every year. A part of the tree is pruned every year to produce fruits in the following year on the new shoot growth, while the unpruned parts produces fruit buds.
</p></div>
<br>
<button class="accordion">Thinning of fruit</button>
<div class="panel">
<p>Thinning is one of the major techniques employed to regulate fruit quality. In apples, heavy bearing not only results in small-sized poor quality fruits but also sets in alternate bearing cycle. Judicious thinning done at the proper stage of fruit development can regulate cropping and improve fruit size and quality. Since manual thinning is cumbersome and expensive, chemical thinning is employed.
<br>Chemical thinners should not be applied in very hot and dry conditions as it adversely affects the absorption. Spraying should be done thoroughly to cover the entire canopy. Sometimes chemical thinning follow calcium deficiency therefore adequate calcium nutrition should be supplemented after thinning.
<br>It is desirable to retain one fruit for every 40 leaves. This spaces the fruit at about 15-20 cm apart and there will be only one fruit per spur.
</p>
</div>
<br>
<button class="accordion">Fertilizer</button>
<div class="panel">
<center>
<b>Nutrient Requirement (kg/acre)</b><br>
<table style="width:50%">
  <tr>
    <th>Nitrogen (in gm)</th>
    <th>Phosphorus (in gm)</th>
	<th>POTASH (in gm)</th>
  </tr>
  <tr>
    <td>350</td>
    <td>175</td>
    <td>350</td>
  </tr>
</table></center>
<br> 
<p>On some trees deficiency of zinc, boron, manganese and calcium may be observed which is corrected with the application of appropriate chemicals through foliage spray.
</p>
</div>
<br>
<br>
<button>
<a href="https://www.indiamart.com/proddetail/fertilizer-for-apple-6662157697.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Apple trees are particularly sensitive to low soil moisture. Water stress during the growing season reduces number and size of fruits, and increases June drop. Success of apple largely depends on uniform distribution of rain during the year in case of dry spells during the critical periods supplementary irrigation should be provided. Water stress conditions results in poor fruit set, heavy fruit drop, low production and poor quality. The most critical periods of water requirement are April- August and peak water requirement is after fruit set. Normally the orchards are irrigated immediately after manuring in the month of December-January. During the summer periods, the crop is irrigated at an interval of 7-10 days. After the fruit setting stage the crop is irrigated at weekly intervals. Application of water during the fortnight preceding harvest markedly improves the fruit colour. Thereafter till the onset of dormancy, irrigation is given at an interval of 3-4 weeks.
</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pests:</b>The insect pests mostly observed are San Jose Scale (Quadraspidiotus perniciosus), white scale (Pseudoulacaspis sp.), wooly apple aphid (Eriosoma lanigerum), blossom thrips (Thrips rhopalantennalis) etc. Planting of resistant rootstocks, suitable intercultural operations and spraying with chloropyriphos, fenitrothion, carbaryl etc. have been found to be effective in controlling the pests.
<br><br>
<b>Diseases:</b>The main diseases reported are collar rot (Phytophthora cactorum), apple scab (Venturia inaequalis), sclerotius blight (Sclerotium rolfsii), crown gall (Agrobacterium tumefaciens), cankers, die-back diseases etc. Plants resistant to the diseases should be used for cultivation. The infected plant parts need to be destroyed. Application of copper oxychloride, carbendazim, mancozeb and other fungicides have been found to be effective in controlling the diseases.
<br><br>
<b>Disorders:</b> In apple, there are three distinct fruit drops.
<br>
-Early drop resulting from unpollinated or unfertilized blossoms<br>
-June drop (due to moisture stress and fruit competition)<br>
-Pre-harvest drop. Pre-harvest drop can be controlled by spraying NAA @ 10 ppm. (1 ml. of Planofix dissolved in 4.5 l. of water) about a week before the expected drop.
<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.amazon.in/Insecticide-vegetable-Flower-plants-Insects/dp/B075SDC5X4" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Normally the apples are ready for harvest from September-October except in the Nilgiris where the season is from April to July. The fruits mature within 130-150 days after the full bloom stage depending upon the variety grown. The ripening of fruits is associated with the change in colour, texture, quality and the development of the characteristic flavour. The fruits at the time of harvest should be uniform, firm and crisp. The colour of the skin at maturity ranges from yellow-red depending on the variety. However, the optimum time of harvest depends on fruit quality and intended period of storage. Due to the introduction of dwarf rootstock hand picking is recommended as it reduces bruising due to fruit fall during mechanical harvesting.</p>
</div>
<br>
<div class="zoom">
<img alt="apple" src="apple2.jpg">

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
<br><br><br><br>
</header>
</body>
</html>
