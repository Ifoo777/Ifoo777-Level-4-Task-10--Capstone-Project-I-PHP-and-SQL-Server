<?php
function pageName($ss)
{
    if ($ss === 'tos')
        return 'Terms of Service';
    else
        return 'Privacy Policy';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link a CSS file for the main layout of the page-->
    <link href="/css/main.css" rel="stylesheet">
    <title>{{pageName($subsection)}}</title>
</head>

<body onload=displayAlertFooter()>
    <br>
    <!-- Button to home page -->
    <button><a href="{{ url('/') }}">Return Home</a></button>

    <div class="pageContent">
        <h1>Legal: {{pageName($subsection)}}</h1>

        @if($subsection==='tos')
        <h2>IMPORTANT! PLEASE READ THESE TERMS OF USE CAREFULLY BEFORE USING THIS SITE. YOU AGREE TO THESE TERMS OF USE BY ACCESSING THIS SITE, REGISTERING FOR THIS SITE, OR BY ACCEPTING OR DOWNLOADING ANY INFORMATION AND CONTENT FROM THIS SITE. IF YOU DO NOT AGREE TO BE BOUND BY ALL THE TERMS SET FORTH BELOW, DO NOT USE THIS SITE.</h2>

        <h3><u>Terms of use:</u></h3>
        <p>
            This is the official Terms of Use Agreement (“Terms of Use”) for the specific Internet website, application or other interactive service (“Site,” “we,” “us,” or “our”) provided by Paramount Global (“Paramount”) that contains an authorized link to these Terms of Use. These Terms of Use apply whether you are accessing the Site via a personal computer, a mobile device or any other technology or devices now known or hereafter developed or discovered.<br><br>
            These Terms of Use govern only the content, features, and activities related to this Site and do not cover any other websites of Paramount, any affiliates that Paramount directly or indirectly owns or controls (collectively, “Affiliates”) or any other company, unless specifically stated.
        </p>

        <h3><u>Acceptance of Terms:</u></h3>
        <p>
            Your access and use of the Site is subject to these Terms of Use and all applicable laws. By accessing and browsing the Site, you accept, without limitation or qualification, these Terms of Service. Please note that this Site and the services offered are only open to users 13 years of age or older. If you do not agree with all of the following Terms of Use, please do not use this Site.<br><br>
            By accessing and using the Site or downloading materials from the Site, you accept and agree to, without limitation or qualification, these Terms of Use. Paramount reserves the right, in its sole discretion, to modify, alter or otherwise change these terms and conditions at any time. Changes and/or modifications shall become effective immediately upon the posting. Please review these Terms of Use periodically. Your continued use of the Site following the posting of changes and/or modifications will constitute your acceptance of these Terms of Use. Please also review our Privacy Policy.
        </p>
        <!-- Text found at https://www.paramount.com/terms-of-use -->

        @else
        <p>
            This Policy describes how Paramount and its affiliates (collectively “Paramount”) collect, use and disclose certain information, including your Personal Information, both online and offline, and the choices you can make about that information.<br><br>
            We are a leading global media and entertainment company that creates content and experiences for audiences worldwide. When you use our streaming services, mobile and online applications or other products and services of our brands, visit our websites, attend our live events, view our content or advertisements, or contact our customer service (collectively, the “Services”), we may collect information from or about you.<br><br>
            Trust is a cornerstone of our mission at Paramount. We are committed to gaining and maintaining your trust by following a core set of privacy principles:
        </p>
        <ul>
            <li><b>Transparency</b> – We will tell you what information we collect about you and how we use it. </li>
            <li><b>Choice</b> – When possible, we will give you choices about how your information is collected and used.</li>
            <li><b>Access</b> – When possible, and when required by law, we will provide you with access to the information that we collect about you.</li>
            <li><b>Security</b> – We will protect your information with reasonable security measures.</li>
            <li><b>Accountability</b> – We will take responsibility for the secure processing of your information and do our best to address any concerns or questions that you have about how we process your information.</li>

        </ul>
        <p>
            This Privacy Policy applies to all information about you that we collect in connection with the Services throughout the world. There may be additional notices about our information practices and choices for certain Paramount offerings. By using any of the Services, you acknowledge the data collection practices and purposes outlined in this Privacy Policy. You can learn more about Paramount and our affiliates by visiting our affiliates page https://www.viacomcbs.com/brands.<br<br>
        </p>
        <!-- Text found at https://www.viacomcbsprivacy.com/en/policy?r=privacy.cbs -->
        @endif

    </div>
    <!-- Add pop up cookie and Footer -->
    <div class="cookie">
    </div>
    <script type="text/javascript" src="/js/main.js"></script>
</body>

</html>