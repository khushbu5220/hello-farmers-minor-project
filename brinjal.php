<!DOCTYPE html>
<html>
<head>
<title>Brinjal</title>
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
<h3>BRINJAL</h3>
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

<p>Brinjal (Solenum melongena) belongs to family Solanaceae, considered native to India and is a widely grown vegetable in Asian countries. Also popular in other countries like Egypt, France, Italy and United States. Brinjal is a hardy crop than other vegetables. Due to its hardness, it can be successfully grown in dry area with low irrigation facilities. It is moderate source of Vitamins and minerals. It can grow throughout the year. India is second largest producer of Brinjal after China. In India major brinjal growing states are West Bengal, Orissa, Karnataka, Bihar, Maharashtra, Uttar Pradesh, and Andhra Pradesh.</p><br>
<div style="float:right" class="zoom"><img alt="brinjal" src="brinjal1.jfif"></div>

<button class="accordion" style="width:75%">Soil</button>
<div class="panel">
  <p>Brinjal is a hardy crop so it can be grown on different type of soils. As it is a long duration crop, it requires well drained fertile sandy loam soil which is best suited for its cultivation and gives good yield. For early crop light soil are good and for high yield clay loam, silt loam are suitable. For good growth pH of soil should be 5.5 to 6.6.</p>
</div>
<br>
<button class="accordion" style="width:75%">Nursery Management and Transplanting</button>
<div class="panel">
  <p>Seeds of brinjal are sown in nursery beds which are 3 meter long, 1 meter wide and15 cm high. Well rotten farm yard manure is then mixed in nursery bed. Nursery bed is then drenched with Captan solution two days before sowing to avoid the attack of damping off disease in brinjal nursery. Then seeds are sown in rows 5 cm apart and covered the nursery with compost or dry leaves. Light irrigation is done. The nursery beds should be covered with black polythene sheets or paddy straw till the seed germinates. Healthy seedlings having 3-4 leaves or 12-15 cm in height are ready for transplanting. Transplanting is done in evening and light irrigation is done after planting.</p>
</div>
<br>
<button class="accordion" style="width:75%">Land Preparation</button>
<div class="panel">
  <p>Before transplanting the soil should be well prepared by deep ploughing 4-5 times and levelled. When the field is well prepared and levelled, the beds of suitable size are made in the field before transplanting.</p>
</div>
<br>
<button class="accordion">Climate</button>
<div class="panel">
  <p><b>Temperature Required:</b> 15°C - 32°C<br>
<b>Rainfall : </b>600-1000 cm<br>
<b>Sowing Temperature :</b>15°C - 20°C and 28-32°C <br>
<b>Harvesting Temperature:</b> 30°C - 32°C and 25°C - 30°C<br>
</p>
</div><br>
<button class="accordion">Sowing</button>
<div class="panel">
<p><b>Time of sowing</b><br>
For first crop, prepare nursery in October and seedlings are ready for transplantation in November.<br>
Second crop, prepare nursery in November and transplantation in first fortnight of February.<br>
Third crop, sow nursery in February-March and transplantation before end of April.<br>
Fourth crop, sow nursery in July and transplantation in August.<br>
<b>Spacing</b><br>
The spacing generally depends on the variety (size and spread and bearing period) soil fertility. Use row to row spacing of 60 cm and plant to plant spacing of 35-40 cm.<br> 
<b>Sowing Depth</b><br>
In nursery sow seeds at depth of 1 cm and then covered with soil.<br>
<b>Method of Sowing</b><br>
Transplantation of seedling in main field.</p>
</div>
<br>
<button class="accordion">Seed</button>
<div class="panel">
<p><b>Seed Rate</b><br>
Seed rate of 2kg is sufficient for one acre land.Use seed rate of 300-400 gm for preparing seedling for one acre land sowing.<br>
<b>Seed Treatment</b><br>
For sowing use only Trusted and good seeds. Before sowing do seed treatment with Thiram@3gm or Carbendazim@3gm/kg of seeds. After chemical treatment, treat seeds with Trichoderma viride@4gm/kg of seed, dry in shed and sow immediately.<br>
<center>
<table style="width:50%">
  <tr>
    <th>Fungicide Name</th>
    <th>Qunatity (Dosage per kg seed)</th>
  </tr>
  <tr>
    <td>Carbendazim</td>
    <td>3 gm</td>
  </tr>
  <tr>
  <td>Thiram</td>
  <td>3 gm</td>
  </tr>
