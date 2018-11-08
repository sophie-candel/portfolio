<!DOCTYPE html>
<html lang="fr" ng-app="app">

<head>
    <meta charset="UTF-8">
    <title>Sophie Candel - freelance en communication digitale</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- <link rel="icon" type="image/png" href="/sources/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/sources/img/favicon-32x32.png" sizes="32x32"> -->
    <link rel="icon" type="image/png" href="/sources/img/favicon-32x32.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/main.css" media="screen">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1"
        crossorigin="anonymous">

    <!-- JS -->
    <script src="/bundle.js"></script>
</head>

<body ng-controller="portfolio">
    
    <!-- HEADER -->
    <header class="h-800 bg-grey1 is-white">
        <div class="wrapper flex-container is-horizontal-center is-vertical-center">
            <div class="flex-container is-horizontal-extremes is-vertical-center w-full">
                <div>
                    <ul class="socialLinks">
                        <li class="m-b-25">
                            <a href="https://www.linkedin.com/in/sophie-candel-2022ab114?trk=nav_responsive_tab_profile_pic" target="_blank" rel="nofollow"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="m-b-25">
                            <a href="http://www.viadeo.com/p/002qwzzh42gmgyv" target="_blank" rel="nofollow"><i class="fab fa-viadeo"></i></a>
                        </li>
                        <li class="m-b-25">
                            <a href="https://github.com/sjcandel" target="_blank" rel="nofollow"><i class="fab fa-github"></i></a>
                        </li>
                        <li class="m-b-25">
                            <a href="https://dribbble.com/sophiecandel" target="_blank" rel="nofollow"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="https://www.flickr.com/photos/145076177@N03/" target="_blank" rel="nofollow"><i class="fab fa-flickr"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="text-right">
                    <p class="weight-900 is-xxl">Hello !</p>
                    <p class="is-xl">Je suis <span class="is-orange weight-900">Sophie Candel,</span></p>
                    <p class="is-xl">freelance en</p>
                    <p class="is-xl">communication digitale</p>
                    <p class="m-t-40">
                        <span class="m-r-15">#webdesign</span>
                        <span class="m-r-15">#graphisme</span>
                        <span class="m-r-15">#photo</span>
                        <span>#video</span>
                    </p>
                </div>
            </div>
        </div>
    </header>
    
    <section class="minh-400">
        <div class="wrapper is-relative">
            <p class="title1 is-orange text-right">services</p>
            <div class="portfolioGrid flex-container is-horizontal-extremes is-vertical-top is-absolute w-full">
                <div class="bg-orange is-white p-40 portfolioGrid_elt minh-300">
                    <p class="is-l m-b-40"># Web & digital</p>
                    <ul class="weight-300">
                        <li>webdesign</li>
                        <li>ergonomie</li>
                        <li>intégration web</li>
                        <li>CMS (Joomla, Wordpress, Prestashop, Drupal)</li>
                        <li>référencement SEO</li>
                        <li>community management</li>
                    </ul>
                </div>
                <div class="bg-orange is-white p-40 portfolioGrid_elt minh-300">
                    <p class="is-l m-b-40"># Identité visuelle</p>
                    <ul class="weight-300">
                        <li>affiches</li>
                        <li>flyers</li>
                        <li>logos</li>
                        <li>cartes de visite</li>
                        <li>magazines</li>
                        <li>infographie</li>
                    </ul>
                </div>
                <div class="bg-orange is-white p-40 portfolioGrid_elt minh-300">
                    <p class="is-l m-b-40"># Photos & vidéos</p>
                    <ul class="weight-300">
                        <li>photos d'illustration</li>
                        <li>photos promoitionelles</li>
                        <li>clips vidéos</li>
                        <li>reportages vidéo</li>
                        <li>vidéos de fiction</li>
                        <li>motion design</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey1 is-white">
        <div class="wrapper p-t-100">
            <p class="title1">book</p>
            <div class="portfolioGrid">
                <div class="portfolioGrid_elt" ng-repeat="i in oeuvres" ng-click="showDetails(i)">
                    <div class="portfolioGrid_img">
                        <img ng-src="{{i.img1}}" alt="{{i.titre}}">
                    </div>
                    <div class="portfolioGrid_title">
                        <p class="is-l">{{i.titre}}</p>
                    </div>
                </div>
            </div>
            <!-- <div ng-repeat="i in oeuvres" ng-click="showDetails(i)">
                <p>{{i.titre}}</p>
            </div> -->
        </div>
    </section>

    <section class="bg-orange is-white p-b-100">
        <div class="wrapper">
            <p class="title1 text-right">contact</p>
            <div class="flex-container is-horizontal-extremes">
                <div class="flex-1">
                </div>
                <div class="flex-2">
                    <form method="post" action="index.php" class="is-relative">
                        <input type="email" name="email" id="email" placeholder="e-mail" />
                        <input type="text" name="objet" id="objet" placeholder="sujet" />
                        <textarea name="message" id="message" placeholder="message..." class="h-200"></textarea>
                        <input id="formulaireEnvoi" class="is-absolute" type="submit" name="envoi" value="envoyer"/> 
                    </form>
                </div>
                
            </div>
    </div>
    </section>

    <!-- <a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@billy_huy?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Billy Huynh"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Billy Huynh</span></a>
        Photo by Billy Huynh on Unsplash

     -->
    
    <!-- <div class="modal" ng-if="selectedItem">
        <button ng-click="closeModal()">CLOSE</button>
        <p>SELECTED : {{selectedItem.titre}} {{selectedItem.description}}</p>
    </div> -->
    
 
    <?php include('reception.php'); ?>


</body>
</html>