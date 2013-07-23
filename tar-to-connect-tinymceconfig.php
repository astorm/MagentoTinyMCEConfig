<?php
return array(

//The base_dir and archive_file path are combined to point to your tar archive
//The basic idea is a seperate process builds the tar file, then this finds it
'base_dir'               => '/fakehome/Documents/github/MagentoTinyMCEConfig',
'archive_files'          => 'Pulsestorm_Tinymceconfig.tar',

//The Magento Connect extension name.  Must be unique on Magento Connect
//Has no relation to your code module name.  Will be the Connect extension name
'extension_name'         => 'Pulsestorm_Tinymceconfig',

//Your extension version.  By default, if you're creating an extension from a 
//single Magento module, the tar-to-connect script will look to make sure this
//matches the module version.  You can skip this check by setting the 
//skip_version_compare value to true
'extension_version'      => '0.1.0',
'skip_version_compare'   => false,

//Where on your local system you'd like to build the files to
'path_output'            => '/fakehome/Pulsestorm/var/build-connect',

//Magento Connect license value. 
'stability'              => 'stable',

//Magento Connect license value 
'license'                => 'MIT',

//Magento Connect channel value.  This should almost always (always?) be community
'channel'                => 'community',

//Magento Connect information fields.
'summary'                => 'Provides simple additional configuration for the TinyMCE editor',
'description'            => 'Provides simple additional configuration for the TinyMCE editor',
'notes'                  => 'Provides simple additional configuration for the TinyMCE editor',

//Magento Connect author information. If author_email is foo@example.com, script will
//prompt you for the correct name.  Should match your http://www.magentocommerce.com/
//login email address
'author_name'            => 'Alan Storm',
'author_user'            => 'alanstorm',
'author_email'           => 'foo@example.com',

//PHP min/max fields for Connect.  I don't know if anyone uses these, but you should
//probably check that they're accurate
'php_min'                => '5.2.0',
'php_max'                => '6.0.0'
);