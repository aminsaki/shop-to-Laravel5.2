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

    'accepted'             => 'با :attribute باید موافقت شود.',
    'active_url'           => 'آدرس :attribute نامعتبر است',
    'after'                => ':attribute باید بعد از  :date باشد.',
    'alpha'                => ':attribute فقط میتواند حروف  باشد.',
    'alpha_dash'           => ':attribute میتواند حروف ، اعداد و علامت - باشد',
    'alpha_num'            => ':attribute میتواند حرف و عدد باشد.',
    'array'                => ':attribute باید یک ارایه باشد.',
    'before'               => ':attribute باید قبل از  :date باشد.',
    'between'              => [
        'numeric' => ':attribute باید بین  :min و :max باشد.',
        'file'    => 'حجم فایل :attribute باید بین  :min و :max کیلویابت باشد.',
        'string'  => ':attribute باید بین حروف  :min و :max باشد.',
        'array'   => ':attribute باید شامل  :min تا :max مورد باشد.',
    ],
    'boolean'              => ':attribute باید مقداری منطقی باشد',
    'confirmed'            => 'تکرار :attribute مطابق نمیباشد',
     'password confirm'     =>'رمز ورود باهم مطابقت ندارد',
    'date'                 => 'تاریخ :attribute معتبر نیست',
    'date_format'          => ':attribute باید با فرمت :format باشد.',
    'different'            => ':attribute و  :other باید متفاوت باشند.',
    'digits'               => ':attribute باید :digits رقم باشد.',
    'digits_between'       => ':attribute باید بین  :min تا :max رقم باشد.',
    'email'                => ':attribute باید یک ایمیل معتبر باشد.',
    'exists'               => ':attribute انتخاب شده معتبر نیست.',
    'filled'               => ':attribute الزامی است.',
    'image'                => ':attribute باید عکس باشد',
    'in'                   => ':attribute انتخاب شده معتبر نیست.',
    'integer'              => ':attribute باید عدد صحیح باشد.',
    'ip'                   => ':attribute باید IP معتبری باشد',
    'json'                 => ':attribute باید جیسون باشد',
    'max'                  => [
        'numeric' => ':attribute باید بیشتر از  :max باشد.',
        'file'    => 'فایل :attribute میتواند حداکثر  :max کیلو بایت باشد.',
        'string'  => ':attribute حداکثر میتواند  :max حرف باشد.',
        'array'   => ':attribute میتواند حداکثر  :max مورد داشته باشد.',
    ],
    'mimes'                => ':attribute باید فایلی با فرمت  :values باشد.',
    'min'                  => [
        'numeric' => ':attribute باید کمتر از :min باشد.',
        'file'    => 'فایل :attribute میتواند حداقل :min کیلوبایت باشد.',
        'string'  => ':attribute میتواند حداقل  :min حرف باشد.',
        'array'   => ':attribute باید حداقل  :min مورد داشته باشد.',
    ],
    'not_in'               => ':attribute نامعتبر است.',
    'numeric'              => ':attribute باید عدد باشد.',
    'regex'                => ':attribute نامعتبر است.',
    'required'             => ':attribute الزامی است',
    'required_if'          => ':attribute الزامی است وقتی :other حاوی مقدار  :value میباشد.',
    'required_with'        => ':attribute الزامی است وقتی مقدار :values موجود است',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => ':attribute و :other باید مطابق باشند.',
    'size'                 => [
        'numeric' => ':attribute باید  :size. باشد',
        'file'    => 'حجم فایل :attribute باید  :size کیلوبایت باشد.',
        'string'  => ':attribute باید  :size رشته باشد.',
        'array'   => ':attribute باید شامل  :size مورد باشد.',
    ],
    'string'               => ':attribute باید رشته باشد.',
    'timezone'             => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique'               => ':attribute باید یکتا باشد.',
    'url'                  => ':attribute باید آدرس معتبر باشد.',

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
         'name'=>'نام',
        'username'=>'نام',
        'email'=>'نام کاربری',
        'password'=>'رمز عبور',
        'phone'=>'شماره تماس',
        'title'=>'عنوان',
        'content'=>'محتوا',
         'size'=>'انداز',
          'password confirm'=>'رمز عبور ها باهم برابر نیستن',

    ],

];
