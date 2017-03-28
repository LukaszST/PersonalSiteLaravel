<!doctype html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="stylesheet" media="screen" href="css/bootstrap.css">
    <title>{{__('cv.title')}}</title>
</head>
<body>
<style>
    @page {
        margin: 0px;
        /*margin-left: -5px;*/
    }
    body, h1, h2, h3, h4, h5, h6, p, a, span {
        font-family: DejaVu Sans;
    }
    .page-header {
        margin-top: 0px;
        margin-left: 0px;
    }
    .subtext {
        font-size: 20px;
    }
    .margin0 {
        margin-top: 0px;
        margin-bottom: 3px;
    }

    .margin1 {
        margin-top: -10px;
    }
    hr {
        margin-top: 0px;
        margin-bottom: 5px;
    }

    span, h3, h4, a {
        line-height: 8px;
    }

    li {
        line-height: 16px;
    }




</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="page-header margin0">
                <h1 class="margin0">{{__('cv.my_name')}} <br><small class="subtext">{{__('cv.title_programmer')}}</small></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h1><small class="margin0">{{__('cv.short_resume_about')}}</small></h1>
        </div>
    </div>

    <div class="row margin1">
        <div class="col-xs-3">
            <img class="profile img-responsive" src="img/photo.JPG" alt="" />
            <span>
            <h3>{{__('cv.personal_details')}}</h3>
            <hr>
            <h4>{{__('cv.phone')}}</h4>
            <span>{{__('cv.phone_number')}}</span>
            <h4>{{__('cv.email')}}</h4>
            <a href="mailto:{{__('cv.email_contact')}}">{{__('cv.email_contact')}}</a>
            <h4>{{__('cv.www')}}</h4>
            <a href="http://{{__('cv.www_address')}}">{{__('cv.www_address')}}</a>
            <h3>{{__('technology')}}</h3>
            </span>
            <hr>
            <ul>
                <li>{{__('cv.php')}}</li>
                <li>{{__('cv.laravel')}}</li>
                <li>{{__('cv.database')}}</li>
                <li>{{__('cv.html')}}</li>
                <li>{{__('cv.js')}}</li>
            </ul>
            <h3>{{__('cv.it_skills')}}</h3>
            <hr>
            <ul>
                <li>{{__('cv.git')}}</li>
                <li>{{__('cv.jira')}}</li>
                <li>{{__('cv.gitlab')}}</li>
                <li>{{__('cv.scrum')}}</li>
                <li>{{__('cv.solid')}}</li>
                <li>{{__('cv.unit_tests')}}</li>
            </ul>
            <h3>{{__('cv.foreign_languages')}}</h3>
            <hr>
            <span>{{__('cv.english')}}</span>
        </div>

        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="text-left">{{__('cv.experience')}}</h3>
                    <hr>
                    <br>
                    <div class="page-header">
                        <h3 class="margin0">{{__('cv.profitroom')}}<br><small class="subtext">{{__('cv.profitroom_job_title')}}</small></h3>
                    </div>
                    <h4 class="margin0">{{__('cv.duties')}}</h4>
                    <ul>
                        <li>{{__('cv.profitroom_duty_1')}}</li>
                        <li>{{__('cv.profitroom_duty_2')}}</li>
                        <li>{{__('cv.profitroom_duty_3')}}</li>
                    </ul>
                    <h4 class="margin0">{{__('cv.achievements')}}</h4>
                    <ul>
                        <li>{{__('cv.profitroom_achievement_1')}}</li>
                        <li>{{__('cv.profitroom_achievement_2')}}</li>
                        <li>{{__('cv.profitroom_achievement_3')}}</li>
                    </ul>
                    <br>
                    <div class="page-header">
                        <h3 class="margin0">{{__('cv.kuzniewski')}}<br><small class="subtext">{{__('cv.kuzniewski_job_title')}}</small></h3>
                    </div>
                    <h4 class="margin0">{{__('cv.duties')}}</h4>
                    <ul>
                        <li>{{__('cv.kuzniewski_duty_1')}}</li>
                        <li>{{__('cv.kuzniewski_duty_2')}}</li>
                        <li>{{__('cv.kuzniewski_duty_3')}}</li>
                    </ul>
                    <h4 class="margin0">{{__('cv.achievements')}}</h4>
                    <ul>
                        <li>{{__('cv.kuzniewski_achievement_1')}}</li>
                        <li>{{__('cv.kuzniewski_achievement_2')}}</li>
                    </ul>
                    <br>
                    <h3 class="text-left">{{__('cv.education')}}</h3>
                    <hr>
                    <br>
                    <div class="page-header">
                        <h4 class="margin0">{{__('cv.school')}}<br><small class="subtext">{{__('cv.school_tittle')}}</small></h4>
                    </div>
                    <h3 class="text-left">{{__('cv.extras')}}</h3>
                    <hr>
                    <a href="http://meetsfotware.pl">{{__('cv.blog')}}</a><br>
                    <a href="https://github.com/LukaszST/">{{__('cv.github')}}</a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-xs-12">
            <hr>
            <h6><small>{{__('cv.privacy_policy')}}</small></h6>
        </div>
    </div>
</div>
</body>
</html>