document.observe("dom:loaded", function() {
    if(!window.pulsestorm_tinymce_loaded)
    {
        pulsestorm_tinymce_message = 'Please copy js/pulsestorm_tinymceconfig.dist.js to js/pulsestorm_tinymceconfig.js';
        pulsestorm_tinymce_message += ', or disable the Pulsestorm_Tinymceconfig module.'
        $('messages').update('<ul class="messages"><li class="notice-msg">'+pulsestorm_tinymce_message+'</li></ul>')
    }
});