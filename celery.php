<!DOCTYPE html>
<html>
<head>
<title>Celery</title>
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
<h3>CELERY</h3>
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

<p>The botanical name of celery is Apium graveolens and is also known as Karnauli. It is also known for its medicinal properties. Celery is used to cure joint pain, headache, nervousness, gout, weight loss, blood purification etc. It is rich in vitamin C, vitamin K, vitamin B6, folate and potassium. It is an herbaceous plant with average height of stalk is about 10-14 inches and has white color flowers. Stems are light green in color having leaves attached with stem which is 7-18 cm long. Leaves bear flowers which is greenish white in color that bears fruit which later becomes seeds which are 1-2 mm in length and are greenish brown in color. It is used in making stews, salads and soups. It is found mainly in Mediterranean area, mountainous parts of Southern Asia, marshes of Europe and North Africa and in some parts of India. Ladhwa and Saharanpur districts of western Uttar Pradesh, Haryana and Amritsar, Gurdaspur and Jalandhar districts of Punjab are major Celery growing states in India.</p><br>
<div style="float:right" class="zoom"><img alt="Celery" src="celery2.jpg"></div>
<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>It is grown in variety of soils ranging from Sandy loam to clay, black soil and red soil having proper drainage. It gives best result when grown under loamy soil rich in organic matter. Avoid cultivation in waterlogged soils, alkali and saline soils. It requires soil pH of more than 5.6 for its good growth. </p>
</div>
<br>
<button class="accordion"style="width:75%">Land Preparation</button>
<div class="panel">
<p>For celery plantation, it requires well pulverized and levelled soil. To bring soil to good level, 4-5 ploughings should be done followed each by planking. Transplantation of celery is done on prepared nursery beds. </p>
</div>
<br>
<button class="accordion"style="width:75%">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
As it is a Rabi crop, nursery should be prepared in the mid-September - mid-October month.<br>
<b>Spacing</b><br>
Transplanting is done at the distance of 45 cm x 25 cm.<br> 
<b>Sowing Depth</b><br>
Sow seeds at depth of 2-4 cm.<br>
<b>Method of Sowing</b><br>
Transplanting is done 60-70 days after sowing.<br></p>
</div>
<br>
<button class="accordion" style="width:75%">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
For open pollinated varieties use seed rate of 400 gm/acre.</p>
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
    <td>12-30°C</td>
    <td>100cm</td>
	<td>12-18°C</td>
    <td>25-30°C</td>
  </tr>
</table></center>
</div><br>
<button class="accordion">Nursery Management and Transplanting</button>
<div class="panel">
<p>Before sowing apply mixture of calcium ammonium nitrate and single superphosphate @150g on the raised beds. Sow celery seeds on raised beds of 8 m x 1.25 m and of convenient width. After sowing cover the seed beds with FYM and mix well in the soil.  After sowing immediate water sprinkler is necessary.<br>
12-15 days after sowing germination of seed starts. When germination begins, application of calcium ammonium nitrate at fortnight to each bed is given. For good plant size application of calcium ammonium nitrate @100g is given to each bed at the interval of one month.<br>
Seedlings are ready for transplantation in 60-70 days after sowing. Before transplanting light irrigation is given to beds so that seedlings can be easily uprooted and be turgid at transplanting time. Transplanting is mainly done in the month of mid-November – end of December.</p>
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
    <td>90</td>
    <td>35</td>
    <td>#</td>
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
    <td>40</td>
    <td>16</td>
    <td>#</td>
  </tr>
</table></center>
<br> 
<p>At the time of land preparation, apply well rotten FYM or compost@15 cartloads/acre and mix well in the soil. Apply Nitrogen@40 kg, Phosphorus@16 kg in the form of Urea@90 kg, SSP@35 kg/acre. At the time of transplanting half dose of Nitrogen and full dose of phosphorus is given. Apply one-fourth dose of Nitrogen after 45 days of transplanting and then apply remaining dose of Nitrogen 75 days after transplantation.
<br>
</p>
</div>
<br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Celery requires too much water for its good growth. Frequent but light irrigations are required for celery. Frequent irrigation is necessary after nitrogen application.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Do hand weeding and light hoeing to keep the field weed free. If weed left uncontrolled then it will reduce the crop yield. For effective weed control, application of Linuron @6 kg/acre is given. Mulching is also an effective way to control the weeds. Blanching of crop is also required to increase its flavour and to maintain its sensitivity.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><b>Pest and their control:</b><br>
i.<b>Leaf miner:</b> It affects the foliage as it gives the appearance of been scorched.<br>
<b>Treatment: </b>Use of insecticidal spray is done to get rid of leaf miner. <br>
ii.<b>Carrot weevil:</b> It affects the fresh leaves by tunnelling larvae into it.<br>
<b>Treatment:</b> Suitable insecticidal treatment is required to treat carrot weevil pest.<br>
iii.<b>Aphids:</b> They affect the plant growth by sucking the cell sap of the leaves.<br>
<b>Treatment:</b> Spraying of Malathion 50 EC @400ml/acre at the interval of 15 days is done to get rid of aphids.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Celery Mosaic Virus:</b> It is virus which gets transmitted to other plants by aphids. The symptoms are vein clearing, vein mottling, leaves gets curled, twisted and has stunted growth.<br>
<b>Treatment:</b> Spraying of Rogor30 EC@3ml/ltr or Acephate @6-8gm/ltr of water is done at the time of flowering to get rid from celery mosaic virus.<br>
ii.<b>Damping-off:</b> It is a fungal disease which is caused by Rhizoctonia solani and Pythium spp. The symptoms are rotten seeds which decreases seed germination rate or slow germination rate.<br>
<b>Treatment:</b> If infestation is observed drenching of Copper oxy chloride@400gm or M-45@400gm per acre in 150 ltr of water.<br>
iii.<b>Downy mildew:</b> It is a fungal disease which is caused by Peronospora umbellifarum. The symptoms are lesions which gets darker with the maturity of plant, yellow spots on the upper surface and white fluffy growth on the lower surface of leaves.<br>
<b>Treatment:</b> If infestation is observed drenching of Copper oxy chloride@400gm or M-45@400gm per acre in 150 ltr of water.<br>
iv.<b>Early blight (Cercospora leaf spot, Cercospora blight):</b> It is a fungal disease which is caused by Cercospora apii. The symptoms are small yellow spots on both upper and lower surface of leaves.<br>
<b>Treatment:</b> If infestation is observed take spray of Zineb 75WP@400gm or M-45@400gm per acre in 150 ltr of water.<br>
v.<b>Fusarium yellows:</b> It is a fungal disease which is caused by Fusarium oxysporum. The symptoms are stunted growth, brownish color roots and fainted color of vascular tissue. The disease mainly gets transfer by the use of contaminated agricultural equipment’s.<br>
<b>Treatment:</b> If infestation is observed drenching of Copper oxy chloride@400gm or M-45@400gm per acre in 150 ltr of water.<br>
</p>
</div>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Harvesting is mainly done 4-5 months after sowing. Harvesting of plant and seeds are to be done. Plants are cut just above the ground with the help of sharp knife. Seed harvesting is mainly done when most seeds turn light brown in color in umbel. Immediate harvesting is required as delay in harvesting results in seed loss.</p>
</div>
<br>
<button class="accordion">Post Harvesting</button>
<div class="panel">
<p>After harvesting, trimming is done. Then celery is packed into cellars, trenches and cold storage for transportation purposes and to increase its self-life.</p>
</div><br>
<div class="zoom">
<img alt="Celery" src="celery1.jpg">
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
