/*!
FullCalendar Moment Timezone Plugin v4.3.0
Docs & License: https://fullcalendar.io/
(c) 2019 Adam Shaw
*/

(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('moment'), require('moment-timezone/builds/moment-timezone-with-data'), require('fullcalendar')) :
    typeof define === 'function' && define.amd ? define(['exports', 'moment', 'moment-timezone/builds/moment-timezone-with-data', 'fullcalendar'], factory) :
    (global = global || self, factory(global.FullCalendar = global.FullCalendar || {}, global.moment, global.moment, global.FullCalendar));
}(this, (function (exports, momentNs, momentTimezoneWithData, fullcalendar) { 'use strict';

    var extendStatics = function(d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    function __extends(d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    }

    var moment = momentNs;
    var MomentNamedTimeZone =  (function (_super) {
        __extends(MomentNamedTimeZone, _super);
        function MomentNamedTimeZone() {
            return _super !== null && _super.apply(this, arguments) || this;
        }
        MomentNamedTimeZone.prototype.offsetForArray = function (a) {
            return moment.tz(a, this.timeZoneName).utcOffset();
        };
        MomentNamedTimeZone.prototype.timestampToArray = function (ms) {
            return moment.tz(ms, this.timeZoneName).toArray();
        };
        return MomentNamedTimeZone;
    }(fullcalendar.NamedTimeZoneImpl));
    var main = fullcalendar.createPlugin({
        namedTimeZonedImpl: MomentNamedTimeZone
    });

    exports.default = main;

    Object.defineProperty(exports, '__esModule', { value: true });


    if (exports.globalPlugins) {
      exports.globalPlugins.push(exports.default)
      delete exports.default
    }

})));
//# sourceMappingURL=moment-timezone.js.map
