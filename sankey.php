<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Interactive Sankey Diagram</title>
    <script src="https://d3js.org/d3.v7.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/d3-sankey@0.12.4/dist/d3-sankey.js"></script>


    <link href="https://resources.jointjs.com/demos/rappid/build/package/rappid.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
    <script src="https://resources.jointjs.com/demos/rappid/build/package/rappid.js"></script>

    <!-- Include any custom CSS file if needed -->
<body>
 
<table border=1 cellpadding=2 cellspacing=2 width=1313 style='border-collapse:
 collapse;table-layout:fixed;width:100%; text-align: center; .th {font-weight: bolder;}'>
 
 <col width=42 style='mso-width-source:userset;mso-width-alt:1479;width:31pt'>
 <col width=337 style='mso-width-source:userset;mso-width-alt:11975;width:253pt'>
 <col width=354 style='mso-width-source:userset;mso-width-alt:12600;width:266pt'>
 <col width=56 style='mso-width-source:userset;mso-width-alt:1991;width:42pt'>
 <col width=468 style='mso-width-source:userset;mso-width-alt:16640;width:351pt'>
 <col width=56 style='mso-width-source:userset;mso-width-alt:1991;width:42pt'>
 <tr height=34 style='mso-height-source:userset;height:25.2pt'>
  <td height=34 class=xl65 width=42 style='height:25.2pt;width:31pt'>S.No.</td>
  <td class=xl65 width=337 style='border-left:none;width:253pt'>Variables</td>
  <td class=xl65 width=354 style='border-left:none;width:266pt'>Description</td>
  <td class=xl65 width=56 style='border-left:none;width:42pt'>Section</td>
  <td class=xl65 width=468 style='border-left:none;width:351pt'>Parameters</td>
  <td class=xl65 width=56 style='border-left:none;width:42pt'>Codes</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>1</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>occupation</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Occupation</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>B-3</td>
  <td class=xl66 style='border-top:none;border-left:none'>Housewife</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Employed</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=6 height=174 class=xl71 style='height:132.3pt;border-top:none'>2</td>
  <td rowspan=6 class=xl72 width=337 style='border-top:none;width:253pt'>education</td>
  <td rowspan=6 class=xl71 style='border-top:none'>Education</td>
  <td rowspan=6 class=xl73 style='border-bottom:.5pt solid black;border-top:
  none'>B-4</td>
  <td class=xl71 style='border-top:none;border-left:none'>** Illiterate ,no
  formal education ,* Literate</td>
  <td class=xl71 style='border-top:none;border-left:none'>illiterate</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Primary (upto class V)</td>
  <td class=xl71 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Middle (upto vlass VIII)</td>
  <td class=xl71 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Secondary (upto class X)</td>
  <td class=xl71 style='border-top:none;border-left:none'>4</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Senior Secondary (upto classXII)</td>
  <td class=xl71 style='border-top:none;border-left:none'>5</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Graduation &amp; above</td>
  <td class=xl71 style='border-top:none;border-left:none'>6</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>3</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>is_fam_diabetes_history</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Is
  there family history of diabetes</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>B-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>4</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>pregnancy_count</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Number
  of pregnancies</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>5</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>twin_pregnancy</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Twin
  Pregnancy</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>6</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>live_births_count</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Number
  of live births</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-3</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>7</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>date_last_delivery</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Date
  of last delivery</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-4</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>8</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>time_since_last_delivery</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Time
  since last delivery</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>9</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>was_delivery</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Was
  the delivery term of preterm</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-6</td>
  <td class=xl66 style='border-top:none;border-left:none'>Term</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Preterm</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>10</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>period_gestation</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Period
  of gestation (weeks)</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-7</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>11</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>mode_of_delivery</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>What
  was mode of delivery</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-8</td>
  <td class=xl66 style='border-top:none;border-left:none'>Vaginal</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Cesarean</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>12</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>weight_last_born_baby</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Weight
  of baby last born (kg)</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-9</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>13</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>weight_twin</td>
  <td class=xl66 style='border-top:none;border-left:none'>Weight (kg) of twin</td>
  <td class=xl66 style='border-top:none;border-left:none'>D-9</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>14</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>gender_baby</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Gender
  of baby</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-10</td>
  <td class=xl66 style='border-top:none;border-left:none'>Male</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Female</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>15</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>gender_twin</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>Gender
  of twin baby</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-10</td>
  <td class=xl66 style='border-top:none;border-left:none'>Male<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Female</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.8pt'>
  <td rowspan=3 height=128 class=xl66 style='height:96.0pt;border-top:none'>16</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>oral_glucose_tolerance_trimester</td>
  <td rowspan=3 class=xl68 width=354 style='border-top:none;width:266pt'>During
  pregnancy specify which trimester you got Oral Glucose Tolerance test done</td>
  <td rowspan=3 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-11</td>
  <td class=xl66 style='border-top:none;border-left:none'>Trimester 1(0-12
  weeks)</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none;border-left:
  none'>Trimester 2(13-28 weeks)</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none;border-left:
  none'>Trimester 3(29-40 weeks)</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none'>17</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>testing_period_gestation</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>Period
  of gestation at which testing done (if available)</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-11</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none'>18</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>ogtt_0_hour</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>What
  were the 75 gm Oral Glucose Tolerance Test ( OGTT) values at 0 hr</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-12</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none'>19</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>ogtt_1_hour</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>What
  were the 75 gm Oral Glucose Tolerance Test ( OGTT) values at 1 hr</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-12</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none'>20</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>ogtt_2_hour</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>What
  were the 75 gm Oral Glucose Tolerance Test ( OGTT) values at 2 hr</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-12</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=45 style='mso-height-source:userset;height:33.6pt'>
  <td height=45 class=xl66 style='height:33.6pt;border-top:none'>21</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>ogtt_hba1c</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>What
  were the 75 gm Oral Glucose Tolerance Test ( OGTT) values &amp; hba1c</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>D-12</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.8pt'>
  <td rowspan=3 height=98 class=xl66 style='height:73.2pt;border-top:none'>22</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_prior_development_diabetes</td>
  <td rowspan=3 class=xl68 width=354 style='border-top:none;width:266pt'>Did
  you develop diabetes in pregnancies prior to the one in question</td>
  <td rowspan=3 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-13</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.2pt'>
  <td height=30 class=xl66 style='height:22.2pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=30 style='mso-height-source:userset;height:22.2pt'>
  <td height=30 class=xl66 style='height:22.2pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=3 height=87 class=xl66 style='height:66.15pt;border-top:none'>23</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_insulin_prescribed</td>
  <td rowspan=3 class=xl66 style='border-top:none'>Were you prescribed insulin
  during index pregnancy</td>
  <td rowspan=3 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>D-14</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>24</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>insulin_prescribed_units_per_day</td>
  <td class=xl66 style='border-top:none;border-left:none'>If yes, no of insulin
  units/day</td>
  <td class=xl66 style='border-top:none;border-left:none'>D-14</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.8pt'>
  <td rowspan=3 height=96 class=xl66 style='height:72.9pt;border-top:none'>25</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_oral_anti_diabetic_prescribed</td>
  <td rowspan=3 class=xl68 width=354 style='border-top:none;width:266pt'>Were
  you prescribed oral anti-diabetic agents during pregnancy</td>
  <td rowspan=3 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-15</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=3 height=87 class=xl66 style='height:66.15pt;border-top:none'>26</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>oral_anti_diabetic_prescribed_agents</td>
  <td rowspan=3 class=xl66 style='border-top:none'>If yes,which oral
  anti-diabetic agent was prescribed</td>
  <td rowspan=3 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-15</td>
  <td class=xl66 style='border-top:none;border-left:none'>Metformin</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Glibenclamide</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Others</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=3 height=87 class=xl66 style='height:66.15pt;border-top:none'>27</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_pregnancy_after_index_pregnancy</td>
  <td rowspan=3 class=xl66 style='border-top:none'>Any pregnancy after index
  pregnancy</td>
  <td rowspan=3 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>D-16</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.8pt'>
  <td rowspan=3 height=96 class=xl66 style='height:72.9pt;border-top:none'>28</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_gdm_overtdm_preexisting_diabetes_in_pregnancy</td>
  <td rowspan=3 class=xl68 width=354 style='border-top:none;width:266pt'>Was
  there GDM/Overt DM/Pre-existing diabetes in that pregnancy</td>
  <td rowspan=3 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>D-17</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=4 height=116 class=xl71 style='height:88.2pt;border-top:none'>29</td>
  <td rowspan=4 class=xl72 width=337 style='border-top:none;width:253pt'>diabetes_categorisation_index_pregnancy</td>
  <td rowspan=4 class=xl71 style='border-top:none'>Categorization of diabetes
  in index pregnancy</td>
  <td rowspan=4 class=xl73 style='border-bottom:.5pt solid black;border-top:
  none'>D-18</td>
  <td class=xl71 style='border-top:none;border-left:none'>Normoglycemic</td>
  <td class=xl71 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>GDM</td>
  <td class=xl71 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Overt-GDM</td>
  <td class=xl71 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl71 style='height:22.05pt;border-top:none;border-left:
  none'>Pre-existing GDM</td>
  <td class=xl71 style='border-top:none;border-left:none'>4</td>
 </tr>
 <tr height=38 style='mso-height-source:userset;height:28.8pt'>
  <td rowspan=2 height=67 class=xl66 style='height:50.85pt;border-top:none'>30</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>if_breast_feeding_till_6_months_and_beyond</td>
  <td rowspan=2 class=xl68 width=354 style='border-top:none;width:266pt'>If
  infant was exclusively breastfed till 6 months and beyond</td>
  <td rowspan=2 class=xl69 width=56 style='border-bottom:.5pt solid black;
  border-top:none;width:42pt'>E-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>31</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>months_breast_fed_exclusively_6_months</td>
  <td class=xl66 style='border-top:none;border-left:none'>How many months
  infant was exclusively breastfed</td>
  <td class=xl66 style='border-top:none;border-left:none'>E-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=3 height=87 class=xl66 style='height:66.15pt;border-top:none'>32</td>
  <td rowspan=3 class=xl67 width=337 style='border-top:none;width:253pt'>if_breast_feeding_till_24_months_and_beyond</td>
  <td rowspan=3 class=xl66 style='border-top:none'>If Infant was breastfed till
  24 months and beyond</td>
  <td rowspan=3 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>E-3</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>NA</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=38 style='height:28.8pt'>
  <td height=38 class=xl66 style='height:28.8pt;border-top:none'>33</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>months_any_breast_feeding</td>
  <td class=xl68 width=354 style='border-top:none;border-left:none;width:266pt'>How
  many months child was breastfed (including exclusive &amp; others )</td>
  <td class=xl68 width=56 style='border-top:none;border-left:none;width:42pt'>E-4</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>34</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>height</td>
  <td class=xl66 style='border-top:none;border-left:none'>Height (cm)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>35</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>weight</td>
  <td class=xl66 style='border-top:none;border-left:none'>Weight (Kg)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>36</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>bmi</td>
  <td class=xl66 style='border-top:none;border-left:none'>Body Mass
  Index(kg/m2)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-3</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>37</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>prepregnancy_weight</td>
  <td class=xl66 style='border-top:none;border-left:none'>Prepregnancy
  Weight(kg)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-4</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>38</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>prepregnancy_bmi</td>
  <td class=xl66 style='border-top:none;border-left:none'>Prepregnancy BMI
  (kg/m2)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>39</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>waist_circumference</td>
  <td class=xl66 style='border-top:none;border-left:none'>Waist circumference
  (cm)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-6</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>40</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>hip_circumference</td>
  <td class=xl66 style='border-top:none;border-left:none'>Hip circumference
  (cm)</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-7</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>41</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>mean_second_third_systolic_blood_pressure</td>
  <td class=xl66 style='border-top:none;border-left:none'>Mean of IInd &amp;
  IIIrd systolic blood pressure</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-8</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>42</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>mean_second_third_diastolic_blood_pressure</td>
  <td class=xl66 style='border-top:none;border-left:none'>Mean of IInd &amp;
  IIIrd diastolic blood pressure</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-8</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>43</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>if_hypertensives_currently_being_taken</td>
  <td rowspan=2 class=xl66 style='border-top:none'>Are you currently taking
  antihypertensives</td>
  <td rowspan=2 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>F-9</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>44</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>regimen_hypertensives</td>
  <td class=xl66 style='border-top:none;border-left:none'>If Yes, mention
  regimen of antihypertensives</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-10</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>45</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>if_any_concomitant_illness</td>
  <td rowspan=2 class=xl66 style='border-top:none'>If there is any concomitant
  illness</td>
  <td rowspan=2 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>F-11</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>46</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>concomitant_illness_details</td>
  <td class=xl66 style='border-top:none;border-left:none'>If Yes; mention
  details</td>
  <td class=xl66 style='border-top:none;border-left:none'>F-12</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>47</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>plasma_glucose_fasting</td>
  <td class=xl66 style='border-top:none;border-left:none'>Oral Glucose
  tolerance test (mg/dl) fasting</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>48</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>plasma_glucose_30min</td>
  <td class=xl66 style='border-top:none;border-left:none'>Oral Glucose
  tolerance test (mg/dl) 30 min</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>49</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>plasma_glucose_120min</td>
  <td class=xl66 style='border-top:none;border-left:none'>Oral Glucose
  tolerance test (mg/dl) 120 min</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-1</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>50</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>serum_insulin_fasting</td>
  <td class=xl66 style='border-top:none;border-left:none'>Serum Insulin(µIU/ml)
  fasting</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>51</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>serum_insulin_30min</td>
  <td class=xl66 style='border-top:none;border-left:none'>Serum Insulin(µIU/ml)
  30 min</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>52</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>serum_insulin_120min</td>
  <td class=xl66 style='border-top:none;border-left:none'>Serum Insulin(µIU/ml)
  120 min</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-2</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>53</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>peptide</td>
  <td class=xl66 style='border-top:none;border-left:none'>C peptide(ng/ml)
  fasting</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-3</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>54</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>glycosylated_haemoglobin</td>
  <td class=xl66 style='border-top:none;border-left:none'>Glycosylated
  Haemoglobin -HbA1C (%)</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-4</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>55</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>lp_total_cholesterol</td>
  <td class=xl66 style='border-top:none;border-left:none'>Lipid profile: Total
  cholestrol (&lt;200mg/dl)</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>56</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>lp_tg</td>
  <td class=xl66 style='border-top:none;border-left:none'>Lipid profile:
  Triglycerides (&lt;150mg/dl)</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:21.6pt'>
  <td height=29 class=xl66 style='height:21.6pt;border-top:none'>57</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>lp_ldl</td>
  <td class=xl66 style='border-top:none;border-left:none'>Lipid profile: LDL
  cholesterol (130mg/dl)</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>58</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>lp_hdl</td>
  <td class=xl66 style='border-top:none;border-left:none'>Lipid profile: HDL
  cholesterol (&gt;60mg/dl)</td>
  <td class=xl66 style='border-top:none;border-left:none'>G-5</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl66 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=5 height=145 class=xl66 style='height:110.25pt;border-top:none'>59</td>
  <td rowspan=5 class=xl67 width=337 style='border-top:none;width:253pt'>glucose_tolerance_of_subject</td>
  <td rowspan=5 class=xl66 style='border-top:none'>Glucose tolerance of the
  subject</td>
  <td rowspan=5 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>G-6</td>
  <td class=xl66 style='border-top:none;border-left:none'>Normoglycemic
  (Fasting &lt; 100mg/dl, 2hr</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Prediabetes (Fasting 101-125 mg/dl or 2 hr 140-199 mg/dl or HbA1c
  5.7-6.4%)</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Diabetes (Fasting &#8805;126 mg/dl or 2 hr &#8805; 200 mg/dl or HbA1c
  &#8805; 6.5</td>
  <td class=xl66 style='border-top:none;border-left:none'>3</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Already diagnosed as diabetic (on medications)</td>
  <td class=xl66 style='border-top:none;border-left:none'>4</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>Already diagnosed as diabetic (not on medications)</td>
  <td class=xl66 style='border-top:none;border-left:none'>5</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td rowspan=2 height=58 class=xl66 style='height:44.1pt;border-top:none'>60</td>
  <td rowspan=2 class=xl67 width=337 style='border-top:none;width:253pt'>metaboloic_syndrome_criteria</td>
  <td rowspan=2 class=xl66 style='border-top:none'>Metabolic syndrome criteria:
  (criteria 1plus any two )</td>
  <td rowspan=2 class=xl77 style='border-bottom:.5pt solid black;border-top:
  none'>G-7</td>
  <td class=xl66 style='border-top:none;border-left:none'>Yes</td>
  <td class=xl66 style='border-top:none;border-left:none'>1</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none;border-left:
  none'>No</td>
  <td class=xl66 style='border-top:none;border-left:none'>2</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>61</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_hb</td>
  <td class=xl66 style='border-top:none;border-left:none'>HB (g/dl) [12-15
  g/dl]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-1</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>62</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_hct</td>
  <td class=xl66 style='border-top:none;border-left:none'>HCT (%) [36-46%]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-2</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>63</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_urea</td>
  <td class=xl66 style='border-top:none;border-left:none'>UREA (mg/dl)
  [10-40mg/dl]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-3</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>64</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_creatinine</td>
  <td class=xl66 style='border-top:none;border-left:none'>CREATININE (mg/dl)
  [0.50-1.00]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-4</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>65</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_calcium</td>
  <td class=xl66 style='border-top:none;border-left:none'>CALCIUM (mg/dl)
  [8.50-10.50]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-5</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>66</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_phosphate</td>
  <td class=xl66 style='border-top:none;border-left:none'>PHOSPHATE (mg/dl)
  [2.5--4.50]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-6</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>67</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_alk_phos_alp</td>
  <td class=xl66 style='border-top:none;border-left:none'>ALK PHOS-ALP(IU/L)
  [80-240 IU/L]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-7</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>68</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_sodium</td>
  <td class=xl66 style='border-top:none;border-left:none'>SODIUM (mEq/l)
  [135-145]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-8</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>69</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_potassium</td>
  <td class=xl66 style='border-top:none;border-left:none'>POTASSIUM (mEq/l)
  [3.50-5.00]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-9</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>70</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_uric_acid</td>
  <td class=xl66 style='border-top:none;border-left:none'>URIC ACID(mg/dl)
  [3.5-7]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-10</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>71</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_sgot</td>
  <td class=xl66 style='border-top:none;border-left:none'>SGOT(AST)
  [5.00-40.00]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-11</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>72</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_sgpt</td>
  <td class=xl66 style='border-top:none;border-left:none'>SGPT(ALT)
  [5.00-45.00]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-12</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>73</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_t4</td>
  <td class=xl66 style='border-top:none;border-left:none'>T4 (ug/dl) [5.1-14.1]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-13</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=29 style='mso-height-source:userset;height:22.05pt'>
  <td height=29 class=xl66 style='height:22.05pt;border-top:none'>74</td>
  <td class=xl67 width=337 style='border-top:none;border-left:none;width:253pt'>biochemical_investigations_tsh</td>
  <td class=xl66 style='border-top:none;border-left:none'>TSH(ulU/ml)
  [0.27-4.2]</td>
  <td class=xl66 style='border-top:none;border-left:none'>H-14</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl80 style='border-top:none;border-left:none'>&nbsp;</td>
 </tr>
 <tr height=19 style='height:14.4pt'>
  <td height=19 class=xl81 style='height:14.4pt'>&nbsp;</td>
  <td colspan=5 style='mso-ignore:colspan'></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=42 style='width:31pt'></td>
  <td width=337 style='width:253pt'></td>
  <td width=354 style='width:266pt'></td>
  <td width=56 style='width:42pt'></td>
  <td width=468 style='width:351pt'></td>
  <td width=56 style='width:42pt'></td>
 </tr>
</table>    




   
</body>
</html>
