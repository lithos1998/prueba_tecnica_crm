<?php

    class Data{

        public static $login_form=[
            ['email', 'email', 'Email'],
            ['password', 'password', 'Contraseña']
        ];

        public static $create_user=[
            ['name', 'text', 'Nombre completo'],
            ['email', 'email', 'Email'],
            ['password', 'password', 'Contraseña']
        ];

        public static $create_client=[
            ['name', 'text', 'Nombre completo'],
            ['email', 'email', 'Email'],
            ['age', 'number', 'Edad'],
            ['phone', 'number', 'Telefono'],
            ['status', 'select', 'Estatus']
        ];

        public static $clients_titles=[
            'nombre', 'edad', 'email', 'phone', 'status', 'acciones'
        ];

        public static $users_titles=[
            'nombre', 'email'
        ];

    }