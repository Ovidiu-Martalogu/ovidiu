@extends('layouts.app')

@push("internal-style")
    <link as="script" rel="preconnect" href="//ajax.googleapis.com">
    <link crossorigin="" as="script" rel="preconnect" href="//ajax.googleapis.com">
    <link as="script" rel="dns-prefetch" href="//ajax.googleapis.com">
    <link href="https://www.oxfordreference.com/page/134" rel="canonical">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <!-- Open Graph Metadata -->
    <meta content="https://www.oxfordreference.com/page/134" property="og:url">
    <meta content="Oxford Reference" property="og:site_name">
    <meta content="website" property="og:type">
    <meta content="Science and Technology" property="og:title">
    <meta content="en_US" property="og:locale">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="Science and Technology" name="twitter:title">
    <!-- Open Graph Metadata -->
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, minimum-scale=1.0, initial-scale=1.0" name="viewport">
    <link href="/newsrss" title="News (RSS 2.0)" type="application/rss+xml" rel="alternate">
    <link type="image/x-icon" href="https://www.oxfordreference.com/assets/ctx/6ab902f7/favicon.ico"
          rel="shortcut icon">


    <link media="all" href="/skin/9e1a978744724d494b8b9784153c6a1973f17fee/css/normalize.css" type="text/css"
          rel="stylesheet">


    <link media="all" href="/skin/9e1a978744724d494b8b9784153c6a1973f17fee/css/style.css" type="text/css"
          rel="stylesheet">


     <link rel="stylesheet" href="https://www.oxfordreference.com/assets/oup/zc4dab210/css/common.css"
          id="commonStylesheet"> 

    <link rel="stylesheet" href="https://www.oxfordreference.com/assets/css/za29a1266/oup-cxs.css">
    <link rel="stylesheet" href="https://www.oxfordreference.com/assets/baseskin/z868d4a2f/css/cxs-reset.css">
    <link rel="stylesheet" href="https://www.oxfordreference.com/assets/baseskin/z2fb7dce7/css/cxs.css">


    <link rel="stylesheet" href="https://www.oxfordreference.com/assets/oup/z2b87a83d/css/mystuff.css"
          id="mystuffStylesheet">
    <link href="" type="text/css" rel="stylesheet" class="cxs">


    <link media="all" href="/skin/9e1a978744724d494b8b9784153c6a1973f17fee/css/override.css" type="text/css"
          rel="stylesheet">


    <link class="nocombine" media="print" href="/skin/9e1a978744724d494b8b9784153c6a1973f17fee/css/print.css"
          type="text/css" rel="stylesheet">


    <link class="nocombine" href="/usercss/contentCSS" type="text/css" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/meta/z6a76c159/tapestry5/font_awesome/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="https://www.oxfordreference.com/assets/css/zbb83c97/default.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/vendor/ze5c2e950/splide/splide.min.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/vendor/zcb91ae9f/font-awesome/css/brands.min.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/css/zb721ef28/FindThisResource.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/css/za8ff4a48/ContributorDetails.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/oxford/z8afeb2e/components/module/OdoPopupWidgetModule.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/oxford/z41888ac9/components/ResourceSelector.css">
    <link type="text/css" rel="stylesheet"
          href="https://www.oxfordreference.com/assets/applib/z99749d88/mixins/default.css">
    <link type="text/css" rel="stylesheet"
          href="/skin/9e1a978744724d494b8b9784153c6a1973f17fee-BC41E071F17AD6552031C152ED354944/languageFonts.css">

 <link rel="stylesheet" href="/fileasset/css/style.css" type="text/css" media="screen"/>
 <link rel="stylesheet" href="/fileasset/css/oro-overrides.css" type="text/css" media="screen">
@endpush

@section('content')

