<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/perfundo.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{csrf_token()}}'}</script>
    <base href="/" />

    <title>Chris Snyder | Resume (thisdudecodes.com)</title>

    <!--515 px... break point to make text disappear on tabs...-->

    <style>

        .trebuchet {
            font-family: 'Trebuchet MS';
        }


        .portrait-about{
            border: 3px solid #6c757d;
        }

        h1 {
            font-size: 3rem;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2.lg-headers-sub{
            font-size: 1.5rem;
        }


        .calibri {
            font-family: 'Calibri';
        }

        .main-text {
            font-size: 1.3em;
        }

        .nav-tabs .nav-link {
            border: 1px solid #00000014;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
        }

        .nav-link{
            color: #000000;
        }

        .nav-link:hover{
            color: #000000;
        }

        .icon-link{
            color: #000000;
        }

        .icon-link:hover{
            color: #000000;
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 100%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        .h3-resume {
            font-size: 1.45rem;

        }

        .resume-break{
            display:inline-block;
        }

        .rating {
            width: 150px;
            height: 30px;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }
        .stars {
            background: url(images-new/stars-newer-bg-lg.png);
            z-index: 10;
            position: absolute;
            top: 0;
            left: 0;
        }

        .back {
            background: #000000;
            border-bottom: 1px solid #ffffff;
            border-left: 1px solid #ffffff;
            border-right: 1px solid #ffffff;
            border-top: 1px solid #ffffff;

        }

        .back, .stars {
            width: 100%;
            height: 100%;
        }



        .form-control:focus {
            color: #000000;
            background-color: #fff;
            border-color: #000000;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0,0,0,.20);
        }

        label.error{

            color: black;
            background-color: #d2d6da;
            padding:.5em;
            font-family: calibri;
            font-size: 1.1em;
        }

        label.resume-label {
            font-size: 1.2em;
            font-weight: 900;
        }

        .my-gallery img {
            width: 100%;
            height: auto;
            border: 2px solid #000000 !important;
        }

        /*portfolio styles*/

        a.port-links{

            color: #000000;

        }

        a.port-links:hover{
            color:#000000;
        }

        a.port-links:visited{
            color:#000000;
        }


        /*portfolio experiments...*/

        .card-img-wrap {
            overflow: hidden;
            position: relative;
        }
        .card-img-wrap:after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            /*background: rgba(255,255,255,0.3);*/
            opacity: 0;
            transition: opacity .25s;
        }
        .card-img-wrap img {
            transition: transform .25s;
            width: 100%;
        }
        .card-img-wrap:hover img {
            transform: scale(1.2);

        }
        .card-img-wrap:hover:after {
            opacity: 1;

        }


        /*media queries*/

        /*max hide tab text */
        @media screen and (max-width: 499px) {
            span.tab-text {
                display: none;
            }

            .school-logo {
                width:35px;
            }

            .h3-school-title{
                font-size: 1rem;
            }


            h2.lg-headers-sub {
                font-size: 1.3rem;
            }


            h1#contact_header{
                font-size:2em;
            }

            h1#contact_header i{
                font-size:1em;
            }



            h1#resume_header{
                font-size:2em;
            }

            h1#resume_header i{
                font-size:1em;
            }


            h1#portfolio_header{
                font-size:2em;
            }

            h1#portfolio_header i{
                font-size:1em;
            }


            h2 {
                font-size:1.7rem;
            }

            img#portrait-img{
                width:150px;
            }


            h1#name_header{
                font-size:2em;
            }



            .rating {
                width: 120px;
                height: 24px;
                position: relative;
                margin-left: auto;
                margin-right: auto;
            }
            .stars {
                background: url(images-new/stars-newer-bg-lg_mobile.png);
                z-index: 10;
                position: absolute;
                top: 0;
                left: 0;
            }

            .back {
                background: #000000;
                border-bottom: 1px solid #ffffff;
                border-left: 1px solid #ffffff;
                border-right: 1px solid #ffffff;
                border-top: 1px solid #ffffff;

            }

            .back, .stars {
                width: 100%;
                height: 100%;
            }


        }

    </style>

</head>
<body>
<br/>
<br/>



<div id="app">

    <div class="container">



        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item trebuchet">
                <router-link class="nav-link" to="/" exact>
                <i class="fas fa-user"></i> <span class="tab-text">About Chris</span>
                </router-link>

            </li>

            <li class="nav-item trebuchet">

                <router-link class="nav-link" to="/resume">
                    <i class="fas fa-file-alt"></i> <span class="tab-text">Resume</span>
                </router-link>

            </li>


            <li class="nav-item trebuchet">

                <router-link class="nav-link" to="/portfolio">
                    <i class="fas fa-briefcase"></i> <span class="tab-text">Portfolio</span>
                </router-link>

            </li>


            <li class="nav-item trebuchet">
                <router-link class="nav-link" to="/contact">
                    <i class="fas fa-envelope"></i> <span class="tab-text">Contact</span>
                </router-link>
            </li>
        </ul>


        <div class="">

            {{--think of this (router-view) as the yield concept in rails or laravel...--}}
            <router-view> </router-view>

        </div>

        <br/>




    </div>


