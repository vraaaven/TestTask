<?php

return[
    '' =>[
        'controller' => 'news',
        'action' => 'show',
    ],
    'news/show/page={page:\d+}' =>[
        'controller' => 'news',
        'action' => 'show',
    ],
    'view/id={id:\d+}' =>[
        'controller' => 'news',
        'action' => 'view',
    ],
    'news/show/view/id={id:\d+}' =>[
        'controller' => 'news',
        'action' => 'view',
    ],
    'news/show' =>[
        'controller' => 'news',
        'action' => 'show',
    ]

];