<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7 ie6" lang="en"><![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8 ie7" lang="en"><![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9 ie8" lang="en"><![endif]-->
<!--[if IE 9]>
<html class="no-js ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><! -->
<!--
	arachne: 46.2 build 603c249f59f45b3368c9ee3f777afc7de8247c6c
	Sams SGK Authentication: 2024R2.29 build ${buildNumber}
	oup-base-plugin: 2024R2.29.6 build 9e1a978744724d494b8b9784153c6a1973f17fee
	oxford-common: 2024R2.29.6 build 9e1a978744724d494b8b9784153c6a1973f17fee
	amxclient: 2024R2.29 build b1cf30f5c58228b83b2b5ca5ba42ea6f070130be
	amxlib: 2024R2.29 build b1cf30f5c58228b83b2b5ca5ba42ea6f070130be
	ifpress-app: 2024R2.29 build 53ff2981bbbf13a0170745a61f99c761138aadc3
	concurrency-client: 3.1 build cc5f3b097e2f5a56a63bddce31df6a4d5fd16e92
	saferpay-client: 3.1 build 657c334eb5f54e9b34a19002e9f6943298dd229a
	ingenico-client: 2.1 build 45082812b6635323914c069b1a8a0051d88ef67a
	pf-similarity-client: 7.0 build d4eb2829434c29efdc01a99996c7d7dee8a43efc
	content-converter-client: 4.2 build bf4b67450db289362d6a1e17984547aec9bf4c70
	ifpress-core: 34.6 build 4b7f116e134005a71aa897f13ac8dd70b9c6be08
	ifpress-applib-core: 2024R2.29 build 53ff2981bbbf13a0170745a61f99c761138aadc3
	document-management-client: 9.1 build 475fc8cf22f352e4854380002c22ab4614f7c307
	contentrank-client: 7.0 build a97296ef2067bdf7bc3f95e851920b8de9dd7e36
	hoard-client: 5.0 build 8b8189b76e563d12527b9b67c8c2fc50a7ae0f0e
	depositor-client: 7.2 build 7ee77805c0430f1dba2067730982e22ada84c67e
	micro-arachne-client: 18.0 build 40a42d66d92d47070a042022c4f7ef1fd9ea0236
	emailer-client: 10.0 build 08891dcecbdd0a56fc3f6f3dec6831d8763cc0c6
	emailer-ui: 14.1 build 8f85cc4474772b901fffbf6051d03a6c46a6b702
-->
<!--Server Information: Hostnames:
	1 - oro-web-3.oupprod.pubfactory.net
	2 - fe80:0:0:0:8f:73ff:fefd:8273%ens5
	3 - 10.2.2.253
Requested: 10.2.2.253/10.2.2.253
Port:443--><!-- Left Column -->
<!-- Main Content Block -->

       

    <!--[if IE 9]>
    <style type="text/css">.pageloading-mask {
        opacity: 0.25;
    }</style><![endif]--><!--[if lt IE 9]>
    <style type="text/css">.pageloading-mask {
        filter: alpha(opacity=25);
    }</style><![endif]-->
    
    
    
        <!-- Google Tag Manager -->
       <!-- <noscript>
            <iframe src="//www.googletagmanager.com/ns.html?id=GTM-NDJMKLV" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe>
        </noscript>
-->
        
        <div class="odoPopupWidgetModule" data-container-type="zone" id="odoPopupWidgetZone">
            <a data-update-zone="odoPopupWidgetZone" style="display:none"
               href="/page.layout.odopopupwidget:ajaxupdate?t:ac=scienceandtech&amp;t:ac=scienceandtech">Update</a></div>
        <a id="jumpToContent" href="#mainContent" class="offScreen skip js-skip">Jump to
            Content</a>
        <div class="pw-3">
            <div >
                <div >
                     <!-- header eu-->
                <h1>Welcome to Octavian's Webside</h1>
                <h4 style="font-family:Lucida Handwriting, monospace;" id="Home">I am a junior web developer</h4>
                    <div id="headerUtilityBar">
                    
                        <div>
                            <div id="loginNav">

                    <span class="personalization-link-sign-in">
                        <a id="signIn" data-testid="login" href="/login">
                            Personal Profile
                        </a>
                    </span></div>
                            <ul class="null c-List__items" id="utilityNav">
                                <li class=" c-List__item"><a href="/page/about" class="c-Button c-Button--primary">
                                        <span>About</span>
                                    </a></li>
                                <li class=" c-List__item"><a href="/page/news" class="c-Button c-Button--primary">
                                        <span>News</span>
                                    </a></li>
                                <li class=" c-List__item"><a href="/page/subscriber/subscriber-services"
                                                             class="c-Button c-Button--primary">
                                        <span>Subscriber Services</span>
                                    </a></li>
                                <li class=" c-List__item"><a href="/page/contact-us" class="c-Button c-Button--primary">
                                        <span>Contact Us</span>
                                    </a></li>
                                <li class=" c-List__item"><a href="/page/help" class="c-Button c-Button--primary">
                                        <span>Help</span>
                                    </a></li>
                                <li class=" c-List__item"><a href="/page/for-authors" class="c-Button c-Button--primary">
                                        <span>For Authors</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="headerLogo">
                        <a href="/">
                            <span>

                                    Oxford Reference


                            </span>
                        </a>
                    </div>
                    <div id="quickSearch">
                        <form role="search" id="quickLinks" action="/search"><input value="" id="context" type="hidden"></input>
                            <div id="quickSearchFilters">
                                <a class="quickLabel" href="/browse" id="showSearch">
                                    Publications
                                </a>
                                <a style="display: none;" class="quickLabel" href="/searchSecondary" id="showSearchsecondary">
                                    Pages
                                </a>
                                <ul>
                                    <li>
                                        <a id="showSearchOption" href="#"
                                           onclick="switchQuicksearch('/search', 'showSearch');return false;">
                                            Publications
                                        </a>
                                    </li>
                                    <li>
                                        <a id="showSearchsecondaryOption" href="#"
                                           onclick="switchQuicksearch('/searchsecondary', 'showSearchsecondary');">
                                            Pages
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="searchRadio">
                                <span class="searchRadioInputs">

                                </span>
                            </div>
                            <input placeholder="Search" aria-label=" Enter search query" name="q" id="q" type="text"></input>
                            <input title="Search" name="searchBtn" id="searchBtn" value="Search" type="submit"></input>
                            <div id="quickSearchItems">
                                <a id="helpBtn" href="/help#oso">
                                        <span>
                                            Help
                                        </span>
                                </a></div>
                            <input value="true" name="isQuickSearch" type="hidden"></input></form>
                    </div>

                    <div id="navigation">
                        <div id="navigationWrapper">
                            <ul id="homenav" class="closed">
                                <li class="browseNav expandable first">
                                    <a data-body="ORONavigation" aria-expanded="false" aria-controls="ORONavigation"
                                       role="button" class="showTaxonomyNav" href="#">
                                        <span class="label"> Subject</span>
                                        <span class="browseArrow">  </span>
                                    </a>

                                    <ul id="ORONavigation" class="taxonomyNavigation expandContractBox">
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU00020">
                                                        Archaeology
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU00001ORO">
                                                        Art &amp; Architecture
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00155">
                                                        Bilingual dictionaries
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU00670">
                                                        Classical studies
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00230">
                                                        Encyclopedias
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00001ORO">
                                                        English Dictionaries and Thesauri
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU00830">
                                                        History
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00180">
                                                        Language reference
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:LAW00010">
                                                        Law
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU01290">
                                                        Linguistics
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU01560">
                                                        Literature
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU01750">
                                                        Media studies
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:MED00010">
                                                        Medicine and health
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU01790">
                                                        Music
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00290">
                                                        Names studies
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU02650">
                                                        Performing arts
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU02720">
                                                        Philosophy
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:GEN00170">
                                                        Quotations
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU03020">
                                                        Religion
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:SCI00010">
                                                        Science and technology
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:SOC00010">
                                                        Social sciences
                                                    </a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?t0=ORO:AHU03380">
                                                        Society and culture
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="browse-group"><h6 class="browseAll"><a href="/browse">Browse All</a></h6>
                                        </li>
                                    </ul>
                                </li>
                                <li class="browseNav expandable ">
                                    <a data-body="content-typeNavigation" aria-expanded="false"
                                       aria-controls="content-typeNavigation" role="button" class="showTaxonomyNav" href="#">
                                        <span class="label">Reference Type</span>
                                        <span class="browseArrow">  </span>
                                    </a>
                                    <ul id="content-typeNavigation" class="taxonomyNavigation expandContractBox">
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=overviewpages">Overview Pages</a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=subjectreference">Subject Reference</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=timelines">Timelines</a>
                                                </li>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=quotations">Quotations</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=englishdictionaries">English Dictionaries</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="column">
                                            <ul>
                                                <li class="taxonomyItem level0">
                                                    <a href="/browse?type_0=bilingualdictionaries">Bilingual Dictionaries</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="browse-group last">
                                            <h6 class="browseAll"><a href="/browse">Browse All</a></h6>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="personalNav">
                                <ul class="contentDropdown m-0 p-0" id="savedEntries">
                                    <li class="expandable">
                                        <a aria-expanded="false" href="#" onclick="return false;"
                                           class="c-Button c-Button--primary" data-popover-anchor="myEntries"> My Content <span
                                                class="count">(0)</span>
                                        </a>
                                        <div class="dropdown c-Popover" data-popover-wrapped="false"
                                             data-popover-display-style="flex"
                                             data-popover-placements="left-start,left-start,left-start,left-start,bottom"
                                             data-popover-breakpoints="xs,sm,md,lg,xl" data-popover="myEntries">
                                            <div class="dropdownOuterWrapper c-Popover__content">
                                                <div class="dropdownInnerWrapper">
                                                    <div class="recentViewedSection section">
                                                        <h3 class="last text-caption text-align-left border-bottom text-nowrap mt-0 mb-2 mx-0 py-2 px-3">
                                                            Recently viewed
                                                            <span class="count recentlyViewedEntriesCount pl-2"> (0)</span>
                                                        </h3>
                                                        <ul data-siteIdentifier="ORO" class="m-2 recentlyViewedEntries">
                                                            <li class="flex flex-align-center flex-justify-btw recentlyViewedEntryTemplate">
                                                        <span class="criteria">
                                                    <a data-component="saveButton" class="c-Button c-Button--primary"
                                                       data-uri="/page/134" href="/page/134"></a>
                                                        </span>
                                                                <a role="button" tabindex="0" data-component="IconButton"
                                                                   title="Save Entry"
                                                                   class="save ico-save c-IconButton c-IconButton--primary c-Icon c-Icon--before c-Icon--bookmarkBorder">
                                                                    <span>Save Entry</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bot"></div>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="mySearches contentDropdown m-0 p-0" id="mySearches">
                                    <li class="expandable">
                                        <a aria-expanded="false" href="#" onclick="return false;"
                                           class="c-Button c-Button--primary" data-popover-anchor="mySearches">
                                            My Searches <span class="count">(0)</span>
                                        </a>
                                        <div class="dropdown c-Popover c-Popover--bottom" data-popover-wrapped="false"
                                             data-popover-display-style="flex"
                                             data-popover-placements="left-start,left-start,left-start,left-start,bottom"
                                             data-popover-breakpoints="xs,sm,md,lg,xl" data-popover="mySearches">
                                            <div class="dropdownOuterWrapper c-Popover__content">
                                                <div class="dropdownInnerWrapper">
                                                    <div class="recentViewedSection section">
                                                        <h3 class="first text-caption text-align-left border-bottom text-nowrap mt-0 mb-2 mx-0 py-2 px-3">
                                                            Recently viewed
                                                            <span class="count recentlyViewedSearchesCount pl-2">(0)</span>
                                                        </h3>
                                                        <ul data-resultRegionLabel=" Results" data-siteIdentifier="ORO"
                                                            data-isSearching="false" class="m-2 recentlyViewedSearches">
                                                            <li class="flex flex-align-center flex-justify-btw recentlyViewedSearchTemplate">
                                                    <span class="criteria">
                                                        <a data-searchParameterMap="{}" data-component="saveButton"
                                                           data-siteIdentifier="ORO" class="c-Button c-Button--primary" title=""
                                                           href="/browse?btog=book">
                                                        </a>
                                                    </span>
                                                                <a role="button" tabindex="0" data-component="IconButton"
                                                                   title="Save Search"
                                                                   class="save ico-save c-IconButton c-IconButton--primary c-Icon c-Icon--before c-Icon--bookmarkBorder">
                                                                    <span>Save Search</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bot"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: none;" id="navDrop">
                    <div class="t-invisible"></div>
                    <a title="Close" href="#" class="closeNav">Close</a>
                </div>
            </div>
            <div id="columnWrapper">
                <div id="columnsTop">
                    <div class="cap"></div>
                </div>
                <div class="clearfix" >
                    <div class="expandContractBox closed stickyMenu c-Drawer c-Drawer--permenant" data-js="appContextDrawer"
                         /*id="columnOne"*/ >                <!-- TOC Elements -->
                        <div class="toc" id="toc">
                            <ul class="null c-List__items" id="child">
                                <li class=" c-List__item c-List__item--dense"><a
                                        href="/page/chem/dictionary-of-chemistry-8e-companion-weblinks"
                                        class="c-Button c-Button--primary">
                                        <span>Dictionary of Chemistry 8e companion weblinks</span>
                                    </a></li>
                                <li class=" c-List__item c-List__item--dense"><a
                                        href="/page/maths/dictionary-of-mathematics-6e-companion-website"
                                        class="c-Button c-Button--primary">
                                        <span>Dictionary of Mathematics 6e Companion Website</span>
                                    </a></li>
                            </ul>
                        </div>                <!-- leftSidebar content -->            </div>
                        
                    <div>
                        <div class="container-section">
                            <h1 class="text-display2 m-0 px-4" id="pagetitle">Science and Technology</h1>
                            <div class="px-4" id="pageContent"><p><img src="/fileasset/science_small.jpg"
                                                                       style="float:left; margin-right:10px"
                                                                       alt="Science and Technology" height="109"
                                                                       width="145"/><strong><a
                                            name="Page-top"></a>Science</strong> encompasses the systematic study of the
                                    structure and behaviour of the physical and natural world through observation and
                                    experiment, and <strong>technology</strong> is the application of scientific knowledge for
                                    practical purposes. <em>Oxford Reference</em> provides more than 210,000 concise definitions
                                    and in-depth, specialist encyclopedic entries on the wide range of subjects within these
                                    broad disciplines.</p>
                                <p>Our coverage comprises authoritative, highly accessible information on the very latest
                                    terminology, concepts, theories, techniques, people, and organizations relating to all areas
                                    of science and technology—from astronomy, engineering, physics, computer science, and
                                    mathematics, to life and earth sciences, chemistry, environmental science, biology, and
                                    psychology. Written by trusted experts for researchers at every level, entries are
                                    complemented by illustrative line drawings, equations, and charts wherever useful.</p>
</div>
</div>
<br>
<br>
<div class="container-section" >
                                <p><strong>Jump to:</strong></p>
                                <blockquote>
                                    <p><a href="#Sample-resources"><strong>Sample resources</strong></a> | <a
                                            href="#Featured-author"><strong>Featured author</strong></a> | <a
                                            href="#Blog-posts"><strong>Featured blogs</strong></a> | <a
                                            href="#More-from-OUP"><strong>More from OUP</strong></a> | <a
                                            href="/page/How$0020to$0020Subscribe/how-to-subscribe" target="_blank"><strong>How
                                                to subscribe<br/>
                                                <br/>
                                            </strong></a></p>
                                </blockquote>
                                <p><a href="/view/10.1093/acref/9780198714743.001.0001/acref-9780198714743"><img
                                            src="/view/covers/9780191783036.jpg" alt="A Dictionary of Physics" height="150"
                                            width="99"/></a> <a
                                        href="/view/10.1093/acref/9780199765324.001.0001/acref-9780199765324"><img
                                            src="/view/covers/9780195313864.jpg" alt="Encyclopedia of Climate and Weather "
                                            height="150" width="116"/></a> <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681"><img
                                            src="/view/covers/9780191744358.jpg" alt="A Dictionary of Psychology" height="150"
                                            width="99"/></a> <a
                                        href="/view/10.1093/acref/9780190622664.001.0001/acref-9780190622664"><img
                                            src="/view/covers/9780190622664.jpg" alt="Berkshire Encyclopedia of Sustainability"
                                            height="150" width="116"/></a></p>
                                <p>
                                    <a href="/browse?avail_01=free&amp;avail_02=unlocked&amp;btog=book&amp;pageSize=100&amp;sort=currentonlineversiondescending&amp;t0=ORO%3ASCI00010"><strong><br/>
                                            See all the Science and Technology books available on <em>Oxford Reference</em> &gt;<br/>
                                            <br/>
                                        </strong></a></p>
</div>
<br>
<br>
<div class="container-section" >
                                <h4><a name="Sample-resources"></a><strong><span
                                            style="font-size: larger;">Sample resources</span></strong></h4>
                                <p>Discover science and technology on <em>Oxford Reference</em> with the below sample content:
                                </p>
                                <blockquote>
                                    <p><a href="/view/10.1093/acref/9780191737329.timeline.0001" target="_blank">A timeline of
                                            life science</a>: from single-celled water creatures to sequencing the human genome
                                    </p>
                                    <p>Quotations about <a href="/view/10.1093/acref/9780191826719.001.0001/q-oro-ed4-00009205"
                                                           target="_blank">science</a> and <a
                                            href="/view/10.1093/acref/9780191826719.001.0001/q-oro-ed4-00010666"
                                            target="_blank">technology</a> from <em>Oxford Essential Quotations</em></p>
                                    <p>'<a href="/view/10.1093/acref/9780199600571.001.0001/acref-9780199600571-appendix-0003"
                                           target="_blank">The Universal Genetic Code</a>' from <em>A Dictionary of Plant
                                            Sciences</em></p>
                                    <p><a href="/view/10.1093/acref/9780195148909.001.0001/acref-9780195148909-e-678"
                                          target="_blank">A biography of Lise Meitner</a> from <em>The Oxford Encyclopedia of
                                            Women in World History </em></p>
                                    <p><a href="/view/10.1093/acref/9780199679591.001.0001/acref-9780199679591-appendix-14"
                                          target="_blank">A list of mathematical symbols</a> from <em>The Concise Oxford
                                            Dictionary of Mathematics</em></p>
                                    <p>
                                        '<a href="/view/10.1093/acref/9780199609055.001.0001/acref-9780199609055-appendix-0001-div1-4170"
                                            target="_blank">The planets: orbital and physical data</a>' from <em>A Dictionary of
                                            Astronomy</em></p>
                                </blockquote>
</div>
<br>
<br>
<div class="container-section" >
                                <p><a href="#Page-top">Back to top &gt;</a></p>
                                <div class="author-bio">
                                    <h4><a name="Featured-author"></a>Featured author</h4>
                                    <h2>Andrew M. Colman</h2>
                                    <img src="/fileasset/oro/images/Author-Q&amp;A-images/Andrew-M-Coleman-180px.jpg"
                                         style="float:right; margin:10px" alt="Andrew M. Colman" height="180" width="180"/>
                                    <p>Andrew M. Colman is the author of <a
                                            href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681"><em>A
                                                Dictionary of Psychology</em></a> (4th edn). He is Professor of Psychology at
                                        the University of Leicester and a Fellow of the British Psychological Society. He
                                        graduated with a BA (Hons) and an MA in Psychology from the University of Cape Town and
                                        a PhD from Rhodes University. He is an author of numerous journal articles and several
                                        books, including <em>Facts, Fallacies and Frauds in Psychology</em>, <em>What is
                                            Psychology?</em> (3rd edn), <em>Game Theory and its Application in the Social and
                                            Biological Sciences</em> (2nd edn), and (with Briony D. Pulford), <em>A Crash Course
                                            in SPSS for Windows</em> (4th edn). He edited the two-volume <em>Companion
                                            Encyclopedia of Psychology</em> and the 12-volume <em>Longman Essential
                                            Psychology</em> series.</p>
                                </div>
</div>
<br>
<br>
<div class="container-section" >
                                <h4><strong><span style="font-size: larger;">Author Q&amp;A</span></strong></h4>
                                <h3>What is the one term or concept that everyone—from students to everyday web users—should be
                                    familiar with? Why?</h3>
                                <p>I wish that everyone understood the scientific method, and in particular the unique
                                    importance of the controlled experiment as a method of scientific discovery. Children should
                                    be taught at school what an <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-2946">experiment</a>
                                    is and why it is such a powerful way of discovering the truth. Psychology uses various
                                    research methods, but the most powerful is undoubtedly controlled experimentation, not
                                    because it is more objective or precise than other methods, but because it is uniquely
                                    capable of providing evidence of causal effects.</p>
                                <p>The defining features of an experiment are manipulation of a conjectured causal factor,
                                    called an <a href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-4110">independent
                                        variable</a> because it is manipulated independently of other variables, and examination
                                    of the effect of this on a <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-2193">dependent
                                        variable</a>, while simultaneously controlling all other <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-2992">extraneous
                                        variables</a> that might otherwise influence the dependent variable. In psychological
                                    experiments, extraneous variables can seldom be controlled directly, partly because people
                                    differ from one another in ways that affect their behaviour. You may think it’s impossible
                                    to control for all individual differences and other extraneous variables, but in fact there
                                    is a remarkable solution to this problem.</p>
                                <p>In 1926, the British statistician Ronald Fisher discovered a powerful method of control
                                    called <a href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-6953">randomization</a>.
                                    By assigning subjects or participants to an <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-2949">experimental
                                        group</a> and a <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-1866">control
                                        group</a> strictly at random, and then treating the two groups identically apart from
                                    the manipulated independent variable (applied to the experimental group only), an
                                    experimenter can control, at a single stroke, for all individual differences and other
                                    extraneous variables, including ones that no one has even considered. Randomization does not
                                    guarantee that the two groups will be identical but rather that any differences between the
                                    groups will follow precisely the known laws of probability.</p>
                                <p>This explains the purpose and function of statistical <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-7630">significance
                                        tests</a> in psychology. For any observed difference, a significance test enables a
                                    researcher to calculate the probability that a difference at least as large as the observed
                                    difference could occur by chance alone. The researcher then knows what the probability is of
                                    such a large difference under the null hypothesis – the working hypothesis that the
                                    independent variable has no effect. If the probability under the null hypothesis is
                                    sufficiently small (by convention, usually less than 5 per cent, often written p &lt; .05),
                                    then it is reasonable to conclude that the observed difference is probably not due to
                                    chance, and if it is not due to chance, then it must be due to the independent variable,
                                    because all other variables that could explain it have been controlled by randomization.</p>
                                <p>If this immensely powerful idea were more widely understood, then people would be less
                                    vulnerable to <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-4050">illusory
                                        correlation</a>, more sceptical about merely anecdotal evidence, and capable of
                                    interpreting findings from any survey research, case study, correlational study,
                                    observational study, or quasi-experiment with appropriate caution.</p>
                                <h3>What do you think is the most commonly held misconception in your subject area?</h3>
                                <p>Although I can’t prove that it’s the most common, the most fashionable misconception is the
                                    assumption that phenomena of behaviour and mental experience – the subject-matter of
                                    psychology – can be understood and explained exclusively in terms of neural mechanisms. It
                                    is sustained by the increasingly popular doctrine that neuroscience can in principle replace
                                    traditional psychology, that it is already replacing traditional psychology, or (in its
                                    strongest form) that it has already replaced traditional psychology. This is a debilitating
                                    form of <a href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-7057">reductionism</a>,
                                    based on the assumption that behaviour and mental experiences are closely correlated with
                                    neural processes, especially in the brain; but locating a mechanism in the brain does not
                                    amount to explaining the associated psychological phenomenon, as I can easily show with a <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-3409"><em>Gedankenexperiment</em></a>
                                    (thought experiment) and an example from nature.</p>
                                <p>First, imagine a super-intelligent alien trying to understand a working computer busy
                                    printing out my <em>Dictionary of Psychology</em> on a laser printer. By merely
                                    investigating the physical mechanism of the computer and the printer, it would never
                                    understand what the computer was actually doing; or at least its explanation would lack what
                                    is most important and interesting about the computer’s behaviour.</p>
                                <p>Second, purposeful behaviour can occur naturally without any involvement of neural
                                    mechanisms. For example, the unicellular <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-6016">paramecium</a>,
                                    found abundantly in stagnant ponds, moves about, avoids obstacles by swimming round them,
                                    gathers food, and retreats from danger. It can turn round in a glass tube to escape, and it
                                    can even learn from experience, although some neuroscientists unsurprisingly question
                                    whether this is true learning. Yet a paramecium has no nervous system, and its single cell
                                    is not even a <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-5482">neuron</a>;
                                    therefore, it provides conclusive evidence that neuroscience cannot explain all forms of
                                    behaviour.</p>
                                <h3>In your opinion, which is the most fascinating entry in your dictionary and why?</h3>
                                <p>Being asked to choose the most fascinating entry is like being asked to choose one’s
                                    favourite child, and I won’t do it. I find thousands of the entries fascinating, but the
                                    entry defining <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-3768">heuristic</a>,
                                    together with the various specific heuristics cross-referenced from it, describes ideas that
                                    have fascinated others sufficiently to be rewarded with the only two Nobel prizes ever
                                    awarded for purely psychological research. A heuristic is a rough-and-ready procedure or
                                    rule of thumb for making a decision, forming a judgement, or solving a problem, and we all
                                    use heuristics all the time. The US researcher Herbert Simon introduced the term in its
                                    modern psychological sense in 1957 to explain how human decision makers with <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-1134">bounded
                                        rationality</a> solve problems when they do not have the time or resources to examine
                                    all available possibilities thoroughly, and he received the first Nobel Prize for this work.
                                    Two decades later, the Israeli-American psychologists Amos Tversky and Daniel Kahneman
                                    discovered and investigated experimentally a large number of biases in human thinking that
                                    can be traced to particular heuristics, and in 2002 Kahneman was rewarded for this work with
                                    the second Nobel Prize, Tversky having died a few years earlier.</p>
                                <p>A typical example is the <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-1788">conjunction
                                        fallacy</a>: undergraduate students were shown personality sketches of a hypothetical
                                    person called Linda (young, single, deeply concerned about social issues, and involved in
                                    anti-nuclear activity) and asked whether it was more probable that Linda was a bank teller
                                    or that Linda was a bank teller who was active in the feminist movement. No fewer than 86%
                                    of the students judged it more probable that that Linda was a bank teller who was active in
                                    the feminist movement, although the probability of a conjunction A and B can never be
                                    greater than the probability of A. The fallacy arises from the use of the <a
                                        href="/view/10.1093/acref/9780199657681.001.0001/acref-9780199657681-e-7131">representativeness
                                        heuristic</a>, according to which people estimate the probability that something belongs
                                    to a particular class by judging how typical it is of that class. Because Linda seems more
                                    typical of feminist bank tellers than of bank tellers in general, many people fall into the
                                    conjunction fallacy in this example.</p>
                                <p><a href="#Page-top">Back to top &gt;</a><br/>
                                </p>
                                </div>
<br>
<br>
<div class="container-section" >
                                <h4><a name="Blog-posts"></a><strong><span
                                            style="font-size: larger;">Featured blogs</span></strong></h4>
                                <p><br/>
                                    <a referrer="origin-when-cross-origin"
                                       href="https://blog.oup.com/2016/07/mammal-personality-quiz/" target="_blank"><strong>Which
                                            mammal are you?</strong></a><br/>
                                    July 7th 2016<br/>
                                    Find out which mammal resembles your personality by taking our quiz.</p>
                                <p><a referrer="origin-when-cross-origin"
                                      href="https://blog.oup.com/2016/04/dinosaurs-timeline-infographic/"
                                      target="_blank"><strong>A timeline of the dinosaurs</strong></a><br/>
                                    April 28th 2016<br/>
                                    Take a crash course on the history of the dinosaurs with our infographic.</p>
                                <p><a referrer="origin-when-cross-origin"
                                      href="https://blog.oup.com/2016/02/international-space-station-history/"
                                      target="_blank"><strong>A history of the International Space Station</strong></a><br/>
                                    February 16th 2016<br/>
                                    We've collected together a brief history of this incredible feat in human engineering,
                                    politics, and bravery.</p>
                                <p><a referrer="origin-when-cross-origin" href="https://blog.oup.com/category/science_medicine/"
                                      target="_blank"><strong>For more science and technology blog posts delve in to the OUPblog
                                            archives &gt;</strong></a></p>
                                <p><a href="#Page-top">Back to top &gt;</a><br/>
                                </p>
</div>
<br>
<div class="container-section" >
                                <h4><a name="More-from-OUP"></a><strong><span
                                            style="font-size: larger;">More From OUP</span></strong></h4>
                                <p>Stay up-to-date with Oxford University Press by opting in to receive information in several
                                    different ways:</p>
                                <blockquote>
                                    <p>To receive information about our latest publishing, including science and technology news
                                        and special offers <a referrer="origin-when-cross-origin"
                                                              href="https://global.oup.com/academic/emailpreferences/signin/"
                                                              target="_blank">join our mailing list</a></p>
                                    <p>Connect via our <a referrer="origin-when-cross-origin"
                                                          href="https://global.oup.com/academic/connect" target="_blank">Social
                                            Media channels</a></p>
                                    <p>For the latest news related to <em>Oxford Reference</em>, including updates and blog
                                        posts, <a href="/applib/newsrss" target="_blank">subscribe to the RSS feed</a></p>
                                    <p>Get facts delivered straight to your desktop with the <a href="/rss/factofthedayrss"
                                                                                                target="_blank">‘Did you know?’
                                            RSS feed</a></p>
                                </blockquote>
                                <p><a href="#Page-top">Back to top &gt;</a></p>
                                <div></div>
                                
                                <p>
                                   
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!-- end pageBody -->
</div>
                <div id="columnsBottom">
                    <div class="cap"></div>
                </div>
            </div>
            <div id="footerWrap">
                <div id="footer">
                    <ul class="logos footerLogos">
                        <li class="logo logo1">
                            <a referrer="origin-when-cross-origin" target="_blank" href="http://www.oup.com/"
                               id="footerPublisher">
                                <span>Oxford University Press</span>
                            </a>
                        </li>
                    </ul>
                    <div id="footerDetail">
                        <div id="footerCopyright">
                            
                            Copyright ©
                            2024.
                            All rights reserved.
                        </div>
                        <div id="printFooterCopyright">
                            <div class="pattern-library-style-root">
                                <p>PRINTED FROM OXFORD REFERENCE (www.oxfordreference.com). (c) Copyright Oxford University
                                    Press, 2023. All Rights Reserved. Under the terms of the licence agreement, an individual
                                    user may print out a PDF of a single entry from a reference work in OR for personal use (for
                                    details see <a referrer="origin-when-cross-origin" target="_blank"
                                                   href="https://global.oup.com/privacy">Privacy Policy</a> and <a
                                        target="_blank" href="/page/legal-notice">Legal Notice</a>).</p></div>
                            <p>date: 05 November 2024</p>
                        </div>
                        <ul class="null c-List__items" id="footerNav">
                            <li class=" c-List__item first"><a referrer="origin-when-cross-origin"
                                                               href="https://global.oup.com/cookiepolicy "
                                                               class="c-Button c-Button--primary">
                                    <span>Cookie Policy</span>
                                </a></li>
                            <li class=" c-List__item"><a referrer="origin-when-cross-origin"
                                                         href="https://global.oup.com/privacy "
                                                         class="c-Button c-Button--primary">
                                    <span>Privacy Policy</span>
                                </a></li>
                            <li class=" c-List__item"><a href="/page/legal-notice" class="c-Button c-Button--primary">
                                    <span>Legal Notice</span>
                                </a></li>
                            <li class=" c-List__item"><a href="/page/33/credits" class="c-Button c-Button--primary">
                                    <span>Credits</span>
                                </a></li>
                            <li class=" c-List__item last"><a href="/page/accessibility" class="c-Button c-Button--primary">
                                    <span>Accessibility</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="footerAccounts">
                    </div>
                </div>
            </div>
        </div>
        <div style="display: none" id="debug">
            <ul>
                <li id="xForwarded">[78.96.86.176]</li>
                <li id="modifiedRemoteAddr">78.96.86.176</li>
            </ul>
        </div>
        <!--BEGIN: Scholarly iQ Tag - Parameters-->
       
    @endsection


@push('inline-scripts')
   <script type="text/javascript">
        document.domLoaded = false;

        function setDomLoaded() {
            document.domLoaded = true;
        }

        document.observe('dom:loaded', function () {
            setDomLoaded.defer();
        });
    </script>
                                
                                <!--
    <script type="text/javascript" async=""
            src="https://www.googletagmanager.com/gtag/js?id=G-2WM5MNWL9F&amp;l=dataLayer&amp;cx=c"
            style="color: rgb(0, 0, 0);"></script>
    
    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-NDJMKLV"></script>
    <script async="" src="https://buttons-config.sharethis.com/js/64ac08de0f9156001a2918be.js"></script>
    <script src="https://prod-apm-public-files.s3.amazonaws.com/5.9.1/elastic-apm-rum.umd.js"></script>
    -->
    <script>window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            "pf:selectedLanguage": "English",
            "pf:sitegenUUid": "0",
            "pf:authorized": "not-authorized",
            "pf:authenticationStatus": "not-logged-in"
        });</script>
    <script type="text/javascript">function runOnDomLoaded(f) {

            if (!!document.domLoaded) {
                setTimeout(f, 0);
            } else {

                window.addEventListener('DOMContentLoaded', f);
            }
        }</script>
    
        <script>
        ;(function (d, s, c) {
            var j = d.createElement(s),
                t = d.getElementsByTagName(s)[0]

            j.src = 'https://prod-apm-public-files.s3.amazonaws.com/5.9.1/elastic-apm-rum.umd.js'
            j.onload = function () {
                function initApm() {
                    if (!!window.elasticApm) {
                        window.elasticApm.init(c);
                        console.debug('Initialized Elastic APM JS from https://apm.oupprodelk.pubfactory.com');
                    } else {
                        // console.debug('Waiting for Elastic APM');
                        setTimeout(initApm, 500);
                    }
                }

                initApm();
            }
            t.parentNode.insertBefore(j, t)
        })(document, 'script', {serviceName: 'oro-web-live', serverUrl: 'https://apm.oupprodelk.pubfactory.com'})
    </script>
            
                      
