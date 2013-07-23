window.pulsestorm_tinymce_loaded = true;    
if(window.tinyMceWysiwygSetup)
{
    tinyMceWysiwygSetup.prototype.originalGetSettings = tinyMceWysiwygSetup.prototype.getSettings;
    tinyMceWysiwygSetup.prototype.getSettings = function(mode)
    {
        var settings = this.originalGetSettings(mode);
        //add any extra settings you'd like below
        
        //makes "placeholder" a valid element for inputs
        settings.extended_valid_elements = 'input[placeholder|accept|alt|checked|disabled|maxlength|name|readonly|size|src|type|value]';
        return settings;
    }        
}