</table> <br>
</center></p>
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
    <td>55</td>
    <td>155</td>
    <td>20</td>
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
    <td>25</td>
    <td>25</td>
    <td>12</td>
  </tr>
</table></center>
<br> 
<p>At time last ploughing apply well decomposed cow dung@10ton/acre in soil. Crop required Nitrogen@25kg, Phosphorus@25kg and Potash@12kg/acre in life cycle of crop. Apply N:P:K fertilizer dose in form of Urea@55kg/acre , SSP@155kg/acre and MOP@20kg/acre. Apply Full dose of Phosphorus, Potash and Nitrogen at time of transplanting. After two picking apply 25 kg of Nitrogen per acre.<br>
<b>WSF:</b> Apply Humic acid@1Ltr/acre or do soil application of 5 kg granules/acre, in initial vegetative growth of crop. It will help in better vegetative growth and good yield. 10-15 days after transplantation take spray of 19:19:19 along with micronutrient@2.5 to 3gm/Ltr of water. In vegetative growth, sometime due to low temperature plant cannot absorb nutrients from soil, plant get weak and give yellow appearance. In such situation give spray of 19:19:19 or 12:61:00@5-7gm/Ltr of water. If required, repeat spray after 10-15 days. 40-45 days after transplantation, take spray of 20%Boron@1gm along with micronutrient@2.5 to 3 gram per litre of water. To fulfil nutrient requirement and to increased yield by 10-15%, give two sprays of 13-00-45@10gm/Ltr of water. Give first spray at 50 days and second 10 days after first spray. When the crop is in flowering or fruiting stage, take spray of 0:52:34 or 13:0:45@5-7gm/Ltr of water. In high temperature flower drop is observed, to control flower drop take spray of NAA@5ml/10Ltr water when crop is in flowering stage. Repeat spray after 20-25 days.<br>
</p></div>
<br>
<br>
<button>
<a href="https://www.agriplexindia.com/index.php/chemical/fertilizers/vegetables/brinjal.html" class="button button1">Buy Fertilizer</a>
</button>
<br><br>
<button class="accordion">Irrigation</button>
<div class="panel">
<p>Irrigate the field after every third or fourth day during the summer season and after 12 to 15 days during the winter season. Timely irrigation is very important for high yields of brinjal. Brinjal fields should be regularly irrigated to keep the soil moist during frosty days. Avoid water stagnation in field as brinjal cannot tolerate water logging.</p>
</div><br>
<button class="accordion">Weed Control</button>
<div class="panel">
<p>Generally two - four weeding’s and hoeing are necessary for weed control, aeration and for the good growth of plants. Mulching with black polythene film reduces weed growth and maintains soil temperature.<br>
To control weeds efficiently, do pre-plant soil application of Fluchloralin@800-1000 ml/acre or Oxadiazon@400g/acre and pre-plant surface spraying of Alachlor@2 ltr/acre for better results.</p>
</div><br>
<button class="accordion"> Plant Protect</button>
<div class ="panel">
<p><br><b> Pest and their Control</b><br><br>
i.<b>Fruit and Shoot Borer:</b> It is one of the major and serious insect pests of brinjal. A short pinkish caterpillar bores into the terminal shoot and eats internal tissue in initial stages, later it bores into the young fruit. The large holes can be seen on the infected fruits. The insect affected fruits become unfit for consumption.<br>
Scout field every week after transplanting for fruit and shoot borer infestation. Remove and destroyed infected fruits. Take spray of Triazophos@20ml/10Ltr water and Neem extract@50gm/Ltr, one month after transplanting. Repeat spray with interval of 10-15 days. When crop is in flowering stage take spray of Chlorantraniliprole 18.5%SC (Coragen)@5ml+Teepol@5ml in 12 Ltr of water, twice with 20 days interval.<br>
In initial stage of infestation, take spray of 5% Neem extract@50gm/Ltr. If infestation is seen in field take sprayed of 25% Cypermethrin@2.4 ml/10Ltr of water on affected crops. For high population spray Spinosad@1ml/Ltr of water. Avoid spraying of Triazophos or any other insecticide after fruit maturation and harvest.<br>
ii.<b>Aphids:</b> The plants are also attacked by mite, aphids and mealy bug. They suck the sap from the leaves resulting in yellowing and drooping of leaves.<br>
If infestation of Aphid, white fly is observed in field to control take spray of Deltamethrin + Triazophos combination@ 10ml/10Ltr of water. To keep check on white fly spray with Acetamiprid@5gm/15Ltr of water.<br>
iii.<b>Thrips:</b> To check severity of thrips, keep blue sticky traps@6-8 per acre and to reduce the incidence take spray of Verticillium lecani@5gm/Ltr of water. If incidence of thrips is more, to control take spray of Fipronil@2ml/Ltr of water.<br>
iv.<b>Mite:</b> If infestation of Mite is observed in field, to control take spray of Abamectin@1-2ml/Ltr or Fenazaquin@2ml/Ltr of water.<br>
v.<b>Leaf eating caterpillar:</b> Some time Incidence of caterpillars is seen mostly at initial stage of crop.<br>
To control spray with neem based pesticides. If those are not that effective and infestation become high then only take spray of chemicals pesticides like Emamectin benzoate@4gm or Lambda Cyhalothrin@2ml/1Ltr of water.<br>
<br><b>Disease and their control:</b><br><br>
i.<b>Root Knot Nematodes:</b> It is common in brinjal crop. These are more harmful at initial stage of seedlings. They cause root galls. Due to infestation of root knot nematodes, plant get stunted, give yellow appearance and thus affect yield.<br>
Avoid monocropping and follow crop rotation. Incorporate Carbofuran or Phorate@5-8kg/acre in the soil.<br>
ii.<b>Damping Off:</b> Moist and poorly drain soil causes damping off disease. It is soil borne disease. Water soaking and shrivelling of stem occurs. Seedlings killed before emergence. If it appears in nursery the entire lot of seedling may get destroyed. It is a serious disease of brinjal.<br>
Before sowing do seed treatment with Thiram@3gm per Kg of seeds. Do soil solarisation of nursery soil. If damping off is observed in nursery. Drained out water and drenched soil of nursery with Copper Oxychloride@3gm/Ltr of water.<br>
iii.<b>Phomopsis Blight and Fruit Rot:</b> Dark brown color spots appear on leaves. The fruit show watery lesion and becomes black in appearance.<br>
Before sowing do seed treatment with Thiram@3gm per kg of seeds. Use blight disease resistant variety for cultivation. If infestation observed in field take spray of Zineb@2gm/Ltr of water or Mancozeb@2.5gm per litre of water.<br>
iv.<b>Little Leaf:</b> The affected leaves become thinner. The petal turn green leaf like. Infected plant does not bear fruit. The disease is transmitted by leaf hopper.<br>
Use disease resistant variety. In nursery use 10% Foret (20 gm, for 3 X 1 m broad bed). At time of sowing apply Phorate in between two rows of seeds. If infection observed, at initial stage, removed disease affected plants. Spray the crop with Dimethoate or Oxydemiton Methyl@1ml per litre of water. Little leaf is spread mainly through Aphid infestation, to keep check on Aphid Population spray with Thiamethoxam 25%WG@5gm/15Ltr of water.<br>
v.<b>Mosaic:</b> Light and green patches observed on leaves. Small bubbles or Blisters are form on leaves and leaf size remains small.  <br>
Select healthy and disease free seeds for cultivation. Uproot and destroyed infected plant away from field. Recommendations given for aphids may be adopted. (Take spray of Acephate 75SP@1gm/Ltr or Methyl demeton 25EC@2ml/Ltr of water or Dimethoate@2ml/Ltr of water.<br>
vi.<b>Wilt:</b> Dropping of entire leaves along with yellowing of crops. Wilting or drying of entire plant is seen. If infected stems cut and dipped in water, a white milky stream appears.<br>
Follow crop rotation. Cultivation of brinjal after french bean helps in controlling wilt. Remove and destroyed infected plant parts away from field. Avoid water stagnation in the field, to control wilt drench soil with of Copper Oxychloride@2.5gm/1Ltr of water.<br>
</p>
</div>
<br><br>
<button>
<a href="https://www.indiamart.com/proddetail/brinjal-pesticide-14532491612.html" class="button button2">Buy Pesticide Here</a>
</button>
<br>
<br>
<button class="accordion">Harvesting</button>
<div class="panel">
<p>Brinjal is harvested when the fruit attain proper size, color and before ripening stage. The fruit should have glossy appearance, attractive bright color to fetch good prices in the market.</p>
</div><br>
<button class="accordion">Post Harvest</button>
<div class="panel">
<p>Brinjal fruits cannot be stored at room temperature for long duration because of high transpiration rate and water loss. Brinjal fruit can be stored for 2-3 weeks at 10-11°C temperature and 92% relative humidity. After harvesting, Grading is done on the basis of Super, Fancy and Commercial. For packing, use gunny bags or baskets.</p>
</div><br>
<div class="zoom">
<img alt="brinjal" src="brinjal2.jfif">

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
