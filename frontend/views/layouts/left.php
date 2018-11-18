<aside class="main-sidebar">

    <section class="sidebar">
        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'tachometer', 'url' => ['/site']],
                    ['label' => 'Job Handling', 'icon' => 'phone', 'url' => '#',
                        'items' => [
                            ['label' => 'Pending Jobs', 'icon' => 'warning ', 'url' => ['/jobs'],],
                            ['label' => 'In Progress Jobs', 'icon' => 'paper-plane-o', 'url' => ['#'],],
                            ['label' => 'Completed Jobs', 'icon' => 'thumbs-up', 'url' => ['#'],],
                        ],
                    ],
                    ['label' => 'Products', 'icon' => 'institution ', 'url' => '#',
                        'items' => [
                            ['label' => 'AC Units Inforamtion', 'icon' => 'info-circle', 'url' => ['/ac-info'],],
                            ['label' => 'Parts Information', 'icon' => 'wrench', 'url' => ['/ac-parts'],],

                        ],
                    ],
                    [
                        'label' => 'Customers & Payments',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'View Customers', 'icon' => 'user', 'url' => ['/customer'],],
                            ['label' => 'View Suppliers', 'icon' => 'group', 'url' => ['/supplier'],],
                            ['label' => 'Pending Payments', 'icon' => 'cc-visa', 'url' => ['#'],],
                        ],
                    ],
                    [
                        'label' => 'Service Jobs',
                        'icon' => 'suitcase',
                        'url' => '/services',

                    ],
                    ['label' => 'Estimates', 'icon' => 'dollar', 'url' => '#',
                        'items' => [
                            ['label' => 'Create Estimate', 'icon' => 'plus-square', 'url' => ['#'],],
                            ['label' => 'View Status', 'icon' => 'hourglass-2', 'url' => ['#'],],
                        ],
                    ],

                    ['label' => 'Admin Options', 'icon' => 'flash ', 'url' => '#',
                        'items' => [
                            ['label' => 'Manage Users', 'icon' => 'user-plus', 'url' => ['/user/admin'],],
                            ['label' => 'Type of Failures', 'icon' => 'plus', 'url' => ['/type-of-failure'],],
                            ['label' => 'Categories', 'icon' => 'plus', 'url' => ['/categories'],],
                            ['label' => 'Add Technicians', 'icon' => 'plus', 'url' => ['/employee'],],
                        ],
                    ],


                ],
            ]
        ) ?>

    </section>

</aside>