<!DOCTYPE html>
<html>
<head>
<title>Mushroom</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 250%;
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
a {
	text-decoration: none;
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
<h3>MUSHROOM</h3>
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
<p>Mushroom is a rich source of protein, vitamins, folic acid also good source of iron. It is highly suitable for heart and diabetes patients. Its cultivation is practiced worldwide for more than 200years. In India, in recent years its commercial cultivation has started. It is cultivated in Uttar Pradesh, Haryana, Rajasthan, Himachal Pradesh and J & K. Mushroom farming can be done by any one i.e. house wife, retired person etc. as space requirement is low. Cultivation of Dhingri mushroom is very simple and can be done with less investment that’s why its cultivation is popular and increasing day by day in Rajasthan.</p><br>
<div style="float:right" class="zoom"><img alt="Mushroom" src="mushroom1.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Mushroom cultivation can be done inside in well ventilated room, shed, basement, garage etc. Paddy straw mushroom can be grown outside in shady places.</p></div>
<br>
<button class="accordion"style="width:75%">Cultivation Technology</button>
<div class="panel">
<p>i.<b>Spawn/Mushroom seeds preparation</b><br>
These are available in markets. One can prepared or produce it on farm. Freshly prepared grain spawn is best for use.<br>
ii.<b>Substrate preparation</b><br>
Mushroom can be cultivated on a wide range of cellulosic farm waste or other materials like waste paper, cotton waste, cereals straws. Paddy straw or wheat straw is most commonly used material for substrate preparation.<br>
iii.<b>Oyster growing in Polythene bag</b><br>
Add Carbendazim@7 gm along with Formaline@125 ml in 100 Ltr water and prepare a mixture.<br>
Add 20 kg of wheat straw in above prepared mixture and keep it for 18 hours.<br>
After 18 hours, remove wheat straw and place it on firm or netted surface and remove extra water from it.<br>
Add 2% spawn in wheat straw and fill this mixture in polythene bag of 15 x 12 inch.<br>
Spawned straw is filled about 2/3rd of the capacity of the bag and then tied mouth of polythene bag.<br>
Polythene bag is perforated with 2 mm diam. holes, about 4 cm apart, all over the surface for air circulation purpose.<br>
Then place bags in shelves in the growing room having Relative Humidity of 80-85% and room temperature of 24-26°C.<br>
Keep these bags in safe places and maintain moisture by sprinkling water on it.<br>
White cottony mycelium is developed on straw. Wheat straw changes its color to brown and become sound and compact.<br>
At this stage cut and remove polythene covering.<br>
In polythene, straw become compacted and become cylinder shape.<br>
Arrange these cylinder shape straws on shelves and maintained moisture by spreading water on it.<br>
</p>
</div>
<br>
<br><br>
<button>
<a href="https://www.indiamart.com/proddetail/fertilizer-filler-for-sunflower-crops-4689986930.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
<b>Nematodes:</b> The nematodes eat the spawn.<br>
<b>Treatment:</b> It can be controlled through pasteurization. At the time of compost for the prevention Furadan @120 gm (per 300 gm) should be added.<br>
<br><b>Disease and their control:</b><br><br>
1.<b>Fungal diseases:</b><br><br>
i.<b>Brown spots, fungus or Verticillium disease:</b> Sometimes light brown color spots are seen on the umbrella of mushroom which will ultimately slowly develops into irregular shape. But under microscope when this diseases is seen then these spots are seen very thin which is white to gray color and one celled fungus is seen. If the disease spreads out, than mushroom becomes leathery and dried without any smell. <br>
<b>Treatment:</b> Before disease spreading its prevention is necessary. Clean rooms, ventilated, all instruments and casing must be dust-free. Don’t rise the temperature and spraying of Indofil M-45@0.25-0.5% is done three times, first at the time of casing, second at the time of pin tie and third is done after harvesting of 2 crops.<br>
ii.<b>White fungus Mycogone disease:</b> By this disease mainly mushroom becomes brown and gives bad odor. The symptoms are soft mushrooms, lower part becomes thick and umbrella becomes short in size.<br>
<b>Treatment:</b> Make Casing soil bacterial free by pasteurizing or chemical fertilizers. Spraying of Indofil M-45 is done.<br>
iii.<b>Green fungus:</b> This disease is mainly in compost and casing soil. This bacterium produces the poisonous element in casing soil. They kill the thin elements of mushroom and stipe becomes deep brown color from red brown color. This fungus is deep green in color and it makes the wound on umbrella of mushroom.<br>
<b>Treatment:</b> Prevention can be done by making compost or casing bacterial free with Dithiocarbomate or Benzimedazole.<br>
iv.<b>Truffle:</b> This disease is spread through Dileomysis microporus. The symptoms are irregular shape light yellow color mushroom develops. The mushroom has 1.0 mm to 3.5 mm height.<br>
<b>Treatment:</b> To get rid of truffle, rooms must be well ventilated and is protected from moisture. It stops the development of spawn. To get rid of this, at the time of spawn development the temperature must be 18oC and the crop temperature should not be more than 17oC.<br>
v.<b>White Plaster mould:</b> Scopulariopsis fimicola are the fungus which causes this disease. It is white color fungus which appears as white spot. The spots changes from white color to light pink color. <br>
<b>Treatment:</b> If mould is occurred then spraying with Formalin@2% is done. At the time of spawning spraying of Carbendazim 10 PFM is done in compost.<br>
<br>2.<b>Bacterial Disease</b><br><br>
<b>Bacterial blotch:</b> The symptoms are brown color blotches are seen on the surface of the cap. In initial they are light in color which becomes darker which becomes dark brown in color.<br>
<b>Treatment:</b> Application of Sodium hypochloride 150 ppm is done to get rid of this disease.
</p>
</div>
<br><br>
<button>
<a href="https://agribegri.com/products/coragen---broad-spectrum-insecticide-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>18-20 days after spawning, first mushroom is appeared. With interval of week, two to three flushes will appears.<br>
Carry out harvesting of oyster mushroom, when cap of mushroom starts to fold.<br>
For harvesting use sharp knife and it can be harvested by twisting off it with fingers.<br>
It is consumed freshly or can be dried in sun or with mechanical dryer. <br>
Within 45-60 days period, from one ton of dry wheat straw more than 500 kg of fresh mushroom can be obtained.</p>
</div>
<br>
<div class="zoom">
<img alt="Mushroom" src="mushroom2.jpg">
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
