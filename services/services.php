<?php
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2018 TwelveTone LLC
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

/**
 * Language Service API
 *
 * id
 * caption
 * icon
 * dependencies
 * TODO listDirs and listFiles() - currently hardcoded in plugin
 *
 */






// Do this at the last possible moment to allow all languages to register.
{
    $manager = \Twelvetone\Common\ServiceManager::getInstance();
    $grav = \Grav\Common\Grav::instance();
    $base = $grav['uri']->rootUrl(false) . '/' . trim($grav['admin']->base, '/');

    $manager->registerService('action', [
        "caption" => "Files",
        "icon" => "fa-folder",
        "scope" => ["admin:sidebar"],
        "order" => "after:parent",
        "href" => $base . "/files",
        'isSelected' => function ($context) {
            return strpos(\Grav\Common\Grav::instance()['uri']->route(), "/files") != false;
        }
    ]);

}

// Ye old list

/**
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/css/css.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/clike/clike.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/php/php.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/twig/twig.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/htmlmixed/htmlmixed.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/xml/xml.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/mode/javascript/javascript.js') %}#}
 * {#{% do assets.addJs('plugin://editor/lib/codemirror/addons/overlay.js') %}#}
 */
