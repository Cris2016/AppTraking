<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El atributo: debe ser aceptada.',
    'active_url'           => 'El campo no es una URL válida.',
    'after'                => 'El campo debe ser una fecha posterior al: fecha.',
    'alpha'                => 'El campo sólo puede contener letras.',
    'alpha_dash'           => 'El campo sólo puede contener letras, números y guiones.',
    'alpha_num'            => 'El campo sólo puede contener letras y números.',
    'array'                => 'El campo debe ser una matriz.',
    'before'               => 'El campo debe ser una fecha antes: la fecha.',
    'between'              => [
        'numeric' => 'El atributo: debe estar entre: min y: máx.',
        'file'    => 'El atributo: debe estar entre: min y: kilobytes max.',
        'string'  => 'El atributo: debe estar entre: min y: caracteres como máximo.',
        'array'   => 'El atributo: debe tener entre: min y: max artículos.',
    ],
    'boolean'              => 'El: campo de atributo debe ser verdadera o falsa.',
    'confirmed'            => 'El: confirmación de atributo no coincide.',
    'date'                 => 'El atributo: no es una fecha válida.',
    'date_format'          => 'El atributo: no coincide con el formato: formato.',
    'different'            => 'El atributo: y: otros deben ser diferentes.',
    'digits'               => 'El: atributo debe ser: números dígitos.',
    'digits_between'       => 'El atributo: debe estar entre dígitos :máx y :min.',
    'distinct'             => 'El: campo de atributo tiene un valor duplicado.',
    'email'                => 'El atributo: Debe ser una dirección válida de correo electrónico.',
    'exists'               => 'El seleccionado: atributo no es válido.',
    'filled'               => 'El :attribute campo es requerido.',
    'image'                => 'El :atributo debe ser una imagen.',
    'in'                   => 'El atributo seleccionado: no es válido.',
    'in_array'             => 'El: campo de atributo no existe en: otros.',
    'integer'              => 'El: atributo debe ser un número entero.',
    'ip'                   => 'El atributo: Debe ser una dirección IP válida.',
    'json'                 => 'El atributo: debe ser una cadena JSON válida.',
    'max'                  => [
        'numeric' => 'El atributo: no puede ser mayor que: máx.',
        'file'    => 'El atributo: no puede ser mayor que: kilobytes max.',
        'string'  => 'El atributo: no puede ser mayor que: caracteres como máximo.',
        'array'   => 'El atributo: no puede tener más de: elementos max.',
    ],
    'mimes'                => 'El atributo: debe ser un archivo de tipo:: valores.',
    'min'                  => [
        'numeric' => 'El: atributo debe ser al menos: min.',
        'file'    => 'El: atributo debe ser al menos: min kilobytes.',
        'string'  => 'El :atributo debe ser al menos :min caracteres.',
        'array'   => 'El :atributo debe tener al menos :min items.',
    ],
    'not_in'               => 'El seleccionado: atributo no es válido.',
    'numeric'              => 'El: atributo debe ser un número.',
    'present'              => 'El: campo de atributo debe estar presente.',
    'regex'                => 'El :Formato de atributo no es válido.',
    'required'             => 'El :attribute  es requerido.',
    'required_if'          => 'Se requiere campo de atributos cuando:: el otro es: valor.',
    'required_unless'      => 'Se requiere campo de atributos cuando:: el otro es: valor.',
    'required_with'        => 'El: campo de atributo es necesario cuando: Los valores están presentes.',
    'required_with_all'    => 'El: campo de atributo es necesario cuando: Los valores están presentes.',
    'required_without'     => 'Se requiere campo de atributos cuando:: El valor no está presente.',
    'required_without_all' => 'El: campo de atributo es necesario cuando ninguno de: Los valores están presentes.',
    'same'                 => 'El atributo: y: otros deben coincidir.',
    'size'                 => [
        'numeric' => 'El: atributo debe ser: tamaño.',
        'file'    => 'El: atributo debe ser: kilobytes de tamaño.',
        'string'  => 'El: atributo debe ser: caracteres de tamaño.',
        'array'   => 'El atributo: debe contener: artículos de tamaño.',
    ],
    'string'               => 'El atributo: debe ser una cadena.',
    'timezone'             => 'El atributo: debe ser una zona válida.',
    'unique'               => 'El atributo: ya ha sido tomada.',
    'url'                  => 'El :Formato de atributo no es válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Mensaje-Personalizado',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
