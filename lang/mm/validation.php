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

    'accepted'        => ':attribute အကွက်ကို လက်ခံရပါမည်။',
    'accepted_if'     => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို လက်ခံရပါမည်။',
    'active_url'      => ':attribute အကွက်သည် မှန်ကန်သော URL ဖြစ်ရပါမည်။',
    'after'           => ':attribute အကွက်သည် :date ပြီးနောက် ရက်စွဲတစ်ခု ဖြစ်ရပါမည်။',
    'after_or_equal'  => ':attribute အကွက်သည် ရက်စွဲပြီးနောက် သို့မဟုတ် :date နှင့် တူညီရပါမည်။',
    'alpha'           => ':attribute အကွက်တွင် စာလုံးများသာ ပါဝင်ရပါမည်။',
    'alpha_dash'      => ':attribute အကွက်တွင် စာလုံးများ၊ နံပါတ်များ၊ ဒက်ရှ်များနှင့် အောက်အမှတ်များသာ ပါဝင်ရပါမည်။',
    'alpha_num'       => ':attribute အကွက်တွင် စာလုံးများနှင့် နံပါတ်များသာ ပါဝင်ရပါမည်။',
    'array'           => ':attribute အကွက်သည် array တစ်ခု ဖြစ်ရမည်။',
    'ascii'           => ':attribute အကွက်တွင် single-byte အက္ခရာဂဏန်းစာလုံးများနှင့် သင်္ကေတများသာ ပါဝင်ရပါမည်။',
    'before'          => ':attribute အကွက်သည် :date မတိုင်မီ ရက်စွဲတစ်ခု ဖြစ်ရမည်။',
    'before_or_equal' => ':attribute အကွက်သည် ရက်စွဲမတိုင်မီ သို့မဟုတ် :date နှင့် တူညီရပါမည်။',

    'between' => [
        'array'   => ':attribute အကွက်သည် :min နှင့် :max အရာများကြားတွင် ရှိရမည်။',
        'file'    => ':attribute အကွက်သည် :min နှင့် :max ကီလိုဘိုက်ကြားရှိရမည်။',
        'numeric' => ':attribute အကွက်သည် :min နှင့် :max အကြား ဖြစ်ရမည်။',
        'string'  => ':attribute အကွက်သည် :min နှင့် :max စာလုံးများကြားရှိရမည်။',
    ],

    'boolean'           => ':attribute အကွက်သည် မှန် သို့မဟုတ် အမှား ဖြစ်ရမည်။',
    'can'               => ':attribute အကွက်တွင် ခွင့်ပြုချက်မရှိသည် တန်ဖိုးတစ်ခု ပါရှိသည်။',
    'confirmed'         => ':attribute အကွက်အတည်ပြုချက်သည် မကိုက်ညီပါ။',
    'current_password'  => 'စကားဝှက် မမှန်ပါ။',
    'date'              => ':attribute အကွက်သည် မှန်ကန်သောရက်စွဲဖြစ်ရပါမည်။',
    'date_equals'       => ':attribute အကွက်သည် :date နှင့် ညီမျှသော ရက်စွဲတစ်ခု ဖြစ်ရမည်။',
    'date_format'       => ':attribute အကွက်သည် ဖော်မတ် :format နှင့် ကိုက်ညီရမည်။',
    'decimal'           => ':attribute အကွက်တွင် :decimal ဒဿမနေရာများ ရှိရပါမည်။',
    'declined'          => ':attribute အကွက်ကို ငြင်းပယ်ရပါမည်။',
    'declined_if'       => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို ငြင်းပယ်ရပါမည်။',
    'different'         => ':attribute အကွက်နှင့် :အခြားသည် ကွဲပြားရပါမည်။',
    'digits'            => ':attribute အကွက်သည် :digits ဂဏန်းများ ဖြစ်ရမည်။',
    'digits_between'    => ':attribute အကွက်သည် :min နှင့် :max ဂဏန်းများကြား ဖြစ်ရမည်။',
    'dimensions'        => ':attribute အကွက်တွင် မမှန်ကန်သော ပုံအတိုင်းအတာများရှိသည်။',
    'distinct'          => ':attribute အကွက်တွင် ထပ်နေသောတန်ဖိုးတစ်ခုရှိသည်။',
    'doesnt_end_with'   => ':attribute အကွက်သည် အောက်ပါများထဲမှ :values တစ်ခုနှင့် အဆုံးမသတ်ရပါ။ ',
    'doesnt_start_with' => ':attribute အကွက်သည် အောက်ပါတို့အနက်မှ :values တစ်ခုနှင့် မစတင်ရပါမည်။',
    'email'             => ':attribute အကွက်သည် မှန်ကန်သော အီးမေးလ်လိပ်စာ ဖြစ်ရပါမည်။',
    'ends_with'         => ':attribute အကွက်သည် အောက်ပါများထဲမှ :values တစ်ခုနှင့် အဆုံးသတ်ရမည်။',
    'enum'              => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'exists'            => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'extensions'        => ':attribute အကွက်တွင် အောက်ပါ extensions: :values များထဲမှ တစ်ခု ရှိရမည်။',
    'file'              => ':attribute အကွက်သည် ဖိုင်တစ်ခု ဖြစ်ရပါမည်။',
    'filled'            => ':attribute အကွက်တွင် တန်ဖိုးတစ်ခု ရှိရပါမည်။',

    'gt' => [
        'array'   => ':attribute အကွက်တွင် :value item များထက် ပိုနေရပါမည်။',
        'file'    => ':attribute အကွက်သည် :value kilobytes ထက် ကြီးရမည်။',
        'numeric' => ':attribute အကွက်သည် :value ထက်ကြီးရမည်။',
        'string'  => ':attribute အကွက်သည် :value စာလုံးများထက် ကြီးရမည်။',
    ],

    'gte' => [
        'array'   => ':attribute အကွက်တွင် :value items သို့မဟုတ် ထို့ထက်ပို၍ ရှိရပါမည်။',
        'file'    => ':attribute အကွက်သည် :value kilobytes ထက်ကြီးသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'numeric' => ':attribute အကွက်သည် :value ထက်ကြီးသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'string'  => ':attribute အကွက်သည် :value စာလုံးများထက် ကြီးသည် သို့မဟုတ် ညီမျှရပါမည်။',
    ],

    'hex_color' => ':attribute အကွက်သည် မှန်ကန်သော hexadecimal အရောင်ဖြစ်ရမည်။',
    'image'     => ':attribute အကွက်သည် ပုံတစ်ပုံဖြစ်ရမည်။',
    'in'        => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'in_array'  => ':attribute အကွက်သည် :other တွင် ရှိနေရပါမည်။',
    'integer'   => ':attribute အကွက်သည် ကိန်းပြည့်ဖြစ်ရမည်။',
    'ip'        => ':attribute အကွက်သည် မှန်ကန်သော IP လိပ်စာဖြစ်ရမည်။',
    'ipv4'      => ':attribute အကွက်သည် တရားဝင် IPv4 လိပ်စာဖြစ်ရမည်။',
    'ipv6'      => ':attribute အကွက်သည် တရားဝင် IPv6 လိပ်စာဖြစ်ရမည်။',
    'json'      => ':attribute အကွက်သည် မှန်ကန်သော JSON စာကြောင်းဖြစ်ရပါမည်။',
    'lowercase' => ':attribute အကွက်သည် စာလုံးသေးဖြစ်ရမည်။',

    'lt' => [
        'array'   => ':attribute အကွက်တွင် :value items ထက် နည်းနေရပါမည်။',
        'file'    => ':attribute အကွက်သည် :value kilobytes ထက်နည်းရမည်။',
        'numeric' => ':attribute အကွက်သည် :value ထက်နည်းရမည်။',
        'string'  => ':attribute အကွက်သည် :value စာလုံးများထက် နည်းနေရပါမည်။',
    ],

    'lte' => [
        'array'   => ':attribute အကွက်တွင် :value items ထက် မပိုရပါ။',
        'file'    => ':attribute အကွက်သည် :value kilobytes ထက်နည်းရမည် သို့မဟုတ် ညီမျှရမည်။',
        'numeric' => ':attribute အကွက်သည် :value ထက် နည်းသည် သို့မဟုတ် ညီမျှရပါမည်။',
        'string'  => ':attribute အကွက်သည် :value အက္ခရာများထက် နည်းရမည် သို့မဟုတ် ညီမျှရမည်။',
    ],

    'mac_address' => ':attribute အကွက်သည် တရားဝင် MAC လိပ်စာဖြစ်ရမည်။',

    'max' => [
        'array'   => ':attribute အကွက်တွင် :max items ထက် မပိုရပါ။',
        'file'    => ':attribute အကွက်သည် :max ကီလိုဘိုက်ထက် မကြီးရပါ။',
        'numeric' => ':attribute အကွက်သည် :max ထက်မကြီးရပါ။',
        'string'  => ':attribute အကွက်သည် :max စာလုံးများထက် မကြီးရပါ။',
    ],

    'max_digits' => ':attribute အကွက်တွင် :max digits ထက် မပိုရပါ။',
    'mimes'      => ':attribute အကွက်သည် ဖိုင်အမျိုးအစား: :values ​​ဖြစ်ရမည်။',
    'mimetypes'  => ':attribute အကွက်သည် ဖိုင်အမျိုးအစား: :values ​​ဖြစ်ရမည်။',

    'min' => [
        'array'   => ':attribute အကွက်တွင် အနည်းဆုံး :min အရာများ ရှိရပါမည်။',
        'file'    => ':attribute အကွက်သည် အနည်းဆုံး :min ကီလိုဘိုက်ရှိရမည်။',
        'numeric' => ':attribute အကွက်သည် အနည်းဆုံး :min ဖြစ်ရမည်။',
        'string'  => ':attribute အကွက်သည် အနည်းဆုံး :min စာလုံးဖြစ်ရမည်။',
    ],

    'min_digits'       => ':attribute အကွက်တွင် အနည်းဆုံး :min digits ရှိရပါမည်။',
    'missing'          => ':attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'missing_if'       => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်သည် ပျောက်ဆုံးနေရပါမည်။',
    'missing_unless'   => ':other သည် :value မဟုတ်ပါက :attribute အကွက်သည် ပျောက်ဆုံးနေရပါမည်။',
    'missing_with'     => ':values ​​ရှိသည့်အခါ :attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'missing_with_all' => ':values ​​ရှိသည့်အခါ :attribute အကွက် ပျောက်ဆုံးနေရပါမည်။',
    'multiple_of'      => ':attribute အကွက်သည် :value ၏ ဆတိုးကိန်းဖြစ်ရပါမည်။',
    'not_in'           => 'ရွေးချယ်ထားသော :attribute သည် မမှန်ကန်ပါ။',
    'not_regex'        => ':attribute အကွက်ဖော်မတ်သည် မမှန်ကန်ပါ။',
    'numeric'          => ':attribute အကွက်သည် နံပါတ်တစ်ခု ဖြစ်ရပါမည်။',

    'password' => [
        'letters'       => ':attribute အကွက်တွင် အနည်းဆုံး စာလုံးတစ်လုံး ပါဝင်ရပါမည်။',
        'mixed'         => ':attribute အကွက်တွင် အနည်းဆုံး စာလုံးအကြီးတစ်လုံးနှင့် စာလုံးသေးတစ်လုံး ပါဝင်ရပါမည်။',
        'numbers'       => ':attribute အကွက်တွင် အနည်းဆုံး နံပါတ်တစ်ခု ပါဝင်ရပါမည်။',
        'symbols'       => ':attribute အကွက်တွင် အနည်းဆုံး သင်္ကေတတစ်ခု ပါဝင်ရပါမည်။',
        'uncompromised' => 'ပေးထားသော :attribute သည် ဒေတာပေါက်ကြားမှုတွင် ပေါ်လာသည်။ မတူညီသော :attribute ကို ရွေးပါ။',
    ],

    'present'              => ':attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_if'           => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_unless'       => ':other သည် :value မဟုတ်ပါက :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_with'         => ':values ​​ရှိသောအခါတွင် :attribute အကွက်သည် ရှိနေရပါမည်။',
    'present_with_all'     => ':values ​​ရှိနေသောအခါတွင် :attribute အကွက်သည် ရှိနေရပါမည်။',
    'prohibited'           => ':attribute အကွက်ကို တားမြစ်ထားသည်။',
    'prohibited_if'        => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို တားမြစ်ထားသည်။',
    'prohibited_unless'    => ':attribute အကွက်ကို :other သည် :values ​​တွင်မရှိပါက တားမြစ်ထားသည်။',
    'prohibits'            => ':attribute အကွက်သည် :အခြားအရာများ ရှိနေခြင်းမှ တားမြစ်ထားသည်။',
    'regex'                => ':attribute အကွက်ဖော်မတ်သည် မမှန်ကန်ပါ။',
    'required'             => ':attribute အကွက် လိုအပ်သည်။',
    'required_array_keys'  => ':attribute အကွက်တွင်: :values ​​အတွက် ထည့်သွင်းမှုများ ပါဝင်ရပါမည်။',
    'required_if'          => ':other သည် :value ဖြစ်သောအခါ :attribute အကွက်ကို လိုအပ်သည်။',
    'required_if_accepted' => ':other ကို လက်ခံသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_unless'      => ':other သည် :values ​​တွင် မရှိလျှင် :attribute အကွက် လိုအပ်ပါသည်။',
    'required_with'        => ':values ​​ရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_with_all'    => ':values ​​ရှိနေသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_without'     => ':values ​​မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'required_without_all' => ':values ​​တစ်ခုမျှ မရှိသောအခါတွင် :attribute အကွက် လိုအပ်သည်။',
    'same'                 => ':attribute အကွက်သည် :other နှင့် ကိုက်ညီရမည်။',

    'size' => [
        'array'   => ':attribute အကွက်တွင် :size အရာများ ပါဝင်ရပါမည်။',
        'file'    => ':attribute အကွက်သည် :size ကီလိုဘိုက် ဖြစ်ရမည်။',
        'numeric' => ':attribute အကွက်သည် :size ဖြစ်ရမည်။',
        'string'  => ':attribute အကွက်သည် :size စာလုံးဖြစ်ရမည်။',
    ],

    'starts_with' => ':attribute အကွက်သည် အောက်ပါများထဲမှ :values တစ်ခုနှင့် စတင်ရပါမည်။',
    'string'      => ':attribute အကွက်သည် string တစ်ခု ဖြစ်ရမည်။',
    'timezone'    => ':attribute အကွက်သည် မှန်ကန်သော အချိန်ဇုန် ဖြစ်ရမည်။',
    'unique'      => ':attribute ကို ယူထားပြီးဖြစ်သည်။',
    'uploaded'    => ':attribute ကို အပ်လုဒ်လုပ်၍မရပါ။',
    'uppercase'   => ':attribute အကွက်သည် စာလုံးအကြီးဖြစ်ရမည်။',
    'url'         => ':attribute အကွက်သည် မှန်ကန်သော URL ဖြစ်ရပါမည်။',
    'ulid'        => ':attribute အကွက်သည် မှန်ကန်သော ULID ဖြစ်ရပါမည်။',
    'uuid'        => ':attribute အကွက်သည် တရားဝင် UUID ဖြစ်ရပါမည်။',

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
