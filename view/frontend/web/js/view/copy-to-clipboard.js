/**
 * @copyright Copyright © 2021 - Schatzmann. All rights reserved.
 * @author João Victor Pereira <vpjoao98@gmail.com>
 * @package Base
 */
define([
    'ko',
    'jquery',
    'uiComponent',
    'mage/translate'
], function (ko, $, Component, $t) {
    'use strict'

    return Component.extend({
        defaults: {
            placeholder: $t('Copy'),
            template: "Schatzmann_Base/view/copy-to-clipboard.html"
        },

        /** Init Component */
        initialize: function () {
            this._super();
        },

        /** Check if target property was passed */
        hasTarget: function () {
            if (!this.target) {
                console.log($t('A target argument is necessary to generate copy-to-clipboard component.'))
            }

            return !!this.target;
        },

        /** Toggle trigger's placeholder text */
        togglePlaceholder: function (elem) {
            if (elem.text() === this.placeholder) {
                elem.addClass('active');
                elem.text($t('Copied'));
                return;
            }

            elem.removeClass('active');
            elem.text(this.placeholder);
        },

        /** Copy target's value to the clipboard */
        copyToClipboard: function (data, event) {
            let self = this;
            let trigger = $(event.currentTarget);
            let target =  trigger.attr('data-copy-target');

            $(target).select();

            navigator.clipboard.writeText($(target).val()).then(() => {
                self.togglePlaceholder(trigger);
                setTimeout(() => {
                    self.togglePlaceholder(trigger);
                }, 3000)
            });
        }
    })
})
