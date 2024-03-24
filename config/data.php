<?php

    class Data{

        // Campos para el formulario de login
        public static $login_form=[
            ['email', 'email', 'Email'],
            ['password', 'password', 'Contraseña']
        ];

        // Campos para el formulario de creacion de usuario
        public static $create_user=[
            ['name', 'text', 'Nombre completo'],
            ['email', 'email', 'Email'],
            ['password', 'password', 'Contraseña']
        ];

        // Campos para el formulario de creacion de cliente
        public static $create_client=[
            ['name', 'text', 'Nombre completo'],
            ['email', 'email', 'Email'],
            ['age', 'number', 'Edad'],
            ['phone', 'number', 'Telefono'],
            ['status', 'select', 'Estatus']
        ];

        // Titulos de la tabla "mis cliente"
        public static $clients_titles=[
            'nombre', 'email', 'edad', 'phone', 'status', 'acciones'
        ];

        // Titulos de la tabla "usuarios"
        public static $users_titles=[
            'nombre', 'email'
        ];

    }