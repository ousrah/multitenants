<?php

namespace App\Main;


class SidebarPanel
{
    public static function elements()
    {
        return [
            'title' => 'Elements',
            'items' => [
                [
                    'elements_avatar' => [
                        'title' => 'Avatar',
                        'route_name' => 'index'
                    ],
                    'elements_alert' => [
                        'title' => 'Alert',
                        'route_name' => 'index'
                    ],
                    'elements_button' => [
                        'title' => 'Button',
                        'route_name' => 'index'
                    ],
                    'elements_button_group' => [
                        'title' => 'Button Group',
                        'route_name' => 'index'
                    ],
                    'elements_badge' => [
                        'title' => 'Badge',
                        'route_name' => 'index'
                    ],
                    'elements_breadcrumb' => [
                        'title' => 'Breadcrumb',
                        'route_name' => 'index'
                    ],
                    'elements_card' => [
                        'title' => 'Card',
                        'route_name' => 'index'
                    ],
                    'elements_divider' => [
                        'title' => 'Divider',
                        'route_name' => 'index'
                    ],
                    'elements_mask' => [
                        'title' => 'Mask',
                        'route_name' => 'index'
                    ],
                    
                ],
                [
                    'elements_forms' => [
                        'title' => 'Forms',
                        'route_name' => 'index'
                    ],
                    
                ]
            ]
        ];
    }

    public static function components()
    {
        return [
            'title' => 'Components',
            'items' => [
                [
                    

                ],
                [
                   
                ],
                [
                   
                ],
                [
                    
                ],
            ]
        ];
    }

    public static function forms()
    {
        return [
            'title' => 'Forms',
            'items' => [
                [
                    
                ],
                [
                    
                ]
            ]
        ];
    }

    public static function layouts()
    {
        return [
            'title' => 'Layouts',
            'items' => [
                [
                    
                    
                ],
                [
                    'layouts_sign_in' => [
                        'title' => 'Sign In',
                        'submenu' => [
                            
                        ]
                    ],
                    'layouts_sign_up' => [
                        'title' => 'Sign Up',
                        'submenu' => [
                            
                        ]
                    ],
                ],
                [
                    
                ],
            ]
        ];
    }

    public static function apps()
    {
        return [
            'title' => 'Applications',
            'items' => [
                [
                    
                ],
                [
                
                ],
            ]
        ];
    }

    public static function dashboards()
    {
        return [
            'title' => 'Dashboards',
            'items' => [
                [
                    
                ],
                [
                    
                ],
                [
                
                ],
            ]
        ];
    }

    public static function all(){
        return [self::dashboards(),self::apps(), self::layouts(), self::forms(), self::components(), self::elements()];
    }
}
