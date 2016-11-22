
function disableBackButton() {
    history.pushState(null, null, window.location);
    window.addEventListener('popstate', function (event) {
        history.pushState(null, null, window.location);
    });
}

function addExitPopup(message) {
    window.onunload = function () { null };
    window.onbeforeunload = function () { return getLeadValue(message); }
    function getLeadValue() {
        return message;
    }
}

function getQueryStringValueByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

function GetOsName() {
    var OSName = 'unknown OS';
    if (navigator.appVersion.indexOf('Win') != -1) OSName = 'Windows';
    if (navigator.appVersion.indexOf('Mac') != -1) OSName = 'MacOS';
    if (navigator.appVersion.indexOf('X11') != -1) OSName = 'UNIX';
    if (navigator.appVersion.indexOf('Linux') != -1) OSName = 'Linux';
    return OSName;
}
