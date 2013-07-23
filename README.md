Magento TinyMCE Config
==================================================	
This module makes adding additional settings to the [TinyMCE init call](http://www.tinymce.com/wiki.php/API3:method.tinymce.init) simple.

After installing the module, copy the following file

    js/pulsestorm_tinymceconfig.dist.js
    
to 

    js/pulsestorm_tinymceconfig.js
    
Add your additional settings at the following location in the above file

    var settings = this.originalGetSettings(mode);
    //add any extra settings you'd like below
    
    //makes "placeholder" a valid element for inputs
    settings.extended_valid_elements = 'input[placeholder|accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value]';
    return settings;

