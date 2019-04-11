<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><script type="text/javascript">
function mobileLoader(message)
	{ 
	
			$(&#8217;#wait&#8217;).html(&#8217;&#8216;);
			$(&#8221;#wait&#8221;).append(&#8221;<p id='loaderMessage'>&#8221;+message+&#8221;</p><p><img src='{ img_path("spiral.gif")}'>&#8221;);</p>

<p>		var i = 0;<br />
		setInterval(function()<br />
			{ <br />
				$(&#8217;#wait img&#8217;).css({ &#8220;transform&#8221;: &#8220;rotate(&#8221;+(30*i)+&#8220;deg)&#8221;});<br />
				i++;<br />
			},50 ); <br />
	}<br />
	
	<br />
$(document).ready(function()<br />
	{ <br />
	
	$(&#8217;.aButton2&#8217;)<br />
	&nbsp;   .on(&#8216;mouseover&#8217;,function()<br />
			{ <br />
				$(this)<br />
					.css(&#8216;color&#8217;,&#8216;blue&#8217;)<br />
					.css(&#8216;background-color&#8217;,&#8217;#C0C0C0&#8217;);<br />
			})<br />
		.on(&#8216;mouseleave&#8217;,function()<br />
			{ <br />
				$(this)<br />
					.css(&#8216;color&#8217;,&#8216;black&#8217;)<br />
					.css(&#8216;background-color&#8217;,&#8216;white&#8217;);<br />
			})<br />
		.on(&#8216;mousedown&#8217;,function()<br />
			{ <br />
				$(this)<br />
					.css(&#8216;background-color&#8217;,&#8216;grey&#8217;)<br />
					.css(&#8216;box-shadow&#8217;,&#8216;2px 2px 2px blue&#8217;)<br />
					.css(&#8216;color&#8217;,&#8216;blue&#8217;);<br />
			<br />
			})<br />
		&nbsp; .on(&#8216;mouseup&#8217;,function()<br />
			{ <br />
				$(this)<br />
					.css(&#8216;background-color&#8217;,&#8216;white&#8217;)<br />
					.css(&#8216;box-shadow&#8217;,&#8216;none&#8217;)<br />
					.css(&#8216;color&#8217;,&#8216;black&#8217;);<br />
			});		<br />
			<br />
			<br />
&nbsp;  &nbsp;   $(&#8217;#subButton&#8217;).on(&#8216;mouseup&#8217;, function()<br />
			&nbsp; { <br />
				&nbsp; $(&#8217;#wait&#8217;).css(&#8216;top&#8217;,&#8217;-5em&#8217;);<br />
				&nbsp; <br />
			&nbsp; });<br />
		<br />
&nbsp;  &nbsp;   $(&#8217;#am1, #am2, #qu, #clearButton&#8217;).on(&#8216;mouseenter&#8217;, function()<br />
			&nbsp; { <br />
				&nbsp; $(&#8217;#wait&#8217;).css(&#8216;top&#8217;,&#8216;0em&#8217;);<br />
				&nbsp; <br />
			&nbsp; });<br />
			&nbsp; <br />
		$(&#8216;div.aButton2:contains(&#8220;Verify File&#8221;)&#8217;).on(&#8216;mouseup&#8217;, function()<br />
			{ <br />
				&nbsp; $(&#8217;#wait&#8217;).css(&#8216;top&#8217;,&#8217;-10em&#8217;);<br />
				<br />
			});	<br />
		<br />
&nbsp;  &nbsp;  &nbsp; $(&#8216;div.aButton2:contains(&#8220;Verify File&#8221;)&#8217;).on(&#8216;mouseleave&#8217;, function()<br />
			{ <br />
				$(&#8217;#fileinput&#8217;).on(&#8216;mouseover&#8217;, function()<br />
					{ <br />
						$(&#8217;#wait&#8217;).css(&#8216;top&#8217;,&#8216;0em&#8217;);<br />
						<br />
					});	<br />
				<br />
			});	<br />
		<br />
			$(&#8217;#fileinput&#8217;).on(&#8216;mouseleave&#8217;, function()<br />
			{ <br />
				$(&#8217;#wait&#8217;).css(&#8216;top&#8217;,&#8216;0em&#8217;);<br />
				<br />
			});	<br />
			<br />
	});</p>

<p>function valInput()<br />
{ 
var inform = document.forms[&#8220;filein&#8221;];<br />
var fnm = inform.elements[&#8220;fname&#8221;].value;<br />
var rcvid = &#8220;wait&#8221;;</p>

<p>if(!fnm.match(/(\w|\d|(\Q-_\E))*\.txt/))index.php/front<br />
&nbsp; { <br />
&nbsp; var inform = document.forms[&#8220;filein&#8221;];<br />
&nbsp; inform.elements[&#8220;fname&#8221;].value = &#8220;Please input a FASTA type file&#8221;;<br />
&nbsp; }<br />
else<br />
&nbsp;  { <br />
&nbsp;  &nbsp;  &nbsp;   var mess = &#8220;Please Wait while Database Tables are being Built!&#8221;;<br />
&nbsp;  &nbsp;  &nbsp;   makeRequest(fnm,rcvid,&#8220;no&#8221;,mess);</p>

<p>&nbsp;  }<br />
}</p>



<p>function getXMLHttp()<br />
{ 
&nbsp; var xmlHttp</p>

<p>&nbsp; try<br />
&nbsp; { <br />
&nbsp;   //Firefox, Opera 8.0+, Safari<br />
&nbsp;   xmlHttp = new XMLHttpRequest();<br />
&nbsp; }<br />
&nbsp; catch(e)<br />
&nbsp; { <br />
&nbsp;   //Internet Explorer<br />
&nbsp;   try<br />
&nbsp;   { <br />
&nbsp;  &nbsp;  xmlHttp = new ActiveXObject(&#8220;Msxml2.XMLHTTP&#8221;);<br />
&nbsp;   }<br />
&nbsp;   catch(e)<br />
&nbsp;   { <br />
&nbsp;  &nbsp;  try<br />
&nbsp;  &nbsp;  { <br />
&nbsp;  &nbsp;  &nbsp; xmlHttp = new ActiveXObject(&#8220;Microsoft.XMLHTTP&#8221;);<br />
&nbsp;  &nbsp;  }<br />
&nbsp;  &nbsp;  catch(e)<br />
&nbsp;  &nbsp;  { <br />
&nbsp;  &nbsp;  &nbsp; alert(&#8220;Your browser does not support AJAX!&#8221;)<br />
&nbsp;  &nbsp;  &nbsp; return false;<br />
&nbsp;  &nbsp;  }<br />
&nbsp;   }<br />
&nbsp; }<br />
&nbsp; return xmlHttp;<br />
}</p>

<p>function makeRequest(snd,recid,drp,mess)<br />
{ 
&nbsp;  &nbsp;  &nbsp; mobileLoader(mess);<br />
		$.ajax(<br />
			<br />
				{ <br />
					type: &#8220;GET&#8221;,<br />
					<br />
					url: &#8220;{ assets_path('ht_ml/getMotifs.php')}&#8221;+&#8221;?dropDb=&#8221;+drp+&#8221;&amp;file=&#8221;+snd,<br />
					success:function(result)<br />
						{ <br />
						&nbsp; <br />
							$(&#8217;#&#8217;+recid).html(result);<br />
							<br />
						},<br />
					cache:false<br />
				});<br />
}
 <br />
function makeRequest2(snd,recid,mess)<br />
{ 
 <br />
	mobileLoader(mess);<br />
&nbsp; 	$.ajax(<br />
				<br />
				{ <br />
					type:	&#8220;GET&#8221;,<br />
					url: &#8220;{ assets_path('ht_ml/getMotifs.php')}&#8221;+&#8221;?motif=&#8221;+snd,<br />
					success:function(result)<br />
						{ <br />
						&nbsp; <br />
							$(&#8217;#&#8217;+recid).html(result);<br />
							<br />
						},<br />
					cache:false<br />
				});<br />
&nbsp;  <br />
}</p>

<p>function dropDb()<br />
{ 
 <br />
&nbsp; makeRequest(&#8220;none&#8221;,&#8220;wait&#8221;,&#8220;yes&#8221;);<br />
}</p>

<p><br />
function HandleResponse(response,recid)<br />
{ 
&nbsp; <br />
&nbsp;  document.getElementById(recid).innerHTML = response;<br />
}</p>

<p><br />
function clearInput()<br />
{ 
&nbsp; var inform = document.forms[&#8220;filein&#8221;];<br />
&nbsp; inform.elements[&#8220;fname&#8221;].value = &#8220;&#8221;;<br />
&nbsp; document.getElementById(&#8220;wait&#8221;).innerHTML = &#8220;&#8221;;<br />
}</p>

<p>function clearOut()<br />
{ 
	$(&#8217;#wait&#8217;).html(&#8217;&#8216;).css(&#8216;top&#8217;,&#8216;0em&#8217;);<br />
}</p>

<p><br />
function doSearch()<br />
{ 
var am1 = document.getElementById(&#8220;am1&#8221;).value;<br />
var am2 = document.getElementById(&#8220;am2&#8221;).value;<br />
var qu = document.getElementById(&#8220;qu&#8221;).value;<br />
var recid = &#8220;wait&#8221;;<br />
//if(am1 &amp;&amp; am2 &amp;&amp; qu)<br />
&nbsp; //{ <br />
&nbsp;   var fnm = am1 +&nbsp; am2 + qu;<br />
&nbsp;   var mess = &#8220;Please Wait for Database Response!&#8221;;<br />
&nbsp;   makeRequest2(fnm,recid,mess);<br />
&nbsp;   <br />
 // }<br />
}</p>

<p>&nbsp;</p>
</script><div id="mmContainer" class="viewer"><h1>Input Form for Minimotif Search</h1><div id="inputdiv" ><p>&nbsp; <br /></p><div id="fileinput" ><form id="filein"><div id="filecapt"><p style="margin-bottom:2em">Input the file name below&nbsp;&nbsp;(<i><b>FASTA-TEST.txt</b> is an example file that will work.&nbsp;&nbsp;However, the database takes several minutes to build since it has over a million table entries.</i>)&nbsp;&nbsp;If database or tables already exist you can <b>&#8216;Drop Database&#8217;</b> to restart.&nbsp;&nbsp;Another file can be used but it must be in the <b>FASTA format</b> and <b>.txt</b> extension.
							</p>
<p>						&nbsp;   <input class="fsiz" type="text"  onclick="clearInput()" name="fname" value="Input File Name Here"/><br /></p><div class="aButton2" type="button"  onclick="valInput()">Verify File and Start Database Build</div><div class="aButton2" type="button" onclick="dropDb()">Drop Database</div></form>
<p>							<br /></p>
</div>
<p>						<br /></p>
</div><div id="motifsel" ><div id="aFormContainer"><form id="aminocodes"><p>Select below the first and last letter codes for minimotif sequence you
							want to search.&nbsp; (e.g. P and G for Px&#8230;..xG where x is any other amino acid code).
						</p>

<p>						<select id="am1" name="am1" class="fsiz" ><br /></p><option value="G">G - Glycine</option><option value="A">A - Alanine</option><option value="V">V - Valine</option><option value="L">L - Leucine</option><option value="I">I - Isoleucine</option><option value="M">M - Methionine</option><option value="F">F - Phenylalanine</option><option value="W">W - Tryptophan</option><option value="P">P - Proline</option><option value="S">S - Serine</option><option value="T">T - Threonine</option><option value="C">C - Cysteine</option><option value="Y">Y - Tyrosine</option><option value="N">N - Asparagine</option><option value="Q">Q - Glutaminie</option><option value="D">D - Aspartic Acid</option><option value="E">E - Glutamic Acid</option><option value="K">K - Lysine</option><option value="R">R - Arginine</option><option value="H">H - Histidine</option>
<p>						</select></p><div id="mobX">X&#8230;.X</div>
<p>						<select id="am2" name="am2" class="fsiz"><br /></p><option value="G">G - Glycine</option><option value="A">A - Alanine</option><option value="V">V - Valine</option><option value="L">L - Leucine</option><option value="I">I - Isoleucine</option><option value="M">M - Methionine</option><option value="F">F - Phenylalanine</option><option value="W">W - Tryptophan</option><option value="P">P - Proline</option><option value="S">S - Serine</option><option value="T">T - Threonine</option><option value="C">C - Cysteine</option><option value="Y">Y - Tyrosine</option><option value="N">N - Asparagine</option><option value="Q">Q - Glutaminie</option><option value="D">D - Aspartic Acid</option><option value="E">E - Glutamic Acid</option><option value="K">K - Lysine</option><option value="R">R - Arginine</option><option value="H">H - Histidine</option>
<p>						</select><br />
							<select id="qu" name="qu"><br /></p><option value="X">Select which Search that you want to do.</option><option value="0">Get All Accession Numbers for chosen miniMotif</option><option value="1">Get All Motif Instances in All Proteins</option><option value="2">Get Start Positions of selected Motif in All Proteins</option><option value="3">Get Number of Motifs for Each Protein</option><option value="4">Get All Species Names in which selected Motif occurs</option><option value="5">Get Average Length of All Proteins for the selected Motif</option>
<p>							</select><br />
						</br><input id="subButton" type="button" class="fsiz show-page-loading-msg" data-textonly="false" data-textvisible="true"  data-msgtext=""<br />
						data-inline="true" onclick="doSearch()" value="Submit Search"/></br></br><br />
						</br><input id="clearButton" type="button" class="fsiz show-page-loading-msg" data-textonly="false" data-textvisible="true"  data-msgtext=""<br />
						data-inline="true" onclick="clearOut()" value="Clear Output"/></br></br><br /></p>
</form></div><p>	<br />
					<br />
					<br />
					<br /></p>
</div><div id="wait"></div></div></div>

<p>&nbsp;</p><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>