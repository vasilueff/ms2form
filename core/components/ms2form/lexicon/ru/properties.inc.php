<?php
/*
 * Properties Russian Lexicon Entries
 *
 * */

$_lang['ms2form_prop_sortby'] = 'Сортировка выборки.';
$_lang['ms2form_prop_sortdir'] = 'Направление сортировки';
$_lang['ms2form_prop_parent'] = 'Id основной категории для публикации ресурса. Обязательно для заполнения';
$_lang['ms2form_prop_parentMse2form'] = 'Разрешить создавать новые категории и использовать форму Msearch2 для автодополнения. Json строка с парараметрами сниппета mSearchForm [json]';
$_lang['ms2form_prop_parents'] = 'Список id, через запятую, ресурсов для поиска категорий в которых будет опубликован ресурс одновременно с основной категорией. По умолчанию выводятся все доступные категории';
$_lang['ms2form_prop_parentsIncludeTVs'] = 'Список названий TV, через запятую, которые будут выводится вместе с дополнительными категориями';
$_lang['ms2form_prop_parentsSortby'] = 'Поле для сортировки дополнительных категорий, можно использовать TV';
$_lang['ms2form_prop_parentsSortdir'] = 'Направление сортировки дополнительных категорий';
$_lang['ms2form_prop_resources'] = 'Список id, через запятую, категорий в которых будет опубликован ресурс одновременно с основной категориией. Альтернатива parents';
$_lang['ms2form_prop_template'] = 'id шаблона для публикации ресурса, эта настройка отключает настройку templates';
$_lang['ms2form_prop_templates'] = 'Список id шаблонов для публикации ресурсов формата "1==Базовый,2==Дополнительный", можно указать только один id шаблона, по умолчанию используется шаблон с id равным 1';
$_lang['ms2form_prop_tplCreate'] = 'Чанк для создания нового ресурса';
$_lang['ms2form_prop_tplUpdate'] = 'Чанк для обновления существующего ресурса';
$_lang['ms2form_prop_tplSectionRow'] = 'Чанк для оформления вывода дополнительной категории';
$_lang['ms2form_prop_tplTagRow'] = 'Чанк для оформления вывода тега';
$_lang['ms2form_prop_tplEmailBcc'] = 'Чанк для уведомления администраторов сайта о новом ресурсе.';
$_lang['ms2form_prop_allowedFields'] = 'Поля продукта, которые разрешено заполнять пользователю. Можно указывать имена TV параметров.';
$_lang['ms2form_prop_requiredFields'] = 'Обязательные поля ресурса, которые пользователь должен заполнить для отправки формы.';
$_lang['ms2form_prop_sections_permissions'] = 'Проверка прав на публикацию в раздел. По умолачанию проверяется разрешение "section_add_children".';
$_lang['ms2form_prop_allowFiles'] = 'Разрешить пользователю загружать файлы на сервер.';
$_lang['ms2form_prop_source'] = 'Id источника медиа для загрузки файлов. По умолчанию будет использован источник, указанный в системной настройке "ms2_product_source_default".';
$_lang['ms2form_prop_tplFiles'] = 'Контейнер для вывода загрузчика и списка уже загруженных файлов.';
$_lang['ms2form_prop_tplFile'] = 'Чанк оформления загруженного файла, который не является изображением.';
$_lang['ms2form_prop_tplImage'] = 'Чанк оформления загруженного изображения.';
$_lang['ms2form_prop_meta_tplFile'] = 'Чанк оформленqия файла в списке.';
$_lang['ms2form_prop_tags'] = 'Разрешить или запретить вывод тегов';
$_lang['ms2form_prop_tagsNew'] = 'Разрешить или запретить добавлять новые теги';
$_lang['ms2form_prop_redirectUnpublished'] = 'Вы можете указать, на какой документ отправлять пользователя при создании неопубликованного ресурса.';
$_lang['ms2form_prop_redirectPublished'] = 'На какой документ отправлять пользователя при создании ресурса? new - на вновь созданный, 0 - не перенаправлять, id - на ресурс с указанным id [new|0|id] ';
$_lang['ms2form_prop_redirectScheme'] = 'Схема создания url для перенаправления. http://rtfm.modx.com/revolution/2.x/developing-in-modx/other-development-resources/class-reference/modx/modx.makeurl';
$_lang['ms2form_prop_editor'] = 'Тип редактора контента. 0 - отключить редактор';