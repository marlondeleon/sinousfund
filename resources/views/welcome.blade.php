@extends('layouts.main')

@section('content')

<div class="all-content sfPublicWrapper" id="PublicWrapper">

    <div>
        <div>
            <div id="healthcheck" style="display: none;">9d4b21c6-35a8-4ce7-97b5-772a310620b6</div>
        </div>

    </div>


    <nav class="navbar bx-navbar navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="/images/logos/blackstone-logo.png">
                </a>
            </div>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="/the-firm" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            The Firm
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="dropdown-submenu">
                                        <h5>The Firm</h5>

                                        <ul class="topNavCol">
                                            <li class="">
                                                <a href="/the-firm/overview" target="_self">Overview</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/our-offices" target="_self">Our Offices</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/our-people" target="_self">Our People</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <h5>Asset Management</h5>

                                        <ul class="topNavCol">
                                            <li class="">
                                                <a href="/the-firm/asset-management/private-equity" target="_self">Private Equity</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/tactical-opportunities" target="_self">Tactical Opportunities</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/strategic-partners" target="_self">Strategic Partners</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/real-estate" target="_self">Real Estate</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/hedge-fund-solutions-(baam)" target="_self">Hedge Fund Solutions (BAAM)</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/credit-(gso)" target="_self">Credit (GSO)</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/infrastructure" target="_self">Infrastructure</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/innovations-and-infrastructure" target="_self">Innovations</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/blackstone-insurance-solutions" target="_self">Blackstone Insurance Solutions</a>
                                            </li>
                                            <li class="">
                                                <a href="/the-firm/asset-management/registered-funds" target="_self">Registered Funds</a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="/investors" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            Investors
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="">
                                        <a href="/investors/overview" target="_self">Overview</a>
                                    </li>
                                    <li class="">
                                        <a href="/investors/smaller-institutions-and-individuals" target="_self">Smaller Institutions &amp; Individuals</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="/our-impact" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            Our Impact
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="dropdown-submenu">
                                        <h5>Blackstone Charitable Foundation</h5>

                                        <ul class="topNavCol">
                                            <li class="">
                                                <a href="/our-impact/blackstone-charitable-foundation/overview" target="_self">Overview</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <h5>Corporate Social Responsibility</h5>

                                        <ul class="topNavCol">
                                            <li class="">
                                                <a href="/our-impact/corporate-social-responsibility/overview" target="_self">Overview</a>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="/shareholders" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            Shareholders
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/shareholders/default.aspx" target="_self">Overview</a>
                                    </li>
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/annual-reports-and-sec-filings/default.aspx" target="_self">Annual Reports / SEC Filings</a>
                                    </li>
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/unit-information/default.aspx" target="_self">Unit Information</a>
                                    </li>
                                    <li class="">
                                        <a href="https://ir.blackstone.com/investors/tax-and-distributions/default.aspx" target="_self">Tax Info / Distributions</a>
                                    </li>
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/events/default.aspx" target="_self">Events</a>
                                    </li>
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/corporate-governance/default.aspx" target="_self">Corporate Governance</a>
                                    </li>
                                    <li class="">
                                        <a href="http://ir.blackstone.com/investors/contact-us-and-email-alerts/default.aspx" target="_self">Contact Us / Email Alerts</a>
                                    </li>
                                    <li class="">
                                        <a href="https://www.bxaccess.com/portal/" target="_blank">Limited Partner Portal Login (BXAccess)</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="/insights" target="_self">Insights</a>
                    </li>
                    <li class="dropdown">
                        <a href="/careers" data-toggle="dropdown" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            Careers
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="">
                                        <a href="/careers/make-an-impact" target="_self">Why Blackstone</a>
                                    </li>
                                    <li class="">
                                        <a href="/careers/experienced" target="_self">Experienced</a>
                                    </li>
                                    <li class="">
                                        <a href="/careers/University" target="_self">University</a>
                                    </li>
                                    <li class="">
                                        <a href="/careers/veterans" target="_self">Veterans</a>
                                    </li>
                                    <li class="">
                                        <a href="/careers/blackstone-women" target="_self">Blackstone Women</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>

                    <li class="dropdown search-dropdown">
                        <a href="/search" data-toggle="dropdown" class="dropdown-toggle" title="Search">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="container">
                                <ul class="row">
                                    <li class="dropdown-submenu">
                                        <div class="input-group searchBar">
                                            <div class="gcse-searchbox-only" data-resultsUrl="/search"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="nav-buttons">
                <a href="https://twitter.com/blackstone" target="_blank" title="Follow Blackstone on Twitter" class="twitter-ico">
                    <i class="fa bx-icon-twitter"></i>
                </a>

                <a href="https://www.linkedin.com/company/the-blackstone-group" target="_blank" title="Blackstone on LinkedIn" class="linkedin-ico">
                    <i class="fa bx-icon-linkedin"></i>
                </a>

                <a href="https://www.facebook.com/blackstone" target="_blank" title="Like Blackstone on Facebook" class="facebook-ico">
                    <i class="fa bx-icon-facebook"></i>
                </a>

                <a href="https://www.instagram.com/blackstone/" target="_blank" title="Follow Blackstone on Instagram" class="instagram-ico">
                    <i class="fa bx-icon-instagram"></i>
                </a>

                <a href="/contact-us" title="Sign up for email alerts" class="launch-email-alert-signup email-ico">
                    <i class="fa fa-envelope"></i>
                </a>

                <a href="https://www.bxaccess.com/" target="_blank" title="Limited Partner Login (BXAccess)" class="login-link">
                    Login
                </a>
            </div>
        </div>
    </nav>





    <div class='sfContentBlock'>
        <div class="pageTitleWrap cover-image-full-nav">
            <div class="pageTitleBack rw-wrapper container">
                <!--[if IE]>
			<div class="ieFacepalm">
				<div class="ieLine1">Bringing Sustainability Back</div>
				<div class="ieLine2">to Core Business Goals</div>
