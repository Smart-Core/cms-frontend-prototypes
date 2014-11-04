<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Прототип админки &mdash; Smart Core CMS </title>
    <!-- Meta -->
    <meta charset="utf-8">

    <!-- Styles -->
    <style media="all" type="text/css"> @import url(/bundles/felib/bootstrap/2.3.2/css/bootstrap.css); </style>
    <style media="all" type="text/css"> @import url(/bundles/felib/bootstrap/2.3.2/css/bootstrap-responsive.css); </style>
    <style media="all" type="text/css"> @import url(/bundles/felib/magnific-popup/magnific-popup.css); </style>
    <style media="all" type="text/css"> @import url(/bundles/cms/css/frontend.css); </style>
    <style media="all" type="text/css">
        @import url(/theme/css/screen.css);
        @import url(/theme/css/dark_theme.css);
    </style>

    <!-- Links -->
    <link href="/theme/img/favicon_aviao.ico" rel="icon" type="image/vnd.microsoft.icon" />

    <!-- Scripts -->
    <script type="text/javascript">var basePath = "/"</script>
    <script src="/bundles/felib/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="/bundles/felib/jquery-cookie/1.3.1/jquery.cookie.js" type="text/javascript"></script>
    <script src="/bundles/felib/bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/bundles/felib/magnific-popup/jquery.magnific-popup.js" type="text/javascript"></script>
    <script src="/bundles/cms/js/frontend.js" type="text/javascript"></script>

    <script type="text/javascript">
        var cms_front_controls = {
            "toolbar":{
                "left":{
                    "setings":{
                        "title":"",
                        "descr":"Настройки",
                        "icon":"wrench",
                        "items":{
                            "modules":{
                                "title":"Модули",
                                "icon":"cog",
                                "uri":"#/admin/module/"
                            },
                            "files":{
                                "title":"Файлы",
                                "icon":"file",
                                "uri":"#/admin/files/"
                            },
                            "blocks":{
                                "title":"Блоки",
                                "icon":"th",
                                "uri":"#/admin/structure/block/"
                            },
                            "users":{
                                "title":"Пользователи",
                                "icon":"user",
                                "uri":"#/admin/user/"
                            },
                            "config":{
                                "title":"Конфигурация",
                                "icon":"tasks",
                                "uri":"#/admin/config/"
                            },
                            "appearance":{
                                "title":"Оформление",
                                "icon":"picture",
                                "uri":"#/admin/appearance/"
                            }
                        }
                    },
                    "structure":{
                        "title":"Структура",
                        "descr":"",
                        "icon":"folder-open",
                        "items":{
                            "folder_edit":{
                                "title":"Редактировать папку",
                                "icon":"edit",
                                "uri":"#/admin/structure/folder/1/"
                            },
                            "folder_new":{
                                "title":"Добавить папку",
                                "icon":"plus",
                                "uri":"#/admin/structure/folder/create/1/"
                            },
                            "folder_all":{
                                "title":"Вся структура",
                                "icon":"book",
                                "uri":"#/admin/structure/"
                            },
                            "diviver_1":"diviver",
                            "node_new":{
                                "title":"Добавить модуль",
                                "icon":"plus",
                                "uri":"#/admin/structure/node/create/1/"
                            }
                        }
                    }
                },
                "right":{
                    "eip_toggle":[
                        "Режим правки: ОТКЛ.",
                        "Режим правки: ВКЛ."
                    ],
                    "user":{
                        "title":"root",
                        "icon":"user",
                        "items":{
                            "admin":{
                                "title":"Панель управления",
                                "uri":"#/admin",
                                "icon":"cog",
                                "overalay":false
                            },
                            "profile":{
                                "title":"Мой профиль",
                                "uri":"#/admin/user/1/",
                                "icon":"user",
                                "overalay":false
                            },
                            "diviver_1":"diviver",
                            "logout":{
                                "title":"Выход",
                                "uri":"#/admin/logout",
                                "icon":"off",
                                "overalay":false
                            }
                        }
                    }
                }
            },
            "nodes":{
                "__node_4":{
                    "edit":{
                        "title":"Редактировать",
                        "descr":"Текстовый блок",
                        "uri":"#/admin/node/4/",
                        "default":true
                    },
                    "cms_node_properties":{
                        "title":"Параметры модуля",
                        "uri":"#/admin/structure/node/4/"
                    }
                },
                "__node_13":{
                    "edit":{
                        "title":"Редактировать",
                        "descr":"Текстовый блок",
                        "uri":"#/admin/node/13/",
                        "default":true
                    },
                    "cms_node_properties":{
                        "title":"Параметры модуля",
                        "uri":"#/admin/structure/node/13/"
                    }
                },
                "__node_5":{
                    "edit":{
                        "title":"Редактировать меню",
                        "default":true,
                        "descr":"Пункты меню",
                        "uri":"/admin/node/5/1"
                    },
                    "cms_node_properties":{
                        "title":"Параметры модуля (Menu)",
                        "uri":"/admin/structure/node/5/",
                        "descr":null
                    }
                },
                "__node_17":{
                    "cms_node_properties":{
                        "title":"Параметры модуля",
                        "uri":"#/admin/structure/node/17/"
                    }
                },
                "__node_1":{
                    "edit":{
                        "title":"Редактировать",
                        "descr":"Текстовый блок",
                        "uri":"#/admin/node/1/",
                        "default":true
                    },
                    "cms_node_properties":{
                        "title":"Параметры модуля",
                        "uri":"#/admin/structure/node/1/"
                    }
                },
                "__node_6":{
                    "cms_node_properties":{
                        "title":"Параметры модуля",
                        "uri":"#/admin/structure/node/6/"
                    }
                }
            }

        };</script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#test_ajax_modal').magnificPopup({
                type: 'ajax',
                alignTop: true,
                overflowY: 'scroll',
                modal: true
            });
        });
    </script>

