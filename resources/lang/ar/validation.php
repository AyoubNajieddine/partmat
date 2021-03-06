<?php 
return [
 'custom' => [
        'email' => [
            'required' => 'البريد الإلكتروني ضروري',
            'email' => "البريد الإلكتروني مكتوب بطريقة خاطئة",
            'unique' => "هذا البريد الإلكتروني مستعمل سابقا",
        ],
        'password' => [
        	  'required' => "كلمة السر ضرورية",
			  'min' => "يجب أن تتكون كلمة السر من ستة حروف ",
        ],
        'full_name' => [
        	  'required' => "الإسم ضروري",
        ],
        'fname' => [
        		'required' => "الإسم الشخصي ضروري",
        		"max" => "الإسم الشخصي لايجب ان يتعدى 10 حروف",
        ],
        'lname' => [
        		"required" => "الإسم العائلي ضروري",
        		"max" => "الإسم العائلي لايجب ان يتعدى 10 حروف",

        ],
        "old_password" => [
        	"required"=> "كلمة السر الحالية ضرورية",
        ],
	"address" => [
		"required" => "عنوان العقار ضروري",
	],
    ]
];