<div class="ieLine3"><a href="/media/blogs/article/bringing-sustainability-back-to-core-business-goals">Learn more</a></div>
			</div>
		<![endif]-->
                <section class="heroAni">
                    <p class="title">
                        <span>Bringing Sustainability Back</span>
                        <span>to Core Business Goals</span>
                        <span><a href="/media/blogs/article/bringing-sustainability-back-to-core-business-goals">Learn more</a></span>
                    </p>
                </section>
            </div>
            <!-- WHEEL-->
            <div class="blackBack">
                <div class="wheel-wrapper">
                    <div class="linkWrap">
                        <!-- LINK 1 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".1s" id="link1" style="visibility: visible; animation-delay: 0.1s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/private-equity">
                            </a>
                            <p class="wheelLinkText" style="vertical-align: super;"><a href="/the-firm/asset-management/private-equity">Private Equity</a></p>
                            <p aria-hidden="true" class="wheelIconB"><a href="/the-firm/asset-management/private-equity"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></p>
                        </div>
                        <!-- LINK 2 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".2s" id="link2" style="visibility: visible; animation-delay: 0.2s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/tactical-opportunities">
                            </a>
                            <div class="wheelLinkText" style="text-align: right;"><a href="/the-firm/asset-management/tactical-opportunities">
                                    Tactical<br />
                                    Opportunities
                                </a></div>
                            <div aria-hidden="true" class="wheelIconB"><a href="/the-firm/asset-management/tactical-opportunities"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                        </div>
                        <!-- LINK 3 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".3s" id="link3" style="visibility: visible; animation-delay: 0.3s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/strategic-partners">
                            </a>
                            <div class="wheelLinkText" style="text-align: right; vertical-align: bottom;"><a href="/the-firm/asset-management/strategic-partners">
                                    Strategic<br />
                                    Partners
                                </a></div>
                            <div aria-hidden="true" class="wheelIconB"><a href="/the-firm/asset-management/strategic-partners"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                        </div>
                        <!-- LINK 4 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".4s" id="link4" style="visibility: visible; animation-delay: 0.4s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/real-estate">
                            </a>
                            <div aria-hidden="true" class="wheelIconB" style="display: block;"><a href="/the-firm/asset-management/real-estate"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="padding-right: 20px;"><a href="/the-firm/asset-management/real-estate">
                                    Real Estate
                                </a></div>
                        </div>
                        <!-- LINK 5 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".5s" id="link5" style="visibility: visible; animation-delay: 0.5s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/hedge-fund-solutions-(baam)">
                            </a>
                            <div aria-hidden="true" class="wheelIconB"><a href="/the-firm/asset-management/hedge-fund-solutions-(baam)"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="display: block;"><a href="/the-firm/asset-management/hedge-fund-solutions-(baam)">
                                    Hedge Fund<br />
                                    Solutions (BAAM)
                                </a></div>
                        </div>
                        <!-- LINK 6-->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".6s" id="link6" style="visibility: visible; animation-delay: 0.6s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/credit-(gso)">
                            </a>
                            <div aria-hidden="true" class="wheelIconG" style="display: block;"><a href="/the-firm/asset-management/credit-(gso)"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="padding-left: 20px;"><a href="/the-firm/asset-management/credit-(gso)">
                                    Credit (GSO)
                                </a></div>
                        </div>
                        <!-- LINK 7 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".7s" id="link7" style="visibility: visible; animation-delay: 0.7s; animation-name: flipInX;">
                            <a href="/the-firm/asset-management/infrastructure">
                            </a>
                            <div aria-hidden="true" class="wheelIconG" style="margin-top: 7px;"><a href="/the-firm/asset-management/infrastructure"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="vertical-align: middle;"><a href="/the-firm/asset-management/infrastructure">
                                    Infrastructure
                                </a></div>
                        </div>
                        <!-- LINK 8 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".8s" id="link8" style="visibility: visible; animation-delay: 0.8s; animation-name: flipInX;">
                            <a href="/our-impact/blackstone-charitable-foundation/overview">
                            </a>
                            <div aria-hidden="true" class="wheelIconG"><a href="/our-impact/blackstone-charitable-foundation/overview"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="vertical-align: middle;"><a href="/our-impact/blackstone-charitable-foundation/overview">
                                    Blackstone<br />
                                    Charitable Foundation
                                </a></div>
                        </div>
                        <!-- LINK 9 -->
                        <div class="wheelLink wow flipInX animated" data-wow-delay=".9s" id="link9" style="visibility: visible; animation-delay: 0.9s; animation-name: flipInX;">
                            <a href="/our-impact/corporate-social-responsibility/overview">
                            </a>
                            <div aria-hidden="true" class="wheelIconG"><a href="/our-impact/corporate-social-responsibility/overview"><img alt="" src="/images/assets/home-wheel-btn.png" /></a></div>
                            <div class="wheelLinkText" style="vertical-align: middle;"><a href="/our-impact/corporate-social-responsibility/overview">
                                    Corporate<br />
                                    Social Responsibility
                                </a></div>
                        </div>
                        <div class="pageDown" id="pageDown1"><img alt="Down" src="/images/assets/page-down3.png" /></div>
                    </div>
                    <div class="wheelWrap">
                        <div class="wheelTitle">
                            <div class="wheelLine1 wow bounceInDown animated" data-wow-delay=".1s" style="visibility: visible; animation-delay: 0.1s; animation-name: bounceInDown;">
                                our
                            </div>
                            <div class="wheelLine2 wow bounceInDown animated" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: bounceInDown;">
                                approach
                            </div>
                        </div>
                        <img alt="" class="wheel" src="/images/assets/home-wheel-w.png" />
                    </div>
                </div>
            </div>
            <div class="pageDown" id="pageDown2"><img alt="Down" src="/images/assets/page-down3.png" /></div>
        </div>


    </div>


    <div class="sf_cols bannerWrap">
        <div class="sf_colsOut sf_1col_1_100">
            <div id="Contentplaceholder1_C031_Col00" class="sf_colsIn sf_1col_1in_100">
                <div class="row" data-sf-element="Row">
                    <div id="Contentplaceholder1_C036_Col00" class="sf_colsIn col-md-12" data-sf-element="Column 1" data-placeholder-label="Column 1">
                        <div class='sfContentBlock'>
                            <div class="bannerTitle">Blackstone Reports Second Quarter 2018 Results</div>
                            <div class="bannerSubTitle">
                                <ul>
                                    <li><a href="/docs/earnings/Blackstone2Q18EarningsPressRelease.pdf?sfvrsn=1ee3edad_3" target="_blank">View Full Press Release</a></li>
                                    <li>View Supplemental Financial Data: <a href="/docs/earnings/Blackstone2Q18SupplementalFinancialDataPDF.pdf?sfvrsn=66e3edad_4" target="_blank">PDF</a> | <a href="/docs/earnings/Blackstone2Q18SupplementalFinancialData.xlsx?sfvrsn=62e3edad_3" target="_blank">Excel</a></li>
                                    <li><a href="http://ir.blackstone.com/investors/events/default.aspx">Listen to Replay</a></li>
                                </ul>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="row" data-sf-element="Row">
                    <div id="Contentplaceholder1_C032_Col00" class="sf_colsIn col-md-8" data-sf-element="Column 1" data-placeholder-label="Column 1">
                    </div>
                    <div id="Contentplaceholder1_C032_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2">
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="row homeBanner" data-sf-element="Row">
        <div id="Contentplaceholder1_C009_Col00" class="sf_colsIn col-md-4" data-sf-element="Column 1" data-placeholder-label="Column 1">
            <div>
                <div>
                    <div class="homeSecWrap">
                        <h2>News and Views</h2>
                        <div class="viewAll"><a href="/insights">view all insights</a></div>
                    </div>
                </div>

            </div>
            <!-- 2017.1.118.40 -->
            <h5 style="padding-bottom: 5px; margin-bottom: -8px;">PRESS RELEASES</h5>
            <ul class="sfnewsList sfnewsListTitleDateSummary sflist pressList">

                <li class="sfnewsListItem sflistitem" data-sf-provider='OpenAccessDataProvider' data-sf-id='308d8d8d-5ef4-6405-bb7f-ff0000178425' data-sf-type="Telerik.Sitefinity.News.Model.NewsItem">
                    <h3 class="sfnewsTitle sftitle pressTitle">
                        <a data-sf-field="Title" data-sf-ftype="ShortText" href="media/press-releases/article/blackstone-announces-2018-investor-day">Blackstone Announces 2018 Investor Day</a>
                    </h3>

                    <div id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01">



                        <div id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_textLabel_read" class="sfTxtContent">
                            New York, August 30, 2018 – Blackstone (NYSE:BX) announced today that it will host an Investor Day for shareholders and analysts on Friday, September 21, 2018 in New York.
                        </div>

                        <div id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_characterCounter_read">

                        </div>

                        <div id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ConditionalTemplates" style="display:none;">
                            <div id="ClientTemplatePanel_">

                                <div>
                                    <span id="titleLabel_write_" class="sfTxtLbl sfInlineBlock"></span>
                                    <span id="tooltip_write_">

                                        <div class="sfDetailsPopupWrp sfInlineBlock">
                                            <a onclick="return false;" id="tooltip_write__ctl00_ctl00_btnToolTipTarget_"><span class="sfTooltip">(?)</span></a>
                                            <div id="tooltip_write__ctl00_ctl00_wrpToolTip_" class="sfDetailsPopup" style="display: none;">
                                                <span id="tooltip_write__ctl00_ctl00_lblTitle_"></span>

                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <a onclick="return false;" id="expandButton_write_" class="sfOptionalExpander"></a>
                                <div id="expandableTarget_write_" class="sfFieldWrp">

                                    <input name="textBox_write_" type="text" id="textBox_write_" class="sfTxt" />
                                    <div id="characterCounter_write_" class="sfFlRight sfMRight5">

                                    </div>
                                    <div id="descriptionLabel_write_" class="sfDescription">

                                    </div>
                                    <div id="exampleLabel_write_" class="sfExample">

                                    </div>
                                    <p id="characterCounterDescription_write_" class="sfExample"></p>

                                </div>

                            </div>
                        </div>
                    </div>

                </li>

            </ul>
            <input id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ClientState" name="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ClientState" type="hidden" /><span id="ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList" style="display:none;"></span>

            <span></span>
            <div>
                <div>
                    <hr />
                </div>

            </div>
            <h5 style="padding-bottom:5px; padding-top:20px; margin-bottom: -12px;">INSIGHTS</h5>
            <ul class="sfnewsList sfnewsListTitleDateSummary sflist newsList">

                <li class="sfnewsListItem sflistitem" data-sf-provider='OpenAccessDataProvider' data-sf-id='d88c8d8d-5ef4-6405-bb7f-ff0000178425' data-sf-type="Telerik.Sitefinity.News.Model.NewsItem">
                    <h3 class="sfnewsTitle sftitle newsTitle">
                        <a data-sf-field="Title" data-sf-ftype="ShortText" href="media/blogs/article/joe-zidle-this-is-a-bull-s-dream">Joe Zidle: This is a Bull’s Dream</a>
                    </h3>


                    <div class="sfnewsSummary sfsummary" data-sf-field="Summary" data-sf-ftype="ShortText">
                        With this bull market officially becoming the longest in history, a jittery investing public reasonably raises concerns that this marathon may soon come to an abrupt finish line.
                    </div>


                </li>

            </ul>
            <input id="ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList_ClientState" name="ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList_ClientState" type="hidden" /><span id="ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList" style="display:none;"></span>

            <span></span>
        </div>
        <div id="Contentplaceholder1_C009_Col01" class="sf_colsIn col-md-4" data-sf-element="Column 2" data-placeholder-label="Column 2">
            <div>
                <div>
                    <div class="homeSecWrap">
                        <h2>Highlights</h2><a href="/insights">
                            <div class="viewAll" style="padding-left:1px;">view all</div>
                        </a>
                    </div>
                </div>

            </div>



            <article class="external-video" data-source="youtube" data-video-id="k8iZe9NsGto" data-video-embed="https://www.youtube-nocookie.com/embed/k8iZe9NsGto?rel=0&amp;amp;autoplay=1&amp;amp;modestbranding=1">
                <a href="https://youtu.be/k8iZe9NsGto" style="background-image: url(/images/youtube-thumbs/mondays-at-blackstone)" target="_blank">
                    <h5>
                        <span>
                            Mondays at Blackstone
                        </span>
                    </h5>
                </a>
            </article>

            <div class='sfContentBlock'><br />
                &nbsp;


            </div>



            <article class="external-video" data-source="youtube" data-video-id="u4Q9N2Xwavg" data-video-embed="https://www.youtube-nocookie.com/embed/u4Q9N2Xwavg?rel=0&amp;amp;autoplay=1&amp;amp;modestbranding=1">
                <a href="https://youtu.be/u4Q9N2Xwavg" style="background-image: url(/images/youtube-thumbs/ted-talk-thumb)" target="_blank">
                    <h5>
                        <span>
                            The Power of Support: A film from TED and the Blackstone Charitable Foundation
                        </span>
                    </h5>
                </a>
            </article>

            <div class='sfContentBlock'><br />
                &nbsp;


            </div>



            <article class="external-video" data-source="youtube" data-video-id="LSVI1Umu3fc" data-video-embed="https://www.youtube-nocookie.com/embed/LSVI1Umu3fc?rel=0&amp;amp;autoplay=1&amp;amp;modestbranding=1">
                <a href="https://youtu.be/LSVI1Umu3fc" style="background-image: url(/images/youtube-thumbs/michelle-obama)" target="_blank">
                    <h5>
                        <span>
                            Why Hiring Veterans is Good for Business
                        </span>
                    </h5>
                </a>
            </article>

            <div class='sfContentBlock'><br />
                &nbsp;


            </div>



            <article class="external-video" data-source="youtube" data-video-id="lrnk0LV_0mI" data-video-embed="https://www.youtube-nocookie.com/embed/lrnk0LV_0mI?rel=0&amp;amp;autoplay=1&amp;amp;modestbranding=1">
                <a href="https://youtu.be/lrnk0LV_0mI" style="background-image: url(/images/youtube-thumbs/tony-james-thumb)" target="_blank">
                    <h5>
                        <span>
                            Blackstone Executive&#160;Vice&#160;Chairman Tony&#160;James on Creating Value for Investors
                        </span>
                    </h5>
                </a>
            </article>


        </div>
        <div id="Contentplaceholder1_C009_Col02" class="sf_colsIn col-md-4" data-sf-element="Column 3" data-placeholder-label="Column 3">
            <div>
                <div>
                    <div class="homeSecWrap">
                        <h2>Twitter</h2>
                        <a href="https://twitter.com/blackstone" target="_blank">
                            <div class="viewAll" style="padding-left: 1px;">follow us</div>
                        </a>
                    </div>
                </div>

            </div>


            <div>
                <div>
                    <div style="text-align:center;"><a class="twitter-timeline" data-chrome="noborders noheader nofooter noscrollbar transparent" data-dnt="true" data-tweet-limit="4" data-widget-id="621026141059567617" href="https://twitter.com/blackstone">Tweets by @blackstone
                        </a></div>
                </div>

            </div>
        </div>
    </div>


    <div>
        <div><img alt="" class="footerImg" style="width: 100%;" src="/images/default-album/skyline-sketch-dark.png?sfvrsn=2" /></div>

    </div>
    <div class="footer-reference"></div>

    <div class="sf_cols footerWrapper">
        <div class="sf_cols footer1">
            <div class="sf_cols footer1-top">
                <div class="row containerBody" data-sf-element="Row">
                    <div id="Footer_T555C771D013_Col00" class="sf_colsIn col-sm-3">
                        <div>
                            <div>
                                <div class="footerTitle footer1-top-left"><em class="fa fa-link"></em>Quick Links</div>
                            </div>

                        </div>
                        <div class="footerTitle footer1-top-left" data-sf-element="Column 1" data-placeholder-label="Column 1">
                        </div>
                    </div>
                    <div id="Footer_T555C771D013_Col01" class="sf_colsIn col-sm-6">
                        <div>
                            <div>
                                <div class="footerTitle footer1-top-center"><em class="fa fa-globe"></em>Explore Blackstone</div>
                            </div>

                        </div>
                        <div class="footerTitle footer1-top-center" data-sf-element="Column 2" data-placeholder-label="Column 2">
                        </div>
                    </div>
                    <div id="Footer_T555C771D013_Col02" class="sf_colsIn col-sm-3">
                        <div>
                            <div>
                                <div class="footerTitle footer1-top-right"><em class="fa fa-envelope-o"></em>Get in Touch</div>
                            </div>

                        </div>
                        <div class="footerTitle footer1-top-right" data-sf-element="Column 3" data-placeholder-label="Column 3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer1-bottom">
                <div class="row containerBody">
                    <div id="Footer_T555C771D013_Col03" class="sf_colsIn col-sm-3" data-sf-element="Column 4" data-placeholder-label="Column 4">


                        <nav class="footer1-links footer1-links-left multi-column" role="navigation">
                            <ul>
                                <li class="">
                                    <a href="/the-firm/about-us" target="_self">The Firm</a>
                                </li>
                                <li class="">
                                    <a href="/shareholders" target="_self">Shareholders</a>
                                </li>
                                <li class="">
                                    <a href="/investors" target="_self">Investors</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/our-people" target="_self">Our People</a>
                                </li>
                                <li class="">
                                    <a href="/media/press-releases" target="_self">Press Releases</a>
                                </li>
                            </ul>
                        </nav>



                        <div class="footer1-links-left"></div>
                    </div>
                    <div id="Footer_T555C771D013_Col04" class="sf_colsIn col-sm-6" data-sf-element="Column 5" data-placeholder-label="Column 5">


                        <nav class="footer1-links footer1-links-center multi-column" role="navigation">
                            <ul>
                                <li class="">
                                    <a href="/the-firm/asset-management/private-equity" target="_self">Private Equity</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/tactical-opportunities" target="_self">Tactical Opportunities</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/strategic-partners" target="_self">Strategic Partners</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/real-estate" target="_self">Real Estate</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="">
                                    <a href="/the-firm/asset-management/hedge-fund-solutions-(baam)" target="_self">Hedge Fund Solutions (BAAM)</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/credit-(gso)" target="_self">Credit (GSO)</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/infrastructure" target="_self">Infrastructure</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/innovations-and-infrastructure" target="_self">Innovations</a>
                                </li>
                            </ul>
                            <ul>
                                <li class="">
                                    <a href="/the-firm/asset-management/blackstone-insurance-solutions" target="_self">Blackstone Insurance Solutions</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/asset-management/registered-funds" target="_self">Registered Funds</a>
                                </li>
                            </ul>
                        </nav>



                        <div class="footer1-links-center"></div>
                    </div>
                    <div id="Footer_T555C771D013_Col05" class="sf_colsIn col-sm-3" data-sf-element="Column 6" data-placeholder-label="Column 6">


                        <nav class="footer1-links footer1-links-right" role="navigation">
                            <ul>
                                <li class="">
                                    <a href="/careers" target="_self">Careers</a>
                                </li>
                                <li class="">
                                    <a href="/the-firm/our-offices" target="_self">Our Offices</a>
                                </li>
                                <li class="">
                                    <a href="https://bxaccess.com/portal" target="_blank">Limited Partner Login</a>
                                </li>
                                <li class="">
                                    <a href="/contact-us" target="_self">Contact Us</a>
                                </li>
                            </ul>
                        </nav>



                        <div class="footer1-links-right"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row small-footer">
            <div id="Footer_T555C771D013_Col06" class="sf_colsIn col-sm-12" data-sf-element="Column 9" data-placeholder-label="Column 9">
                <div>
                    <div>
                        <div class="back-to-top">
                            <a href="#"> <em class="fa fa-angle-up"></em> Back to Top</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom row containerBody">
            <div id="Footer_T555C771D013_Col07" class="sf_colsIn col-sm-3" data-sf-element="Column 7" data-placeholder-label="Column 7">
                <img src="/images/assets/logos/blackstone-logo.png?sfvrsn=2&amp;MaxWidth=100&amp;MaxHeight=100&amp;ScaleUp=false&amp;Quality=High&amp;Method=ResizeFitToAreaArguments&amp;Signature=7BCC38138B8CEF9DDBC11921119B41D178A7B89F" title="Blackstone" alt="Blackstone" />
            </div>

            <div id="Footer_T555C771D013_Col08" class="sf_colsIn col-sm-9 col-xs-12 footer-bottom-text" data-sf-element="Column 8" data-placeholder-label="Column 8">
                <div>
                    <div>
                        <div class="copyright">&copy; <time>2016</time> The Blackstone Group L.P. | <span class="languages"><a class="sl_norewrite" data-origin="https://www.blackstone.com" href="https://www.blackstone.com/">English</a> | <a data-origin="https://china.blackstone.com" href="#">中文 (Chinese)</a></span>
                        </div><span class="footer-cont"><a href="/transparency-disclosure">Transparency &amp; Disclosure</a> | <a href="/legal">Legal</a> | <a href="/privacy">Privacy</a> | <a href="/cookie-notice">Cookie Notice</a> | <a href="/japanese-disclaimer">Japan Disclaimer</a>
                        </span>
                    </div>

                </div>
                <div>
                    <div>
                        <div class="lang-only-ja"><a href="/docs/japanese/japan-privacy-policy.pdf?sfvrsn=2" target="_blank">プライバシー・ポリシー</a> &nbsp;|&nbsp;<a href="/docs/japanese/japanese-disclosures-webpage.pdf?sfvrsn=4" target="_blank">法規制に基づく開示</a>
                            <p style="margin-bottom:0;">ブラックストーン・グループ・ジャパン株式会社</p>
                            <p style="margin-bottom:0;">金融商品取引業者 関東財務局（金商）第１７８５号</p>
                            <p style="margin-bottom:0;">加入協会/日本証券業協会　一般社団法人第二種金融商品取引業協会</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div>
        <div>
            <div class="modal fade in email-collect-box" id="email_collect_box">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="email-form" data-pardot-endpoint="https://go.pardot.com/l/213192/2017-05-05/nz68">
                            <div class="modal-header"><button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h2 class="modal-title">Stay up-to-date</h2>
                                <h3>Email Alerts</h3>
                            </div>
                            <div class="modal-body">
                                <p class="desc">To receive email notifications when press releases or Byron Wien's Market Commentaries are posted, sign up for email alerts here.
                                </p>
                                <div class="alert hide" role="alert">&nbsp;</div>
                                <div class="form-group floating-label"><label for="mce-EMAIL">
                                        email address <span class="required-label">(required)</span>
                                    </label>
                                    <input class="form-control required" id="mce-EMAIL" name="email" placeholder="email address" type="email" /></div>
                                <div class="row">
                                    <div class="form-group floating-label col-md-6"><label for="mce-FNAME">
                                            first name <span class="required-label">(required)</span>
                                        </label>
                                        <input class="form-control required" id="mce-FNAME" name="first_name" placeholder="first name" type="text" /></div>
                                    <div class="form-group floating-label col-md-6"><label for="mce-LNAME">
                                            last name <span class="required-label">(required)</span>
                                        </label>
                                        <input class="form-control required" id="mce-LNAME" name="last_name" placeholder="last name" type="text" /></div>
                                </div>
                                <div class="row">
                                    <div class="form-group floating-label col-md-6"><label for="mce-MMERGE3">company name</label>
                                        <input class="form-control" id="mce-MMERGE3" name="company_name" placeholder="company name" type="text" /></div>
                                    <div class="form-group floating-label col-md-6"><label for="mce-MMERGE4">job title</label>
                                        <input class="form-control" id="mce-MMERGE4" name="job_title" placeholder="job title" type="text" /></div>
                                </div>
                                <div class="row" id="email_capture_lists">
                                    <div class="col-md-12">
                                        <div class="checkbox"><label>
                                                <input id="mce-lists-market-commentary" name="list_byron_market_commentary" type="checkbox" value="1" />Byron Wien Market Commentary
                                            </label>
                                        </div>
                                        <div class="checkbox"><label>
                                                <input id="mce-lists-press-releases" name="list_press_releases" type="checkbox" value="1" />Blackstone Press Releases
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div style="position:absolute;left:-5000px;"><iframe height="1" id="email_capture_iframe" width="1"></iframe></div>
                            </div>
                            <div class="modal-footer"><button class="btn btn-primary btn-lg btn-block" type="submit">
                                    <em class="fa fa-envelope">
                                    </em>
                                    &nbsp; Submit
                                </button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div>
            <div aria-hidden="true" class="modal fade bx-modal bx-cookie-notice" data-backdrop="static" data-keyboard="false" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <h2>Cookie Information and Consent Request
                        </h2>
                        <h3>Blackstone Cookie Policy
                        </h3>
                        <p>This website uses cookies, including third-party cookies, in order to obtain information about your visit to the website and make this website better. Please click on the link "Learn More" if you would like more information about the cookies used on this website and how to change your cookie settings. Otherwise, we will assume you're OK to continue.
                        </p>
                        <p><a href="/cookie-notice">Learn More</a>
                        </p><a aria-label="Close" class="accept-policy btn bar-link thin" data-dismiss="modal">I am fine to continue</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div>
            <div aria-hidden="true" class="modal fade bx-modal contact-us" id="contact-us-modal" role="dialog" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content"><a aria-label="Close" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></a>
                        <h2>Contact Us</h2>
                        <h3>General</h3>
                        <p>For office-specific contact information, please visit <a href="/our-offices">our offices page.</a> <br /><em class="fa fa-phone fa-fw"></em>Switchboard: +1 (212) 583-5000<br /></p>
                        <hr />
                        <h3>Email Alerts &amp; Investor Relations</h3>
                        <p>To receive email notifications when press releases or Byron Wien&rsquo;s Market Commentaries are posted, <a class="launch-email-alert-signup" href="https://blackstone.us3.list-manage.com/subscribe/post?u=b2b0698d16f75126a4ba40dec&amp;id=c94d2814d2">sign up for email alerts here</a>.
                        </p>
                        <p>For investor relations contact information or to receive email notifications for SEC filings, events, end of day stock quotes, and financial reports, please visit <a href="http://ir.blackstone.com/investors/contact-us-and-email-alerts/default.aspx">our Investor Relations page</a>.
                        </p>
                        <h5>Investor Relations Contact Information</h5>
                        <p><em class="fa fa-phone fa-fw"></em>US: +1 888-756-8443<br /><em class="fa fa-phone fa-fw"></em>International: +1 646-313-6590<br /><em class="fa fa-envelope"></em><a href="mailto:BlackstoneInvestorRelations@blackstone.com">BlackstoneInvestorRelations@blackstone.com</a> </p>
                        <hr />
                        <h3>Media Contacts</h3>
                        <p>For media inquiries or recent press releases, please <a href="/media/">click here</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div>
        <div>
            <img alt="" height="1" src="https://dc.ads.linkedin.com/collect/?pid=182578&amp;fmt=gif" style="display:none;" width="1" />
        </div>
    </div>

</div>


@endsection