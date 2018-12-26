<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>
        <?php
        $tahun = Session::get('tahun');
        $bulan = Session::get('bulan');
        echo 'Laporan Monitoring Data Bulan '. $bulan . ' ' . $tahun .'.pdf';
        ?>
        </title>
		<style type="text/css">

    tab0  { position:absolute;left:40px;  }
    tab1  { position:absolute;left:45px;  }
    tab2  { position:absolute;left:75px;  }
    tab3  { position:absolute;left:120px; }
    tab31 { position:absolute;left:90px; }
    tab4  { position:absolute;left:121px; }
    tab5  { position:absolute;left:180px; }
    tab6  { position:absolute;left:175px; }
    tab7  { position:absolute;left:200px; }
    tab8  { position:absolute;left:225px; }
    tab9  { position:absolute;left:250px; }
    tab10 { position:absolute;left:550px; }
    tab11 { position:absolute;text-indent: 0.5in;}
    tab12 { position:absolute;text-indent: 0in;}

    p {
    margin-bottom:0;
    }

			/* Client-specific Styles */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
			body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

			/* Reset Styles */
			body{margin:0; padding:0;}
			img{border:0; height:100%; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
			#backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* Template Styles */

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Page
			* @section background color
			* @tip Set the background color for your email. You may want to choose one that matches your company's branding.
			* @theme page
			*/
			body, #backgroundTable{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border:0;
			}

			/**
			* @tab Page
			* @section heading 1
			* @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
			* @style heading 1
			*/
			h1, .h1{
				/*@editable*/ color:#202020;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:40px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 2
			* @tip Set the styling for all second-level headings in your emails.
			* @style heading 2
			*/
			h2, .h2{
				/*@editable*/ color:#404040;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:16px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:60%;
				margin-top:0;
				margin-right:0;
				margin-bottom:0;
				margin-left:0;
				/*@editable*/ text-align:center;
			}

			/**
			* @tab Page
			* @section heading 3
			* @tip Set the styling for all third-level headings in your emails.
			* @style heading 3
			*/
			h3, .h3{
				/*@editable*/ color:#000000;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ font-weight:lighter;
				/*@editable*/ line-height:100%;
				margin-top:2%;
				margin-right:0;
				margin-bottom:1%;
				margin-left:0;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Page
			* @section heading 4
			* @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
			* @style heading 4
			*/
			h4, .h4{
				/*@editable*/ color:#606060;
				display:block;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:40%;
				margin-top:0.5%;
				margin-right:0;
				margin-bottom:0;
				margin-left:0;
				/*@editable*/ text-align:center;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: PREHEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section preheader style
			* @tip Set the background color for your email's preheader area.
			* @theme page
			*/
			#templatePreheader{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Header
			* @section preheader text
			* @tip Set the styling for your email's preheader text. Choose a size and color that is easy to read.
			*/
			.preheaderContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Header
			* @section preheader link
			* @tip Set the styling for your email's preheader links. Choose a color that helps them stand out from your text.
			*/
			.preheaderContent div a:link, .preheaderContent div a:visited, /* Yahoo! Mail Override */ .preheaderContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			/**
			* @tab Header
			* @section social bar style
			* @tip Set the background color and border for your email's footer social bar.
			*/
			#social div{
				/*@editable*/ text-align:right;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Header
			* @section header style
			* @tip Set the background color and border for your email's header area.
			* @theme header
			*/
			#templateHeader{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-bottom:2px solid #505050;
      }

      #cssTable td {
        text-align: center;
        vertical-align: middle;
      }

			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#202020;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:34px;
				/*@editable*/ font-weight:bold;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding:10px;
				/*@editable*/ text-align:right;
				/*@editable*/ vertical-align:middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			#headerImage{
				height:80px;
				max-width:600px !important;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color for your email's body area.
			*/
			#templateContainer, .bodyContent{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:justify;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				height:100%;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: SIDEBAR /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Sidebar
			* @section sidebar style
			* @tip Set the background color and border for your email's sidebar area.
			*/

			/*img.kanan {
			    float: right;
			    margin: 5px;
			}*/
			#templateSidebar{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Sidebar
			* @section sidebar style
			* @tip Set the background color and border for your email's sidebar area.
			*/
			.sidebarContent{
				/*@editable*/ border-right:1px solid #DDDDDD;
			}

			/**
			* @tab Sidebar
			* @section sidebar text
			* @tip Set the styling for your email's sidebar text. Choose a size and color that is easy to read.
			*/
			.sidebarContent div{
				/*@editable*/ color:#505050;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Sidebar
			* @section sidebar link
			* @tip Set the styling for your email's sidebar links. Choose a color that helps them stand out from your text.
			*/
			.sidebarContent div a:link, .sidebarContent div a:visited, /* Yahoo! Mail Override */ .sidebarContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.sidebarContent img{
				display:inline;
				height:100%;
			}

			/* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

			/**
			* @tab Footer
			* @section footer style
			* @tip Set the background color and top border for your email's footer area.
			* @theme footer
			*/
			#templateFooter{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent div{
				/*@editable*/ color:#707070;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:11px;
				/*@editable*/ line-height:100%;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#336699;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.footerContent img{
				display:inline;
			}

			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email's footer social bar.
			* @theme footer
			*/
			#social{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border:0;
			}

			/**
			* @tab Footer
			* @section social bar style
			* @tip Set the background color and border for your email's footer social bar.
			*/
			#social div{
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			* @theme footer
			*/
			#utility{
				/*@editable*/ background-color:#FFFFFF;
				/*@editable*/ border-top:0;
			}

			/**
			* @tab Footer
			* @section utility bar style
			* @tip Set the background color and border for your email's footer utility bar.
			*/
			#utility div{
				/*@editable*/ text-align:left;
			}

			#monkeyRewards img{
				max-width:170px !important;
			}

      tr:nth-child(even){background-color: #FFFFFF}

      th {
          background-color: #ffffff;
          color: black;
      }

		</style>
	</head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
            	<tr>
                	<td align="center" valign="top">
                        <!-- // Begin Template Preheader \\ -->
                        <table border="0" cellpadding="10" cellspacing="0" width="600" id="templatePreheader">
                            <tr>
                                <td valign="top" class="preheaderContent">
                                </td>
                            </tr>
                        </table>
                        <!-- // End Template Preheader \\ -->
                    	<table border="0" cellpadding="0" cellspacing="0" width="550" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Header \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="550" id="templateHeader">
                                     <tr>
                                     <td>
                                     <table border="0" cellpadding="0" cellspacing="0" width="550" id="templateHeader">
                                        <tr>
                                        	<td width="29" align="center">
                                            	<img src="../Pictures/tut.png" style="width:50px; height: 50px; " id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowtext />
                                            </td>

                                            <td class="headerContent" width="100%" style="padding-left:10px; padding-right:20px; vertical-align:bottom;">
                                            	<div mc:edit="Header_content">
                                                    <h2>SMA NEGERI 1 NATAR BANDAR LAMPUNG</h2>
                                            	</div>
                                             <!--  <div mc:edit="Header_content">
                                                    <h2> (LAPAN) </h2>
                                            	</div> -->
                                              <div mc:edit="Header_content" >
                                                    <h4 style="padding-top: 10px"> Jl. Dahlia III, Natar, Kabupaten Lampung Selatan, Lampung 35362
                                                    <br style ="vertical-align:top;"> <p style="padding-top: 2px">Telepon (0721) 91051, Faksimile (0721) 91051 </p>
                                                    <br style ="vertical-align:top;"><p style="padding-top: 0px">Laman: sman1natar.sch.id </p>
                                                    </h4>
                                              </div>
                                            </td>
                                             <td width="29" align="center">
                                            	<img src="../Pictures/lampung.png" style="right; width:50px; height: 50px; " id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowtext />
                                            </td>
                                        </tr>
                                      </table>
                                      </td>
                                      </tr>
                                    </table>
                                    <!-- // End Template Header \\ -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                    <!-- // Begin Template Body \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="550" id="templateBody">

                                    	<tr>
                                                <!-- // Begin Module: Standard Content \\ -->
                                                <table border="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td valign="top" style="padding-left:0;" width="100%">
                                                            <!-- <div mc:edit="std_content00"> -->
                                                            <p style="text-align:left"> <tab12>Hal : Laporan Keuangan Sekolah Tahun 2018 </p>

                                                              <br>
                                                            <!-- </div> -->
                                                            <br><br>

                                                                <br>Yth. Kepala Sekolah
                                                                <br>
                                                                di
                                                                <br>
                                                                Tempat
                                                                <br> <br>
                                                                Dengan Hormat,
                                                                <br>
                                                                <!-- <div mc:edit="std_content00"> -->
                                                                	<p style="text-align:justify; text-indent: 0.5in;">Berikut dilampirkan laporan keuangan sekolah tahun 2018</p>
                                                                  <br>

                                                                      <br>

                                                                      <table style="all;" border="2">
                                                                      <h2 style="padding: 15px; text-align: left;">Pemasukan</h2>
                                                                      <!-- <caption>Pemasukan</caption> -->
                                                                      <tr>
                                                                        <th scope="col">No.</th>
                                                                        <th style="text-align: center; padding: 5px;">Sumber Pemasukan</th>
                                                                        <th style="text-align: center; padding: 8px;">Jumlah</th>
                                                                        <th style="text-align: center; padding: 8px;">Keterangan</th>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td>1.</td>
                                                                      	<td>Dana Bos Kloter I</td>
                                                                      	<td>Rp.15.000.000</td>
                                                                      	<td></td>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td>2.</td>
                                                                      	<td>Dana Bos Kloter II</td>
                                                                      	<td>Rp.13.000.000</td>
                                                                      	<td></td>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td></td>
                                                                      	<td>Total</td>
                                                                      	<td>Rp.28.000.000</td>
                                                                      	<td></td>
                                                                      </tr>
                                                                      </table>


                                                                      <table style="all" border="2">
                                                                      <h2 style="padding: 15px; text-align: left;">Pengeluaran</h2>
                                                                      <!-- <caption>Pemasukan</caption> -->
                                                                      <tr>
                                                                        <th scope="col">No.</th>
                                                                        <th style="text-align: center; padding: 5px;">Sumber Pengeluaran</th>
                                                                        <th style="text-align: center; padding: 8px;">Jumlah</th>
                                                                        <th style="text-align: center; padding: 8px;">Keterangan</th>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td>1.</td>
                                                                      	<td>Pembangunan Masjid</td>
                                                                      	<td>Rp.5.000.000</td>
                                                                      	<td></td>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td>2.</td>
                                                                      	<td>Sarana Lab Komputer</td>
                                                                      	<td>Rp.7.000.000</td>
                                                                      	<td>Kursi Lab</td>
                                                                      </tr>
                                                                      <tr>
                                                                      	<td></td>
                                                                      	<td>Total</td>
                                                                      	<td>Rp.12.000.000</td>
                                                                      	<td></td>
                                                                      </tr>
                                                                      </table>
                                                                      <p style="caption-side: bottom;"> <tab12>Saldo = Rp. 28.000.000-Rp.12.000.000 = Rp.16.000.000
                                                                       </p>


                                                                   <br>
                                                                   <p></p>
                                                                   <p style="text-align:justify; text-indent: 0.5in;" width= 100%>Sekian laporan keuangan tersebut dilampirkan sebagai dokumentasi sekolah. Atas perhatian Bapak/Ibu kami ucapkan terima kasih.</p>
                                                                   <p style="text-align:justify;"> Mengetahui,</p>
                                                                   <p></p>
                                                                <!-- </div> -->
                                                         </td>
                                                    </tr>
                                                    <td  style="align-content: : left;" width="0" id="monkeyRewards">
						                           		<!-- <div mc:edit="monkeyrewards"> -->
						                        			Kepala Sarana dan Prasarana
						                    			<!-- </div> -->
						                			<!-- </td>
						                			<td valign="top" width="205" id="monkeyRewards"> -->
						                    			<!-- <div mc:edit="monkeyrewards"> -->
						                    			<br><br>
						                    			<tab11> ttd </tab>
						                    			<br><br><br>
						                        			Puji Astuti
						                    			<br>
						                       				NIP : 1234567890
						                    			<!-- </div> -->
						                			</td>
						                			<td  style="align-content: : center;" valign="top" width="0" id="monkeyRewards">
						                           		<!-- <div mc:edit="monkeyrewards"> -->
						                        			Kepala Kesiswaan dan Keuangan
						                    			<!-- </div> -->
						                			<!-- </td>
						                			<td valign="top" width="205" id="monkeyRewards"> -->
						                    			<!-- <div mc:edit="monkeyrewards"> -->
						                    			<br><br>
						                    			<tab11> ttd </tab>
						                    			<br><br><br>
						                        			Malika Saumnuari
						                    			<br>
						                       				NIP : 4450987654321
						                    			<!-- </div> -->
						                			</td>
                                                </table>
                                                <!-- // End Module: Standard Content \\ -->
                                        </tr>

                                    </table>
                                    <!-- // End Template Body \\ -->
                                </td>
                            </tr>



                        	<tr>
                            	<td align="center" valign="top">

                                    <!-- // Begin Template Footer \\ -->
                                	<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateFooter">
                                    	<tr>
                                        	<td valign="top" class="footerContent">

                                            <br><br>
                                                <!-- // Begin Module: Standard Footer \\ -->


                                                <table border="0" cellpadding="10" cellspacing="0" width="70%">
                                                    <tr>
                                                        <td colspan="2" valign="middle" id="social">
                                                            <!-- <div mc:edit="std_social">
                                                                &nbsp;<a href="*|TWITTER:PROFILEURL|*">follow on Twitter</a> | <a href="*|FACEBOOK:PROFILEURL|*">friend on Facebook</a> | <a href="*|FORWARD|*">forward to a friend</a>&nbsp;
                                                            </div> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top" width="350">
                                                            <!-- <div mc:edit="std_footer">
																<em>Copyright &copy; *|CURRENT_YEAR|* *|LIST:COMPANY|*, All rights reserved.</em>
																<br />
																*|IFNOT:ARCHIVE_PAGE|* *|LIST:DESCRIPTION|*
																<br />
																<strong>Our mailing address is:</strong>
																<br />
																*|HTML:LIST_ADDRESS_HTML|**|END:IF|*
                                                            </div> -->
                                                        </td>
                                                        <td style="align-content: : center;" valign="top" width="205" id="monkeyRewards">
                                                            <!-- <div mc:edit="monkeyrewards"> -->
                                                                Kepala Sekolah
                                                            <!-- </div> -->
                                                        <!-- </td>
                                                        <td valign="top" width="205" id="monkeyRewards"> -->
                                                            <!-- <div mc:edit="monkeyrewards"> -->
                                                            <br><br>
                                                            <tab11> ttd </tab>
                                                            <br><br><br>
                                                                Joko Widodo
                                                            <br>
                                                                NIP : 12132434567890
                                                            <!-- </div> -->
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <!-- <td colspan="2" valign="middle" id="utility"> -->
                                                          <!-- <div mc:edit="std_utility"> -->
                                                          <br><br>
                                                              <!-- <tab11>Deputi Bidang Sains Antariksa dan Atmosfer</tab11> -->
                                                          <br>
                                                        <!-- </td> -->
                                                    <!-- </tr>
                                                    <tr> -->
                                                      <!-- <tab11>Tembusan :</tab11> -->
                                                        <br>
                                                    </tr>
                                                    </body> </html>
                                                </table>
                                                <!-- // End Module: Standard Footer \\ -->

                                            </td>
                                        </tr>
                                    </table>


                                    <!-- // End Template Footer \\ -->
                                </td>
                            </tr>
                        </table>
                        <br />
                    </td>
                </tr>
            </table>
            <table>
            <!-- <td valign="bottom" class="footerContent">
	            <td style="position: ab" width="205" id="monkeyRewards">
	                Kepala Kesiswaan dan Keuangan
	                <br><br>
	                <tab11> ttd </tab>
	                <br><br><br>
	                    Malika Saumnuari
	                    <br>
	                        NIP : 0987654321
	            </td>
	        </td> -->
            </tabel>
        </center>
