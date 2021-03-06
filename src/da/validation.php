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

    'accepted'             => ':attribute skal accepteres.',
    'active_url'           => ':attribute er ikke en gyldig webadresse.',
    'after'                => ':attribute skal være en dato efter :date.',
    'after_or_equal'       => ':attribute skal være en dato efter eller lig med :date.',
    'alpha'                => ':attribute må kun indeholde bogstaver.',
    'alpha_dash'           => ':attribute må kun indeholde bogstaver, tal og bindestreger.',
    'alpha_num'            => ':attribute må kun indeholde bogstaver og tal.',
    'array'                => ':attribute skal være en matrix.',
    'before'               => ':attribute skal være en dato før :date.',
    'before_or_equal'      => ':attribute skal være en dato før eller lig med :date.',
    'between'              => [
        'numeric' => ':attribute skal være mellem :min og :max.',
        'file'    => ':attribute skal være mellem :min og :max kilobytes.',
        'string'  => ':attribute skal være mellem :min og :max tegn.',
        'array'   => ':attribute skal være mellem :min og :max elementer.',
    ],
    'boolean'              => ':attribute feltet skal være sandt eller falsk.',
    'confirmed'            => ':attribute bekræftelsen stemmer ikke overens.',
    'date'                 => ':attribute er ikke en gyldig dato.',
    'date_format'          => ':attribute stemmer ikke overens med formatet :format.',
    'different'            => ':attribute og :other skal være anderledes.',
    'digits'               => ':attribute skal være :digits cifre.',
    'digits_between'       => ':attribute skal være mellem :min og :max cifre.',
    'dimensions'           => ':attribute har ugyldige billeddimensioner.',
    'distinct'             => ':attribute feltet har en duplikatværdi.',
    'email'                => ':attribute skal være en gyldig e-mail-adresse.',
    'exists'               => 'Den valgte :attribute er ugyldig.',
    'file'                 => ':attribute skal være en fil.',
    'filled'               => ':attribute feltet skal have en værdi.',
    'gt'                   => [
        'numeric' => ':attribute skal være større end :value.',
        'file'    => ':attribute skal være større end :value kilobytes.',
        'string'  => ':attribute skal være større end :value tegn.',
        'array'   => ':attribute skal have mere end :value elementer.',
    ],
    'gte'                  => [
        'numeric' => ':attribute skal være større end eller lige :value.',
        'file'    => ':attribute skal være større end eller lige :value kilobytes.',
        'string'  => ':attribute skal være større end eller lige :value tegn.',
        'array'   => ':attribute skal have :value eller mere elementer.',
    ],
    'image'                => ':attribute skal være et billede.',
    'in'                   => 'Den valgte :attribute er ugyldig.',
    'in_array'             => ':attribute feltet findes ikke i :other.',
    'integer'              => ':attribute skal være et helt tal',
    'ip'                   => ':attribute skal være en gyldig IP-adresse.',
    'ipv4'                 => ':attribute skal være en gyldig IPv4-adresse.',
    'ipv6'                 => ':attribute skal være en gyldig IPv6-adresse.',
    'json'                 => ':attribute skal være en gyldig JSON-streng.',
    'lt'                   => [
        'numeric' => ':attribute skal være mindre end :value.',
        'file'    => ':attribute skal være mindre end :value kilobytes.',
        'string'  => ':attribute skal være mindre end :value tegn.',
        'array'   => ':attribute skal have mindre end :value elementer.',
    ],
    'lte'                  => [
        'numeric' => ':attribute skal være mindre end eller lig med :value.',
        'file'    => ':attribute skal være mindre end eller lig med :value kilobytes.',
        'string'  => ':attribute skal være mindre end eller lig med :value tegn.',
        'array'   => ':attribute må ikke have mere end :value elementer.',
    ],
    'max'                  => [
        'numeric' => ':attribute må ikke være større end :max.',
        'file'    => ':attribute må ikke være større end :max kilobytes.',
        'string'  => ':attribute må ikke være større end :max tegn.',
        'array'   => ':attribute må ikke have mere end :max elementer.',
    ],
    'mimes'                => ':attribute skal være en fil af typen: :values.',
    'mimetypes'            => ':attribute skal være en fil af typen: :values.',
    'min'                  => [
        'numeric' => ':attribute skal være mindst :min.',
        'file'    => ':attribute skal være mindst :min kilobytes.',
        'string'  => ':attribute skal være mindst :min tegn.',
        'array'   => ':attribute skal mindst have :min elementer.',
    ],
    'not_in'               => 'Den valgte :attribute er ugyldig',
    'not_regex'            => ':attribute formatet er ugyldigt.',
    'numeric'              => ':attribute skal være et nummer.',
    'present'              => ':attribute feltet skal være til stede.',
    'recaptcha'            => 'Recaptcha-svaret var ugyldigt',
    'regex'                => ':attribute formatet er ugyldigt.',
    'required'             => ':attribute felt er påkrævet.',
    'required_if'          => ':attribute felt er påkrævet, når :other er :value.',
    'required_unless'      => ':attribute felt er påkrævet, medmindre :other er i :values.',
    'required_with'        => ':attribute felt er påkrævet, når :values er til stede.',
    'required_with_all'    => ':attribute felt er påkrævet, når :values er til stede.',
    'required_without'     => ':attribute felt er påkrævet, når :values er ikke til stede.',
    'required_without_all' => ':attribute felt er påkrævet, når ingen af :values er til stede.',
    'same'                 => ':attribute og :other skal matche.',
    'size'                 => [
        'numeric' => ':attribute må være :size.',
        'file'    => ':attribute må være :size kilobytes.',
        'string'  => ':attribute må være :size tegn.',
        'array'   => ':attribute skal indeholde :size elementer.',
    ],
    'string'               => ':attribute kal være en streng.',
    'timezone'             => ':attribute skal være en gyldig zone.',
    'unique'               => ':attribute er allerede taget.',
    'uploaded'             => ':attribute kunne ikke uploade.',
    'url'                  => ':attribute formatet er ugyldigt.',

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
            'rule-name' => 'custom-message',
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

    'attributes' => [
        'displayname'           => 'visningsnavn',
        'email'                 => 'e-mail',
        'firstname'             => 'fornavn',
        'lastname'              => 'efternavn',
        'name'                  => 'navn',
        'password'              => 'kodeord',
        'passwordrepeat'        => 'kodeords bekræftelse',
        'profilepicture'        => 'profilbillede',
    ],

];