</div>

<footer class="footer">

    <div class="container text-center trebuchet">
        <i class="fas fa-code text-muted"></i>
        thisdudecodes.com
        <br/>

        <span id="copyright">
        &copy;
        <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
    </span>

    </div>

</footer>

<style scoped>
    @import "/css/photoswipe.css";
    @import "/css/default-skin.css";
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

<script>$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });</script>

<script src="/js/lg-thumbnail.min.js"></script>
<script src="/js/lg-fullscreen.min.js"></script>


{{--<script src="/js/vendor/jquery.hashchange.min.js"></script>--}}
<script src="/js/vendor/jquery.easytabs.min.js"></script>



<script src="/js/main.js"></script>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
<![endif]-->


<!-- Photoswipe  set of js and calling it-->
<script src="/js/index.js"></script>
<script src="/js/photoswipe.js"></script>
<script src="/js/photoswipe-ui-default.min.js"></script>




<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="https://unpkg.com/vue-router@2.0.0/dist/vue-router.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.js"></script>





{{--put above the routes.js...--}}
<script src="/js/components/Home.vue.js"></script>
<script src="/js/components/Resume.vue.js"></script>
<script src="/js/components/Portfolio.vue.js"></script>

<script src="/js/components/Form.vue.js"></script>
<script src="/js/components/Contact.vue.js"></script>
<script src="/js/components/NotFound.vue.js"></script>
<script src="/js/routes.js"></script>
<!-- jsdelivr cdn -->
<script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script>



<script>

    Vue.use(VeeValidate);



    const app = new Vue({
            el: '#app',

            router: new VueRouter({mode: 'history', linkActiveClass: 'active', routes}),

//        export: '/js/photoswipe.js',

//        component: {Form}




//            data: {
//                contact: {
//                    name: '',
//                    email: '',
//                    message: '',
//                },
//
//                isSending: false
//            },

//        data: {
//            articles: [],
//            article: {
//                id: '',
//                title: '',
//                body: ''
//            },
//            article_id: '',
//            pagination: {},
//            edit: false
//
//        }


//        created: function(){ this.fetchArticles();},
//        methods: {
//            fetchArticles(page_url){
//                let vm = this;
//                page_url = page_url || '/api/articles'
//                fetch(page_url)
//                    .then(res => res.json())
//                    .then(res => {
//                        this.articles=res.data;
//                        vm.makePagination(res.meta, res.links);
//                        //console.log(res.data);
//                    })
//                    .catch(err => console.log(err));
//            },
//
//            makePagination(meta, links){
//                let pagination = {
//                    current_page: meta.current_page,
//                    last_page: meta.last_page,
//                    next_page_url: links.next,
//                    prev_page_url: links.prev
//                }
//
//                this.pagination = pagination;
//            },
//
//        },
//    },
        }
    );



</script>











