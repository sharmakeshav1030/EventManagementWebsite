/*!
FullCalendar RRule Plugin v4.3.0
Docs & License: https://fullcalendar.io/
(c) 2019 Adam Shaw
*/

(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports, require('rrule'), require('fullcalendar')) :
    typeof define === 'function' && define.amd ? define(['exports', 'rrule', 'fullcalendar'], factory) :
    (global = global || self, factory(global.FullCalendar = global.FullCalendar || {}, global.rrule, global.FullCalendar));
}(this, (function (exports, rrule, fullcalendar) { 'use strict';

    var __assign = function() {
        __assign = Object.assign || function __assign(t) {
            for (var s, i = 1, n = arguments.length; i < n; i++) {
                s = arguments[i];
                for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
            }
            return t;
        };
        return __assign.apply(this, arguments);
    };

    var EVENT_DEF_PROPS = {
        rrule: null,
        duration: fullcalendar.createDuration
    };
    var recurring = {
        parse: function (rawEvent, leftoverProps, dateEnv) {
            if (rawEvent.rrule != null) {
                var props = fullcalendar.refineProps(rawEvent, EVENT_DEF_PROPS, {}, leftoverProps);
                var parsed = parseRRule(props.rrule, dateEnv);
                if (parsed) {
                    return {
                        typeData: parsed.rrule,
                        allDayGuess: parsed.allDayGuess,
                        duration: props.duration
                    };
                }
            }
            return null;
        },
        expand: function (rrule, framingRange) {
            return rrule.between(framingRange.start, framingRange.end, true)
                .filter(function (date) {
                return date.valueOf() < framingRange.end.valueOf();
            });
        }
    };
    var main = fullcalendar.createPlugin({
        recurringTypes: [recurring]
    });
    function parseRRule(input, dateEnv) {
        var allDayGuess = null;
        var rrule$1;
        if (typeof input === 'string') {
            rrule$1 = rrule.rrulestr(input);
        }
        else if (typeof input === 'object' && input) {
            var refined = __assign({}, input);
            if (typeof refined.dtstart === 'string') {
                var dtstartMeta = dateEnv.createMarkerMeta(refined.dtstart);
                if (dtstartMeta) {
                    refined.dtstart = dtstartMeta.marker;
                    allDayGuess = dtstartMeta.isTimeUnspecified;
                }
                else {
                    delete refined.dtstart;
                }
            }
            if (typeof refined.until === 'string') {
                refined.until = dateEnv.createMarker(refined.until);
            }
            if (refined.freq != null) {
                refined.freq = convertConstant(refined.freq);
            }
            if (refined.wkst != null) {
                refined.wkst = convertConstant(refined.wkst);
            }
            else {
                refined.wkst = (dateEnv.weekDow - 1 + 7) % 7;
            }
            if (refined.byweekday != null) {
                refined.byweekday = convertConstants(refined.byweekday);
            }
            rrule$1 = new rrule.RRule(refined);
        }
        if (rrule$1) {
            return { rrule: rrule$1, allDayGuess: allDayGuess };
        }
        return null;
    }
    function convertConstants(input) {
        if (Array.isArray(input)) {
            return input.map(convertConstant);
        }
        return convertConstant(input);
    }
    function convertConstant(input) {
        if (typeof input === 'string') {
            return rrule.RRule[input.toUpperCase()];
        }
        return input;
    }

    exports.default = main;

    Object.defineProperty(exports, '__esModule', { value: true });


    if (exports.globalPlugins) {
      exports.globalPlugins.push(exports.default)
      delete exports.default
    }

})));
//# sourceMappingURL=rrule.js.map
