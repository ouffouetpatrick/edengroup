<style>
.newsletter-section {
    position: relative;
    padding: 70px 0px 70px !important;
    background-size: cover;
    background-repeat: no-repeat;
}
.row{
    margin-bottom: 0px;
}
.tg-radarsupport, .tg-form-listing, .tg-widget, .tg-userdp, .tg-service-hours, .tg-amenities {
    border-radius: 10px;
}
.tg-widget ul{
	width: auto;
	padding: 0;
}
.progress{
	height: 20px;
	border-radius: 4px;
	box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
}
.ProfilCompletion{
	float: left;
    width: 100%;
    margin-top: 20px;
}
.alert.alert-warning{
	float: left;
	padding: 15px;
}
.rating.product--rating{
	display: inline-flex;
    vertical-align: middle;
    width: auto;
}
.tg-widget-user .tg-border-heading{
    width: 100%;
}
.rating ul li {
    list-style: none;
    font-size: 16px;
}
.rating ul li {
    float: left;
    margin-right: 3px;
    width: auto !important;
}
.progress-bar-success {
    background-color: #5cb85c;
    color: #ffffff;
}
.tg-widget ul li a.btnToValidate {
   display: inline-block;
   border: none;
   color: #0D344D;
   background: none;
}
.tg-iosstylcheckbox{
    margin-top: 1em;
}
a.tg-btn.tg-btn-lg{
    color: #fff;
    background: #2dc583;
}
.tg-btn:after {
    top: 0;
    right: 0;
    content: none;
    z-index: 1;
    width: 3px;
    height: 100%;
    position: absolute;
}
.db-container {
    background: #e6e5e5;
    border-radius: 5px;
    padding: 10px 15px;
    margin-bottom: 5px;
}
.db-container a {
    color: #373542;
}
.tg-widget ul li.active {
    color: #fff;
    background: #0D344D;
}
.tg-widget ul li.active a{
    color: #fff;
}
#preview{
     display: inline-block;
}
.form-group{ margin:0 0 20px;}
.form-control::-moz-placeholder{
    text-transform: capitalize;
    color: #999;
}
.form-control:focus::-moz-placeholder,
input:focus,
.select select:focus,
.form-control:focus{
    color: #000;
    border-color: #000;
    box-shadow:none !important;
}
/*=======================
    Custom Select
=======================*/
.tg-select{
    width: 20%;
    float:left;
    color:#fff;
    position: relative;
    text-transform:uppercase;
    cursor:pointer;
}
.tg-select:after{
    content: '\f0d7';
    top: 50%;
    right: 23px;
    z-index: -1;
    width: 13px;
    color: #fff;
    display: block;
    position: absolute;
    text-align: center;
    font-size: 22px;
    margin-top: -5px;
    line-height: 10px;
    font-family: 'FontAwesome';
}
.tg-select select {
    width: 100%;
    z-index: 1;
    border:0;
    color:#fff;
    height:80px;
    line-height:80px;
    position: relative;
    text-transform:uppercase;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
}
.tg-select select option{color:#fff;}
/*=======================
    Custom CheckBox
=======================*/
.tg-checkbox,
.tg-checkbox label{
    width: 100%;
    float: left;
    margin:0;
    position: relative;
}
.tg-checkbox{ margin:0 0 10px;}
.tg-checkbox label{
    cursor:pointer;
    display:block;
    padding:0 0 0 20px;
}
.tg-checkbox input[type=checkbox] { display:none; }
.tg-checkbox input[type=checkbox] + label:before {
    top: 4px;
    left: 0;
    color: #0D344D;
    font-size: 14px;
    line-height: 14px;
    content: "\f096";
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-checkbox input[type=checkbox]:checked + label:before {content:'\f046';}
/*=======================
    IOS Style CheckBox
=======================*/
.tg-iosstylcheckbox{
    width:80px;
    float:right;
    position:relative;
}
.tg-iosstylcheckbox input[type=checkbox],
.tg-iosstylcheckbox input[type=checkbox]:active {display:none;}
.tg-iosstylcheckbox label {
    margin:0;
    width: 100%;
    height: 24px;
    display: block;
    overflow:hidden;
    cursor: pointer;
    font-size: 12px;
    line-height: 24px;
    position: relative;
    background: #0D344D;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
}
.tg-iosstylcheckbox label:before {
    top: 5px;
    left: 5px;
    z-index: 1;
    height: 14px;
    width: 14px;
    content: '';
    display: block;
    line-height: 14px;
    position: absolute;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
}
.tg-iosstylcheckbox label:after {
    top:0;
    left:0;
    z-index: 0;
    width:100%;
    height: 100%;
    color: #fff;
    display: block;
    font-size:13px;
    line-height:24px;
    text-align: right;
    padding:0 12px 0 0;
    position: absolute;
    white-space: nowrap;
    content: attr(data-private);
}
.tg-iosstylcheckbox input[type=checkbox]:checked + label:before {
    left: calc(100% - 19px);
    background:#0D344D;
}
.tg-iosstylcheckbox input[type=checkbox]:checked + label:after {
    padding:0 31px 0 0;
    content:attr(data-public);
}
label {
    color: #414141;
    display: block;
    font-weight: 400;
    margin-right: 10px;
    margin-bottom: 10px;
    /*AjoutÃ©*/
}
.tg-slidersearch label{ display: inline-block; font-size: 30px; vertical-align: -8px }

form p {
    float: left;
    position: relative;
    width: 100%;
}
form p span i {
    color: #474747;
    left: 16px;
    position: absolute;
    top: 13px;
}
option { padding: 5px 15px; }
li {
    /* line-height: 28px;
    list-style: disc inside none; */
}
ul ul { margin-left: 20px; }
ol {
    float: none;
    list-style: decimal;
    padding-left: 15px;
}
ol ol { margin-left: 20px; }
ol li {
    /* list-style: decimal;
    width: 100%; */
}
table {
    background-color: transparent;
    max-width: 100%;
}
th { text-align: left; }
table {
    margin-bottom: 15px;
    width: 100%;
}
table > thead > tr > th,
table > tbody > tr > th,
table > tfoot > tr > th,
table > thead > tr > td,
table > tbody > tr > td,
table > tfoot > tr > td {
    border-top: 1px solid #d2d2d2;
    border: 1px solid #d2d2d2;
    line-height: 2.5;
    padding-left: 3px;
    text-align: center;
    vertical-align: top;
}
table thead tr th {
    border-top: 1px solid #d2d2d2;
    text-align: center;
    text-transform: capitalize;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td { border-top: 1px solid #d2d2d2; }
table > thead > tr > th {
    border-bottom: 2px solid #d2d2d2;
    vertical-align: bottom;
}
table > caption + thead > tr:first-child > th,
table > colgroup + thead > tr:first-child > th,
table > thead:first-child > tr:first-child > th,
table > caption + thead > tr:first-child > td,
table > colgroup + thead > tr:first-child > td,
table > thead:first-child > tr:first-child > td { border-bottom: 0; }
table > tbody + tbody { border-top: 2px solid #d2d2d2; }
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td { padding: 6px 10px; }
p ins { color: #999; }
dl dd { margin-left: 20px; }
address { font-style: italic; }
/*=============================================
            Global Elements
=============================================*/
.tg-haslayout{
    width:100%;
    float:left;
}
.tg-main-section{/*padding: 100px 0;*/ padding: 50px 0;}
.tg-location-map{
    width: 100%;
    float: left;
    height: 500px;
}
.tg-btn-sm{
    padding: 0 20px;
    line-height: 30px;
}
.tg-btn{
    color: #fff;
    padding: 0 50px;
    position:relative;
    text-align:center;
    background: #0D344D;
    display: inline-block;
    vertical-align: middle;
    text-transform: uppercase;
    font:400 14px/50px 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-btn:after{
    top:0;
    right:0;
    content:'';
    z-index:1;
    width:3px;
    height:100%;
    position:absolute;
}
.tg-btn span{
    z-index:2;
    display:block;
    position:relative;
}
.tg-btn:hover{color:#fff;}
.tg-btn:hover:after,
.tg-btn.active:after{width:100%;}
.tg-btn-lg{ width: 100%;}
.tg-socialicons{
    overflow: hidden;
    list-style: none;
    text-align:center;
    line-height: 20px;
}
.tg-socialicons li{
    float: left;
    padding: 0 4px;
    line-height: inherit;
    list-style-type: none;
}
.tg-socialicons li a{
    width:20px;
    height:20px;
    color: #fff;
    display:block;
    background:#000;
    overflow:hidden;
}
.tg-socialicons li a i{
    display:block;
    font-size:13px;
    line-height:20px;
    text-align:center;
}
.tg-socialicons li a:hover{color: #000;}
.tg-verticalmiddle{
    margin: 0 -1px;
    float: none !important;
    display: inline-block;
    vertical-align: middle;
}
.tg-section-head {
    width:100%;
    float:left;
    z-index: 1;
    margin: 0 0 50px;
    padding: 0 0 20px;
    position: relative;
}
.tg-border-heading:after,
.tg-section-head:before,
.tg-section-head:after{
    left: 0;
    bottom: 4px;
    z-index: 2;
    content: '';
    width: 170px;
    height: 1px;
    position: absolute;
    background:#0D344D;
}
.tg-border-heading:after,
.tg-section-head:before{
    width:70px;
    bottom: 0;
}
.tg-center{text-align:center;}
.tg-center-small:after,
.tg-center:after,
.tg-center:before{left:50%;}
.tg-center:after{margin:0 0 0 -85px;}
.tg-center-small:after,
.tg-center:before{margin:0 0 0 -35px;}
.tg-section-head h2 {
    margin: 0 0 5px;
    line-height: 28px;
}
.tg-section-head p{
    margin:0;
    font-size:18px;
}
.tg-description {
    /*width: 100%;*/
    float: left;
}
.tg-border-heading{
    width: 100%;
    float: left;
    padding:0 0 18px;
    margin: 0 0 18px;
    position: relative;
}
.tg-border-heading h3{
    margin:0;
    line-height: 18px;
}
.tg-bglightgray{ background: #f7f7f7;}
.tg-bgdark{
    color:#fff;
    background:#0D344D;
}
.tg-tag{
    padding: 0 20px;
    line-height: 38px;
    font-size: 14px;
    border: 1px solid #ccc;
    display: block;
    color: #3e3e3e;
}
.tg-tag:hover{
    color: #fff;
    background: #3e3e3e;
    border-color: #3e3e3e;
}
.tg-starsbox{
    float:left;
    padding:0 0 0 10px;
    margin:0 0 0 10px;
    position:relative;
}
.tg-starsbox:after,
.tg-starsbox:before{
    top:0;
    color:#0D344D;
    font-size:20px;
    line-height:10px;
    position:absolute;
}
.tg-starsbox:after{
    left:0;
    content:'(';
}
.tg-starsbox:before{
    right:-9px;
    content:')';
}
.tg-stars{
    width:90px;
    float: left;
    position:relative;
}
.tg-stars:before {
    top: 0;
    left: 0;
    font-size: 16px;
    line-height: 16px;
    position: absolute;
    letter-spacing: 4px;
    color: rgba(218, 218, 218, .8);
    font-family: 'FontAwesome';
    content: '\f005 \f005 \f005 \f005 \f005';
}
.tg-stars span {
    float:left;
    width:80%;
    height: 16px;
    line-height:16px;
    overflow: hidden;
    position:relative;
}
.tg-stars span:after {
    top: 0;
    left: 0;
    color:#ffbc16;
    font-size: 16px;
    position: absolute;
    letter-spacing: 4px;
    font-family: 'FontAwesome';
    content: '\f005 \f005 \f005 \f005 \f005';
}
.row.no-gutters{
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > [class^="col-"],
.no-gutters > [class*="col-"],
.row.no-gutters > [class^="col-"],
.row.no-gutters > [class*="col-"]{
    padding-right: 0;
    padding-left: 0;
}
.floating {
    float: left;
    animation-name: Floating;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
    /*margin-left: 30px;
    margin-top: 5px;*/
}
@keyframes Floating {
    0% {transform: translate(0px, 0px);}
    65% {transform: translate(0px, 15px);}
    100% {transform: translate(0px, 0px);}
}
.scaling {
    float: left;
    animation-name: scale;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}
@keyframes scale {
    0% {transform: scale(0.9);}
    65% {transform: scale(1);}
    100% {transform: scale(0.9);}
}
/*=============================================
        Theme Pagination
=============================================*/
.tg-pagination{
    width:100%;
    float: left;
    font-size:14px;
    line-height:25px;
    font:14px/25px 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-pagination ul{
    float:right;
    margin:0;
    padding:0;
    list-style:none;
    text-align: center;
    line-height: inherit;
}
.tg-pagination ul li{
    float:left;
    margin:0 6px;
    line-height: inherit;
    list-style-type:none;
}
.tg-pagination ul li.tg-prevpage{ margin-left:0;}
.tg-pagination ul li.tg-nextpage{ margin-right:0;}
.tg-pagination ul li a{
    width:20px;
    display:block;
    color:#0D344D;
    text-align:center;
    position:relative;
    line-height: inherit;
}
.tg-pagination ul li.tg-nextpage a,
.tg-pagination ul li.tg-prevpage a{
    width:auto;
    font-size: 20px;
    overflow:hidden;
    position:relative;
}
.tg-pagination ul li.tg-nextpage a{padding:0 0 0 25px;}
.tg-pagination ul li.tg-prevpage a{padding:0 25px 0 0;}
.tg-pagination ul li.tg-nextpage a:after,
.tg-pagination ul li.tg-prevpage a:after{
    top:50%;
    opacity:0;
    content:'';
    width:15px;
    height:1px;
    background:#0D344D;
    position:absolute;
    visibility:hidden;
}
.tg-pagination ul li.tg-nextpage a:after{right:50px;}
.tg-pagination ul li.tg-prevpage a:after{left:50px;}
.tg-pagination ul li.tg-nextpage a:hover:after,
.tg-pagination ul li.tg-prevpage a:hover:after{
    opacity:1;
    visibility:visible;
}
.tg-pagination ul li.tg-nextpage a:hover:after{right:2px;}
.tg-pagination ul li.tg-prevpage a:hover:after{left:2px;}
/*=============================================
        Theme BreadCrumb
=============================================*/
.tg-breadcrumb {
    padding: 0;
    margin:0;
    color: #fff;
    float: right;
    list-style: none;
    text-align: right;
    text-transform: uppercase;
    font:14px/44px 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-breadcrumb li{
    width:auto;
    list-style-type:none;
    display: inline-block;
    vertical-align: middle;
    line-height:inherit;
    padding:0 15px;
    position:relative;
}
.tg-breadcrumb li:after{
    content:'>';
    position:absolute;
    top:0;
    left:-3px;
}
.tg-breadcrumb li:last-child{ padding: 0 0 0 15px;}
.tg-breadcrumb li:first-child:after{display: none;}
.tg-breadcrumb li a{
    display:block;
    color:#fff;
}
.tg-prev,
.tg-next{
    top:0;
    right:0;
    font-size:14px;
    cursor:pointer;
    position:absolute;
}
.tg-prev span,
.tg-next span{
    color:#0D344D;
    display:block;
    line-height:16px;
    margin:0 14px 0 0;
}
.tg-prev{
    top:-2px;
    right:40px;
    text-align:left;
}
.tg-next{
    text-align:right;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.tg-prev span:after,
.tg-next span:after{
    content:'';
    top:50%;
    left:15px;
    width:20px;
    height:1px;
    z-index:-1;
    opacity:0;
    background:#0D344D;
    position:absolute;
    visibility:hidden;
}
.tg-prev:hover span:after,
.tg-next:hover span:after{
    opacity:1;
    visibility:visible;
}
.tg-prev:hover span:after,
.tg-next:hover span:after{left:3px;}
/*=============================================
            Theme Style
=============================================*/
.tg-wrapper{
    position:relative;
    height:100%;
}
body.tg-home .tg-main{ padding:0;}
body.tg-comming-soon #main {
  height: 100%;
  padding: 0;
  position: relative;
  width: 100%;
}
.tg-main{
    padding:50px 0;
    position:relative;
}


.tg-locationsearch,
.tg-modalbox.fade {background:rgba(0, 0, 0, 0.1)}
.tg-locationsearch .modal-dialog,
.tg-modalbox.fade .modal-dialog{
    width:770px;
    top:10%;
    left:50%;
    overflow:hidden;
    background:#fff;
    position:absolute;
    box-shadow:none;
    margin:0 0 0 -385px;
    border-top:3px solid;
    border-radius: 20px;
}
.tg-locationsearch .modal-dialog{
    top:50%;
    border:0;
    width:1170px;
    padding:0 15px;
    background:none;
    margin:-40px 0 0 -585px;
}
.tg-modal-content{
    width:100%;
    float:left;
}
.tg-logintype,
.tg-modal-content .tg-formarea {
    width:60%;
    float:left;
    padding:27px 30px 30px;
}
.tg-logintype{
    width:40%;
    background:#f7f7f7;
}
.tg-modal-content form{
    width:100%;
    float:left;
    padding:15px 0 0;
}
.tg-modal-content form fieldset{
    width:100%;
    float:left;
    padding:0;
    border:0;
    margin:0;
}
.tg-modal-content form fieldset .form-group{
    width:100%;
    float:left;
}
.tg-modal-content form fieldset label{
    float:left;
    margin:0;
}
.tg-modal-content form fieldset label input{ margin:0;}
.tg-modal-content form fieldset .form-group a{
    float:right;
    color:#0D344D;
}
.tg-modal-content form fieldset label input,
.tg-modal-content form fieldset label em,
.tg-modal-content form fieldset a em,
.tg-modal-content form fieldset a i{
    display:inline-block;
    vertical-align:middle;
    font-style:normal;
}
.tg-modal-content form fieldset p{
    margin:0;
    text-align:center;
}
.tg-logintype ul{
    width:100%;
    float:left;
    font-size:14px;
    list-style:none;
    line-height:48px;
    padding:15px 0 20px;
    text-transform:capitalize;
}
.tg-logintype ul li{
    width:100%;
    float:left;
    text-align:center;
    padding:0 0 15px;
    list-style-type:none;
    line-height:inherit;
}
.tg-logintype ul li a{
    color:#fff;
    display:block;
    line-height:inherit;
    background:#2e5894;
}
.tg-logintype ul li.tg-twitter a{background:#00adcf;}
.tg-logintype ul li.tg-googleplus a{background:#e04b33;}
.tg-logintype ul li.tg-linkedin a{background:#2099c6;}
.tg-form-locationsearch fieldset,
.tg-form-locationsearch{
    width:100%;
    float:left;
    position:relative;
}
.tg-form-locationsearch .form-control{
    width:80%;
    float:left;
    border:0;
    z-index:1;
    height:80px;
    font-size:28px;
    line-height:80px;
    background:none;
    position:relative;
    border-bottom:1px solid #999;
}
.tg-form-locationsearch .form-control:focus::-moz-placeholder,
.tg-form-locationsearch .form-control:focus{ color:#999;}
.tg-form-locationsearch .tg-btn-search{
    top:25px;
    right:0;
    z-index:2;
    color:#999;
    width:30px;
    height:30px;
    background:none;
    font-size:30px;
    line-height:30px;
    position:absolute;
}
/*=============================================
            Header
=============================================*/
.tg-header{
    top:0;
    left:0;
    float:none;
    z-index:10;
    position:fixed;
    padding: 35px 50px;
    border-bottom:2px solid transparent;
}
.tg-header.affix{
    padding:20px;
    background:rgba(255, 255, 255, 0.90);
}
.tg-header-holder {
    width: 90%;         /* Taille totale de la barre */
    float: left;
    padding-left: 15%;  /* dÃ©calage position logo Ã  gauche */
}
.tg-header.affix .logo {width: 170px;}
.logo {float: left;}
.logo a {display: block;}
.logo a img {display: block;}
.tg-rightarea{
    float: right;
    text-align:right;
    padding:14px 0 0 0;
}
.tg-nav,
.tg-addnavs{
    text-transform:none;
    display:inline-block;
    vertical-align:middle;
}
.tg-addnavs > ul{
    padding:0 15px;
    position:relative;
    display:inline-block;
    vertical-align:middle;
    font:400 14px/17px 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-addnavs > ul:last-child,
.tg-addnavs > ul:last-child li{padding-right:0;}
/*.tg-addnavs > ul:after{
    top:50%;
    left:0;
    width:2px;
    height:10px;
    content:'';
    margin:-5px 0 0 -1px;
    position:absolute;
    background:#0D344D;
}*/
.tg-addnavs > ul > li{
    float:left;
    padding:0 15px;
    line-height:inherit;
    list-style-type:none;
    position:relative;
}
/*
.tg-addnavs > ul > li + li:after{
    bottom:3px;
    left:0;
    width:2px;
    height:2px;
    content:'';
    margin:0 0 0 -1px;
    position:absolute;
    background:#0D344D;
}*/
.tg-addnavs ul li a{
    color:#0D344D;
    display:block;
}
.tg-addnavs > ul:last-child li a i{
    font-size:10px;
    line-height:10px;
    padding:0 7px 0 0;
}
.tg-addnavs > ul li a span,
.tg-addnavs > ul li a i{
    display:inline-block;
    vertical-align:middle;
}
.tg-dropdown{}
.tg-nav ul li.active:after,
.tg-nav ul li.active:before,
.tg-nav ul li:hover:after,
.tg-nav ul li:hover:before,
.tg-dropdown-menu li:hover:after,
.tg-dropdown-menu li:hover:before{
    opacity:1;
    visibility:visible;
}
.tg-nav ul li + li,
.tg-dropdown-menu li + li{border-top:1px solid #999;}
.tg-dropdown-menu li a i{
    display:block;
    color:#0D344D;
}
.tg-nav ul li ul{
    top:-1px;
    left:150%;
    opacity:0;
    display:none;
    visibility:hidden;
    position:absolute;
}
.tg-nav .navbar-collapse.collapse.in ul li ul{ display:block;}
.tg-nav ul li:hover ul{
    left:100%;
    opacity:1;
    width:190px;
    visibility:visible;
}

.tg-dropdown.open .tg-dropdown-menu{
    top:110%;
    opacity:1;
    visibility:visible;
}
.tg-dropdown-menu.tg-social-dropdown-menu{
    width:70px;
    text-align:center;
}


.tg-nav{
    text-align:left;
    position:relative;
    padding:0 30px 0 0;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-nav .navbar-header button{
    border:0;
    margin:0;
    display:block;
    padding:2px 0 0;
    border-radius:0;
    text-transform:uppercase;
    font:400 14px/13px 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-nav .navbar-header button i{ line-height:inherit;}
.tg-nav .navbar-collapse.collapse {
    display: none !important;
    height: auto !important;
    overflow: visible !important;
    visibility: visible !important;
}
.tg-nav .navbar-collapse.collapse.in {display:block !important;}
/*=============================================
            Home Slider
=============================================*/
.tg-home-slider{
    width: 100%;
    height: 100%;
    z-index:1;
    position:relative;
}
.tg-home-slider figure{
    width:100%;
    float:left;
    margin:0;
    background:#fff;
    position:relative;
    background-position: bottom center !important;
    -webkit-background-size: auto 100% !important;
    -moz-background-size: auto 100% !important;
    -ms-background-size: auto 100% !important;
    -o-background-size: auto 100% !important;
    background-size: auto 100% !important;
}
.tg-home-slider figcaption{
    width:100%;
    height:100%;
    opacity:1;
    padding:0 0 150px;
    text-align:center;
    position:relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
    background:rgba(255, 255, 255, 0.1);
}
.tg-home-slider figcaption h1{
    margin:0;
    font:300 100px/100px 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-home-slider figcaption h1 .tg-border-heading{
    font-size:30px;
    line-height:30px;
}
/*=============================================
            Categories Slider
=============================================*/
.tg-categories-search{
    width:100%;
    float:left;
    z-index:2;
    margin:-260px 0 0;
    position:relative;
}
.tg-categories-slider{
    width:100%;
    float:left;
    overflow:hidden;
}
.tg-categories-slider .swiper-slide{
    cursor:pointer;
    height:170px;
    padding:10px;
    display: flex;
    background:#fff;
    text-align:center;
    position:relative;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
    border:1px solid #999;
}
.tg-categories-slider .swiper-slide:after{
    top:50%;
    left:50%;
    content:'';
    width:0;
    height:0;
    opacity:0;
    visibility:hidden;
    position:absolute;
    border:1px solid #fff;
}
.tg-categories-slider .swiper-slide:hover:after{
    top:3%;
    left:3%;
    width:94%;
    height:94%;
    opacity:1;
    visibility:visible;
}
.tg-categories-slider .swiper-slide:hover{color:#fff;}
.tg-categories-slider .swiper-slide:hover .tg-border-heading:after{ background:#fff;}
.tg-categories-slider .swiper-slide:hover .tg-border-heading h4{color:#fff;}
.tg-categories-slider .swiper-slide h4{
    margin:0;
    line-height:16px;
}
.tg-categories-slider .swiper-slide span{font-size:55px;}
/*=============================================
            Featured Listing
=============================================*/
.tg-detail-link{
    color:#0D344D;
    font-size:20px;
    line-height:12px;
    overflow:hidden;
    padding:0 0 0 25px;
    float:right;
    position:relative;
}
.tg-detail-link:after{
    top:50%;
    opacity:0;
    right:50px;
    content:'';
    width:15px;
    height:1px;
    background:#fff;
    position:absolute;
    visibility:hidden;
}
.tg-detail-link:hover:after{
    right:2px;
    opacity:1;
    visibility:visible;
}
.tg-detail-link i.fa{
    font-size:inherit;
    line-height:inherit;
}
.tg-featuredplaces{
    width:100%;
    float:left;
    text-align:center;
}
.tg-head{
    width:100%;
    float:left;
    padding:0 0 20px;
    border-bottom:1px solid #999;
}
.tg-filterbale-nav{
    float:left;
    list-style:none;
    line-height:17px;
    text-transform:uppercase;
}
.tg-filterbale-nav li{
    float:left;
    padding:0 20px;
    position:relative;
    line-height:inherit;
    list-style-type:none;
}
.tg-filterbale-nav li:first-child{ padding:0 20px 0 0;}
.tg-filterbale-nav li + li:after{
    content:'.';
    left:-2px;
    bottom:0;
    position:absolute;
    font-size:20px;
}
.tg-filterbale-nav li a{
    display:block;
    color:#0D344D;
}
.tg-totalresult{
    float:right;
    text-transform:uppercase;
}
.tg-filtermasonry{
    width:100%;
    float:left;
    padding:15px 0;
}
.tg-griditem.tg-direcPost{
    width:25%;
    float:left;
}
.tg-direcPost{
    width:100%;
    float:left;
    padding:15px;
}
.tg-direcPost figure{
    width:100%;
    float:left;
    margin:0;
    /*background:#0D344D;*/
    position:relative;
    border:1px solid #999;
}
.tg-direcPost figure img{
    width:100%;
    height:auto;
    display:block;
}
.tg-direcPost figure figcaption{
    top:0;
    left:0;
    z-index:1;
    width:100%;
    height:100%;
    padding:15px;
    position:absolute;
    background: -moz-linear-gradient(top,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(
            startColorstr='#00373542',
            endColorstr='#0D344D',
            GradientType=0 ); /* IE6-9 */
}
.tg-box{
    width:100%;
    height:100%;
    padding:15px;
    z-index:2;
    overflow:hidden;
    position:relative;
    text-align:center;
}
.tg-box:before{
    content:'';
    width:0;
    height:0;
    left:50%;
    top:50%;
    opacity:0;
    z-index:-1;
    visibility:hidden;
    position:absolute;
    border:1px solid #fff;
}
.tg-theme-tag{
    min-width:90px;
    color:#fff;
    padding:0 10px;
    line-height:20px;
    position:relative;
    text-align:center;
    margin:5px 10px 0;
    vertical-align:top;
    display:inline-block;
    text-transform:uppercase;
    font-family:'Cabin', Arial, Helvetica, sans-serif;
}
.tg-trending{
    margin-top:10px;
    margin-right:0;
    margin-left:0;
}
.tg-rating{
    margin-left:0;
    margin-right:0;
}
.tg-discount{
    top:15px;
    margin:0;
}
.tg-theme-tag:after{
    content:'';
    top:0;
    left:-10px;
    width: 0;
    height: 0;
    position:absolute;
    border-top: 20px solid;
    border-left: 10px solid transparent !important;
}
.tg-theme-tag:before{
    content:'';
    top:0;
    left:100%;
    width: 0;
    height: 0;
    position:absolute;
    border-top: 20px solid transparent !important;
    border-left: 10px solid;
}
.tg-place-data{
    left:0;
    width:100%;
    bottom:15px;
    color:#fff;
    height:40px;
    padding:0 15px;
    overflow:hidden;
    text-align:left;
    position:absolute;
}
.tg-place-data h3{
    margin:0;
    line-height:18px;
}
.tg-place-data h3 a{
    color:#fff;
    display:block;
}
.tg-place-data address{
    margin:0 0 20px;
    line-height:px;
    font-style:normal;
    float:left;
    width:100%;
    overflow:hidden;
}
.tg-place-data address a{
    color:#fff;
    float:left;
    padding:0 10px 0 0;
    position:relative;
}
.tg-place-data address a:after{
    content:'';
    width:30px;
    height:1px;
    top:50%;
    left:100%;
    background:#fff;
    position:absolute;
}
.tg-place-data .tg-description{
    width:100%;
    float:left;
}
.tg-place-data .tg-description p{ margin:0;}
.tg-place-data .tg-likes{
    left:-50px;
    bottom:0;
    cursor:pointer;
    position:absolute;
}
.tg-place-data .tg-detail-link{
    float:none;
    bottom:0;
    right:-50px;
    color:#fff;
    position:absolute;
}
.tg-direcPost figure:hover .tg-box:before{
    left:0;
    top:0;
    width:100%;
    height:100%;
    opacity:1;
    visibility:visible;
}
.tg-direcPost figure:hover .tg-place-data{height:55%;}
.tg-direcPost figure:hover .tg-place-data address a:after{ width:999px;}
.tg-direcPost figure:hover{border-color:#0D344D;}
.tg-direcPost figure:hover > img{ opacity:0;}
.tg-direcPost figure:hover .tg-place-data .tg-likes{ left:15px;}
.tg-direcPost figure:hover .tg-place-data .tg-detail-link{ right:15px;}
/*=============================================
            How Its Works
=============================================*/
.tg-howitsworks{
    width:100%;
    float:left;
    position:relative;
    z-index:2;
}
.tg-howitsworks:after{
    content:'';
    top:36px;
    left:0;
    width:100%;
    height:1px;
    z-index:-1;
    position:absolute;
    background: -moz-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(241,241,242,0.06) 1%, rgba(211,210,213,0.2) 3%, rgba(182,181,186,0.35) 4%, rgba(255,255,255,0.65) 6%, rgba(255,255,255,0.8) 7%, rgba(255,255,255,0.87) 8%, rgba(255,255,255,0.94) 9%, rgba(255,255,255,1) 10%, rgba(255,255,255,1) 90%, rgba(255,255,255,0.94) 91%, rgba(255,255,255,0.87) 92%, rgba(255,255,255,0.8) 93%, rgba(255,255,255,0.68) 94%, rgba(255,255,255,0.44) 96%, rgba(255,255,255,0.2) 98%, rgba(255,255,255,0.06) 99%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  rgba(255,255,255,0) 0%,rgba(255,255,255,0.06) 1%,rgba(255,255,255,0.2) 3%,rgba(255,255,255,0.35) 4%,rgba(255,255,255,0.65) 6%,rgba(255,255,255,0.8) 7%,rgba(255,255,255,0.87) 8%,rgba(255,255,255,0.94) 9%,rgba(255,255,255,1) 10%,rgba(255,255,255,1) 90%,rgba(255,255,255,0.94) 91%,rgba(255,255,255,0.87) 92%,rgba(255,255,255,0.8) 93%,rgba(255,255,255,0.68) 94%,rgba(255,255,255,0.44) 96%,rgba(255,255,255,0.2) 98%,rgba(255,255,255,0.06) 99%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  rgba(255,255,255,0) 0%,rgba(255,255,255,0.06) 1%,rgba(255,255,255,0.2) 3%,rgba(255,255,255,0.35) 4%,rgba(255,255,255,0.65) 6%,rgba(255,255,255,0.8) 7%,rgba(255,255,255,0.87) 8%,rgba(255,255,255,0.94) 9%,rgba(255,255,255,1) 10%,rgba(255,255,255,1) 90%,rgba(255,255,255,0.94) 91%,rgba(255,255,255,0.87) 92%,rgba(255,255,255,0.8) 93%,rgba(255,255,255,0.68) 94%,rgba(255,255,255,0.44) 96%,rgba(255,255,255,0.2) 98%,rgba(255,255,255,0.06) 99%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00fefefe',GradientType=1 ); /* IE6-9 */
}
.tg-col{
    width:100%;
    float:left;
    overflow:hidden;
    text-align:center;
}
.tg-howitsworks span{ display:block;}
.tg-bgdark .tg-section-head h2{color:#fff;}
.tg-bgdark .tg-section-head:after,
.tg-bgdark .tg-section-head:before{background:#fff;}
.tg-counter{
    width:70px;
    height:70px;
    margin:0 auto;
    overflow:hidden;
    background:#0D344D;
    line-height:68px;
    border-radius:50%;
    position:relative;
    border:1px solid #fff;
}
.tg-counter:after{
    content:'';
    top:50%;
    left:50%;
    width:0;
    height:0;
    opacity:0;
    border-radius:50%;
    display:block;
    position:absolute;
    visibility:hidden;
}
.tg-howitsworks .tg-col:hover .tg-counter{ color:#fff;}
.tg-howitsworks .tg-col:hover .tg-counter:after{
    left:10%;
    top:10%;
    width:80%;
    height:80%;
    opacity:1;
    visibility:visible;
}
.tg-counter em{
    z-index:2;
    display:block;
    line-height:68px;
    position:relative;
    font-style:normal;
}
.tg-icon{
    font-size:65px;
    line-height:65px;
    padding:40px 0 30px;
}
.tg-howitsworks .tg-border-heading:after{background:#fff;}
.tg-howitsworks .tg-border-heading h3{color:#fff;}
.tg-howitsworks-v2 .tg-border-heading:after{background:#0D344D;}
.tg-howitsworks-v2 .tg-border-heading h3{color:#0D344D;}
.tg-howitsworks-v2:after{
    content:'';
    top:36px;
    left:0;
    width:100%;
    height:1px;
    z-index:-1;
    position:absolute;
    background: -moz-linear-gradient(left, rgba(0,0,0,0) 0%, rgba(0,0,0,0.06) 1%, rgba(0,0,0,0.2) 3%, rgba(0,0,0,0.35) 4%, rgba(0,0,0,0.65) 6%, rgba(0,0,0,0.8) 7%, rgba(0,0,0,0.87) 8%, rgba(0,0,0,0.94) 9%, rgba(0,0,0,1) 10%, rgba(0,0,0,1) 90%, rgba(0,0,0,0.94) 91%, rgba(0,0,0,0.87) 92%, rgba(0,0,0,0.8) 93%, rgba(0,0,0,0.68) 94%, rgba(0,0,0,0.44) 96%, rgba(0,0,0,0.2) 98%, rgba(0,0,0,0.06) 99%, rgba(0,0,0,0) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(left,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.06) 1%,rgba(0,0,0,0.2) 3%,rgba(0,0,0,0.35) 4%,rgba(,,,0.65) 6%,rgba(0,0,0,0.8) 7%,rgba(0,0,0,0.87) 8%,rgba(0,0,0,0.94) 9%,rgba(0,0,0,1) 10%,rgba(0,0,0,1) 90%,rgba(0,0,0,0.94) 91%,rgba(0,0,0,0.87) 92%,rgba(0,0,0,0.8) 93%,rgba(0,0,0,0.68) 94%,rgba(0,0,0,0.44) 96%,rgba(0,0,0,0.2) 98%,rgba(0,0,0,0.06) 99%,rgba(0,0,0,0) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to right,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.06) 1%,rgba(0,0,0,0.2) 3%,rgba(0,0,0,0.35) 4%,rgba(0,0,0,0.65) 6%,rgba(0,0,0,0.8) 7%,rgba(0,0,0,0.87) 8%,rgba(0,0,0,0.94) 9%,rgba(0,0,0,1) 10%,rgba(0,0,0,1) 90%,rgba(0,0,0,0.94) 91%,rgba(0,0,0,0.87) 92%,rgba(0,0,0,0.8) 93%,rgba(0,0,0,0.68) 94%,rgba(0,0,0,0.44) 96%,rgba(0,0,0,0.2) 98%,rgba(0,0,0,0.06) 99%,rgba(0,0,0,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#00fefefe',GradientType=1 ); /* IE6-9 */
}
.tg-howitsworks-v2 .tg-counter{
    width:70px;
    height:70px;
    margin:0 auto;
    overflow:hidden;
    background:#f7f7f7;
    line-height:68px;
    border-radius:50%;
    position:relative;
    border:1px solid #0D344D;
}
/*=============================================
            Top Search
=============================================*/
.tg-direcPost-links {
    left: 0;
    list-style: none;
    margin: -20px 0 0;
    overflow: hidden;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 100%;
}
.tg-direcPost-links li {
    border-radius: 50%;
    display: inline-block;
    height: 40px;
    list-style-type: none;
    margin: 0 5px;
    opacity: 0;
    overflow: hidden;
    position: relative;
    transition-delay: 5s;
    vertical-align: top;
    visibility: hidden;
    width: 40px;
}
.tg-direcPost-links li a {
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    display: block;
    font-size: 16px;
    line-height: 38px;
    position: relative;
}
.tg-direcPost-links li a:after {
    background: #fff;
    border-radius: 50%;
    content: "";
    height: 0;
    left: 50%;
    opacity: 0;
    position: absolute;
    top: 50%;
    visibility: hidden;
    width: 0;
}
.tg-direcPost-links li a:hover{ color:#0D344D;}
.tg-direcPost-links li a:hover:after{
    top:0;
    left:0;
    opacity:1;
    width:100%;
    height:100%;
    visibility:visible;
}
.tg-direcPost-links li a span {
    display: block;
    line-height: inherit;
    position: relative;
    z-index: 1;
}
.tg-direcPost-links li:last-child {right: 70%;}
.tg-direcPost-links li:first-child {left: 70%;}
.tg-topSearch{
    width:100%;
    float:left;
}
.tg-direcPost figure:hover .tg-direcPost-links li:first-child {left: 0;}
.tg-direcPost figure:hover .tg-direcPost-links li:last-child {right: 0;}
.tg-direcPost figure:hover .tg-direcPost-links li {
    opacity: 1;
    visibility: visible;
}
.tg-direcPost figure:hover {border-color: #0D344D;}
.tg-topsearch-post{ padding:15px 0;}
.tg-topsearch-post figure figcaption{background:none;}
.tg-topsearch-post figure img{opacity:0.60;}
.tg-direcPost-data{
    width:100%;
    float:left;
    padding:15px;
    background:#f7f7f7;
}
.tg-direcPost-data .tg-description{}
.tg-direcPost-data .tg-description p{ margin:0;}


.tg-searchlist .tg-direcPost-links{
    width:100%;
    float:left;
    list-style:none;
    text-align:left;
    position:static;
    margin:0;
}
.tg-searchlist .tg-direcPost-links li{
    width:40px;
    height:40px;
    margin:0 5px;
    overflow:hidden;
    position:relative;
    border-radius:50%;
    list-style-type:none;
    display:inline-block;
    text-align:center;
    visibility:visible;
    opacity:1;
}
.tg-searchlist .tg-direcPost-links li:first-child{left:0;}
.tg-searchlist .tg-direcPost-links li:last-child{right:0;}
.tg-searchlist .tg-direcPost-links li a{
    color:#0D344D;
    background:none;
    display:block;
    font-size:16px;
    line-height:38px;
    position:relative;
    border-radius:50%;
    border:1px solid #0D344D;
}
.tg-searchlist .tg-direcPost-links li a:after{
    content:'';
    top:50%;
    left:50%;
    opacity:0;
    width:0;
    height:0;
    background:#fff;
    position:absolute;
    visibility:hidden;
    border-radius:50%;
}
.tg-searchlist .tg-direcPost-links li a:hover{color:#fff;}
/*=============================================
            Features
=============================================*/
.tg-features{
    width:100%;
    float:left;
    color:#fff;
}
.tg-features .tg-col .tg-icon{
    display:block;
    font-size:45px;
    line-height:45px;
    padding:0 0 30px;
}
.tg-features .tg-border-heading:after { background:#fff;}
.tg-features h3{ color:#fff;}
.tg-features .tg-description{}
.tg-features .tg-description p{ margin:0;}
/*=============================================
            Blog Post
=============================================*/
.tg-blogposts,
.tg-blogpost{
    width:100%;
    float:left;
}
.tg-blogpost + .tg-blogpost{ margin:30px 0 0;}
.tg-post-img{
    float:left;
    position:relative;
    margin:0 -100px 0 0;
}
.tg-posthover{
    top:0;
    left:0;
    z-index:3;
    width:100%;
    height:100%;
    position:absolute;
}
.tg-date{
    top:0;
    left:0;
    padding:0 10px;
    line-height:24px;
    position:absolute;
    background:#0D344D;
    text-transform:capitalize;
}
.tg-date a:hover,
.tg-date a{
    color:#fff;
    display:block;
    position:relative;
}
.tg-blogpost .tg-direcPost-links li{ position:static;}
.tg-blogpost:hover .tg-direcPost-links li{
    opacity:1;
    visibility:visible;
}
.tg-blogpost .tg-post-img figure{
    float:left;
    z-index:1;
    margin:0;
    position:relative;
    background:#0D344D;
    border:1px solid #0D344D;
}
.tg-blogpost .tg-post-img figure:before{
    top:-1px;
    left:0;
    content:'';
    width:140px;
    height:0;
    z-index:2;
    position:absolute;
    border-right:31px solid #0D344D;
    border-top:170px solid transparent;
}
.tg-blogpost .tg-post-img figure:after{
    top:0;
    left:1px;
    content:'';
    width:140px;
    height:0;
    z-index:3;
    position:absolute;
    border-right:30px solid #fff;
    border-top:170px solid transparent;
}
.tg-blogpost .tg-post-img figure img{
    width:100%;
    height:auto;
    display:block;
    opacity:0.60;
}
.tg-blogpost:hover .tg-post-img figure img{ opacity:0.10;}
.tg-postdata{
    /*min-height:180px;*/
    min-height: 160px;
    overflow:hidden;
    position:relative;
    margin:40px 0 0;
    border:1px solid #999;
    padding:20px 20px 20px 120px;
}
.tg-postdata h3{ margin:0 0 5px;}
.tg-postmetadata{
    width:100%;
    float:left;
    list-style:none;
    line-height:17px;
    text-transform:capitalize;
}
.tg-postmetadata li{
    float:left;
    padding:0 10px;
    line-height:inherit;
    list-style-type:none;
    position:relative;
}
.tg-postmetadata li:first-child{ padding-left:0;}
.tg-postmetadata li:after{
    position:absolute;
    content:'/';
    left:0;
    top:0;
    margin:0 0 0 -1px;
}
.tg-postmetadata li:first-child:after{display:none;}
.tg-postmetadata li a{
    display:block;
    color:#0D344D;
}
.tg-postdata .tg-description p{ margin:0 0 10px;}
/*=============================================
            Recent Places
=============================================*/
.tg-recentplaces{
    width:100%;
    float:left;
}
.tg-recentplace{
    padding:0;
    overflow:hidden;
    background:#f7f7f7;
}
.tg-recentplace + .tg-recentplace{ margin:30px 0 0;}
.tg-recentplace figure{
    width:auto;
    float:left;
}
.tg-recentplace figure > img{ opacity:0.60;}
.tg-recentplace:hover figure > img{ opacity:0.10;}
.tg-recentplace .tg-direcPost-data{
    width:auto;
    float:none;
    padding:20px;
    overflow:hidden;
}
.tg-recentplace .tg-border-heading h3{ margin:0 0 7px;}
.tg-border-heading .tg-date{
    padding:0;
    display:block;
    position:static;
    line-height:17px;
    background:none;
    color:#0D344D;
}
.tg-border-heading .tg-date a{ color:#0D344D;}
.tg-featured{
    top:0;
    left:0;
    width:40px;
    height:40px;
    z-index:2;
    position:absolute;
    padding:7px;
}
.tg-featured:after{
    content:'';
    top:0;
    left:0;
    width:0;
    height:0;
    z-index:1;
    position:absolute;
    border-top: 40px solid;
    border-right: 40px solid transparent !important;
}
.tg-featured i{
    float:left;
    color:#fff;
    z-index:3;
    position:relative;
}
.tg-recentplace figure > i{
    opacity:0;
    right:-15px;
    color:#fff;
    bottom:15px;
    cursor:pointer;
    position:absolute;
    visibility:hidden;
}
.tg-recentplace:hover figure > i{
    opacity:1;
    right:15px;
    visibility:visible;
}
/*=============================================
            Footer
=============================================*/
.tg-footer{}
.tg-footer-topbar{
    color:#fff;
    overflow:hidden;
}
.tg-footer-topbar [class^="col-"]{padding:0;}
.tg-freesignup,
.tg-premiumaccess{
    width:100%;
    float:left;
    padding:40px 115px 40px 15px;
    position:relative;
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-premiumaccess{ padding:55px 15px 55px 115px;}
.tg-premiumaccess:before,
.tg-freesignup:before{
    top:0;
    width:9999px;
    height:100%;
    content:'';
    position:absolute;
}
.tg-freesignup:before{ right:100%;}
.tg-premiumaccess:before{ left:100%;}
.tg-premiumaccess:after{
    top:0;
    right:100%;
    width:0;
    height:0;
    content:'';
    position:absolute;
    border-bottom: 300px solid;
    border-left: 60px solid transparent !important;
}
.tg-freesignup{ margin:30px 0 0;}
.tg-footer-topbar .tg-textbox{
    width:66%;
    float:left;
}
.tg-footer-topbar .tg-btn{
    float:right;
    color:#fff;
    background:#0D344D;
}
.tg-footer-topbar .tg-btn:hover{ color:#0D344D;}
.tg-footer-topbar .tg-btn:after{ background:#fff;}
.tg-footer-topbar .tg-border-heading h3{ color:#fff;}
.tg-footer-topbar .tg-border-heading:after{ background:#fff;}
.tg-footer-info{
    color:#fff;
    padding:80px 0;
    background:#0D344D;
}
.tg-footer-col{
    width:100%;
    float:left;
}
.tg-footer-col .tg-logo{
    width:100%;
    float:left;
    padding:0 0 30px;
}
.tg-footer-col .tg-logo a{float:left;}
.tg-footer-col .tg-logo a img{ display:block;}
.tg-footer-col .tg-description{ padding:0 0 20px;}
.tg-footer-col .tg-description p{ margin:0;}
.tg-footer-col .tg-border-heading{
    padding:0 0 20px;
    margin:0 0 40px;
}
.tg-footer-col .tg-border-heading:after{ background:#fff;}
.tg-footer-col .tg-border-heading h3{ color:#fff;}
.tg-footer-col ul{
    width:100%;
    float:left;
    list-style:none;
}
.tg-footer-col ul li{
    width:100%;
    float:left;
    line-height:17px;
    list-style-type:none;
}
.tg-footer-col ul li + li{ padding:20px 0 0;}
.tg-footer-col ul li i{
    width:25px;
    float:left;
}
.tg-footer-col ul li span,
.tg-footer-col ul li a{
    color:#fff;
    float:left;
}
.tg-footer-col ul li address{
    width:80%;
    margin:-2px 0 0;
    overflow:hidden;
    font-style:normal;
    line-height:inherit;
}
.tg-footer-col.tg-usefullinks ul li a{
    position:relative;
    padding:0 0 0 30px;
}
.tg-footer-col.tg-usefullinks ul li a:after{
    top:0;
    left:0;
    color:#fff;
    content:'\f105';
    position:absolute;
    font-family: 'FontAwesome';
}
.tg-footer-col.tg-sociallinks ul li a i{ padding:2px 0 0;}
.tg-footer-col.tg-sociallinks ul li a span{ text-transform:capitalize;}
.tg-form-newsletter{
    width:100%;
    float:left;
}
.tg-form-newsletter fieldset{
    margin:0;
    border:0;
    padding:0;
    position:relative;
}
.tg-form-newsletter fieldset input.form-control{
    height:47px;
    line-height:45px
}
.tg-form-newsletter fieldset button{
    right:0;
    bottom:0;
    z-index:2;
    color:#999;
    padding:0 15px 0 10px;
    background:none;
    line-height:44px;
    position:absolute;
}
.tg-form-newsletter fieldset input:first-child{ margin:0 0 10px;}
.tg-form-newsletter fieldset input:focus{ border-color:#0D344D;}
.tg-footerbar{
    padding:15px 0;
    background:#2b2933;
}
.tg-footerbar .tg-copyright{
    color:#999;
    display:block;
    text-align:center;
}
.tg-footer-info [class^="col-"] + [class^="col-"]:after{
    left:0;
    bottom:0;
    content:'';
    width:1px;
    height:68%;
    background:#999;
    position:absolute;
}
/*=============================================
            Version Two
=============================================*/
.tg-header.tg-version-two.affix{
    background:rgba(38, 12, 77, 0.70);
    border:0;
}
.tg-header.tg-version-two .tg-nav .navbar-header button,
.tg-header.tg-version-two .tg-addnavs ul li a{ color:#fff;}
.tg-header.tg-version-two .tg-addnavs > ul:after,
.tg-header.tg-version-two .tg-addnavs > ul > li + li:after{ background:#fff;}
.tg-home-slider.tg-version-two figure{ background-position: left bottom ;}
.tg-slidersearch{
    top:0;
    left:0;
    z-index:2;
    color:#fff;
    width:100%;
    height:100%;
    position:absolute;
    display:flex;
    align-items:center;
    align-content:center;
    justify-content:center;
    flex-direction:column;
}
.tg-slidersearch form{
    width:100%;
    float:left;
    border-radius: 10px;
}
.tg-slidersearch form fieldset{
    border:0;
    margin:0;
    padding:0;
    width:100%;
    float:left;
}
.tg-slidersearch form .form-control{
    width:100%;
    /*
    height:120px;
    font-size:80px;*/
    font-weight:300;
    /*padding-top:0;
    padding-bottom:0;*/
    line-height:120px;
    border-color:#fff;
    /*color:#fff !important;*/
    /*margin:0 0 35px;*/
}
.tg-slidersearch form .form-control:focus{ border-color:#fff;}
.tg-slidersearch form .form-control:focus::-moz-placeholder,
.tg-slidersearch form .form-control::-moz-placeholder{ color:#fff;}
.tg-slidersearch form .form-group{
    /*width:100%;
    float:left;
    margin:0;*/
    width: 40%;
}
.tg-slidersearch form .form-group .tg-select{
    float:right;
    border:1px solid #fff;
}
.tg-slidersearch form .form-group .tg-select:after{ content:'\f0c9';}
.tg-slidersearch form .form-group .tg-select select{
    height:60px;
    padding:0 20px;
    line-height:58px;
    background:none;
    font-size:20px;
    font-weight:normal;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-slidersearch form .form-group .tg-select select option{ background:#0D344D;}
.tg-slidersearch form .form-group p{
    overflow:hidden;
    width:auto;
    margin:0;
    padding:0 40px 0 0;
    float:none;
    text-align:right;
    font-size:40px;
    line-height:60px;
    font-weight:300;
    text-transform:uppercase;
}
.tg-slidersearch form .tg-btn-search{
    top:0;
    right:0;
    width:auto;
    color:#fff;
    height:120px;
}
.tg-slidersearch form .tg-btn-search span{
    display:block;
    font-size:70px;
    line-height:120px;
}
.tg-categories-search.tg-version-two{ margin:0;}
.tg-categories-search.tg-version-two .tg-section-head{ width:auto;}
.tg-categories-search.tg-version-two .swiper-slide{ cursor:default;}
/*=============================================
            Business User
=============================================*/
.tg-business-user{
    color:#fff;
    overflow:hidden;
    position:relative;
}
.tg-business-user:after,
.tg-business-user:before{
    position:absolute;
    font-size:200px;
    line-height:150px;
    color:rgba(151, 150, 156, 0.50);
    font-family: "icomoon" !important;
    z-index:1;
}
.tg-business-user:after{
    content:'\e91e';
    right:-80px;
    bottom:56px;
}
.tg-business-user:before{
    content:'\e91b';
    left:-40px;
    bottom:-20px;
}
.tg-business-user [class^="col-"]{padding:0;}
.tg-business,
.tg-user{
    width:100%;
    float:left;
    text-align:left;
    position:relative;
    padding:80px 15px 80px 115px;
}
.tg-business{
    color:#fff;
    text-align:right;
    background:#0D344D;
    margin: 30px 0 0;
    padding:80px 115px 80px 15px;
}
.tg-business:after,
.tg-user:after{
    top:0;
    content:'';
    height:100%;
    width:9999px;
    position:absolute;
}
.tg-user:after{left:100%;}
.tg-business:after{
    right:100%;
    background:#0D344D;
}
.tg-user:before{
    top:0;
    width:0;
    height:0;
    right:100%;
    content:'';
    position:absolute;
    border-bottom: 317px solid;
    border-left: 30px solid transparent !important;
}
.tg-business:before{
    bottom:0;
    width:0;
    height:0;
    right:0;
    content:'';
    position:absolute;
    border-bottom: 30px solid transparent !important;
    border-right: 30px solid #999;
}
.tg-user{ margin: 0 0 30px;}
.tg-business-user .tg-section-head{ margin:0 0 40px}
.tg-user .tg-section-head h2{ color:#fff;}
.tg-business .tg-section-head:before,
.tg-business .tg-section-head:after{
    left:auto;
    right:0;
}
.tg-business-user ul{
    width:100%;
    float:left;
    list-style:none;
    padding:0 0 30px;
    line-height:30px;
}
.tg-business-user ul li{
    position:relative;
    line-height:inherit;
    list-style-type:none;
}
.tg-business ul li{ padding:0 30px 0 0;}
.tg-user ul li{ padding:0 0 0 30px;}
.tg-business-user ul li:after{
    top:0;
    font-size:16px;
    content:'\f00c';
    position:absolute;
    line-height:inherit;
    font-family: 'FontAwesome';
}
.tg-business-user .tg-business ul li:after{
    right:0;
    color:#fff;
}
.tg-business-user .tg-user ul li:after{
    left:0;
    color:#fff;
}
.tg-business .tg-btn{
    float:right;
    color:#fff;
    background:#0D344D;
    z-index:2;
}
.tg-user .tg-section-head:before,
.tg-user .tg-section-head:after{ background:#fff;}
.tg-user .tg-btn:hover{ color:#0D344D;}
.tg-user .tg-btn:after{ background:#fff;}
/*=============================================
            Featured Listing Version Two
=============================================*/
.tg-featuredplaces.tg-version-two{
    text-align:left;
    position:relative;
    overflow:hidden;
}
.tg-sectionafter{
    overflow:hidden;
    position:relative;
}
.tg-sectionafter:after,
.tg-sectionafter:before{
    top:57%;
    content:'';
    width:9999px;
    height:250px;
    margin:-125px 0 0;
    position:absolute;
    background:#f7f7f7;
}
.tg-sectionafter:after{left:50%;}
.tg-sectionafter:before{ right:50%;}
.tg-featuredlisting-slider{
    width:100%;
    float:left;
    overflow:hidden;
}
.tg-version-two.tg-featuredplaces .tg-section-head{width:auto;}
.tg-version-two .tg-direcPost{ padding:0;}
.tg-version-two .tg-direcPost figure:hover img{ opacity:0.20;}
.tg-version-two .tg-direcPost .tg-featured:after{ border-top: 40px solid #fff;}
.tg-version-two .tg-direcPost figure .tg-box{padding:0;}
.tg-version-two .tg-direcPost figure .tg-box:before{ display:none;}
.tg-version-two .tg-direcPost figure .tg-place-data{
    padding:0;
    bottom:0;
}
.tg-version-two .tg-direcPost figure:hover .tg-place-data {height: 60%;}
.tg-version-two .tg-direcPost figure .tg-place-data address{ margin:0 0 10px;}
.tg-version-two .tg-direcPost figure:hover .tg-place-data .tg-likes {
    left: 0;
    visibility:visible;
    opacity:1;
}
.tg-version-two .tg-direcPost figure:hover .tg-place-data .tg-detail-link{ right:0;}
/*=============================================
            Top Search Version Two
=============================================*/
.tg-version-two .tg-topsearch-post {padding: 15px 0;}
.tg-version-two .tg-rating:after,
.tg-version-two .tg-rating:before{ display:none;}
.tg-version-two .tg-rating{
    padding:0;
    margin:0;
    position:absolute;
    bottom:0;
    right:-100px;
    background:none;
    width:auto;
    opacity:0;
    visibility:hidden;
}
.tg-version-two .tg-likes{
    position:absolute;
    bottom:0;
    left:-50px;
    color:#fff;
    opacity:0;
    visibility:hidden;
    cursor:pointer;
}
.tg-version-two .tg-topsearch-post figure:hover .tg-rating,
.tg-version-two .tg-topsearch-post figure:hover .tg-likes{
    opacity:1;
    visibility:visible;
}
.tg-version-two .tg-topsearch-post figure:hover .tg-rating{ right:0;}
.tg-version-two .tg-topsearch-post figure:hover .tg-likes{ left:0;}
/*=============================================
            Testimonials
=============================================*/
.tg-testimonials{
    padding:80px 0 0;
    position:relative;
}
.tg-message-slider{
    z-index:1;
    overflow:hidden;
    position:relative;
    margin:0 0 0 115px;
}
.tg-message-slider figure{
    float:left;
    margin:0;
    padding:0 15px 0 0;
}
.tg-message-slider figure img{ display:block;}
.tg-message-slider .tg-textbox{
    overflow:hidden;
    padding:80px 0 0;
}
.tg-message-slider .tg-textbox blockquote{
    width:100%;
    float:left;
    border:0;
    margin:0 0 30px;
    padding:0 0 30px;
    font-style:italic;
    font-size:18px;
    line-height:26px;
    color:#0D344D;
    border-bottom:1px solid #999;
}
.tg-message-slider .tg-textbox blockquote q{ quotes:none;}
.tg-message-slider .tg-textbox .tg-author-info{float:left;}
.tg-message-slider .tg-textbox .tg-userfeedback h3,
.tg-message-slider .tg-textbox .tg-author-info h3{
    margin:0 0 4px;
    line-height:18px;
}
.tg-message-slider .tg-textbox .tg-userfeedback{
    float:right;
    text-align:right;
}
.tg-message-slider .tg-textbox .tg-userfeedback .tg-stars{
    width:auto;
    float:right;
    text-align:right;
}
.tg-message-slider .tg-textbox .tg-userfeedback .tg-stars span{width:100%;}
.tg-message-slider .tg-textbox .tg-userfeedback .tg-stars span:after{position:static;}
.tg-authorthumb-slider{
    top:80px;
    left:0;
    z-index:2;
    width:100px;
    height:340px;
    padding:0 15px;
    overflow:hidden;
    position:absolute;
}
.tg-authorthumb-slider .swiper-slide{
    width:70px;
    height:70px;
    cursor:pointer;
    overflow:hidden;
    border-radius:50%;
    border:1px solid #999;
}
/*=============================================
            Blog Post Version Two
=============================================*/
.tg-blogposts.tg-version-two .tg-post-img{
    width:100%;
    margin:0;
    border:1px solid #999;
}
.tg-blogposts.tg-version-two figure{
    width:100%;
    border:0;
}
.tg-blogposts.tg-version-two figure:after,
.tg-blogposts.tg-version-two figure:before{ display:none;}
.tg-blogposts.tg-version-two figure img{
    width:100%;
    height:auto;
}
.tg-blogposts.tg-version-two .tg-postdata{
    border:0;
    background:#f7f7f7;
    padding:30px 15px;
}
.tg-blogposts.tg-version-two .tg-date{
    width:70px;
    height:70px;
    left:auto;
    right:0;
    padding:18px 10px;
}
.tg-date span{
    display:block;
    line-height:14px;
    position:absolute;
    top:11px;
    right:-9px;
    text-transform:uppercase;
    -moz-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    -ms-transform: rotate(-90deg);
    transform: rotate(-90deg);
}
.tg-date span:first-child{
    font-size:34px;
    line-height:34px;
    font-weight:300;
    transform:none;
    position:static;
}
.tg-blogposts.tg-version-two .tg-blogpost:hover .tg-date{ background:#fff;}
/*=============================================
            Recent Places Version Two
=============================================*/
.tg-version-two .tg-recentplace .tg-likes{
    left:auto;
    bottom:15px;
    right:-30px;
    opacity:0;
    visibility:hidden;
}
.tg-version-two .tg-recentplace:hover .tg-likes{
    right:15px;
    opacity:1;
    visibility:visible;
}
.tg-version-two .tg-recentplace .tg-featured{
    top:10px;
    left:10px;
}
/*=============================================
            Header Version Three
=============================================*/
.tg-header.tg-version-three {padding: 16px 80px;}
.tg-header.tg-version-three .tg-nav .navbar-header button,
.tg-header.tg-version-three .tg-addnavs ul li a{}
/*.tg-header.tg-version-three .tg-addnavs > ul:after,
.tg-header.tg-version-three .tg-addnavs > ul > li + li:after{ background:#fff;}
*/
.tg-header.tg-version-three.affix{background:rgba(255, 255, 255, 0.90);}
/*=============================================
            Version Three
=============================================*/
.tg-version-three.tg-slider-wrapper{
    width:100%;
    height:100%;
    padding:80px 80px;
    position:relative;
}
.tg-version-three .tg-home-slider{ border:1px solid #999;}
.tg-version-three .tg-home-slider .swiper-wrapper:after{
    top:0;
    left:0;
    content:'';
    width:100%;
    height:100%;
    position:absolute;
    background:rgba(255,255,255,0.85);
}
.tg-version-three  h1{
    margin:0;
    font-weight:bold;
    font-size:200px;
    line-height:160px;
    text-align:center;
}
.tg-version-three h1 span{
    font-size:30px;
    line-height:30px;
    display:block;
    color:#0D344D;
    padding:0 27px;
    font-weight:normal;
    text-align:left;
}
.tg-version-three  h1 span:last-child{ text-align:right;}
.tg-version-three .tg-form-locationsearch{padding:50px 10% 0;}
.tg-version-three .tg-form-locationsearch fieldset{
    height:60px;
    background:#fff;
    padding:8px 0;
    border:2px solid #0D344D;
}
.tg-version-three .tg-form-locationsearch .form-control{
    width:60%;
    height:40px;
    line-height:40px;
    border:0;
    font-size:14px;
    color:#0D344D !important;
    margin:0;
    font-weight:normal;
    float:left;
    border-right:1px solid #999;
    padding:0 10px;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-version-three .tg-form-locationsearch .form-control::-moz-placeholder{ color:#0D344D;}
.tg-version-three .tg-form-locationsearch .tg-select{width:30%;}
.tg-version-three .tg-form-locationsearch .tg-select select{
    height:40px;
    line-height:40px;
    padding:0 25px;
    color:#999;
    background:none;
    text-transform:capitalize;
}
.tg-version-three .tg-form-locationsearch .tg-select:after,
.tg-version-three .tg-form-locationsearch .tg-select select option{color:#999;}
.tg-version-three .tg-form-locationsearch .tg-select:after{ content:'\f0c9';}
.tg-version-three .tg-form-locationsearch .tg-btn{
    line-height:60px;
    padding:0 28px;
    float:right;
    height:60px;
    margin:-10px -2px -8px 0;
}
.tg-version-three .tg-form-locationsearch .tg-btn span{
    font-size:20px;
    line-height:inherit;
}
.tg-categories-search.tg-version-three {margin: -80px 0 0;}
.tg-categories-search.tg-version-three .tg-section-head{width:auto;}
/*=============================================
            Version Four
=============================================*/
.tg-sliderbox.tg-version-four h1{
    margin:0;
    /*font-size:100px;*/
    font-size:65px;
    line-height:72px;
    text-align:center;
}
.tg-sliderbox.tg-version-four h1 span{color:#fff;;}
.tg-version-four .tg-form-locationsearch{padding:100px 3% 0;}
.tg-version-four .tg-form-locationsearch fieldset{
    height:80px;
    border-bottom:1px solid #0D344D;
}
.tg-version-four .tg-form-locationsearch .form-control{
    width:60%;
    height:80px;
    border:0;
    margin:0;
    float:none;
    font-size:30px;
    line-height:80px;
    padding:0 10px;
    font-weight:normal;
    display:inline-block;
    vertical-align:top;
    color:#0D344D !important;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-version-four .tg-form-locationsearch .form-control::-moz-placeholder{ color:#0D344D;}
.tg-version-four .tg-form-locationsearch .tg-select{
    width:170px;
    float:left;
    border-right:1px solid #0D344D;
}
.tg-version-four .tg-form-locationsearch .tg-select select{
    height:80px;
    line-height:80px;
    padding:0 10px;
    color:#0D344D;
    font-size:18px;
    background:none;
    text-transform:uppercase;
}
.tg-version-four .tg-form-locationsearch .tg-select select option{color:#999;}
.tg-version-four .tg-form-locationsearch .tg-select:after{
    color:#0D344D;
    content:'\f0c9';
}
.tg-slidersearch-two .tg-select select option{color:#fff;}
.tg-slidersearch-two .tg-form-locationsearch .tg-select{border-right-color:#fff;}
.tg-slidersearch-two .tg-form-locationsearch .tg-select select,
.tg-slidersearch-two .tg-form-locationsearch .tg-select:after{color:#fff;}
.tg-slidersearch-two .tg-form-locationsearch fieldset{border-color:#fff;}
.tg-slidersearch-two .tg-form-locationsearch .form-control::-moz-placeholder{color:#fff;}
.tg-version-four .tg-form-locationsearch .tg-btn{
    line-height:60px;
    padding:0 28px;
    float:right;
    height:60px;
    margin:-10px -2px -8px 0;
}
.tg-version-four .tg-form-locationsearch .tg-btn span{
    font-size:20px;
    line-height:inherit;
}
.tg-sliderbox.tg-version-four .tg-slidersearch form .tg-btn-search span,
.tg-sliderbox.tg-version-four .tg-slidersearch form .tg-btn-search{
    /*height:80px;
    line-height:80px;
    font-size: 30px;*/
    height: 50px;
    line-height: 50px;
    font-size: 30px;
    padding: 0 5px;
}
.tg-header.tg-version-four{
    width:100%;
    height:auto;
    float:left;
    position:static;
    padding:25px 50px;
    border:1px solid #999;
    background:rgba(255, 255, 255, 0.70);
    -webkit-box-shadow: 0 0 8px 3px rgba(153, 153, 153, 0.50);
    box-shadow: 0 0 8px 3px rgba(153, 153, 153, 0.50);
}
.tg-version-four.tg-fixednav{
    top:0;
    left:0;
    z-index:4;
    border:0;
    height:auto;
    position:fixed;
    padding:10px 50px;
    border-bottom:3px solid;
}
.tg-categories-search.tg-version-four {margin:0;}
.tg-categories-search.tg-version-four .tg-section-head{width:auto;}
/*=============================================
            Inner Banner
=============================================*/
.tg-innerbanner{
    width:100%;
    float:left;
    position:relative;
}
.tg-banner{
    height:400px;
    padding:100px 0;
    display:flex;
    flex-direction:column;
    align-content:center;
    align-items:center;
    justify-content:center;
}
.tg-banner:after{
    top:0;
    left:0;
    z-index:1;
    content:'';
    width:100%;
    height:100%;
    position:absolute;
    background:rgba(255, 255, 255, 0.80);
}
.tg-banner > div{
    z-index:2;
    position:relative;
}
.tg-innerform-search{
    width:100%;
    float:left;
}
.tg-innerform-search fieldset{
    width:100%;
    float:left;
    margin:0;
    border:0;
    padding:0;
}
.tg-innerform-search fieldset .tg-select{
    width:100%;
    height:48px;
}
.tg-innerform-search fieldset .form-control,
.tg-innerform-search fieldset .tg-select select{
    width:100%;
    height:48px;
    color:#999;
    background:#fff;
    line-height:46px;
    padding:0 20px;
    border:1px solid #999;
    text-transform:capitalize;
}
.tg-innerform-search fieldset .tg-select select option{color:#999;}
.tg-innerform-search fieldset .tg-select:after{
    content:'\f107';
    color:#999;
    z-index:1;
}
.tg-innerform-search fieldset .tg-select select:focus,
.tg-innerform-search fieldset .form-control:focus::-moz-placeholder{color:#0D344D;}
.tg-innerform-search fieldset .tg-select select:focus,
.tg-innerform-search fieldset .form-control:focus{border-color:#0D344D;}
.tg-bannerbar{
    width:100%;
    height:45px;
    bottom:0;
    left:0;
    z-index:3;
    position:absolute;
}
.tg-page-title{
    width:70%;
    float:left;
    height:45px;
    margin:6px 0 0;
    background:#0D344D;
    position:relative;
}
.tg-page-title:after{
    content:'';
    top:0;
    right:100%;
    width:9999px;
    height:100%;
    position:absolute;
    background:#0D344D;
}
.tg-page-title:before{
    content:'';
    top:0;
    left:100%;
    width:0;
    height:0;
    position:absolute;
    border-bottom: 45px solid #0D344D;
    border-right: 32px solid transparent !important;
}
.tg-page-title h1{
    margin:0;
    color:#fff;
    font-size:18px;
    line-height:45px;
}
/*=============================================
            Blog Pages
=============================================*/
.tg-bloggrid .tg-blogpost{ margin:0 0 30px;}
.tg-bloglist{ padding:0 0 30px;}
.tg-bloglist .tg-blogpost .tg-postdata{
    margin:0;
    padding:55px 30px 56px 30px;
}
.tg-bloglistv2 .tg-blogpost{ margin:0 0 30px;}
/*=============================================
            Sidebar
=============================================*/
.tg-sidebar{
    width:100%;
    float:left;
    /*padding:0 0 0 35px;*/
}
.tg-widget{
    width:100%;
    float:left;
    margin:0 0 30px;
    padding:20px;
    background:#f7f7f7;
    border-top:4px solid;
}
.tg-widget form{
    width:100%;
    float:left;
}
.tg-widget form fieldset{
    padding:0;
    margin:0;
    border:0;
    width:100%;
    float:left;
}
.tg-widget form fieldset .form-control{ margin:0 0 10px;}
.tg-widget ul{
    width:100%;
    float:left;
    line-height:50px;
    list-style:none;
    text-transform:capitalize;
}
.tg-widget ul li{
    float:left;
    width:100%;
    margin:0;
    border:0;
    box-shadow:none;
    border-radius:0;
    background:none;
    line-height:inherit;
    list-style-type:none;
}
.tg-widget ul li a{
    color:#0D344D;
    display:block;
    padding:0 20px;
    position:relative;
    line-height:inherit;
}
.tg-widget ul li a i,
.tg-widget ul li a em{
    font-style:normal;
    display:inline-block;
    vertical-align:middle;
}
.tg-widget ul li a i{
    width:23px;
    font-size:16px;
    text-align:left;
}
.tg-widget ul li a:hover{
    color:#fff;
    background:#0D344D;
}
.tg-widget ul li + li a { border-top:1px solid #999;}
.tg-widget.tg-datatype-two ul li a:after,
.tg-widget.tg-datatype ul li a:after{
    top:0;
    right:20px;
    color:#0D344D;
    line-height:50px;
    position:absolute;
    content: attr(data-type);
}
.tg-widget.tg-datatype-two ul li a:after{
    color:#fff;
    margin:15px 0;
    padding:0 10px;
    line-height:20px;
    background:#0D344D;
}
.tg-widget.tg-datatype-two ul li a:hover:after,
.tg-widget.tg-datatype ul li a:hover:after{ color:#fff;}
.tg-widget.tg-widget-flickr ul{
    width:auto;
    float:none;
    margin:-7px;
    clear:both;
    overflow:hidden;
}
.tg-widget.tg-widget-flickr ul li{
    width:25%;
    padding:7px;
}
.tg-widget.tg-widget-flickr ul li a{
    padding:0;
    background:#0D344D;
    border:1px solid #0D344D;
    position:relative;
}
.tg-widget.tg-widget-flickr ul li a i{
    width:35px;
    height:35px;
    line-height:35px;
    text-align:center;
    position:absolute;
    top:50%;
    left:50%;
    border:1px solid #fff;
    border-radius:50px;
    opacity:0;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    -o-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
}
.tg-widget.tg-widget-flickr ul li a:hover i{opacity:1;}
.tg-widget.tg-widget-flickr ul li a img{
    display:block;
    opacity:0.80;
}
.tg-widget.tg-widget-flickr ul li a:hover img{ opacity:0.20;}
.tg-panel-heading{
    width:100%;
    float:left;
}
.tg-panel-heading h4{
    margin:0;
    font-size:14px;
    line-height:inherit;
    text-transform:capitalize;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-panel-heading h4 a:after{
    top:0;
    right:20px;
    content:'+';
    color:#0D344D;
    position:absolute;
    line-height:inherit;
}
.tg-panel .tg-panel-heading:hover h4 a,
.tg-panel.active .tg-panel-heading h4 a{
    color:#fff;
    background:#0D344D;
}
.tg-panel .tg-panel-heading:hover h4 a:after,
.tg-panel.active .tg-panel-heading h4 a:after{
    color:#fff;
    content:'-';
}
.tg-panel-collapse,
.tg-panel-collapse .panel-body,
.tg-panel-collapse .panel-body p{
    width:100%;
    float:left;
    margin:0;
}

.tg-widget .tg-select{
    width:100%;
    float:left;
    margin:0 0 10px;
}
.tg-widget .tg-select:after{
    color:#999;
    content:'\f107';
}
.tg-widget .tg-select select{
    color:#999;
    height:50px;
    background:#fff;
    line-height:48px;
    border:1px solid #e1e1e1;
    text-transform:capitalize;
}
.tg-widget textarea{
    width:100%;
    height:120px;
    resize:none;
    margin:0 0 10px;
}
.tg-widget.tg-discountbanner{
    padding:0;
    border:1px solid #0D344D !important;
}
.tg-discountbanner figure{
    width:100%;
    float:left;
    margin:0;
    position:relative;
}
.tg-discountbanner figure img{
    width:100%;
    height:auto;
    display:block;
    z-index:1;
    position:relative;
}
.tg-discountbanner figcaption{
    top:0;
    left:0;
    width:100%;
    float:left;
    height:100%;
    z-index:2;
    position:absolute;
    text-align:center;
    background: -moz-linear-gradient(top,  rgba(55,53,66,0) 0%, rgba(55,53,66,0) 21%, rgba(55,53,66,0.07) 29%, rgba(55,53,66,0.27) 45%, rgba(55,53,66,0.8) 80%, rgba(55,53,66,0.93) 91%, rgba(55,53,66,1) 100%);
    background: -webkit-linear-gradient(top,  rgba(55,53,66,0) 0%,rgba(55,53,66,0) 21%,rgba(55,53,66,0.07) 29%,rgba(55,53,66,0.27) 45%,rgba(55,53,66,0.8) 80%,rgba(55,53,66,0.93) 91%,rgba(55,53,66,1) 100%);
    background: linear-gradient(to bottom,  rgba(55,53,66,0) 0%,rgba(55,53,66,0) 21%,rgba(55,53,66,0.07) 29%,rgba(55,53,66,0.27) 45%,rgba(55,53,66,0.8) 80%,rgba(55,53,66,0.93) 91%,rgba(55,53,66,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00373542', endColorstr='#0D344D',GradientType=0 );
}
.tg-discountbanner .tg-border-heading{ padding-top:70% ;}
.tg-discountbanner .tg-border-heading:after{
    left:50%;
    margin:0 0 0 -35px;
    background:#fff;
}
.tg-discountbanner .tg-border-heading h3{
    color:#fff;
    font-size:22px;
    line-height:22px;
}
.tg-widget-user .tg-dp{
    float:left;
    margin:0 20px 0 0;
    border:1px solid #0D344D;
}
.tg-widget-user .tg-dp a{ display:block;}
.tg-widget-user .tg-dp a img{ display:block;}
.tg-widget-user .tg-border-heading{
    width:auto;
    margin:15px 0;
}
.tg-widget.tg-widget-categories.tg-datatype-two ul li a:hover:after,
.tg-widget.tg-widget-categories.tg-datatype ul li a:hover:after,
.tg-widget.tg-widget-servicehours.tg-datatype-two ul li a:hover:after,
.tg-widget.tg-widget-servicehours.tg-datatype ul li a:hover:after{background:none !important;}
/*=============================================
            Blog Post Detail
=============================================*/
.tg-post-imgbox{
    height:400px;
    position:relative;
    margin:-100px 0 100px;
}
.tg-post-imgbox:after{
    top:0;
    left:0;
    z-index:1;
    content:'';
    width:100%;
    height:100%;
    position:absolute;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0D344D+0,373542+100&0+0,0+21,0.07+29,0.27+45,0.8+80,0.93+91,1+100 */
    background: -moz-linear-gradient(top,  rgba(55,53,66,0) 0%, rgba(55,53,66,0) 21%, rgba(55,53,66,0.07) 29%, rgba(55,53,66,0.27) 45%, rgba(55,53,66,0.8) 80%, rgba(55,53,66,0.93) 91%, rgba(55,53,66,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(55,53,66,0) 0%,rgba(55,53,66,0) 21%,rgba(55,53,66,0.07) 29%,rgba(55,53,66,0.27) 45%,rgba(55,53,66,0.8) 80%,rgba(55,53,66,0.93) 91%,rgba(55,53,66,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(55,53,66,0) 0%,rgba(55,53,66,0) 21%,rgba(55,53,66,0.07) 29%,rgba(55,53,66,0.27) 45%,rgba(55,53,66,0.8) 80%,rgba(55,53,66,0.93) 91%,rgba(55,53,66,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00373542', endColorstr='#0D344D',GradientType=0 ); /* IE6-9 */
}
.tg-authorinfobox{
    bottom:0;
    left:0;
    width:100%;
    z-index:2;
    height:85px;
    position:absolute;
}
.tg-postauthor-info{
    float:left;
    width:100%;
}
.tg-authorinfobox .tg-date{
    width:85px;
    height:85px;
    float:left;
    color:#fff;
    position:static;
    padding:24px 16px;
}
.tg-authorinfobox figure{
    float:left;
    margin:0 30px 0 0;
}
.tg-authorinfobox figure a{ display:block;}
.tg-authorinfobox figure a img{display:block}
.tg-bloger-info{
    float:left;
    position:relative;
    padding:17px 30px 17px 0;
}
.tg-bloger-info:before{
    right:0;
    bottom:0;
    width:0;
    height:0;
    content:'';
    position:absolute;
    border-bottom: 40px solid;
    border-left: 40px solid transparent !important;
}
.tg-bloger-info:after{
    right:4px;
    bottom:3px;
    content:'\f112';
    color:#fff;
    font-size:14px;
    position:absolute;
    font-family: 'FontAwesome';
}
.tg-bloger-info h3{
    margin:0 0 14px;
    line-height:18px;
}
.tg-bloger-info h3 a{
    color:#fff;
    display:block;
}
.tg-bloger-info .tg-postmetadata{
    font-size:16px;
    line-height:19px;
}
.tg-bloger-info .tg-postmetadata li a{ color:#fff;}
.tg-bloger-info  .tg-postmetadata li:after{
    color:#fff;
    margin:0 0 0 -3px;
}

.tg-blogpost-detail{ padding:0 0 80px;}
.tg-blogpost-detail .tg-description{ border-bottom:1px solid #999;}
.tg-blogpost-detail .tg-description p{ margin:0 0 30px;}
.tg-blogpost-detail .tg-description ul{
    overflow:hidden;
    list-style:none;
    margin:0 0 20px;
}
.tg-blogpost-detail .tg-description ul li{
    list-style-type:none;
    padding:0 0 0 58px;
    position:relative;
}
.tg-blogpost-detail .tg-description ul li:after{
    content:'\f00c';
    top:0;
    left:20px;
    position:absolute;
    font-size:16px;
    font-family: 'FontAwesome';
}
.tg-alignleft,
.tg-alignright{
    background:#0D344D;
    border:1px solid #0D344D;
}
.tg-alignleft{
    float:left;
    margin:0 30px 30px 0;
}
.tg-alignright{
    float:right;
    margin:0 0 30px 30px;
}
blockquote{
    border:0;
    width:100%;
    float:left;
    padding:50px;
    quotes:none;
    font-size:18px;
    line-height:22px;
    margin:10px 0 30px;
    background:#f7f7f7;
    text-align:center;
    font-style: italic;
    position:relative;
    overflow:hidden;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
blockquote:after,
blockquote:before{
    z-index:1;
    color:#f0efef;
    font-size:150px;
    line-height:150px;
    position:absolute;
    font-style:normal;
    font-family: 'FontAwesome';
}
blockquote:after{
    content:'\f10d';
    left:0;
    top:-30px;
}
blockquote:before{
    content:'\f10e';
    right:0;
    bottom:-47px;
}
blockquote q{
    width:100%;
    float:left;
    z-index:2;
    position:relative;
}
/*==============================
        Post Comments
==============================*/
.tg-postcomments{
    width:100%;
    float:left;
    margin:0 0 80px;
    border-bottom:1px solid #999;
}
.tg-postcomments > ul{
    width:100%;
    float:left;
    list-style:none;
}
.tg-postcomments > ul > li{
    width:100%;
    float:left;
    padding:0 0 30px;
    list-style-type:none;
}
.tg-postcomment{
    width:100%;
    float:left;
}
.tg-author-img{
    float:left;
    overflow:hidden;
    position:relative;
    margin:0 -100px 0 0;
}
.tg-author-img figure{
    float:left;
    z-index:1;
    margin:0;
    position:relative;
    background:#0D344D;
    border:1px solid #0D344D;
}
.tg-author-img figure:before{
    top:-1px;
    left:0;
    content:'';
    width:200px;
    height:0;
    z-index:2;
    position:absolute;
    border-right:31px solid #0D344D;
    border-top:180px solid transparent;
}
.tg-author-img figure:after{
    top:0;
    left:1px;
    content:'';
    width:200px;
    height:0;
    z-index:3;
    position:absolute;
    border-right:30px solid #fff;
    border-top:180px solid transparent;
}
.tg-author-img figure img{
    width:100%;
    height:auto;
    display:block;
}
.tg-commentdata {
    border: 1px solid #999;
    margin: 40px 0 0;
    overflow: hidden;
    padding: 10px 10px 10px 110px;
    position: relative;
}
.tg-commentdata h3{
    float:left;
    margin:0 10px 15px 0;
    line-height:18px;
}
.tg-commentdata .tg-description p{ margin:0;}
.tg-btn-replycomment{
    float:right;
    color:#0D344D;
    font-size:14px;
    line-height:14px;
    position:relative;
    padding:0 0 0 20px;
    text-transform:uppercase;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-btn-replycomment:after{
    top:-2px;
    left:0;
    content:'\f01e';
    font-size:16px;
    line-height:16px;
    position:absolute;
    font-style:normal;
    font-family: 'FontAwesome';
}
/*==============================
        Post Comment Form
==============================*/
.tg-form-postcomment{
    width:100%;
    float:left;
}
.tg-form-postcomment form{
    width:100%;
    float:left;
}
.tg-form-postcomment form fieldset{
    border:0;
    padding:0;
}
.tg-form-postcomment form fieldset .form-group{ margin-bottom:10px;}
.tg-form-postcomment form fieldset textarea{
    width:100%;
    height:180px;
    resize:none;
}
/*=============================================
            Packages
=============================================*/
.tg-packages{
    width:100%;
    float:left;
}
.tg-package{
    width:100%;
    float:left;
    padding:30px;
    background:#fff;
    min-height:580px;
    text-align:center;
    border:1px solid #999;
}
.tg-package:hover{
    color:#fff;
    background:#0D344D;
    border-color:#0D344D;
}
.tg-package h3{
    margin:0 0 5px;
    font-size:27px;
    line-height:22px;
}
.tg-package h4{
    margin:0 0 5px;
    font-size:80px;
    line-height:57px;
    position:relative;
}
.tg-package:hover h3,
.tg-package:hover h4{color:#fff;}
.tg-package h4 sub{
    bottom:2px;
    font-size:40px;
    line-height:40px;
}
.tg-package.tg-silver h4,
.tg-package.tg-yearly h4{ margin:0;}
.tg-package .tg-subtitle{
    display:block;
    padding:0 0 30px;
}
.tg-package .tg-subtitle,
.tg-package tg-pkglimit{
    width:100%;
    float:left;
    padding:0 0 30px;
}
.tg-package tg-pkglimit{padding:0;}
.tg-package .tg-stars{
    width:116px;
    clear:both;
    float:none;
    height:20px;
    font-size:20px;
    margin:0 auto 30px;
}
.tg-package .tg-stars:before,
.tg-package .tg-stars span:after{font-size:20px;}
.tg-package ul{
    width:100%;
    float:left;
    padding:0 0 30px;
    list-style:none;
    line-height:24px;
}
.tg-package ul li{
    padding:7px 0;
    list-style-type:none;
    line-height:inherit;
}
.tg-package .tg-btnbox{
    width:100%;
    float:left;
}
.tg-package .tg-btn{ clear:both;}
.tg-package:hover .tg-btn{
    color:#0D344D;
    background:#fff;
}
.tg-package:hover .tg-btn:hover{ color:#fff;}
/*=============================================
        Inner Page Featured Listing
=============================================*/
.tg-mapandfurlist{
    width:100%;
    float:left;
    z-index:2;
    height:650px;
    position:relative;
    background:#f7f7f7;
    margin:-100px 0 100px;
}
.tg-mapandfurlist .tg-section-head{width:auto;}
.tg-mapandfurlist > [class*="col-"],
.tg-mapandfurlist > [class^="col-"]{
    height:100%;
    padding:0;
    position:relative;
}
.tg-map iframe,
.tg-mapandfurlist .tg-map{
    width:100%;
    float:left;
    height:100%;
    position:relative;
}
.tg-map .tg-btnbox{
    right:0;
    bottom:0;
    overflow:hidden;
    text-align:right;
    position:absolute;
}
.tg-map .tg-btnbox span{
    clear:both;
    display:block;
    overflow:hidden;
}
.tg-map .tg-btnbox a{
    width:60px;
    float:right;
    color:#fff;
    height:30px;
    padding:0 20px;
    text-align:left;
    background:#0D344D;
    position:relative;
}
.tg-map .tg-btnbox span:first-child a{margin:0 0 1px;}
.tg-map .tg-btnbox span a em,
.tg-map .tg-btnbox span a i{
    font-size:13px;
    line-height:30px;
    font-style:normal;
    text-align:center;
    display:inline-block;
    vertical-align:middle;
    text-transform:uppercase;
}
.tg-map .tg-btnbox span a i{ width:13px;}
.tg-map .tg-btnbox span a em{
    top:0;
    left:0;
    position:relative;
    padding:0 0 0 10px;
    word-wrap:normal;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-map .tg-btnbox a:hover{ width:100%;}
.tg-map .tg-btnbox span a:hover em{}
.tg-featuredlisting{
    width:100%;
    float:left;
    margin:90px 0;
    padding:0 30px;
    overflow:hidden;
    position:relative;
}
.tg-featuredlist-slider{
    width:100%;
    float:left;
    overflow:hidden;
}
.tg-featuredlist-slider .tg-direcPost{ padding:0;}
.tg-featuredlist-slider .tg-direcPost .tg-box,
.tg-featuredlist-slider .tg-direcPost figcaption{ padding:10px;}
.tg-featuredlist-slider .tg-prev,
.tg-featuredlist-slider .tg-next{top:38px;}
.tg-featuredlist-slider .tg-prev{ right:85px;}
.tg-featuredlist-slider .tg-next{ right:45px;}
/*=============================================
            Search Grid
=============================================*/
.tg-search-result{
    width:100%;
    float:left;
    z-index:2;
    position:relative;
}
.tg-search-result .tg-section-head{ width:auto;}
.tg-sortandview{float:right;}
.tg-form-sortandview {
    width:100%;
    float:left;
}
.tg-form-sortandview fieldset{
    width:100%;
    float:left;
    border:0;
    margin:0;
    padding:0;
}
.tg-form-sortandview .tg-select{
    width: 170px;
    height:40px;
    float: left;
    border:1px solid #999;
}
.tg-form-sortandview .tg-select.tg-ascdsc{
    width:80px;
    margin:0 0 0 10px;
}
.tg-form-sortandview .tg-select:after{
    right:10px;
    content:'\f107';
    color:#999;
}
.tg-form-sortandview .tg-select select{
    width: 100%;
    height: 38px;
    float: left;
    color:#999;
    padding: 5px;
    background:none;
    text-transform:capitalize;
}
.tg-form-sortandview .tg-select select option{color:#999;}
.tg-listing-views{
    float:left;
    list-style:none;
    line-height:40px;
}
.tg-listing-views li{
    float:left;
    padding:0 10px 0 0;
    line-height:inherit;
    list-style-type:none;
}
.tg-listing-views li a{
    width:40px;
    color:#999;
    height:40px;
    display:block;
    text-align:center;
    line-height:inherit;
    border:1px solid #999;
}
.tg-listing-views li a i{
    display:block;
    line-height:40px;
}
.tg-listing-views li.active a,
.tg-listing-views li a:hover{color:#fff;}
.tg-section-head .tg-totalresult{
    width:100%;
    float:left;
    font-size:18px;
    line-height:21px;
    text-transform:capitalize;
}
.tg-search-result .tg-pagination{ padding:30px 0;}
.tg-helpful{
    width:100%;
    float:left;
    position:relative;
    border:1px solid #999;
}
.tg-questionnote{
    width:240px;
    height:60px;
    float:left;
    color:#fff;
    font-size:18px;
    line-height:60px;
    position:relative;
    padding:0 0 0 30px;
    text-transform:uppercase;
    margin:0 60px 0 0;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-questionnote:after{
    top:0;
    left:100%;
    width: 0;
    height: 0;
    content:'';
    position:absolute;
    border-bottom: 60px solid;
    border-right: 30px solid transparent !important;
}
.tg-feebbacknote{
    float:left;
    color:#0D344D;
    font-size:16px;
    line-height:58px;
}
.tg-status{
    float:right;
    padding:14px 0 14px 30px;
    list-style:none;
}
.tg-status li{
    float:left;
    padding:0 20px;
    line-height:30px;
    list-style-type:none;
    border-left:1px solid #999;
}
.tg-status li:first-child{ border:0;}
.tg-status li a{
    color:#0D344D;
    display:block;
    line-height:inherit;
}
.tg-status li a em,
.tg-status li a i{
    font-size:14px;
    font-style:normal;
    display:inline-block;
    vertical-align:middle;
    text-transform:uppercase;
}
.tg-status li a i{ font-size:20px;}
.tg-status li a em{font-family: 'Cabin', Arial, Helvetica, sans-serif;}
/*=============================================
            Left Full Map
=============================================*/
.tg-maparea{
    top:0;
    left:0;
    z-index:1;
    width:100%;
    height:100%;
    position:absolute;
}
.tg-maparea > [class*="col-"],
.tg-maparea > [class^="col-"]{
    padding:0;
    height:100%;
    position:relative;
}
.tg-maparea .tg-map{
    height:100%;
    position:relative;
    margin:0 45px 0 0;
}
/*=============================================
            Search Grid V3
=============================================*/
.tg-sliderbox{
    width:100%;
    float:left;
    height:100%;
    position:relative;
}
.tg-main.tg-search-gridv3{
    width:100%;
    height:100%;
    float:left;
    overflow:hidden;
    padding:0;
    position:relative;
}
.tg-main.tg-search-gridv3 .tg-maparea{
    width:100%;
    float:left;
    position:relative;
}
.tg-main.tg-search-gridv3 .tg-maparea .tg-map{ margin:0;}
.tg-main.tg-search-gridv3 > [class*="col-"],
.tg-main.tg-search-gridv3 > [class^="col-"]{
    height:100%;
    position:relative;
}
.tg-main.tg-search-gridv3 .tg-search-result{
    padding:0 30px 0 0;
    overflow:hidden;
}
.tg-main.tg-search-gridv3 .tg-search-result .tg-section-head {margin: 50px 0;}
.tg-main.tg-search-gridv3 .tg-search-result .tg-sortandview{ margin:50px 0 0;}
.tg-main.tg-search-gridv3 .tg-search-result .tg-helpful{ margin:0 0 100px;}
/*=============================================
            Search List
=============================================*/
.tg-direcPost.tg-full{ padding:0;}
.tg-direcPost.tg-full + .tg-direcPost.tg-full{ padding:30px 0 0;}
.tg-direcPost.tg-full figure{ border:0;}
.tg-direcPost.tg-full .tg-direcPost-data { padding: 30px;}
.tg-direcPost.tg-full .tg-direcPost-data .tg-description{padding:0 0 32px;}
/*=============================================
            Search Not Found
=============================================*/
.tg-notfoundbox{
    width:100%;
    float:left;
    margin:0 0 30px;
    background:#f6f6f6;
}
.tg-iconbox{
    color:#fff;
    float:left;
    width:170px;
    height:170px;
    font-size:70px;
    line-height:170px;
    text-align:center;
    background:#0D344D;
}
.tg-msgbox{
    padding:48px 38px;
    overflow:hidden;
}
.tg-notfoundbox .tg-msgbox .tg-description p{margin:0;}
/*=============================================
            Search Detail
=============================================*/
.tg-direcPost-detail.tg-mapandfurlist {
    height:635px;
    padding:0;
    margin:-100px 0 0;
}
.tg-direcPost-detail .tg-productitem-slider{
    margin:0;
    padding:0;
}
.tg-productitem-slider .tg-direcPost{ padding:0;}
.tg-productitem-slider .tg-direcPost .tg-box:before{ display:none;}
.tg-productitem-slider .tg-place-data,
.tg-productitem-slider figure:hover .tg-place-data{height:40px;}
.tg-productitem-slider figure:hover img{ opacity:1;}
.tg-productitem-slider .tg-direcPost figure{ border:0;}
.tg-user-info,
.tg-direcPost-info{
    width:100%;
    float:left;
    height:350px;
    padding:100px 0;
    margin:0 0 100px;
    background:#f7f7f7;
}
.tg-photogallery-slider.tg-photogallery figure {overflow:hidden;}
.tg-photogallery-slider.tg-photogallery figure figcaption {
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 2;
}
.tg-photogallery-slider .tg-direcPost-links {
    width: 100%;
    position: absolute;
    top: 50%;
    left: 100%;
    list-style: none;
    margin: -20px 0 0;
    overflow: hidden;
    text-align: center;
}
.tg-photogallery-slider .tg-direcPost-links li a {
    border: 1px solid #fff;
    border-radius: 50%;
    color: #fff;
    display: block;
    font-size: 16px;
    line-height: 38px;
    position: relative;
}
.tg-photogallery-slider .tg-direcPost-links li a:after {
    background: #fff;
    border-radius: 50%;
    content: "";
    height: 0;
    left: 50%;
    opacity: 0;
    position: absolute;
    top: 50%;
    visibility: hidden;
    width: 0;
}
.tg-photogallery-slider .tg-direcPost-links li a span {
    display: block;
    line-height: inherit;
    position: relative;
    z-index: 1;
}
.tg-photogallery-slider .tg-direcPost-links li a:after {
    background: #fff;
    border-radius: 50%;
    content: "";
    height: 0;
    left: 50%;
    opacity: 0;
    position: absolute;
    top: 50%;
    visibility: hidden;
    width: 0;
}
.tg-photogallery-slider .tg-direcPost-links li a:hover:after {
    height: 100%;
    left: 0;
    opacity: 1;
    top: 0;
    visibility: visible;
    width: 100%;
}
.tg-photogallery-slider.tg-photogallery figure:hover .tg-direcPost-links {
    left: 0;
    opacity: 1;
    visibility: visible;
}
.tg-photogallery-slider .tg-direcPost-links li a:hover span{color:#0D344D;}
.tg-direcPost-info .tg-section-head{ width:auto;}
.tg-direcPost-info .tg-section-head h2{ margin:0 0 10px;}
.tg-section-head .tg-starsbox{
    margin:0;
    padding:0;
    text-align:left;
}
.tg-section-head .tg-starsbox:after,
.tg-section-head .tg-starsbox:before{ display:none;}
.tg-section-head .tg-starsbox em{
    font-size:18px;
    line-height:21px;
}
.tg-section-head .tg-starsbox em,
.tg-section-head .tg-starsbox .tg-stars{
    float:none;
    font-style:normal;
    display:inline-block;
    vertical-align:middle;
}
.tg-contact-info{
    width:100%;
    float:left;
    list-style:none;
    font-size:16px;
    line-height:19px;
}
.tg-contact-info > li{
    width:25%;
    float:left;
    padding:0 15px 0 0;
    line-height:inherit;
    list-style-type:none;
}
.tg-contact-info li h4{
    margin:0 0 10px;
    line-height:16px;
}
.tg-contact-info li span{display:block;}
.tg-contact-info li span a{ color:#0D344D;}
.tg-contact-info li address{
    margin:0;
    font-style:normal;
}
.tg-servicesbox{
    width: 270px;
    float:right;
    padding:20px 0 0;
}
.tg-services-nav{
    width:100%;
    float:left;
    min-width:270px;
    padding:0 70px 0 0;
    position: relative;
}
.tg-services-nav ul{
    width:100%;
    float:left;
    list-style:none;
    line-height:58px;
}
.tg-servicesbox ul li + li{ margin:0 0 0 10px;}
.tg-servicesbox ul li{
    float:left;
    list-style-type:none;
}
.tg-servicesbox ul li a{
    z-index:1;
    width:60px;
    height:60px;
    color:#0D344D;
    display:block;
    overflow:hidden;
    line-height:58px;
    border-radius:50%;
    text-align:center;
    position:relative;
    border:1px solid #0D344D;
}
.tg-servicesbox ul li a:hover{ color:#fff;}
.tg-servicesbox ul li a:after{
    top:50%;
    left:50%;
    width:0;
    height:0;
    content:'';
    opacity:0;
    display:block;
    visibility:hidden;
    position:absolute;
    border-radius:50%;
}
.tg-servicesbox ul li a:hover:after{
    top:0;
    left:0;
    opacity:1;
    width:100%;
    height:100%;
    visibility:visible;
}
.tg-servicesbox ul li a span{
    z-index:2;
    font-size:25px;
    position:relative;
    line-height:inherit;
}
.tg-direcPost-detail{
    padding:0 0 50px;
    margin:0 0 30px;
    border-bottom:1px solid #999;
}
.tg-direcPost-share{
    width:100%;
    float:left;
    margin:0 0 30px;
    position:relative;
    background:#f7f7f7;
    padding:10px 25px 10px 10px;
}
.tg-sharelink{
    right:0;
    bottom:0;
    width:40px;
    height:40px;
    z-index:2;
    display:block;
    position:absolute;
}
.tg-sharelink:before,
.tg-sharelink:after{
    right:0;
    bottom:0;
    color:#fff;
    content:'';
    position:absolute;
}
.tg-sharelink:before{
    border-bottom: 40px solid;
    border-left: 40px solid transparent !important;
}
.tg-sharelink:after{
    right:3px;
    bottom:3px;
    content:'\f064';
    font-size:14px;
    font-family: 'FontAwesome';
}
.tg-product-logo{
    float:left;
    margin:0 30px 0 0;
}
.tg-product-logo a,
.tg-product-logo a img{ display:block;}
.tg-direcPost-share .tg-box{
    width:auto;
    padding:28px 0;
    overflow:hidden;
    text-align:left;
}
.tg-direcPost-share .tg-box:before{ display:none;}
.tg-direcPost-share .tg-box .tg-description p{ margin:0;}
.tg-photogallerybox{
    width:100%;
    float:left;
    margin:0 0 110px;
    padding:30px 26px;
    background:#f7f7f7;
    position:relative;
}
.tg-photogallerybox:after{
    left:0;
    content:'';
    bottom:-30px;
    height:1px;
    width:100%;
    background:#999;
    position:absolute;
}
.tg-photogallerybox .tg-border-heading{width:auto;}
.tg-photogallery-slider{
    width:100%;
    float:left;
    overflow:hidden;
}
.tg-photogallery figure{
    width:100%;
    float:left;
    margin:0;
    position:relative;
    background:#0D344D;
    border:1px solid #0D344D;
}
.tg-photogallery figure img{
    display:block;
    width:100%;
    height:auto;
    z-index:1;
    opacity:0.80;
    position:relative;
}
.tg-photogallery figure:hover img{ opacity:0.20;}
.tg-photogallery figure figcaption{
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:2;
    position:absolute;
}
.tg-photogallery figure:hover .tg-direcPost-links li {
    left:0;
    opacity:1;
    visibility:visible;
}
.tg-photogallery-slider .tg-prev,
.tg-photogallery-slider .tg-next{top:50px;}
.tg-photogallery-slider .tg-prev{right: 70px;}
.tg-photogallery-slider .tg-next{right: 30px;}
.tg-form-postcomment.tg-direcPost-detail textarea,
.tg-form-postcomment.tg-direcPost-detail .form-control{border-color:#999;}
.tg-form-postcomment.tg-direcPost-detail textarea:focus,
.tg-form-postcomment.tg-direcPost-detail .form-control:focus{border-color:#0D344D;}
.tg-services-ratingbox{
    padding:20px;
    margin:0 0 0 10px;
    min-height:360px;
    overflow:hidden;
    border:1px solid #999;
}
.tg-service-rating{
    width:100%;
    float:left;
    z-index:1;
    list-style:none;
    position:relative;
}
.tg-service-rating:before{
    top:0;
    left:17px;
    width:1px;
    height:100%;
    z-index:-1;
    content:' ';
    background:#999;
    position:absolute;
}
.tg-service-rating li{
    width:100%;
    float:left;
    position:relative;
    padding-left: 40px;
    list-style-type:none;
}
.tg-service-rating li + li{ margin-top:20px;}
.tg-service-rating li em{
    color:#999;
    float:left;
    z-index:1;
    font-size:14px;
    line-height:34px;
    font-style:normal;
    position:relative;
    text-transform:capitalize;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-srate{
    top:0;
    left:0;
    width:34px;
    height:34px;
    z-index:2;
    overflow:hidden;
    position:absolute;
    background:#fff;
}
.tg-srate .tg-holder{
    width:200px;
    float:left;
}
.tg-srate .tg-holder span{
    color:#999;
    width:34px;
    height:34px;
    float:left;
    display:block;
    cursor:pointer;
    overflow:hidden;
    line-height:32px;
    border-radius:50%;
    text-align:center;
    background:#f7f7f7;
    border:1px solid #999;
}
.tg-srate .tg-holder span + span{ margin:0 0 0 5px;}
.tg-srate .tg-holder span:hover{
    color:#ffbc16;
    background:#0D344D;
    border-color:#0D344D;
}
.tg-srate:hover .tg-holder,
.tg-srate:hover{ width:100%;}
.tg-user-detail .tg-srate:hover .tg-holder,
.tg-user-detail .tg-srate:hover{ width:34px;}
.tg-user-detail .tg-service-rating li:hover em{color:#0D344D;}
.tg-user-detail .tg-service-rating li:hover span{
    background: #0D344D;
    border-color: #0D344D;
    color: #ffbc16;
}
/*=============================================
            Search Detail
=============================================*/
.tg-user-info{
    height:auto;
    padding:0;
    position:relative;
    margin:-100px 0 100px;
}
.tg-userProfile-img{
    width:100%;
    float:left;
    margin:0;
    border:1px solid #0D344D;
}
.tg-userProfile-img img{display:block;}
.tg-user-info .tg-contact-info > li{width:33.33%;}
.tg-user-info .tg-contact-info > li:nth-child(-n+3){
    min-height:90px;
    padding:0 0 40px;
}
.tg-user-info .tg-socialicons{
    width:100%;
    float:left;
    margin:0;
    padding:14px 0 0;
    line-height:30px;
}
.tg-user-info .tg-socialicons li + li{ margin:0 0 0 5px;}
.tg-user-info .tg-socialicons li{
    padding:0;
    line-height:inherit;
}
.tg-user-info .tg-socialicons li a{
    width:30px;
    height:30px;
    display:block;
    background:#325c94;
    line-height:inherit;
}
.tg-user-info .tg-socialicons li.twitter a{background:#00abdc;}
.tg-user-info .tg-socialicons li.pinterest a{background:#d9031f;}
.tg-user-info .tg-socialicons li.dribbble a{background:#fa4086;}
.tg-user-info .tg-socialicons li a:hover{ color:#fff;}
.tg-user-info .tg-socialicons li a i{ line-height:inherit;}
.tg-user-listing{
    width:100%;
    float:left;
    margin: 0 0 110px;
    position:relative;
}
.tg-user-listing:after {
    left: 0;
    width: 100%;
    content: "";
    height: 1px;
    bottom: -30px;
    background: #999;
    position: absolute;
}
/*=============================================
            Dashboard
=============================================*/
.tg-dashboard{
    width:100%;
    float:left;
}
.tg-radarsupport{
    width:100%;
    float:left;
    padding:30px;
    background:#f7f7f7;
}
.tg-sectionborder{
    width:100%;
    float:left;
    margin:0 0 60px;
    position:relative;
}
.tg-sectionborder:before{
    left:0;
    content:'';
    width:100%;
    height:1px;
    bottom:-30px;
    position:absolute;
    border-bottom:1px solid #999;
}
.tg-radarsupport figure{
    float:left;
    margin:0 40px 0 0;
}
.tg-radarsupport figure a{ display:block;}
.tg-radarsupport figure a img{ display:block;}
.tg-radarcontact-info{
    padding:15px 0;
    overflow:hidden;
}
.tg-contact-info.tg-version-two{
    font-size:14px;
    line-height:17px;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-contact-info.tg-version-two li{
    width:100%;
    padding:0;
}
.tg-contact-info.tg-version-two li + li{ padding:5px 0 0;}
.tg-contact-info.tg-version-two li i {
    width:25px;
    float:left;
    line-height:17px;
}
.tg-contact-info.tg-version-two li address,
.tg-contact-info.tg-version-two li span,
.tg-contact-info.tg-version-two li a{
    float:left;
    font-size:inherit;
    line-height:inherit;
}
/*==========================
        Performance
==========================*/
.tg-performance{ background:#f7f7f7;}
.tg-form-performance{
    width:100%;
    float:left;
}
.tg-form-performance fieldset{
    width:100%;
    float:left;
    padding:0;
    margin:0;
    border:0;
    background:#f7f7f7;
}
.tg-form-performance fieldset h3{
    float:left;
    margin:0;
    color:#fff;
    font-size:18px;
    line-height:18px;
}

.tg-filterbyperiod{
    width:100%;
    float:left;
    padding:30px;
    background:#0D344D;
}
.tg-form-performance fieldset .tg-filterbyperiod h3{ margin:16px 0;}
.tg-calendarbox{
    float:right;
    position:relative;
}
.datepicker.datepicker-dropdown{
    width:250px;
    margin:0;
    padding:0;
    border-radius:0;
    border:0;
}
.tg-calendarbox:after{
    top:50%;
    left:50%;
    width:8px;
    height:1px;
    content:'';
    background:#fff;
    position:absolute;
    margin:0 0 0 -4px;
}
.tg-calendarbox .form-control{
    width:150px;
    float:left;
    padding-top:0;
    padding-bottom:0;
}
.tg-calendarbox .form-control:first-child{ margin:0 40px 0 0;}
.tg-filterby{
    width:100%;
    float:left;
    color:#fff;
    padding:20px 30px;
}
.tg-filterbycate{
    float:right;
    font-size:14px;
    line-height:14px;
    text-transform:uppercase;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-filterbycate ul{
    width:100%;
    float:left;
    list-style:none;
    line-height:inherit;
}
.tg-filterbycate ul li:last-child{ padding-right:0;}
.tg-filterbycate ul li{
    float:left;
    padding:0 22px;
    position:relative;
    line-height:inherit;
    list-style-type:none;
}
.tg-filterbycate ul li + li:before{
    bottom:2px;
    left:-2px;
    width:4px;
    height:4px;
    content:'';
    background:#fff;
    border-radius:50%;
    position:absolute;
}
.tg-filterbycate ul li a{
    color:#fff;
    display:block;
}
.tg-performancechart{
    width:100%;
    float:left;
    height:410px;
    padding: 30px;
}
.chart_div{
    width:100% !important;
    float:left;
    overflow:hidden;
}
/*.tg-performancechart a.canvasjs-chart-credit { display:none;}*/
/*==========================
        Listing Reviews
==========================*/
.tg-listingreviewsbox{
    width:100%;
    float:left;
}
.tg-form-listingreviews{
    width:100%;
    float:left;
}
.tg-box-head{
    color:#fff;
    width:100%;
    float:left;
    padding:30px;
    background:#0D344D;
}
.tg-box-head h3{
    float:left;
    margin:16px 0;
    color:#fff;
    font-size:18px;
    line-height:18px;
}
.tg-form-listingreviews fieldset{
    width:100%;
    float:left;
    margin:0;
    border:0;
    padding:0;
}
.tg-box-head .tg-select{
    width:70%;
    float:right;
    color:#0D344D;
    text-transform:capitalize;
}
.tg-box-head .tg-select:after{
    z-index:1;
    content:'\f107';
    color:#0D344D;
    margin-top:-4px;
}
.tg-box-head .tg-select select{
    width:100%;
    height:50px;
    color:#0D344D;
    background:#fff;
    padding-top:0;
    padding-bottom:0;
    line-height:50px;
    text-transform:capitalize;
}
.tg-box-head .tg-select select option{ color:#0D344D;}
.tg-overallrank-reviews{
    width:100%;
    float:left;
    padding:30px;
    background:#f7f7f7;
}
.tg-overallrank{
    width:100%;
    float:left;
}
.tg-starsranks{
    width:112px;
    clear:both;
    margin:0 auto;
    padding:0 0 20px;
}
.tg-starsranks h3{
    clear:both;
    margin:0;
    line-height:18px;
}
.tg-starsranks .tg-stars{
    width:100%;
    font-size:20px;
    line-height:20px;
    padding:0 0 5px;
}
.tg-starsranks .tg-stars:before,
.tg-starsranks .tg-stars span,
.tg-starsranks .tg-stars span:after{
    height:20px;
    font-size:20px;
    line-height:20px;
}
.tg-overallrank .tg-description{ padding:0 0 20px;}
.tg-overallrank .tg-description p{ margin:0;}
.tg-btn-readmore{
    float:left;
    font-size:14px;
    line-height:17px;
    font-weight:bold;
    text-transform:capitalize;
    text-decoration:underline;
}
.tg-btn-readmore:hover{ text-decoration:none;}
.tg-reviewsbox{
    width:100%;
    float:left;
}
.tg-reviews{
    width:100%;
    float:left;
    height:235px;
    list-style:none;
    margin:0 -15px 0 0;
    padding:0 15px 0 0;
}
.tg-reviews li{
    width:100%;
    float:left;
    list-style-type:none;
}
.tg-reviews li + li{
    margin:30px 0 0;
    padding:30px 0 0;
    border-top:1px solid #ddd;
}
.tg-reviews li figure{
    margin:0 15px 0 0;
    float:left;
    overflow:hidden;
    border:1px solid #0D344D;
}
.tg-reviews li figure a,
.tg-reviews li figure a img{ display:block;}
.tg-reviews li .tg-reviewdata{
    padding:8px 0;
    overflow:hidden;
}
.tg-reviewdata h4{
    float:left;
    margin:0 0 15px;
    line-height:16px;
}
.tg-reviewdata .tg-stars{ float:right;}
.tg-reviewdata .tg-description p{ margin:0;}
.tg-subscriptionbox{
    width:100%;
    float:left;
}
.tg-active-subscription{
    width:100%;
    float:left;
    padding:30px;
    background:#f7f7f7;
}
.tg-renew-subscription{
    width:100%;
    float:left;
    color:#fff;
    padding:30px 17px;
    text-align:center;
    background:#0D344D;
}
.tg-subscriptionbox .tg-renew-subscription h4{
    margin:0;
    color:#fff;
    padding:70px 0 10px;
    position:relative;
}
.tg-subscriptionbox .tg-renew-subscription h4:before{
    top:0;
    left:0;
    width:100%;
    content:'\e908';
    color:#fff;
    height:auto;
    font-size:60px;
    line-height:60px;
    position:absolute;
    font-family: 'icomoon';
}
.tg-subscriptionbox .tg-description{ padding:0 0 20px;}
.tg-subscriptionbox .tg-description p{ margin:0;}
.tg-renew-subscription .tg-btn{
    color:#0D344D;
    background:#fff;
}
.tg-renew-subscription .tg-btn:hover{ color:#fff;}
/*==========================
        Counter
==========================*/
.tg-subscription-counter{
    width:100%;
    float:left;
    margin: 0;
    padding: 0;
    display: block;
    list-style: none;
    text-align: center;
}
.tg-subscription-counter li{
    width: 97px;
    padding: 21px;
    margin: 0 5px;
    background: #fff;
    text-align: center;
    vertical-align: top;
    display: inline-block;
    border: 1px solid #ddd;
}
.tg-subscription-counter li span{
    display: block;
    color: #0D344D;
    position: relative;
    font: 300 30px/30px 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-subscription-counter li p{
    margin: 0 0 10px;
    color: #0D344D;
    text-transform:uppercase;
    font: 400 16px/16px 'Cabin', Arial, Helvetica, sans-serif;
}
/*=============================================
            Dashboard Profile
=============================================*/
.tg-form-profile{
    width:100%;
    float:left;
}
.tg-form-profile fieldset{
    width:100%;
    float:left;
    padding:0;
    border:0;
}
.tg-form-profile fieldset .tg-btn{ padding:0;}
.tg-form-profile textarea::-moz-placeholder,
.tg-form-profile .form-control::-moz-placeholder{ color:#0D344D;}
.tg-form-profile textarea,
.tg-form-profile .form-control{ border-color:#999;}
.tg-form-profile textarea:focus,
.tg-form-profile .form-control:focus{ border-color:#0D344D;}
.tg-form-profile textarea{
    width:100%;
    height:220px;
    resize:none;
    margin:0 0 30px;
}
.tg-userdp{
    width:100%;
    float:left;
    padding:30px;
    margin:0 0 30px;
    background:#f7f7f7;
}
.tg-userdp figure{
    margin:0 30px 0 0;
    float:left;
}
.tg-userdp figure a{
    display:block;
    position:relative;
}
.tg-userdp figure a:after{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    width:100%;
    height:100%;
/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#999999+38,000000+99&0+36,1+100 */
background: -moz-linear-gradient(top, rgba(153,153,153,0) 36%, rgba(153,153,153,0.03) 38%, rgba(0,0,0,0.98) 99%, rgba(0,0,0,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top, rgba(153,153,153,0) 36%,rgba(153,153,153,0.03) 38%,rgba(0,0,0,0.98) 99%,rgba(0,0,0,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom, rgba(153,153,153,0) 36%,rgba(153,153,153,0.03) 38%,rgba(0,0,0,0.98) 99%,rgba(0,0,0,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00999999', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
}
.tg-userdp figure a,
.tg-userdp figure a img{display:block;}
.tg-userdp-description{
    padding:14px 0;
    overflow:hidden;
}
.tg-service-hours,
.tg-amenities{
    width:100%;
    float:left;
    padding:30px;
    margin:0 0 30px;
    background:#f7f7f7;
}
.tg-service-hours{ margin:0;}
.tg-service-hours .form-group{
    width:100%;
    float:left;
}
.tg-service-hours .form-group .tg-checkbox{
    margin:17px 0;
    font-size:16px;
    line-height:16px;
    text-transform:uppercase;
}
.tg-service-hours .form-group .tg-checkbox input[type="checkbox"] + label:before{ top:3px;}
/*=============================================
            Dashboard Security
=============================================*/
.tg-formarea{
    width:100%;
    float:left;
    padding:30px;
    background:#f7f7f7;
}
.tg-formarea form,
.tg-formarea form fieldset{
    width:100%;
    float:left;
    margin:0;
    padding:0;
    border:0;
}
.tg-formarea .form-group{
    width:100%;
    float:left;
}
.tg-formarea .form-control{border-color:#999;}
.tg-formarea .form-control:focus{ border-color:#0D344D;}
.tg-formarea .form-control::-moz-placeholder{color:#0D344D;}
/*=============================================
            Dashboard Privacy
=============================================*/
.tg-privacyformarea{
    width:100%;
    float:left;
}
.tg-form-privacy{
    width:100%;
    float:left;
}
.tg-form-privacy fieldset{
    width:100%;
    float:left;
    border:0;
    padding:0;
    margin:0;
}
.tg-form-privacy fieldset .tg-border-heading{ width:auto;}
.tg-form-privacy fieldset > .tg-iosstylcheckbox{ margin:10px 0 0;}
.tg-form-privacy fieldset .form-group{
    width:100%;
    float:left;
}
.tg-form-privacy fieldset .form-group .tg-privacy{
    width:100%;
    float:left;
    padding:20px 30px;
    background:#f7f7f7;
}
.tg-privacy-name{
    float:left;
    font-size:14px;
    line-height:17px;
    padding:4px 20px 3px 0;
    text-transform:capitalize;
}
/*=============================================
            Dashboard Listing
=============================================*/
.tg-listingarea{
    width:100%;
    float:left;
}
.tg-form-listing{
    width:100%;
    float:left;
    padding:30px;
    margin:0 0 30px;
    background:#f7f7f7;
}
.tg-form-listing fieldset{
    padding:0;
    border:0;
}
.tg-form-listing fieldset .form-control{
    z-index:1;
    border-color:#999;
    position:relative;
    padding:15px 40px 15px 20px;
}
.tg-form-listing fieldset a {
    position: absolute;
    top: 0;
    right: 30px;
    z-index: 9;
    color:#999;
    line-height: 50px;
}
.tg-form-listing fieldset .tg-select{
    width:100%;
    float:left;
    color:#999;
}
.tg-form-listing fieldset .tg-select:after{
    z-index:1;
    color:#999;
    content:'\f107';
}
.tg-form-listing fieldset .tg-select select{
    background:none;
    line-height:48;
    height:50px;
    color:#999;
    border:1px solid #999;
    text-transform:capitalize;
}
.tg-form-listing fieldset .tg-select select option{color:#999;}
.tg-form-listing fieldset .tg-btn{ padding:0;}
.tg-listing{
    width:100%;
    float:left;
    padding:0 0 30px;
}
.tg-listing-head{
    width:100%;
    float:left;
    padding:15px;
    color:#fff;
    background:#0D344D;
    text-transform:uppercase;
}
.tg-listing-head .tg-titlebox{
    width:50%;
    float:left;
    padding:15px;
}
.tg-listing-head .tg-titlebox + .tg-titlebox{width:25%;}
.tg-listing-head .tg-titlebox h3{
    margin:0;
    color:#fff;
    font-size:18px;
    line-height:18px;
}
.tg-lists{
    width:100%;
    float:left;
    padding:4px;
}
.tg-list {
    width: 100%;
    float: left;
    padding: 15px;
    border-radius: 10px;
    box-shadow: 0 0 0 1px #A7B5BE;      /* Bleu gris trÃ¨s clair */
}
.tg-list:nth-child(odd) {
    background: #F3f3f3;
    box-shadow: 0 0 0 1px #A7B5BE;      /* Bleu gris trÃ¨s clair */
    border-radius: 10px;
    margin-bottom:5px;
    margin-top:5px;
}
.tg-list .tg-listbox{
    width:50%;
    float:left;
    padding:15px;
}
.tg-listbox:nth-child(2){}
.tg-list .tg-listbox + .tg-listbox{ width:25%;}
.tg-listbox figure{
    float:left;
    margin:0 15px 0 0;
    border:1px solid #0D344D;
}
.tg-listbox figure a{ display:block;}
.tg-listbox figure a img{ display:block;}
.tg-listbox .tg-listdata{overflow:hidden;}
.tg-listbox .tg-listdata h4{
    margin:0 0 10px;
    font-size:16px;
    line-height:16px;
    text-transform:uppercase;
}
.tg-listbox span{ display:block;}
.tg-listbox:nth-child(2) span{
    padding:8px 0;
    text-transform:uppercase;
}
.tg-listbox:nth-child(3){ padding:31px 15px;}
.tg-listbox span strong{
    font-weight:normal;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-btn-list{
    width:40px;
    float:left;
    color:#fff;
    line-height:40px;
    background:#0D344D;
    text-align:center;
}
.tg-listbox .tg-btn-list + .tg-btn-list{ margin:0 0 0 10px;}
.tg-btn-list:hover{ color:#fff;}
.tg-btn-list i{
    display:block;
    line-height:inherit;
    text-align:center;
}
.tg-lists.tg-favorites .tg-listbox:first-child{ width:47%;}
.tg-lists.tg-favorites .tg-listbox:nth-child(2){ width:28%;}
.tg-lists.tg-favorites .tg-listbox:nth-child(2) span{ padding:26px 0;}
/*=============================================
            Dashboard Add List
=============================================*/
.tg-uploadphoto{
    border:0;
    width:230px;
    height:230px;
    float:left;
    position:relative;
    margin:0 30px 0 0;
    background:#0D344D;
}
.tg-uploadphoto a{
    top:0;
    left:0;
    color:#fff;
    width:100%;
    height:100%;
    font-size:50px;
    text-align:center;
    position:absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.tg-uploadphoto a:link,
.tg-uploadphoto a:visited,
.tg-uploadphoto a:active,
.tg-uploadphoto a:focus,
.tg-uploadphoto a:hover{ color:#fff;}
.tg-uploadphoto a:after{
    top:0;
    left:0;
    content:'';
    width:100%;
    height:100%;
    position:absolute;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#0D344D+1,000000+100&0+0,0.75+99 */
    background: -moz-linear-gradient(top,  rgba(55,53,66,0) 0%, rgba(55,53,66,0.01) 1%, rgba(1,1,1,0.75) 99%, rgba(0,0,0,0.75) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  rgba(55,53,66,0) 0%,rgba(55,53,66,0.01) 1%,rgba(1,1,1,0.75) 99%,rgba(0,0,0,0.75) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  rgba(55,53,66,0) 0%,rgba(55,53,66,0.01) 1%,rgba(1,1,1,0.75) 99%,rgba(0,0,0,0.75) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00373542', endColorstr='#bf000000',GradientType=0 ); /* IE6-9 */
}
.tg-uploadphoto a:before{
    bottom:0;
    left:0;
    color:#fff;
    width:100%;
    height:auto;
    z-index:3;
    font-size:14px;
    line-height:50px;
    position:absolute;
    content:attr(data-title);
    text-transform:uppercase;
    font-family: 'Cabin', Arial, Helvetica, sans-serif;
}
.tg-form-addlist{
    width:100%;
    float:left;
}
.tg-form-addlist fieldset{
    width:100%;
    float:left;
    padding:0;
    border:0;
}
.tg-form-addlist fieldset .tg-box-head h3{
    font-size:17px;
    line-height:18px;
}
.tg-form-addlist fieldset .tg-select{ width:100%;}
.tg-form-addlist fieldset .form-control{ border-color:#999;}
.tg-form-addlist fieldset .form-control::-moz-placeholder{ color:#0D344D;}
.tg-boxgrey{
    width:100%;
    float:left;
    padding:30px;
    background:#f7f7f7;
}
.tg-businessdetail{ margin:0 0 30px;}
.tg-businessdetail textarea{
    max-width:430px;
    width:100%;
    height:230px;
    resize:none;
    border-color:#999;
}
.tg-form-addlist fieldset .tg-service-hours,
.tg-form-addlist fieldset .tg-amenities{ margin:0 0 30px;}
.tg-form-addlist fieldset .tg-service-hours .form-group:last-child{ margin:0;}
.tg-list-gallery .tg-uploadphoto{ height:210px;}
.tg-list-gallery .tg-gallery{
    margin:-5px;
    max-width:440px;
    width:100%;
    float:left;
}
.tg-gallery figure{
    width:25%;
    float:left;
    padding:5px;
    margin:0;
    border:0;
}
.tg-gallery figure a{
    display:block;
    border:1px solid #0D344D;
}
.tg-gallery figure a img{
    width:100%;
    height:auto;
    display:block;
}
.tg-productdetail{
    width:100%;
    float:left;
}
.tg-inputbox{
    max-width:430px;
    width:100%;
    float:left;
}
.tg-inputbox .tg-checkbox{ margin:0;}
.tg-paymentoption{
    width:100%;
    float:left;
    height:180px;
    padding:30px;
    cursor:pointer;
    background:#fff;
    text-align:center;
    position:relative;
    border:1px solid #999;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
/*.tg-paymentoption:after{
    top:50%;
    left:50%;
    width:0;
    height:0;
    content:'';
    position:absolute;
}
.tg-paymentoption:hover:after{
    left:0;
    top:0;
    width:100%;
    height:100%;
}
.tg-paymentoption .tg-border-heading{
    position:relative;
    z-index:2;
}*/
.tg-paymentoption .tg-border-heading:after{
    left:50%;
    width:70px;
    margin:0 0 0 -35px;
}
.tg-paymentoption .tg-border-heading h4{ margin:0;}
.tg-paymentoption span{
    width:100%;
    float:left;
    display:block;
    font-size:50px;
    line-height:50px;
    /*position:relative;
    z-index:2;*/
}
.tg-paymentoption:hover h4,
.tg-paymentoption:hover{ color:#fff;}
.tg-paymentoption:hover .tg-border-heading:after{ background:#fff;}
.tg-map div[title=""]{
    padding:0 2px 0 0;
    width:37px !important;
    height:45px !important;
    line-height:28px !important;
    background-size:auto !important;
    background-position:center !important;
}
.infoBox{
    width:258px;
    float:left;
    position:relative;
}
.infoBox:after{
    top:100%;
    left:50%;
    width: 0;
    height: 0;
    content:'';
    position:absolute;
    margin:0 0 0 -14px;
    border-left: 14px solid transparent;
    border-right: 14px solid transparent;
    border-top: 10px solid #0D344D;
}
.infoBox > img{z-index:10;}
.tg-mapbox{
    width:100%;
    float:left;
    overflow:hidden;
    border-radius:0 0 5px 5px;
}
.tg-mapbox figure{
    margin:0;
    width:100%;
    float:left;
    position:relative;
}
.tg-mapbox figure img{ display:block;}
.tg-mapbox figcaption{
    top:0;
    left:0;
    color:#fff;
    width:100%;
    height:100%;
    position:absolute;
    padding:50px 13px 13px;
    background: -moz-linear-gradient(top,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,
                rgba(55,53,66,0) 0%,
                rgba(55,53,66,0) 21%,
                rgba(55,53,66,0.06) 29%,
                rgba(55,53,66,0.23) 42%,
                rgba(55,53,66,0.81) 81%,
                rgba(55,53,66,0.94) 92%,
                rgba(55,53,66,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(
            startColorstr='#00373542',
            endColorstr='#0D344D',
            GradientType=0 ); /* IE6-9 */
}
.tg-mapbox figcaption h4{
    color:#fff;
    font-size:14px;
    line-height:14px;
    text-transform:uppercase;
}
.tg-mapbox figcaption h4 a{ color:#fff;}
.tg-mapbox figcaption address{
    margin:0;
    font-size:14px;
    line-height:17px;
    font-style:normal;
}
.tg-map-controls{
    top:10px;
    left:10%;
    width:100px;
    z-index:2;
    position:absolute;
}
.tg-map-controls span{
    float:left;
    width:30px;
    height:30px;
    color:#fff;
    cursor:pointer;
    font-size:14px;
    line-height:30px;
    text-align:center;
    background:#0D344D;
}
.tg-map-controls span + span{ margin:0 0 0 2px;}
/* =============================================
        404 Page
============================================= */
.tg-404{}
.tg-404 figure{
    width: 100%;
    float: left;
    margin: 0;
}
.tg-404 figure img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-404 .tg-refinesearcharea{
    width:100%;
    float:left;
    padding:30px;
}
.tg-404 .tg-contentbox{
    width:100%;
    float:left;
}
.tg-404 .tg-contentbox .tg-border-heading h2{line-height:36px;}
.tg-404 .tg-refinesearcharea .tg-border-heading:after{background:#fff;}
.tg-404 .tg-refinesearcharea .tg-border-heading.tg-small h2{
    font-size:20px;
    line-height:20px;
    color:#fff;
    margin:0;
}
.tg-404 .tg-description {
    border-bottom: 1px solid #ddd;
    margin: 0 0 30px;
}
.tg-404 .form-refinesearch{
    width: 100%;
    float: left;
}
.tg-404 .form-refinesearch input{
    height: 58px;
}
.tg-refinesearcharea .form-refinesearch fieldset{
    padding:0;
    border:0;
}
.tg-404 .tg-refinesearcharea .tg-btn{color:#fff;}
.tg-404 .tg-refinesearcharea .tg-btn:hover{color:#0D344D;}
.tg-404 .tg-refinesearcharea .tg-btn:after{background:#fff;}
/*=============================================
            Comming Soon
=============================================*/
body.tg-comming-soon .tg-map{
    width:100%;
    height:100%;
    position:absolute;
    left:0;
    top:0;
}
body.tg-comming-soon .tg-map:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.70);
    z-index:3;
}
.tg-commingsoon{
    width:100%;
    float:left;
    height:100%;
    display:flex;
    flex-direction:column;
    align-content:center;
    align-items:center;
    justify-content:center;
}
.tg-commingsoon-content {
    text-align: center;
    position:relative;
    z-index:5;
}
.tg-commingsoon-content h1 {
    margin: 0 0 10px;
    font-size: 60px;
    line-height: 50px;
    color:#fff;
    text-transform: uppercase;
}
.tg-commingsoon-content h2 {
    margin: 0 0 50px;
    text-transform: none;
    font: 400 36px/40px 'Droid', Arial, Helvetica, sans-serif;
    color:#fff;
}
.tg-counterarea{
    float: left;
    width: 100%;
    text-align:center;
}
#comming-countdown{
    list-style: none;
    margin: 0;
    padding: 0;
    display: inline-block;
    text-align: center;
}
#comming-countdown li{
    width: 154px;
    height:154px;
    float:left;
    background: #fff;
    text-align: center;
    margin: 0 15px;
    vertical-align: middle;
    display: inline-block;
    border: 1px solid #ddd;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    align-content:center;
}
#comming-countdown li span{
    display: block;
    color: #505050;
    padding: 0 0 8px;
    margin: 0 0 3px;
    position: relative;
    font: 400 48px/38px 'Cabin', Arial, Helvetica, sans-serif;
}
#comming-countdown li span:before{
    content:'';
    width: 70px;
    left: 50%;
    bottom: 0px;
    height: 1px;
    position: absolute;
    margin: 0 0 0 -35px;
    background: #505050;
}
#comming-countdown li p{
    color: #686868;
    margin: 0;
    font-size: 14px;
    line-height: 20px;
}
#comming-countdown li:last-child span,
#comming-countdown li:last-child p{ color: #fff;}
#comming-countdown li:last-child span:before{ background: #fff;}
/*=============================================
            Preloader
=============================================*/
.preloader-outer {
    background: #fff;
    height: 100%;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;
}
.pin {
    width: 30px;
    height: 30px;
    -webkit-border-radius: 50% 50% 50% 0;
    border-radius: 50% 50% 50% 0;
    position: absolute;
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    left: 50%;
    top: 50%;
    margin: -20px 0 0 -20px;
    -webkit-animation-name: bounce;
    -moz-animation-name: bounce;
    -o-animation-name: bounce;
    -ms-animation-name: bounce;
    animation-name: bounce;
    -webkit-animation-fill-mode: both;
    -moz-animation-fill-mode: both;
    -o-animation-fill-mode: both;
    -ms-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    -o-animation-duration: 1s;
    -ms-animation-duration: 1s;
    animation-duration: 1s;
}
.pin:after {
    content: '';
    width: 14px;
    height: 14px;
    margin: 8px 0 0 8px;
    background: #2f2f2f;
    position: absolute;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.preloader-outerv-2 .pin:after{background:#fff;}
.pulse {
    background: rgba(0,0,0,0.2);
    -webkit-border-radius: 50%;
    border-radius: 50%;
    height: 14px;
    width: 14px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: 11px 0px 0px -12px;
    -webkit-transform: rotateX(55deg);
    -moz-transform: rotateX(55deg);
    -o-transform: rotateX(55deg);
    -ms-transform: rotateX(55deg);
    transform: rotateX(55deg);
    z-index: -2;
}
.pulse:after {
    content: "";
    -webkit-border-radius: 50%;
    border-radius: 50%;
    height: 40px;
    width: 40px;
    position: absolute;
    margin: -13px 0 0 -13px;
    -webkit-animation: pulsate 1s ease-out;
    -moz-animation: pulsate 1s ease-out;
    -o-animation: pulsate 1s ease-out;
    -ms-animation: pulsate 1s ease-out;
    animation: pulsate 1s ease-out;
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -o-animation-iteration-count: infinite;
    -ms-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-box-shadow: 0 0 1px 2px #2dc583;/*#d53a35*/
    box-shadow: 0 0 1px 2px #2dc583;
    -webkit-animation-delay: 1.1s;
    -moz-animation-delay: 1.1s;
    -o-animation-delay: 1.1s;
    -ms-animation-delay: 1.1s;
    animation-delay: 1.1s;
}
.preloader-outerv-2 .pulse:after{
    -webkit-box-shadow: 0 0 1px 2px #260c4d;
    box-shadow: 0 0 1px 2px #260c4d;
}
@-moz-keyframes pulsate {
    0% {
    -webkit-transform: scale(0.1, 0.1);
    -moz-transform: scale(0.1, 0.1);
    -o-transform: scale(0.1, 0.1);
    -ms-transform: scale(0.1, 0.1);
    transform: scale(0.1, 0.1);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
    50% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    }
    100% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
}
@-webkit-keyframes pulsate {
    0% {
    -webkit-transform: scale(0.1, 0.1);
    -moz-transform: scale(0.1, 0.1);
    -o-transform: scale(0.1, 0.1);
    -ms-transform: scale(0.1, 0.1);
    transform: scale(0.1, 0.1);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
    50% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    }
    100% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
}
@-o-keyframes pulsate {
    0% {
    -webkit-transform: scale(0.1, 0.1);
    -moz-transform: scale(0.1, 0.1);
    -o-transform: scale(0.1, 0.1);
    -ms-transform: scale(0.1, 0.1);
    transform: scale(0.1, 0.1);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
    50% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    }
    100% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
}
@keyframes pulsate {
    0% {
    -webkit-transform: scale(0.1, 0.1);
    -moz-transform: scale(0.1, 0.1);
    -o-transform: scale(0.1, 0.1);
    -ms-transform: scale(0.1, 0.1);
    transform: scale(0.1, 0.1);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
    50% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    }
    100% {
    -webkit-transform: scale(1.2, 1.2);
    -moz-transform: scale(1.2, 1.2);
    -o-transform: scale(1.2, 1.2);
    -ms-transform: scale(1.2, 1.2);
    transform: scale(1.2, 1.2);
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    }
}
@-moz-keyframes bounce {
    0% {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transform: translateY(-2000px) rotate(-45deg);
    -moz-transform: translateY(-2000px) rotate(-45deg);
    -o-transform: translateY(-2000px) rotate(-45deg);
    -ms-transform: translateY(-2000px) rotate(-45deg);
    transform: translateY(-2000px) rotate(-45deg);
    }
    60% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    -webkit-transform: translateY(30px) rotate(-45deg);
    -moz-transform: translateY(30px) rotate(-45deg);
    -o-transform: translateY(30px) rotate(-45deg);
    -ms-transform: translateY(30px) rotate(-45deg);
    transform: translateY(30px) rotate(-45deg);
    }
    80% {
    -webkit-transform: translateY(-10px) rotate(-45deg);
    -moz-transform: translateY(-10px) rotate(-45deg);
    -o-transform: translateY(-10px) rotate(-45deg);
    -ms-transform: translateY(-10px) rotate(-45deg);
    transform: translateY(-10px) rotate(-45deg);
    }
    100% {
    -webkit-transform: translateY(0) rotate(-45deg);
    -moz-transform: translateY(0) rotate(-45deg);
    -o-transform: translateY(0) rotate(-45deg);
    -ms-transform: translateY(0) rotate(-45deg);
    transform: translateY(0) rotate(-45deg);
    }
}
@-webkit-keyframes bounce {
    0% {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transform: translateY(-2000px) rotate(-45deg);
    -moz-transform: translateY(-2000px) rotate(-45deg);
    -o-transform: translateY(-2000px) rotate(-45deg);
    -ms-transform: translateY(-2000px) rotate(-45deg);
    transform: translateY(-2000px) rotate(-45deg);
    }
    60% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    -webkit-transform: translateY(30px) rotate(-45deg);
    -moz-transform: translateY(30px) rotate(-45deg);
    -o-transform: translateY(30px) rotate(-45deg);
    -ms-transform: translateY(30px) rotate(-45deg);
    transform: translateY(30px) rotate(-45deg);
    }
    80% {
    -webkit-transform: translateY(-10px) rotate(-45deg);
    -moz-transform: translateY(-10px) rotate(-45deg);
    -o-transform: translateY(-10px) rotate(-45deg);
    -ms-transform: translateY(-10px) rotate(-45deg);
    transform: translateY(-10px) rotate(-45deg);
    }
    100% {
    -webkit-transform: translateY(0) rotate(-45deg);
    -moz-transform: translateY(0) rotate(-45deg);
    -o-transform: translateY(0) rotate(-45deg);
    -ms-transform: translateY(0) rotate(-45deg);
    transform: translateY(0) rotate(-45deg);
    }
}
@-o-keyframes bounce {
    0% {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transform: translateY(-2000px) rotate(-45deg);
    -moz-transform: translateY(-2000px) rotate(-45deg);
    -o-transform: translateY(-2000px) rotate(-45deg);
    -ms-transform: translateY(-2000px) rotate(-45deg);
    transform: translateY(-2000px) rotate(-45deg);
    }
    60% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    -webkit-transform: translateY(30px) rotate(-45deg);
    -moz-transform: translateY(30px) rotate(-45deg);
    -o-transform: translateY(30px) rotate(-45deg);
    -ms-transform: translateY(30px) rotate(-45deg);
    transform: translateY(30px) rotate(-45deg);
    }
    80% {
    -webkit-transform: translateY(-10px) rotate(-45deg);
    -moz-transform: translateY(-10px) rotate(-45deg);
    -o-transform: translateY(-10px) rotate(-45deg);
    -ms-transform: translateY(-10px) rotate(-45deg);
    transform: translateY(-10px) rotate(-45deg);
    }
    100% {
    -webkit-transform: translateY(0) rotate(-45deg);
    -moz-transform: translateY(0) rotate(-45deg);
    -o-transform: translateY(0) rotate(-45deg);
    -ms-transform: translateY(0) rotate(-45deg);
    transform: translateY(0) rotate(-45deg);
    }
}
@keyframes bounce {
    0% {
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transform: translateY(-2000px) rotate(-45deg);
    -moz-transform: translateY(-2000px) rotate(-45deg);
    -o-transform: translateY(-2000px) rotate(-45deg);
    -ms-transform: translateY(-2000px) rotate(-45deg);
    transform: translateY(-2000px) rotate(-45deg);
    }
    60% {
    opacity: 1;
    -ms-filter: none;
    filter: none;
    -webkit-transform: translateY(30px) rotate(-45deg);
    -moz-transform: translateY(30px) rotate(-45deg);
    -o-transform: translateY(30px) rotate(-45deg);
    -ms-transform: translateY(30px) rotate(-45deg);
    transform: translateY(30px) rotate(-45deg);
    }
    80% {
    -webkit-transform: translateY(-10px) rotate(-45deg);
    -moz-transform: translateY(-10px) rotate(-45deg);
    -o-transform: translateY(-10px) rotate(-45deg);
    -ms-transform: translateY(-10px) rotate(-45deg);
    transform: translateY(-10px) rotate(-45deg);
    }
    100% {
    -webkit-transform: translateY(0) rotate(-45deg);
    -moz-transform: translateY(0) rotate(-45deg);
    -o-transform: translateY(0) rotate(-45deg);
    -ms-transform: translateY(0) rotate(-45deg);
    transform: translateY(0) rotate(-45deg);
    }
}
</style>