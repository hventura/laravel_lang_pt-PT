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

    'accepted' => 'O campo :attribute deve ser aceite.',
    'accepted_if' => 'O campo :attribute deve ser aceite se :other é :value.',
    'active_url' => 'O campo :attribute não é um URL válido.',
    'after' => 'O campo :attribute deve ser uma data posterior a :date.',
    'after_or_equal' => 'O campo :attribute deve ser uma data posterior ou igual a :date.',
    'alpha' => 'O campo :attribute só pode conter letras.',
    'alpha_dash' => 'O campo ":attribute" só pode conter letras, números e traços.',
    'alpha_num' => 'O campo ":attribute" só pode conter letras e números.',
    'array' => 'O campo ":attribute" deve ser uma matriz (array).',
    'ascii' => 'O campo :attribute só deve conter caracteres alfa numéricos de um bite apenas ou simbolos.',
    'before' => 'O campo ":attribute" deve ser uma data anterior :date.',
    'before_or_equal' => 'O campo ":attribute" deve ser uma data anterior ou igual a :date.',
    'between' => [
        'numeric' => 'O campo ":attribute" deve ser entre :min e :max.',
        'file' => 'O campo ":attribute" deve ser entre :min e :max kilobytes.',
        'string' => 'O campo ":attribute" deve ser entre :min e :max caracteres.',
        'array' => 'O campo ":attribute" deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo ":attribute" deve ser verdadeiro ou falso.',
    'confirmed' => 'O campo ":attribute" de confirmação não confere.',
    'current_password' => 'A palavra passe está incorreta.',
    'date' => 'O campo ":attribute" não é uma data válida.',
    'date_equals' => 'O campo ":attribute" deve ser uma data igual a :date.',
    'date_format' => 'O campo ":attribute" não corresponde ao formato :format.',
    'decimal' => 'O campo :attribute deve conter apenas :decimal casas decimais.',
    'declined' => 'O campo :attribute deve ser recusado.',
    'declined_if' => 'O campo :attribute deve ser recusado se :other for :value.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'dimensions' => 'O campo :attribute tem dimensões de imagem inválidas.',
    'distinct' => 'O campo :attribute tem valores duplicados.',
    'doesnt_end_with' => 'O campo :attribute não pode terminar com o seguinte: :values.',
    'doesnt_start_with' => 'O campo :attribute não pode iniciar com o seguinte: :values.',
    'email' => 'O campo :attribute tem de ser um email válido.',
    'ends_with' => 'O campo :attribute deve terminar com o seguinte: :values.',
    'enum' => 'A seleção :attribute é inválida.',
    'exists' => 'A seleção :attribute é inválida.',
    'file' => 'O campo :attribute deve ser um ficheiro.',
    'filled' => 'O campo :attribute tem de ter um valor.',
    'gt' => [
        'array' => 'O campo ":attribute" deve conter mais de ":value" itens.',
        'file' => 'O campo ":attribute" deve ser maior que ":value" kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser maior que ":value".',
        'string' => 'O campo ":attribute" deve ser maior que ":value" caracteres.',
    ],
    'gte' => [
        'array' => 'O campo ":attribute" deve conter :value itens ou mais.',
        'file' => 'O campo ":attribute" deve ser maior ou igual a :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser maior ou igual a :value.',
        'string' => 'O campo ":attribute" deve ser maior ou igual a :value caracteres.',
    ],
    'image' => 'O campo ":attribute" deve ser uma imagem.',
    'in' => 'O campo ":attribute" selecionado é inválido.',
    'in_array' => 'O campo ":attribute" não existe em ":other".',
    'integer' => 'O campo ":attribute" deve ser um número inteiro.',
    'ip' => 'O campo ":attribute" deve ser um endereço de IP válido.',
    'ipv4' => 'O campo ":attribute" deve ser um endereço IPv4 válido.',
    'ipv6' => 'O campo ":attribute" deve ser um endereço IPv6 válido.',
    'json' => 'O campo ":attribute" deve ser uma string JSON válida.',
    'lowercase' => 'O campo :attribute tem de ser em letras minúsculas.',
    'lt' => [
        'array' => 'O campo ":attribute" deve conter menos de :value itens.',
        'file' => 'O campo ":attribute" deve ser menor que :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser menor que ":value".',
        'string' => 'O campo ":attribute" deve ser menor que :value caracteres.',
    ],
    'lte' => [
        'array' => 'O campo ":attribute" não deve conter mais que :value itens.',
        'file' => 'O campo ":attribute" deve ser menor ou igual a :value kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser menor ou igual a ":value".',
        'string' => 'O campo ":attribute" deve ser menor ou igual a :value caracteres.',
    ],
    'mac_address' => 'O campo :attribute deve ser um endereço MAC válido.',
    'max' => [
        'array' => 'O campo ":attribute" não pode ter mais do que :max itens.',
        'file' => 'O campo ":attribute" não pode ser superior a :max kilobytes.',
        'numeric' => 'O campo ":attribute" não pode ser superior a :max.',
        'string' => 'O campo ":attribute" não pode ser superior a :max caracteres.',
    ],
    'digits' => 'O campo :attribute deve conter apenas :digits digitos.',
    'digits_between' => 'O campo :attribute deve conter entre :min e :max digitos.',
    'max_digits' => 'O campo :attribute não pode conter mais do que :max digitos.',
    'min_digits' => 'O campo :attribute tem de conter pelo menos :min digitos.',
    'mimes' => 'O campo ":attribute" deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo ":attribute" deve ser um arquivo do tipo: :values.',
    'min' => [
        'array' => 'O campo ":attribute" deve ter pelo menos :min itens.',
        'file' => 'O campo ":attribute" deve ter pelo menos :min kilobytes.',
        'numeric' => 'O campo ":attribute" deve ser pelo menos :min.',
        'string' => 'O campo ":attribute" deve ter pelo menos :min caracteres.',
    ],
    'missing' => 'O campo :attribute deve estar em falta.',
    'missing_if' => 'O campo :attribute deve estar em falta quando :other for :value.',
    'missing_unless' => 'O campo :attribute deve estar em falta a menos que :other seja :value.',
    'missing_with' => 'O campo :attribute deve estar em falta quando :values estiver presente.',
    'missing_with_all' => 'O campo :attribute deve estar em falta quando :values estiverem presentes.',
    'multiple_of' => 'O campo :attribute deve ser um múltiplo de :value.',
    'not_in' => 'A opção selecionada em :attribute é inválida.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'password' => [
        'letters' => 'O campo :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O campo :attribute deve conter pelo menos uma letra maiúscula e uma letra minúscula.',
        'numbers' => 'O campo :attribute deve conter pelo menos um número.',
        'symbols' => 'O campo :attribute deve conter pelo menos um símbolo.',
        'uncompromised' => 'O :attribute fornecido apareceu em uma violação de dados. Por favor, escolha um :attribute diferente.',
    ],
    'present' => 'O campo :attribute deve estar presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other é :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja em :values.',
    'prohibits' => 'O campo :attribute proíbe que :other esteja presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_array_keys' => 'O campo :attribute deve conter entradas para: :values.',
    'required_if' => 'O campo :attribute é obrigatório quando :other é :value.',
    'required_if_accepted' => 'O campo :attribute é obrigatório quando :other é aceito.',
    'required_unless' => 'O campo :attribute é obrigatório a menos que :other esteja em :values.',
    'required_with' => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos :values está presente.',
    'same' => 'O campo :attribute deve ser igual a :other.',
    'size' => [
        'array' => 'O campo :attribute deve conter :size itens.',
        'file' => 'O campo :attribute deve ter :size kilobytes.',
        'numeric' => 'O campo :attribute deve ser :size.',
        'string' => 'O campo :attribute deve ter :size caracteres.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser um fuso horário válido.',
    'unique' => 'O :attribute já foi utilizado.',
    'uploaded' => 'Falha ao carregar :attribute.',
    'uppercase' => 'O campo :attribute deve estar em letras maiúsculas.',
    'url' => 'O campo :attribute deve ser uma URL válida.',
    'ulid' => 'O campo :attribute deve ser um ULID válido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
