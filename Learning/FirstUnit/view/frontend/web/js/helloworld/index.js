define([
    "jquery",
    "jquery/ui",
    "domReady!"
], function($){
    "use strict";

    function main(config, element) {

        let $element = $(element);
        let AjaxUrl = config.AjaxUrl;

        let updateTime = ()=> {
            $.ajax({
                showLoader: true,
                url: AjaxUrl,
                data: {},
                dataType: "json",
                type: "GET"
            }).done(data => {
                if (data && data.hasOwnProperty('time')) {
                    $('#timestamp').html(data.time);
                }
            });
        };

        $('#timestamp').click(updateTime);

        updateTime();

    };

    return main;

});