</head>
<body>
<div class="container">
    <div class="row-fluid">
        <div class="span3">

            <div class="cmf-frontadmin-node" id="__node_5">

                <ul class="main_menu">
                    <li class="current first">
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="#/news/">Новости</a>
                        <ul class="menu_level_1">
                            <li class="first last"><a href="#/news/unser_news/">Вложенная</a></li>
                        </ul>
                    </li>
                    <li><a href="#/simple/">Так просто ;)</a></li>
                    <li>
                        <a href="#/slider/">Слайдер</a>
                        <ul class="menu_level_1">
                            <li class="first last"><a href="#/slider/nivo/">Nivo</a></li>
                        </ul>
                    </li>
                    <li><a href="#/blog/">Блог</a></li>
                    <li><a href="#/gallery/">Фотогалерея</a></li>
                    <li title="123 561">
                        <a href="#/about/">О компании</a>
                        <ul class="menu_level_1">
                            <li class="first last">
                                <a href="#/about/inner/">Вложенная папка</a>
                                <ul class="menu_level_2">
                                    <li class="first last"><a href="#/about/inner/in2/">Еще одна вложенная</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#/feedback/">Обратная связь</a></li>
                    <li><a href="#/catalog/">Каталог</a></li>
                    <li><a href="#/catalog2/">Каталог 2</a></li>
                    <li class="last"><a href="#/user/">Аккаунт пользователя</a></li>
                </ul>
            </div>

        </div>

        <div class="span9">
            <div id="breadcrumbs">

                <div class="cmf-frontadmin-node" id="__node_6">

                </div>

            </div>

            <a id="test_ajax_modal" href="/test_ajax_modal.php">test_ajax_modal</a>

            <div id="content">

                <div class="cmf-frontadmin-node" id="__node_4">
                    <h1>
                        Главная страница!
                    </h1>
                    <p>
                        С точки зрения банальной эрудиции каждый индивидуум, критически мотивирующий абстракцию, не может игнорировать критерии утопического субъективизма,
                        концептуально интерпретируя общепринятые дефанизирующие поляризаторы, поэтому консенсус, достигнутый диалектической материальной классификацией
                        всеобщих мотиваций в парадогматических связях предикатов, решает проблему усовершенствования формирующих геотрансплантационных квазипузлистатов
                        всех кинетически коррелирующих аспектов. Исходя из этого, мы пришли к выводу, что каждый произвольно выбранный предикативно абсорбирующий объект.
                    </p>
                </div>

                <div class="cmf-frontadmin-node" id="__node_17">
                    <hr /><h3>Последние новости</h3>

                    <p>Перевод статьи <a href="http://weavora.com/blog/2013/03/26/why-we-prefer-symfony-2-over-yii-framework/" target="_blank">Why We Prefer Symfony 2 Over Yii Framework</a>.</p>
                    <h5><a href="#/news/unifying-php.html">Unifying PHP</a></h5>
                    <p><b>27.01.14, 12:34:21</b></p>
                    <p>Over the last few weeks, there has been lots of talk about PHP community, packages, and tribalism. So, I thought I would offer a few thoughts on the topic. Currently, Laravel is the most eclectic full-stack PHP framework in existence. In other words, Laravel is the only full-stack PHP framework that actively eschews tribalism.</p>
                    <h5><a href="#/news/symfony-2-for-php-developers-part-2.html">Symfony 2 for PHP developers – Part 2</a></h5>
                    <p><b>27.01.14, 12:12:31</b></p>
                    <p>Dependency Injection is at the heart of Symfony 2. To understand Symfony 2 you need to understand Dependency Injection.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="row-fluid" id="footer">
        <div class="span9">

            <div class="cmf-frontadmin-node" id="__node_1">
                Футер
            </div>

        </div>
        <div class="span3" style="text-align: right">

            <div class="cmf-frontadmin-node" id="__node_13">
                Powered by <a href="http://symfony.com" target="_blank">Symfony2</a>
            </div>

        </div>

        <div class="span11 text-center">

        </div>
    </div>
</div>
</body>
</html>
