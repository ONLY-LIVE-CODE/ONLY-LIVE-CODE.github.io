(function($)
{
    $.Redactor.prototype.iconic = function()
    {
        return {
            init: function ()
            {
                var icons = {
                    'format': '<i class="iicon iicon-pilcrow iicon-large"></i>',
                    'bold': '<i class="iicon iicon-bold iicon-large"></i>',
                    'italic': '<i class="iicon iicon-italic iicon-large"></i>',
                    'deleted': '<i class="iicon iicon-strikethrough iicon-large"></i>',
                    'lists': '<i class="iicon iicon-list iicon-large"></i>',
                    'link': '<i class="iicon iicon-link iicon-large"></i>',
                    'horizontalrule': '<i class="iicon iicon-minus iicon-large"></i>',
                    'image': '<i class="iicon iicon-picture iicon-large"></i>',
                    'file': '<i class="iicon iicon-paperclip iicon-large"></i>',
                    'clips': '<i class="iicon iicon-bookmark2 iicon-large"></i>',
                    'video': '<i class="iicon iicon-camera iicon-large"></i>',
                    'table': '<i class="iicon iicon-grid iicon-large"></i>',
                    'fullscreen': '<i class="iicon iicon-expand iicon-large"></i>',
                    'html': '<i class="iicon iicon-code iicon-large"></i>',
                    'alignment': '<i class="iicon iicon-text-align-left iicon-large"></i>',
                };

                $.each(this.button.all(), $.proxy(function(i,s)
                {
                    var key = $(s).attr('rel');
 
                    if (typeof icons[key] !== 'undefined')
                    {
                        var icon = icons[key];
                        var button = this.button.get(key);
                        this.button.setIcon(button, icon);
                    }
 
                }, this));
            }
        };
    };

})(jQuery);