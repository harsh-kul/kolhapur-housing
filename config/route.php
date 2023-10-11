<?php
include("config.php");
define("__URL_PAGES_", __BASE__URL__ . "pages/");
define("__URL_LIST_PAGES_", __URL_PAGES_ . "list_pages/");
define("__URL_REPORT_PAGES_", __URL_PAGES_ . "report/");
define("__URL_FILEUPLOAD_PAGES_", __URL_PAGES_ . "fileupload/");
define("__URL_INCLUDE_", __BASE__URL__ . "include/");
define("__URL_JS_", __BASE__URL__ . "js/");
define("__URL_CSS_", __BASE__URL__ . "css/");
define("__URL_CSS_INTERNAL_", __URL_CSS_ . "internal/");
define("__URL_CSS_EXTERNAL_", __URL_CSS_ . "external/");
define("__URL_COMMON_COMP_", __URL_PAGES_ . "compoent/");
define("__URL_IMAGE_", __BASE__URL__ . "upload/images/");
define("__URL_VIDEO_", __BASE__URL__ . "upload/videos/");


// // home url
define("__URL_INDEX_", __BASE__URL__ . "index.php");
define("__URL_INDEX_WOEKSECTION", __BASE__URL__ . "index.php?#work-section");
define("__URL_INDEX_CONTACT_US", __BASE__URL__ . "index.php?#contactus");
define("__URL_INDEX_ABOUT_US", __BASE__URL__ . "index.php?#aboutus");
define("__URL_INDEX_PROPERTY_SECTION_", __BASE__URL__ . "index.php?#propertySection");
define("__URL_INDEX_LOAN", __BASE__URL__ . "loan-index.php");
define("__URL_INDEX_BUY", __BASE__URL__ . "buy-index.php");
define("__URL_INDEX_RENT", __BASE__URL__ . "rent-index.php");
define("__URL_INDEX_PLOT", __BASE__URL__ . "plot-index.php");
// // .page url
define("__URL_adminrequestpage_", __URL_PAGES_ . "adminrequestpage.php");
define("__URL_dashboardpage_", __URL_PAGES_ . "dashboard.php");
define("__URL_emicalculatorpage_", __URL_PAGES_ . "emicalculator.php");
define("__URL_loaderpage_", __URL_PAGES_ . "loader.php");
define("__URL_loginpage_", __URL_PAGES_ . "login.php");
define("__URL_lonerequestpage_", __URL_PAGES_ . "lonerequestpage.php");
define("__URL_lonetypepagepage_", __URL_PAGES_ . "lonetypepage.php");
define("__URL_otpscreenpage_", __URL_PAGES_ . "otpscreen.php");
define("__URL_propertypagepage_", __URL_PAGES_ . "propertypage.php");
define("__URL_regipage_", __URL_PAGES_ . "regi.php");
// define("__URL_loginpage_", __URL_PAGES_ . "login_page.php");
define("__URL_singlemediashowpage_", __URL_PAGES_ . "singlemediashow.php");
define("__URL_singlemediashowvideopage_", __URL_PAGES_ . "singlemediashowvideo.php");
define("__URL_singleproductpage_", __URL_PAGES_ . "singleproductpage.php");
define("__URL_staffpage_", __URL_PAGES_ . "staffpage.php");
define("__URL_viewmediapage_", __URL_PAGES_ . "viewmedia.php");
define("__URL_viewmediavideopage_", __URL_PAGES_ . "viewmediavideo.php");
// // page/list_pages/
define("__URL_adminrequestlistpage_", __URL_LIST_PAGES_ . "admin_request_list.php");
define("__URL_loanlistpage_", __URL_LIST_PAGES_ . "loanrequest_list.php");
define("__URL_userloanlistpage_", __URL_LIST_PAGES_ . "userloanrequest_list.php");
define("__URL_propertylistpage_", __URL_LIST_PAGES_ . "property_list.php");
define("__URL_userpropertylistpage_", __URL_LIST_PAGES_ . "user_property_list.php");
define("__URL_stafflistpage_", __URL_LIST_PAGES_ . "staff_list.php");
// //page/report/
define("__URL_adminrequestreportpage_", __URL_REPORT_PAGES_ . "admin_request_report.php");
define("__URL_dateWiseUserreportpage_", __URL_REPORT_PAGES_ . "dateWiseUser.php");
define("__URL_loan_request_reportpage_", __URL_REPORT_PAGES_ . "loan_request_report.php");
define("__URL_loneReportPage_", __URL_REPORT_PAGES_ . "loneReportPage.php");
define("__URL_media_reportpage_", __URL_REPORT_PAGES_ . "media_report.php");
define("__URL_property_reportpage_", __URL_REPORT_PAGES_ . "property_report.php");
define("__URL_propertyReport_", __URL_REPORT_PAGES_ . "propertyReportPage.php");
define("__URL_registration_report_", __URL_REPORT_PAGES_ . "registration_report.php");
// //page/report/
define("__URL_fileuploaddelete_", __URL_FILEUPLOAD_PAGES_ . "delete.php");
define("__URL_fileuploaddeletevideo_", __URL_FILEUPLOAD_PAGES_ . "deletevideo.php");
define("__URL_fileuploaddownload_", __URL_FILEUPLOAD_PAGES_ . "download.php");
define("__URL_fileuploaddownloadvideo_", __URL_FILEUPLOAD_PAGES_ . "downloadvideo.php");
define("__URL_fileuploadload_", __URL_FILEUPLOAD_PAGES_ . "load.php");
define("__URL_fileuploadupload_", __URL_FILEUPLOAD_PAGES_ . "upload.php");
define("__URL_fileuploaduploadvideo_", __URL_FILEUPLOAD_PAGES_ . "uploadvideo.php");
define("__URL_fileuploadphotoupload_", __URL_FILEUPLOAD_PAGES_ . "photoupload.php");
define("__URL_fileuploadvidepupload_", __URL_FILEUPLOAD_PAGES_ . "videoupload.php");