<script class="doNotMove" src="https://www.oxfordreference.com/assets/vendor/zdf8cf3f4/modernizr.min.js"></script>


    <script class="doNotMove" src="https://www.oxfordreference.com/assets/vendor/za34738ba/respond.min.js"></script>

    <script type="text/javascript">console.debug('Loading 4 libraries synchronously in head');</script>
    <script
        type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/vendor/zaa95d746/micromodal.js/micromodal.min.js synchronously in head');</script>
    <script class="doNotMove"
            src="https://www.oxfordreference.com/assets/vendor/zaa95d746/micromodal.js/micromodal.min.js"
            type="text/javascript"></script>
    <script
        type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/z96255596/js/dist/shareLink.js synchronously in head');</script>
    <script class="doNotMove" src="https://www.oxfordreference.com/assets/shared/z96255596/js/dist/shareLink.js"
            type="text/javascript"></script>
    <script
        type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/z16dd3571/js/lightbox/lightbox.js synchronously in head');</script>
    <script class="doNotMove" src="https://www.oxfordreference.com/assets/shared/z16dd3571/js/lightbox/lightbox.js"
            type="text/javascript"></script>
    <script
        type="text/javascript">console.debug('Loading library //platform-api.sharethis.com/js/sharethis.js#property=64ac08de0f9156001a2918be&amp;product=custom-share-buttons synchronously in head');</script>
    
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/console"
            src="/modules.gz/t5/core/console.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/dom"
            src="/modules.gz/t5/core/dom.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/events"
            src="/modules.gz/t5/core/events.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="t5/core/bootstrap" src="/modules.gz/t5/core/bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/utils"
            src="/modules.gz/t5/core/utils.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="https://www.oxfordreference.com/assets/oxford/z9e95cb1c/components/module/OdoPopupWidgetModule.js"
            src="https://www.oxfordreference.com/assets/oxford/z9e95cb1c/components/module/OdoPopupWidgetModule.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="https://www.oxfordreference.com/assets/js/z7e6b6ccb/cookie.js"
            src="https://www.oxfordreference.com/assets/js/z7e6b6ccb/cookie.js"></script> 
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="https://maps.googleapis.com/maps/api/js?sensor=false"
            src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="https://www.oxfordreference.com/assets/arachne/z4dd3765e/arachne.js"
            src="https://www.oxfordreference.com/assets/arachne/z4dd3765e/arachne.js"></script>
    
     <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="oxford-common/cookies" src="/modules.gz/oxford-common/cookies.js"></script>
    
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="hideElementsUntilJsHasLoaded"
            src="/modules.gz/hideElementsUntilJsHasLoaded.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="modernizr"
            src="/modules.gz/modernizr.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/zone"
            src="/modules.gz/t5/core/zone.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/init"
            src="/modules.gz/t5/core/init.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="oxford-common/jquery-cookies"
            src="/modules.gz/oxford-common/jquery-cookies.js"></script>
   
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery-ui"
            src="/modules.gz/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="t5/core/typeahead" src="/modules.gz/t5/core/typeahead.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="skin/oro"
            src="/modules.gz/skin/oro.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/common.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/util.js"></script>
    <script type="text/javascript" charset="UTF-8"
            src="https://maps.googleapis.com/maps-api-v3/api/js/58/11a/geocoder.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="t5/core/ajaxformloop" src="/modules.gz/t5/core/ajaxformloop.js"></script>
   
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="t5/core/forms"
            src="/modules.gz/t5/core/forms.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="t5/core/exception-frame" src="/modules.gz/t5/core/exception-frame.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="baseapp/combined" src="/modules.gz/baseapp/combined.js"></script>
   <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_"
            data-requiremodule="oxford-common/oupapp" src="/modules.gz/oxford-common/oupapp.js"></script>
