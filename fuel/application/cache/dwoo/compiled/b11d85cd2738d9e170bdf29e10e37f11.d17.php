<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html lang="en">
    <head>
	   <meta charset="UTF-8">
       <meta http-equiv="content-type" content="text/html;charset=UTF-8">
       
       <meta charset="utf-8">
	 	<title>
			<!--__FUEL_MARKER__0-->Home		</title>
	
		<meta name="keywords" content="<!--__FUEL_MARKER__1-->">
		<meta name="description" content="<!--__FUEL_MARKER__2-->">
	
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script><script>window.jQuery || document.write('<script src="/FUEL-CMS/assets/js/jquery.js?c=-62169955200"><\/script>');</script>	       
     
	
		<link href = "/FUEL-CMS/assets/css/headerCSS.css?c=-62169955200" rel="stylesheet" type="text/css" />
		<link href = "/FUEL-CMS/assets/css/footerCSS.css?c=-62169955200" rel="stylesheet" type="text/css" />
		
		<!-- Custom ThemeRoller files -- excite bike  -->
  		<link href="/FUEL-CMS/assets/css/excite-bike/jquery-ui-1.10.4.custom.css?c=-62169955200" rel="stylesheet">
		<script src="/FUEL-CMS/assets/js/jquery-1.10.2.js?c=-62169955200"></script>
		<script src="/FUEL-CMS/assets/js/jquery-ui-1.10.4.custom.js?c=-62169955200"></script>

		

				
			
		
						<link href = "/FUEL-CMS/assets/css/miniMotifCSS.css?c=-62169955200" rel="stylesheet" type="text/css" />
				<title>Input Form for Minimotif Search</title>
				
			
		
				
		
				
				        
				        
				        
				        
				        
						
				        
						
				       
						
					
	   
	    	   
		
		<style>	
		 	
		</style>
		
		<script type="text/javascript">
		var viewer = 0;
		var pageTitleStr =  "";
		var pageT =  "";
		$(document).ready(function()
			{ 
					 var title = "Protein Minimotif Search Program";
					 $(document).prop('title', title);
					 pageTitleStr = title;
					  
					  
					  
					 var headerAndFooter =  "
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: headAndFoot</p>
<p>Filename: _blocks/header.php</p>
<p>Line Number: 223</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/application/views/_blocks/header.php<br />
			Line: 223<br />
			Function: _error_handler			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/core/Loader.php<br />
			Line: 396<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/core/Loader.php<br />
			Line: 323<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/application/views/_layouts/main.php<br />
			Line: 1<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/core/Loader.php<br />
			Line: 396<br />
			Function: include			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/core/Loader.php<br />
			Line: 323<br />
			Function: _ci_load			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/core/Loader.php<br />
			Line: 462<br />
			Function: view			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/libraries/Fuel_pages.php<br />
			Line: 824<br />
			Function: module_view			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/controllers/Page_router.php<br />
			Line: 118<br />
			Function: cms_render			</p>

		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/fuel/modules/fuel/controllers/Page_router.php<br />
			Line: 84<br />
			Function: _remap_cms			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/ubuntu/workspace/FUEL-CMS/index.php<br />
			Line: 364<br />
			Function: require_once			</p>

		
	

</div>";
					 //alert(headerAndFooter);
					 if (headerAndFooter == 'no'){ 
					 	$('#headbar').css('display','none');
					 	$('#footContainer').css('display','none');
					 	$('body').css('zoom','50%');
					 }
					 
					  
					//Set up Blinking Button and span
					setInterval(function(){ 
										$('#clickdiv1')	
											.animate({ opacity:'0.5'},500)
											.animate({ opacity:'1.0'},500);
										$('.clkmess')	
											.animate({ opacity:'0.5'},500)
											.animate({ opacity:'1.0'},500);
									},25);

					
                   // Browser Capatability for background images
				   var  httpAgent = "Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/66.0.3359.139 Safari\/537.36";
				   var chrome = httpAgent.search("Chrome");
				   var firefox = httpAgent.search("Firefox");
				   
				  if((chrome < 0))  // For Other than Google Chrome
						{ 
								$('#outframe, #outframebg').css('height','75em');
						
						}
				  if((chrome < 0) && (firefox < 0)) // Exclusively For Internet Explorer
						{ 
								$('#outframe, #outframebg').css('height','45em');
						
						}
				  if(firefox >= 0)  // For Firefox
						{ 
							    $('#footContainer').css('font-size','1.5em');
						
						}
				 	
				 /**************************  Manage Site Descriptor ************************************/
				     /**************************  Manage Site Descriptor ************************************/
				      var mobileUrl = "";  //for Mobile Portfolio
				      $('#menuDescription').show().css('width','80%').css('height','auto').css('margin','2em 0em 0em 10%').css('padding','1em');
				      $('#lvImgDiv').hide();
				      $('#catchMenu').hide();
				      $('#imageHolder').hide();
				      $('#bDiv').hide();
				      $('#textDv').css('width','100%').css('padding','0em').css('margin','0em');
				      $('#bText').css('padding','0em').css('height','96%').css('margin','0em');
				
					  $('#menuDescription,#textDv,#bText').css('font-size','1.0em').css('left','0em').css('text-align','left').css('float','left');
			          $('#descrip').css('position','relative')
			                             .css('color','black') 
					                     .css('text-align','left')
										 .css('padding','0em')
										 .css('margin','0em')
										 .css('height','10em')
										 .css('width','100%')
										 .css('font-size','1.1em')
										 .css('z-index','750')
										 .css('display','block');
										 
										 
										 $('#bText').html('<p class="descHdr">Site Description</p><p>Hover over a Menu button to see a description Here of the Link contents.  This Site has been recently optimized to be more Responsive across devices in terms of CSS formatting, But not in Touch Events.'+
										       '&nbsp;&nbsp;See <a href="'+mobileUrl+'" style="color:blue">Mobile Web Portfolio</a> under the Software Development Tab for a mobile portfolio version developed with JQuery Mobile.'+
										       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p>');
						
			 
				    $('#headbar').css('height','24em');
			        pageT = "Protein Minimotif Search Program";
			     
				    $('#headbar').on('mouseleave',function(){ 
				    	   
						     $('#headbar').css('height','24em');
						     $('#catchMenu').hide();
				    	     $('#imageHolder').hide();
				    	     $('#lvImgDiv').hide();
				    	     $('#bDiv').hide();
				    	     $('#descrip,#textDv').css('width','96%');
				    	     
							 $("[id^='btn']").children('div').css('display','none');
		        		     var el = $('#menuDescription').find('p#others').text();
		        		     if(pageTitleStr != ""){ 
		        		     	 
						           if(pageTitleStr != "Portfolio Front Page"){ 
						           	
						           	$('#menuDescription') 
						           		.css('position','relative')
						           		.css('height','1em')
						           		.css('padding','auto')
							           	.css('text-align','center')
		      							.css('color','blue')
		      							.css('font-size','1.5em'); 
		      							
		      							$('#descrip').css('text-align','center').css('height','100%').css('left','0em');
	      								$('#bText').css('position','relative').css('width','100%').css('height','100%').css('text-align','center');
	      							    $('#descrip,#textDv,#bText').css('margin','0em').css('padding','0em').css('font-size','1em');
							      	 if(el == '') 
							           	$('#bText').text(pageTitleStr);	 
								     else if(el != ''){ 
								        pageTitleStr = el;
								        pageT = el;
						      	    	$('#bText').text(pageTitleStr);	
						            }
					              }
					        	}
					         else if(pageTitleStr == ''){ 
					         	
					         	  $('#catchMenu').hide();
						          if(pageT != "Portfolio Front Page"){ 
						          	
						          	$('#menuDescription') 
							          	.css('position','relative')
						           		.css('height','1em')
						           		.css('padding','auto')
							           	.css('text-align','left')
		      							.css('color','blue')
		      							.css('font-size','1.3em'); 
		      					
		      						$('#descrip').css('text-align','center').css('height','100%').css('left','0em');
	      							$('#bText').css('position','relative').css('width','100%').css('height','100%').css('text-align','center');
	      							$('#descrip, #textDv, #bText').css('margin','0em').css('padding','0em').css('font-size','1em');
	      							
							      	 if(el == '') 
							           	$('#menuDescription #descrip #bText').text(pageT); 
					                		} 
				                     else	{ 
				                	     $('#catchMenu').css('visibility','hidden');
				                	     $('#catchMenu').css('display','none');
				                	     $('#bDiv').hide();
									     $('#textDv').css('width','100%').css('padding','0em').css('margin','0em');
									     $('#bText').css('padding','0em').css('height','96%').css('margin','0em');
				                	     
				                	     $('#menuDescription').css('width','80%').css('height','auto').css('text-align','left').css('padding','1em');
				                	     $('#menuDescription, #textDiv, #descrip').css('text-align','left').css('font-size','1.0em').css('left','0em').css('text-align','left').css('float','left');
				                	     
									     $('#descrip')
									    			 .css('position','relative')
									                 .css('display','block')
									    			 .css('height','10em')
								     				 .css('color','black') 
								                     .css('text-align','left')
													 .css('padding','0em')
													 .css('left','0em')
													 .css('margin','0em')
													 .css('width','100%');
													 
													 
										$('#bText').html('<p class="descHdr">Site Description</p><p>Hover over a Menu button to see a description Here of the Link contents.  This Site has been recently optimized to be more Responsive across devices in terms of CSS formatting, But not in Touch Events.'+
													       '&nbsp;&nbsp;See <a href="'+mobileUrl+'" style="color:blue">Mobile Web Portfolio</a> under the Software Development Tab for a mobile portfolio version developed with JQuery Mobile.'+
													       '&nbsp;&nbsp;The inline header menu above works better for Desktops and the vertical menu below works better for Mobile devices.</p><br>').css('margin','0em'); 
											       
											       
									    $('#headbar').css('height','26em');		       
								              
								   }  
					         }
									    
					      
			    		 });
			   	 
				   $('#menuDescription').find('a').mouseover(function(){ 
				   			$(this).css('color','grey');
				   			$(this).mouseleave(function(){ 
				   				$(this).css('color','green');
				   			});
				      });	
				 
		
				
			        $('.bCon').mouseenter(function(){ 
						$('.bCon>div').children().css('display','block');
					});
				 			
		/********************** End Manage Site Descriptor ***********************************************************************/		
		
	  
		 $('#arrowImg > img').attr('src',imagePath);
		
		
		/********************** HEADER IMAGES SECTION **************************************************************************/		 			
					        // Desktop Header Images
						
						
						
							var upArrow =  "/FUEL-CMS/assets/images/upArrow.gif";
							var laravelMVCImage =  "/FUEL-CMS/assets/images/laravelMVC.jpg";
						
						
							var loaderImage =  "/FUEL-CMS/assets/images/spiral.gif";
							var mhImage1 =  "/FUEL-CMS/assets/images/worksImg.jpg";
							var mhImage2 =  "/FUEL-CMS/assets/images/mechEngImage2.jpg";
							var mhImage3 =  "/FUEL-CMS/assets/images/topLabel.jpg";
							var mhImage4 =  "/FUEL-CMS/assets/images/engImg.jpg";
							var mhImage5 =  "/FUEL-CMS/assets/images/compSciImage.jpg";
							var mhImage6 =  "/FUEL-CMS/assets/images/mathhonorimg.jpg";
							var mhImage7 =  "/FUEL-CMS/assets/images/procprojengimg.jpg";
							var mhImage8 =  "/FUEL-CMS/assets/images/technicalwritingimage.jpg";
							
				        // GET HEADER IMAGES for DESKTOP and MOBILE
						var hfSwitch = 'off';
						var pageTitleStr =  "";
				
					 
					      // Mobile Header Image Variables
					      var mhImages = new Array();
						  mhImages[0] = mhImage2;
						  mhImages[1] = mhImage3;
						  mhImages[2] = mhImage5;
						  mhImages[3] = mhImage6;
						  mhImages[4] = mhImage7;
						  mhImages[5] = mhImage8;
						  
		
			/***************************** MOBILE APP HEADER DISPLAY CODE ***************************************************************************/
						  
						  var viewer = 0;
						  //alert(hfSwitch);
					      var mobileAppHeaderAdjust = hfSwitch;
					      if(mobileAppHeaderAdjust == 'on')   // MOBILE APP
						 	{ 
								$('#headbar').css('opacity','0.0').css('zoom','1%').css('display','none');
								$('#footContainer').css('opacity','0.0').css('zoom','1%').css('display','none');
								$('.sys_id2').css('font-size','1em');
							
								
								// Adjust Mobile CSS settings per Page
								var whichPage = 'amino';
								if(whichPage == 'newOrominer')
									{ 
										//$('html').css('zoom','45%');
										$('#protitle').css('margin','auto');
										//$('#positDiv img').css('zoom','70%');
									
									}
									
								
								else if(whichPage == 'orominerHisto')
									{ 
										//$('html').css('zoom','60%');
										$('#outframe').css('margin','auto');
										
									}
									
							    else if(whichPage == 'othello')
									{ 
										//$('html').css('zoom','60%');
										//$('#oframe').css('margin-right','20%');
										
									}
									
								else if(whichPage == 'emailForm')
									{ 
									
									}
								
								
								
								$('#llvOutFrame').add('#mmContainer').css('zoom','75%');
							    $('body').prepend('<div id="pGraphic"><div id="positDiv"><h2>RLS Career Porfolio</h2><img src="'+ "https://fuel-cms-rsypertjr.c9users.io/FUEL-CMS/images/procprojengimg.jpg"+'"/></div></div>');
								if(whichPage == 'newOrominer' || whichPage == 'orominerHisto' || whichPage == 'othello')
									{ 
										//$('#pGraphic').css('height','35em').css('margin-bottom','0.5em');
										$('#positDiv h2').css('font-size','3.5em');
									}
									
						        // Mobile Header Animation
								var i = 0;
								var mhImg = mhImage2;
								setInterval(function(){ 
										mhImg = mhImages[i];
										
										$('#pGraphic #positDiv').html('');	
										$('#pGraphic #positDiv').append('<h2>RLS Career Porfolio</h2><img src="'+mhImg+'"/>').fadeIn(1000);	
										$('#positDiv h2').css('font-size','3.5em');
										i++;
										if(i>(mhImages.length-1)) i = 0;	
									},3000);
									
							
								}
						 else if(mobileAppHeaderAdjust == 'off')   // DESKTOP APP
								{ 
									$('#headbar').css('opacity','1.0');
									$('#footContainer').css('opacity','1.0');
									
								}
								
						$('#headbar').mouseleave(
							function()
								{ 
									$('.aUl').css('display','none');
								});
								
				/******************* END MOBILE APP HEADER DISPLAY CODE *****************************************************************************************/
								
		
								
						/******************* HEADER BUTTON AND JQUERY UI CODE *********************************************************************************/		
										
								$('#btn1 button').button({ 
									icons: { 
												primary: 'ui-icon-home'
										   }
									 });
									 
								$('#btn2 button,#btn3 button,#btn4 button,#btn5 button,#btn6 button').button({ 
									icons: { 
												primary: 'ui-icon-locked'
										   }
									 });
								
							
								$('button').on('mouseenter',function()
									{ 
										var $thisButton = $(this);
										
										$('#twLi1').find('.aUl2').css('display','none'); 
										$('#twLi1').css('color','orange');
										$thisButton.css('border-style','none')
										           .parent()
											       .siblings()
												   .find('.aUl').css('display','none');
										$thisButton.parent()
													.siblings()	
												    .find('span.ui-icon-unlocked')
													   .removeClass('ui-icon-unlocked')
													   .addClass('ui-icon-locked');
										$thisButton.siblings('.aUl:first')
												   .css('border','none')
												   .css('display','block')
										           .each(function(){ 
														var $thisUl1 = $(this);
														$thisUl1.css('display','block')
															.fadeIn(1000)
															.css('opacity','1.0')
															.find('#triggerDiv .aLi, #triggerDiv #twLi1')
															.each(function()
																{ 
																var $thisLi = $(this);
																$thisLi
																//.css('color','white')
																.on('mouseenter',function()
																	{ 
																		$(this).find('.aUl,.aUl2').css('display','block').css('color','white'); 
																		$(this)//.addClass('ui-state-active')
																			   .css('color','blue'); 
																        $('#twLi1').css('color','orange');
																        $('.aUl2:nth-child(even)').css('color','white');
																	    $('.aUl2:nth-child(odd)').css('color','orange'); 
																
															
																	})
																.on('mouseleave',function()
																	 { 
																		$(this).find('ul').css('display','none');
																		$(this).find('.aUl,.aUl2').css('display','none'); 
																		$(this).removeClass('ui-state-active');
																		//$(this).css('color','yellow');	
																		$(this).parent().find('.aLi:nth-child(even)').css('color','white');
																		$(this).parent().find('.aLi:nth-child(odd)').css('color','orange');
																   
																	 })
																})		// end of each $thisLi			
																.find('.aUl2')
																.each(function()
																		{ 
																		  var $thisUl2 = $(this);
																		  $thisUl2.on('mouseenter',function()
																				    { 
																						$(this).addClass('ui-state-active')
																					   .css('color','blue')
																					   .css('display','block'); 
																				
																				  })	
																		        .on('mouseleave',function()
																				     { 
																				 	  
																						$(this).removeClass('ui-state-active')
																							.css('color','white'); 
																			
																			    	  });
																		});  //end of find each $thisUl2
													});  // end of find each thisUl1		

							$('button .aUl .aLi .aUl2').css('display','none'); 
							// button state, color and list color
							$thisButton.addClass('ui-state-active')
									   .addClass('ui-state-focus')
									   .css('color','blue')
									   .find('.aUl')
									   .each(function()
											{ 
												$(this).css('color','white');
											});
								   
							
							var x = 0
							$thisButton.click(function(e)
							{ 
							
								if(x == 1)
									{ 
										$(this)
										   .find('span.ui-icon-locked')
										   .removeClass('ui-icon-locked')
										   .addClass('ui-icon-unlocked'); 
										$(this)
											.find('.aUl')
											.each(function()
												{ 
													$(this).css('display','block')
													$(this).css('color','white')
													$(this).fadeIn(1000).css('opacity','1.0');
												});
								
								
										$('button .aUl .aLi .aUl').css('display','none'); 
										$(this).addClass('ui-state-active')
											   .addClass('ui-state-focus');
										x = 0;
									}else{ 
										$(this).find('.aUl')
											   .each(function()
													{ 
													   $(this).css('display','none').fadeOut(2000)
													   $(this).css('opacity','0.0');
													});
										$(this).removeClass('ui-state-active')
											   .removeClass('ui-state-focus')
											   .find('span.ui-icon-unlocked')
												   .removeClass('ui-icon-unlocked')
												   .addClass('ui-icon-locked');
												   
										x = 1;
										}
										e.preventDefault();
							});
								   
							//unlock icon on mouse enter	   
							$thisButton.find('span.ui-icon-locked')
									   .removeClass('ui-icon-locked')
									   .addClass('ui-icon-unlocked');
						});   // end of each $thisButton		
				

					$('button').mouseleave(function()
						{ 
							$(this).css('color','white')
								   .css('border','2px solid white');
						});
						
			//Software Development Menu in Graphic Display	
					$('#triggerDiv #btn3').on('mouseenter',function(){  
							 
							 $('#triggerDiv #sdUl1').css('display','none');
						     $('#imageHolder').show();
						     $('#menuDescription').css('padding','1.0em');
						     $('#textDv').css('width','65%').css('float','left').css('margin','0em');
						     $('#bText').css('width','100%');
						    
						     var el = $(this).find('#sdUl1').css('display','none').css('margin','0em 0em 0em 0em')
								                    .css('float','right').css('width','auto').css('height','98%')
								                    .css('position','relative').css('font-size','0.75em')
								                    .css('background-color','#adb7c1').css('padding','0.25em 0em 0.5em 1.25em');
					
							 el.hide();
					
		                     if(!$('#catchMenu #btn3').length){ 
								   el.find('.aLi').css('background-color','lightgray').css('width','46%');
								  
					
								   $('#catchMenu').html('')
												  .css('width','42%').css('height','98%')
												  .css('margin','0.5em 0em 0em 0.5em');
								   $('#catchMenu').append(el.find('.aLi').clone(true).show());
								   $('#catchMenu').find('.aLi').css('padding','3px').css('height','9%')
						                            .css('float','left').css('width','95%')
						                            .css('margin','0.25em')
						                            .parent().css('overflow','auto');
								   el.find('#sdUl1').css('display','none');
		                     }
		                 
					
					});
					
					$('#triggerDiv #btn3').on('mouseover',function(){ 
					  $('#triggerDiv #sdUl1').css('display','none');	
					  $('#catchMenu').css('display','block');
					     $('#catchMenu #sdUl1').css('display','block'); 
					     $('#catchMenu').css('visibility','visible');
					     $('#menuDescription').css('position','relative')
						     			  	  .css('color','black') 
											  .css('display','block');
										 	  
					      $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                                       .css('margin','6% 0% 0% 0%');
									        
						    
					                                        
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
					      $('#descrip').css('width','55%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('left','0em').css('top','0em')
					                   .css('margin','0em');
					      $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						            
					    
					     
					       if($('#catchMenu #btn3').length > 0){ 
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #sdUl1').css('display','none');
								   $('#catchMenu #btn3').css('visibility','hidden');
								   $('#catchMenu').append(el.clone(true).show());	
								   $('#catchMenu #btn3').css('visibility','hidden');
								   $('#catchMenu #btn3 #sdUl1').css('visibility','visible');
								   
								   $('#menuDescription').on('mouseleave',function(){ 
										$(this).css('margin-top','0em').css('opacity','1.0em');
									});
					          }
		                    
					});
					
					
					
			
			
			       	//Technical Writing Menu in Graphic Display	
					$('#triggerDiv #btn4').on('mouseenter',function(){ 
		                     if(!$('#catchMenu #btn4').length){ 
								   var el = $(this).find('#twUl1').css('display','none');
								   el.hide();
								   $('#catchMenu').html('').css('transform','scale(1,1)');
								   $('#catchMenu').append(el.clone(true).css('display','block').css('visibility','visible')
								                					    .css('float','right').css('margin-right','0em'))
															                  .css('width','30%').css('height','98%')
															                  .css('font-size','0.90em').css('padding','0em')
															                  .css('margin','-0.5em 0em 0em 0em');	
								   //$('#catchMenu #btn4').add('#catchMenu #btn4 > button').css('padding','0em').css('visibility','hidden');
								   $('#catchMenu #twUl1').css('visibility','visible').css('background-color','#adb7c1').css('position','relative')
								                         .css('padding','1em').css('width','70%').css('height','95%').css('left','-2.5em');
								   $('#catchMenu #twUl1 .aLi').css('width','90%').css('background-color','lightgray')
								                              .css('padding','0.25em').css('margin-bottom','0.5em');
								   $('#catchMenu #twUl1 #twLi1').css('width','90%').css('font-size','1.2em')
								                               .css('padding','0.25em').css('margin-bottom','0.5em').css('background-color','lightgray');
								   $('#catchMenu #twUl1 #twLi1 .aUl2').css('font-size','0.80em');
								   $('#catchMenu #twUl1 #twLi1 #twUl2').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl3').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl4').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi2').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi3').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi4').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
							
								   $('#catchMenu #twUl1 #twLi1').on('mouseover',function(){ 
				                    	$(this).find('.aUl2').css('display','block');
				                    	$('##menuDescription').css('height','auto');
				                		 });
				                    
								   $('#catchMenu #twUl1 #twLi1').on('mouseleave',function(){ 
				                    	$(this).find('.aUl2').css('display','none');
				                		 });		  
								   el.find('#twUl1').css('display','none');
		                     }
						});
					
						$('#triggerDiv #btn4').on('mouseover',function(){ 
						    $('#triggerDiv #twUl1').css('display','none');
						     $('#catchMenu').css('display','block');
						     $('#catchMenu').css('visibility','visible');
						     $('#menuDescription').css('color','black');
						     
						    $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                        		       .css('margin','6% 0% 0% 0%');
									        
						    
					                                          
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
						     $('#descrip').css('width','63%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('margin','0em');
						     $('#textDv').css('width','50%').css('float','left').css('margin','0em');
					         $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						     
					
		                     if($('#catchMenu #twUl1').length){ 
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #twUl1').css('display','none');
								   $('#catchMenu').append(el.clone(true).css('display','block')).css('padding','0em');
								   $('#catchMenu #twUl1').css('visibility','visible');
						    	   $('#imageHolder').show();
		                     }
		                
					});
			
			       	//Technical Writing Menu in Graphic Display	
					$('#triggerDiv #btn4').on('mouseenter',function(){ 
		                     if(!$('#catchMenu #btn4').length){ 
								   var el = $(this).find('#twUl1').css('display','none').css('margin','3em 0em 0em 3em')
								                    .css('transform','scale(1.3,1.3)');;
								   el.hide();
								   $('#catchMenu').html('').css('transform','scale(1,1)');
								   $('#catchMenu').append(el.clone(true).css('display','block').css('visibility','visible')
								                					    .css('float','right').css('margin-right','0em'))
															                  .css('width','30%').css('height','60em')
															                  .css('font-size','0.90em').css('padding','0em')
															                  .css('margin','-0.5em 0em 0em 0em');	
								   //$('#catchMenu #btn4').add('#catchMenu #btn4 > button').css('padding','0em').css('visibility','hidden');
								   $('#catchMenu #twUl1').css('visibility','visible').css('background-color','#adb7c1').css('position','relative')
								                         .css('padding','1em').css('width','70%').css('left','-2.5em');
								   $('#catchMenu #twUl1 .aLi').css('width','90%').css('background-color','lightgray')
								                              .css('padding','0.25em').css('margin-bottom','0.5em');
								   $('#catchMenu #twUl1 #twLi1').css('width','90%').css('font-size','1.2em')
								                               .css('padding','0.25em').css('margin-bottom','0.5em').css('background-color','lightgray');
								   $('#catchMenu #twUl1 #twLi1 .aUl2').css('font-size','0.80em');
								   $('#catchMenu #twUl1 #twLi1 #twUl2').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl3').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi1 #twUl4').css('width','83%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi2').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi3').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
								   $('#catchMenu #twUl1 #twLi4').css('width','90%').css('background-color','lightgray').css('padding','0.25em');
							
								   $('#catchMenu #twUl1 #twLi1').on('mouseover',function(){ 
				                    	$(this).find('.aUl2').css('display','block');
				                    	$('##menuDescription').css('height','auto');
				                		 });
				                    
								   $('#catchMenu #twUl1 #twLi1').on('mouseleave',function(){ 
				                    	$(this).find('.aUl2').css('display','none');
				                		 });		  
								   el.find('#twUl1').css('display','none');
		                     }
						});
					
						$('#triggerDiv #btn4').on('mouseover',function(){ 
						    $('#triggerDiv #twUl1').css('display','none');
						     $('#catchMenu').css('display','block');
						     $('#catchMenu').css('visibility','visible');
						     $('#menuDescription').css('color','black');
						     
						    $('#menuDescription #descrip #imageHolder').css('position','relative')
					    							           .css('float','right')
					    							           .css('font-size','0.55em')
					    									   .css('height','50%')
						                                       .css('padding','auto')
						                                       .css('width','22%')
						                                       .css('margin','6% 0% 0% 0%');
									        
					                                          
					      $('#menuDescription #imageHolder img').css('width','75%').css('height','75%').css('margin','1em');
					      if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
					        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','1em');
					        	 
						     $('#descrip').css('width','63%').css('height','98%').css('left','0em')
					                   .css('float','right').css('padding','0em')
					                   .css('margin','0em');
						     $('#textDv').css('width','50%').css('float','left').css('margin','0em');
					         $('#menuDescription,#descrip,#textDv,#bText').css('text-align','left').css('font-size','1.0em');
						     
					
		                     if($('#catchMenu #twUl1').length){ 
		                     	   
								   //$('#triggerDiv #sdUl1').css('visibility','hidden');
								   $('#triggerDiv #twUl1').css('display','none');
								   $('#catchMenu').append(el.clone(true).css('display','block')).css('padding','0em');
								   $('#catchMenu #twUl1').css('visibility','visible');
						    	   $('#imageHolder').show();
						    	   
						    	   
						    	 
					
		                     }
		                
					});
					
			      
					
					
			        $('#btn4,#btn5,#btn6').on('mouseenter',function(){ 
			        	  $('#catchMenu').css('display','none');
			        });
			
			
			
									
			/********************* END HEADER BUTTON AND JQUERY UI CODE ******************************************************************/				
							
									
			/*** Generating Header Animations  AND App Selection *******************************************/	
                
                var slug = [];
                var menuTag = [];
				var menuDescriptionHeight = [];
				var menuFontSize = [];
				var menuHTML = [];
				var imageHeader = [];
				var menuImage = [];
				var btnHTML = [];
				var descripHeight = [];
				var menuChoice = [];
				var imageHeight = [];
				var imageWidth = [];
				var imageStyle = [];
				var url1 =  [];
				var url2 =  []; 
				var bannerTitle = [];
				var headHeight = [];
				var extraFunction = [];
				var llvImages = [];
        
              
        		var index = "";
        		
        			slug.push("about");
        			menuTag.push("button:contains('About')");
        			menuDescriptionHeight.push("14em");
        			menuFontSize.push("1.1em");
        			menuHTML.push("<p class=\"descHdr\">About</p><p>Choose links below to find out about the technologies used to program this site, or to Send the author of this site an email.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Web Technology</h1>");
        			menuImage.push("technologyideas.jpg");
        			btnHTML.push("div#btn2.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:1em 5%");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("About Page");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("angular2a");
        			menuTag.push("div#sdLi15");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Angular2 JavaScript with Redux State Container</p><p>Angular2 JavaScript with @ngrx Redux Store Container which gives centralized, immutable state management.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Angular2/Redux</center></p>");
        			menuImage.push("myFace.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:1.0em 5%");
        			
        			url1.push("angularApp");
        			url2.push("");
        				
        			bannerTitle.push("Angular2 JavaScript with Redux");
        			headHeight.push("35em");
        			
        			extraFunction.push("angular2");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("bootstrap");
        			menuTag.push("#sdLi8");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">BootStrap CSS</p><p>Work Portfolio using Bootstrap CSS!</p>");
        			
        			
        			
        			imageHeader.push("<p><center>BootStrap CSS</center></p>");
        			menuImage.push("jobdone.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:75%;margin:1.0em 5%");
        			
        			url1.push("bootPortfolio");
        			url2.push("");
        				
        			bannerTitle.push("Bootstrap CSS Portfolio");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("caribCater");
        			menuTag.push("div.aLi:contains('Vegas Caribbean')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Vegas Caribbean Catering - in Development</p><p>A Simple WordPress skeleton site for a friends Catering business. The Woo Commerce Plug-in could be used for online ordering and payment transactions, but the client wants it kept simple.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>WordPress Site</center></p><p><center>Development</center></p>");
        			menuImage.push("wordpressimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("http://rlsworks.com/wordpress/vcc");
        			url2.push("");
        				
        			bannerTitle.push("Caribbean Food Catering");
        			headHeight.push("15em");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("caribStore");
        			menuTag.push("div.aLi:contains('Caribbean Food Store')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Caribbean Food Store - in Development</p><p>A Sample WordPress site for a friends Caribbean Food Catering. The Woo Commerce Plug-in is utilized ordering and payment transactions.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>WordPress Site</center></p><p><center>Development</center></p>");
        			menuImage.push("wordpressimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("http://rlsworks.com/cfs/wordpress");
        			url2.push("");
        				
        			bannerTitle.push("Caribbean Food Store");
        			headHeight.push("15em");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("codeStore");
        			menuTag.push("div.aLi:contains('Code Repository')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Code Repository</p><p>Link to Repository of Code I have written.  See the Git Repository link for the code of this site done within the CodeIgniter MVC Framework.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Code Storage</h1>");
        			menuImage.push("codestorageimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:1em 5%");
        			
        			url1.push("https://drive.google.com/file/d/0Bw4sGq8fpAAnSDhMU3NBNTJSS1k/view");
        			url2.push("");
        				
        			bannerTitle.push("Google Code Storage");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("codetech");
        			menuTag.push("div.aLi:contains('Code Development Specification')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Code Development Specification</p><p>This is a technical specification for guidance in developing Object Oriented Code.  It was written as a HTML document.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Software Technical</br>Specification</h1>");
        			menuImage.push("softwareTechWriting.gif");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("softwareTW");
        			url2.push("");
        				
        			bannerTitle.push("Software Technical Specification Sample");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("computeEng");
        			menuTag.push("div.aLi:contains('Compute Engine')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Google Compute Engine Deployment --  <span style=\"font-style:itallic\">Discontinued</span></p><p>Deployment of my web portfolio to Google Compute Engine. The site also uses a sub-domain of my primary site.  Portions of the applications were changed to incorporate database storage in place of server file storage, as Google Compute Engine does not support local file access during runtime.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Google Deployment</center></p>");
        			menuImage.push("myFace.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("Google Compute Engine Deployment");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("engSpec");
        			menuTag.push("div.aLi:contains('Engineering Specification')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Engineering Specification</p><p>This is a technical specification for the Clark County Land Development Approval process.  I authored it as an Environmental Health Engineer for Southern Nevada Health District.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Engineering Process</center></p><p><center>Specification</center></p>");
        			menuImage.push("engProcessSpec.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("200");
        			
        			imageWidth.push("175");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("engSpec");
        			url2.push("");
        				
        			bannerTitle.push("Engineering Process Document");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("fuelLogin");
        			menuTag.push("#hmLi2");
        			menuDescriptionHeight.push("14em");
        			menuFontSize.push("1.2em");
        			menuHTML.push("<p class=\"descHdr\">FUEL-CMS Login</p><p>Login to the FUEL-CMS Content Management System.  Use the Username and Password (guest).</p>");
        			
        			
        			
        			imageHeader.push("<p><center>FUEL-CMS</center></p><p><center> Login</center></p>");
        			menuImage.push("myFace.jpg");
        			btnHTML.push("div#btn1.bCon");
        			
        			
        			descripHeight.push("35em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:80%;height:60%;margin:0.5em 10%");
        			
        			url1.push("fuel/login");
        			url2.push("");
        				
        			bannerTitle.push("FUEL-CMS Portfolio Log-In");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("fuelGIT");
        			menuTag.push("#hmLi1");
        			menuDescriptionHeight.push("14em");
        			menuFontSize.push("1.2em");
        			menuHTML.push("<p class=\"descHdr\">FUEL-CMS GIT Repository</p><p>Link to GIT Repository for the FUEL-CMS Content Management System.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>FUEL-CMS</center></p><p><center> Git Repository</center></p>");
        			menuImage.push("myFace.jpg");
        			btnHTML.push("div#btn1.bCon");
        			
        			
        			descripHeight.push("35em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160 ");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:80%;height:60%;margin:0.5em 10%");
        			
        			url1.push("https://bitbucket.org/Rsyp3rtjr/fuelcms.git");
        			url2.push("");
        				
        			bannerTitle.push("FUEL-CMS Portfolio GIT Repository");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("frontPage");
        			menuTag.push("#btn1 > button");
        			menuDescriptionHeight.push("10em");
        			menuFontSize.push("1.2em");
        			menuHTML.push("<p class=\"descHdr\">Home</p><p>Return to the Front Page, which is a GUI of its own that enables navigation of this site. If you are using Google, check-out the 3-D File Cabinet below as it also allows site navigation</p><br><p class=\"descHdr\">This is the FUEL-CMS Version of my web portfolio.</span></p><p>The code is more modular and several CMS modules are used to store code parameters which work with iterative code.</p><p style=\"color:blue\"><i>Login-in to CMS</i> is under the Home Top Menu Button.</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("");
        			btnHTML.push("div#btn1.bCon");
        			
        			
        			descripHeight.push("25em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("");
        			
        			imageWidth.push("");
        			
        			
        			imageStyle.push("");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("Home Page");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("gitRepo");
        			menuTag.push("div.aLi:contains('GIT Repository')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">GIT Repository</p><p>Link to GIT code repository provided thru BitBucket.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Code Storage</center></p>");
        			menuImage.push("codestorageimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("https://bitbucket.org/Rsypertjr/profile/repositories?visibility[9] =all");
        			url2.push("");
        				
        			bannerTitle.push("Git Code Repository");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("GraingerABCDE");
        			menuTag.push("#twLi1 #twUl2");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Grainger ABCDE Series B</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it using Adobe InDesign according to the customers style rules</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Manuals</h1>");
        			menuImage.push("technicalwritingimage.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("graingerABCDE");
        			url2.push("");
        				
        			bannerTitle.push("Grainger ABCDE Maintenance Manual");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("GraingerCDE");
        			menuTag.push("#twLi1 #twUl3");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Grainger CDE</p><p>This is a Maintenance and Product Information Manual tailored for a customers implementation of a  Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\'s style rules</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Manuals</h1>");
        			menuImage.push("technicalwritingimage.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("graingerCDE");
        			url2.push("");
        				
        			bannerTitle.push("Grainger CDE Maintenance Manual");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("inVegas");
        			menuTag.push("#btn6 button span");
        			menuDescriptionHeight.push("19em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\>Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("");
        			btnHTML.push("div#btn5.bCon");
        			
        			
        			descripHeight.push("37em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:75%;margin:1em 5%");
        			
        			url1.push("inVegas");
        			url2.push("");
        				
        			bannerTitle.push("Living in Vegas");
        			headHeight.push("");
        			
        			extraFunction.push("llv");
        			llvImages.push("vegas1.jpg,vegas2.jpg,vegas3.jpg,vegas4.jpg,vegas5.jpg,vegas6.jpg,vegas7.jpg,vegas8.jpg");
        	
        		var index2 = "";
        		
        			slug.push("laravelMVC");
        			menuTag.push("div.aLi:contains('Laravel MVC')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC programs in application for a jobs. I  have recently learned the following technologies:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication, Homestead Development, Vagrant Virtual Server. I have coded a 2 programs for job applications and they can be accessed by the buttons below.</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("laravelMVC.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:60%;margin:0.5em 5%");
        			
        			url1.push("https://protected-dawn-70064.herokuapp.com");
        			url2.push("");
        				
        			bannerTitle.push("Laravel MVC Applications");
        			headHeight.push("");
        			
        			extraFunction.push("laravelMVC");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("maintHeader");
        			menuTag.push("#twLi1 span");
        			menuDescriptionHeight.push("25em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Product and Maintenance Manuals</p><p>Below are links to new product manuals for Motor Efficiency Controller (MEC) devices.  They were produced primarily with Adobe InDesign.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Manuals</h1>");
        			menuImage.push("technicalwritingimage.jpg");
        			btnHTML.push("div#btn4");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("Technical Writing Documents");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("makeContact");
        			menuTag.push("#abLi2");
        			menuDescriptionHeight.push("8em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Making Contact</p><p>You can email me if you like.  Also more contact info is given in my resume.</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("upArrow.gif");
        			btnHTML.push("div#btn2.bCon");
        			
        			
        			descripHeight.push("35em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("");
        			
        			imageWidth.push("");
        			
        			
        			imageStyle.push("");
        			
        			url1.push("email");
        			url2.push("");
        				
        			bannerTitle.push(" Email Contact");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("mecProductManual");
        			menuTag.push("#twUl4");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">MEC Product Manual VT 1.6</p><p>This is a Product Manual for a Motor Efficiency Controller (MEC).  It is a new generation product manual.  I wrote it in Adobe InDesign according to the customer\'s style rules</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Manuals</h1>");
        			menuImage.push("technicalwritingimage.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("mecPManual");
        			url2.push("");
        				
        			bannerTitle.push("MEC Product Maintenance Manual");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("miniMotif");
        			menuTag.push("div.aLi:contains('Amino Acid Code Sequence Analyzer')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Amino Acid Code Sequence Analyzer</p><p>This program gives statistics for all combinations of amino acid sequences within a protein.  The protein sequence is parsed by regex techniques from a text file, into a MySQL database.  The first and last amino acid is chosen in the GUI, as well as, the desired statistical output.  The database accessed by JavaScript-AJAX to PHP-MySQL on the server side which returns the statistics.</p>");
        			
        			
        			
        			imageHeader.push("<p class=\><center>Scientific Data<br>Analysis Software</center></p>");
        			menuImage.push("dataanalysis.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:65%;margin:0.5em 5%");
        			
        			url1.push("amino");
        			url2.push("");
        				
        			bannerTitle.push("Amino Acid Sequence Analyzer");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("mobile");
        			menuTag.push("div.aLi:contains('Mobile Web Portfolio')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class =\"descHdr\">Mobile Web Portfolio</p><p>Link to a Mobile version of My work portfolio. I developed it using JQuery Mobile and it should run on Android devices at:</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Mobile Web</center></p><p><center>Development</center></p>");
        			menuImage.push("mobiledevelopmentimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("mobile");
        			url2.push("");
        				
        			bannerTitle.push("Mobile Web Portfolio");
        			headHeight.push("30em");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("oroHist");
        			menuTag.push("div.aLi:contains('Human Organ System Analyzer 2')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Human Organ System Analyzer 2</p><p>This orominer program contains Histological Data within the Hierarchical Organization of Human Body makeup.  Histological Data is information about Human Organs and their tissues and cells.  This application uses JavaScript Objects to store active data requests from which graphics is generated.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Scientific Data</center></p><p><center>Analysis Software</center></p>");
        			menuImage.push("dataanalysis.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("orominer2");
        			url2.push("");
        				
        			bannerTitle.push("Human Biology Organ Analyzer 2");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("orominer");
        			menuTag.push("div.aLi:contains('Human Organ System Analyzer 1')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Human Organ System Analyzer 1</p><p>The Orominer program shows a hierarchical organization of the human body constitution. Its top level is Organ Systems. <p>It uses JavaScript, JQuery for event synchronization between hierarchical display and graphic display, as well as, dynamic generation of SVG graphical elements based on DOM HTML elements.</p>MySQL Database information is converted into XML format using PHP for up front access by the code for generation of Hierachical Display.  Unfortunately ONLY THE First 3 NODES Of DATA was developed at Project Completion.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Scientific Data</center></p><p><center>Analysis Software</center></p>");
        			menuImage.push("dataanalysis.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("orominer1");
        			url2.push("");
        				
        			bannerTitle.push("Human Biology Organ Analyzer 1");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("othello");
        			menuTag.push("div#sdLi11");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class =\"descHdr\">Play Othello Game</p><p>This is an adaptation of the Classic Othello game where one player competes with the Computer.  Two Player Play could be implemented, as well as, making levels of difficulty for game play.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>A Little</center></p><p><center>Game Coding</center></p>");
        			menuImage.push("othellogameimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("othello");
        			url2.push("");
        				
        			bannerTitle.push("Othello Game");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("othelloAjax");
        			menuTag.push("div#sdLi11");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Play Othello Game</p><p>Play the Othello Game using AJAX technology which will eliminate Page Reloads.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>A Little</center></p><p><center>Game Coding</center></p>");
        			menuImage.push("othellogameimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("othelloAjax");
        			url2.push("");
        				
        			bannerTitle.push("Othello Game with Ajax");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("profile");
        			menuTag.push("div.aLi:contains('Personal Profile')");
        			menuDescriptionHeight.push("14em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">My Personal Profile</p><p class =\>You can view my Linked-In Personal Profile for more info on me.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Personal Profile</center></p>");
        			menuImage.push("myFace.jpg");
        			btnHTML.push("div#btn2.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:75%;height:70%;margin:1.0em 15%");
        			
        			url1.push("https://www.linkedin.com/in/rlsworks");
        			url2.push("");
        				
        			bannerTitle.push("Personal Profile");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("resume");
        			menuTag.push("div.aLi:contains('Dynamic HTML Resume')");
        			menuDescriptionHeight.push("15em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Dynamic HTML Resume w/Downloads</p><p>Resume for Richard L. Sypert Jr. in Html and PDF formats.  The HTML Resume Format Only Uses CSS and no JavaScript!</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Dynamic Resume</center></p>");
        			menuImage.push("jobdone.jpg");
        			btnHTML.push("div#btn5.bCon");
        			
        			
        			descripHeight.push("35em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:75%;margin:1.0em 5%");
        			
        			url1.push("dynResume");
        			url2.push("");
        				
        			bannerTitle.push("Dynamic HTML Resume");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("resumeButton");
        			menuTag.push("#btn5 > button");
        			menuDescriptionHeight.push("12em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">My Resume</p><p>A link to my Resume is below.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>My Resume</center></p>");
        			menuImage.push("jobdone.jpg");
        			btnHTML.push("div#btn5.bCon");
        			
        			
        			descripHeight.push("36em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:75%;margin:0.5em 5%");
        			
        			url1.push("dynResume");
        			url2.push("");
        				
        			bannerTitle.push("Resumes");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("rubyRails");
        			menuTag.push("div.aLi:contains('Ruby On Rails -- Training')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Ruby on Rails -- Training</p><p>I am engaging in self-directed study of Ruby-On-Rails, which involves MVC application development based on REST architecture.</p>");
        			
        			
        			
        			imageHeader.push("<p><center>Ruby On Rails</center></p><p><center>Development</center></p>");
        			menuImage.push("rubyRailsImage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("https://obscure-dawn-69167.herokuapp.com/");
        			url2.push("");
        				
        			bannerTitle.push("Ruby On Rails Training");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("software");
        			menuTag.push("button:contains('Software Development')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Software Development</p><p>Select below for applications I've done using different technologies.</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("websiteconstruction.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("Software Development");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("techWritingButton");
        			menuTag.push("#btn4 > button");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Technical Writing</p><p>I am also a Technical Writer and the list below includes documents I have written using Microsoft Word, Adobe InDesign, as well as, OpenOffice Writer and Illustrator programs.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Writing</h1>");
        			menuImage.push("techWriter.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:75%;margin:1em 5%");
        			
        			url1.push("techWriter");
        			url2.push("");
        				
        			bannerTitle.push("Technical Documents");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("techWritingHeader");
        			menuTag.push("#twLi1 span");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class =\"descHdr\">Product and Maintenance Manuals</p><p>Below are links to new product manuals for Motor Efficiency Controller (MEC) devices.  They were produced primarily with Adobe InDesign.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technical Manuals</h1>");
        			menuImage.push("technicalwritingimage.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("front");
        			url2.push("");
        				
        			bannerTitle.push("Technical Maintenance Manuals");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("vegasFun");
        			menuTag.push("#lvLi1");
        			menuDescriptionHeight.push("6em");
        			menuFontSize.push("1.3em");
        			menuHTML.push("<p class=\"descHdr\">Having Vegas Family Fun</p><p>Discover Las Vegas Fun!</p>");
        			
        			
        			
        			imageHeader.push("");
        			menuImage.push("");
        			btnHTML.push("div#btn6.bCon");
        			
        			
        			descripHeight.push("28em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("");
        			
        			imageWidth.push("");
        			
        			
        			imageStyle.push("");
        			
        			url1.push("inVegas");
        			url2.push("");
        				
        			bannerTitle.push("Family Fun In Vegas");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("webTech");
        			menuTag.push("#abLi1");
        			menuDescriptionHeight.push("14em");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">Web Page Technologies Used</p><p>This is a page that gives explanation of the programming technologies used on this site.</p>");
        			
        			
        			
        			imageHeader.push("<h1>Technologies I Used</h1>");
        			menuImage.push("technologyideas.jpg");
        			btnHTML.push("div#btn2.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:1em 5%");
        			
        			url1.push("webTech");
        			url2.push("");
        				
        			bannerTitle.push("Web Technologies Used");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("whitepaper");
        			menuTag.push("div.aLi:contains('White Paper')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">White Paper</p><p>This is a technical specification called a White Paper which explains the technology behind a companies product.  In this case an Electrical Motor Energy Efficiency Device.</p>");
        			
        			
        			
        			imageHeader.push("<h1>White Paper<br>Technology Explanation</h1>");
        			menuImage.push("explainTechnology.jpg");
        			btnHTML.push("div#btn4.bCon");
        			
        			
        			descripHeight.push("39em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:1em 5%");
        			
        			url1.push("whitePaper");
        			url2.push("");
        				
        			bannerTitle.push("Technical White Paper");
        			headHeight.push("");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
        		
        			slug.push("wpPortfolio");
        			menuTag.push("div.aLi:contains('WordPress')");
        			menuDescriptionHeight.push("50%");
        			menuFontSize.push("1.0em");
        			menuHTML.push("<p class=\"descHdr\">WordPress Work Portfolio</p><p>Link to a WordPress version of My work portfolio</p>");
        			
        			
        			
        			imageHeader.push("<h1>WordPress Site</br>Development</h1>");
        			menuImage.push("wordpressimage.jpg");
        			btnHTML.push("div#btn3.bCon");
        			
        			
        			descripHeight.push("38em");
        			
        			menuChoice.push("");
        				
        			imageHeight.push("160");
        			
        			imageWidth.push("187");
        			
        			
        			imageStyle.push("position:relative;width:90%;height:70%;margin:0.5em 5%");
        			
        			url1.push("https://rlsworks.wordpress.com");
        			url2.push("");
        				
        			bannerTitle.push("Wordpress Portfolio Version");
        			headHeight.push("30em");
        			
        			extraFunction.push("");
        			llvImages.push("");
        	
        		var index2 = "";
     
        		
	        
          for(var i=0;i<menuTag.length;i++){ 
         	   if(extraFunction[i] == 'llv'){ 
         	   	  
         	   	  var llvImgs = [];
         	   	  llvImages[i] = llvImages[i].split(',');
         	   	  
         	   	  for(var j=0;j<llvImages[i].length;j++){ 
	         	   	  var siteUrl = "https://fuel-cms-rsypertjr.c9users.io/FUEL-CMS/index.php";
			          siteUrl = siteUrl.replace('FUEL-CMS/','');
			          var imagePath = '"/FUEL-CMS/assets/images/'+ 'vegas/' + llvImages[i][j]  +'"';
			          imagePath = imagePath.replace("\"","");
			          imagePath = imagePath.replace("jpg\"","jpg");
			          //alert(imagePath);
			          llvImages[i][j] = imagePath;
			        
         	   	  }
         	   	
         	   }
         	  //alert("here");  
	            headerAnimation(slug[i],menuTag[i],menuDescriptionHeight[i],menuFontSize[i], menuHTML[i], imageHeader[i], menuImage[i],btnHTML[i],
		        	descripHeight[i],menuChoice[i],imageHeight[i],imageWidth[i],imageStyle[i],url1[i],url2[i],bannerTitle[i],headHeight[i],extraFunction[i],llvImages[i]);
        
         }
          
		});   // End of Document Ready
		    

	
  function moveArrow(menuDescriptionHeight,menuFontSize,menuHTML){ 
  	        $('#catchMenu').hide();
  	        $('#bDiv').hide();
  	        $('#imageHolder').hide();
  	        $('#menuDescription').css('opacity','0.80');
			$('#descrip')
				.css('display','block')
				.css('z-index','200')
				.css('font-size',menuFontSize);
			$('#bText').html(menuHTML);
  }

  
   function laravelMVCExtra(laravelMVCImage){ 
     	    var el = $('<button id="lavApp1" class="lavApp">App 1</button><button id="lavApp2" class="lavApp">App 2</button><button id="lavApp3" class="lavApp">App 3</button>');
			$('#bDiv').show();					
     	    $('#bDiv').html(el);	
     	    $('#bText').css('height','60%');
			
			var el2 = $('<img src='+laravelMVCImage+'  alt="" height="160" width"187">');
		    $('#imageHolder').html(el2).css('font-size','0.55em');
		    $('#imageHolder').prepend('<h1>Laravel<br>MVC Development</h1>').css('text-align','center').addClass("doSpin");
		 	
		    $('#imageHolder > img').css('position','relative').css('width','80%').css('height','60%').css('margin','1em 0em 0em 0em');
									  							  
		 	
			$('#lavApp1').on('mousedown',function(){ 
					var url = "laravelApp1";  
				   	window.open(url,'_blank');
			});
			
		
	       	$('#lavApp1').on('mouseenter',function(){ 
						$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I was asked to complete Laravel MVC program in application for a jobs.' + 
			' I  learned the following technologies to complete the program in about 2 weeks:  Laravel MVC, Twitter Bootstrap, Active Campaign API, Facebook and GitHub authentication.' + 
			' The program uses Facebook and GitHub authentication and allows a user to create contacts and register them with Active Campaign.</p><div id="gLink" style="color:blue;font-style:italic">A Git Repo of the Code is Here</div>');
			
				$('#gLink').on('mousedown',function(){ 
					$(this).css('color','gray');
					var url = 'laravelApp1'
					window.open(url,'_blank');
				}).css('cursor','pointer');	
				
				$('#gLink').on('mouseover',function(){ 
					$(this).css('color','red');
						});
						
				$('#gLink').on('mouseleave',function(){ 
					$(this).css('color','blue');
						});
					
	
	       	});
	       
	       	$('#lavApp2').on('mouseenter',function(){ 
					$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I learned the Homestead development environment' + 
			'&nbsp;which utilizes Vagrant VM Linux Server, from which I deployed the finished application to Heroku.  PhpUnit testing was used to develop this code.&nbsp;&nbsp;</p>' +
			'<p><font color="blue" size="3">Code can be seen in the Git Repository tab above under (laravel-test).</font></p>');
	
			});
        
            $('#lavApp3').on('mouseenter',function(){ 
					$('#bText').fadeIn(1000).html('<p class="descHdr">Laravel MVC -- Training</p><p>I developed this application using Laravel Homestead Environment' + 
			'&nbsp;for calculating Homeschool grade transcripts for my kids.  This app is located by adding \'/cinp\' to the base url of Application 2.  This application is developed utilizing PHPUnit,'+
			'&nbsp;including Database seeding.&nbsp;&nbsp;</p>' +
			'<p><font color="blue" size="3">This code can be seen in the Git Repository tab above under (laravel-test).</font></p>');
	
			});

			$('#lavApp2').on('mousedown',function(){ 
					var url = "laravelApp2";  
				    window.open(url,'_blank');
			});
			
			$('#lavApp3').on('mousedown',function(){ 
					var url = "laravelApp3";  
				   	window.open(url,'_blank');
			});
     }	
			
			

	  function angular2Extra(){  
	  	    
	  	       var el = $('<button id="angApp3" class="angApp">See App</button><button id="angApp1" class="angApp">Git Repo 1</button><button id="angApp2" class="angApp">Git Repo 2</button>');
			    $('#bDiv').show();	
		        $('#bDiv').html(el);
     	        $('#bText').css('height','60%');
     	        
				$('#angApp1').on('mousedown',function(){ 
						var url = "angularRepo1";
				      	window.open(url,'_blank');
				});
				
				$('#angApp2').on('mousedown',function(){ 
						var url = "angularRepo2";
				      	window.open(url,'_blank');
				});
				
				
				$('#angApp3').on('mousedown',function(){ 
						var url = "angularApp";
				       	window.open(url,'_blank');
				});
				
			
		       	$('#angApp1').on('mouseenter',function(){ 
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #1</p><p>Click Here to see Git Repository for this app.</p>');
		       	});		
		       	
		       	$('#angApp2').on('mouseenter',function(){ 
						$('#bText').fadeIn(1000).html('<p class="descHdr">Git Repo #2</p><p>Click Here to see Git Repository for another version of this app that runs on localhost.&nbsp;&nbsp; '+
						'It also runs json-server on the localhost which emulates an API server with which this app performs REST functions with.</p>');
		       	});	
		       	
		       	$('#angApp3').on('mouseenter',function(){ 
						$('#bText').fadeIn(1000).html('<p class="descHdr">Angular2 JavaScript with Redux State Container</p><p>Angular2'+
						          '&nbsp;JavaScript with @ngrx Redux Store Container which gives centralized, immutable state management.</p>');
		       	});	
		       	
		       	
		       	A


	  }

 
  function llvExtra(llvImages,menuDescriptionHeight){ 
  	        $('#catchMenu').hide();
  	        $('#imageHolder').hide();
  	        $('#lvImgDiv').show();
		    var $el = $('<img src="'+llvImages[5]+'" alt="" height="252" width="600"></img>');
		
			$('#descrip').css('display','block')
								 .css('height','20em')
								 .css('width','60%')
								 .css('float','left')
								 .css('padding','0em')
								 .css('margin','0em')
								 .css('left','0em')
								 .css('font-size','1.0em');
								 
			$('#textDv').css('width','38%').css('padding','0em').css('font-size','1.0em').css('margin','0em');
		    $('#bText').html('<p class="descHdr">Living In Vegas</p><p>A link about Las Vegas is below this Button and a Slide Show starts in Just a Moment!</p>')
		               .css('font-size','1.2em').css('width','98%').css('text-align','left').css('margin','0em 0em 0em 0em').css('padding','0em');
		    $('#lvImgDiv').html($el); 
		 	$('.descHdr').css('margin','0em').css('padding','0em');
			$('#menuDescription').css('height',menuDescriptionHeight).css('padding','1em')
								 .css('font-size','1.0em');					 
								 
		    $('#lvImgDiv').css('position','relative').css('float','right').css('left','-5em').css('top','-20em').css('margin','0em')
		    			  .css('opacity','0.85').css('width','40%').css('height','85%')
		    			  .css('padding','auto').css('transform','scale(1,1)');
		    	
		    $('#lvImgDiv img').css('margin','0em').css('float','right').css('width','98%').css('height','98%');			  
			
		    $('#lvImgDiv').addClass('doSpin');
		  
			clearInterval(viewer);
			
				var i = 1;
				var nImgs = llvImages.length-1;
				viewer = setInterval(function(){ 
							  i++;
							  if(i>nImgs)
								i = 0;
			                
							 $('#descrip').css('display','block');
							 $('#menuDescription img').remove();
							 $('#menuDescription #lvImgDiv').html('<img src="' + llvImages[i] +'" alt="" height="262" width="600"></img>')
								.addClass('doBorder');
								    $('#lvImgDiv').css('position','relative').css('float','right').css('left','-5em').css('top','-20em').css('margin','0em')
		    			        .css('opacity','0.85').css('width','40%').css('height','85%')
			    			    .css('padding','auto').css('transform','scale(1,1)');
		    	
		    			    $('#lvImgDiv img').css('margin','0em').css('float','right').css('width','98%').css('height','98%').fadeOut(250).fadeIn(250);
				}, 4000);  
  }
  	

		  function headerAnimation(slug,menuTag, menuDescriptionHeight, menuFontSize, menuHTML, imageHeader, menuImage, 
             btnHTML, descripHeight,menuChoice,imageHeight,imageWidth,imageStyle,url1='',url2='',
             bannerTitle='',headHeight='', extraFunction='',llvImages=''){ 
      			$(menuTag)	
					.on('mouseenter',function()
						{ 
							$(this).focus();	
						   //alert(slug);
						  
  	        				$('#menuDescription').css('opacity','1.0');	
							$('#catchMenu').show();
  	        				$('#imageHolder').show();
  	        				$('#lvImgDiv').hide();
						    $('#bDiv').hide();
						    $('#bText').show().css('height','100%');
						    $('#descrip').css('height','100%').css('text-align','left');
						    $('#menuDescription').css('font-size','1.0em').css('text-align','left').css('float','left');
						  
							if(extraFunction != 'llv'){   // Do All Other Apps
										if(slug != 'frontPage'){ 
											
											//alert(menuDescriptionHeight);
										    $('#menuDescription').css('display','block')
											                     .css('width','90%')
											                     .css('position','relative')
											                     .css('margin','3em 0em 0em 3%')
															     .css('height',menuDescriptionHeight);
															     
											$('#menuDescription,#descrip,#textDv,#bText').css('text-align','left');				     
											$('#bText').html(menuHTML).css('width','98%');
										}
									   else if(slug == 'frontPage'){ 
									   			
											$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   		$('#imageHolder').hide();
									   		$('#menuDescription').css('height',menuDescriptionHeight).css('opacity','1.0');
									   		$('#descrip').css('height','98%')
									   					 .css('left','0em');
		    								$('#headbar').css('height',descripHeight);
										    $('#descrip,#textDv,#bText').css('padding','0em').css('margin','0em').css('text-align','center').css('width','98%');
										
											$('#bText').html(menuHTML).css('width','98%');
										
											$('#headbar').css('height','23em');
									   
									   }
									
										if(slug == 'frontPage' || slug == 'vegasFun' ){ 
											$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   		$('#imageHolder').hide();
									   		$('#bDiv').hide();
									   		$('#menuDescription').css('opacity','1.0').css('padding','0em')
									   		                     .css('left','0em').css('text-align','left').css('float','left');
									   		$('#descrip').css('width','96%').css('height','9em').css('padding','0em')
									   					 .css('margin','0em').css('left','0em')
									   					 .css('text-align','left');
		    								$('#headbar').css('height',descripHeight);
		    								$('#textDv').css('width','98%').css('margin','0em');
										
										
										
											if(slug == 'frontPage'){  
												$('#bText').html(menuHTML).css('width','98%').css('margin','0em');
											    $('#descrip, #menuDescription').css('padding','1em');
											}
											
											if(slug == 'vegasFun'){ 
												$('#textDv').css('width','100%').css('margin','0em').css('padding','0em');
												$('#bText').html(menuHTML).css('text-align','center').css('width','100%').css('margin','1em 0em 0em 0em');
												$('#descrip').css('height','6em');
											}
											
											$('#headbar').css('height','23em');
										}	
												
										var imagePath = '"/FUEL-CMS/assets/images/'+ menuImage  +'"';
										imagePath = imagePath.replace('"','');
										imagePath = imagePath.replace('"','');
										
										
									  
					     	          
										
								       if(slug != 'laravelMVC' || slug != 'makeContact' || menuImage == null){ 
					                        $el = $('<img src='+imagePath+ /*' style='+imageStyle+*/ ' alt="" height='+imageHeight+ ' width='+imageWidth+'>'); 
										    $('#imageHolder').html($el);
									   	   	$('#imageHolder').css('text-align','center').prepend(imageHeader).css('top','15em').addClass("doSpin").css('top','0em');
									  
									        $('#imageHolder > img').css('position','relative').css('width','80%').css('height','70%').css('margin','1em 0em 0em 0em');
									  
									   }
									   
									   if(extraFunction != null){ 
											if(extraFunction == 'angular2')
												angular2Extra();
										    if(extraFunction == 'laravelMVC')
												laravelMVCExtra(imagePath);
									   }
									 
										    
								    if(slug == 'makeContact'){ 
    										moveArrow(menuDescriptionHeight,menuFontSize,menuHTML);
    										var upArrow =  "/FUEL-CMS/assets/images/upArrow.gif";
    										$('#arrowImg > img').attr('src',imagePath);
    										$('#arrowImg').css('display','block').addClass('arrowMove');
								    }  
								    
								
								    
								   if(slug == 'profile' || slug == 'webTech' ||
								      slug == 'about'  || slug == 'fuelLogin' ||
								      slug == 'fuelGIT' || slug == 'resumeButton' ||
								      slug == 'resume'){ 
										$('#catchMenu').hide();
									   		$('#lvImgDiv').hide();
									   	//	$('#imageHolder').hide();
									   		$('#menuDescription').css('padding','1em').css('height',menuDescriptionHeight).css('width','90%').css('opacity','1.0').css('float','left').css('left','0em');
									   		$('#menuDescription #imageHolder').css('height','70%')
									   									      .css('width','11%')
									   									      .css('font-size','0.60em')
									   										  .css('padding','auto')
									   										  .css('margin','auto')
									   										  .css('float','right');
									   										  
									   	                      
									        $('#menuDescription #imageHolder img').css('width','60%').css('height','60%').css('margin','0em');
									        if(!$('#menuDescription #imageHolder h1').length || !$('#menuDescription #imageHolder p').length)
									        	 $('#menuDescription #imageHolder img').css('height','90%').css('width','90%').css('margin-top','0em');	
									  	
									  	
									  	
									  		$('#descrip').css('width','96%').css('height','95%').css('padding','1em')
									   					 .css('margin','auto').css('float','left')
									   					 .css('text-align','left');
									   		$('#textDv').css('width','60%');
									   		if(descripHeight != '')
		    									$('#headbar').css('height',descripHeight);
		    								else
		    									$('#headbar').css('height','28em');
		    						
								   }
			
							}
						else if(extraFunction == 'llv')
							llvExtra(llvImages,menuDescriptionHeight);
							$('#headbar').css('height',descripHeight);
							
						})
					.on('mouseleave',function()
						{ 
						  // Determinine header container height
					      //  var $el = $('#menuDescription');
						 //  $('#headbar').append($el).css('height',descripHeight);
						    if(extraFunction == 'llv')
						    	clearInterval(viewer);	
						    	
						    if(!(extraFunction == 'llv')) 
								$('lvImgDiv').hide();
							
									   		
						    $('#textDv').css('margin','0em');
						    $('#arrowImg').hide();
					
					
						})
					.on('mousedown',function()
						{ 
										$(this).css('color','yellow');
										$('#catchCab').hide();
										$('#bDiv').hide();
										window.open(url1,'_blank');
						});	
										
						
						
						
      }
  /************************ END of HEADER ANIMATION and App Selection CODE ******************************************************************/		
				
	</script>
	</head>
	
	
<body>
	<div id="headbar" class="ui-widget ui-state-default">
		<div id="hmenuContainer"><div id="triggerDiv">
			<div id="btn1" class="bCon">
				<button>Home</button>
				<div id="hmUl1" class="aUl">
						<div id="hmLi2" class="aLi" >Log-in to FUEL-CMS</div>
						<div id="hmLi1" class="aLi" >FUEL-CMS Git Repository</div>
				</div>
			</div>
			<div id="btn2" class="bCon"> 
				<button>About</button>
				<div id="abUl1" class="aUl">
						<div id="abLi1" class="aLi">Web Page Technologies Used</div>
						<div id="abLi2" class="aLi" >Making Contact</div>
						<div id="abLi3" class="aLi" >Personal Profile</div>
				</div>
			</div>
			<div id="btn3" class="bCon">
				<button name='softDev'>Software Development</button>
				<div id="sdUl1" class="aUl">
					<div id="sdLi1" class="aLi">Amino Acid Code Sequence Analyzer</div>
					<div id="sdLi2" class="aLi">Human Organ System Analyzer 1</div>
					<div id="sdLi3" class="aLi">Human Organ System Analyzer 2</div>
					<div id="sdLi4" class="aLi">Vegas Caribbean Catering - in Development</div>
					<div id="sdLi5" class="aLi">Caribbean Food Store - in Development</div>
					<div id="sdLi6" class="aLi">WordPress Work Portfolio</div>
					<div id="sdLi7" class="aLi">Mobile Web Portfolio</div>
					<div id="sdLi8" class="aLi">Bootstrap CSS Portfolio</div>
					<div id="sdLi9" class="aLi">Code Repository</div>
					<div id="sdLi10" class="aLi">GIT Repository</div>
					<div id="sdLi11" class="aLi">Play Othello Game thru AJAX</div>
					<div id="sdLi12" class="aLi">Ruby On Rails -- Training</div>
					<div id="sdLi13" class="aLi">Laravel MVC</div>
					<div id="sdLi14" class="aLi">Google Compute Engine Deployment -- Discontinued</div>
					<div id="sdLi15" class="aLi">Angular2 JavaScript and Redux State Container</div>
					
				</div>
			</div>
			<div id="btn4" class="bCon">
				<button>Technical Writing</button>
				<div id="twUl1" class="aUl">
						<div id="twLi1"><span>Product and Maintenance Manuals</span>
							<div id="twUl2" class="aUl2">Grainger ABCDE Series B</div>
							<div id="twUl3" class="aUl2">Grainger CDE</div>
							<div id="twUl4" class="aUl2">MEC Product Manual VT 1.6</div>
						</div>
						<div id="twLi2" class="aLi">White Paper</div>
						<div id="twLi3" class="aLi">Engineering Specification</div>
						<div id="twLi4" class="aLi">Code Development Specification</div>
				</div>
			</div>
			<div id="btn5" class="bCon">
				<button>My Resume</button>
				<div id="mrUl1" class="aUl">
						<div id="mrLi1" class="aLi">Dynamic HTML Resume w/Downloads</div>
				</div>
				<div id="arrowImg"><img></img></div>
			</div>
			<div id="btn6" class="bCon">
				<button>Living In Vegas</button>
				<div id="lvUl1" class="aUl">
						<div id="lvLi1" class="aLi">Having Vegas Family Fun</div>
				</div>
			</div>
			</div>
			
	       
		</div>
		<div id="menuDescription">
			<div id="catchMenu"></div>
			<div id="descrip">
				<div id="textDv">
					<div id="bText"></div>
					<div id="bDiv"></div>
				</div>
				<div id="imageHolder"></div>
			</div>
			<div id="lvImgDiv"></div>
		</div>
	</div>	
	<section id="main_inner">
		<!--__FUEL_MARKER__3-->This is a default layout. To change this layout go to the fuel/application/views/_layouts/main.php file.	</section>
	

<script type="text/javascript">	
  
			$(document).ready(function()
				{ 
					var menuTag = [];
					var url1 = [];
					var title = [];
					var slug = [];
					
					var index = "";
			        		
			        			slug.push("amino");
			        			menuTag.push("#aminoCode");
			        			title.push("Amino Acid Code Analyzer");
			        			url1.push("amino");
			        		
			        var index2 = "";
			        		
			        			slug.push("codeRepo");
			        			menuTag.push("#codeRepo");
			        			title.push("Code Repository");
			        			url1.push("codeRepo");
			        		
			        var index2 = "";
			        		
			        			slug.push("dynResume");
			        			menuTag.push("#dynResume");
			        			title.push("Dynamic HTML Resume");
			        			url1.push("dynResume");
			        		
			        var index2 = "";
			        		
			        			slug.push("pdfResume");
			        			menuTag.push("#pdfResume");
			        			title.push("PDF Resume");
			        			url1.push("pdfResume");
			        		
			        var index2 = "";
			        		
			        			slug.push("email");
			        			menuTag.push("#email");
			        			title.push("Email Contact");
			        			url1.push("email");
			        		
			        var index2 = "";
			        		
			        			slug.push("engSpec");
			        			menuTag.push("#engSpec");
			        			title.push("Engineering Improvement Plan");
			        			url1.push("engSpec");
			        		
			        var index2 = "";
			        		
			        			slug.push("foodStore");
			        			menuTag.push("#foodStore");
			        			title.push("Caribbean Food Store");
			        			url1.push("caribStore");
			        		
			        var index2 = "";
			        		
			        			slug.push("gitRepo");
			        			menuTag.push("#gitRepo");
			        			title.push("Git Repository");
			        			url1.push("gitRepo");
			        		
			        var index2 = "";
			        		
			        			slug.push("googlePortfolio");
			        			menuTag.push("#googleCompEng");
			        			title.push("Google Portfolio Deployment");
			        			url1.push("front");
			        		
			        var index2 = "";
			        		
			        			slug.push("graingerABCDE");
			        			menuTag.push("#graingerABCDE");
			        			title.push("Grainger ABCDE Maintenance Manual");
			        			url1.push("graingerABCDE");
			        		
			        var index2 = "";
			        		
			        			slug.push("graingerCDE");
			        			menuTag.push("#graingerCDE");
			        			title.push("Grainger Maintenance Manual");
			        			url1.push("graingerCDE");
			        		
			        var index2 = "";
			        		
			        			slug.push("laravel1");
			        			menuTag.push("#laravel1");
			        			title.push("Laravel MVC App #1");
			        			url1.push("laravelApp1");
			        		
			        var index2 = "";
			        		
			        			slug.push("laravel2");
			        			menuTag.push("#laravel2");
			        			title.push("Laravel MVC Sample 2");
			        			url1.push("laravelApp2");
			        		
			        var index2 = "";
			        		
			        			slug.push("laravel3");
			        			menuTag.push("#laravel3");
			        			title.push("Laravel MVC Home School Transcript Generator");
			        			url1.push("laravelApp3");
			        		
			        var index2 = "";
			        		
			        			slug.push("mecPManual");
			        			menuTag.push("#mecManual");
			        			title.push("MEC Product Manual");
			        			url1.push("mecPManual");
			        		
			        var index2 = "";
			        		
			        			slug.push("mobilePortfolio");
			        			menuTag.push("#mobilePortfolio");
			        			title.push("Mobile Portfolio Version");
			        			url1.push("mobile");
			        		
			        var index2 = "";
			        		
			        			slug.push("orominer1");
			        			menuTag.push("#organsCode1");
			        			title.push("Human Organ System Analyzer 1");
			        			url1.push("orominer1");
			        		
			        var index2 = "";
			        		
			        			slug.push("orominer2");
			        			menuTag.push("#organsCode2");
			        			title.push("Human Organ System Analyzer 2");
			        			url1.push("orominer2");
			        		
			        var index2 = "";
			        		
			        			slug.push("othello");
			        			menuTag.push("#playOthello");
			        			title.push("Othello Game");
			        			url1.push("othello");
			        		
			        var index2 = "";
			        		
			        			slug.push("profile");
			        			menuTag.push("#linkedIn");
			        			title.push("Personal Profile");
			        			url1.push("linkedIn");
			        		
			        var index2 = "";
			        		
			        			slug.push("rubyOnRails");
			        			menuTag.push("#rubyOnRails");
			        			title.push("Ruby On Rails Training");
			        			url1.push("rubyTraining");
			        		
			        var index2 = "";
			        		
			        			slug.push("softwareTW");
			        			menuTag.push("#codeDevSpec");
			        			title.push("Code Development Specification");
			        			url1.push("softwareTW");
			        		
			        var index2 = "";
			        		
			        			slug.push("vegasCatering");
			        			menuTag.push("#vegasCatering");
			        			title.push("Vegas Caribbean Catering");
			        			url1.push("caribCatering");
			        		
			        var index2 = "";
			        		
			        			slug.push("whitePaper");
			        			menuTag.push("#whitePaper");
			        			title.push("Technology White Paper");
			        			url1.push("whitePaper");
			        		
			        var index2 = "";
				     	
					for(var i=0;i<menuTag.length;i++){ 
						    footerMenu(menuTag[i],title[i],url1[i]);
							}
	
	
			});  
			
			
			
	 function footerMenu(menuTag,title,url1){ 
	 		$(menuTag).on('click',function()
								{ 
									$('html title').html(title); 
									$(location).attr('href',url1);
								});	
							}
								
</script>
	<div id="footContainer" class="ui-widget ui-state-default ui-corner-all">
		<div id="formcontainer" style="visibility:hidden">
										<form action="https://fuel-cms-rsypertjr.c9users.io/FUEL-CMS/index.php/index2" id="itemform" method="post" accept-charset="utf-8">
							  <input type="hidden" name="itemchoice" value='none'/>
							  <input type="hidden" name="itemchoice2" value='none'/>
							  <input type="hidden" name="appType" value='desktop'/>
					</form>
		</div>
	
		<div id="footOuter" class="ui-widget">
				<div id="softwareDevWork" class="fTitle">Software Development</div>
				<div id="technicalWritingWork" class="fTitle">Technical Writing</div>
				<div id = "engineeringWork" class="fTitle">Engineering</div>
				<div id = "contacts" class="fTitle">Contact Me</div>
				<div id="softwareDevMenu" class="footerMenu">
					<p id="sdmHeader">Click to See Software Apps I've Done:</p>
					<div>
						<div id="aminoCode" class="sdmItem">Amino Acid Code Sequence Analyzer</div>
						<div id="organsCode1" class="sdmItem">Human Organ System Analyzer 1</div>
						<div id="organsCode2" class="sdmItem">Human Organ System Analyzer 2</div>
						<div id="vegasCatering" class="sdmItem">Vegas Caribbean Catering--In Development</div>
						<div id="foodStore" class="sdmItem">Caribbean Food Store--In Development</div>
						<div id="mobilePortfolio" class="sdmItem">Mobile Web Portfolio</div>
						<div id="codeRepo" class="sdmItem">Code Repository</div>
						<div id="gitRepo" class="sdmItem">GIT Repository</div>
						<div id="playOthello" class="sdmItem">Play Othello Game</div>
						<div id="rubyOnRails" class="sdmItem">Ruby On Rails--Training</div>
						<div id="laravel1" class="sdmItem">Laravel MVC Sample 1</div>
						<div id="laravel2" class="sdmItem">Laravel MVC Sample 2 </div>
						<div id="laravel3" class="sdmItem">Laravel MVC Home School Transcript Generator</div>
						<div id="googleCompEng" class="sdmItem">Google Compute Engine Deployment</div>
			        </div>
				</div>
				
				<div id="techWritingMenu" class="footerMenu">
					<p id="twmHeader">Click to See Technical Documents I've Written:</p>
					<div>
						<div id="graingerABCDE" class="twmItem">Grainger ABCDE Series B Product Manual</div>
						<div id="graingerCDE" class="twmItem">Grainger CDE Product Manual</div>
						<div id="mecManual" class="twmItem">MEC Product Manual VT 1.6</div>
						<div id="whitePaper" class="twmItem">Technology White Paper</div>
						<div id="engSpec" class="twmItem">Engineering Specification</div>
						<div id="codeDevSpec" class="twmItem">Code Development Specification</div>
			        </div>
				</div>
				
				<div id="engineeringMenu" class="footerMenu">
				   	<p id="engHeader">Click to See My Engineering Experience:</p>
					<div> 
						<div id="pdfResume" class="engItem" >PDF Resume</div>
						<div id="dynResume" class="engItem" >Dynamic Resume</div>
					</div>
				</div>
				
				<div id="contactMenu" class="footerMenu">
				   	<p id="contactHeader">Click to Make Contact with Me:</p>
					<div> 
						<div id="email" class="contactItem" >Email</div>
						<div id="linkedIn" class="contactItem" >Linked In Profile</div>
					</div>
				</div>
				
		</div>
		
	</div>

</body>
</html>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>