<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'schedule' => [
            'table'      => 'amethyst_schedules',
            'comment'    => 'Schedule',
            'model'      => Amethyst\Models\Schedule::class,
            'schema'     => Amethyst\Schemas\ScheduleSchema::class,
            'repository' => Amethyst\Repositories\ScheduleRepository::class,
            'serializer' => Amethyst\Serializers\ScheduleSerializer::class,
            'validator'  => Amethyst\Validators\ScheduleValidator::class,
            'authorizer' => Amethyst\Authorizers\ScheduleAuthorizer::class,
            'faker'      => Amethyst\Fakers\ScheduleFaker::class,
            'manager'    => Amethyst\Managers\ScheduleManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'schedule' => [
                'enabled'    => true,
                'controller' => Amethyst\Http\Controllers\Admin\SchedulesController::class,
                'router'     => [
                    'as'     => 'schedule.',
                    'prefix' => '/schedules',
                ],
            ],
        ],
    ],
];