<!--contact form JS-->
<script>
//    $(document).ready(function() {
//
//        $(".invalid_info_success").hide();
//        $("#contact_success").hide();
//    });
//
//    $("#form1").validate({
//        rules: {name: {required: true}, comments: {required: true}, email: {required: true}},
//        messages: {
//            name: {required: "<i class='fas fa-exclamation-circle'></i> Please enter your name so I know who is contacting me!"},
//            email: {required: "<i class='fas fa-exclamation-circle'></i> Please enter your email address so I know where to send a response to!"},
//            comments: {required: "<i class='fas fa-exclamation-circle'></i> Please enter your message so I will know why you are contacting me!"}
//        },
//        errorPlacement: function (e, t) {
//            e.prependTo(t.parent())
//        },
//        submitHandler: function (e) {
//            sendContact();
//            $("#form1").hide();
//            $("#contact_header").hide();
//            $("#contact_success").show();
//            $("#contact_success").css("visibility", "visible");
//            return false
//        }
//    });
//
//    function sendContact(){var e=$("input#name").val();var t=$("input#email").val();var n=$("textarea#comments").val(); $.ajax({type:"POST",url:"contactFormHandling.php",data:{comments:JSON.stringify(n),email:JSON.stringify(t),name:JSON.stringify(e)}})}


    //photoSwipe JS

    var initPhotoSwipeFromDOM = function(gallerySelector) {

        // parse slide data (url, title, size ...) from DOM elements
        // (children of gallerySelector)
        var parseThumbnailElements = function(el) {
            var thumbElements = el.childNodes,
                numNodes = thumbElements.length,
                items = [],
                figureEl,
                linkEl,
                size,
                item;

            for(var i = 0; i < numNodes; i++) {

                figureEl = thumbElements[i]; // <figure> element

                // include only element nodes
                if(figureEl.nodeType !== 1) {
                    continue;
                }

                linkEl = figureEl.children[0]; // <a> element

                size = linkEl.getAttribute('data-size').split('x');

                // create slide object
                item = {
                    src: linkEl.getAttribute('href'),
                    w: parseInt(size[0], 10),
                    h: parseInt(size[1], 10)
                };



                if(figureEl.children.length > 1) {
                    // <figcaption> content
                    item.title = figureEl.children[1].innerHTML;
                }

                if(linkEl.children.length > 0) {
                    // <img> thumbnail element, retrieving thumbnail url
                    item.msrc = linkEl.children[0].getAttribute('src');
                }

                item.el = figureEl; // save link to element for getThumbBoundsFn
                items.push(item);
            }

            return items;
        };

        // find nearest parent element
        var closest = function closest(el, fn) {
            return el && ( fn(el) ? el : closest(el.parentNode, fn) );
        };

        // triggers when user clicks on thumbnail
        var onThumbnailsClick = function(e) {
            e = e || window.event;
            e.preventDefault ? e.preventDefault() : e.returnValue = false;

            var eTarget = e.target || e.srcElement;

            // find root element of slide
            var clickedListItem = closest(eTarget, function(el) {
                return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
            });

            if(!clickedListItem) {
                return;
            }

            // find index of clicked item by looping through all child nodes
            // alternatively, you may define index via data- attribute
            var clickedGallery = clickedListItem.parentNode,
                childNodes = clickedListItem.parentNode.childNodes,
                numChildNodes = childNodes.length,
                nodeIndex = 0,
                index;

            for (var i = 0; i < numChildNodes; i++) {
                if(childNodes[i].nodeType !== 1) {
                    continue;
                }

                if(childNodes[i] === clickedListItem) {
                    index = nodeIndex;
                    break;
                }
                nodeIndex++;
            }


            if(index >= 0) {
                // open PhotoSwipe if valid index found
                openPhotoSwipe( index, clickedGallery );
            }
            return false;
        };

        // parse picture index and gallery index from URL (#&pid=1&gid=2)
        var photoswipeParseHash = function() {
            var hash = window.location.hash.substring(1),
                params = {};

            if(hash.length < 5) {
                return params;
            }

            var vars = hash.split('&');
            for (var i = 0; i < vars.length; i++) {
                if(!vars[i]) {
                    continue;
                }
                var pair = vars[i].split('=');
                if(pair.length < 2) {
                    continue;
                }
                params[pair[0]] = pair[1];
            }

            if(params.gid) {
                params.gid = parseInt(params.gid, 10);
            }

            return params;
        };

        var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
            var pswpElement = document.querySelectorAll('.pswp')[0],
                gallery,
                options,
                items;

            items = parseThumbnailElements(galleryElement);

            // define options (if needed)
            options = {

                // define gallery index (for URL)
                galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                getThumbBoundsFn: function(index) {
                    // See Options -> getThumbBoundsFn section of documentation for more info
                    var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                        pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                        rect = thumbnail.getBoundingClientRect();

                    return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                },

//                getDoubleTapZoom: function(isMouseClick, item) {
//                    if(isMouseClick) {
//                        return .8; //<---- This 4
//                    } else {
//                        return item.initialZoomLevel < 0.7 ? .5 : .5; //<---- 4 here
//                    }
//                },
//                maxSpreadZoom: .5 //<---- and this 4 here


            };

            // PhotoSwipe opened from URL
            if(fromURL) {
                if(options.galleryPIDs) {
                    // parse real index when custom PIDs are used
                    // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                    for(var j = 0; j < items.length; j++) {
                        if(items[j].pid == index) {
                            options.index = j;
                            break;
                        }
                    }
                } else {
                    // in URL indexes start from 1
                    options.index = parseInt(index, 10) - 1;
                }
            } else {
                options.index = parseInt(index, 10);
            }

            // exit if index not found
            if( isNaN(options.index) ) {
                return;
            }

            if(disableAnimation) {
                options.showAnimationDuration = 0;
            }

            // Pass data to PhotoSwipe and initialize it
            gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
            gallery.init();
        };

        // loop through all gallery elements and bind events
        var galleryElements = document.querySelectorAll( gallerySelector );

        for(var i = 0, l = galleryElements.length; i < l; i++) {
            galleryElements[i].setAttribute('data-pswp-uid', i+1);
            galleryElements[i].onclick = onThumbnailsClick;
        }

        // Parse URL and open gallery if it contains #&pid=3&gid=1
        var hashData = photoswipeParseHash();
        if(hashData.pid && hashData.gid) {
            openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
        }
    };

    // execute above function
    initPhotoSwipeFromDOM('.my-gallery');



//
//    //tab linking from independent link inside page:
//    $('.tab-link').on('click', function(event) {
//        // Prevent url change
//        event.preventDefault();
//
//        // `this` is the clicked <a> tag
//        var target = $('[data-toggle="tab"][href="' + this.hash + '"]');
//
//        // opening tab
//        target.trigger('click');
//        // scrolling into view
//        target[0].scrollIntoView(true);
//    });







</script>

</body>
</html>