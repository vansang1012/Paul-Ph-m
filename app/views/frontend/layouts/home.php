<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<base href="<?php echo CMS_URL;?>" />
<link href="<?=$this->system['icon']?>" rel="shortcut icon" type="image/x-icon" />
<link rel="icon" type="image/png" href="<?=$this->system['icon']?>" />
<meta name="robots" content="noodp,index,follow" />
<meta name="revisit-after" content="1 days" />
<meta http-equiv="content-language" content="vi" />
<title><?php echo isset($data['meta_title'])?$data['meta_title']:'';?></title>
<meta name="title" content="<?php echo isset($data['meta_title'])?$data['meta_title']:'';?>" />
<meta name="keywords" content="<?php echo isset($data['meta_keywords'])?$data['meta_keywords']:'';?>" />
<meta name="description" content="<?php echo isset($data['meta_description'])?$data['meta_description']:'';?>" />
<link rel="canonical" href="<?php echo isset($data['canonical'])?$data['canonical']:'';?>"/>
<?php echo (isset($data['rel_prev']) && !empty($data['rel_prev']))?'<link rel="prev" href="'.$data['rel_prev'].'" />':'';?>
<?php echo (isset($data['rel_next']) && !empty($data['rel_next']))?'<link rel="next" href="'.$data['rel_next'].'" />':'';?>
<meta itemprop="description" content="<?php echo isset($data['meta_description'])?$data['meta_description']:'';?>" />
<meta itemprop="url" href="<?php echo isset($data['canonical'])?$data['canonical']:'';?>" />
<meta itemprop="image" content="<?php echo isset($data['image'])?$data['image']:'';?>" />
<meta property="og:image" content="<?php echo isset($data['image'])?$data['image']:'';?>" />
<?php echo (isset($data['google_authorship']) && !empty($data['google_authorship']))?'<link rel="author" href="'.$data['google_authorship'].'"/>':'';?>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166284467-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-166284467-1');
    </script>
    <link rel="SHORTCUT ICON" href="template/frontend/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="template/frontend/css/animateffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/bootstrap.minffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/customffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/font-awesome.minffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/slick-themeffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/slickffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/styleffb3.css">
    <link rel="stylesheet" type="text/css" href="template/frontend/css/validationEngine.jquery.minffb3.css">

</head>
<body>
    

    <script type="text/javascript">
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
    </script>


    <script src="template/frontend/js/WebResourceed81.js?d=pMZ2n8SizODZegU5an53u-o9VPFwl3uKdohXNcOhthDNCRkXAwitBimjivtXWJpcRLc2qZ8xkUeQJQS3FdG2NAluHy81&amp;t=637206103340000000" type="text/javascript"></script>


    <script type="text/javascript">
        //<![CDATA[
        //]]>
    </script>

    <script src="template/frontend/js/ScriptResourcee465.js?d=SkjRfC8XF1zh2_T2xuhqdeTl3cGHoF62jlKB9WJhc2oUy3gPs6_oZX0soClVCFFzNum7eJ1DFM9ACBLVBi_TOxdR6AEREdagxUDirzVrby5OKmWX_B6y350IxIGTZTYunaiNxD8p0eWT9OLtMzWL8kAb13A1&amp;t=ffffffffe1967f94" type="text/javascript"></script>
    <script src="template/frontend/js/ScriptResource4d69.js?d=LATfoBalFGjKJwSzCTv-S768f08NwiEQIt9ajp2SHmkCUK55I3V2bcXYHHCnJfPAHfM4NpgIVFzm-QtnH2n2za1PAUzslbkpBXrG6K_7-fYl0Pco77gTVJo9-d9OLsEjDjJ8wyVOPoND9uXC7R2jFbM4pewKZdc969oq__9LnzgCHSFP0&amp;t=3f4a792d" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax client-side framework failed to load.');
        //]]>
    </script>

    <script src="template/frontend/js/ScriptResource20fb.js?d=ZiilD_5P3HEgn86JrghQHZo_YawAf9jdxyHS-Y2YzUMkWJGEE0vTyFaPgnSTH2CvUN7uC8wUhyMP8p2N_N4cPcA2Wc7stRQCKPUJTvwi7rM_CPGrTmNWGF-9o9iiFjPV2qOfIqFvHHvzGmcOlEET7RGa0iPG_ZvbY06kOvYvf9SqeAOb0&amp;t=3f4a792d" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        function WebForm_OnSubmit() {
                if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
                return CheckPageIsValid();
                return true;
            }
            //]]>
    </script>

<?php $this->load->view('frontend/header');?>

<?php $data = isset($data)?$data:NULL; $this->load->view($template, $data);?>

<?php $this->load->view('frontend/footer');?>
 <div class="scroll-top">
            <div class="btn animated fadeInRight">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </div>
        </div>
        <div id="server-notice">
            <div class="server-notice">
                server-notice
            </div>
        </div>
    <span id="ctl00_cvDummy" style="color:Red;display:none;visibility:hidden;">.</span>
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_cvDummy"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_cvDummy = document.all ? document.all["ctl00_cvDummy"] : document.getElementById("ctl00_cvDummy");
ctl00_cvDummy.controltovalidate = "ctl00_txtDummy";
ctl00_cvDummy.errormessage = ".";
ctl00_cvDummy.evaluationfunction = "CustomValidatorEvaluateIsValid";
//]]>
</script>

<div>

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBwKV14yDBgKxqOLkDgK18uSUBALeg/s6ArnK8dUPAq/52MgGAoyG7tAJ/VK9UaC5zIj4C1GD6DFLZqllhSc=" />
</div>

    <script type="text/javascript" src="template/frontend/js/jquery.minffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/bootstrap.minffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/wow.minffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/slick.minffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/lazysizes.minffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/mainffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/jquery.validationEngineffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/languages/jquery.validationEngine-vi-VNffb3.js?v=202004290820"></script>
    <script type="text/javascript" src="template/frontend/js/commonffb3.js?v=202004290820"></script>

</body>

</html>
