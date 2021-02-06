<!DOCTYPE html>
<html>
<head>
<title>Sunflower</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{ margin: 0; padding: 0;}

header{
width: 100%;
height: 650%;
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
<h3>SUNFLOWER</h3>
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
<br>
<div style="float:right" class="zoom"><img alt="Sunflower" src="sunflower1.jfif"></div>
<button class="accordion" style="width:75%">Choose a good location</button>
<div class="panel">
<p>It can be grown on wide range of soil from sandy loam to black soils. It gives best result when grown under fertile, well-drained soil. It can tolerate slight alkaline soil. Avoid sowing in acidic also waterlogging soil. Ideal pH is around 6.5-8. Crop rotation follows in Punjab, Rice/Maize - Potato-Sunflower, Rice-Toria-Sunflower, Cotton-sunflower, Sugarcane-sugarcane ratoon-sunflower and kharif-fodder - toria-sunflower.</p>
</div>
<br>
<button class="accordion" style="width:75%">Soil preparation</button>
<div class="panel">
<p>To prepare fine seed bed, carry out two to three ploughing operation followed by planking. To obtain good yield, complete sowing should be done by January end. In case of delay in sowing, when it is to be done in February, use transplanting method as direct sowing cause reduction in yield also delay sowing causes high pest and disease incidence.</p>
</div>
<br>
<button class="accordion" style="width:75%">Climate</button>
<div class="panel">
  <center>
<table style="width:50%">
  <tr style="background-color:orchid">
    <th>Temperature</th>
    <th>Rainfall</th>
  </tr>
  <tr style="background-color:magenta">
    <td>20-25°C</td>
    <td>500-700mm</td>
	</tr>
</table></center>
</div><br>
<button class="accordion"style="width:75%">Seeding</button>
<div class="panel">
<p><b>Seed Rate:</b>Use seed rate of 2-3 kg/acre for sowing. For hybrid use seed rate of 2-2.5kg/acre.<br>

<b>Seed Treatment:</b>
Before sowing for quick germination, soak seeds in water for 24 hour and shade dry. Then treat seeds with Thiram@2gm per kg of seeds. It will protect seeds from soil borne pest and disease. To protect crop from downy mildew, treat seeds with Metalaxyl@6gm per kg of seeds. Treat seeds with Imidacloprid@5-6ml per kg of seeds.    
</p></div>
<br><br><br><br>
<button class="accordion">Fertilizer</button>
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
    <td>50 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>SSP</td>
    <td>75 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>Muriate of Potash</td>
  <td>On soil test</td>
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
    <td>24 kg</td>
  </tr>
  <tr>
    <td>2.</td>
    <td>phosphorus</td>
    <td>12 kg</td>
  </tr>
  <tr>
  <td>3.</td>
  <td>potash</td>
  <td>On soil test</td>
  </tr>
</table><br>
  <p> Add more sufficient organic content while preparing soil.</p>
  </center></div><br><br>
  <button type="button">
<a href="https://www.indiamart.com/proddetail/fertilizer-filler-for-sunflower-crops-4689986930.html" class="button button1">Buy Fertilizer Here</a>
</button>
</div>
<br>
<br>
<button class="accordion">Planting</button>
<div class="panel">
<p><b>Time of sowing:</b>
To obtain good yield, complete sowing of sunflower by January end. In case of delay in sowing, when it is to be done in February, use transplanting method as direct sowing cause reduction in yield also delay sowing causes high pest and disease incidence.
<br>

<b>Spacing:</b>
Use spacing of 60 cm between the rows while keep plant to plant distance of 30 cm.<br>
 
<b>Sowing Depth:</b>
Sow the seeds at depth of 4-5 cm.
<br>

<b>Method of Sowing:</b>
For sowing dibbling method used. Also placing seeds on flat bed or ridge with help of row crop planter is used for sunflower sowing.
<br>
Use transplanting method in case of delay sowing. 30 sq.m of nursery is suitable for transplanting one acre land. Use seed rate of 1.5 kg. Prepared nursery 30 days before transplanting. For preparing seed bed, mix 0.5 kg Urea and 1.5 kg Single superphosphate. Cover seed bed with transparent polythene sheet and prepared tunnel. Remove polythene sheet after seedling emergence. When seedling are at 4 leaf stage, they are ready for transplanting. Irrigate nursery before uprooting crop for transplanting.</p>
</div>
<br>
<button class="accordion">Caring</button>
<div class="panel">
<p><b>Fertilization -</b>Apply 4-5 ton of well decomposed cow dung per acre in soil two to three weeks before sowing. Overall apply N:P@ 24:12 kg/acre in form of Urea@50kg, SSP@75kg in soil. For accurate dose of fertilizer do soil testing and apply doses on basis of it. Apply half dose of nitrogen and full dose of P at time of sowing. Apply rest of nitrogen 30days after sowing. In case of irrigated crop, apply remaining half dose of Nitrogen in two equal splits, first 30days after sowing while remaining after 15 days.
<br>
WSF: For better vegetative growth spray water soluble 19:19:19@5gm/Ltr of water when crop is at 5-6 leaves stage take two sprays at eight days interval. Spray Boron@2gm/Ltr of water at ray floret opening stage.<br><br>
<b>Watering -</b>Depending upon soil type, weather condition, generally nine to ten irrigation are required to crop. Apply first irrigation one month after sowing. When crop is at 50% flowering, soft and hard dough stage is critical for irrigation. Water stress during this stage leads to severe yield loss. Avoid excessive or two frequent irrigation as it increases chances of wilt and root rot attacked. In case of heavy soil apply irrigation at interval of 20-25 days and 8-10 days in case of light soil.
<br>
Honey bees play important role in increasing seed set, If honeybee activity is low, then supplemental hand pollination on alternate days preferably in morning hours, between 8-11 am.for about 7-10 days for this purpose cover hand with muslin cloth.
<br><br>
<b>Weeding -</b>Keep sunflower field weed free during first 45days of crop period and irrigate the crop at critical stages. Two to three weeks after sowing, complete first weeding operation followed by second weeding operation three weeks afterwards. To control weeds chemically, spray them with Pendimethalin@1Ltr in 150-200 Ltr per acre as pre-emergence herbicide within 2-3 days after sowing. Protect crop from lodging when crop is 60-70 cm tall but before flowering complete earthling up operation. </p>
</div>
<br>
<button class="accordion">Pesticide and diesease</button>
<div class="panel">
<p><b>Pest and their control:</b><br>
i.<b>Tobacco caterpillar:</b> These are serious pest of sunflower. There infestation is observed during April-May month. They feed on leaves.
<br>Destroy young larva along with damage crops away from field. If infestation of tobacco caterpillar is seen, spray Fipronil SC@2ml/ Ltr of water. In severe case take two sprays at 10days interval or Spray Spinosad@5ml/10Ltr of water or Nuvaan+Indoxacarb@1ml/Ltr water.
<br>
ii.<b>Head borer or American bollworm:</b>It is serious pest of sunflower. It damage plant as these are feed on tissue and developing grains in head. Fungus is developed and heads get rotted. Larva shows color variation from greenish to brown.
<br>To determine pest intensity use pheromone traps@4traps/acre. If infestation is observed spray of Carbaryl@1 kg or Acephate@800 gm or Chlorpyriphos@1Ltr in 100 Ltrs of water per acre is required.
<br>
iii.<b>Bihar hairy caterpillar:</b> Young larvae feed on leaves mostly under surface of leaves. Due to infestation, drying up of plant is observed. Larvae are of yellow color with black hairs.
<br>Destroy young larva along with damage crops away from field. If infestation is seen, spray Fipronil SC @ 2ml/ Ltr of water. In severe case take two sprays at 10 days interval or Spray Spinosad@5ml/10Ltr of water.
<br>
iv.<b>Jassid: </b>  Incidence of sucking pests like jassids is observed in bud initiation stage. In jassid attacked cupped, crinkled leaves and burnt appearance are symptoms of damage.
<br>
If incidence of sucking pest is noticed in 10-20% of plants, Spray crop with neem seed kernel extract@50gm/Ltr of water.
<br><br>
<b> Disease and their control:</b><br>
i.<b>Rust:</b>Rust disease may cause yield loss up to 20%. If infestation of Rust is observed, for effective control, take sprays of Tridemorph@1gm/Ltr or Mancozeb@2gm/Ltr. Take 2nd spray at 15days interval or Hexaconazole@2ml/Ltr of water in twice at 10 days interval.
<br>
ii.<b>Charcoal Rot:</b>Affected plant get weaker and mature earlier also black ashy discoloration of the stem is observed. After pollination, sudden wilting of plant is observed.
<br>Soil application of Tricoderma viride @1Kg per ha along with 20Kg of well decomposed cow dung or sand at 30 days after sowing. Do spot application of Carbendazim@1gm/ litre of water.
<br>
iii.<b>Stem rot:</b> Symptoms are notices within 40days of sowing. Plant become sick and can observe from distance. White cottony fungus is observed on nearby soil surface of affected plant. Before sowing do seed treatment with Thiram@2gm per kg of seeds.
<br>
<iv.b>Alternaria Blight:</b>It is a serious disease, it cause reduction in seed and oil yield. Dark, brown black spots are developed first on lower leaves, later spread to middle and upper leaves. In severe infestation spots are observed on stem, petioles.
<br>If infestation is observed, take spray of Mancozeb@3gm per Ltr of water four times with interval of 10days.
<br>
iv.<b>Head Rot:</b>Initially, brown irregular water soak spots are observed on back side of ripening head. Afterwards spot get large and pulpy and get covered with white cottony fungus later on it become black.
<br>Injury before flowering or during the early stage of head development is unlikely to favour infection so avoid injury to head. If infection is observed, take spray of Mancozeb@2gm per Ltr of water.
</p></div><br><br>
<button type="button">
<a href="https://agribegri.com/products/coragen---broad-spectrum-insecticide-.php" class="button button2">Buy Pesticide Here</a>
</button>
<br><br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Complete harvesting of crop when all leaves are dry and back of head turns lemon yellow color. Do not delay in harvesting as it leads to lodging of crop also chances of termite attacked increases.</p>
</div><br>
<button class="accordion">Post-harvesting</button>
<div class="panel">
<p>After separations of heads, dry them for 2-3 days. Proper drying leads to easy separation of seeds. Threshing of heads can be done either manually by beating them with sticks or rubbing them or with power operated thresher. After threshing, dry seed before storage, bring moisture content to 9-10%.</p>
</div>
<br>
<div class="zoom">
<img alt="Sunflower" src="sunflower2.jfif">
</div><br><br><br><br><br>
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