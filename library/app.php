<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#111111",
            "#ffffff"
        ],
        "bgColor": "#ffffff",
        "colors": [
            "#eac60b",
            "#e5244f",
            "#f1c50e",
            "#006cc2",
            "#b9c1cc"
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-color",
        "name": "u11"
    },
    "fontScheme": {
        "name": "custom-font-family-1",
        "fonts": {
            "heading": "Oswald, sans-serif",
            "text": "Raleway, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Oswald",
            "textTitle": "Raleway"
        }
    },
    "typography": {
        "name": "custom-page-typography-2",
        "title": {
            "font-size": 6,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "SM": {
                "font-size": 3.75
            },
            "XS": {
                "font-size": 3
            },
            "font-style": "",
            "text-decoration": "",
            "text-transform": "uppercase",
            "letter-spacing": "",
            "text-color": "palette-3-base",
            "border-color": "",
            "border-style": "",
            "color": "",
            "border": "",
            "button-shape": "",
            "border-radius": "",
            "underline": "",
            "gradient": "",
            "list-icon-src": "",
            "list-icon-spacing": "0.3",
            "list-icon-size": "0.8",
            "font": "Oswald, sans-serif",
            "font-weight": 500
        },
        "subtitle": {
            "font-weight": "400",
            "font-size": 2.25,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            }
        },
        "h1": {
            "font-weight": "400",
            "font-size": 3,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 2.25
            }
        },
        "h2": {
            "font-weight": "400",
            "font-size": 2.25,
            "line-height": "1_1",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            }
        },
        "h3": {
            "font-weight": "400",
            "font-size": 1.875,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20,
            "XS": {
                "font-size": 1.5
            }
        },
        "h4": {
            "font-weight": "400",
            "font-size": 1.5,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h5": {
            "font-weight": "400",
            "font-size": 1.25,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h6": {
            "font-weight": "400",
            "font-size": 1.125,
            "line-height": "1_2",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "largeText": {
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "smallText": {
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "hyperlink": {
            "text-color": "palette-1-base"
        },
        "link": {},
        "button": {
            "color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "blockquote": {
            "font-style": "italic",
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "theme": {
            "gradient": "",
            "image": ""
        },
        "htmlBaseSize": 16
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
?>
    <?php $GLOBALS['googleAnalyticsMarker'] = false; ?>
<?php
}
add_action('wp_head', 'theme_analytics', 0);


function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');