<?php

return [
    'title' => 'Accounts',
    'description' => 'Settings for members',
    'general_description' => 'Basic settings for Real Estate',
    'email' => [
        'title' => 'Real Estate',
        'description' => 'Real estate email configuration',
    ],
    'invoice_settings' => 'Invoice Settings',
    'invoice_settings_description' => 'Settings Invoice information for invoicing',
    'general' => [
        'name' => 'General',
        'description' => 'View and update general settings',
        'form' => [
            'square_unit' => 'Unit of square',
            'square_unit_none' => 'None',
            'square_unit_meter' => 'Square Meter(m²)',
            'square_unit_feet' => 'Square Feet(ft2)',
            'square_unit_yard' => 'Square Yard (yd2)',
            'display_views_count_in_detail_page' => 'Display views count in the detail page?',
            'enable_review_feature' => 'Enable review?',
            'reviews_per_page' => 'Number of reviews per page?',
            'hide_fields_at_consult_form' => 'Hide fields at consult form',
            'mandatory_fields_at_consult_form' => 'Mandatory fields at consult form',
            'enable_custom_fields' => 'Enable custom fields?',
            'hide_projects_in_statuses' => 'Hide project if its status is:',
            'hide_properties_in_statuses' => 'Hide property if its status is:',
            'enabled_projects' => 'Enable projects?',
            'enabled_projects_helper' => 'If you disable this, all projects will be hidden. You may need to remove menu Projects in Appearance -> Menus -> Main menu.',
            'enabled_property_types' => 'Enabled property types',
        ],
    ],
    'currency' => [
        'name' => 'Currency',
        'description' => 'View and update currency settings',
        'form' => [
            'real_estate_convert_money_to_text_enabled' => 'Convert money to text if it is too big?',
            'enable_auto_detect_visitor_currency' => 'Enable auto-detect visitor currency?',
            'auto_detect_visitor_currency_description' => 'It detects visitor currency based on browser language. It will override default currency selection.',
            'add_space_between_price_and_currency' => 'Add a space between price and currency?',
            'thousands_separator' => 'Thousands separator',
            'decimal_separator' => 'Decimal separator',
            'separator_period' => 'Period (.)',
            'separator_comma' => 'Comma (,)',
            'separator_space' => 'Space ( )',
            'name' => 'Name',
            'symbol' => 'Symbol',
            'number_of_decimals' => 'Number of decimals',
            'exchange_rate' => 'Exchange rate',
            'is_prefix_symbol' => 'Position of symbol',
            'is_default' => 'Is default?',
            'remove' => 'Remove',
            'new_currency' => 'Add a new currency',
            'instruction' => 'Please check list currency code here: https://en.wikipedia.org/wiki/ISO_4217',
            'invalid_currency_name' => 'Invalid currency code, it must be in :currencies.',
        ],
    ],
    'account' => [
        'name' => 'Accounts',
        'description' => 'View and update account settings',
        'form' => [
            'real_estate_enabled_login' => 'Allow visitors to login?',
            'enable_recaptcha_in_register_page' => 'Enable reCAPTCHA in the registration page?',
            'enable_recaptcha_in_register_page_description' => 'Need to setup Captcha in Admin -> Settings -> General first.',
            'verify_account_email' => 'Verify account\'s email?',
            'enable_credits_system' => 'Enable credits system (agents need to buy credits to post their properties)',
            'enable_post_approval' => 'Enable post approval?',
            'max_upload_filesize_placeholder' => 'Default: 10',
            'max_upload_filesize' => 'Max upload filesize (MB)',
            'max_property_images_upload_by_agent' => 'Max number of images for each property',
            'property_expired_after_days' => 'Property Expired Time (days)',
            'enable_wishlist' => 'Enable wishlist?',
            'hide_agency_phone' => "Hide agency's phone number?",
            'hide_agent_info_in_property_detail_page' => 'Hide agent info in the property detail page?',
            'disabled_public_profile' => 'Disable public profile?',
            'real_estate_enabled_register' => 'Allow visitors to register account?',
            'hide_agency_email' => "Hide agency's email address?",
        ],
    ],
    'invoice' => [
        'name' => 'Invoice',
        'description' => 'View and update invoice settings',
        'form' => [
            'company_name' => 'Company name',
            'company_address' => 'Company address',
            'company_email' => 'Company email',
            'company_phone' => 'Company phone',
            'company_logo' => 'Company logo',
            'using_custom_font_for_invoice' => 'Using custom font for invoice?',
            'invoice_font_family' => 'Invoice font family (Only work for Latin language)',
            'invoice_support_arabic_language' => 'Support Arabic language in invoice?',
            'enable_invoice_stamp' => 'Enable invoice stamp?',
            'invoice_code_prefix' => 'Invoice code prefix',
        ],
    ],
    'invoice_template' => [
        'name' => 'Invoice Template',
        'description' => 'View and update invoice template',
    ],
    'currencies' => 'Currencies',
];
