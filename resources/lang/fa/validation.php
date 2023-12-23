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

    'accepted' => 'فیلد :attribute باید تأیید شود.',
    'active_url' => 'فیلد :attribute یک URL معتبر نیست.',
    'after' => 'فیلد :attribute باید یک تاریخ پس از :date باشد.',
    'after_or_equal' => 'فیلد :attribute باید یک تاریخ برابر یا پس از :date باشد.',
    'alpha' => 'فیلد :attribute فقط می‌تواند شامل حروف باشد.',
    'alpha_dash' => 'فیلد :attribute فقط می‌تواند شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => 'فیلد :attribute فقط می‌تواند شامل حروف و اعداد باشد.',
    'array' => 'فیلد :attribute باید یک آرایه باشد.',
    'before' => 'فیلد :attribute باید یک تاریخ پیش از :date باشد.',
    'before_or_equal' => 'فیلد :attribute باید یک تاریخ برابر یا پیش از :date باشد.',
    'between' => [
        'numeric' => 'فیلد :attribute باید بین :min و :max باشد.',
        'file' => 'فیلد :attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید بین :min و :max کاراکتر باشد.',
        'array' => 'فیلد :attribute باید بین :min و :max آیتم داشته باشد.',
    ],
    'boolean' => 'فیلد :attribute باید true یا false باشد.',
    'confirmed' => 'تأییدیه فیلد :attribute مطابقت ندارد.',
    'date' => 'فیلد :attribute یک تاریخ معتبر نیست.',
    'date_equals' => 'فیلد :attribute باید یک تاریخ برابر با :date باشد.',
    'date_format' => 'فیلد :attribute با فرمت :format مطابقت ندارد.',
    'different' => 'فیلد :attribute و :other باید متفاوت باشند.',
    'digits' => 'فیلد :attribute باید :digits رقم باشد.',
    'digits_between' => 'فیلد :attribute باید بین :min و :max رقم باشد.',
    'dimensions' => 'فیلد :attribute ابعاد تصویر نامعتبر دارد.',
    'distinct' => 'فیلد :attribute دارای مقدار تکراری است.',
    'email' => 'فیلد :attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => 'فیلد :attribute باید با یکی از موارد زیر پایان یابد: :values.',
    'exists' => 'مقدار انتخابی برای :attribute معتبر نیست.',
    'file' => 'فیلد :attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید دارای مقدار باشد.',
    'gt' => [
        'numeric' => 'فیلد :attribute باید بزرگتر از :value باشد.',
        'file' => 'فیلد :attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید بزرگتر از :value کاراکتر باشد.',
        'array' => 'فیلد :attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => 'فیلد :attribute باید بزرگتر یا مساوی با :value باشد.',
        'file' => 'فیلد :attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید بزرگتر یا مساوی با :value کاراکتر باشد.',
        'array' => 'فیلد :attribute باید دارای :value آیتم یا بیشتر باشد.',
    ],
    'image' => 'فیلد :attribute باید یک تصویر باشد.',
    'in' => 'مقدار انتخاب شده برای :attribute معتبر نیست.',
    'in_array' => 'فیلد :attribute در :other وجود ندارد.',
    'integer' => 'فیلد :attribute باید یک عدد صحیح باشد.',
    'ip' => 'فیلد :attribute باید یک IP معتبر باشد.',
    'ipv4' => 'فیلد :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'فیلد :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'فیلد :attribute باید یک رشته JSON معتبر باشد.',
    'lt' => [
        'numeric' => 'فیلد :attribute باید کمتر از :value باشد.',
        'file' => 'فیلد :attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید کمتر از :value کاراکتر باشد.',
        'array' => 'فیلد :attribute باید دارای کمتر از :value آیتم باشد.',
    ],
    'lte' => [
        'numeric' => 'فیلد :attribute باید کمتر یا مساوی با :value باشد.',
        'file' => 'فیلد :attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید کمتر یا مساوی با :value کاراکتر باشد.',
        'array' => 'فیلد :attribute نباید دارای بیشتر از :value آیتم باشد.',
    ],
    'max' => [
        'numeric' => 'فیلد :attribute نباید بزرگتر از :max باشد.',
        'file' => 'فیلد :attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'string' => 'فیلد :attribute نباید بزرگتر از :max کاراکتر باشد.',
        'array' => 'فیلد :attribute نباید دارای بیشتر از :max آیتم باشد.',
    ],
    'mimes' => 'فیلد :attribute باید یک فایل از نوع :values باشد.',
    'mimetypes' => 'فیلد :attribute باید یک فایل از نوع :values باشد.',
    'min' => [
        'numeric' => 'فیلد :attribute باید حداقل :min باشد.',
        'file' => 'فیلد :attribute باید حداقل :min کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید حداقل :min کاراکتر باشد.',
        'array' => 'فیلد :attribute باید حداقل دارای :min آیتم باشد.',
    ],
    'multiple_of' => 'فیلد :attribute باید مضربی از :value باشد',
    'not_in' => 'مقدار انتخاب شده برای :attribute معتبر نیست.',
    'not_regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'numeric' => 'فیلد :attribute باید یک عدد باشد.',
    'password' => 'رمز عبور اشتباه است.',
    'present' => 'فیلد :attribute باید حاوی مقدار باشد.',
    'regex' => 'فرمت فیلد :attribute نامعتبر است.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_if' => 'فیلد :attribute الزامی است زمانی که :other برابر با :value باشد.',
    'required_unless' => 'فیلد :attribute الزامی است مگر اینکه :other در :values باشد.',
    'required_with' => 'فیلد :attribute الزامی است زمانی که :values حاضر باشد.',
    'required_with_all' => 'فیلد :attribute الزامی است زمانی که تمامی :values حاضر باشند.',
    'required_without' => 'فیلد :attribute الزامی است زمانی که :values حاضر نباشد.',
    'required_without_all' => 'فیلد :attribute الزامی است زمانی که هیچکدام از :values حاضر نباشند.',
    'same' => 'فیلد :attribute و :other باید مطابقت داشته باشند.',
    'size' => [
        'numeric' => 'فیلد :attribute باید برابر با :size باشد.',
        'file' => 'فیلد :attribute باید برابر با :size کیلوبایت باشد.',
        'string' => 'فیلد :attribute باید برابر با :size کاراکتر باشد.',
        'array' => 'فیلد :attribute باید شامل :size آیتم باشد.',
    ],
    'starts_with' => 'فیلد :attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => 'فیلد :attribute باید یک رشته باشد.',
    'timezone' => 'فیلد :attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => 'مقدار فیلد :attribute قبلاً استفاده شده است.',
    'uploaded' => 'آپلود فایل :attribute با شکست مواجه شد.',
    'url' => 'فرمت URL فیلد :attribute نامعتبر است.',
    'uuid' => 'فیلد :attribute باید یک UUID معتبر باشد.',

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
        'order_price' => [
            'min' => 'حداقل سفارش :min است. لطفاً چند مورد دیگر به سبد خرید اضافه کنید.',
        ],
        'address_id' => [
            'required' => 'لطفاً آدرس خود را انتخاب کنید.',
        ],
        'stripe_payment_error_action' => [
            'required' => 'تلاش برای پرداخت ناموفق بود زیرا نیاز به اقدام اضافی قبل از تکمیل آن است'
        ],
        'stripe_payment_failure' => [
            'required' => 'تلاش برای پرداخت به دلیل دلایل مختلفی از جمله اتمام موجودی ناموفق بود. لطفاً اطلاعات ارائه شده را بررسی کنید.'
        ],
        'paypal_payment_error_action' => [
            'required' => 'تلاش برای پرداخت ناموفق بود زیرا نیاز به اقدام اضافی قبل از تکمیل آن است'
        ],
        'general_payment_error_action' => [
            'required' => 'تلاش برای پرداخت ناموفق بود. اگر مدیر سیستم هستید، لطفاً مسأله در ارائه‌دهنده پرداخت بررسی شود.'
        ],
        'link_payment_error_action' => [
            'required' => 'روش پرداخت مبتنی بر لینک یافت نشد'
        ],
        'paypal_payment_approval_missing' => [
            'required' => 'ما نتواستیم لینک پرداخت پیپال را دریافت کنیم.'
        ],
        'mollie_error_action' => [
            'required' => 'خطا در دریافت لینک پرداخت.'
        ],
        'paystack_error_action' => [
            'required' => "خطا در ارتباط با PayStack"
        ],
        'dinein_table_id' => [
            'required' => 'لطفاً میز خود را انتخاب کنید.',
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader-friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];

