<!DOCTYPE html>
<html>
<head>
<title>Lemon Cultivation</title>
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
<h3>Lemon</h3>
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
<p>Citrus is an important fruit crop. Lemon is one of the important category of citrus. It is mainly known for its pulp and juice throughout the world. Different citrus fruits are used throughout the world as food or juice. In central India, Nagpur santra is grown on a large scale. Mandarin Production states are Assam, Dibrugarh and Brahmaputra valley. In India Citrus cultivation is done on an area of about 923 thousand hectare with annual production of 8608 thousand metric tons. In Punjab citrus is grown on 39.20 hectares of land.</p>
<br>
<div style="float:right" class="zoom"><img alt="lemon" src="lemon1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>Lemons can be grown in all types of soils. Light soils having good drainage are suitable for its cultivation. PH range of soil should be 5.5-7.5. They can also grow in slightly alkaline and acidic soils. Light loam well drained soils are best for lemon cultivation.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>Land should be ploughed, cross ploughed and leveled properly. Planting is done on terraces against slopes in hilly areas. High density planting is also possible in such areas.</p>
</div><br>
<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<br>
<center>
<p><b>Fertilizer Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
    <th>Well decomposed cow dung  (kg/tree)</th>
    <th>Urea (gm/tree)</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>5-20</td>
    <td>100-300</td>
  </tr>
  <tr>
    <td>Seven to Nine</td>
    <td>25-50</td>
    <td>400-500</td>
  </tr>
  <tr>
  <td>Four to Six</td>
  <td>60-90</td>
  <td>600-800</td>
  </tr>
  <tr>
  <td>Ten and above</td>
  <td>100</td>
  <td>800-1600</td>
  </tr>
</table>
<br><br>
<p><b>Nutrient Requirement</b></p>
<table style="width:50%">
  <tr>
    <th>Age of crop (Year)</th>
    <th>Well decomposed cow dung  (kg/tree)</th>
    <th>Urea (gm/tree)</th>
  </tr>
  <tr>
    <td>First to three year</td>
    <td>5-20</td>
    <td>50-150</td>
  </tr>
  <tr>
    <td>Seven to Nine</td>
    <td>25-50</td>
    <td>200-250</td>
  </tr>
  <tr>
  <td>Four to Six</td>
  <td>60-90</td>
  <td>300-400</td>
  </tr>
   <tr>
  <td>Ten and above</td>
  <td>100</td>
  <td>400-800</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br>
  <button type="button">
<a href="https://www.casagardenshop.com/products/casa-de-amor-organic-lemon-fertilizer-citrus-fertilizer-900-gm?variant=33174881992803&currency=INR&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic&utm_campaign=gs-2020-02-08&utm_source=google&utm_medium=smart_campaign&gclid=CjwKCAjw_sn8BRBrEiwAnUGJDgLh5igG5SfbtHS_P919OZxJo42tr2gAWHCcJE9_3pgPA337T-KMnhoCTV8QAvD_BwE" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br><br>
<button class="accordion">Weather requirement</button>
<div class="panel">
  <p>Temperature: 20°C - 25°C<br>Rainfall: 75 cm-200 cm</p></div>
<br>
<button class="accordion">Varieties</button>
<div class="panel">
<p>Lemon is available in many different types and varieties all over the world. Some popular wheat varieties available and cultivated in India are as follows:</p>
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
<th>Punjab Baramasi</th>
<th>Shoots dropping are usually ground touching. Lemon has yellow fruits, round shaped with tapering base. Seedless fruits and are juicy in nature. The average fruit yield is 84 kg per tree.</th>
</tr>
<tr>
<th>2.</th>
<th>Eureka</th>
<th>Semi-vigorous tree. Lemon-yellow skin color, juice is strongly acidic having excellent flavor. Fruit ripens in the month of August.</th>
</tr>
<tr>
<th>3.</th>
<th>Punjab Galgal</th>
<th>Vigorous trees with light green foliage color. Medium size, oval shaped fruit. Juice is very acidic with 8-10 seeds per fruit. Fruits mature in the months of November-December. The average fruit yield is 80-100 kg per tree.</th>
</tr>
<tr>
<th>4.</th>
<th>PAU Baramasi</th>
<th> The right time of fruit maturing is first week of July. It contains very less amount of seeds. It gives an average yield of 84kg per tree. </th>
</tr>
<tr>
<th>5.</th>
<th>PAU Baramasi-1</th>
<th>The right time of fruit maturing is last week of November month. The fruit is seedless. It gives an average yield of 80kg per tree. </th>
</tr>
</table>
</center>
</div>
<br>

