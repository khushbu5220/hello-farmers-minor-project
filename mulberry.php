<!DOCTYPE html>
<html>
<head>
<title>Mulberry </title>
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
a {
	text-decoration: none;
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
</style>
</head>
<body>
<header>
<section class="navsection">
<div class="logo">
<h3>Mulberry Cultivation</h3>
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
<p>Mulberry tree is known as Morus alba in botanical name. The primary use of Mulberry leaves is to feed silkworm. Mulberry has wide medicinal use such as for making blood tonic, cure dizziness, constipation, tinnitus, urinary incontinence etc. It is also used for making fruit juice which is very popular in Korea, Japan and China. It is a perennial plant with average height of 40-60 feet. Flowers are compactly arranged which gives violet black color fruits. Punjab, Haryana, Himachal Pradesh, West Bengal, Karnataka, Andhra Pradesh and Tamil Nadu are major Mulberry growing states in India.
</p><br>
<div style="float:right" class="zoom"><img alt="mulberry" src="mulberry1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It is grown in variety of soil conditions ranging from loamy to clayey, deep fertile to flat soil having good drainage system and good water holding capacity. For good plant growth, it requires pH ranging from 6.2-6.8.
</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>For mulberry plantation, it requires well prepared soil. Weeds and stones should be removed from the land firstly and deep ploughing is done to bring soil to good level.</p>
</div><br>
<button class="accordion" style="width:75%">Fertilizer</button>
<div class="panel">
<br>
<center>

<p>Apply Nitrogen@9kg in form of Urea@20kg and Phosphorus@19kg in form of SSP@120kg/acre before sowing.</p>
  </center></div><br>
  <button type="button">
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/plantations/mulberry.html" class="button button1">Buy Fertilizer Here</a>
</button>
<br><br>
<button class="accordion">Weather requirement</button>
<div class="panel">
  <p>Temperature: 28°C - 32°C<br>Rainfall: 100-110 mm</p></div>
<br>
<button class="accordion">Varieties</button>
<div class="panel">
<p>Mulberry is available in many different types and varieties all over the world. Some popular Mulberry varieties available and cultivated in India are as follows:</p>
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
<th>S 36:</th>
<th>This variety has heart shaped leaves which are thick and light green in color. The average yield of mulberry leaves is 15,000-18,000kg/acre.  The leaves contain high moisture and nutrient content.</th>
</tr>
<tr>
<th>2.</th>
<th>V-1:</th>
<th>The variety is released in 1997. This variety has oval and broad shape leaves which are dark green in color. The average yield of mulberry leaves is 20,000-24,000kg/acre.</th>
</tr>
</table>
</center>
</div>
<br>
<button class="accordion">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Use seed rate of 4 kg/acre.<br>

<b>Seed Treatment:</b>Firstly the seeds are stored for 90 days in cold place. After 90 days of storage seeds are soaked in water for 4 days by replacing water after 2 days. Then seeds are placed in paper towel to remain moist. When germination is seen in seeds then they are sown in nursery beds.    
</p></div>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
Mulberry is mainly planted in the month of July – August. For plantation nursery is prepared well in the month of June - July.
<br>

<b>Spacing:</b>
Use plant spacing of 90cm x 90cm.
<br>
 
<b>Sowing Depth:</b>
Depth of planting should be 60cm in the pit.
<br>

<b>Method of Sowing:</b>
Propagation method is used.
<br>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization:</b>Apply FYM @8 MT/acre/ year in two equal splits and mix well in the soil. Along with FYM apply fertilizer dose in the form of NPK @145:100:62 kg/acre/year for V-1 variety and NPK @125:50:50kg/acre/year for S-36 variety.<br><br>
<b>Watering:</b>Irrigation is given once in a week @80-120mm. Drip irrigation is also required whenever there is scarcity of water in that area. Drip irrigation helps to save 40% of water.
<br><br>
<b>Weeding:</b>Make the field weed free especially during initial stage for good growth and yield of plant. Two weedings are required in first six months and then after cutting weeding is done at the interval of every two months and then after the intervals of 2-3 months. Hand weeding is also done to control weed.</p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>

<b>Stem Borer:</b>It creates tunnel under bark and destroy tree by feeding on internal tissue. Larva of stem borer excreta is observed outside of tunnel.
<br>Treatment:If infestation is observed, clean tunnel with hard wire and insert cotton swab dip in mixture of Kerosene and Chlorpyriphos in ratio of 50:50 and then closed it with mud.
<br><br>
<b>Bark Eating Caterpillar:</b>They make tunnels in the stem as a result the stems become weak and during high winds the stems fall off.
<br>Treatment:Application of Monocrotophos (Nuvacron36 WSC) or 10 ml. Methyl parathion (metacid) 50 EC is mixed in 10ltr of water to get rid of pest.
<br><br>
<br>Yellow and Red Wasp:</b>They make the plant hollow from inside. The pest mainly occurs in the month of March to November.
<br>Treatment:Spraying of Carbaryl 50 WP @40gm in 10ltr of water will help to get rid of this pest.
<br><br>
<b> Disease and their control:</b><br>
<b>Powdery mildew:</b>It is caused by Phyllactinia corylea. The symptoms are white powdery patches which are found on the lower surface of the leaves which will increase after time and then the leaves turns yellowish and defoliation occurs prematurely.
<br>Treatment: Drenching on lower surface is required and foliar spray of Sulfex 80 WP (2g/l) @0.2% will help to cure this disease.
<br><br>
<b>Leaf Rust:</b>It is caused by Peridiosporamori. The symptoms are brown pustules seen on lower surface and reddish brown spots on upper surface of leaves. The spots turn yellowish after some time and leaves get dried. Mainly this disease occurs in the month of February – March.
<br>Treatment: Foliar spray of Blitox 50 WP @300gm or Bavistin 50 WP @300gm is given to cure the leaf rust.
<br><br>
<b>Leaf Spot:</b>It is caused by Cercosporamoricola. The symptoms are light brown circular spots seen on both sides of leaves. The infected leaves defoliate prematurely. Mainly this disease occurs in the winter and rainy season.
<br>Treatment: Spraying of Bavistin @300gm is done at the interval of 10 days.
<br><br>
<b>Sooty Mould:</b>The symptoms are black coating seen on upper surface of leaves. Mainly this disease occurs in the month of August – December.
<br>Treatment:Spraying of Monocrotophos @200ml is done to get rid of sooty mould.
<br><br>
<b>Bacterial Blight:</b>It will reduce the yield quality of leaves.
<br>Treatment: Spraying of Bavistin solution @300gm is used to cure disease.
<br><br>
<b>Root Knot Disease:</b>It is caused by Pseudomonas syringae/Xanthomonas campestris pv. The symptoms are blackish brown irregular spots are seen on leaves which later on results in curling and rotting of disease.
<br>Treatment: The fungicide solution M-45@300gm per 150-180 litre is given to cure root-knot disease.
<br><br>
</p></div><br>
<button type="button">
<a href="https://theearthreserve.com/collections/natural-foods/products/buy-mulberry-preserve-online?variant=42785202756" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>

<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is mainly done when fruit turns dark red to purplish red in color. It is preferred that harvesting is done in morning hours. Harvesting is mainly done by hand picking method or by shaking method. In shaking method, tree is shake by placing cotton or plastic sheet below the tree. Almost all ripe mulberries will rain on cotton or plastic sheet. For processing fully ripe fruits are used.</p>
</div><br>
<div class="zoom">
<img alt="mulberry" src="mulberry2.jfif">

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