<!-- 
            <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&amp;l=' + l : '';
                j.async = true;
                j.src =
                    '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-NDJMKLV');</script>
     -->
        <!-- End Google Tag Manager -->

        <script src="//use.typekit.net/ihp1stb.js" type="text/javascript"></script>
                                <script type="text/javascript">try {
                                        Typekit.load();
                                    } catch (e) {
                                    }</script>
                                     <script
            language="Javascript">var accountJsession = 'account_id=&jsessionid=A652C3FCB8435B9BDC282DEB2F9294B6&turnaway_id=USERPASS_NONE,IP_BADCRED,LIBCARD_NONE,SHIB_NONE,REFERRER_BADCRED&siteid=ORO&supplier_tag=Safari';
            var NTPT_PGEXTRA = typeof pfpagetags === 'undefined' ? accountJsession : accountJsession + pfpagetags;</script>
        <!--END: Scholarly iQ Tag - Parameters--><!--BEGIN: Scholarly iQ Tag - Page Tag-->
        <script async="async" src="//ouptag.scholarlyiq.com/ntpagetag.js" language="Javascript"></script>
        <noscript id="page_tag"><img async="async" alt="" vspace="0" hspace="0" border="0" width="1" height="1"
                                     src="//ouptag.scholarlyiq.com/ntpagetag.gif?js=0"/></noscript>
        <!--END: Scholarly iQ Tag - Page Tag--><!--<t:outputraw value="prop:newRelicEnd" />-->
        <script type="text/javascript">var require = {
                "shim": {
                    "baseapp/components/FullContentLink": ["jquery"],
                    "baseapp/components/PdfJsInlineView": ["jquery"],
                    "oxford-common/jquery-cookies": ["jquery"],
                    "baseapp/components/AddToDownloadButton": ["jquery"],
                    "t5/core/typeahead": ["jquery"],
                    "oxford-common/oupapp": ["jquery", "oxford-common/jquery-cookies", "baseapp/combined"],
                    "baseapp/components/TitleFilter": ["jquery"],
                    "baseapp/components/ContainerBlock": ["jquery"],
                    "baseapp/combined": ["jquery", "jquery-ui", "modernizr", "t5/core/typeahead"],
                    "baseapp/components/TreeFilterSelectComponent": ["jquery"],
                    "baseapp/components/AuthProviders": ["jquery"],
                    "baseapp/combined-skin": ["jquery", "jquery-ui", "t5/core/typeahead", "modernizr"],
                    "baseapp/components/OrderBillingAndShipping": ["jquery"],
                    "skin/sandbox": ["jquery", "modernizr"],
                    "jquery-ui": ["jquery"],
                    "baseapp/components/AdvancedSearch": ["jquery"],
                    "baseapp/components/RedeemTokenCredit": ["jquery"],
                    "oxford-common/TableOfContents": ["jquery"],
                    "baseapp/combined-skin-min": ["jquery", "jquery-ui", "t5/core/typeahead", "modernizr"],
                    "baseapp/components/CitedByWidget": ["jquery"],
                    "baseapp/components/MyCartAddDiscountCode": ["jquery"],
                    "skin/testoro": ["jquery", "modernizr"],
                    "baseapp/components/thiss-ds": ["jquery"],
                    "baseapp/components/GlossaryList": ["jquery"],
                    "baseapp/components/configurable/ContainerBlock": ["jquery", "jquery-ui"],
                    "skin/oro": ["jquery", "modernizr"]
                }, "baseUrl": "/modules.gz"
            };
        </script>
                                
        <script
            type="text/javascript">console.debug('Loading 5 libraries synchronously in body, before Tapestry imports');</script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/z7f586f90/js/dist/shareLinkEventListeners.js synchronously in body, before Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/shared/z7f586f90/js/dist/shareLinkEventListeners.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/zfb8a630e/js/dist/myContentAndMySearches.js synchronously in body, before Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/shared/zfb8a630e/js/dist/myContentAndMySearches.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/za9306a39/js/dist/jumpToMainContentFallback.js synchronously in body, before Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/shared/za9306a39/js/dist/jumpToMainContentFallback.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/skins/zb1a64513/pubfactory/skin/js/legacySkinMyContentAndMySearchesEventListeners.js synchronously in body, before Tapestry imports');</script>
        <script
            src="https://www.oxfordreference.com/assets/skins/zb1a64513/pubfactory/skin/js/legacySkinMyContentAndMySearchesEventListeners.js"
            type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/js/za00ac3d0/oupapp-sync.js synchronously in body, before Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/js/za00ac3d0/oupapp-sync.js" type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/js/z16bce79a/personalizationDropDown.js synchronously in body, before Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/js/z16bce79a/personalizationDropDown.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/vendor/z569b5820/require.js" type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/z8f1eb79c/tapestry5/underscore-1.8.3.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/z48b58321/tapestry5/scriptaculous_1_9_0/prototype.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/z4346aae9/tapestry5/scriptaculous_1_9_0/scriptaculous.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/zca7ee6c7/tapestry5/scriptaculous_1_9_0/effects.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/zd746764f/tapestry5/t53-compatibility.js"
                type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/z8c546d97/tapestry5/jquery.js" type="text/javascript"></script>
        <script src="https://www.oxfordreference.com/assets/meta/z7ce7dcdb/tapestry5/jquery-noconflict.js"
                type="text/javascript"></script>
        <script type="text/javascript">require(["t5/core/pageinit"], function (pi) {
                pi(["https://www.oxfordreference.com/assets/oxford/z9e95cb1c/components/module/OdoPopupWidgetModule.js", "https://www.oxfordreference.com/assets/js/z7e6b6ccb/cookie.js", "https://maps.googleapis.com/maps/api/js?sensor=false", "https://www.oxfordreference.com/assets/arachne/z4dd3765e/arachne.js"], ["oxford-common/jquery-cookies", "oxford-common/oupapp", "oxford-common/cookies", "hideElementsUntilJsHasLoaded", "baseapp/combined", "skin/oro", "modernizr", "t5/core/zone", ["t5/core/init", "OdoPopupWidgetModule", {
                    "ajaxUpdateURL": "https://www.oxfordreference.com/page.layout.odopopupwidget:ajaxupdate?t:ac=scienceandtech&t:ac=scienceandtech",
                    "jquerySelector": "#mainContent"
                }]]);
            });</script>
                
        <script
            type="text/javascript">console.debug('Loading 5 libraries synchronously in body, after Tapestry imports');</script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/zbe047af3/js/dist/collapser.js synchronously in body, after Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/shared/zbe047af3/js/dist/collapser.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/vendor/z5ec668da/jquery-ui/jquery-ui.min.js synchronously in body, after Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/vendor/z5ec668da/jquery-ui/jquery-ui.min.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/responsive/zaec9e2ea/js/configurable-layout.js synchronously in body, after Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/responsive/zaec9e2ea/js/configurable-layout.js"
                type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/vendor/z5a39f990/slick-slider.js synchronously in body, after Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/vendor/z5a39f990/slick-slider.js" type="text/javascript"></script>
        <script
            type="text/javascript">console.debug('Loading library https://www.oxfordreference.com/assets/shared/za588633f/js/dist/imageLazyLoader.js synchronously in body, after Tapestry imports');</script>
        <script src="https://www.oxfordreference.com/assets/shared/za588633f/js/dist/imageLazyLoader.js"
                type="text/javascript"></script>

    

@endpush