<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Minimum plant density of 208/acre should be maintained.   
</p></div>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
The best season for planting is July-August.
<br>
<b>Intercropping:</b> Intercropping with cowpeas, vegetables, french beans can be done in initial two to three years.<br>
<b>Spacing:</b>
Spacing between plants should be kept between 4.5×4.5. Pits of size 60×60×60cm should be dug for planting seedlings. 10Kg of Farmyard Manure and 500g of single superphosphate should be applied to pits while planting.<br>
 
<b>Sowing Depth:</b>
Pits of size 60×60×60cm should be dug for planting seedlings.
<br>

<b>Method of Sowing propogation:</b>
Plants are propagated by budding or air layering.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization :</b>When age of crop is 1-3year, apply well decomposed cow dung@5-20kg per Tree and Urea@100-300gm per Tree. For 4-6year old crop, apply well decomposed cowdung@25-50kg and Urea@100-300gm per Tree. For 7-9year old crop, apply Urea@600-800gm per tree and well decomposed cow dung@60-90kg per Tree. When crop is 10year old or above, apply cowdung@100kg or Urea@800-1600gm per tree.
<br>Apply whole amount of cow dung during December month whereas apply Urea in two parts; apply first of Urea in February, and second dose in April-May month. At time of applying first dose of Urea, apply whole dose of SSP fertilizer.
<br>If fruit drop is observed, to control excessive fruit drop, take spray of 2,4-D@10gm in 500Ltr of water. Take first spray in March end, then in April end. Repeat the spray in August and September end. If cotton is planted in nearby field of citrus, avoid spraying of 2,4-D, instead take spray of GA3.
<br><br>
<b>Watering :</b>Lemon requires irrigation at regular intervals. Lifesaving irrigation should be given in winters and summers. Irrigation is necessary for Flowering, Fruiting and proper plant growth. Over irrigation may also leads to diseases like Root rot and collar rot. High frequency irrigation is beneficial. Salty water is injurious for crop plants. Partial drying out of soil in spring may not affect plants.
<br><br>
<b>Weeding :</b>Weed can be controlled by hand-hoeing and also controlled by chemically, use glyphosate@1.6litre per 150 litre of water. Use glyphosate only on weeds not on crop plants. </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
<b>Citrus Psylla:</b> These are juice sucking pests. Damage is mainly caused by nymphs. It injects a plant toxin liquid which burns foliage and skin of fruit. Leaves curl and fall off prematurely. It can be controlled by pruning of diseased plants, burning them. Spraying of Monocrotophos-0.025% or carbaryl- 0.1% can also be helpful.
<br><br>
<b>Leaf miner: </b>Larvae inside the upper or lower surface of young and newly emerged leaves are curled and look distorted. Young trees show a reduction in growth due to leaf miner. Best management for leaf miner is to leave it alone and let the natural enemies to feed upon them and parasitize their larvae. It can also be controlled by spraying Phosphomidon @1ml or Monocrotophos @1.5ml per 3-4 times fortnightly. Pheromone traps are also available for detecting leaf miner moths.
<br><br>
<b>Scale Insects:</b>Citrus scale insects are small insects that suck sap from the citrus trees and fruits. Honeydew is produced which is feasted upon by ants. They do not have much mouth parts. Male citrus scale has a short life span. There are mainly two types of scale on citrus plants armored scale and soft scales.  Armored scale insects insert their mouth parts in the plant and never move again, eating and reproducing in the same spot. Soft scale bugs on citrus form a protective coating, which in turns cover citrus leaves and prevents photosynthesis. Once dead, soft scale will fall from tree instead of remaining stuck. They can be controlled with the introduction of indigenous parasitic wasps. Neem oil is also effective against them. Spraying of Parathion (0.03%) emulsion, dimethoate 150ml or malathion @0.1% are effective against scale control.
<br><br>
<b>Aphids & Mealy Bugs: </b>They are small sap sucking pests. Bugs are present on the underside of leaves. Synthetic pyritheriods or pest oil can be used to control aphids and bugs.  
<br><br>
<b> Disease and their control:</b><br>
<b>Citrus Canker:</b>Plants have lesions on stems, leaves and fruits with brown, water-soaked margins. Citrus canker bacteria can enter through plant’s stomata into the leaves. Younger leaves are highly susceptible. Lesions oozes bacterial cells which can be dispersed by blowing wind to healthy plants in area.
<br>Contaminated equipment tends to spread disease to healthy plants. Bacteria can stay viable in old lesions for several months. It can be detected by appearance of lesions. It can be controlled by cutting of effected branches, twigs. Spraying of Bordeaux mixture @1%. Aqueous solution of 550ppm, Streptomycin Sulphate is also helpful in controlling citrus canker.
<br><br>
<b>Gummosis:</b> Exudation of gum from bark of tree is the characteristic symptom of gummosis disease. Affected plant leaves turns to pale yellow in color. Hardness masses of gum are common on stem and leaf surfaces. In severe cases, bark may be destroyed by rotting and tree may dies. Plant dies before the fruit matures. This disease is also called foot rot. This disease can be managed through proper selection of site with proper drainage, use of resistant varieties etc. Plant injuries should be avoided. Drench the soil with 0.2% metalaxyl MZ-72 + 0.5% trichodermaviride, which helps to control this disease. Bordeaux mixture should be applied to plant upto 50-75 cm height from ground level at least once in a year.
<br><br>
<b>Powdery mildew:</b>White cottony powdery growth is noticed on all aerial plant parts. Leaves tend to become pale yellow and crinkle. Distorted margins are also seen. Upper surface of leaves are more affected. Young fruits drop off prematurely. Yield is reduced significantly.  To control powdery mildew, affected plant parts should be removed and destroyed completely. Carbendazim, three times at 20-22 days of interval helps to control this disease. 
<br><br>
<b>Black Spot:</b>Black spot is a fungal disease. Circular, dark spots on fruits are seen. Copper spray in early spring should be sprayed on foliage helps to cure plants from black spots. It should be repeated in 6 weeks again.
<br><br>
<b>Lemon Scab:</b> It affects some of the mandarin varieties and lemon fruits. Raised grey corky scabs on tree branches, fruits and leaves are seen causing distortions of the fruit. Fruits fall of at very early stages of growth. It is caused due to fungus. Copper spray mixed with white oil should be sprayed on the foliage to prevent lemon scab. 2 Table spoons of white oil to two liter of water should be added into 5 litre or copper spray mixture.
<br><br>
<b>Collar Rot:</b>Collar rot is also caused due to fungus. This disease mainly affects the bark on tree trunk. Bark begins to rot and forms a band just above ground surface, this band decay gradually and covers the whole trunk. It is very severe in some cases that even the trees may die. This is caused due to incorrect mulching, injury due to weeding, mowing etc. Tree may lose its vigor. To protect trees from collar rot, cut and scrape away the soft, infected bark to clean the trunk of tree. Mixture of copper spray or Bordeaux mixture should be painted on the affected part of the tree. Remove all the weak, diseased and congested tree branches to ensure proper air circulation.<br><br>
<b>Zinc Deficiency:</b>It is very common in citrus trees. It is notified as yellow areas between main lateral veins and midrib of the leaves. Twigs may die back, dense shoots having stunted bushy appearance is commonly seen. Fruits tend to become pale, elongated and small in size. Proper fertilizer application should be given to the citrus tree to prevent zinc deficiency. Zinc sulphate should be provided by dissolving 2 table spoons in 10 litres of water. This should be sprayed thoroughly on all the tree branches and foliage. It can also be cured by providing cow or sheep manure.<br><br>
<b>Iron deficiency:</b>Color of new leaves changes to yellowish green. Iron chelates should be provided to the plants. Cow or Sheep manure is also helpful to cure plants from iron deficiency. This deficiency mostly occurs in case of alkaline soils.<br><br>
</p></div><br>
<button type="button">
<a href="https://www.trustbasket.com/products/trustbasket-concentrated-all-purpose-organic-pest-controller-75-ml-can-be-diluted-into-15-ltrs-of-water?variant=17872310665274&currency=INR&utm_medium=product_sync&utm_source=google&utm_content=sag_organic&utm_campaign=sag_organic&utm_campaign=gs-2018-11-24&utm_source=google&utm_medium=smart_campaign&gclid=CjwKCAjw_sn8BRBrEiwAnUGJDhpEa_y5Yskce-4X4ThoCdMS_3g8Ed9Jrrt-xc9gKhZZj2d3-snsVhoC5dYQAvD_BwE" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>On attaining proper size, shape along with attractive color having TSS to Acid ratio of 12:1, kinnow fruits is ready for harvest. Depending upon variety fruits are generally ready for harvesting in Mid- January to Mid- February. Do harvesting at proper time as too early or too late harvesting will give poor quality.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After harvesting, wash fruits with clean water then dip fruits in Chlorinated water@2.5ml per Liter water and then partially dried them. To improve appearance along with to maintain good quality, do Citrashine wax coating along with foam. Then these fruits are dried under shade and then packing is done. Fruits are packed in boxes</p>
</div><br>
<div class="zoom">
<img alt="lemon" src="lemon2.jfif">

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
