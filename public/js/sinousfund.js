
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-28581351-1', 'auto');
    ga('send', 'pageview');

    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Blackstone",
        "url": "https://www.blackstone.com",
        "logo": "https://www.blackstone.com/images/default-source/assets/logos/blackstone-logo.png",
        "sameAs": [
            "https://www.facebook.com/blackstone",
            "https://www.instagram.com/blackstone/",
            "https://www.linkedin.com/company/the-blackstone-group",
            "https://twitter.com/blackstone"
        ],
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.blackstone.com/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }

    <!-- Facebook Pixel Code -->

    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '626396844179010');
    fbq('track', 'PageView');

    //<![CDATA[
    var theForm = document.forms['aspnetForm'];
    if (!theForm) {
        theForm = document.aspnetForm;
    }

    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
    //]]>

    //<![CDATA[
    var __cultureInfo = {
        "name": "en",
        "numberFormat": {
            "CurrencyDecimalDigits": 2,
            "CurrencyDecimalSeparator": ".",
            "IsReadOnly": true,
            "CurrencyGroupSizes": [3],
            "NumberGroupSizes": [3],
            "PercentGroupSizes": [3],
            "CurrencyGroupSeparator": ",",
            "CurrencySymbol": "$",
            "NaNSymbol": "NaN",
            "CurrencyNegativePattern": 0,
            "NumberNegativePattern": 1,
            "PercentPositivePattern": 0,
            "PercentNegativePattern": 0,
            "NegativeInfinitySymbol": "-Infinity",
            "NegativeSign": "-",
            "NumberDecimalDigits": 2,
            "NumberDecimalSeparator": ".",
            "NumberGroupSeparator": ",",
            "CurrencyPositivePattern": 0,
            "PositiveInfinitySymbol": "Infinity",
            "PositiveSign": "+",
            "PercentDecimalDigits": 2,
            "PercentDecimalSeparator": ".",
            "PercentGroupSeparator": ",",
            "PercentSymbol": "%",
            "PerMilleSymbol": "‰",
            "NativeDigits": ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
            "DigitSubstitution": 1
        },
        "dateTimeFormat": {
            "AMDesignator": "AM",
            "Calendar": {
                "MinSupportedDateTime": "\/Date(-62135578800000)\/",
                "MaxSupportedDateTime": "\/Date(253402300799999)\/",
                "AlgorithmType": 1,
                "CalendarType": 1,
                "Eras": [1],
                "TwoDigitYearMax": 2029,
                "IsReadOnly": true
            },
            "DateSeparator": "/",
            "FirstDayOfWeek": 0,
            "CalendarWeekRule": 0,
            "FullDateTimePattern": "dddd, MMMM dd, yyyy h:mm:ss tt",
            "LongDatePattern": "dddd, MMMM dd, yyyy",
            "LongTimePattern": "h:mm:ss tt",
            "MonthDayPattern": "MMMM dd",
            "PMDesignator": "PM",
            "RFC1123Pattern": "ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027",
            "ShortDatePattern": "M/d/yyyy",
            "ShortTimePattern": "h:mm tt",
            "SortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss",
            "TimeSeparator": ":",
            "UniversalSortableDateTimePattern": "yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027",
            "YearMonthPattern": "MMMM, yyyy",
            "AbbreviatedDayNames": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "ShortestDayNames": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
            "DayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "AbbreviatedMonthNames": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", ""],
            "MonthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ""],
            "IsReadOnly": true,
            "NativeCalendarName": "Gregorian Calendar",
            "AbbreviatedMonthGenitiveNames": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec", ""],
            "MonthGenitiveNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ""]
        },
        "eras": [1, "A.D.", null, 0]
    }; //]]>

    //<![CDATA[
    if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
    //]]>

    //<![CDATA[
    Sys.WebForms.PageRequestManager._initialize('ctl00$ctl05', 'aspnetForm', [], [], [], 90, 'ctl00');
    //]]>

    //<![CDATA[
    Sys.Application.setServerId("ctl05", "ctl00$ctl05");
    Sys.Application._enableHistoryInScriptManager();
    //]]>

    $(document).ready(function() {
        var isSafari = !!navigator.userAgent.match(/Version\/[\d\.]+.*Safari/);
        if (isSafari) {
            $(".cover-image-full-nav").addClass("iosSafari");
        }
    });

    //<![CDATA[
    ;
    (function() {
        function loadHandler() {
            var hf = $get('ctl06_TSSM');
            if (!hf._RSSM_init) {
                hf._RSSM_init = true;
                hf.value = '';
            }
            hf.value += ';Telerik.Sitefinity.Resources, Version=10.0.6412.0, Culture=neutral, PublicKeyToken=b28c218413bdf563:en:193470df-16c0-47af-a81b-fac6c3a0408d:7a90d6a';
            Sys.Application.remove_load(loadHandler);
        };
        Sys.Application.add_load(loadHandler);
    })();
    Sys.Application.add_init(function() {
        $create(Telerik.Sitefinity.Web.UI.Fields.TextField, {
            "_allowNulls": false,
            "_conditionalTemplatesContainerId": "ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ConditionalTemplates",
            "_currentCondition": "displaymode-equal-read",
            "_maxChars": 0,
            "_readOnlyReplacement": null,
            "_textBoxId": "textBox_write",
            "_textLabelId": "textLabel_read",
            "_trimSpaces": false,
            "_unit": null,
            "conditionDictionary": {
                "displaymode-equal-read": "ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_conditionalTemplate",
                "displaymode-equal-write": "ClientTemplatePanel_"
            },
            "controlErrorCssClass": null,
            "dataFieldName": null,
            "dataFormatString": null,
            "defaultValue": "New York, August 30, 2018 – Blackstone (NYSE:BX) announced today that it will host an Investor Day for shareholders and analysts on Friday, September 21, 2018 in New York. ",
            "description": null,
            "descriptionElement": $get("ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_descriptionLabel_read"),
            "displayMode": 0,
            "example": null,
            "fieldName": null,
            "labelElement": $get("ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_textLabel_read"),
            "suffix": "_ctl01",
            "title": null,
            "titleElement": $get("ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01_ctl00_ctl00_titleLabel_read"),
            "validatorDefinition": "{\"AlphaNumericViolationMessage\":\"Non alphanumeric characters are not allowed.\",\"ComparingValidatorDefinitions\":[],\"CurrencyViolationMessage\":\"You have entered an invalid currency.\",\"EmailAddressViolationMessage\":\"You have entered an invalid email address.\",\"ExpectedFormat\":0,\"IntegerViolationMessage\":\"You have entered an invalid integer.\",\"InternetUrlViolationMessage\":\"You have entered an invalid URL.\",\"MaxLength\":0,\"MaxLengthViolationMessage\":\"Too long\",\"MaxValue\":null,\"MaxValueViolationMessage\":\"Too big\",\"MessageCssClass\":null,\"MessageTagName\":\"div\",\"MinLength\":0,\"MinLengthViolationMessage\":\"Too short.\",\"MinValue\":null,\"MinValueViolationMessage\":\"Too small.\",\"NonAlphaNumericViolationMessage\":\"Alphanumeric characters are not allowed.\",\"NumericViolationMessage\":\"You have entered an invalid number.\",\"PercentageViolationMessage\":\"You have entered an invalid percentage.\",\"RegularExpression\":null,\"RegularExpressionSeparator\":null,\"RegularExpressionViolationMessage\":\"Invalid format\",\"Required\":null,\"RequiredViolationMessage\":\"Required field.\",\"ResourceClassId\":\"\",\"USSocialSecurityNumberViolationMessage\":\"You have entered an invalid US social security number.\",\"USZipCodeViolationMessage\":\"You have entered an invalid US ZIP code.\",\"ValidateIfInvisible\":true}",
            "value": "New York, August 30, 2018 – Blackstone (NYSE:BX) announced today that it will host an Investor Day for shareholders and analysts on Friday, September 21, 2018 in New York. "
        }, null, null, $get("ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ctrl0_ctl01"));
    });
    Sys.Application.add_init(function() {
        $create(Telerik.Web.UI.RadListView, {
            "UniqueID": "ctl00$Contentplaceholder1$C017$newsFrontendList$ctl00$ctl00$NewsList",
            "_clientSettings": {
                "DataBinding": {
                    "ItemPlaceHolderID": "ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ItemsContainer",
                    "DataService": {}
                }
            },
            "_virtualItemCount": 1,
            "clientStateFieldID": "ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList_ClientState",
            "renderMode": 1
        }, null, null, $get("ctl00_Contentplaceholder1_C017_newsFrontendList_ctl00_ctl00_NewsList"));
    });
    Sys.Application.add_init(function() {
        $create(Telerik.Sitefinity.Web.UI.UserPreferences, {
            "_timeOffset": "-10800000",
            "_userBrowserSettingsForCalculatingDates": true,
            "timeZoneDisplayName": "(UTC-05:00) Eastern Time (US \u0026 Canada)",
            "timeZoneId": "Eastern Standard Time"
        }, null, null);
    });
    Sys.Application.add_init(function() {
        $create(Telerik.Web.UI.RadListView, {
            "UniqueID": "ctl00$Contentplaceholder1$C018$newsFrontendList$ctl00$ctl00$NewsList",
            "_clientSettings": {
                "DataBinding": {
                    "ItemPlaceHolderID": "ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList_ItemsContainer",
                    "DataService": {}
                }
            },
            "_virtualItemCount": 1,
            "clientStateFieldID": "ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList_ClientState",
            "renderMode": 1
        }, null, null, $get("ctl00_Contentplaceholder1_C018_newsFrontendList_ctl00_ctl00_NewsList"));
    });
    //]]>

    if (Modernizr.touch) {
        $("*").removeClass('wow');
    } else {

    }

    $(".linkedin-ico").attr("href", "https://www.linkedin.com/company/blackstonegroup/");
    console.log("~");

    (function() {
        var cx = '000832116712018647211:zaya0txx4dy';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();

    $(document).ready(function() {
        $('.pageDown').on('click', function(event) {
            var coverImage = $('.cover-image-full-nav');

            $('html, body').animate({
                scrollTop: coverImage.offset().top + coverImage.height()
            }, 1000);
        });
    });

    ! function(e, t, n, s, u, a) {
        e.twq || (s = e.twq = function() {
                s.exe ? s.exe.apply(s, arguments) : s.queue.push(arguments);
            }, s.version = '1.1', s.queue = [], u = t.createElement(n), u.async = !0, u.src = '//static.ads-twitter.com/uwt.js',
            a = t.getElementsByTagName(n)[0], a.parentNode.insertBefore(u, a))
    }(window, document, 'script');
    // Insert Twitter Pixel ID and Standard Event data below
    twq('init', 'nymqk');
    twq('track', 'PageView');

    _linkedin_data_partner_id = "182578";

    (function() {
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })();

    piAId = '214192';
    piCId = '1782';

    (function() {
        function async_load() {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
            var c = document.getElementsByTagName('script')[0];
            c.parentNode.insertBefore(s, c);
        }
        if (window.attachEvent) {
            window.attachEvent('onload', async_load);
        } else {
            window.addEventListener('load', async_load, false);
        }
    })();