// include
define("__URL_include_admin_request_", __URL_INCLUDE_ . "admin_request.php");
define("__URL_include_config_table_", __URL_INCLUDE_ . "config_table.php");
define("__URL_include_dashbord_", __URL_INCLUDE_ . "dashbord.php");
define("__URL_include_loan_request_", __URL_INCLUDE_ . "loan_request.php");
define("__URL_include_loan_type_", __URL_INCLUDE_ . "loan_type.php");
define("__URL_include_media_", __URL_INCLUDE_ . "media.php");
define("__URL_include_property_type_", __URL_INCLUDE_ . "property_type.php");
define("__URL_include_property_", __URL_INCLUDE_ . "property.php");
define("__URL_include_registration_", __URL_INCLUDE_ . "registration.php");
define("__URL_include_report_", __URL_INCLUDE_ . "report.php");
define("__URL_include_status_", __URL_INCLUDE_ . "status.php");
define("__URL_include_viewmedia_", __URL_INCLUDE_ . "viewmedia.php");
define("__URL_include_staff_", __URL_INCLUDE_ . "staff.php");
define("__URL_include_viewmediavideo_", __URL_INCLUDE_ . "viewmediavideo.php");
define("__URL_include_index_", __URL_INCLUDE_ . "index.php");
define("__URL_include_buy_pp_index_", __URL_INCLUDE_ . "buy_pp_index.php");

define("__URL_include_dateWiseUser_", __URL_REPORT_PAGES_ . "dateWiseUser.php");
define("__URL_include_loneReportPage_", __URL_REPORT_PAGES_ . "loneReportPage.php");
define("__URL_include_propertyReportPage_", __URL_REPORT_PAGES_ . "propertyReportPage.php");
define("__URL_include_rent_pp_index_ ", __URL_INCLUDE_ . "rent_pp_index.php");
define("__URL_include_plot_index_ ",__URL_INCLUDE_ . "plot_index.php");

// common  compoent 
define("__URL_COMMON_COMP_DRAWER", __URL_COMMON_COMP_ . "drawer.php");


/// js  
define("_JS_LOADER_HANDLER_",__URL_JS_."loaderhandler.js");
define("_JS_CONFIG_",__URL_JS_."config.js");
define("_JS_ROUTE_",__URL_JS_."route.js");
define("_JS_DRAWER_",__URL_JS_."drawer.js");
define("_JS_PROGRESS_BAR_",__URL_JS_."progressBar.js");
define("_JS_VALIDATION_HADNLER_",__URL_JS_."validationhandler.js");
define("_JS_ALERT_HADNLER_",__URL_JS_."alerthandler.js");
define("_JS_STRING_HADNLER_",__URL_JS_."stringhandler.js");
define("_JS_UTILS_",__URL_JS_."utils.js");
define("_JS_INDEX_",__URL_JS_."index.js");
define("_JS_MAIN_",__URL_JS_."main.js");
define("_JS_DATATABLE_", __URL_JS_."datatablehandler.js");


/// CSS
define("__URL_CSS_INTERNAL_INDEX_",__URL_CSS_INTERNAL_."index/index.css");
define("__URL_CSS_INTERNAL_SEARCH_",__URL_CSS_INTERNAL_."index/search.css");
define("__URL_CSS_INTERNAL_DRAWER_",__URL_CSS_INTERNAL_."index/drawer.css");
define("__URL_CSS_INTERNAL_ABOUT_US",__URL_CSS_INTERNAL_."aboutus.css");
define("__URL_CSS_INTERNAL_WHATSUP_",__URL_CSS_INTERNAL_."whatsapp.css");
define("__URL_CSS_INTERNAL_FOOTER",__URL_CSS_INTERNAL_."footer.css");
define("__URL_CSS_INTERNAL_FINDING_HEADER",__URL_CSS_INTERNAL_."findingheader.css");
define("__URL_CSS_INTERNAL_PROGRESS_BAR_",__URL_CSS_INTERNAL_."progressbar.css");

//new template css
define("__URL_CSS_OPEN_ICONIC_BOOTSTRAP_MIN_CSS_",__URL_CSS_."open-iconic-bootstrap.min.css");
define("__URL_CSS_ANIMATE",__URL_CSS_."animate.css");
define("__URL_CSS_OWL_CAROUSEL_",__URL_CSS_."owl.carousel.min.css");
define("__URL_CSS_OWL_THEAM_DEFAULT_",__URL_CSS_."owl.theme.default.min.css");
define("__URL_CSS_MAGNIFIC_POPUP_",__URL_CSS_."magnific-popup.css");
define("__URL_CSS_AOS_",__URL_CSS_."aos.css");
define("__URL_CSS_IONICSONES_MIN",__URL_CSS_."ionicons.min.css");
define("__URL_CSS_BOOTSTRAP_DATEPICKER",__URL_CSS_."bootstrap-datepicker.css");
define("__URL_CSS_JQUERY_TIMEPICER",__URL_CSS_."jquery.timepicker.css");
define("__URL_CSS_FLATICON",__URL_CSS_."flaticon.css");
define("__URL_CSS_ICOMOON",__URL_CSS_."icomoon.css");
define("__URL_CSS_STYLE",__URL_CSS_."style.css");
define("__URL_CSS_GALLARY",__URL_CSS_INTERNAL_."image_gallary.css");
define("__URL_include_gallary_",__URL_PAGES_."gallary.php");



?>